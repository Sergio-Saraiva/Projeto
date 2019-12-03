<?php
    include 'classes/Planeta.php';

    $planeta = new Planeta();

    $planeta->id = $_GET['id'];

    $planeta->apagarPlaneta();

    header("Location: consulta-planeta.php");

    
?>