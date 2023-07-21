<?php
include 'quiz_functions.php';
// getQuizData()関数を呼び出してデータを取得
$arr = getQuizData();
// getQuizAnswer()関数を呼び出して各問題の正解の位置を示した配列を取得
$answer = getQuizAnswer();
?>

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

$response_left = $arr[$times][1];
$response_center = $arr[$times][2];
$response_right = $arr[$times][3];

$response = $_POST['response'];
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
            <header class="mb-8 flex items-center justify-start border-b py-4 md:mb-6 md:py-8 xl:mb-2">
                <!-- logo - start -->
                <a class="inline-flex items-center gap-2.5 text-2xl font-bold text-black md:text-3xl" aria-label="logo">
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

                <button type="button" class="inline-flex items-center gap-2 rounded-lg bg-gray-200 px-2.5 py-2 text-sm font-semibold text-gray-500 ring-indigo-300 hover:bg-gray-300 focus-visible:ring active:text-gray-700 md:text-base lg:hidden">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h6a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd" />
                    </svg>

                    Menu
                </button>
                <!-- buttons - end -->
            </header>

            <?php
            if ($response == $answer[$times]) {
                $t_or_f = 1;
                $num_correct++;
            } else {
                $t_or_f = 0;
            }
            if ($t_or_f == 1) {
            ?>

                <div class="text-4xl font-bold text-red-500 text-center mt-4">
                    せいかい
                </div>
            <?php
            } else {
            ?>
                <div class="text-4xl font-bold text-red-500 text-center mt-4">
                    ざんねん
                </div>
            <?php }
            ?>

            <section class="flex flex-col items-center">
                <div class="flex max-w-xl flex-col items-center pb-16 pt-8 text-center lg:pb-12 lg:pt-4">
                    <p class="mb-4 font-semibold text-indigo-500 md:mb-6 md:text-lg xl:text-xl">
                        <?php
                        $a = $times + 1;
                        echo 'だい' . $a . 'もん';
                        ?>
                    </p>

                    <h1 class="mb-8 text-4xl font-bold text-black sm:text-5xl md:mb-12 md:text-6xl">
                        <?php echo $arr[$times][0]; ?>
                    </h1>


                    <div class="flex w-full flex-col gap-20 sm:flex-row sm:justify-center">
                        <?php if ($answer[$times] == "left") { ?>
                            <label class="relative">
                                <!-- SVG画像を重ねる -->
                                <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 24 24" fill="none" stroke="#f31414" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" class="absolute w-full h-full">
                                    <circle cx="15" cy="12" r="10"></circle>
                                </svg>

                                <!-- ボタン -->
                                <div class="inline-block rounded-lg bg-indigo-500 px-8 py-3 text-center text-sm font-semibold text-white outline-none ring-indigo-300 transition duration-100 hover:bg-indigo-600 focus-visible:ring active:bg-indigo-700 md:text-base">
                                    <input id="check-a" type="radio" name="response" value="left" checked>
                                    <label for="check-a"><?php echo $response_left; ?></label>
                                </div>
                            </label>
                        <?php } else { ?>
                            <div class="inline-block rounded-lg bg-indigo-500 px-8 py-3 text-center text-sm font-semibold text-white outline-none ring-indigo-300 transition duration-100 hover:bg-indigo-600 focus-visible:ring active:bg-indigo-700 md:text-base bg-white-500 bg-opacity-50">
                                <input id="check-a" type="radio" name="response" value="left" checked><label for="check-a"><?php echo $response_left; ?></label>
                            </div>
                        <?php } ?>


                        <?php if ($answer[$times] == "center") { ?>
                            <label class="relative">
                                <!-- SVG画像を重ねる -->
                                <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 24 24" fill="none" stroke="#f31414" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" class="absolute w-full h-full">
                                    <circle cx="15" cy="12" r="10"></circle>
                                </svg>

                                <!-- ボタン -->
                                <div class="inline-block rounded-lg bg-indigo-500 px-8 py-3 text-center text-sm font-semibold text-white outline-none ring-indigo-300 transition duration-100 hover:bg-indigo-600 focus-visible:ring active:bg-indigo-700 md:text-base">
                                    <input id="check-b" type="radio" name="response" value="center" checked>
                                    <label for="check-b"><?php echo $response_center; ?></label>
                                </div>
                            </label>
                        <?php } else { ?>
                            <div class="inline-block rounded-lg bg-indigo-500 px-8 py-3 text-center text-sm font-semibold text-white outline-none ring-indigo-300 transition duration-100 hover:bg-indigo-600 focus-visible:ring active:bg-indigo-700 md:text-base bg-white-500 bg-opacity-50">
                                <input id="check-b" type="radio" name="response" value="center" checked><label for="check-b"><?php echo $response_center; ?></label>
                            </div>
                        <?php } ?>

                        <?php if ($answer[$times] == "right") { ?>
                            <label class="relative">
                                <!-- SVG画像を重ねる -->
                                <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 24 24" fill="none" stroke="#f31414" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" class="absolute w-full h-full">
                                    <circle cx="15" cy="12" r="10"></circle>
                                </svg>

                                <!-- ボタン -->
                                <div class="inline-block rounded-lg bg-indigo-500 px-8 py-3 text-center text-sm font-semibold text-white outline-none ring-indigo-300 transition duration-100 hover:bg-indigo-600 focus-visible:ring active:bg-indigo-700 md:text-base">
                                    <input id="check-c" type="radio" name="response" value="right" checked>
                                    <label for="check-c"><?php echo $response_right; ?></label>
                                </div>
                            </label>
                        <?php } else { ?>
                            <div class="inline-block rounded-lg bg-indigo-500 px-8 py-3 text-center text-sm font-semibold text-white outline-none ring-indigo-300 transition duration-100 hover:bg-indigo-600 focus-visible:ring active:bg-indigo-700 md:text-base bg-white-500 bg-opacity-50">
                                <input id="check-c" type="radio" name="response" value="right" checked><label for="check-c"><?php echo $response_right; ?></label>
                            </div>
                        <?php } ?>
                    </div>
                </div>
                <?php $times++; ?>
                <?php if ($times != 10) { ?>
                    <form action="quiz.php" method="post">
                        <input type="hidden" name="times" value=<?php echo $times; ?>>
                        <input id="send_button" type="submit" value="つぎのもんだいへ" class="inline-block rounded-lg bg-green-500 px-8 py-3 text-center text-sm font-semibold text-white outline-none ring-indigo-300 transition duration-100 hover:bg-indigo-600 focus-visible:ring active:bg-indigo-700 md:text-base mt-3">
                        <input type="hidden" name="num_correct" value=<?php echo $num_correct; ?>>
                    <?php } else { ?>
                        <form action="result.php" method="post">
                            <input id="send_button" type="submit" value="けっかをみる" class="inline-block rounded-lg bg-green-500 px-8 py-3 text-center text-sm font-semibold text-white outline-none ring-indigo-300 transition duration-100 hover:bg-indigo-600 focus-visible:ring active:bg-indigo-700 md:text-base mt-3">
                            <input type="hidden" name="num_correct" value=<?php echo $num_correct; ?>>
                        </form>
                    <?php } ?>
                    </form>
        </div>


    </div>
    </section>
    </div>
    </div>

</body>

</html>