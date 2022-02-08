<?php

    class Man{
        public $program;
        function myName(){
            echo "My Name Is Munna\n";
        }
        function favname(){
            echo "My Fovourit Pograming Langouge is {$this->program}";
        }
    }
    $info1  = new Man();
    $info1->myName();

    $info2  = new Man();
    $info2 -> program = "PHP";
    $info2->favname();










?>