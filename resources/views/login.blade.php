<!DOCTYPE html>
<html lang="tr">
<head>
<meta charset="UTF-8">
<title>Giriş Yap</title>

<style>
body {
    margin: 0;
    font-family: Arial;
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    background: linear-gradient(45deg,#000,#333);
}

/* KART */
.login-box {
    background: #fff;
    padding: 30px;
    width: 350px;
    border-radius: 12px;
    box-shadow: 0 10px 30px rgba(0,0,0,0.3);
    text-align: center;
}

.login-box h2 {
    margin-bottom: 20px;
}

/* INPUT */
.login-box input {
    width: 100%;
    padding: 12px;
    margin: 10px 0;
    border-radius: 8px;
    border: 1px solid #ccc;
    outline: none;
}

/* BUTON */
.login-box button {
    width: 100%;
    padding: 12px;
    background: #ff9800;
    border: none;
    color: #fff;
    border-radius: 8px;
    cursor: pointer;
    font-size: 16px;
}

.login-box button:hover {
    background: #e68900;
}

/* LINK */
.login-box a {
    display: block;
    margin-top: 10px;
    color: #333;
    text-decoration: none;
}

.login-box a:hover {
    color: #ff9800;
}

/* HATA */
.error {
    color: red;
    margin-top: 10px;
}
</style>
</head>

<body>

<div class="login-box">
    <h2>🔐 Giriş Yap</h2>

    <form method="POST" action="/login">
        @csrf

        <input type="email" name="email" placeholder="Email" required>
        <input type="password" name="password" placeholder="Şifre" required>

        <button type="submit">Giriş Yap</button>
    </form>

    <a href="/register">Hesabın yok mu? Kayıt ol</a>

    @if(session('error'))
        <div class="error">{{ session('error') }}</div>
    @endif
</div>

</body>
</html>