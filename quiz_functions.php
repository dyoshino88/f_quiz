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

    $question0 = ["ピカチュウは何タイプのポケモンでしょうか？", "みず", "ほのお", "でんき"];
    $question1 = ["コイキングは進化すると何になるでしょうか？", "ギャラドス", "アズマオウ", "ヨワシ"];
    $question2 = ["ゼニガメのなきごえはなんでしょうか？", "カメカメ", "ゼニゼニ", "カネカネ"];
    $question3 = ["ヒトカゲのしっぽのとくちょうはなんでしょうか？", "ほのおがともっている", "きれている", "とってもながい"];
    $question4 = ["ニャースのひたいには何がついているでしょうか？", "さかな", "こばん", "ねずみ"];
    $question5 = ["カビゴンは何タイプのポケモンでしょうか？", "くいしんぼう", "かくとう", "ノーマル"];
    $question6 = ["ソーナンスは何色のポケモンでしょうか？", "みずいろ", "きいろ", "ピンク"];
    $question7 = ["フシギバナの背中にあるものはなんでしょうか？", "やしのき", "はな", "いちご"];
    $question8 = ["キャタピーのさいしゅうけいたいはなんでしょうか？", "バタバタ", "バタピー", "バタフリー"];
    $question9 = ["ゲンガーのおぼえるわざはなんでしょうか？", "シャドーボール", "ほうでん", "ブレイブバード"];

    $arr = [$question0, $question1, $question2, $question3, $question4, $question5, $question6, $question7, $question8, $question9];
    return $arr;

}

function getQuizAnswer()
{
    // 各問題の正解の位置を示した配列
    // $answer = ["center", "right", "left", "center", "right", "left", "center", "right", "left", "center"];
    // return $answer;

    $answer = ["right", "left", "center", "left", "center", "right", "left", "center", "right", "left"];
    return $answer;


}
