<?php
// Q1 変数と文字列
$name = '鈴木';

echo "私の名前は「" . $name . "」です。";

// Q2 四則演算
$num = 5 * 4;

echo $num . "\n";

$num /= 2;

echo $num;

// Q3 日付操作
date_default_timezone_set('Asia/Tokyo');
echo "現在の時刻は、" . date("Y年m月d日 H時i分s秒") . "です。";

// Q4 条件分岐-1 if文
$device = 'mac';

if(($device == 'mac') || ($device == 'windows')) {
  echo '使用OSは、' . $device . 'です。';
} else {
  echo 'どちらでもありません。';
}



// Q5 条件分岐-2 三項演算子
$age = 12;

$judge = ($age > 18) ? '成人です。' : '未成年です。';

echo $judge;

// Q6 配列
$regions = ['東京都', '茨城県','群馬県', '栃木県', '千葉県', '埼玉県', '神奈川県'];

echo "$region[3]と$region[4]は関東地方の都道府県です。";


// Q7 連想配列-1
$cities = [
  '東京都' => '新宿区',
  '茨城県' => '水戸市',
  '群馬県' => '前橋市',
  '栃木県' => '宇都宮市',
  '千葉県' => '千葉市',
  '埼玉県' => 'さいたま市',
  '神奈川県' => '神奈川市'
];

foreach($cities as $city) {
  echo $city . "\n";
}

// Q8 連想配列-2
foreach($cities as $key => $city) {
  if($key == '埼玉県') {
      echo $key . 'の県庁所在地は、' . $city . 'です。';
      break;
  }
}
// Q9 連想配列-3
$cities['愛知県'] = '豊田市';
$cities['大阪府'] = '大阪市';

foreach($cities as $key => $city){
  if(!($key == '愛知県' || $key == '大阪府')){
    echo $key . 'の所在地は、' . $city . 'です。' . "\n";
  } else {
    echo $key . 'は関東地方ではありません' .  "\n";
  }
}


// Q10 関数-1
function hello($name) {
  echo $name . 'さん、こんにちは。' . "\n";
}

hello("鈴木");
hello("山田");

// Q11 関数-2
function calcTaxInPrice($price) {
  return $price * 1.1;
}

$taxInPrice = '1000円の商品の税込価格は' . calcTaxInPrice(1000) . '円です。';

echo $taxInPrice;


// Q12 関数とif文
function distinguishNum($number) {
  if ($number % 2 == 0) {
    return $number . 'は偶数です。' . "\n";
  }else {
    return $number . 'は奇数です。' . "\n";
  }
}

echo distinguishNum(3);
echo distinguishNum(60);


// Q13 関数とswitch文
function evaluateGrade($grade) {
  switch($grade) {
      case 'A' :
          return '合格です。' . "\n";
      case 'B' :
          return '合格です。' . "\n";
      case 'C' :
          return '合格ですが追加課題があります。' . "\n";
      case 'D' :
          return '不合格です。' . "\n";
      default :
          return '判定不明です。講師に問い合わせてください。' . "\n";
      
  }
}

  echo evaluateGrade("D");
  echo evaluateGrade("E");

?>