<!-- CERTIFICATE SLIDER -->
<section class="cert-slider">
    <div class="cert-track">

        <!-- SET PERTAMA -->
        <div class="cert-slide">
            <img src="assets/images/cert/halal.png">
        </div>

        <div class="cert-slide">
            <img src="assets/images/cert/penghargaan2.jpg">
        </div>

         <div class="cert-slide">
            <img src="assets/images/cert/penghargaan4.jpg">
        </div>

        <div class="cert-slide">
            <img src="assets/images/cert/penghargaan5.jpg">
        </div>

        <div class="cert-slide">
            <img src="assets/images/cert/penghargaan6.jpg">
        </div>

        <div class="cert-slide">
            <img src="assets/images/cert/penghargaan7.jpg">
        </div>

         <div class="cert-slide">
            <img src="assets/images/cert/penghargaan1.jpg">
        </div>

        <div class="cert-slide">
            <img src="assets/images/cert/penghargaan8.jpg">
        </div>

        <!-- DUPLIKAT  -->
                 <div class="cert-slide">
            <img src="assets/images/cert/halal.png">
        </div>

        <div class="cert-slide">
            <img src="assets/images/cert/penghargaan2.jpg">
        </div>

         <div class="cert-slide">
            <img src="assets/images/cert/penghargaan4.jpg">
        </div>

        <div class="cert-slide">
            <img src="assets/images/cert/penghargaan5.jpg">
        </div>

        <div class="cert-slide">
            <img src="assets/images/cert/penghargaan6.jpg">
        </div>

        <div class="cert-slide">
            <img src="assets/images/cert/penghargaan7.jpg">
        </div>

         <div class="cert-slide">
            <img src="assets/images/cert/penghargaan1.jpg">
        </div>

        <div class="cert-slide">
            <img src="assets/images/cert/penghargaan8.jpg">
        </div>

        
    
    </div>
</section>


<!-- FOOTER -->
<footer class="site-footer">
    <p>© 2026 <strong>Moringa Export Indonesia</strong>. All rights reserved.</p>
</footer>


<script>

/* =========================
   IMAGE SLIDER (AMAN)
========================= */
document.querySelectorAll('.product-slider').forEach(slider => {
    let i = 0;
    const imgs = slider.querySelectorAll('img');

    if (imgs.length <= 1) return;

    setInterval(() => {
        imgs[i].classList.remove('active');
        i = (i + 1) % imgs.length;
        imgs[i].classList.add('active');
    }, 2500);
});


/* =========================
   PRODUCT MODAL
========================= */

document.querySelectorAll('.show-more-btn').forEach(btn => {

    btn.addEventListener('click', function() {

        const modal = document.getElementById('productModal');

        document.getElementById('modalTitle').innerText = this.dataset.title;
        document.getElementById('modalDesc').innerText = this.dataset.desc;
        document.getElementById('modalMoq').innerText = this.dataset.moq;

        modal.classList.add('active');

    });

});

function closeProduct() {
    const modal = document.getElementById('productModal');
    if (!modal) return;

    modal.classList.remove('active');
}


/* =========================
   ORDER MODAL
========================= */

function openOrder(productName) {

    const modal = document.getElementById('orderModal');
    const select = document.getElementById('productSelect');

    if (!modal) return;

    modal.classList.add('active');

    if (select) {
        select.value = productName;
    }
}

function closeOrder() {

    const modal = document.getElementById('orderModal');
    if (!modal) return;

    modal.classList.remove('active');
}


/* =========================
   COMMITMENT MODAL
========================= */

function openCommitment(title, desc, images) {

    const modal = document.getElementById('commitmentModal');
    if (!modal) return;

    document.getElementById('commitmentTitle').innerText = title;
    document.getElementById('commitmentDesc').innerText = desc;

    const gallery = document.getElementById('commitmentGallery');
    gallery.innerHTML = "";

    images.forEach(img => {
        const imageEl = document.createElement('img');
        imageEl.src = img;
        gallery.appendChild(imageEl);
    });

    modal.classList.add('active');
}

function closeCommitment() {
    const modal = document.getElementById('commitmentModal');
    if (!modal) return;

    modal.classList.remove('active');
}



/* =========================
CLOSE MODAL KLIK BACKGROUND (PREMIUM FIX)
========================= */

document.querySelectorAll('.product-modal').forEach(modal => {

    modal.addEventListener('click', (e) => {

        if (e.target === modal) {
            modal.classList.remove('active');
        }

    });

});

</script>


<!-- ✅ PRODUCT POPUP -->
<div class="product-modal" id="productModal">
    <div class="product-modal-box">

        <span class="close-modal" onclick="closeProduct()">×</span>

        <h3 id="modalTitle"></h3>
        <p id="modalDesc"></p>
        <p id="modalMoq" class="modal-moq"></p>



    </div>
</div>


<!-- ✅ COMMITMENT POPUP -->
<div class="product-modal" id="commitmentModal">
    <div class="product-modal-box">

        <span class="close-modal" onclick="closeCommitment()">×</span>

        <img id="commitmentImage" src="" alt="">
        <h3 id="commitmentTitle"></h3>
        <p id="commitmentDesc"></p>

    </div>
</div>


</body>
</html>