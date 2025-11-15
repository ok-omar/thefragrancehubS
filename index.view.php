<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>thefargrancehub</title>
    <link rel="stylesheet" href="public/styles/index.css">
</head>
<body>    
    <div class="header" id="home">
        <img src="public/images/logo.png" alt="LOGO">
        <ul id="nav">
            <li><a href="#home">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>
        <div id="buttons-container">
            <button class="register-button" onclick="window.location.href='?action=register'">Register</button>
            <button class="login-button" onclick="window.location.href='?action=login'">Login</button>            
        </div>
    </div>
    <section class="hero" id="hero">
        <h1>THE WEBSITE TO FIND THE BEST FRAGRANCE, FOR YOU!</h1>
        <h2>SMELL LIKE $300, FOR $30!</h2>
        <button id="charts-btn" onclick="window.location.href='?action=charts'">CHARTS →</button>
    </section>
    <section class="value-prop" id="about">
        <div class="row">
            <img src="public/images/placeholder-square-768x768.jpg" alt="">
            <h3>Search for your favorite fragrance.</h3>
        </div>
        <div class="row">
            <img src="public/images/placeholder-square-768x768.jpg" alt="">
            <h3>Find the best choice for your budget.</h3>
        </div>
        <div class="row">
            <img src="public/images/placeholder-square-768x768.jpg" alt="">
            <h3>Save money, and support your favorite creator!</h3>
        </div>
    </section>
    <section class="contact" id="contact">
        <div id="left-column">
            <img src="public/images/contact_img_1000x5000.webp" alt="">
        </div>
        <div id="right-column">
            <input type="email" placeholder="Email">
            <input type="text" placeholder="Subject">
            <textarea placeholder="Message"></textarea>
            <button id="send-button">Send ➙</button>
        </div>
    </section>
    <footer>
        <div class="button-group">
            <a href="?action=filldb"><button>Import Database Data</button></a>
            <a href="?action=delete"><button>Clear Database Data</button></a>
            <a href="?action=homepage"><button>Go to Homepage (If you already imported the data)</button></a>
        </div>
    </footer>
    
</body>
</html>