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
    <?php if (!$loggedIn): ?>
      <div id="buttons-container">
          <button class="register-button" onclick="window.location.href='index.php?action=register'">Register</button>
          <button class="login-button" onclick="window.location.href='index.php?action=login'">Login</button>            
      </div>
    <?php else: ?>
        <div id="icons-container">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z" />
            </svg>
            <a href="../controllers/logout.php" title="Logout">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0 0 13.5 3h-6a2.25 2.25 0 0 0-2.25 2.25v13.5A2.25 2.25 0 0 0 7.5 21h6a2.25 2.25 0 0 0 2.25-2.25V15m3 0 3-3m0 0-3-3m3 3H9" />
                </svg>
            </a>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
            </svg>
        </div>
        <?php endif; ?>
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