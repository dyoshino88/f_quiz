<?php
include 'quiz_functions.php';
// getQuizData()関数を呼び出してデータを取得
$arr = getQuizData();
?>

<?php
$num_correct = $_POST['num_correct'];
?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
  <title>クイズにちょうせん</title>
</head>

<body>
  <div class="bg-white pb-6 sm:pb-8 lg:pb-12">
    <div class="mx-auto max-w-screen-2xl px-4 md:px-8">
      <header class="mb-8 flex items-center justify-between border-b py-4 md:mb-12 md:py-8 xl:mb-2">
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
        <a href="index.php
        " class="hidden rounded-lg bg-gray-200 px-8 py-3 text-center text-sm font-semibold text-gray-500 outline-none ring-indigo-300 transition duration-100 hover:bg-gray-300 focus-visible:ring active:text-gray-700 md:text-base lg:inline-block">さいしょのページ</a>

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
            ぜんぶで<?php
                $count = count($arr);
                echo $count;
                ?>こ！わかるかな？
          </p>

          <h1 class="mb-8 text-4xl font-bold text-black sm:text-5xl md:mb-12 md:text-6xl">
            あなたは、
            <?php
            $count = count($arr);
            echo $count;
            ?>もんちゅう<?php echo "$num_correct"; ?>もんせいかいしました！</h1>
        </div>
      </section>
    </div>
  </div>

</body>

</html>