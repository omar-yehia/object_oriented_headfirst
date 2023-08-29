<?php

class Inventory{
    private array $instruments;

    public function __construct(){

    }

    public function addInstrument(Instrument $instrument):void{
        $this->instruments[]=$instrument;
    }
    
    public function getInstrument(string $serialNumebr): Instrument {
        foreach ($this->instruments as $instrument) {
            if($instrument->serialNumber === $serialNumebr){
                return $instrument;
            }
        }
        return null;
    }
    
    public function initializeInventory(){

        $inst_1= new Instrument('serial-1',100.00,[
            'prop_A'=>'aaaaa',
            'prop_B'=>1000.00,
            'prop_C'=>['A','B'],
        ]);

        $inst_2= new Instrument('serial-2',200.00,[
            'prop_A'=>'bbbb',
            'prop_B'=>2000.00,
            'prop_C'=>['C','D'],
        ]);

        $inst_3= new Instrument('serial-3',300.00,[
            'prop_A'=>'ccccc',
            'prop_B'=>3000.00,
            'prop_C'=>['E','F'],
        ]);

        $this->addInstrument($inst_1);
        $this->addInstrument($inst_2);
        $this->addInstrument($inst_3);
        echo 'added 3 instruments';
        echo '<pre>';
        var_dump($this->instruments);

    }

    public function search(array $search_properties): array {
        $matchingInstruments= [];
        foreach ($this->instruments as $instrument) {
            if($instrument->matches($search_properties)){
                $matchingInstruments[]=$instrument;
            }
        }
        return $matchingInstruments;
    }
}
