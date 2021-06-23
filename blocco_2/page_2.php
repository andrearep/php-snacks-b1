<?php

$name_list=['giulia', 'franco', 'pino'];
$name=$_GET['name'];
if(in_array($name, $name_list)){
    echo 'ok';
}else{
    echo 'ko';
};
?>