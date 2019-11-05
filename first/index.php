<form action="about.php" method = "POST">
    <input type="text" name="myname"> <br>
    <button>Submit</button>
</form>


<?php
error_reporting( E_ALL);
//echo "Hello world" . " q  aLL";

$number = 1;
$number2 = 2;
#echo $number + $number2;

#integer 123123
#sting "dasda"
#Float 3.15
#Boolean true,false (0,1)
#Null
#Array
#Object
#Callable
#Resourse

$massive = ["John", "Petya", "May", "April", "Fuck"];

$massive2 = [
    "name" => "Kael",
    "age" => 21,
    "surname" => "Petya"
];

//foreach ($massive2 as $massqwer) {
//    echo $massqwer . "\n";
//}

for ($i = 0; $i < count($massive); $i++) {
    echo $massive[$i] . "\n";
}

$people = array(
    array('name' => 'Kalle', 'salt' => 856412),
    array('name' => 'Pierre', 'salt' => 215863)
);


echo "";
#echo $massive2["name"] . $massive2["age"];



function walk()
{
    echo "<br/><br/>";
    echo "Поднять левую ногу <br/>";
    echo "Поднять правую ногу <br/>";
    echo "Оттолкнуться";
}

function cook($ingridients, $meal)
{
    echo "<br/><br/>";
    echo "Беру $ingridients <br/>";
    echo "Готовлю ...  <br/>";
    return "Блюдо $meal готово <br/>";

}

walk();
$meal = cook("жопку курицы, петю, жору", "Куриная жопа с преправами");

echo "<br/>Результат $meal<br/>";

$massive3 = [
    "name" => "John",
    "age" => "wqe"
];


//var_dump($massive3);

//echo $_GET['name'];

//var_dump($_GET);

var_dump($_SERVER);

