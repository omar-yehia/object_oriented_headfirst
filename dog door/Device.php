<?php
class Device{
    private array $barks=[];
    private Door $door;
    
    public function __construct(Door $door){
        $this->door=$door;
    }

    public function addBark(string $bark):void{
        $this->barks[]=$bark;
    }

    public function initializeBarks():void{
        $bark_1= "woff";
        $bark_2= "wuff";
        $bark_3= "haohao";
        $this->addBark($bark_1);
        $this->addBark($bark_2);
        $this->addBark($bark_3);
    }

    private function validateBark(string $bark):bool{
        return in_array($bark,$this->barks);
    }

    public function getBarks():array{
        return $this->barks;
    }

    public function openForBark(string $bark):void{
        if(!$this->validateBark($bark)){
            echo 'invalid bark<br>';
            return ;
        }
        echo 'valid bark!<br>';
        $this->door->open();
    }
}
