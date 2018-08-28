<?php
//@chup1m
//28 de agosto de 2018

function slug($text,$set=true){
    if($set){
        $text=str_replace(' ', '_', $text);
        $text=urlencode($text);
    }else{
        $text=str_replace('_', ' ', $text);
        $text=urldecode($text);
    }
    return $text;
}
?>
