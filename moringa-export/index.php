<?php include 'partials/header.php'; ?>

<section class="hero-wrapper">
    <div class="hero-media" id="heroMedia">
        <img src="assets/images/moringo.jpg" alt="Moringo">
    </div>

    <div class="hero-text">
        <h1>Premium Moringa Leaves<br>for Global Market</h1>
        <p>High quality Indonesian moringa leaves for export</p>
        <a href="product.php">CHECK OUR PRODUCT</a>
    </div>
</section>

<section id="about" class="about-section">
    <div class="about-container">
        <h2>About <span>Us</span>.</h2>

        <p class="about-text">
    <strong>Indo Nafaz Group</strong> is Indonesia’s premier moringa supplier and exporter.
    Indo Nafaz Group is Indonesia’s premier moringa supplier and exporter, delivering certified organic moringa products to global markets. 
    We provide EU Organic, USDA, and CERES-certified moringa powder, tea, capsules, and oil, produced using our patented Moringa Lock Technology that preserves up to 95% of nutrients and all 18 amino acids. 
    As a HACCP and ISO 22000-certified manufacturer, Indo Nafaz offers bulk quantities and private label solutions with pharmaceutical-grade quality control. 
    With a commitment to ethical sourcing and sustainability, we serve health brands, distributors, and importers worldwide with reliable end-to-end export solutions.

</p>




    </div>
</section>

<section id="gallery" class="gallery-section">

    <div class="gallery-grid">
        <img src="assets/images/1.jpg" alt="Moringa Leaves">
        <img src="assets/images/2.jpg" alt="Moringa Powder">
        <img src="assets/images/4.jpg" alt="Moringa Farming">
        <img src="assets/images/5.jpg" alt="Moringa Farming">
        <img src="assets/images/6.jpg" alt="Moringa Packaging">
         <img src="assets/images/1.jpg" alt="Moringa Leaves">
        <img src="assets/images/2.jpg" alt="Moringa Powder">
        <img src="assets/images/4.jpg" alt="Moringa Farming">
    </div>
</section>

<?php include 'data/news.php'; ?>

<section id="news" class="news-section">

    <h2>Our <span>News</span>.</h2>

    <div class="news-grid">

        <?php 
        $limit = 3;
        $count = 0;

        foreach ($newsData as $id => $news):

            if ($count++ >= $limit) break;
        ?>

            <article class="news-card">
                <img src="<?= $news['image'] ?>" alt="<?= $news['title'] ?>">

                <div class="news-content">
                    <h3><?= $news['title'] ?></h3>
                    <p><?= $news['excerpt'] ?></p>

                    <a href="news-detail.php?id=<?= $id ?>" class="news-link">
                        Read More →
                    </a>
                </div>
            </article>

        <?php endforeach; ?>

    <div class="view-all-news">
    <a href="news.php">View All News →</a>
</div>
</section>

<section class="commitment-section">
    <h2 class="commitment-title">Our <span>Commitment</span>.</h2>

    <div class="commitment-grid">

        <div class="commitment-item">
            <a href="javascript:void(0);" onclick="openCommitment(
                'Marketing and Promotion',
                'We actively promote Indonesian moringa products through global networks and strategic partnerships.',
                [
                    'assets/images/our-com-img/Marketing1.jpeg.',
                    'assets/images/our-com-img/Marketing2.jpeg.'
                ]
            )">
                <img src="assets/images/icon-ourcom/service-1.png">
            </a>
            <p>Marketing and promotion - building strong client network.</p>
        </div>

        <div class="commitment-item">
            <a href="javascript:void(0);" onclick="openCommitment(
                'Product Sourcing',
                'We collaborate with trusted farmers and suppliers to guarantee consistent quality.',
                [
                    'assets/images/our-com-img/Product-resource1.jpeg.',
                    'assets/images/our-com-img/Product-resource2.jpeg.',
                ]
            )">
                <img src="assets/images/icon-ourcom/service-2.png">
            </a>
            <p>Product Sourcing - Ensuring the highest quality.</p>
        </div>

        <div class="commitment-item">
            <a href="javascript:void(0);" onclick="openCommitment(
                'Market Research and Analysis',
                'Our research-driven approach helps develop effective export strategies.',
                [
                    'assets/images/our-com-img/Market-analysis1.jpeg',
                    'assets/images/our-com-img/Market-analysis2.jpeg.'
                ]
            )">
                <img src="assets/images/icon-ourcom/service-3.png">
            </a>
            <p>Market Research and Analysis - Developing effective export strategies.</p>
        </div>

        <div class="commitment-item">
            <a href="javascript:void(0);" onclick="openCommitment(
                'Excellent Service',
                'Reliability, timely delivery, and competitive pricing are central to our commitment.',
                [
                    'assets/images/our-com-img/service-excellent2.jpeg',
                    'assets/images/our-com-img/service-excellent3.jpeg',
                ]
            )">
                <img src="assets/images/icon-ourcom/service-4.png">
            </a>
            <p>Excellent Service - Reliability you can trust.</p>
        </div>

        <div class="commitment-item">
            <a href="javascript:void(0);" onclick="openCommitment(
                'Economic Development',
                'We empower local communities by supporting farmers and fostering sustainable growth.',
                [
                    'assets/images/our-com-img/economy-development2.jpeg',
                     'assets/images/our-com-img/economy-development1.jpeg',
                ]
            )">
                <img src="assets/images/icon-ourcom/service-5.png">
            </a>
            <p>Economic Development - Enhancing community growth.</p>
        </div>

        <div class="commitment-item">
            <a href="javascript:void(0);" onclick="openCommitment(
                'Export Clients',
                'We are open to partnerships with global buyers seeking reliable supply solutions.',
                [
                    'assets/images/our-com-img/eksport-klien-2.jpeg',
                    'assets/images/our-com-img/Export-client.jpeg',
                ]
            )">
                <img src="assets/images/icon-ourcom/service-6.png">
            </a>
            <p>Export Clients - Open to partnerships.</p>
        </div>

        <div class="commitment-item">
            <a href="javascript:void(0);" onclick="openCommitment(
                'Corporate Social Responsibility',
                'Sustainability, ethical sourcing, and environmental protection remain key pillars.',
                [
                    'assets/images/our-com-img/CSR2.jpeg',
                    'assets/images/our-com-img/CSR1.jpeg'
                ]
            )">
                <img src="assets/images/icon-ourcom/service-7.png">
            </a>
            <p>Corporate Social Responsibility - Protecting community & environment.</p>
        </div>

    </div>
</section>

<!-- ✅ COMMITMENT POPUP -->
<div class="product-modal" id="commitmentModal">
    <div class="product-modal-box commitment-popup">

        <span class="close-modal" onclick="closeCommitment()">×</span>

        <h3 id="commitmentTitle"></h3>

        <p id="commitmentDesc"></p>

        <div class="commitment-gallery" id="commitmentGallery"></div>

    </div>
</div>


<section class="team-section">
    <h2>Our <span>Team</span>.</h2>

    <div class="team-grid">

        <article class="team-card">
            <img src="assets/images/our-team/team-1.jpg" alt="Retno Wijayanti">
            <div class="team-content">
                <h3>Retno Wijayanti</h3>
                <p class="team-role">Founder</p>
            </div>
        </article>

        <article class="team-card">
            <img src="assets/images/our-team/team-2.jpg" alt="Faza">
            <div class="team-content">
                <h3>Faza</h3>
                <p class="team-role">Director</p>
            </div>
        </article>

    </div>
</section>

<section class="office-section">
    <div class="office-header">
        <h2>Our <span>Offices</span></h2>
        <p>click a map to open in Google Maps<br>3 locations · Indonesia</p>
    </div>

    <div class="office-grid">

        <!-- Office 1 -->
        <div class="office-card">
            <div class="office-title">
                <span class="badge">H</span>
                <div>
                    <h3>Head Office – Winong</h3>
                    <p>Winong Royal Residence Kav 2, Pati, Central Java</p>
                </div>
            </div>
            <iframe
                src="https://www.google.com/maps?q=Winong+Royal+Residence+Pati&output=embed"
                loading="lazy"></iframe>
        </div>

        <!-- Office 2 -->
        <div class="office-card">
            <div class="office-title">
                <span class="badge">1</span>
                <div>
                    <h3>Office 1 – Semarang</h3>
                    <p>Jl Bukit Cempaka 7, Tembalang, Semarang</p>
                </div>
            </div>
            <iframe
                src="https://www.google.com/maps?q=Jalan+Bukit+Cempaka+7+Semarang&output=embed"
                loading="lazy"></iframe>
        </div>


        <!-- Office 4 -->
        <div class="office-card">
            <div class="office-title">
                <span class="badge">2</span>
                <div>
                    <h3>Office 2 – Bekasi</h3>
                    <p>Jalan Hanjuang Atas, Jatibening Baru, Bekasi</p>
                </div>
            </div>
            <iframe
                src="https://www.google.com/maps?q=Jatibening+Bekasi&output=embed"
                loading="lazy"></iframe>
        </div>

    </div>
</section>

<section class="other-web">
    <h2>Informasi Web Lainnya — Indo Nafaz Group</h2>

    <div class="other-grid">
        <div class="other-card">
            <h3>Indo Nafaz</h3>
            <p class="url">www.indonafaz.com</p>
            <a href="https://www.indonafaz.com" target="_blank" class="visit-btn">
                Kunjungi
            </a>
        </div>

        <div class="other-card">
            <h3>SkyCreative</h3>
            <p class="url">www.skycreative.indonafaz.com</p>
            <a href="https://skycreative.indonafaz.com" target="_blank" class="visit-btn">
                Kunjungi
            </a>
        </div>

        <div class="other-card">
            <h3>Energy</h3>
            <p class="url">www.energy.indonafaz.com</p>
            <a href="https://energy.indonafaz.com" target="_blank" class="visit-btn">
                Kunjungi
            </a>
        </div>
    </div>
</section>





<script src="assets/js/scroll.js"></script>
<?php include 'partials/footer.php'; ?>
