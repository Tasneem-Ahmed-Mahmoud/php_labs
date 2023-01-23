<?php


class Counter{

private $counter;

  function count(){
    $this->counter=(file_exists(FILE_PATH)?file_get_contents(FILE_PATH):0);
    $fp=fopen(FILE_PATH,"w+");
fwrite($fp,$this->visitor());
echo "number of visetor is $this->counter <br>";
fclose($fp);
    
                   }

private function visitor(){
    if(!isset($_SESSION["is_viseted"])){
        $this->counter =(int)$this->counter+1;
        $_SESSION["is_viseted"]=true;
    }
  return $this->counter;

                            }


}