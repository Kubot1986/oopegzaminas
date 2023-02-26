<?php
/* Smarty version 4.3.0, created on 2023-02-26 13:22:48
  from 'C:\xampp\htdocs\oopex\src\View\list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63fb4f18b3e4a2_35598289',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6578c6821caf1cffa15cbad5509a2627f4a3df4a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\oopex\\src\\View\\list.tpl',
      1 => 1677414166,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63fb4f18b3e4a2_35598289 (Smarty_Internal_Template $_smarty_tpl) {
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
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['resultList']->value, 'result', false, 'key');
$_smarty_tpl->tpl_vars['result']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['result']->value) {
$_smarty_tpl->tpl_vars['result']->do_else = false;
?>
            <tr>
                <td><?php echo $_smarty_tpl->tpl_vars['result']->value['sunaudota'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['result']->value['kaina'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['result']->value['dieninis'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['result']->value['dateCreated'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['result']->value['sunaudota']*$_smarty_tpl->tpl_vars['result']->value['kaina'];?>
</td>
            </tr>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </table>
</main>
</body>
</html><?php }
}
