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
    
    //task1 :delete one symbol
    $qoute ="The quick brown fox for jumps over the lazy dog---";
    echo trim($qoute ,"---");
    echo "</br>";

    //task2 :delete symbols from string 
    $mix="1-23/5-:4'5^4/34*";
    $search_str=["*","/","-","+",":","^","'"];
    $replace_str="";
    $result= str_replace($search_str, $replace_str, $mix );
    echo "before remove : $mix </br>";
    echo "after remove : $result ";

    //task3:select first 5 words 
    $qoute1 ="The quick brown fox for jumps over the lazy dog";
    echo "</br>";
    echo implode(' ', array_slice(str_word_count($qoute1, 2), 0, 5));

    //task4:delete comas
    $numeric_str="2,345.43";
    echo "</br>";
    $result1= str_replace(',', '', $numeric_str );
    echo "After removing the comma(,)=",$result1,"</br>";
    //task5:print a to z
    for ($i = 'a',$count=0 ; $i<='z' ; $i++)
    {
        if($count <=25)
        echo "$i";
        $count++;
    }

    //task6:replace word by onther oword
    $qoute2 ="The quick brown fox for jumps over the lazy dog";
    $result2= str_replace('The', 'out', $qoute2 );
    echo "</br>","$result2","</br>";

    //task9:find difference between two strings
    $name="dargonball";
    $name1="dargonboll";
    $count=0;
    for($i=0 ; $i< strlen($name) ; $i++)
    {
        if($name[$i] != $name1[$i])
        { echo "difference between two strings at $i :" .$name[$i];
         echo " vs ".$name1[$i] ;
        }
    }
    //task10

    //task11:print next letter
    $a='a';
    $z='z';
    $a++; 
    $z++;
    echo "</br>" ,"$a";
    echo "</br>" , "$z";

    //task12:to inser string at position 
    $str1="the brown fox";
    $replacement="quick ";
    echo "</br>" ;
    echo substr_replace($str1, $replacement, 4, 0); 
    $value = strstr($str1, "brown");
    echo "</br>" ;
    echo implode(' ', array_slice(str_word_count($str1, 2), 0, 1));

    //task13:remove zeros
    $num="2309450000394384.43";
    $search_str=["0"];
    $replace_str="";
    $result3= str_replace($search_str, $replace_str, $num );
    echo "</br>" ;
    echo "$result3";

    //task14:remove
    $qoute3 ="The quick brown fox for jumps over the lazy dog";
    $search_str=["fox"];
    $replace_str="";
    $result4= str_replace($search_str, $replace_str, $qoute3);
    echo "</br>" ;
    echo "$result4";

    //task1:
    $qoutee ="The quick brown fox for jumps over the lazy dog";
    echo "</br>" ;
    echo strtoupper("$qoutee");
    echo "</br>" ;
    echo strtolower("$qoutee");
    echo "</br>" ;
    echo ucfirst("$qoutee");
    echo "</br>" ;
    echo ucwords("$qoutee");
    echo "</br>" ;

    //task2:date type
    $timee="081219";
    $sym=":";
    $add = substr_replace($timee, $sym, 2, 0); 
    echo substr_replace($add, $sym, 5, 0); 
    echo "</br>" ;

    //task3:
    $word = "orange";
    $mystring = "i am full stack at orange";
 
// Test if string contains the word 
    if(strpos($mystring, $word) !== false){
    echo "Word Found!";
    } else{
    echo "Word Not Found!";
    } echo "</br>" ;

    //task4:
    $filename = basename(parse_url('http://learner.com/learningphp.php?lid=1348')['path']);
    echo "$filename";
    echo "</br>" ;

    //task5:
    $email= 'info@orange.com';
    $username=strstr($email,'@',true);
    echo "$username";
    echo "</br>" ;
    
    //task6:
    $dynam="info@orange.com";
    $newstring = substr($dynam, -3);
    echo $newstring;

    //task7:
    $bytes = random_bytes(16);
    echo "</br>" ;
    echo bin2hex($bytes);




    ?>
</body>
</html>