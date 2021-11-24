<?php

class Reader implements Iterator{
  private $data=[];

  public function current(){ return current($this->data); }
  public function key(){  return key($this->data); }
  public function next(){ return next($this->data); }
  public function rewind(){ return reset($this->data); }
  public function valid(){ return current($this->data)!==false; }

  public function setFile($path){
    $this->data=file_get_contents($path);
  }
  public function getFile(){
    return $this->data;
  }
}

$reader=new Reader();
$reader->setFile("test.html");
// $content=new ArrayObject($reader->getFile());
// $it=$content->getIterator();

file_put_contents("test.html",str_replace(['"title"','name="keywords"', 'name="descriptopn"'], '', $reader->getFile()));
echo $reader->getFile("test.html")

?>