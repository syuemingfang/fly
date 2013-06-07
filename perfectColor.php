<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>Perfect Color</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="css/perfectColor.css" rel="stylesheet" /></head>
<h1>Perfect Color</h1>
https://kuler.adobe.com/
<div style="clear: both">
總覽
</div>
<?php
  for($i=1; $i<9; $i++){
    echo "<div class=\"color$i\"></div>";
  }
?>
<div style="clear: both">
Analogous 類比
</div>
<?php
  for($i=1; $i<6; $i++){
    echo "<div class=\"analogous$i\"></div>";
  }
?>
<div style="clear: both">
Monochromatic 單色
</div>
<?php
  for($i=1; $i<6; $i++){
    echo "<div class=\"monochromatic$i\"></div>";
  }
?>
<div style="clear: both">
Triad 三元素
</div>
<?php
  for($i=1; $i<6; $i++){
    echo "<div class=\"triad$i\"></div>";
  }
?>
<div style="clear: both">
Complementary 互補
</div>
<?php
  for($i=1; $i<6; $i++){
    echo "<div class=\"complementary$i\"></div>";
  }
?>
<div style="clear: both">
Compound 混合
</div>
<?php
  for($i=1; $i<6; $i++){
    echo "<div class=\"compound$i\"></div>";
  }
?>
<div style="clear: both">
Shades 明暗
</div>
<?php
  for($i=1; $i<6; $i++){
    echo "<div class=\"shades$i\"></div>";
  }
?>
</body></html>
