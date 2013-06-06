<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>EST Layout</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="css/es-<?php echo $_GET["type"]; ?>.css" rel="stylesheet" />
<link href="css/eo.css" rel="stylesheet" />
<link href="css/el-<?php echo $_GET["type"]; ?>.css" rel="stylesheet" />
<style>
hr{
  border: 0px;
  background-color: #cccccc;
  height: 1px;
}
</style>
</head>
<body>
  <div class="eo_polaroid">xxx</div>
<div>
<h1>EST</h1>
<cite>style + order + layout</cite>
</div>
<h1>EST Style</h1>
<a href="#">会社概要</a> <a href="#">利用規約</a>
<input type="text" />
<input type="submit" value="検索" />
<div style="position:fixed;right:0;bottom:0"><a href="#">Top▴</a> </div>
<h1>EST Layout</h1>
<p><a href="?type=Default">Default</a> | <a href="?type=Red">Red</a> | <a href="?type=Orange">Orange</a> | <a href="?type=Yellow">Yellow</a> | <a href="?type=Green">Green</a> | <a href="?type=Blue">Blue</a> | <a href="?type=Indigo">Indigo</a> | <a href="?type=Violet">Violet</a> </p>
<p>Header: <a href="#headerMain">Main</a>/<a href="#headerSub">Sub</a> | Table: <a href="#tableMain">Main</a>/<a href="#tableSub">Sub</a> | Btn</a>: <a href="#btnMain">Main</a>/<a href="#btnSub">Sub</a> | List: <a href="#listMain">Main</a>/<a href="#listSub">Sub</a> | Menu: <a href="#menuMain">Main</a>/<a href="#menuSub">Sub</a> | Block: <a href="#blockMain">Main</a>/<a href="#blockSub">Sub</a> </p>
<a name="headerMain"></a>
<h2>Header(Main)</h2>
<?php
  for($i=1; $i<99; $i++){
    echo "<small>el_header_main$i ▾</small>";    
    echo "<h3 class=\"el_header_main$i\">トピックス</h3><hr />";
  }
  ?>
<a name="headerSub"></a>
<h2>Header(Sub)</h2>
<?php
  for($i=1; $i<99; $i++){
    echo "<small>el_header_sub$i ▾</small>";    
    echo "<h3 class=\"el_header_sub$i\">トピックス</h3><hr />";
  }
  ?>
<a name="btn"></a>
<h2>Btn</h2>
<?php
  for($i=1; $i<99; $i++){
    echo "<small>el_btn_$i ▾</small>";    
    echo "<a class=\"el_btn_$i\">検索</a><hr />";
  }
  ?>
<a name="tableMain"></a>
<h2>Table(Main)</h2>
<?php    
  for($i=1; $i<99; $i++){
    echo "<small>el_table_main$i ▾</small>";  
    echo "<table class=\"el_table_main$i\">
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
    </table><hr />";
  }
  ?>
<a name="tableSub"></a>
<h2>Table(Sub)</h2>
<?php    
    for($i=1; $i<99; $i++){
      echo "<small>el_table_sub$i ▾</small>";   
      echo "<table class=\"el_table_sub$i\">
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
      </table><hr />";
    }
    ?>
<a name="listMain"></a>
<h2>List(Main)</h2>
<?php    
    for($i=1; $i<99; $i++){
      echo "<small>el_list_main$i ▾</small>";   
      echo "<h3 class=\"el_header_sub1\">トピックス</h3><ul class=\"el_list_main$i\">
      <li>天気</li>
      <li>スポーツ</li>
      <li>ファイナンス</li>
      <li>テレビ</li>
    </ul><hr />";
    }
    ?>
<a name="listSub"></a>
<h2>List(Sub)</h2>
<?php    
    for($i=1; $i<99; $i++){
      echo "<small>el_list_sub$i ▾</small>";   
      echo "<ul class=\"el_list_sub$i\">
      <li>天気</li>
      <li>スポーツ</li>
      <li>ファイナンス</li>
      <li>テレビ</li>
    </ul><hr />";
    }
    ?>
<a name="blockMain"></a>
<h2>Block(Main)</h2>
<?php    
    for($i=1; $i<99; $i++){
      echo "<small>el_block_main$i ▾</small>";   
      echo "<div class=\"el_block_main$i\">
      天気 スポーツ<br />ファイナンス テレビ
    </div><hr />";
    }
    ?> 
<a name="blockSub"></a>
<h2>Block(Sub)</h2>
<?php    
    for($i=1; $i<99; $i++){
      echo "<small>el_block_sub$i ▾</small>";   
      echo "<div class=\"el_block_sub$i\">
      天気 スポーツ<br />ファイナンス テレビ
    </div><hr />";
    }
    ?>    
</body>
</html>
