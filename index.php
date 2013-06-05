<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="css/skin-<?php echo $_GET["type"]; ?>.css" rel="stylesheet" />
</head>
<body>
<div style="position:fixed;right:0;bottom:0"><a href="#">Top▴</a> </div>
<h1>WebSkin</h1>
<p><a href="?type=default">default</a> | <a href="?type=Red">Red</a> | <a href="?type=Orange">Orange</a> | <a href="?type=Yellow">Yellow</a> | <a href="?type=Green">Green</a> | <a href="?type=Blue">Blue</a> | <a href="?type=Indigo">Indigo</a> | <a href="?type=Violet">Violet</a> </p>
<p>Header: <a href="#headerMain">Main</a>/<a href="#headerSub">Sub</a> | Table: <a href="#tableMain">Main</a>/<a href="#tableSub">Sub</a> | <a href="#btn">Btn</a> | List: <a href="#listMain">Main</a>/<a href="#listSub">Sub</a> | Menu: <a href="#menuMain">Main</a>/<a href="#menuSub">Sub</a> </p>
<a name="headerMain"></a>
<h1>Header(Main)</h1>
<?php
  for($i=1; $i<99; $i++){
    echo "<small>sk_header_main$i ▾</small>";    
    echo "<h1 class=\"sk_header_main$i\">トピックス</h1>";
  }
  ?>
<a name="headerSub"></a>
<h1>Header(Sub)</h1>
<?php
  for($i=1; $i<99; $i++){
    echo "<small>sk_header_sub$i ▾</small>";    
    echo "<h1 class=\"sk_header_sub$i\">トピックス</h1>";
  }
  ?>
<a name="btn"></a>
<h1>Btn</h1>
<?php
  for($i=1; $i<99; $i++){
    echo "<small>sk_btn_$i ▾</small>";    
    echo "<a class=\"sk_btn_$i\">検索</a>";
  }
  ?>
<a name="tableMain"></a>
<h1>Table(Main)</h1>
<?php    
  for($i=1; $i<99; $i++){
    echo "<small>sk_table_main$i ▾</small>";  
    echo "<table class=\"sk_table_main$i\">
    <thead>
      <tr>
      <th>現在の価格</th>
      <th>残り時間</th>
      <th>入札件数</th>
      <th>商品の状態</th>
      </tr>
      </thead>
      <tr>
      <th>1,980 円</th>
      <td>7 日</td>
      <td>10</td>
      <td>中古</td>
      </tr>
    </table>";
  }
  ?>
<a name="tableSub"></a>
<h1>Table(Sub)</h1>
<?php    
    for($i=1; $i<99; $i++){
      echo "<small>sk_table_sub$i ▾</small>";   
      echo "<table class=\"sk_table_sub$i\">
      <thead>
      <tr>
      <th>現在の価格</th>
      <th>残り時間</th>
      <th>入札件数</th>
      <th>商品の状態</th>
      </tr>
      </thead>
      <tr>
      <th>1,980 円</th>
      <td>7 日</td>
      <td>10</td>
      <td>中古</td>
      </tr>
      </table>";
    }
    ?>
<a name="listMain"></a>
<h1>List(Main)</h1>
<?php    
    for($i=1; $i<99; $i++){
      echo "<small>sk_list_main$i ▾</small>";   
      echo "<ul class=\"sk_list_main$i\">
      <li>天気</li>
      <li>スポーツ</li>
      <li>ファイナンス</li>
      <li>テレビ</li>
    </ul>";
    }
    ?>
<a name="listSub"></a>
<h1>List(Sub)</h1>
<?php    
    for($i=1; $i<99; $i++){
      echo "<small>sk_list_sub$i ▾</small>";   
      echo "<ul class=\"sk_list_sub$i\">
      <li>天気</li>
      <li>スポーツ</li>
      <li>ファイナンス</li>
      <li>テレビ</li>
    </ul>";
    }
    ?>
</body>
</html>
