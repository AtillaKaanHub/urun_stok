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

/* GRID */
.product-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 20px;
    margin-top: 20px;
}

/* KART */
.product-card {
    position: relative;
    border: 1px solid #eee;
    border-radius: 10px;
    padding: 15px;
    text-align: center;
    background: #fff;
    transition: 0.3s;
}

.product-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 20px rgba(0,0,0,0.1);
}

.product-card img {
    width: 100%;
    border-radius: 8px;
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

/* SEPET BUTONU */
.add-cart-btn {
    width: 100%;
    padding: 10px;
    border: none;
    background: #ff9800;
    color: #fff;
    cursor: pointer;
    border-radius: 6px;
    transition: 0.2s;
}

.add-cart-btn:hover {
    background: #e68900;
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

.cart-item {
    border: 1px solid #eee;
    border-radius: 10px;
    padding: 15px;
    text-align: center;
}

/* FİYAT */
.price {
    color: #ff9800;
    font-weight: bold;
    margin: 5px 0;
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

</li>
        <li><a href="/support">Destek</a></li>
        <li><a href="/about">Hakkımızda</a></li>
        <li class="user-actions">
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

    alert(name + " sepete eklendi");
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

/* SEPET SİL */
function clearCart() {
    if (confirm("Sepeti silmek istiyor musun?")) {
        cart = [];
        renderCart();
    }
}

/* SEPET ONAYLA */
function confirmCart() {
    if (cart.length === 0) {
        alert("Sepet boş!");
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

    // 🔍 BASİT VALIDASYON
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
        alert("Sipariş oluşturuldu! Kod: " + data.order_code);

        cart = [];
        renderCart();
        closeCart();
    });
}

function closePayment() {
    document.getElementById("paymentModal").style.display = "none";
}
</script>