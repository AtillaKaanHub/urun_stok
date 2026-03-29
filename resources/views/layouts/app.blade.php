<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Tech Shop</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Swiper -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
/* ================= GENEL ================= */
body {
    background-color: #121212;
    color: #fff;
    font-family: 'Segoe UI', sans-serif;
}

/* ================= HERO ================= */
.hero-section {
    background: linear-gradient(135deg, #1f1f1f 0%, #2c2c2c 100%);
    border-radius: 20px;
}

/* ================= BUTON ================= */
.btn-gradient {
    background: linear-gradient(45deg, #ff9900, #ffcc00);
    border: none;
    color: #000;
    font-weight: bold;
    transition: transform 0.3s;
}

.btn-gradient:hover {
    transform: scale(1.05);
}

/* ================= KATEGORİ ================= */
.category-card {
    height: 120px;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 40px 20px;
    border-radius: 15px;
    background: #1e1e1e;
    border: 1px solid #333;
    font-size: 1.2rem;
    font-weight: bold;
    transition: 0.3s;
    cursor: pointer;
}

.category-card:hover {
    transform: scale(1.05);
    box-shadow: 0 10px 25px rgba(255, 204, 0, 0.3);
}

/* ================= ÜRÜN ================= */
.product-card {
    border-radius: 15px;
    overflow: hidden;
    background: #1f1f1f;
    border: 1px solid #333;
    transition: 0.3s;
}

.product-card:hover {
    transform: scale(1.03);
    box-shadow: 0 10px 25px rgba(255,204,0,0.2);
}

/* ================= SWIPER ================= */
.swiper-button-prev,
.swiper-button-next {
    width: 45px;
    height: 45px;
    background-color: #2c2c2c;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #ffcc00;
    transition: 0.3s;
}

.swiper-button-prev:hover,
.swiper-button-next:hover {
    background-color: #ffcc00;
    color: #000;
}

/* ================= FAQ ================= */
.faq-section {
    background: #181818;
}

.faq-box {
    max-width: 800px;
    margin: auto;
}

.faq-item {
    background:#1e1e1e;
    border-radius:10px;
    padding:15px;
    margin-bottom:10px;
    cursor:pointer;
}

.faq-question {
    display:flex;
    justify-content:space-between;
    font-size:18px;
}

.faq-answer {
    max-height: 0;
    overflow: hidden;
    transition: 0.4s ease;
    color: #ccc;
}

.faq-item.active .faq-answer {
    max-height: 200px;
    margin-top: 10px;
}

/* ================= YENİ ÜRÜNLER ================= */
.featured-product {
    background:#1e1e1e;
    border-radius:20px;
    border:1px solid #333;
    transition:0.3s;
}

.featured-product:hover {
    transform: scale(1.02);
    box-shadow: 0 15px 30px rgba(255,204,0,0.2);
}

.mini-product {
    background:#1e1e1e;
    border-radius:15px;
    border:1px solid #333;
    text-align:center;
    transition:0.3s;
}

.mini-product:hover {
    transform: scale(1.05);
}
    </style>
</head>

<body>

    @include('partials.navbar')

    <!-- 🔥 FIXED NAVBAR BOŞLUK -->
    <div style="margin-top:80px;">
        @yield('content')
        @include('partials.footer')
    </div>

    <!-- JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

</body>
</html>