const hero = document.getElementById('heroMedia');
const img = hero.querySelector('img');
const heroText = document.querySelector('.hero-text');

const heroHeight = window.innerHeight;

window.addEventListener('scroll', () => {

    const scroll = window.scrollY;

    /* =========================
       BATAS HERO
    ========================= */
    const heroProgress = Math.min(scroll / heroHeight, 1);

    /* =========================
       GAMBAR: BESAR → NORMAL
    ========================= */
    const scale = 1.3 - (0.4 * heroProgress);
    const radius = 40 * heroProgress;

    img.style.transform = `scale(${scale})`;
    img.style.borderRadius = radius + 'px';

    /* =========================
       TEKS & TOMBOL
    ========================= */
    if (scroll <= heroHeight) {

        const maxTextMove = 180; 
        const textMove = Math.min(scroll / 3, maxTextMove);

        heroText.style.transform = `translateY(${textMove}px)`; 
        heroText.style.opacity = 1;

    } else {

        /* 🔥 RESET HALUS */
        heroText.style.transform = `translateY(180px)`;
        heroText.style.opacity = 0;
    }

});