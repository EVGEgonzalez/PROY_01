<?php
    // Borrado del archivo de instalacion
    if(file_exists("php/config/instalacion_admin.php")){
        unlink("php/config/instalacion_admin.php");
    }
