<?php
    trait Redirect{
        function redirect($path){
            header("Location:" . $_SESSION['project-path'] . $path);
            exit();
        }
    }
?>