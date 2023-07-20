<?php
// 入力された値の設定

if (isset($_POST['times'])) {
    $times = $_POST['times'];
} else {
    // エラー
    $times = 0;
}
if (isset($_POST['num_correct'])) {
    $num_correct = $_POST['num_correct'];
} else {
    // エラー
    $num_correct = 0;
}
?>

<?php
$question0 = ["かぞくはぜんぶでなんにんですか？", "4にん", "5にん", "6にん"];
$question1 = ["いちばんちいさいのはだれですか？", "ぱぱ", "まま", "やまとくん"];
$question2 = ["たんじょうびが1がつなのはだれですか？", "ゆなちゃん", "なおちゃん", "やまとくん"];
$question3 = ["たんじょうびが8がつのおんなのこはだれですか？", "ぱぱ", "なおちゃん", "まま"];
$question4 = ["いちばんおおきいおんなのこはだれですか？", "ぱぱ", "ゆなちゃん", "まま"];
$question5 = ["いちばんとしうえなのはだれですか？", "ぱぱ", "まま", "ゆなちゃん"];
$question6 = ["くるまにのるときにゆなちゃんのひだりにいるのはだれですか？", "なおちゃん", "やまとくん", "まま"];
?>

<?php
$arr = [$question0, $question1, $question2, $question3, $question4, $question5, $question6];

$response_left = $arr[$times][1];
$response_center = $arr[$times][2];
$response_right = $arr[$times][3];
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <title>Quiz</title>
</head>

<body>
    <div class="bg-white pb-6 sm:pb-8 lg:pb-12">
        <div class="mx-auto max-w-screen-2xl px-4 md:px-8">
            <header class="mb-8 flex items-center justify-between border-b py-4 md:mb-12 md:py-8 xl:mb-2">
                <!-- logo - start -->
                <a href="/" class="inline-flex items-center gap-2.5 text-2xl font-bold text-black md:text-3xl" aria-label="logo">
                    <svg width="95" height="94" viewBox="0 0 95 94" class="h-auto w-6 text-indigo-500" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path d="M96 0V47L48 94H0V47L48 0H96Z" />
                    </svg>

                    クイズにちょうせん！！
                </a>
                <!-- logo - end -->

                <!-- nav - start -->
                <nav class="hidden gap-12 lg:flex">
                    <img src="image/ヒコザル.gif" class="w-32 h-32 object-contain">
                    <img src="image/ポッチャマ.gif" class="w-32 h-32 object-contain">
                    <img src="image/ナエトル.gif" class="w-32 h-32 object-contain">
                    <img src="image/ヒノアラシ.gif" class="w-32 h-32 object-contain">
                    <img src="image/ミジュマル.gif" class="w-32 h-32 object-contain">
                </nav>
                <!-- nav - end -->

                <!-- buttons - start -->
                <a href="#" class="hidden rounded-lg bg-gray-200 px-8 py-3 text-center text-sm font-semibold text-gray-500 outline-none ring-indigo-300 transition duration-100 hover:bg-gray-300 focus-visible:ring active:text-gray-700 md:text-base lg:inline-block">けっかをみる</a>

                <button type="button" class="inline-flex items-center gap-2 rounded-lg bg-gray-200 px-2.5 py-2 text-sm font-semibold text-gray-500 ring-indigo-300 hover:bg-gray-300 focus-visible:ring active:text-gray-700 md:text-base lg:hidden">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h6a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd" />
                    </svg>

                    Menu
                </button>
                <!-- buttons - end -->
            </header>

            <section class="flex flex-col items-center">
                <div class="flex max-w-xl flex-col items-center pb-16 pt-8 text-center lg:pb-48 lg:pt-32">
                    <p class="mb-4 font-semibold text-indigo-500 md:mb-6 md:text-lg xl:text-xl">
                        <?php
                        $a = $times + 1;
                        echo 'だい' . $a . 'もん';
                        ?>
                    </p>

                    <h1 class="mb-8 text-4xl font-bold text-black sm:text-5xl md:mb-12 md:text-6xl">
                        <?php echo $arr[$times][0]; ?>
                    </h1>


                    <form method="POST" action="quiz_result.php">
                        <div class="flex w-full flex-col gap-20 sm:flex-row sm:justify-center">
                            <div class="inline-block rounded-lg bg-indigo-500 px-8 py-3 text-center text-sm font-semibold text-white outline-none ring-indigo-300 transition duration-100 hover:bg-indigo-600 focus-visible:ring active:bg-indigo-700 md:text-base">
                                <input id="check-a" type="radio" name="response" value="left" checked><label for="check-a"><?php echo $response_left; ?></label>
                            </div>
                            <div class="inline-block rounded-lg bg-indigo-500 px-8 py-3 text-center text-sm font-semibold text-white outline-none ring-indigo-300 transition duration-100 hover:bg-indigo-600 focus-visible:ring active:bg-indigo-700 md:text-base">
                                <input id="check-b" type="radio" name="response" value="center"><label for="check-b"><?php echo $response_center; ?></label>
                            </div>
                            <div class="inline-block rounded-lg bg-indigo-500 px-8 py-3 text-center text-sm font-semibold text-white outline-none ring-indigo-300 transition duration-100 hover:bg-indigo-600 focus-visible:ring active:bg-indigo-700 md:text-base">
                                <input id="check-c" type="radio" name="response" value="right"><label for="check-c"><?php echo $response_right; ?></label>
                            </div>
                        </div>
                        <input type="hidden" name="times" value=<?php echo $times; ?>>
                        <input type="hidden" name="num_correct" value=<?php echo $num_correct; ?>>
                        <input id="send_button" type="submit" value="これをえらぶ" class="inline-block rounded-lg bg-green-500 px-8 py-3 text-center text-sm font-semibold text-white outline-none ring-indigo-300 transition duration-100 hover:bg-indigo-600 focus-visible:ring active:bg-indigo-700 md:text-base mt-10">
                    </form>

                </div>


        </div>
        </section>
    </div>
    </div>

</body>

</html>