<!-- OOP -->
<?php
    // // //класс - шаблок описывающий свойства и методы
    // class Car{
    //     // //тело класса
    //     // //свойства - перемынные обьекта
    //     // //public - модификатор доступа (озщначает, что свойство можно использовать из экземпляра)
    //     public $name = "BMW";
    //     public $color = "Black";

    //     // //метод - функция
    //     public function start(){
    //         echo "<br>";
    //         echo "1,2,3 ... Start!";
    //     }

    //     public function stop(){
    //         echo "<br>";
    //         echo "Stop!";
    //     }
        
    // }

    // // //экземпляр класса
    // $car1 = new Car();
    // var_dump($car1);
    // echo "<br>";
    // // вызываю свойство экземпляра
    // echo $car1->name;
    // // //вызываю метод экземпляра
    // $car1->start();
    // $car1->stop();


    
    // echo "<br>";
    // $car2 = new Car();
    // var_dump($car2);

    // echo "<br>";

    // $car3 = new Car();
    // var_dump($car3);

    // echo "<br>";

// // инкапсуляция
    // class Cat{
    //     private $name = 'dymok';

    //     public $color = 'Orange';
    //     public $height = '27 см';
    //     public $lenght = '46 см';
    //     public $weight = '4 кг';


    //     public function playing(){
    //         echo "<br>";
    //         echo "$this->name : Иду играть)";
    //     }

    //     public function sleep(){
    //         echo "<br>";
    //         echo "$this->name :Иду спать)";
    //     }

    //     public function eat(){
    //         echo "<br>";
    //         echo "$this->name :Иду кушать)";
    //     }

    //     // //геттер - метод который возвращает заприваченные свойства 
    //     public function getName(){
    //         return $this->name;
    //     }

    //     // //сеттер - метод который устанавливает значение для  заприваченного свойства 
    //     public function setName(string $name){
    //         $this->name = $name;
    //     }

        
        
    // }
    
    
    // $dymok = new Cat();
    // $dymok->setName(1);
    // echo $dymok->getName();

    // $dymok->playing();
    // $dymok->sleep();
    // $dymok->eat();

 
// абстракция - указываю свойства и методы без реализации логики
    // class Person{
    //     private $name = '';
    //     private $surname = '';
    //     private $midname = '';
    //     private $age = '';
    //     private $city = '';
    //     private $phone = '';
        

    //     public function fullName(){
    //         return $this->surname . ' ' . $this->name . ' ' . $this->midname ;
    //     }
        
    //     public function getName(){
    //         return $this->name;
    //     }

    //     public function getSurname(){
    //         return $this->surname;
    //     }

    //     public function getMidname(){
    //         return $this->midname;
    //     }

    //     public function getAge(){
    //         return $this->age;
    //     }

    //     public function getCity(){
    //         return $this->city;
    //     }

    //     public function getPhone(){
    //         return $this->phone;
    //     }

    //     // сеттеры
    //     public function setName(string $name){
    //         $this->name = $name;
    //     }

    //     public function setSurname(string $surname){
    //         $this->surname = $surname;

    //     }

    //     public function setMidname(string $midname){
    //         $this->midname = $midname;

    //     }

    //     public function setAge(int $age){
    //         if ( $age < 0){
    //             // вызываю ошибку
    //             die("Ошибка: возраст не может быть меньше нуля");
    //         };
    //         $this->age = $age;

    //     }

    //     public function setCity(string $city){
    //         $this->city = $city;

    //     }

    //     public function setPhone(string $phone){
    //         $this->phone = $phone;

    //     }

    // }

    // $person = new Person();

    // $person->setAge(1);

    // $person->setName("Pavel");
    // $person->setMidname("Shark");
    // $person->setSurname("Sharkovich");

    // echo $person->fullName();



// // для наследования нужно использовать protected вместо private
// // наследование
// // родительский класс



    interface Bark {
        public function bark();
    }

    interface Bark2 {
        public function bark();
        public function bark2();
    }

    interface Bark3 {
        const ROAR = 'РЫРЫРЫРЫРРЫ';
    }

    class Animal implements Bark3 // подключение интерфейса
    {
        protected $roar;

        // магический метод - метод который вызывается в определенный момент
        public function __construct($roar){
            $this->roar = $roar;
        }



        public function bark(){
            echo "<br>";
            echo ' '.$this->roar;
            echo ' '. Bark3::ROAR;
        }

        public function bark2(){
          
        }

    }

    // // дочерние классы
    class Cat extends Animal{ // extends для наследования

        public function __construct(){
            parent::__construct('Мяу');
        }



        // переопределение метода
        public function bark(){
            echo "<br>";
            echo '(><) '.$this->roar;
        }
        
    }

    class Dog extends Animal{

        public function __construct(){
            parent::__construct('Гафффф');
        }



        // переопределение метода
        public function bark(){
            echo "<br>";
            echo parent::bark() . ' im dog'; // вызываю родительский метод
     
        }

    }

        
    class Monkey extends Animal{
        private $food;

        public function __construct($roar, $food){
            parent::__construct($roar);
            $this->food = $food;
        }



        // переопределение метода
        public function bark(){
            echo "<br>";
            echo $this->roar.' кушает и рычит '.$this->food ; // вызываю родительский метод
     
        }



    

    }





    $animal = new Animal("Rrrrrrrr");
    
    $cat = new Cat();
    $dog = new Dog();

    $animals = [
        $animal,
        $cat,
        $dog,
        new Monkey("Бананы", 'уауауауаа  на обезьяньем')
    ];

    foreach($animals as $a){
        $a->bark();
    }



    // // Полиморфизм
    // function myPrint($str){
    //     echo "<br>";
    //     echo $str.' ';
    // }

    // myPrint('Meow');
    // myPrint(1);


    
 
?>