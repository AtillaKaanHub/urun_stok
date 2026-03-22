<!DOCTYPE html>
<html lang="tr">
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <meta charset="UTF-8">
    <title>Tech Shop</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
     <style>
 /* GENEL BODY */
body {
    background-color: #121212;
    color: #fff;
    font-family: 'Segoe UI', sans-serif;
}

/* Hero Section */
.hero-section {
    background: linear-gradient(135deg, #1f1f1f 0%, #2c2c2c 100%);
    border-radius: 20px;
}

/* Gradient Buton */
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

/* Kategori Kartları */
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
    transition: transform 0.3s, box-shadow 0.3s;
    cursor: pointer;
}

.category-card:hover {
    transform: scale(1.05);
    box-shadow: 0 10px 25px rgba(255, 204, 0, 0.3);
}

/* Ürün Kartları */
.product-card {
    border-radius: 15px;
    overflow: hidden;
    background: #1f1f1f;
    border: 1px solid #333;
    box-shadow: 0 5px 15px rgba(0,0,0,0.2);
    transition: transform 0.3s, box-shadow 0.3s;
}

.product-card:hover {
    transform: scale(1.03);
    box-shadow: 0 10px 25px rgba(255,204,0,0.2);
}

/* Info Cards */
.info-card {
    padding: 30px 20px;
    border-radius: 15px;
    background: #1e1e1e;
    border: 1px solid #333;
    color: #ffcc00;
    transition: transform 0.3s;
}

.info-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 20px rgba(255,204,0,0.2);
}

/* Swiper Buttons */
.swiper-button-prev,
.swiper-button-next {
    width: 50px;
    height: 50px;
    background-color: #2c2c2c;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #ffcc00;
    box-shadow: 0 5px 15px rgba(0,0,0,0.3);
    transition: all 0.3s;
}

.swiper-button-prev:hover,
.swiper-button-next:hover {
    background-color: #ffcc00;
    color: #000;
    transform: scale(1.1);
}

.swiper-button-prev i,
.swiper-button-next i {
    font-size: 20px;
}
         </style>
    
</head>
<body>

    @include('partials.navbar')

    <div class="container mt-4">
        @yield('content')
        @include('partials.footer')
    </div>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
</body>
</html>