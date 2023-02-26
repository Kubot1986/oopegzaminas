<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home Page</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
        }

        .topnav {
            overflow: hidden;
            background-color: #333;
            margin-bottom: 15px;
        }

        .topnav a {
            float: left;
            color: #f2f2f2;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            font-size: 17px;
        }

        .topnav a:hover {
            background-color: #ddd;
            color: black;
        }

        .topnav a.active {
            background-color: #04AA6D;
            color: white;
        }

        table {
            border: 1px black solid;
            margin: 20px;
        }

        td {
            border: 1px gray solid;
            padding: 5px;
        }
    </style>
</head>
<body>
<header>
    <div class="topnav">
        <a href="/oopex">Input</a>
        <a class="active" href="/oopex/list">Result's List</a>
    </div>
</header>
<main>
    <table>
        <tr>
            <th>Sunaudota (kWh)</th>
            <th>Kaina (EUR)</th>
            <th>Dieninis tarifas</th>
            <th>Created at</th>
            <th>Viso:(eur)</th>
        </tr>
        {foreach $resultList as $key => $result}
            <tr>
                <td>{$result.sunaudota}</td>
                <td>{$result.kaina}</td>
                <td>{$result.dieninis}</td>
                <td>{$result.dateCreated}</td>
                <td>{$result.sunaudota*$result.kaina}</td>
            </tr>
        {/foreach}
    </table>
</main>
</body>
</html>