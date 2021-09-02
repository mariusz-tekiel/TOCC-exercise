<?php 
// ============= CLASS ===============
    // In Object Oriented PHP objects are created using classes. 
    // The class describes what the object will be.
    // The class can be also thought as an object's blueprint. 
    
class Animal {
    public $name;   
    public $color;
    
    public function __construct($name, $color) {
        $this->name = $name;
        $this->color = $color;
    }
    
    public function info() {
        echo "The animal {$this->name} and the color is {$this->color}.";
    }    
}

class Dog extends Animal {
    public function message() {
        echo "I am a dog";
    }
}

$dog = new Dog("Rex", "brown");
$dog->message();
$dog->info();





// ==========  OBJECT ============
// An "object" is an instance of a class, and you can create multiple instances of the same class.
// For example we can create many objects of the class Animal.

    $animal1 = new Animal("Elephant", "Grey");
    $animal2 = new Animal("Cat", "Black");
    $animal3 = new Animal("Mouse", "Grey");


// ==========  METHOD ============
   // A method is a function used inside a class.

    // The function info() is a method of the class Animal;    
    // We can call this method in following way:
    
    $animal = new Animal("Elephant", "Grey");
    $animal->info();


// ==========  CLASS INHERITANCE ============
    // The inheritance happens When a class derives from another class.
    // The child class will inherit all the public and protected properties and methods from the parent class. In addition, it can have its own properties and methods.
    // An inherited class is defined by using the extends keyword.
    // The Class Dog in our example inherits from the class Animal properties $name, $color and method info()
      

// ==========  METHOD OVERLOADING ============
//    Overloading lets us dynamically create properties and methods. 
//    The overloading methods are invoked when interacting with properties or methods that have not been visible in the current scope. 

    public __set(string $name, mixed $value): void
    public __get(string $name): mixed
    public __isset(string $name): bool
    public __unset(string $name): void

    // __set() is run when writing data to inaccessible (protected or private) or non-existing properties.

    // __get() is utilized for reading data from inaccessible (protected or private) or non-existing properties.

    // __isset() is triggered by calling isset() or empty() on inaccessible (protected or private) or non-existing properties.

    // __unset() is invoked when unset() is used on inaccessible (protected or private) or non-existing properties.

// ==========  SINGLETON ============

    // A singleton is a particular kind of class that can be instantiated only once.
    // It means that if an object of that class was already instantiated, the system will return it instead of creating new one.
    // It happens because sometimes, you need a global one instance or because creating a copy of an already existent object is not sensible.

   // eg.
   
    class DBConn {

        private static $obj;

        private final function  __construct() {
            echo __CLASS__ . " initializes only once\n";
        }

        public static function getConn() {
            if(!isset(self::$obj)) {
                self::$obj = new DBConn();
            }
            return self::$obj;
        }
    }

    $obj1 = DBConn::getConn();
    $obj2 = DBConn::getConn();

    var_dump($obj1 == $obj2);

    //Output:

   // DBConn initializes only once
   // bool(true)
    