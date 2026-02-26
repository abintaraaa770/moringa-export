<?php 
include 'partials/header.php';
include 'data/news.php';
?>

<!-- HERO -->
<section class="news-hero">
    <h1>Our <span>News</span>.</h1>
    <p>Insights, updates, and industry knowledge</p>
</section>

<!-- CONTENT -->
<section class="news-page">

    <div class="news-grid">

        <?php foreach ($newsData as $id => $news): ?>

            <article class="news-card">
                <img src="<?= $news['image'] ?>" alt="<?= $news['title'] ?>">

                <div class="news-content">
                    <h3><?= $news['title'] ?></h3>
                    <p><?= $news['excerpt'] ?></p>

                    <a href="news-detail.php?id=<?= $id ?>" class="news-link">
                        Show More →
                    </a>
                    <?php if ($id == 1): ?>   <!-- ✅ ID ARTIKEL -->
    
<?php endif; ?>
                </div>
            </article>

        <?php endforeach; ?>

    </div>

</section>

<?php include 'partials/footer.php'; ?>