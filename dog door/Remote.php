<?php

class Remote{
    private Door $door;

    public function __construct(Door $door){
        $this->door=$door;
    }

    public function pressButton():void{
        if($this->door->getStatus){
            $this->msgToClose();
            return;
        }
        $this->msgToOpen();
    }
    public function msgToOpen():void{
        echo 'will try to open the door <br>';
        $this->door->open();
    }

    public function msgToClose():void{
        echo 'will try to close the door<br>';
        $this->door->close();
    }

}