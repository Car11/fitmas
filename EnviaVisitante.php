<?php 
    include("php/Visitante.php");
    $visitante= new Visitante();
    if (isset($_POST['cedula'])) { 
        $visitante->cedula=$_POST['cedula'];        
    }
    else {
        header('Location: Error.html?id=NoPOST_CEDULA');
        exit;
    }
    //
    if (isset($_POST['detalle'])) {
        $visitante->detalle=$_POST['detalle'];
    }
    if (isset($_POST['test'])) {
        $visitante->sala=$_POST['test'];
    }
    //
    $visitante->Existe();
?>