<?php
/* Smarty version 4.3.0, created on 2023-02-26 13:08:16
  from 'C:\xampp\htdocs\oopex\src\View\homePage.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63fb4bb0095ef3_93184437',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ec63345cb1f0b950038024bd7979391c21b4142d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\oopex\\src\\View\\homePage.tpl',
      1 => 1677413290,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63fb4bb0095ef3_93184437 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
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
    </style>
</head>
<body>
<header>
    <div class="topnav">
        <a class="active" href="/oopex">Input</a>
        <a href="/oopex/list">Result's List</a>
    </div>
</header>
<main>
    <form method="post" action="/oopex/create">
        <fieldset>
            <legend>Duomenu deklaravimas</legend>
            <table>
                <tr>
                                        <td>
                        <label for="sunaudota">Sunaudota</label>
                        <input id="sunaudota" name="sunaudota" type="number" required placeholder="sunaudota">
                    </td>
                    <td>
                        <label for="kaina">Kaina</label>
                        <input id="kaina" name="kaina" step="0.01" type="number" required placeholder="kaina">
                    </td>
                    <td>
                        <label for="dieninis">Dieninis tarifas</label>
                        <input id="dieninis" name="dieninis" type="checkbox"  placeholder="dieninis">
                    </td>
                    <td>
                        <label for="parinktaData">Parinkta data</label>
                        <input id="parinktaData" name="parinktaData" type="date" required placeholder="pasirinktaData">
                    </td>
                    <td>
                        <input type="submit" value="Skaiciuoti kaina">
                    </td>
                </tr>
            </table>
        </fieldset>
    </form>
</main>
</body>
</html><?php }
}
