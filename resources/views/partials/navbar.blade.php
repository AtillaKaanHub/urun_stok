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
}</style>
 <div class="container">
    <a href="/" class="logo">ATİKO</a>
    <nav class="main-nav">
      <ul>
        <li><a href="/accessories">Aksesuarlar</a></li>
        <li><a href="/support">Destek</a></li>
        <li><a href="/about">Hakkımızda</a></li>
        <li class="user-actions">
          <a href="/login" class="login-btn">Giriş</a>
          <a href="/cart" class="cart-btn">Sepet</a>
        </li>
      </ul>
    </nav>
    <button class="menu-toggle">☰</button>
  </div>
</header>