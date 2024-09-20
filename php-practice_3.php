<?php
// Q1 tic-tac問題

<?php
echo "1から100までのカウントを開始します\n";
for ($i = 1; $i <= 100; $i++) {
    if ($i % 4 == 0 && $i % 5 == 0) {
        echo "tic-tac\n";
    } elseif ($i % 4 == 0) {
        echo "tic\n";
    } elseif ($i % 5 == 0) {
        echo "tac\n";
    } else {
        echo "$i\n";
    }
}
?>

// Q2 多次元連想配列

<?php
$personalInfos = [
    [
        'name' => 'Aさん',
        'mail' => 'aaa@mail.com',
        'tel'  => '09011112222'
    ],
    [
        'name' => 'Bさん',
        'mail' => 'bbb@mail.com',
        'tel'  => '08033334444'
    ],
    [
        'name' => 'Cさん',
        'mail' => 'ccc@mail.com',
        'tel'  => '09055556666'
    ],
];

echo $personalInfos[1]["name"] ."の電話番号は" . $personalInfos[1]["tel"] ."です。" ;

?>

<?php

foreach ($personalInfos as $index => $infos){
    $index = $index + 1;
    echo $index ."番目の" . $infos['name'] . "のメールアドレスは"  . $infos['mail'] . "で、電話番号は" . $infos['tel'] . "です。\n";
}

?>

<?php
$ageList = [25, 30, 18];

foreach ($ageList as $key =>$value){
   
    $personalInfos [$key]["age"] = $value;
    var_dump($personalInfos);
}

?>


// Q3 オブジェクト-1
class Student
{
    public $studentId;
    public $studentName;

    public function __construct($id, $name)
    {
        $this->studentId = $id;
        $this->studentName = $name;
    }

    public function attend()
    {
        echo '授業に出席しました。';
    }
    public function sayHi()
    {
        echo '学籍番号' .$this->studentId .  '番の生徒は' .$this->studentName. 'です。' ;
    }
    
}
$yamada = new student('120', '山田');
$yamada->sayHi(); 


?>

// Q4 オブジェクト-2
<?php

class Student
{
    public $studentId;
    public $studentName;

    public function __construct($id, $name)
    {
        $this->studentId = $id;
        $this->studentName = $name;
    }

    public function attend()
    {
        echo $this->studentName. 'はPHPの授業に出席しました。'. '学籍番号:' .$this->studentId ;
    }
    public function sayHi()
    {
        echo '学籍番号' .$this->studentId .  '番の生徒は' .$this->studentName. 'です。' ;
    }
    
}
$yamada = new student('120', '山田');
$yamada->attend('PHP');

?>

// Q5 定義済みクラス
<?php

$date = new DateTime();

$date->setTimezone(new DateTimeZone('Asia/Tokyo'));
$date->modify('-1month');
echo $date->format('Y-m-d') ;

?>
<?php
$date = new DateTime();
$date->setTimezone(new DateTimeZone('Asia/Tokyo'));
$day = new DateTime('1992-4-25');

$diff = $date->diff($day);
echo $diff->format('あの日から%a日経過しました。');


?>