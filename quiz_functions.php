<?php
function getQuizData()
{
    // $question0 = ["かぞくはぜんぶでなんにんですか？", "4にん", "5にん", "6にん"];
    // $question1 = ["いちばんちいさいのはだれですか？", "ぱぱ", "まま", "やまとくん"];
    // $question2 = ["たんじょうびが1がつなのはだれですか？", "ゆなちゃん", "なおちゃん", "やまとくん"];
    // $question3 = ["たんじょうびが8がつのおんなのこはだれですか？", "ぱぱ", "なおちゃん", "まま"];
    // $question4 = ["いつもごはんをつくってくれるのはだれですか？", "ぱぱ", "ゆなちゃん", "まま"];
    // $question5 = ["いちばんとしうえなのはだれですか？", "ぱぱ", "まま", "ゆなちゃん"];
    // $question6 = ["くるまにのるときにゆなちゃんのひだりにいるのはだれですか？", "なおちゃん", "やまとくん", "まま"];
    // $question7 = ["ゆふせんせいにおべんきょうをおしえてもらっているのはだれですか？", "やまとくん", "なおちゃん", "ゆなちゃん"];
    // $question8 = ["いまひよこぐみさんなのはだれですか？", "なおちゃん", "ゆなちゃん", "やまとくん"];
    // $question9 = ["くるまをうんてんできるおんなのこはだれですか？", "ゆなちゃん", "まま", "なおちゃん"];


    // $arr = [$question0, $question1, $question2, $question3, $question4, $question5, $question6, $question7, $question8, $question9];
    // return $arr;

    $question0 = ["ゴンベのしんかけいは？", "カビゴン", "バリヤード", "ジラーチ"];
    $question1 = ["スーパーボールよりつかまえやすいボールは？", "ない", "モンスターボール", "ハイパーボール"];
    $question2 = ["コダックのしんかけいは？", "ピカチュウ", "ゴルダック", "ヤドン"];
    $question3 = ["ななほしポケモン・イオルブがキョダイマックスしたすがたのモチーフはなに？", "ふうせん", "パラシュート", "ユーフォー"];
    $question4 = ["このなかででんきタイプのポケモンは？", "コダック", "サンダース", "マダツボミ"];
    $question5 = ["アメタマはあたまのさきからどんなにおいをだす？", "あまい", "くさい", "からい"];
    $question6 = ["バクオングのこえはどこまでく？", "1キロさき", "10キロさき", "50キロさき"];
    $question7 = ["ケムッソのだいこうぶつは？", "はっぱ", "いわ", "かいそう"];
    $question8 = ["ノズパスのはなはなにになっている？", "じしゃく", "フック", "コンパス"];
    $question9 = ["ひでんマシンによっておぼえさせることができるひでんのわざのなまえは？", "れんぞくぎり", "しんくうぎり", "いあいぎり"];

    $arr = [$question0, $question1, $question2, $question3, $question4, $question5, $question6, $question7, $question8, $question9];
    return $arr;

}

function getQuizAnswer()
{
    // 各問題の正解の位置を示した配列
    // $answer = ["center", "right", "left", "center", "right", "left", "center", "right", "left", "center"];
    // return $answer;

    $answer = ["left", "right", "center", "right", "center", "left", "center", "left", "left", "right"];
    return $answer;


}
