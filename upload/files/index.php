<?php

if (isset($_SERVER['REQUEST_SCHEME']) and $_SERVER['REQUEST_SCHEME']=='https')
{$uri = 'https://';}
else{$uri = 'http://';}
$redirect_url=$uri.$_SERVER['HTTP_HOST'];
header("location:$redirect_url");

?>