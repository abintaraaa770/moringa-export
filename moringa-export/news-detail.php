<?php
include 'partials/header.php';
include 'data/news.php';

$id = $_GET['id'] ?? null;

if (!$id || !isset($newsData[$id])) {
    echo "<h1>Article Not Found</h1>";
    exit;
}

$news = $newsData[$id];
?>

<section class="article-page">

    <div class="article-container">

        <img src="<?= $news['image'] ?>" alt="<?= $news['title'] ?>">

        <h1><?= $news['title'] ?></h1>

        <div class="article-text">
        <?= nl2br($news['content']) ?>
        </div>

        <div class="article-actions">

            <?php if ($id == 1): ?>
                <a href="resource.php" class="resource-btn">
                    View Related Resources →
                </a>
            <?php endif; ?>

            <a href="news.php" class="back-btn">
                ← Back to News
            </a>

        </div>

    </div>

</section>

</section>

<?php include 'partials/footer.php'; ?>