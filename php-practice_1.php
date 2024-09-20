<?php

// Q1 変数と文字列
<?php

$name = '油谷';

echo "私の名前は「 $name 」です。";

?>

// Q2 四則演算
<?php

$x = 5;
$y = 4;

$num = ($x * $y);

var_dump($num);
var_dump($num / 2)

?>

Q3// Q3 日付操作

<?php

date_default_timezone_set('Asia/Tokyo');

$date = new DateTime('now');

echo $date->format('現在時刻は、Y年m月d日 H時i分s秒です。');

?>

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

// Q5 条件分岐-2 三項演算子

<?php

$age = 20;
$message = ($age > 18) ? '成年です。' : '未成年です。';

echo $message;

?>

// Q6 配列

<?php

$prefectures = ["東京都", "神奈川県", "埼玉県", "栃木県", "千葉県"];
echo "$prefectures[3]と$prefectures[4]は関東地方の都道府県です。";

?>

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

foreach ($todouhuken as $x => $y) {
    echo "$y"."\n";
}
?>

// Q8 連想配列-2

<?php

$ken = '埼玉県';
foreach($todouhuken as $x => $y){
    if($x == $ken){
echo "$x の県庁所在地は、$y です。\n";
}
}

?>

// Q9 連想配列-3

<?php

$todouhuken += ['愛知県' => '名古屋市','大阪府' => '大阪'];
foreach($todouhuken as $x => $y){
    if($x == '大阪府' || $x == '愛知県' ){
echo "$x は、関東地方ではありません。\n";
}else{
    echo "$x の県庁所在地は、$y です。\n";
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

// Q11 関数-2


<?php
$price = 1000;
function calcTaxInPrice($price)
{
    $taxInPrice = $price * 1.1;
    echo $price . "円の、商品の税込価格は $taxInPrice 円です。";
}

calcTaxInPrice($price);

?>

// Q12 関数とif文


<?php

function distinguishNum($n)
{
if($n % 2 === 0){
echo $n . "は偶数です\n";

}else{
echo $n . "は奇数です\n";
}
}
distinguishNum(11);
distinguishNum(24);
?>

// Q13 関数とswitch文

<?php

function evaluateGrade($signal)
{

switch ($signal) {
    case "A":
    case "B";
        echo "合格です。\n";
        break;

    case "C":
        echo "合格ですが追加課題があります。\n";
        break;

    case "D":
        echo "不合格です。\n";
        break;

    default:
        echo '判定不明です。講師に問い合わせてください。';
        break;
}
}
evaluateGrade("A");
evaluateGrade("E");
?>


?>