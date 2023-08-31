
<?php
    $bar = 'world!' ;
    $var_int = 123;
    echo 'Hello, ' . $bar  ;
    echo "<br>";
    echo "\n" . $bar . $var_int;
    echo "<br>";

    // операторы присваивания
    $bar = 1;
    $foo = $bar;
    echo $bar; 
    echo "<br>";
    echo $foo;

    //операторы арифмитические
    $add    = 1 + 1;
    $sub    = 2 - 1;
    $mul    = 2 * 4;
    $div    = 15 / 4;
    $moduls = 5 % 2;
    $exp    = 5 ** 2 ; // возведение в степень
    echo $add , ' ' , $sub ,' ' ,  $mul  ,' ' , $div  ,' ' , $moduls,' ' , $exp   ;
    echo "<br>";

    //операторы арифмитические
    $bar = 2;
    $foo = 1;
    $res1 = $bar == $foo; // проверка на равенство
    $res2 = $bar === $foo; // проверка на тождественное равенство
    $res3 = $bar != $foo; // проверка на неравенство
    $res4 = $bar < $foo; // проверка на меньше
    $res5 = $bar > $foo; // проверка на больше
    $res6 = $bar <= $foo; // меньше или равно
    $res7 = $bar >= $foo; // больше или равно

    echo $res1 , ' ' , $res3 , ' ' , $res4 , ' ' , $res5 , ' ' , $res6 , ' ' , $res7 ;
    echo "<br>";

    // логические операторы
    // && - логическое И
    // || - логическое ИЛИ
    // !  - not  ОТРИЦАНИЕ
    // xor - исключающее ИЛИ (если один операнд true а другой false вернет true)

    $a = true;
    $b = false;
    // true and false 
    // 5 > 4  and 3 > 7  
    $c = $a && $b ; // false 
    $c = !$a; //  false
    // // 5 > 4  or 3 > 7   
    $c = $a || $b ;  // true
    $c = $a xor $b ;  // true

    // арифмитические операторы   с операторами присвоения 
    $counter = 1;

    $counter = $counter + 2;
    // или 
    $counter +=  2;

    // аналогично
    $counter -=  2;
    $counter *=  2;
    $counter /=  2;
    $counter %=  2;
    
    // . для сложения строк
    $str = 'test';
    $str = $str . 'bar';
    $str .=  'bar';


    echo $str;
    echo "<br>";

    // инкремент и декремент ++ --
    // инкремент
    $i = 1;
    $i = $i + 1;
    $i +=  1;
    $i++; // возвращает а потом увеличивает
    ++$i; //увеличиваем а потом возвращаем

    // декремент
    $i = 1;
    $i = $i - 1;
    $i -=  1;
    $i--; // возвращает а потом увеличивает
    --$i; //увеличиваем а потом возвращаем

    // пример 
    $i = 2;
    $x = $i++;  // x = 2 i = 3   
    // i = 3
    $y = ++$i;  // y = 4 i = 4   
    // i = 4
    $z = $i--;  // z = 4 i = 3  

    echo "i = $i  x = $x  y = $y  z = $z";
    echo "<br>";


    $i1 = 0;
    $i2 = 0;
    // 0  !=   1
    $i1++ != ++$i2 ; //true

    // 1 == 1
    $i1 == $i2 ; //true


    echo "<br>";

    // функции - часть кода которую мы можем вызывать по названию

    //непринимающая невозвращающая
    function myFunc(){
        echo "<br>";
        echo "Hello";
    }

    //принимающая невозвращающая
    function myFuncVar($str){
        echo "<br>";
        echo "Hello ".$str;
    }

    //принимающая возвращающая
    function add($x, $y){
       return $x + $y;
    }

    function mul($x, $y){
        return $x * $y;
    }

    function div($x, $y){
        return $x / $y;
    }

    function sub($x, $y){
        return $x - $y;
    }



    myFunc();
    myFunc();

    myFuncVar('Pavel');
    
    $total = add(1,2);
    echo $total;
    echo "<br>";

    // условный оператор и switch

    $myName = 'Игорь';

    if ($myName == 'Игорь') {
        echo 'привет Игорь';
    } else if($myName == 'Иван'){
        echo 'привет Иван';
    } else if($myName == 'Олег'){
        echo 'привет Олег';
    } else {
        echo 'привет Гость';
    }

    echo "<br>";

    // switch
    $myName = 'Игорь';
    switch ($myName) {
        case 'Игорь':
            echo 'привет Игорь';
            break;
        case 'Иван':
            echo 'привет Иван';
            break;
        case 'Олег':
            echo 'привет Олег';
            break;
        default:
            echo 'привет Гость';
            break;
    }
    
    echo "<br>";

    $myAge = 23;

    if ($myAge > 10 && $myAge <= 17) {
        echo 'подростковый возраст';
    } else if($myAge > 17 && $myAge <= 21){
        echo 'юношеский возраст';
    } else if($myAge > 21 && $myAge <= 60){
        echo 'зрелый возраст';
    } else {
        echo 'другой период';
    }

    echo "<br>";

        //массивы 
    $arr = [1,2,3,4];
    echo $arr[0]; // вывод по индексу 1 
    echo "<br>";
    echo min($arr) ; 
    echo "<br>";
    echo max($arr) ; 





    echo "<br>";
        // ассоциативные массивы (обжект, словарь)

    $price = [
        'iphone13' => 100000,
        'iphone12' => 60000,
        'iphone11' => 50000,
    ];


    echo $price['iphone13'];
    echo "<br>";
    
    echo "<br>";
    echo "<br>";

    // for
    for($i = 0; $i < 10 ; $i++){
        echo $i;
    };

    echo "<br>";
    // while
    $j = 0;
    while ($j < 10){
        echo $j++;
    };

    echo "<br>";

    // do while
    $g= 0;
    do {
        echo $g++;
    }while ($g < 0);


    echo "<br>";

    $price = [
        'iphone13' => 100000,
        'iphone12' => 60000,
        'iphone11' => 50000,
    ];
    // foreach перебора ассоциативных массивов
    foreach ($price as $key => $value) {
        # code...
        echo  'Name:' . $key . ':$' . $value . '<br>';
    };

?>



