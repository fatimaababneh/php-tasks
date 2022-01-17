<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>




<body>
    <?php 

    //task1:

    //task2:unordered list
    $colors=array("green","red","blue");
    echo "<ul>";
    echo "<li>".$colors[0]."</li>"."<li>".$colors[1]."</li>"."<li>".$colors[2]."</li>";
    echo"</ul>";
        
    
    //task3:associative arrays
    $cities= array("Italy"=>"Rome","France"=>"Paris");
    echo "<br>", $cities['Italy']."<br>".$cities['France'];

    //task4:
    $colors=array('green','red','blue');
    echo "<br>",$colors[0];

    //task5:insert
    $arr = [1, 2, 3, 4, 5];
    $pos = 3;
    $val = '$';
 
    array_splice($arr, $pos, 0,$val);

    echo "<br>",$arr[0],$arr[1],$arr[2],$arr[3],$arr[4],$arr[5];
 
    //task6:
    $age = array("d"=>"lemon", "a"=>"orange", "b"=>"banana" , "c"=>"apple");
    sort($age);
    echo "<br>";
    foreach($age as $x => $x_value) {
        echo "Key=" . $x . ", Value=" . $x_value;
        echo "<br>";
    }
    //task7:average
    $temp=array(78,60,62,68,71,68,73,85,66,64,76,63,75,76,73,86,62,73,72,65,74,62,62,65,64,68,73,75,79,73);
    $sum=0;
    foreach($temp as $element ){
        $sum+=$element ;
    }
    echo $sum /(count($temp));

    sort($temp);
    $i=0;
    $num=count($temp);
    $j=$num-6;
    for(; $i<5 ; $i++) {
        echo $temp[$i];
        echo "<br>";
    }
    sort($temp);
    for(; $j<$num ; $j++) {
        echo $temp[$j];
        echo "<br>";
    }
    //task8:
    $arr1=array("color"=>"red",2,4);
    $arr2=array("a","b","color"=>"green","shape"=>"trapezoidal",4);
    $lem=$arr2["color"];
    $arr1["color"]=$lem;

    $arr3=array_merge($arr1,$arr2);
    foreach($arr3 as $key => $element ){
       echo $arr3[$key];
       echo "<br>";
    }
    //task10:longest shortest
    $words= array("abcdes","bedc","ab","x","hgterd");
    $max=strlen($words[0]);
    $min=strlen($words[0]);
    foreach($words as $element){
        if(strlen($element) > $max){
            $max=strlen($element);
        }
        if(strlen($element)< $min)
        {
            $min=strlen($element);
        }

    }
    echo "<br>";
    echo "longest of words in this array is: ". $max ;
    echo "<br>";
    echo "<br>";
    echo "shortest of words in this array is: ". $min ;
    echo "<br>";
    //task1:
    $color=array("red","green","blue");
    // ucwords($color);
    echo strtoupper("$color[0]");
    echo "<br>";
    echo strtoupper("$color[1]");
    echo "<br>";
    echo strtoupper("$color[2]");
    echo "<br>";

    //task2:
    $color1=array("RED","GREEN","BLUE");
    echo strtolower("$color1[0]");
    echo "<br>";
    echo strtolower("$color1[1]");
    echo "<br>";
    echo strtolower("$color1[2]");
    echo "<br>";


    ?>

   
    
</body>




</html>