<?php

if (isset($_SERVER['REQUEST_SCHEME']) and $_SERVER['REQUEST_SCHEME']=='https')
{$uri = 'https://';}
else{$uri = 'http://';}
$redirect_url=$uri.$_SERVER['HTTP_HOST'];
header("location:$redirect_url");


/*function myAutoLoad($class) {
    $class=strtolower($class);

    $classFile= $obj->baseurl.'/fusebox/class/'.$class.'.php';
    echo $classFile;
    if(is_file($classFile)&&!class_exists($class)) include $classFile;
}

spl_autoload_register('myAutoLoad');*/

?>


