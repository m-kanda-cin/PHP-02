<?php
// 80点以上なら「優」
// 60点以上なら「良」
// 40点以上なら「可」
// それ以下なら「不可」

// という形で区別し、下記のフォーマットで出力するプログラムを作ってください。
// ○○点は「○」です。

$score = 100; //いくつかのケースで動作確認を行ってください。
$answer = "";

if(is_numeric($score))
{
    if($score >= 80)
    {
        $answer = "「優」";
    }
    else if(80 > $score && $score >= 60)
    {
        $answer = "「良」";
    }
    else if(60 > $score && $score >= 40)
    {
        $answer = "「可」";
    }
    else if(40 > $score)
    {
        $answer = "「不可」";
    }

    $output = $score.'点は'.$answer.'です。';
    echo $output;

}
else
{
    echo "エラーです。";
}

//テストケース
//1.81 2.80 3.79
//4.61 5.60 6.59
//7.41 8.40 9.39
//10.あいうえお