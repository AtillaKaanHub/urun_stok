<header class="site-header">
    <style>
.site-header {
    width: 100%;
    background-color: #fffffff4;
    color: #000;
    font-family: 'Arial', sans-serif;
    position: fixed; 
    top: 0;
    left: 0;
    z-index: 1000;
    box-shadow: 0 2px 6px rgba(0,0,0,0.1); 
}

.site-header .container {
    max-width: 1200px;
    margin: 0 auto;
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 10px 20px;
}

/* Logo */
.site-header .logo {
    font-size: 1.5rem;
    font-weight: bold;
    color: #000;
    text-decoration: none;
}

/* Ana Navigasyon */
.main-nav ul {
    list-style: none;
    margin: 0;
    padding: 0;
    display: flex;
    align-items: center;
}

.main-nav ul li {
    margin-left: 25px;
}

.main-nav ul li a {
    color: #000; 
    text-decoration: none;
    font-size: 1rem;
    transition: color 0.2s;
}

.main-nav ul li a:hover {
    color: #ff9800; 
}


.user-actions {
    display: flex;
    align-items: center;
}

.user-actions a {
    margin-left: 15px;
    padding: 5px 12px;
    font-size: 0.9rem;
    color: #fff; 
    background-color: #000; 
    border-radius: 4px;
    text-decoration: none;
    transition: background-color 0.2s, transform 0.2s;
}

.user-actions a:hover {
    background-color: #333;
    transform: scale(1.05);
}

/* Mobil Menü Butonu */
.menu-toggle {
    display: none;
    background: none;
    border: none;
    color: #000;
    font-size: 1.5rem;
    cursor: pointer;
}

/* -------------------------
   Responsive (Mobil)
------------------------- */
@media (max-width: 768px) {
    .main-nav ul {
        display: none;
        flex-direction: column;
        background-color: #fff;
        position: absolute;
        top: 60px;
        right: 0;
        width: 200px;
        padding: 10px 0;
        border-radius: 0 0 6px 6px;
        box-shadow: 0 2px 6px rgba(0,0,0,0.1);
    }

    .main-nav ul li {
        margin: 10px 0;
    }

    .menu-toggle {
        display: block;
    }

    /* Mobil kullanıcı aksiyonları */
    .user-actions {
        flex-direction: column;
        align-items: flex-start;
    }

    .user-actions a {
        margin: 5px 0;
    }
}

/* DROPDOWN */
.dropdown {
    position: relative;
}

.dropdown-menu-custom {
    position: absolute;
    top: 100%;
    left: 0;
    background: #fff;
    width: 230px;
    border-radius: 10px;
    box-shadow: 0 10px 25px rgba(0,0,0,0.15);
    display: none;
    flex-direction: column;
    padding: 10px 0;
    z-index: 999;
}

.dropdown:hover .dropdown-menu-custom {
    display: flex;
}

.dropdown-menu-custom a {
    padding: 12px 18px;
    color: #000;
    text-decoration: none;
    font-size: 15px;
    transition: all 0.2s;
}

.dropdown-menu-custom a:hover {
    background: #f5f5f5;
    color: #ff9800;
    padding-left: 25px;
}


/* MODAL */
.custom-modal {
    display: none;
    position: fixed;
    z-index: 2000;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0,0,0,0.5);
     backdrop-filter: blur(6px);
    justify-content: center;
    align-items: center;
    
}

/* BEYAZ PANEL */
.modal-white {
    background: #fff;
    width: 70%;
    height: 80%;
    border-radius: 15px;
    padding: 20px;
    position: relative;
    overflow-y: auto;
    animation: popup 0.3s ease;
}

/* KAPAT */
.close-btn {
    position: absolute;
    top: 10px;
    right: 20px;
    font-size: 28px;
    cursor: pointer;
}

/* BAŞLIK */
.category-title {
    text-align: center;
    font-size: 24px;
    margin-bottom: 20px;
}

/* GRID */
.product-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
    gap: 20px;
}

/* KART */
.product-card {
    position: relative;
    border-radius: 15px;
    padding: 15px;
    background: #fff;
    transition: 0.3s;
    box-shadow: 0 5px 15px rgba(0,0,0,0.08);
}

.product-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 15px 30px rgba(0,0,0,0.15);
}

/* BADGE */
.product-badge {
    position: absolute;
    top: 10px;
    left: 10px;
    background: #ff9800;
    color: #fff;
    padding: 4px 10px;
    font-size: 12px;
    border-radius: 20px;
}

.product-badge.discount {
    background: #e74c3c;
}

/* RESİM */
.product-card img {
    width: 100%;
    border-radius: 10px;
    margin-bottom: 10px;
}

/* FİYAT */
.price {
    color: #ff9800;
    font-weight: bold;
    margin: 8px 0;
    font-size: 18px;
}

/* BUTON */
.add-cart-btn {
    width: 100%;
    padding: 10px;
    border: none;
    background: linear-gradient(45deg,#ff9800,#ff5722);
    color: #fff;
    border-radius: 8px;
    cursor: pointer;
    transition: 0.2s;
}

.add-cart-btn:hover {
    transform: scale(1.05);
}

/* ADET */

.quantity-mini button {
    width: 22px;
    height: 22px;
    border: none;
    background: #000;
    color: #fff;
    border-radius: 50%;
}

.quantity-mini input {
    width: 30px;
    text-align: center;
    border: none;
}

/* SEPET BLOĞU */
.cart-wrapper {
    position: relative;
    margin-top: 10px;
}

/* ADET KUTUSU (SAĞ ÜST) */
.quantity-mini {
    position: absolute;
    top: -10px;
    right: 10px;

    display: flex;
    align-items: center;

    background: #fff;
    border: 1px solid #ddd;
    border-radius: 20px;

    padding: 2px 5px;
    box-shadow: 0 2px 5px rgba(0,0,0,0.1);
}

/* BUTON */
.quantity-mini button {
    width: 20px;
    height: 20px;
    border: none;
    background: #000;
    color: #fff;
    font-size: 12px;
    cursor: pointer;
    border-radius: 50%;
}

/* INPUT */
.quantity-mini input {
    width: 30px;
    border: none;
    text-align: center;
    font-size: 12px;
    outline: none;
}

/*  MODAL GELİŞTİRME  */



/* BAŞLIK */
.modal-white h2 {
    font-size: 26px;
    margin-bottom: 15px;
}

/* KAPAT BUTONU */
.close-btn {
    transition: 0.2s;
}

.close-btn:hover {
    transform: rotate(90deg);
    color: red;
}


/* ANİMASYON */
@keyframes popup {
    from {
        transform: scale(0.9);
        opacity: 0;
    }
    to {
        transform: scale(1);
        opacity: 1;
    }
}

.cart-action-btn {
    padding: 10px 20px;
    border: none;
    border-radius: 6px;
    margin: 5px;
    cursor: pointer;
    font-size: 14px;
}

.cart-action-btn.danger {
    background: #e74c3c;
    color: #fff;
}

.cart-action-btn.success {
    background: #27ae60;
    color: #fff;
}

.cart-action-btn:hover {
    opacity: 0.9;
}
/* SAĞ ALT SABİT BUTONLAR */
.cart-fixed-buttons {
    position: absolute;
    bottom: 20px;
    right: 20px;

    display: flex;
    gap: 10px;
}

/* BUTON */
.cart-btn {
    padding: 10px 15px;
    border: none;
    border-radius: 6px;
    cursor: pointer;
    color: #fff;
}

.cart-btn.danger {
    background: #e74c3c;
}

.cart-btn.success {
    background: #27ae60;
}

/* SEPET KARTI */
.cart-item {
    border: 1px solid #eee;
    border-radius: 10px;
    padding: 15px;
    text-align: center;
    transition: 0.2s;
}

/* ADET KONTROL */
.cart-qty {
    display: flex;
    justify-content: center;
    align-items: center;
    margin-top: 10px;
}

.cart-qty button {
    width: 25px;
    height: 25px;
    border: none;
    background: #000;
    color: #fff;
    cursor: pointer;
    border-radius: 50%;
}

.cart-qty input {
    width: 40px;
    text-align: center;
    margin: 0 5px;
}


/* TOPLAM KUTUSU */
#totalPrice {
    background: #f5f5f5;
    padding: 10px;
    border-radius: 8px;
}

.desktop-summary {
    margin-bottom: 20px;
}

.summary-box {
    border: 1px solid #eee;
    border-radius: 10px;
    overflow: hidden;
    background: #fff;
}

.summary-header {
    background: #f7f7f7;
    padding: 12px;
    font-weight: bold;
    display: flex;
    justify-content: space-between;
    cursor: pointer;
}

.summary-body {
    padding: 15px;
    display: block;
}

.summary-row {
    display: flex;
    justify-content: space-between;
    margin-bottom: 10px;
    font-size: 14px;
}

.summary-total {
    display: flex;
    justify-content: space-between;
    font-weight: bold;
    font-size: 16px;
    border-top: 1px solid #ddd;
    padding-top: 10px;
}

#paymentModal input {
    border-radius: 8px;
    padding: 10px;
}

.kargo-btn {
    position: fixed;
    bottom: 20px;
    right: 20px;
    background-color: #ffcc00;
    color: #000;
    border: none;
    padding: 12px 16px;
    border-radius: 50px;
    font-weight: bold;
    cursor: pointer;
    box-shadow: 0 4px 10px rgba(0,0,0,0.2);
    z-index: 999;
}
#cartModal .modal-white {
    max-width: 900px;
}

.cart-item:hover {
    transform: scale(1.03);
}

/* ÖZET KUTUSU */
.summary-box {
    box-shadow: 0 5px 20px rgba(0,0,0,0.08);
}

.kargo-btn:hover {
    background-color: #e6b800;
}

#paymentModal .modal-white {
    border-radius: 20px;
    box-shadow: 0 10px 40px rgba(0,0,0,0.2);
}

/* INPUT */
#paymentModal input {
    border: 1px solid #ddd;
    width: 100%;
    margin-bottom: 10px;
}

/* BUTON */
#paymentModal button {
    background: linear-gradient(45deg,#27ae60,#2ecc71);
    border: none;
}

/* SİPARİŞLERİM */
/* ===== SİPARİŞLER MODAL ===== */

.orders-modal {
    max-width: 900px;
}

/* BAŞLIK */
.orders-title {
    text-align: center;
    font-size: 26px;
    margin-bottom: 20px;
}

/* GRID */
.orders-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 15px;
}

/* KART */
.order-card {
    background: #fff;
    border-radius: 15px;
    padding: 15px;
    border: 1px solid #eee;
    box-shadow: 0 5px 15px rgba(0,0,0,0.08);
    transition: 0.3s;
}

.order-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 15px 25px rgba(0,0,0,0.15);
}

/* ÜST */
.order-header {
    display: flex;
    justify-content: space-between;
    margin-bottom: 10px;
}

/* KOD */
.order-code {
    font-weight: bold;
    color: #333;
}

/* DURUM */
.order-status {
    padding: 3px 8px;
    border-radius: 20px;
    font-size: 12px;
    background: #ffeaa7;
}

/* ÜRÜNLER */
.order-items {
    font-size: 14px;
    margin: 10px 0;
}

/* ALT */
.order-footer {
    display: flex;
    justify-content: space-between;
    font-weight: bold;
}

/* BOŞ DURUM */
.loading {
    text-align: center;
    color: #999;
}

/* KARGO BUTONU */
.kargo-btn {
    position: fixed;
    bottom: 25px;
    right: 25px;
    background: linear-gradient(45deg,#ff9800,#ff5722);
    color: #fff;
    border: none;
    padding: 12px 18px;
    border-radius: 50px;
    font-weight: bold;
    cursor: pointer;
    box-shadow: 0 5px 15px rgba(0,0,0,0.2);
    z-index: 999;
}

.kargo-btn:hover {
    transform: scale(1.05);
}
.toast {
    position: fixed;
    bottom: 20px;
    left: 20px;
    background: #333;
    color: #fff;
    padding: 12px 18px;
    border-radius: 8px;
    opacity: 0;
    transform: translateY(20px);
    transition: 0.3s;
    z-index: 9999;
}

.toast.show {
    opacity: 1;
    transform: translateY(0);
}

</style>

 <div class="container">
    <a href="/" class="logo">ATİKO</a>
    <nav class="main-nav">
      <ul>
        <li class="dropdown">
  <a href="#" class="dropdown-toggle">Aksesuarlar </a>

 <div class="dropdown-menu-custom">
   <a href="#" onclick="openCategory('Kulaklık'); return false;">🎧 Kulaklık</a>
   <a href="#" onclick="openCategory('Şarj Aleti'); return false;">🔌 Şarj Aleti</a>
   <a href="#" onclick="openCategory('Powerbank'); return false;">🔋 Powerbank</a>
   <a href="#" onclick="openCategory('Kablo'); return false;">🔗 Kablo</a>
   <a href="#" onclick="openCategory('Stand'); return false;">📱 Stand</a>
   <a href="#" onclick="openCategory('Ekran Koruyucu'); return false;">🛡️ Ekran Koruyucu</a>
</div>

<!-- MODAL -->
<div id="categoryModal" class="custom-modal">
  <div class="modal-white">
    
    
    <span class="close-btn" onclick="closeCategory()">×</span>

    <h2 id="modalTitle"></h2>

    <!-- ÜRÜNLER -->
    <div id="productList" class="product-grid"></div>

  </div>
</div>

 <!-- SEPET MODAL -->
<div id="cartModal" class="custom-modal">
  <div class="modal-white">

    <span class="close-btn" onclick="closeCart()">×</span>

    <h2 style="text-align:center;">Sepetim</h2>

    <div id="cartList" class="product-grid"></div>

    <div class="desktop-summary">

  <div class="summary-box">

    <div class="summary-header">
      <span>📦 Sipariş Özeti</span>
      <span class="summary-toggle">▼</span>
    </div>

    <div class="summary-body" id="summaryBody">

      <div class="summary-row">
        <span>Ara Toplam (<span id="totalQty">0</span> ürün)</span>
        <span id="totalPrice">0 TL</span>
      </div>

      <div class="summary-row">
        <span>Kargo</span>
       <span id="cargoPrice">0 TL</span>
      </div>

      <div class="summary-total">
        <span>Toplam</span>
        <span id="finalTotal">0 TL</span>
      </div>

    </div>

  </div>

</div>

<div id="paymentModal" class="custom-modal">
  <div class="modal-white" style="max-width:400px;">

    <span class="close-btn" onclick="closePayment()">×</span>

    <h3 style="text-align:center; color:black;">💳 Kart Bilgileri</h3>

    <input type="text" id="cardName" placeholder="Kart Sahibi" class="form-control mb-2">

    <input type="text" id="cardNumber" placeholder="Kart Numarası (16 haneli)" class="form-control mb-2">

    <div style="display:flex; gap:10px;">
        <input type="text" id="cardDate" placeholder="AA/YY" class="form-control mb-2">
        <input type="text" id="cardCvv" placeholder="CVV" class="form-control mb-2">
    </div>

    <button onclick="completePayment()" class="btn btn-success w-100 mt-2">
        Ödemeyi Tamamla
    </button>

  </div>
</div>

    <!-- BUTONLAR -->
    <div class="cart-fixed-buttons">
        <button onclick="clearCart()" class="cart-btn danger">🗑️ Sepeti Sil</button>
        <button onclick="confirmCart()" class="cart-btn success">✅ Sepeti Onayla</button>
    </div>

  </div>
</div>

<div id="ordersModal" class="custom-modal" style="display:none;">
    
    <div class="modal-white orders-modal">

        <span class="close-btn" onclick="closeOrders()">×</span>

        <h2 class="orders-title">📦 Siparişlerim</h2>

        <div id="ordersList" class="orders-grid">
            <p class="loading">Yükleniyor...</p>
        </div>

    </div>

    <button class="kargo-btn" onclick="kargoTakip()"> Kargo Takip</button>

</div>

</li>
        <li><a href="/support">Destek</a></li>
        <li><a href="/about">Hakkımızda</a></li>
        <li class="user-actions">
          <button onclick="openOrders()">Siparişlerim</button>
          <a href="/login" class="login-btn">Giriş</a>
         <a href="#" class="cart-btn" onclick="openCart(); return false;">Sepet</a>
        </li>
      </ul>
    </nav>
    <button class="menu-toggle">☰</button>
  </div>

  <div id="kulaklikModal" class="custom-modal">
  <div class="modal-white">

    <span class="close-btn" onclick="closeKulaklik()">×</span>

    <h2 style="color:black; text-align:center;">Kulaklıklar</h2>

  </div>
</div>
<div id="toast" class="toast"></div>
</header>

<script>
/* ---------------- DROPDOWN ---------------- */
document.querySelector(".dropdown-toggle").addEventListener("click", function(e) {
    e.preventDefault();
    const menu = this.nextElementSibling;

    menu.style.display = menu.style.display === "flex" ? "none" : "flex";
});

/* ---------------- ÜRÜNLER ---------------- */
const products = {
    "Kulaklık": [
        { name: "Bluetooth Kulaklık", price: 799 },
        { name: "Gaming Kulaklık", price: 999 }
    ],
    "Şarj Aleti": [
        { name: "Type-C Şarj Aleti", price: 199 }
    ],
    "Powerbank": [
        { name: "10000mAh Powerbank", price: 499 }
    ],
    "Kablo": [
        { name: "Type-C Kablo", price: 99 }
    ],
    "Stand": [
        { name: "Telefon Standı", price: 149 }
    ],
    "Ekran Koruyucu": [
        { name: "Cam Koruyucu", price: 129 }
    ]
};

/* ---------------- KATEGORİ ---------------- */
function openCategory(name) {
    const modal = document.getElementById("categoryModal");
    const title = document.getElementById("modalTitle");
    const list = document.getElementById("productList");

    title.innerText = name;
    modal.style.display = "flex";

    document.body.style.overflow = "hidden";

    list.innerHTML = "";

    products[name].forEach((p, index) => {
        list.innerHTML += `
        <div class="product-card">
            <img src="https://via.placeholder.com/200">

            <h4>${p.name}</h4>
            <p>${p.price} TL</p>

            <div class="cart-wrapper">
                <div class="quantity-mini">
                    <button onclick="changeQty(${index}, -1)">-</button>
                    <input type="number" id="qty-${index}" value="1" min="1">
                    <button onclick="changeQty(${index}, 1)">+</button>
                </div>

                <button class="add-cart-btn" onclick="addToCart('${p.name}', ${p.price}, ${index})">
                    Sepete Ekle
                </button>
            </div>
        </div>
        `;
    });
}

function closeCategory() {
    document.getElementById("categoryModal").style.display = "none";
    document.body.style.overflow = "auto";
}

/* ---------------- ADET ---------------- */
function changeQty(index, value) {
    let input = document.getElementById(`qty-${index}`);
    let newVal = parseInt(input.value) + value;

    input.value = newVal > 0 ? newVal : 1;
}

/* ---------------- SEPET ---------------- */
let cart = [];

/* SEPETE EKLE */
function addToCart(name, price, index) {
    let qty = parseInt(document.getElementById(`qty-${index}`).value);

    let existing = cart.find(item => item.name === name);

    if (existing) {
        existing.qty += qty;
    } else {
        cart.push({ name: name, price: price, qty: qty });
    }

     showToast(name + " sepete eklendi");
    updateSummary();
}

/* SEPETİ AÇ */
function openCart() {
    document.getElementById("cartModal").style.display = "flex";
    document.body.style.overflow = "hidden";

    renderCart();
    
}

/* SEPETİ ÇİZ */
function renderCart() {
    const list = document.getElementById("cartList");
    list.innerHTML = "";

    let total = 0;

    if (cart.length === 0) {
        list.innerHTML = "<p style='text-align:center;'>Sepet boş</p>";
        return;
    }

    cart.forEach((item, index) => {
        total += item.price * item.qty;

        list.innerHTML += `
        <div class="cart-item">
            <h4>${item.name}</h4>
            <p>${item.price} TL</p>

            <div class="cart-qty">
                <button onclick="updateQty(${index}, -1)">-</button>
                <input type="number" value="${item.qty}" onchange="setQty(${index}, this.value)">
                <button onclick="updateQty(${index}, 1)">+</button>
            </div>
        </div>
        `;
    });

    list.innerHTML += `<div class="cart-total">Toplam: ${total} TL</div>`;
    updateSummary();
}

/* SEPET ADET */
function updateQty(index, val) {
    cart[index].qty += val;

    if (cart[index].qty <= 0) {
        cart.splice(index, 1);
    }

    renderCart();
    updateSummary();
}

function setQty(index, value) {
    let qty = parseInt(value);

    if (qty <= 0) {
        cart.splice(index, 1);
    } else {
        cart[index].qty = qty;
    }

    renderCart();
    updateSummary();
}

function clearCart() {

    if (cart.length === 0) {
        showToast("Sepet zaten boş!", "error");
        return;
    }

    cart = [];
    renderCart();

    showToast("Sepet silindi", "success");
}

function confirmCart() {

    if (cart.length === 0) {
        showToast("Sepet boş!", "error");
        return;
    }

    document.getElementById("paymentModal").style.display = "flex";
}


/* KAPAT */
function closeCategory() {
    document.getElementById("categoryModal").style.display = "none";
    document.body.style.overflow = "auto";
}

function closeCart() {
    document.getElementById("cartModal").style.display = "none";
    document.body.style.overflow = "auto";
}

/* DIŞ TIK KAPAT */
window.onclick = function(e) {
    if (e.target.id === "categoryModal") closeCategory();
    if (e.target.id === "cartModal") closeCart();
};

function updateSummary() {
    let totalQty = 0;
    let totalPrice = 0;

    cart.forEach(item => {
        totalQty += item.qty;
        totalPrice += item.qty * item.price;
    });

    let cargo = 0;
    let cargoText = "";

    if (totalPrice === 0) {
        cargo = 0;
        cargoText = "0 TL";
    } 
    else if (totalPrice < 500) {
        cargo = 49;
        cargoText = "49 TL";
    } 
    else {
        cargo = 0;
        cargoText = "Ücretsiz 🚚";
    }

    let final = totalPrice + cargo;

    // EKRANA BAS
    document.getElementById("totalQty").innerText = totalQty;
    document.getElementById("totalPrice").innerText = totalPrice + " TL";
    document.getElementById("cargoPrice").innerText = cargoText;
    document.getElementById("finalTotal").innerText = final + " TL";
}

function completePayment() {

    let name = document.getElementById("cardName").value.trim();
    let number = document.getElementById("cardNumber").value.trim();
    let date = document.getElementById("cardDate").value.trim();
    let cvv = document.getElementById("cardCvv").value.trim();

    //  BASİT VALIDASYON
    if (!name || !number || !date || !cvv) {
        alert("Lütfen tüm alanları doldurun!");
        return;
    }

    if (number.length !== 16 || isNaN(number)) {
        alert("Kart numarası 16 haneli olmalı!");
        return;
    }

    if (cvv.length !== 3 || isNaN(cvv)) {
        alert("CVV 3 haneli olmalı!");
        return;
    }

   
    closePayment();

    
    sendOrderToServer();
}

function sendOrderToServer() {
    fetch('/order-create', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
        },
        body: JSON.stringify({
            cart: cart
        })
    })
    .then(res => res.json())
    .then(data => {
       showToast("Sipariş oluşturuldu! Kod: " + data.order_code, "success");

        cart = [];
        renderCart();
        closeCart();
    });
}

function closePayment() {
    document.getElementById("paymentModal").style.display = "none";
}

function openOrders() {
    document.getElementById("ordersModal").style.display = "flex";
    document.body.style.overflow = "hidden";

    fetchOrders();
}

function closeOrders() {
    document.getElementById("ordersModal").style.display = "none";
    document.body.style.overflow = "auto";
}

function loadOrders() {
    fetch('/orders')
    .then(res => res.json())
    .then(data => {

        const list = document.getElementById("ordersList");
        list.innerHTML = "";

        data.forEach(order => {

            let itemsHTML = "";

            order.items.forEach(item => {
                itemsHTML += `<p>${item.name} - ${item.qty}</p>`;
            });

            list.innerHTML += `
                <div>
                    <h3>${order.order_code}</h3>
                    <p>${order.total_price} TL</p>
                    ${itemsHTML}
                </div>
            `;
        });

    });
}

function openOrders() {
    document.getElementById("ordersModal").style.display = "flex";
    loadOrders();
}

function closeOrders() {
    document.getElementById("ordersModal").style.display = "none";
}


function kargoTakip() {
    window.open("https://www.dhlecommerce.com.tr/gonderitakip", "_blank");
}

function showToast(message) {
    const toast = document.getElementById("toast");
    toast.innerText = message;
    toast.classList.add("show");

    setTimeout(() => {
        toast.classList.remove("show");
    }, 2000);
}
</script>