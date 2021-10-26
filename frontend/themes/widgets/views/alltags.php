<?php
/* @var $tags frontend\models\Tag */

use frontend\themes\widgets\PopularNews;

?>
<div class="secound_half">
    <div class="tags">
        <header>
            <h3 class="title-head">Tags</h3>
        </header>
        <p>
            <?php $counter = 0;
            foreach ($tags as $tag) { ?>
                <a class="tag<?= $counter ?>" href="/news/tag/?title=<?= $tag->title ?>"><?= $tag->title ?></a>
                <?php $counter++; ?>
            <?php } ?>
        </p>
    </div>
    <?= PopularNews::widget() ?>
</div>