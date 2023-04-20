<h1>閏年</h1>
<ul>
<li>公元年分除以4不可整除，為平年。</li>
<li>公元年分除以4可整除但除以100不可整除，為閏年。</li>
<li>公元年分除以100可整除但除以400不可整除，為平年。</li>
</ul>
<p>轉換描述</p>
<ul>
<li>公元年分除以4可整除，為閏年。</li>
<li>公元年分除以4可整除但除以100不可整除，為閏年。
     <div>1.除以4可整除</div>
     <div>2.除以100不可整除</div>
     <div>兩個條件同時成立使用AND&&</div>

</li>
<li>公元年分除以400可整除，為閏年。</li>
<div>1.100可整除 => 平年</div>
<div>2.400可整除 => 閏年</div>
<div>3.4可整除 => 閏年</div>
<div>4.若一為真使用or ||</div>
</ul>

<hr>


<?php

  $year=2400;

  if ($year%4 == 0){
    echo $year .' 是閏年';
  }
  
  else{
    echo $year .' 不是閏年';
  }

  echo "<hr>";

  if (($year % 4 == 0) && ($year %100 !=0)  || $year % 400 == 0) {
    echo $year .' 是閏年';
  }
  
  else{
    echo $year .' 不是閏年';
  }

  echo '<hr>';



  $bear = 'F';
$panda = 'T';

$koala = ($panda AND $bear);
$firefox = $panda && $bear;

$teddy = $bear OR $panda;
$freddy = $bear || $panda;

echo $koala;
echo $firefox;
echo $teddy;
echo $freddy;




  ?>

