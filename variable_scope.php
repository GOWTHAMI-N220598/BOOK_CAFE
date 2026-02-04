<?php
$stringVar="WELCOME TO PHP";
echo $stringVar."<br>";
$intVar=5;
echo $intVar. "<br>";
$floatVar=2.2;
echo $floatVar. "<br>";
$boolVar=true;
echo $boolVar. "<br>";
$arrayVar=array("latex","html","css","js","php");
print_r($arrayVar)."<br>";

echo "<br>1.local scope<br>";

function localscopedemo(){
    $localVar =" i am local";
    echo "LOCAL SCOPE VARIABLE:".$localVar . "<br>";

}
localscopedemo();


echo "<br>2. Global scope<br>";

$globalVar = "I am global variable";

function globalscopedemo() {
    global $globalVar;
    echo "GLOBAL SCOPE VARIABLE: " . $globalVar . "<br>";
}

globalscopedemo();





echo "<br>3. Static scope<br>";

function staticscopedemo() {
    static $count = 0;
    $count++;
    echo "STATIC COUNT: " . $count . "<br>";
}

staticscopedemo();
staticscopedemo();
staticscopedemo();

?>