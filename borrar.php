<?php
include_once('bd/operaciones.php');
header('location:index.php');
$id=isset($_GET['id'])?$_GET['id']:0;
borrar($id);