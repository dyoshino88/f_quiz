# f_quiz
クイズとポケモンが大好きな娘の遊び道具として作成。<br>

# DEMO
![f_quiz](https://github.com/dyoshino88/f_quiz/assets/130971236/9dc86fff-b5c3-493f-a1ff-ffe744b7178c)


# Features
多次元配列、関数、if文などを使用<br>
quiz_functions.php：クイズの問題の多次元配列、答えの配列をそれぞれ戻り値として返す関数を定義<br>
index.php：トップページの骨組みと見た目をHTMLとtailwind CSSで実装、以降phpファイルの見た目はこれを踏襲<br>
quiz.php：出題番号と正解数をカウントする変数の定義、初期化し、ユーザが選ぶ選択肢を多次元配列を使って定義、クイズの出題は変数をインクリメントすることで用意した問題文の数だけ出題し、ユーザは回答を選んでquiz_result.phpにPOSTする<br>
quiz_result.php：quiz.phpからPOSTされたユーザの回答の正誤を判定する、if文を使い正解の場合は赤丸の画像を選択肢の上に重ね、不正解の場合は選択肢を白く半透明に変化させる。問題が残っている場合は次の問題へ、問題が終わった場合は結果を表示するresult.phpへ遷移させる<br>
result.php：quiz.phpで定義した正解数をカウントする変数の数値を参照し、正解数を表示する、トップページに戻るボタンを配置<br>

<table>
  <caption>技術選定と選定理由</caption>
  <thead>
    <tr>
      <th>技術</th> <th>選定理由</th>
    </tr>
  </thead>
  <tr>
    <td> PHP </td> <td>HTMLと同じファイルで記述できる</td>
  </tr>
  <tr>
    <td> tailwind CSS </td> <td>別途CSSファイルを用意することなく記載ができ便利</td>
  </tr>
</table>

# Requirement

# Installation

# Usage
クイズを始めるボタンを押し、１０問のクイズをラジオボタンで選択する

# Note

# Author

* dyoshino88

# License
