<?php

$url = $_POST['Url'];

$ch = curl_init();  
$timeout = 10; // set to zero for no timeout  
curl_setopt ($ch, CURLOPT_URL,$url);  
curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);   
curl_setopt ($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/34.0.1847.131 Safari/537.36');  
curl_setopt ($ch, CURLOPT_CONNECTTIMEOUT, $timeout);  
$html = curl_exec($ch);  
echo $html;  

?>