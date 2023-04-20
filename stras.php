<style>
    *{
        font-family: 'Courier New', Courier, monospace;
    }

</style>


<?php
for ($i = 0; $i < 5; $i++) {
    for ($j = 0; $j < ($i + 1); $j++) {
        echo "*";
    }
    echo "<br>";
}

echo "<hr>";

for ($i = 0; $i < 5; $i++) {
    for ($j = 0; $j < (5 - $i); $j++) {
        echo "*";
    }
    echo "<br>";
}
echo "<hr>";

?>


<?php
echo "<hr>";
for ($i = 0; $i < 5; $i++) {
    for ($j = 0; $j < (4 - $i); $j++) {
        echo "&nbsp;";
    }

    for ($k = 0; $k < ($i * 2 + 1); $k++) {
        echo "*";
    }
    echo "<br>";
}
?>
<h1>菱形</h1>

<?php

for ($i = 0; $i < 5; $i++) {
    for ($j = 0; $j < (4 - $i); $j++) {
        echo "&nbsp;";
    }
    for ($k = 0; $k < ($i * 2 + 1); $k++) {
        echo "*";
    }
    echo "<br>";
}
for ($i = 0; $i < 4; $i++) {
    for ($j = 0; $j < $i+1 ; $j++) {
        echo "&nbsp";
    }
    for ($k = 0; $k < ((3 - $i)* 2 + 1); $k++) {
        echo "*";
    }
    echo "<br>";
}

?>
<h1>菱形2 $temp</h1>

<?php

$temp=0 ;


for ($i = 0; $i < 9; $i++) {
    // if ($i<5){
    //     $temp=$i;
    // }else
    // {$temp=8-$i;


    // }
    // $var=(條件式)?真:假;

    $temp=($i<5)?$i:8-$i;


    for ($j = 0; $j < (4 - $temp); $j++) {
        echo "&nbsp;";
    }
    for ($k = 0; $k < ($temp * 2 + 1); $k++) {
        echo "*";
    }
    echo "<br>";
}

?>

<h1>菱形2 $temp $n </h1>

<?php

$temp=0 ;
$n=11 ;
$n=($n%2==0)?$n+1:$n;
for ($i = 0; $i < $n; $i++) {
    // if ($i<5){
    //     $temp=$i;
    // }else
    // {$temp=8-$i;

    // }
    // $var=(條件式)?真:假;
    $temp=($i<ceil($n/2))?$i:$n-1-$i;
    

    for ($j = 0; $j < (ceil($n/2)-1 - $temp); $j++) {
        echo "&nbsp;";
    }
    for ($k = 0; $k < ($temp * 2 + 1); $k++) {
        echo "*";
    }
    echo "<br>";
}

?>

<h1>矩形</h1>
<?php

$n=13;
for ($i = 0; $i < $n; $i++) {
    for ($j = 0; $j < $n; $j++) {
        if($i==0 || $i==($n-1)){
            echo "*";
        }else if ($j==0 || $j==$n-1){
            echo "*";
        }else {
            echo "&nbsp;";
        }
        
    }
    echo "<br>";
}

echo "<hr>";

?>

<h1>矩形 與 對角線</h1>

<?php

$n=15;

for ($i = 0; $i < $n; $i++) {
    for ($j = 0; $j < $n; $j++) {
        if($i==0 || $i==($n-1)||$j==0 || $j==$n-1||$i==$j || $i==$n-1-$j){
            echo "*";
        // }else 
        // if ($j==0 || $j==$n-1){
        //     echo "*";
        // }else 
        // if($i==$j || $i==$n-1-$j){
        //     echo "*";

        } else 
        {
            echo "&nbsp;";
        }
        
    }
    echo "<br>";
}

echo "<hr>";

?>





