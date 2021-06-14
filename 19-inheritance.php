<?php 
    class Person {
        public $name;
        public $age;

        public function __construct($name, $age) {
            $this->name = $name;
            $this->age = $age;
        }

        public function intro() {
            echo "My name is {$this->name} and my age is {$this->age}";
            echo "<br>";
        }

        //access modifier set to protected
        protected function hobby() {
            echo "{$this->name} has a hobby of playing football.";
            echo "<br>";
        }
    }

    class Employee extends Person{
        public function message() {
            echo "{$this->name} works in Infosys";
            echo "<br>";

        //protected properties or methods can be accessed within the class and by classes derived from that class.
        //calling protected method from within derived class
            $this->hobby();
        }

        //Inherited methods can be overridden by redefining the methods (use the same name) in the child class.
        public function intro() {
            echo "My name is {$this->name} and my age is {$this->age} because this is an overridden method";
            echo "<br>";
        }
    }

    //The final Keyword - can be used to prevent class inheritance or to prevent method overriding.
    class FinalPerson {
        final public function intro1() {
            //some code
        }
    }

    $person1 = new Employee('Rohan', 27);
    $person1->intro();
    $person1->message();

?>