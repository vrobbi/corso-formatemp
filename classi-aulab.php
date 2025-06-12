<?php
   class Person {

      public $name;
      public $surname;
      public $age;
      public function __construct($name, $surname, $age){
         $this->name = $name;
         $this->surname = $surname;
         $this->age = $age;
      }

      public function presentati( ){
         echo "Ciao, sono $this->name $this->surname e ho $this->age anni.\n";
      }
   }

   $persona = new Person('Giuseppe', 'Verdi', 56);
   $persona->presentati( );
   //Output
   //Ciao, sono Giuseppe Verdi e ho 56 anni.
?>