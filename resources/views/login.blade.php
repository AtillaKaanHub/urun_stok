<!DOCTYPE html>
<html lang="tr">
<head>
<meta charset="UTF-8">
<title>Giriş Yap</title>

<style>
body {
    margin: 0;
    font-family: 'Segoe UI', sans-serif;
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;

    background: linear-gradient(135deg, #141414, #1f1f1f);
}

/* KART */
.login-box {
    width: 360px;
    padding: 35px;
    border-radius: 16px;

    background: #fff;
    box-shadow: 0 20px 50px rgba(0,0,0,0.4);

    text-align: center;
}

/* BAŞLIK */
.login-box h2 {
    margin-bottom: 25px;
    font-size: 24px;
}

/* FORM GRUP */
.form-group {
    text-align: left;
    margin-bottom: 15px;
}

/* LABEL */
.form-group label {
    font-size: 14px;
    color: #555;
    display: block;
    margin-bottom: 5px;
}

/* INPUT */
.form-group input {
    width: 100%;
    padding: 12px;
    border-radius: 10px;
    border: 1px solid #ddd;
    outline: none;
    transition: 0.2s;
}

.form-group input:focus {
    border-color: #ff9800;
    box-shadow: 0 0 0 2px rgba(255,152,0,0.2);
}

/* BUTON */
.login-box button {
    width: 100%;
    padding: 12px;
    margin-top: 10px;

    border: none;
    border-radius: 10px;

    background: linear-gradient(45deg, #ff9800, #ff5722);
    color: #fff;

    font-size: 16px;
    cursor: pointer;
    transition: 0.2s;
}

.login-box button:hover {
    transform: scale(1.03);
}

/* ALT TEXT */
.login-box a {
    display: block;
    margin-top: 15px;
    color: #666;
    text-decoration: none;
    font-size: 14px;
}

.login-box a:hover {
    color: #ff9800;
}

/* HATA */
.error {
    margin-top: 10px;
    color: red;
    font-size: 14px;
}
</style>
</head>

<body>

<div class="login-box">
    <h2> Giriş Yap</h2>

    <form method="POST" action="/login">
        @csrf

        <div class="form-group">
            <label>Email</label>
            <input type="email" name="email" placeholder="ornek@mail.com" required>
        </div>

        <div class="form-group">
            <label>Şifre</label>
            <input type="password" name="password" placeholder="••••••••" required>
        </div> 

       <button type="submit" class="main-btn">Giriş Yap</button>
    </form>

    <a href="/register">Hesabın yok mu? Kayıt ol</a>

    @if(session('error'))
        <div class="error">{{ session('error') }}</div>
    @endif
</div>

</body>
</html>