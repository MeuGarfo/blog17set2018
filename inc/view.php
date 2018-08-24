<?php
//@chup1m
//24 de agosto de 2018

function view($name,$data=null,$print=true){
    $filename=ROOT.'view/'.$name.'.php';
    if(file_exists($filename)){
        if(is_array($data)){
            extract($data);
        }
        ob_start();
        require $filename;
        $output=ob_get_contents();
        ob_end_clean();
    }else{
        $output='<b>erro</b><br>View '.$filename.' não encontrada';
    }
    if($print){
        print $output;
    }else{
        return $output;
    }
}
 ?>
