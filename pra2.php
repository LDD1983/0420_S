<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>9 x 9</title>
    <style>
        table,tr,td{
            border: 1px solid grey;
            border-collapse: collapse;
        }
        table{
            width: 80%;
            margin: auto;
            text-align: center;
            box-shadow: 5px 5px 5px grey;

        }

    </style>
</head>
<body>
     <h1>99乘法表</h1> 
<?php


echo "<table>";

for ($j=1; $j <=9 ; $j++) { 
    echo"<tr>";
for ($i=1; $i <= 9 ; $i++) { 
    echo"<td>";
    echo "$j x $i = ".$i * $j;    
    echo"</td>";
     }
     echo"</tr>";
    //  echo "<br>";
}

echo "</table>";

echo "<hr>";


echo "<table>";

for ($j=0; $j <=9 ; $j++) { 
    echo"<tr>";
for ($i=0; $i <= 9 ; $i++) { 
    // 不同條件 決定每一格要出現的內容
    echo"<td>" ;
    if ($j==0&&$i==0){
        echo " " ;
    } else 
    if($j==0 ){
        echo $i ;
    } else  
    if($i == 0) {
        echo $j;
    } else 
    
    if($i>$j){
        echo " ";
    }
    else{
        echo $i* $j ;
    }
    echo "</td>";
  

    // echo"<td>";
    // echo  $i * $j;    
    // echo"</td>";
     }
     echo"</tr>";
    //  echo "<br>";
}

echo "</table>";

echo "<hr>";
for ($i=1; $i <= 9 ; $i++) { 
    echo "2 x $i = ".$i * 2;    
    echo "<br>";
}
echo "<hr>";
for ($i=1; $i <= 9 ; $i++) { 
    echo "3 x $i = ".$i * 3;    
    echo "<br>";
}
echo "<hr>";
for ($i=1; $i <= 9 ; $i++) { 
    echo "4 x $i = ".$i * 4;    
    echo "<br>";
}
echo "<hr>";
for ($i=1; $i <= 9 ; $i++) { 
    echo "5 x $i = ".$i * 5;    
    echo "<br>";
}
echo "<hr>";
for ($i=1; $i <= 9 ; $i++) { 
    echo "6 x $i = ".$i * 6;    
    echo "<br>";
}
echo "<hr>";
for ($i=1; $i <= 9 ; $i++) { 
    echo "7 x $i = ".$i * 7;    
    echo "<br>";
}
echo "<hr>";
for ($i=1; $i <= 9 ; $i++) { 
    echo "8 x $i = ".$i * 8;    
    echo "<br>";
}
echo "<hr>";
for ($i=1; $i <= 9 ; $i++) { 
    echo "9 x $i = ".$i * 9;    
    echo "<br>";
}
echo "<hr>";




?>
<?php
for ($i = 1; $i <= 9; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo $j . ' x ' . $i . ' = ' . ($i * $j) . '    ';
    }
    echo "<br>";
}
?>



<hr>

    1 x 1 = 1 <br>
    1 x 2 = 2 <br>
    1 x 3 = 3 <br>
    1 x 4 = 4 <br>
    1 x 5 = 5 <br>
    1 x 6 = 6 <br>
    1 x 7 = 7 <br>
    1 x 8 = 8 <br>
    1 x 9 = 9 <br>
</body>
</html>