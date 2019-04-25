<html>
<head>
    <title>Clases y Objetos en PHP7</title>
</head>

<body>

<?php
//http://www.brainbell.com/tutorials/php/php7-oop-beginners.html
function asignadora(&$a,$b){
    $a=$b;
}
$a=1;
$b=2;
asignadora($a,$b);
print ("a vale ".$a."<br/>\n");


class Usuario{

    private $name;
    public $age;

    public function __construct($name="",$age=0) {
        $this->name=$name;
        $this->age=$age;
    }
    //getter
    public function getName(){
        return $this->name;
    }
    //setter
    public function setName($name){
        $this->name=$name;
    }


}

$miusuario=new Usuario();
$miusuario->age=21;
$miusuario->setName("pepe");
print ($miusuario->age);
print ($miusuario->getName());
$otro_usuario=new Usuario("pepe",23);



//Clase usuario
class User {
    private $name;
    private $gender;
    public $age;
    private $department = 'Mechanical';

    public function setName($name){
        $this->name = $name;
    }
    public function getName(){
        return $this->name;
    }

    public function setGender($gender){
        $this->gender = $gender;
    }
    public function getGender(){
        return $this->gender;
    }

    public function setDepartment($dep){
        $this->department = $dep;
    }
    public function getDepartment(){
        return $this->department;
    }
}

$user = new User();
$user->setName('Sheri');
$user->setGender('F');

//public property : no error, accessible from anywhere
$user->age = 30;

//Fatal error: Cannot access private property
//Private and protected methods can not be access directly
//$user->department = 'Computer';

//The right way to assign value for protected and private methods
$user->setDepartment('Computer');


echo $user->getName();
echo $user->getDepartment();
echo $user->age;

//Fatal error: Cannot access private property User::$department
//echo $user->department;

/* You can make as many instance as you want */
$user2 = new User();

//prints Mechanical (default value for all instances)
echo $user2->getDepartment();

//changed the default department
$user2->setDepartment('Computer');



interface Shape {
    public function area();
}


class Circle implements Shape {
    private $radius;

    public function __construct($radius) {
        $this -> radius = $radius;
    }

    public function area() {
        return $this -> radius * $this -> radius * pi();
    }
}


class Rectangle implements Shape {
    private $width;
    private $height;

    public function __construct($width,$height) {
        $this -> width  = $width;
        $this -> height = $height;
    }


    public function area() {
        return $this -> width * $this -> height;
    }
}

$objeto=null;
$variable=1;
if($variable==1){
    $objeto = new Rectangle(3,3);
}else{
    $objeto = new Circle (5);
}

echo $objeto -> area();





class Human {
    protected $name;

    public function __construct($name){
        $this->name = $name;
    }
}



class Person extends Human {
    /* no constructor, adapted the parent constructor */
    public function getName(){
        /*Will return name property defined in parent class*/
        return $this->name;
    }
}


//constructor function inherited from the parent
$person = new Person('Kelly');
echo $person->getName();



class Vehiculo{
    public $ruedas;
    public $matricula;
    public $marca;

    public function __construct(
        $ruedas=0,
        $matricula="",
        $marca="")
    {
        $this->ruedas=$ruedas;
        $this->matricula=$matricula;
        $this->marca=$marca;
    }

    public function getRuedas(){
        return $this->ruedas;
    }

    public function setRuedas($ruedas){
        $this->ruedas=$ruedas;
    }
    public function getMatricula(){
        return $this->matricula;
    }

    public function setMatricula($matricula){
        $this->matricula=$matricula;
    }
    public function getMarca(){
        return $this->marca;
    }

    public function setMarca($marca){
        $this->marca=$marca;
    }
}

$vehiculo=new Vehiculo();

class Coche extends Vehiculo{

    public $puertas;

    public function __construct(
            $ruedas = 0, $matricula = "",
            $marca = "",$puertas=0)
    {
        $this->puertas=$puertas;
        parent::__construct($ruedas, $matricula, $marca);
    }
    public function getPuertas(){
        return $this->puertas;
    }

    public function setPuertas($puertas){
        $this->puertas=$puertas;
    }
}

$coche= new Coche();

echo $coche->marca;
$coche2=new Coche(4,"0987ABC","Seat",5);

abstract class Products {
    protected $name;
    protected $type;

    public function __construct($name, $type){
        $this->type = $type;
        $this->name = $name;
    }

    public function getType() {
        return $this->type;
    }

    public function getName() {
        return $this->name;
    }

    abstract public function getTypeName();
}


class Product extends Products {
    public function getTypeName() {
        return $this -> name .':'. $this -> type;
    }
}

$product = new Product('Paper','80g');
echo $product->getTypeName();



interface Animal {
    public function breath();
    public function eat();
}

class Dog implements Animal{
    //new method
    public function bark() {
        return 'wof';
    }

    //implemented methods
    public function breath() {
        return 'breathing';
    }

    public function eat() {
        return 'eating';
    }
}

$dog = new Dog();
echo $dog -> breath(); //breathing
echo $dog -> bark(); //wof
echo $dog -> eat(); //eating



class Author {
    private $name;
    private $email;

    public function __construct($name,$email){
        $this->name = $name;
        $this->email = $email;
    }

    public function getName(){
        return $this->name;
    }

    public function getEmail(){
        return $this->email;
    }
}

class Book {
    //using array to allow multiple authors
    private $authors = array();
    private $price;
    private $name;

    public function __construct($name,$price){
        $this->name = $name;
        $this->price = $price;
    }

    public function setPrice($price){
        $this->price = $price;
    }

    public function getPrice(){
        return $this->price;
    }

    public function getName(){
        return $this->name;
    }

    public function addAuthor($name,$email){
        $this->authors[] = new Author($name,$email);
    }

    public function getAuthors(){
        return $this->authors;
    }
}

$book = new Book('Book Name',10.0);
$book -> addAuthor('Kelly','kelly@brainbell.com');
$book -> addAuthor('Ken','ken@brainbell.com');

/* print book info */
echo $book -> getName();
echo $book -> getPrice();

/* print book's authors info */
$authors = $book -> getAuthors(); //Array of authors
foreach ($authors as $author) {
    echo $author -> getName();
    echo $author -> getEmail();
}

echo "Nombre del primer autor: ".$book->getAuthors()[0]->getName();


class Autor {
    private $name;
    private $email;

    public function __construct($name,$email) {
        $this->name = $name;
        $this->email = $email;
    }

    public function getName() {
        return $this->name;
    }

    public function getEmail(){
        return $this->email;
    }
}

class Libro {
    private $authors;
    private $price;
    private $name;

    public function __construct($name,$price,$author){
        $this->name = $name;
        $this->price = $price;
        $this->author = $author;
    }

    public function setPrice($price){
        $this->price = $price;
    }

    public function getPrice(){
        return $this->price;
    }

    public function getName(){
        return $this->name;
    }
    public function getAuthor(){
        return $this->author;
    }
}

$author = new Autor('Kelly','kelly@brainbell.com');
$book = new Libro('Book Name',10.0,$author);

echo $book->getName(); //Book Name
echo $book->getAuthor() -> getName(); //Kelly
echo $book->getAuthor() -> getEmail(); //kelly@brainbell.com
?>

<ul>
    <li><a href="index.php">Volver al Inicio</a></li>
</ul>
</body>
</html>