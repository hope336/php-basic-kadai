<!DOCTYPE html>
<html lang="ja">

<head>
   <meta charset="UTF-8">
   <title>PHP基礎編</title>
</head>

<body>
   <p>
   <?php
// Step 1: 連想配列を作成
$item = [
    "名前" => "玉ねぎ",
    "値段" => 200,
    "産地" => "北海道"
];

// Step 2: foreach文でキーと値を出力
foreach ($item as $key => $value) {
    echo $key . "：" . $value . "<br>";
}
?>
   </p>
</body>

</html>