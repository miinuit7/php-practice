<?php
// Q1 tic-tac問題
for($i = 1; $i <= 100; $i++) {
  if(($i % 4 == 0) && ($i % 5 ==0)) {
      echo 'tic-tac' . "\n";
  } elseif($i % 5 == 0) {
      echo 'tac' . "\n";
  } elseif($i % 4 == 0) {
      echo 'tic' . "\n";
  } else{
      echo $i  . "\n";
  }
}


// Q2 多次元連想配列
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

echo  $personalInfos[1]['name'] . 'の電話番号は' . $personalInfos[1]['tel'] . 'です。' . "\n";

foreach($personalInfos as $key => $personalInfo) {
    echo $key + 1 . '番目の' .  $personalInfo['name'] . 'のメールアドレスは' . $personalInfo['mail'] . 'で、電話番号は' . $personalInfo['mail']  . 'です。' . "\n";
}


$ageList = [25, 30, 18];


foreach($ageList as $key => $val) {
    $personalInfos[$key]['age'] = $val;

    var_dump($personalInfos);
}

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

    public function attend($lang)
    {
        echo  $this->studentName . 'は' . $lang . 'の授業に出席しました。' . '学籍番号:' . $this->studentId . "\n";
    }
}

$yamada = new Student(120, '山田');
$yamada->attend('PHP');


echo '学籍番号' . $yamada->studentId . '番の生徒は' . $yamada->studentName . 'です。';


// Q4 オブジェクト-2
// オブジェクト-1と同時に記載してます


// Q5 定義済みクラス
$date = new DateTime();
echo $date->format('Y-m-d'), PHP_EOL;

$nowDate = new DateTime('2024-10-09');
$oldDate = new DateTime('1992-04-25');

$diff = $oldDate->diff($nowDate);

echo 'あの日から' . $diff->days . '日経過しました。';

?>