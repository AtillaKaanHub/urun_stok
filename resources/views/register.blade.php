<!DOCTYPE html>
<html lang="tr">
<head>
<meta charset="UTF-8">
<title>Kayıt Ol</title>

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

.register-box {
    background: #fff;
    padding: 30px;
    width: 350px;
    border-radius: 12px;
    box-shadow: 0 10px 30px rgba(0,0,0,0.3);
    text-align: center;
}

.register-box h2 {
    margin-bottom: 20px;
}

.register-box input {
    width: 100%;
    padding: 12px;
    margin: 10px 0;
    border-radius: 8px;
    border: 1px solid #ccc;
}

.register-box button {
    width: 100%;
    padding: 12px;
    background: #27ae60;
    border: none;
    color: #fff;
    border-radius: 8px;
    cursor: pointer;
}

.register-box button:hover {
    background: #1e8449;
}

.register-box a {
    display: block;
    margin-top: 10px;
    text-decoration: none;
    color: #333;
}

.register-box a:hover {
    color: #27ae60;
}
</style>
</head>

<body>

<div class="register-box">
    <h2>📝 Kayıt Ol</h2>

    <form method="POST" action="/register">
        @csrf

        <input type="text" name="name" placeholder="Ad Soyad" required>
        <input type="email" name="email" placeholder="Email" required>
        <input type="password" name="password" placeholder="Şifre" required>

        <button type="submit">Kayıt Ol</button>
    </form>

    <a href="/login">Zaten hesabın var mı? Giriş yap</a>
</div>

</body>
</html>