<?php
/*
$dir = '.';

$phpArr = [];
$foldersArr = [];

// SEARCH
function scan($dir){
    $dir = glob($dir.'/*');
    for($i = 2; $i < count($dir); $i++){
       // echo 'circle num# '.$i;
        $check = preg_split("/[\s.]+/",$dir[$i]);
        if($check[count($check)-1] == 'jpg'){
            //array_push($phpArr,$files[$i]);
            echo 'find ' ;
            
        }
        else if(is_dir($dir[$i])){
            scan($dir[$i]);
            echo 'scaning '.$dir[$i];
        }
    }
}

scan($dir);
*/

// DELETE DIRECTORY

$dir = 'tyjtyj';



function scan($dir){
    
    $dir = glob($dir.'/*');
    for($i = 0; $i < count($dir); $i++){
        
        if(is_dir($dir[$i])){
            
            if(count($dir[$i]) == 0){
                rmdir($dir[$i]);
            }
            else{
                scan($dir[$i]);
            }  
            
        }
        else{
            unlink($dir[$i]);
        }
        
    }
    
}
scan($dir);

?>