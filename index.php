<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>Jet Layout</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="css/fs-<?php echo $_GET["type"]; ?>.css" rel="stylesheet" />
<link href="css/fo.css" rel="stylesheet" />
<link href="css/fl-<?php echo $_GET["type"]; ?>.css" rel="stylesheet" />
<link href="css/style.css" rel="stylesheet" />
</head>
<h1>Fastest</h1>
<cite>style + order + layout</cite>
</div>
<h1>Fastest Style</h1>
<a href="#">会社概要</a> <a href="#">利用規約</a>
<input type="text" />
<input type="submit" value="検索" />
<div style="position:fixed;right:0;bottom:0"><a href="#">Top▴</a> </div>
<h1>Fastest Layout</h1>
<p><a href="?type=Default">Default</a> | <a href="?type=Red">Red</a> | <a href="?type=Orange">Orange</a> | <a href="?type=Yellow">Yellow</a> | <a href="?type=Green">Green</a> | <a href="?type=Blue">Blue</a> | <a href="?type=Indigo">Indigo</a> | <a href="?type=Violet">Violet</a> </p>
<p>Header: <a href="#headerMain">Main</a>/<a href="#headerSub">Sub</a> | Table: <a href="#tableMain">Main</a>/<a href="#tableSub">Sub</a> | Btn</a>: <a href="#btnMain">Main</a>/<a href="#btnSub">Sub</a> | List: <a href="#listMain">Main</a>/<a href="#listSub">Sub</a> | Menu: <a href="#menuMain">Main</a>/<a href="#menuSub">Sub</a> | Block: <a href="#blockMain">Main</a>/<a href="#blockSub">Sub</a> </p>
<a name="headerMain"></a>
<h2>Header(Main)</h2>
<?php
  for($i=1; $i<99; $i++){
    echo "<small>fl_header_main$i ▾</small>";    
    echo "<h3 class=\"fl_header_main$i\">トピックス</h3><hr />";
  }
  ?>
<a name="headerSub"></a>
<h2>Header(Sub)</h2>
<?php
  for($i=1; $i<99; $i++){
    echo "<small>fl_header_sub$i ▾</small>";    
    echo "<h3 class=\"fl_header_sub$i\">トピックス</h3><hr />";
  }
  ?>
<a name="btn"></a>
<h2>Btn</h2>
<?php
  for($i=1; $i<99; $i++){
    echo "<small>fl_btn_$i ▾</small>";    
    echo "<a class=\"fl_btn_$i\">検索</a><hr />";
  }
  ?>
<a name="tableMain"></a>
<h2>Table(Main)</h2>
<?php    
  for($i=1; $i<99; $i++){
    echo "<small>fl_table_main$i ▾</small>";  
    echo "<table class=\"fl_table_main$i\">
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
      echo "<small>fl_table_sub$i ▾</small>";   
      echo "<table class=\"fl_table_sub$i\">
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
      echo "<small>fl_list_main$i ▾</small>";   
      echo "<h3 class=\"fl_header_sub1\">トピックス</h3><ul class=\"fl_list_main$i\">
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
      echo "<small>fl_list_sub$i ▾</small>";   
      echo "<ul class=\"fl_list_sub$i\">
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
      echo "<small>fl_block_main$i ▾</small>";   
      echo "<div class=\"fl_block_main$i\">
      天気 スポーツ<br />ファイナンス テレビ
    </div><hr />";
    }
    ?>
<a name="blockSub"></a>
<h2>Block(Sub)</h2>
<?php    
    for($i=1; $i<99; $i++){
      echo "<small>fl_block_sub$i ▾</small>";   
      echo "<div class=\"fl_block_sub$i\">
      天気 スポーツ<br />ファイナンス テレビ
    </div><hr />";
    }
    ?>
</body></html>
