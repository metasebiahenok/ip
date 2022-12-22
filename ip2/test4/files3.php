<?php
    $file = "text.txt";
    $fp = fopen($file, "a+");

    if($fp)
    {
        echo $file . " is created at " . realpath($file) . "<br>";
        echo "File pointer is located at : " . ftell($fp) . "bytes <br>";
     
        echo "File Size : " . filesize($file) . " bytes <br>";
        echo "File type : " . filetype($file) . " <br>";

        $bytes = fwrite($fp, "Internet programming is a fun course.\n");
        
        if($bytes){
            echo "File is written to " . realpath($file) . " <br>";
        }
        else {
            echo "File is not written <br>";
        }
        
        echo "File pointer now located at  " . ftell($fp) . " bytes <br>";
    }
  
    rewind($fp);

    echo "File pointer is located at fter rewind: " . ftell($fp) . "<br>";
    $data = fread($fp, $bytes);
    if($data){
        echo $data . " <br.";
    }
    else 
        echo "File read is not successfull <br>";

    if(fclose($fp)){
        echo $file . " is closed <br>";
    }
    else{
        echo $file . " is not closed <br>";
    }
?>