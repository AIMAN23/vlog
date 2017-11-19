<?php
/**
 * Created by OsaMa Soft.
 * User: OsaMa
 * Date: 19/11/2017
 * Time: 10:18 م
 * IQ TECH Tutorials
 * Project : vlog
 * helper.php
 */
 function clean($text){
    $text = str_ireplace('<','_',$text);
    $text = str_ireplace('>','_',$text);
    $text = str_ireplace('?','_',$text);
    $text = str_ireplace('#','_',$text);
    return $text;
}
function sum ($a , $b){
    return $a+$b;
}