<?php

require('base.php');

$url="http://114.215.189.210/api.php/Api/Recipe/skillsList";
$post_data=array();
$oupput=curlPost($url,$post_data);

print_r($oupput);

?>
