<?php
class Door{
    private bool $isOpen;

    public function __construct(){
        $this->isOpen=false;
    }

    public function open():void{
        $this->isOpen=true;
        echo 'door is open<br>';
        // sleep(3);
        echo 'sleeped for 3 seconds <br>';
        $this->close();
    }

    public function close():void{
        if($this->isOpen==true){
            $this->isOpen=false;
            echo 'door is closed<br>';
            return ;
        }
        echo 'door is already closed!<br>';
    }

    public function getStatus():bool{
        return $this->isOpen;
    }

}