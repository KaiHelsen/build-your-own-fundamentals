<?php
declare(strict_types=1);

if (isset($articles)):
    foreach ($articles as $article):?>
        <div>
            <h2><?= $article->GetTitle() ?></h2>
            <a href="index.php?<?= GET_PAGE . '=' . ARTICLE_DETAIL . '&' . GET_ARTICLE_SLUG . '=' . $article->GetSlug() ?>">Tell
                me more</a>
        </div>
    <?php endforeach;
else: ?>
    <div>oops</div>
<?php endif; ?>