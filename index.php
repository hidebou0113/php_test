<!DOCTYPE html>

<head></head>
<body>

こちらはHTMLです


<?php


$array_1 =[1,2,3];

$array_2=[
    ['赤','青','黄'],
    ['紫','緑','白']
];

echo '<pre>';
var_dump($array_2);

echo '</pre>';

echo $array_2[1][1];

// $array_member=[
//     'name'=>'本田',
//     'height'=>170,
//     'hobby'=>'サッカー'
// ];

echo $array_member['hobby'];

echo '<pre>';
var_dump($array_member);
echo '</pre>';

$array_member_2 = [
    '本田'=>[
        'height'=>170,
        'hobby'=>'サッカー'
    ],
    '香川'=>[
        'height'=>165,
        'hobby'=>'サッカー'
    ]
];

echo $array_member_2['香川']['height'];


echo '<pre>';
var_dump($array_member_2);
echo '</pre>';

$array_member_3 = [
    '1kumi'=>[
        '本田'=>[
            'height'=>170,
            'hobby'=>'サッカー'
        ],
        '香川'=>[
            'height'=>165,
            'hobby'=>'サッカー'
        ]
    ],
    '2kumi'=>[
        '長友'=>[
            'height'=>160,
            'hobby'=>'サッカー'
        ],
        '乾'=>[
            'height'=>176,
            'hobby'=>'サッカー'
        ]
    ]
];

echo $array_member_3['2kumi']['長友']['height'];

echo '<pre>';
var_dump($array_member_3);
echo '</pre>';

$height=90;


if($height==91){
    echo '身長は' . $height . 'cmです';
} else {
    echo '身長は' .$height . 'cmではありません';
}

$signal='blue';

if($signal==='red'){
    echo '止まれ'; 
} else if($signal==='yellow'){
    echo '一旦停止';
} else {
    echo '進む';
}

echo '<br>';

$speed =80;

if($signal==='blue'){
    if($speed>=80){
        echo 'スピード違反';
    }
}

echo '<br>';

$test='';

if(empty($test)){
    echo '変数は空です';
}

echo '<br>';

$signal_1='red';
$signal_2='blue';

if($signal_1==='red'||$signal==='blue'){
    echo '赤と青です';
}

echo '<br>';

$math =80;

$comment =$math>80?'good':'not good';

echo $comment;

echo '<br>';

$members=[
    'name'=>'本田',
    'height'=>170,
    'hobby'=>'サッカー'
];

foreach($members as $member){
    echo $member;
}

echo '<br>';

foreach($members as $key=>$value){
    echo $key . 'は' . $value . 'です';
}

$members_2=[
    '本田'=>[
    'height'=>170,
    'hobby'=>'サッカー'
    ],
    '香川'=>[
        'height'=>165,
        'hobby'=>'サッカー'
    ]
];

foreach($members_2 as $member){
    echo $member;
}

?>
    
</body>
