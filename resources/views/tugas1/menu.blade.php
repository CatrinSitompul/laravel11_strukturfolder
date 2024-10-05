<!DOCTYPE html>
<html>
<head>
<title>Menu Form</title>
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        margin: 0;
        padding: 0;
    }

    .container {
        width: 80%;
        margin: auto;
        overflow: hidden;
    }

    header {
        background-color: #333;
        color: #fff;
        padding: 1rem 0;
        text-align: center;
    }

    nav {
        background-color: #555;
        color: #fff;
        padding: 1rem 0;
        text-align: center;
    }

    nav a {
        color: #fff;
        text-decoration: none;
        padding: 0 20px;
        font-size: 1.2em;
    }

    main {
        padding: 20px;
        text-align: center;
    }

    footer {
        background-color: #333;
        color: #fff;
        text-align: center;
        padding: 1rem 0;
        position: fixed;
        bottom: 0;
        width: 100%;
    }
</style>
</head>
<body>

<header>
    <h1>Selamat Datang di Website Kami</h1>
</header>

<nav>
    <a href="/menu">Home</a>
    <a href="/about">About</a>
    <a href="/data">Data</a>
    <a href="/contactus">Contact Us</a>
    <a href="/">Logout</a>
</nav>

<main>
    <section id="about">
        <h2>About Us</h2>
        <p>saya catrin debora anak pertama dari 6 bersaudara</p>
    </section>

    <section id="data">
        <h2>Data</h2>
        <p>Ini adalah halaman data. tambahkan data disini</p>
        
        </section>

    <section id="contact">
        
            <h2>Contact Us</h2>
            <p>Ini adalah halaman contact us.tambahkan form kontak atau informasi kontak Anda di sini.</p>
            <form>
              <label for="name">Name:</label>
              <input type="text" id="name" name="name"><br><br>
              <label for="email">Email:</label>
              <input type="email" id="email" name="email"><br><br>
              <label for="phone">Phone:</label>
              <input type="tel" id="phone" name="phone"><br><br>
              <label for="message">Message:</label>
              <textarea id="message" name="message"></textarea><br><br>
              <input type="submit" value="Send">
            </form>
           </section>

    <section id="logout">
        <h2>Logout</h2>
        <p>Anda telah logout. Terima kasih telah mengunjungi website kami.</p>
        <input type="submit" value="logout">
    </section>
</main>

</body>
</html>