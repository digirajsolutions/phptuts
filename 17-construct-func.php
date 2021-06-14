<?php 
    class Person {
        public $name;
        public $age;

        //A constructor allows you to initialize an object's properties upon creation of the object.
        function __construct($name, $age) {
            $this->name = $name;
            $this->age = $age;
        }

        function getName() {
            return $this->name;
        }
        function getAge() {
            return $this->age;
        }
    }

    $person1 = new Person('Rohan', 28);
    echo "Name: " .$person1->getName();
    echo "<br>";
    echo "Age: " .$person1->getAge();

?>