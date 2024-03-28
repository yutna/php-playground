<?php

declare(strict_types=1);

require '../src/bootstrap.php';

$articles = $cms->getArticle()->getAll(true, null, null, 6);
$navigation = $cms->getCategory()->getAll();

$section = '';
$title = 'Creative Folk';
$description = 'A collective creative for hire';
?>

<?php include APP_ROOT . '/public/includes/header.php'; ?>

<main class="container grid" id="content">
    <?php foreach ($articles as $article) { ?>
        <article class="summary">
            <a href="article.php?id=<?= $article['id'] ?>">
                <img alt="<? html_escape($article['image_alt']) ?>" src="uploads/<?= html_escape($article['image_file'] ?? 'blank.png') ?>">
                <h2><?= html_escape($article['title']) ?></h2>
                <p><?= html_escape($article['summary']) ?></p>
            </a>
            <p class="credit">
                Posted in
                <a href="category.php?id=<?= $article['category_id'] ?>">
                    <?= html_escape($article['category']) ?>
                </a>
                by
                <a href="member.php?id=<?= $article['member_id'] ?>">
                    <?= html_escape($article['author']) ?>
                </a>
            </p>
        </article>
    <?php } ?>
</main>

<?php include APP_ROOT . '/public/includes/footer.php'; ?>
