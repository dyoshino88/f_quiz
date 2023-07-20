<div class="question-box">
    <?php if ($answer[$times] == "left") { ?>
        <div class="question-box-left">
            <div class="c-mark">
                <svg xmlns="http://www.w3.org/2000/svg" width="200" height="200" viewBox="0 0 24 24" fill="none" stroke="#f31414" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                    <circle cx="12" cy="12" r="10"></circle>
                </svg>
            </div>
            <div class="question-number1">①</div>
            <div class="question-text"><?php echo $response_left; ?>
                <input id="check-a" type="radio" name="response" value="left" checked><label for="check-a"></label>
            </div>
            <div class="question-image"><img src="<?php echo $response_pic_left; ?>" alt="logo"></div>
        </div>

    <?php } else { ?>

        <div class="question-box-left-white">
            <div class="question-number1">①</div>
            <div class="question-text"><?php echo $response_left; ?>
                <input id="check-a" type="radio" name="response" value="left" checked><label for="check-a"></label>
            </div>
            <div class="question-image"><img src="<?php echo $response_pic_left; ?>" alt="logo"></div>
        </div>

    <?php } ?>

    <?php if ($answer[$times] == "center") { ?>
        <div class="question-box-center">
            <div class="c-mark">
                <svg xmlns="http://www.w3.org/2000/svg" width="200" height="200" viewBox="0 0 24 24" fill="none" stroke="#f31414" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                    <circle cx="12" cy="12" r="10"></circle>
                </svg>
            </div>
            <div class="question-number2">②</div>
            <div class="question-text"><?php echo $response_center; ?>
                <input id="check-b" type="radio" name="response" value="center"><label for="check-b"></label>
            </div>
            <div class="question-image"><img src="<?php echo $response_pic_center; ?>" alt="logo"></div>
        </div>

    <?php } else { ?>
        <div class="question-box-center-white">
            <div class="question-number2">②</div>
            <div class="question-text"><?php echo $response_center; ?>
                <input id="check-b" type="radio" name="response" value="center"><label for="check-b"></label>
            </div>
            <div class="question-image"><img src="<?php echo $response_pic_center; ?>" alt="logo"></div>
        </div>
    <?php } ?>

    <?php if ($answer[$times] == "right") { ?>
        <div class="question-box-right">
            <div class="c-mark">
                <svg xmlns="http://www.w3.org/2000/svg" width="200" height="200" viewBox="0 0 24 24" fill="none" stroke="#f31414" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                    <circle cx="12" cy="12" r="10"></circle>
                </svg>
            </div>
            <div class="question-number3">③</div>
            <div class="question-text"><?php echo $response_right; ?>
                <input id="check-c" type="radio" name="response" value="right"><label for="check-c"></label>
            </div>
            <div class="question-image"><img src="<?php echo $response_pic_right; ?>" alt="logo"></div>
        </div>
    <?php } else { ?>
        <div class="question-box-right-white">
            <div class="question-number3">③</div>
            <div class="question-text"><?php echo $response_right; ?>
                <input id="check-c" type="radio" name="response" value="right"><label for="check-c"></label>
            </div>
            <div class="question-image"><img src="<?php echo $response_pic_right; ?>" alt="logo"></div>
        </div>
    <?php } ?>

    <br>
    <input type="hidden" name="times" value=<?php echo $times; ?>>
    <input type="hidden" name="num_correct" value=<?php echo $num_correct; ?>>

    <input id="send_button" type="submit" value="決定する" style="background-color:#FFFF99;">

</div>