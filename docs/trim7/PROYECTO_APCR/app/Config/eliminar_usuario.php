<?php

    if (!empty($_GET["id"])){
        $id=$_GET["id"];
        $sql=$conexion->query("delete from tb_residente where identificacion=$id");
        if($sql==1){
            echo '<div class="alert alert-danger" role="alert">USUARIO ELIMINADO CORRECTAMENTE</div>'; 
        } else{
            echo '<div class="alert alert-danger" role="alert">ERROR AL ELIMINAR</div>';
        }

    }

?>