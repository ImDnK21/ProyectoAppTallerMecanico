<?php 
session_start();
$title = "";
require_once("config/settings.php");
include_once("components/header.php");
?>

<!-- Contenido -->





<form class="row g-3">

<div class="row" style='margin: 30px'>
    <form class="col s12">
    
      <div class="row">
        <div class="input-field col s6">
            
          <input placeholder="Ingrese su nombre" id="nombre_cliente" type="text" class="validate">
          <label for="nombre_cliente">Nombre </label>
        </div>
        <div class="input-field col s6">
          <input placeholder ='apellido'id="apellido_cliente" type="text" class="validate">
          <label for="apellido">Apellido </label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="password" type="password" class="validate">
          <label for="password">Password</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="email" type="email" class="validate">
          <label for="email">Email</label>
        </div>
      </div>
      <div class="row">
        <div class="col s12">
          This is an inline input field:
          <div class="input-field inline">
            <input id="email_inline" type="email" class="validate">
            <label for="email_inline">Email</label>
            <span class="helper-text" data-error="wrong" data-success="right">Helper text</span>
          </div>
        </div>
      </div>
    </form>
  </div>


</form>


<?php 
include_once("components/footer.php"); 
?>