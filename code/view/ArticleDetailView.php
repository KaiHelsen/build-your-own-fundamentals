<?php
declare(strict_types=1);

if (isset($article)):?>

    <article>
        <h2><?= $article->GetTitle(); ?></h2>
        <p><?= $article->GetContent(); ?></p>
    </article>
<?php endif; ?>