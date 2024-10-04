<?php

// Q1 変数と文字列
<?php

$name = '油谷';

echo "私の名前は「 $name 」です。";

?>
変数には何が格納できますか？
値

また変数に格納することでどのようなメリットがあるか教えてください！
同じデータを利用できる。新しい値を格納することでデータの入れ替えができる。

シングルとダブルの違いはなにかありますか？
シングルは、左辺の変数に右辺の値を代入するという意味
ダブルは、等しいという意味
// Q2 四則演算
<?php

$x = 5;
$y = 4;

$num = ($x * $y);

var_dump($num);
var_dump($num / 2)

?>
変数xとyに格納している値のデータ型を教えてください！
データ型はintです。

Q3// Q3 日付操作

<?php

date_default_timezone_set('Asia/Tokyo');

$date = new DateTime('now');

echo $date->format('現在時刻は、Y年m月d日 H時i分s秒です。');

?>

date_default_timezone_set('Asia/Tokyo');この記述はなぜ必要ですか？
タイムゾーンを設定しないと正しい時刻が表示されないと考えていましたが、無くても変わらないので必要なかったです。

// Q4 条件分岐-1 if文

<?php

$device = "mac";

if ($device === "mac" || $device === "windows") {
    echo "使用OSは、$device です。";
} 

else {
    echo "どちらでもありません。"; 
}
?>
「===」と「==」で比較する違いを教えて下さい！
＝＝＝は、データ型まで完全一致。＝＝は、値の一致。

if文の条件ですが$device === "mac" || $device === "windows"の後に他にも条件を追加することはできますか？
論理演算子を使用し、複数の条件式を組み合わせることが可能。よって条件の追加は可能です。
// Q5 条件分岐-2 三項演算子

<?php

$age = 20;
$message = ($age > 18) ? '成年です。' : '未成年です。';

echo $message;

?>

条件分岐はif文でも表現できますが三項演算子を使うメリットはなにかありますか！
分岐が2つで変数代入の処理が1つのみの場合に便利です。余分な変数宣言や代入がないため、読みやすいという特徴がある。
// Q6 配列

<?php

$prefectures = ["東京都", "神奈川県", "埼玉県", "栃木県", "千葉県"];
echo "$prefectures[3]と$prefectures[4]は関東地方の都道府県です。";

?>

配列には文字列しか格納できないですか？
文字列以外のデータの格納も可能です。

栃木県と千葉県は配列の要素で数えると4番目と5番目ですが、なぜ3と4番目を取得するのでしょうか？
インデックス番号は0から始まるため、3と4番目になります。
// Q7 連想配列-1

<?php
$todouhuken = [
    '東京都' => '新宿区',
    '神奈川県' => '横浜市',
    '千葉県' => '千葉市',
    '埼玉県' => 'さいたま市',
    '栃木県' => '宇都宮市',
    '群馬県' => '前橋市',
    '茨城県' => '水戸市'
];

foreach ($todouhuken as $kenmei => $kenchou) {
    echo "$kenchou\n";
}
?>

配列と連想配列には違いがありますか？あれば教えて下さい！
違いは、連想配列は要素にラベルを付けられること。

ダブルクォーテーションであれば\nを結合する必要ありますか？
必要なし
// Q8 連想配列-2

<?php

$ken = '埼玉県';
foreach($todouhuken as $kenmei => $kenchou){
    if($kenmei == $ken){
echo "$kenmei の県庁所在地は、$kenchou です。\n";
}
}

?>

// Q9 連想配列-3

<?php

$todouhuken += ['愛知県' => '名古屋市','大阪府' => '大阪'];
foreach($todouhuken as $kenmei => $kenchou){
    if($kenmei == '大阪府' || $kenmei == '愛知県' ){
echo "$kenmei は、関東地方ではありません。\n";
}else{
    echo "$kenmei の県庁所在地は、$kenchou です。\n";
}
}
?>

// Q10 関数-1


<?php

function sayHi($name)
{
    echo $name . "さん、こんにちは。\n";
}

sayHi("金谷");
sayHi("安藤");
?>

関数は定義しただけで実行できますか？
実行できない。呼び出す必要がある。
引数に設定している金谷や安藤はどこで受け取っていますか？

function sayHi($name) で受け取る
// Q11 関数-2


<?php

$price = 1000;
function calcTaxInPrice($price)
{
    $taxInPrice = $price * 1.1;
    return  $price . "円の、商品の税込価格は" . $taxInPrice . "円です。";
}
$taxInPrice = calcTaxInPrice($price);
echo $taxInPrice;

?>

// Q12 関数とif文


<?php

function distinguishNum($n){
    
 if($n % 2 === 0){
  return $n . "は偶数です\n";
 }

 else{
  return $n . "は奇数です\n";
 }
}

echo distinguishNum(11);
echo distinguishNum(24);
?>

// Q13 関数とswitch文

<?php

function evaluateGrade($signal)
{

switch ($signal) {
    case "A":
    case "B";
        return "合格です。\n";
        break;

    case "C":
        return "合格ですが追加課題があります。\n";
        break;

    case "D":
        return "不合格です。\n";
        break;

    default:
        return '判定不明です。講師に問い合わせてください。';
        break;
}
}
echo evaluateGrade("A");
echo evaluateGrade("E");
?>


?>