@extends('layouts.app')

@section('content')



<!-- HERO / Bilgilendirme -->
<section class="hero-section text-white text-center py-5">
  <div class="container">
    <h1 class="display-4 fw-bold">Teknoloji Aksesuarlarında Kalite</h1>
    <p class="lead">Orijinal ürünler, hızlı kargo ve uygun fiyat</p>
    <button class="btn btn-gradient mt-3">Alışverişe Başla</button>
  </div>
</section>

<div class="bg-warning text-dark text-center py-2 fw-bold">
🔥 500 TL üzeri ücretsiz kargo | Kapıda ödeme mevcut | Aynı gün kargo!
</div>

<div class="container-fluid p-0">
  <img src="{{ asset('anasayfa.jpg') }}" class="w-100" style="max-height:400px; object-fit:cover;">
</div>


<div class="container my-5">
  <div class="row text-center">
    <div class="col-md-3">🚚 Hızlı Kargo</div>
    <div class="col-md-3">🔒 Güvenli Ödeme</div>
    <div class="col-md-3">🔄 Kolay İade</div>
    <div class="col-md-3">⭐ %100 Orijinal</div>
  </div>
</div>


<!-- Slider Kategoriler -->
<h4 class="mb-3 text-center text-white">Kategoriler</h4>
<div class="position-relative mb-5">
    <div class="swiper mySwiper">
        <div class="swiper-wrapper">

            <div class="swiper-slide">
                <div class="category-card" onclick="openCategory('Kulaklık')" >🎧 Kulaklık</div>
            </div>
            <div class="swiper-slide">
                <div class="category-card" onclick="openCategory('Şarj Aleti')" >🔌 Şarj Aleti</div>
            </div>
            <div class="swiper-slide">
                <div class="category-card" onclick="openCategory('Powerbank')" >🔋 Powerbank</div>
            </div>
            <div class="swiper-slide">
                <div class="category-card" onclick="openCategory('Kablo')" >🔗 Kablo</div>
            </div>
            <div class="swiper-slide">
                <div class="category-card" onclick="openCategory('Stand')" >📱 Stand</div>
            </div>
             <div class="swiper-slide">
                <div class="category-card" onclick="openCategory('Ekran Koruyucu')" >📱 Ekran Koruyucu</div>
            </div>

        </div>
    </div>

      <!-- Navigation -->
    <div class="swiper-button-prev"><i class="fa-solid fa-chevron-left"></i></div>
    <div class="swiper-button-next"><i class="fa-solid fa-chevron-right"></i></div>
</div>

<section class="premium-section my-5">
<style>.premium-section {
    position: relative;
}

/* Başlık */
.premium-title {
    color: #fff;
    font-weight: 700;
}

/* Scroll alan */
.premium-wrapper {
    position: relative;
}

.premium-scroll {
    display: flex;
    gap: 25px;
    overflow-x: auto;
    scroll-behavior: smooth;
    padding: 30px;
}

.premium-scroll::-webkit-scrollbar {
    display: none;
}

/* Kartlar */
.premium-card {
    min-width: 300px;
    background: linear-gradient(145deg, #1c1c1c, #111);
    border-radius: 25px;
    padding: 25px;
    color: #fff;
    transition: all 0.4s ease;
    border: 1px solid #2a2a2a;

    transform: scale(0.95);
    opacity: 0.7;
}

/* Ortadaki aktif kart */
.premium-card.active {
    transform: scale(1.1);
    opacity: 1;
    box-shadow: 0 20px 40px rgba(255, 204, 0, 0.2);
}

/* Hover */
.premium-card:hover {
    transform: scale(1.08);
}

/* Resim */
.premium-card img {
    width: 100%;
    border-radius: 15px;
    margin-top: 15px;
}

/* Butonlar */
.premium-btn {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    background: #222;
    border: none;
    color: #fff;
    font-size: 26px;
    width: 50px;
    height: 50px;
    border-radius: 50%;
    z-index: 10;
    cursor: pointer;
    transition: 0.3s;
}

.premium-btn:hover {
    background: #ffcc00;
    color: #000;
}

.prev { left: 0; }
.next { right: 0; }</style>

    <div class="container mb-4">
        <h2 class="premium-title">Ürünleri Yakından Tanıyın</h2>
    </div>

    <div class="premium-wrapper">

       

        <div class="premium-scroll">

            <div class="premium-card">
                <h5>Yüksek Kalite</h5>
                <p>Uzun ömürlü ve dayanıklı aksesuarlar</p>
               <img src="klg.jpg" alt="klg" />
            </div>

            <div class="premium-card">
                <h5>Hızlı Şarj</h5>
                <p>Yeni nesil hızlı şarj teknolojisi</p>
               <img src="sarj.jpg" alt="sarj" />
            </div>

            <div class="premium-card">
                <h5>Uyumluluk</h5>
                <p>Tüm cihazlarla sorunsuz çalışır</p>
               <img src="telefon.jpg" alt="telefon" />
            </div>

            <div class="premium-card">
                <h5>Güvenlik</h5>
                <p>Cihazınızı koruyan sistemler</p>
                 <img src="cam.jpg" alt="cam" />
            </div>

        </div>

        

    </div>

</section>


<div class="container my-5">
  <div class="p-5 text-center rounded" style="background: linear-gradient(45deg,#000,#333);">
    <h2 class="text-warning">Powerbanklerde %30 İndirim</h2>
    <p>Kaçırılmayacak fırsatlar seni bekliyor</p>
   <button class="btn btn-gradient" onclick="openCategory('Powerbank')">
  Hemen İncele
</button>
  </div>
</div>

<!-- Popüler Ürünler -->
<h4 class="mb-3 text-center text-white">Popüler Ürünler</h4>
<div class="row mb-5">

    <div class="col-md-3">
        <div class="product-card">
            <img src="https://via.placeholder.com/250" class="img-fluid rounded-top">
            <div class="p-3 text-center">
                <h5>Bluetooth Kulaklık</h5>
                <p>799 TL</p>
                <button class="btn btn-gradient w-100">Sepete Ekle</button>
            </div>
        </div>
    </div>

    <div class="col-md-3">
        <div class="product-card">
            <img src="https://via.placeholder.com/250" class="img-fluid rounded-top">
            <div class="p-3 text-center">
                <h5>Hızlı Şarj Adaptörü</h5>
                <p>299 TL</p>
                <button class="btn btn-gradient w-100">Sepete Ekle</button>
            </div>
        </div>
    </div>

    
    <div class="col-md-3">
        <div class="product-card">
            <img src="https://via.placeholder.com/250" class="img-fluid rounded-top">
            <div class="p-3 text-center">
                <h5>Bluetooth Kulaklık</h5>
                <p>799 TL</p>
              <button class="btn btn-gradient w-100">Sepete Ekle</button>
            </div>
        </div>
    </div>

    
    <div class="col-md-3">
        <div class="product-card">
            <img src="https://via.placeholder.com/250" class="img-fluid rounded-top">
            <div class="p-3 text-center">
                <h5>Bluetooth Kulaklık</h5>
                <p>799 TL</p>
                <button class="btn btn-gradient w-100">Sepete Ekle</button>
            </div>
        </div>
    </div>

</div>

<section class="py-5">
  <div class="container">
    <h2 class="text-center mb-5">🆕 Yeni Gelenler</h2>

    <div class="row">

      <div class="col-md-6">
        <div class="featured-product p-4">
          <img src="https://via.placeholder.com/500x350" class="img-fluid mb-3">
          <h3>Yeni Nesil Powerbank</h3>
          <p>Ultra hızlı şarj</p>
          <h4 class="text-warning">999 TL</h4>
        </div>
      </div>

      <div class="col-md-6">
        <div class="row">

          <div class="col-6">
            <div class="mini-product p-3 mb-3">
              <img src="https://via.placeholder.com/200">
              <h6>Kablo</h6>
              <p class="text-warning">199 TL</p>
            </div>
          </div>

          <div class="col-6">
            <div class="mini-product p-3 mb-3">
              <img src="https://via.placeholder.com/200">
              <h6>Adaptör</h6>
              <p class="text-warning">299 TL</p>
            </div>
          </div>

        </div>
      </div>

    </div>
  </div>
</section>

<!--  LİSTE ÜRÜN (AMAZON TARZI) -->
<section class="py-5" style="background:#1a1a1a;">

</section>

<section class="faq-section py-5">
  <div class="container">
    
    <h2 class="text-center text-white mb-5">❓ Sık Sorulan Sorular</h2>

    <div class="faq-box">

      <!-- Soru -->
      <div class="faq-item">
        <div class="faq-question">
          <span>🚚 Kargo ne kadar sürede gelir?</span>
          <i>+</i>
        </div>
        <div class="faq-answer">
          Siparişleriniz 1-3 iş günü içerisinde teslim edilir.
        </div>
      </div>

      <!-- Soru -->
      <div class="faq-item">
        <div class="faq-question">
          <span>🔒 Ürünler orijinal mi?</span>
          <i>+</i>
        </div>
        <div class="faq-answer">
          Tüm ürünlerimiz %100 orijinal ve garantilidir.
        </div>
      </div>

      <!-- Soru -->
      <div class="faq-item">
        <div class="faq-question">
          <span>🔄 İade ve değişim var mı?</span>
          <i>+</i>
        </div>
        <div class="faq-answer">
          14 gün içerisinde kolay iade ve değişim yapabilirsiniz.
        </div>
      </div>

      <!-- Soru -->
      <div class="faq-item">
        <div class="faq-question">
          <span>💳 Ödeme yöntemleri neler?</span>
          <i>+</i>
        </div>
        <div class="faq-answer">
          Kredi kartı, banka kartı ve kapıda ödeme seçenekleri mevcuttur.
        </div>
      </div>

    </div>
  </div>
</section>




<!-- Swiper JS -->
<script>
document.addEventListener("DOMContentLoaded", function () {
    var swiper = new Swiper(".mySwiper", {
        slidesPerView: 3,
        spaceBetween: 20,
        loop: true,

        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },

        grabCursor: true,    
        speed: 600,           
    });
});
</script>

<script>
const scroll = document.querySelector(".premium-scroll");
const cards = document.querySelectorAll(".premium-card");

// ok butonları
document.querySelector(".next").onclick = () => {
    scroll.scrollBy({ left: 320, behavior: "smooth" });
};

document.querySelector(".prev").onclick = () => {
    scroll.scrollBy({ left: -320, behavior: "smooth" });
};

// aktif kart sistemi (ortadaki büyür)
function setActiveCard() {
    let center = scroll.scrollLeft + scroll.offsetWidth / 2;

    cards.forEach(card => {
        let cardCenter = card.offsetLeft + card.offsetWidth / 2;

        if (Math.abs(center - cardCenter) < 150) {
            card.classList.add("active");
        } else {
            card.classList.remove("active");
        }
    });
}

scroll.addEventListener("scroll", setActiveCard);
window.addEventListener("load", setActiveCard);
</script>
<script>
document.querySelectorAll(".faq-question").forEach(item => {
    item.addEventListener("click", () => {
        let parent = item.parentElement;

        // diğerlerini kapat (premium his)
        document.querySelectorAll(".faq-item").forEach(el => {
            if (el !== parent) el.classList.remove("active");
        });

        parent.classList.toggle("active");
    });
});
</script>



@endsection