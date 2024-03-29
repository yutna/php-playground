<?php

declare(strict_types=1);

require '../../src/bootstrap.php';

$article_count = $cms->getArticle()->count();
$category_count = $cms->getCategory()->count();
?>

<?php include APP_ROOT . '/public/includes/admin-header.php'; ?>

<main class="container" id="content">
    <section class="header">
        <h1>Admin</h1>
    </section>
    <table class="admin">
        <thead>
            <tr>
                <th></th>
                <th>Count</th>
                <th class="create">Create</th>
                <th class="view">View</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><strong>Categories</strong></td>
                <td><?= $category_count ?></td>
                <td><a href="category.php" class="btn btn-primary">Add</a></td>
                <td><a href="categories.php" class="btn btn-primary">View</a></td>
            </tr>
            <tr>
                <td><strong>Articles</strong></td>
                <td><?= $article_count ?></td>
                <td><a href="article.php" class="btn btn-primary">Add</a></td>
                <td><a href="articles.php" class="btn btn-primary">View</a></td>
            </tr>
        </tbody>
    </table>
</main>

<?php include APP_ROOT . '/public/includes/admin-footer.php'; ?>
