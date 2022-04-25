<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP | BEGINNER</title>
</head>
<body>

<!-- 변수 & 배열-->
<?php

$name = "seunghwan";

// $name = $name . "(イスンファン)"
$name .= "(イスンファン)";

$info = $name . " 27years old.";

echo "$info";
?>
<hr />

<?php
$arr[0] = 1;
$arr[1] = 2;
$arr[2] = 3;

echo "$arr[0] . $arr[1] . $arr[2]";
echo "<BR>";
?>

<!-- 클래스 정의 & 상속-->
<?php
class Human {
    var $Name;
    var $Age = 20;
    var $Height;
    var $Weight;

    function Eat(){
        echo "Eat!<BR>";
    }
    function Walk(){
        echo "Walk!<BR>";
    }
    function Work(){
        echo "Work!<BR>";
    }
    function Talk($words){
        echo "$words<BR>";
    }
}

$Lee = new Human;
$Lee -> Eat();
$Lee -> Walk();
$Lee -> Work();
$Lee -> Talk($Lee -> Age);

class Baby Extends Human {
    function Cry() {
        echo "bawbawbawbawbawbaw!!<BR>";
    }

    function Sleep() {
        echo "zzZZ~<BR>";
    }
}

$Json = new Baby;
$Json -> Cry();
$Json -> Eat();
$Json -> Sleep();

?>

    
<!-- 외부로부터의 변수 -->
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method=post>  
    <input name=info>  
    <input type=submit value=보내기>  
</form>

<?php
    $data = $_POST['info'];
    echo "폼을 이용해 전송된 값 :";
    echo "$data<BR>\n";
?>

<!-- 상수 -->

<?php
    define("HELLO", "안녕하세요!<BR>\n");
    echo HELLO;
?>

<!-- if문 & while문 -->
<!-- C와 비슷하게 continue, break, switch 존재 -->
<?php
    $a = 8;
    $b = "10";
    if($a > $b){
        echo "$a 가 $b 보다 크다!<BR>\n";
    }
    elseif($b > $a) {
        echo "$b 가 $a 보다 크다!<BR>\n";
    }
    elseif($a == $b) {
        echo "$a 와 $b 는 같다!<BR>\n";
    }
    else {
        echo "제대로 입력을 해주세요!<BR>\n";
    }

    $tmp = 1;
    while ($tmp <= 10) {
        echo $tmp++ . " ";
    }

    echo "<BR>\n";

    for($i=1; $i <=10; $i++) {
        echo "$i <BR>\n";
    }

?>

<!-- 함수 -->

<?php 
function Greeting($name){
    echo "Hello, I'm $name ! <BR>\n";
    return 0; 
}

?>
</body>
</html>