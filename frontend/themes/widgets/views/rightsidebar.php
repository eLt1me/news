<?php

use frontend\models\News;
use frontend\themes\widgets\PopularPosts;
use frontend\themes\widgets\Tags;

?>
<?php $newsModel = new News(); ?>
<div class="first_half">
    <div class="newsletter">
        <h1 class="side-title-head">Newsletter</h1>
        <p class="sign">Sign up to receive our free newsletters!</p>
        <form>
            <input type="text" class="text" value="Email Address" onfocus="this.value = '';"
                   onblur="if (this.value == '') {this.value = 'Email Address';}">
            <input type="submit" value="submit">
        </form>
    </div>
    <?= PopularPosts::widget(); ?>
    <div class="side-bar-articles">
        <div class="side-bar-article">
            <a href="single.html"><img src="images/sai.jpg" alt=""/></a>
        </div>
    </div>
</div>
<?= Tags::widget(['model' => $newsModel]) ?>