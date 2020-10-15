<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-15 18:55:22
  from 'C:\xamppp\htdocs\Web-2---TP\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f887efad759a5_43400972',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '634a05c1f2fa01c8c64380b07ceb9d225dd3d259' => 
    array (
      0 => 'C:\\xamppp\\htdocs\\Web-2---TP\\templates\\header.tpl',
      1 => 1602780921,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f887efad759a5_43400972 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilos.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <base href="'.BASE_URL.'">

    
    <title>Tienda Online</title>

</head>

<body>
<header>
<nav class="navbar navbar-expand-lg navbar-light bg-info justify-content-center justify-content-between">
<div>
    <a class="navbar-brand" href="#">Tienda Online</a>
</div>

    

<?php if ($_smarty_tpl->tpl_vars['_SESSION']->value["User"]) {?>
    <div>
        <a class="nav-link bg-danger text-light" href="<?php echo BASE_URL;?>
/logout">LOGOUT</a>
    </div>
<?php } else { ?>
    
    <div>
        <a class="nav-link bg-danger text-light" href="<?php echo BASE_URL;?>
/login">INGRESAR</a>
    </div>
<?php }?>


<div>
    <p class="fecha">1/9/2020</p>
    <p class="ubicacion">Tandil, Argentina</p>
</div>
</nav>
<div class="navbar">
<ul class=" d-flex list-unstyled justify-content-center w-100 justify-content-around">
    <li class="nav-item active border-right border-success">
        <a class="nav-link" href="<?php echo BASE_URL;?>
/home">Home</a>
    </li>
    <li class="nav-item border-right border-success">
        <a class="nav-link" href="<?php echo BASE_URL;?>
/productos">Productos</a>
    </li>
    <li class="nav-item border-right border-success">
        <a class="nav-link" href="<?php echo BASE_URL;?>
/productosAdmin">Administrar Productos</a>
    </li>
    
</ul>
</div>
</header><?php }
}
