<?php 
    class Person {
        //setting properties
        public $name;
        public $age;
        public $hobbies;

        //creating methods
        function setName($name) {
            $this->name = $name;
        }
        function getName() {
            return $this->name;
        }
        function setAge($age) {
            $this->age = $age;
        }
        function getAge() {
            return $this->age;
        }
    }

    $austin = new Person();
    $austin->setName('Steve Austin');
    $austin->setAge(32);

    echo "Name: " .$austin->getName();
    echo "<br/>";
    echo "Age: " .$austin->getAge();
    echo "<br/>";
    var_dump($austin instanceof Person);

?>