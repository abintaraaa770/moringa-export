<?php include 'partials/header.php'; ?>
<?php include 'data/products.php'; ?>

<section class="product-section">

    <h2>Our <span>Products</span></h2>

    <p class="product-subtitle">
        Premium Indonesian Moringa Products for Global Market
    </p>

    <div class="catalogue-wrapper">
        <a href="assets/catalogue/Product-Catalogue.pdf" 
           class="catalogue-btn" 
           target="_blank">
           Download Product Catalogue (PDF)
        </a>
    </div>

    <div class="product-grid">

        <?php foreach ($products as $p): ?>

        <div class="product-card">

            <div class="product-image">
                <img src="<?= $p['img'] ?>" alt="<?= htmlspecialchars($p['title']) ?>">
            </div>

            <h3><?= $p['title'] ?></h3>

            <span class="show-more-btn"
                  data-title="<?= htmlspecialchars($p['title']) ?>"
                  data-desc="<?= htmlspecialchars($p['desc']) ?>"
                  data-moq="<?= htmlspecialchars($p['moq']) ?>">
                Show More →
            </span>

            <p class="moq"><?= $p['moq'] ?></p>

            <button onclick='openOrder(<?= json_encode($p["title"]) ?>)'>
                Request Quote
            </button>

        </div>

        <?php endforeach; ?>

    </div>

</section>


<!-- ✅ ORDER MODAL -->
<div class="order-modal" id="orderModal">

    <div class="order-box">

        <span class="close-modal" onclick="closeOrder()">×</span>

        <h3>Request a Quote</h3>

        <form>

            <input type="text" placeholder="Name" required>
            <input type="email" placeholder="Email" required>
            <input type="text" placeholder="Telephone / WhatsApp" required>
            <input type="text" placeholder="Company">
            <textarea placeholder="Address"></textarea>

            <select id="productSelect">
                <option value="">Select Product</option>

                <?php foreach ($products as $p): ?>
                    <option><?= $p['title'] ?></option>
                <?php endforeach; ?>
            </select>

            <input type="text" placeholder="MOQ">
            <textarea placeholder="Detail / Inquiry"></textarea>

            <button type="submit">Send Inquiry</button>

        </form>

    </div>

</div>


<!-- ✅ PRODUCT MODAL -->
<div class="product-modal" id="productModal">

    <div class="product-modal-box">

        <span class="close-modal" onclick="closeProduct()">×</span>

        <h3 id="modalTitle"></h3>

        <!-- 🔥 Wrapper aman untuk konten -->
        <div class="product-modal-content">
            <p id="modalDesc"></p>
            <p id="modalMoq" class="modal-moq"></p>
        </div>

    </div>

</div>

<?php include 'partials/footer.php'; ?>