<?php
if (is_dir("core/api")){
    if ($dh = opendir("core/api")){
        while (($file = readdir($dh)) !== false){
            if($file !== "." && $file !== "..") {
                require_once("core/api/".$file);
            }
        }
        closedir($dh);
    }
}


include "core/Facebook/autoload.php";
include "core/PHPMailer/PHPMailerAutoload.php";
