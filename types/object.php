<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Object</title>
    <link rel="stylesheet" href="./../style.css">
</head>

<body>
    <h1>PHP Object</h1>
    <p>Classes and objects are the two main aspects of object-oriented-programming.</p>
    <dl>
        <dt>Class</dt>
        <dd>Template for objects</dd>
        <dt>Object</dt>
        <dd>An instance of a class</dd>
    </dl>
    <p>When the individual objects are created, they inherit all the properties and behaviors from the class, but each
        object will have different values for the properties
    </p>

    <p>Use
        <strong>__construct()</strong>
        function, PHP will automatically call this function
        when we create an object.
    </p>

    <?php 
    class Car {
        public $color;
        public $model;
        public function __construct($color, $model) {
            $this->color = $color;
            $this->model = $model;
        }
        public function message(){
            return "My car is a " . $this->color ." ". $this->model ."!";
        }
    }
    $car3 = new Car("red", "Volvo");
    var_dump($car3);    
    ?>
    
</body>

</html>