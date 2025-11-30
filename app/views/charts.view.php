<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <link rel="stylesheet" href="../../public/styles/charts.css">
  <title>The Fragrance Hub - Browse Collection</title>
</head>
<body>
  <!-- Header Navigation -->
  <div class="header">
    <a href="../../index.php" class="logo"><img src="../../public/images/logo.png" alt="LOGO"></a>
    <div id="search-container">
      <input type="text" id="search" placeholder="Search fragrances...">
      <svg id="search-icon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
      </svg>
    </div>
    <?php if (!isLoggedIn()): ?>
      <div id="buttons-container">
          <button class="register-button" onclick="window.location.href='../../index.php?action=register'">Register</button>
          <button class="login-button" onclick="window.location.href='../../index.php?action=login'">Login</button>            
      </div>
    <?php else: ?>
      <div id="icons-container">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z" />
        </svg>
        <a href="../../index.php?action=logout" title="Logout">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0 0 13.5 3h-6a2.25 2.25 0 0 0-2.25 2.25v13.5A2.25 2.25 0 0 0 7.5 21h6a2.25 2.25 0 0 0 2.25-2.25V15m3 0 3-3m0 0-3-3m3 3H9" />
          </svg>
        </a>
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
        </svg>
        <a class="create-fragrance-btn" href="../../index.php?action=fragrance" title="Create New Fragrance">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
          </svg>
        </a>
      </div>
    <?php endif; ?>
  </div>

  <!-- Main Content Container -->
  <div id="content-container">
    <!-- Filter Sidebar -->
    <div id="filter-column">
      <p>PRICE</p>
      <div class="price-range">
        <input type="range" min="0" max="500" value="500" class="price-slider">
        <div class="price-inputs">
          <input type="number" value="0" min="0" max="500">
          <span>-</span>
          <input type="number" value="500" min="0" max="500">
        </div>
      </div>

      <p>BRANDS</p>
      <input type="text" class="brand-search" placeholder="Search brands...">
      <div class="brand-list">
        <div class="checkbox-item">
          <input type="checkbox" id="chanel">
          <label for="chanel">Chanel</label>
        </div>
        <div class="checkbox-item">
          <input type="checkbox" id="dior">
          <label for="dior">Dior</label>
        </div>
        <div class="checkbox-item">
          <input type="checkbox" id="armani">
          <label for="armani">Armani</label>
        </div>
        <div class="checkbox-item">
          <input type="checkbox" id="burberry">
          <label for="burberry">Burberry</label>
        </div>
        <div class="checkbox-item">
          <input type="checkbox" id="calvin">
          <label for="calvin">Calvin Klein</label>
        </div>
        <button class="show-more-btn">Show More</button>
      </div>

      <p>GENDER</p>
      <div class="gender-list">
        <div class="checkbox-item">
          <input type="checkbox" id="male">
          <label for="male">Male</label>
        </div>
        <div class="checkbox-item">
          <input type="checkbox" id="female">
          <label for="female">Female</label>
        </div>
        <div class="checkbox-item">
          <input type="checkbox" id="unisex">
          <label for="unisex">Unisex</label>
        </div>
      </div>

      <p>FRAGRANCES PER PAGE</p>
      <div class="gender-list">
        <div class="checkbox-item">
          <input type="radio" name="rows" id="rows3" value="8" <?= $rows_per_page == 8 ? 'checked' : '' ?>>
          <label for="rows3">8 per page</label>
        </div>
        <div class="checkbox-item">
          <input type="radio" name="rows" id="rows5" value="16" <?= $rows_per_page == 16 ? 'checked' : '' ?>>
          <label for="rows5">16 per page</label>
        </div>
        <div class="checkbox-item">
          <input type="radio" name="rows" id="rows10" value="24" <?= $rows_per_page == 24 ? 'checked' : '' ?>>
          <label for="rows10">24 per page</label>
        </div>
      </div>
    </div>

    <!-- Fragrance Cards Grid -->
    <div id="container-column">
      <?php foreach ($fragrances as $fragrance): ?>
        <div class="card">
          <div class="card-image-container">
            <img src="<?= htmlspecialchars($fragrance['image_url']) ?>" alt="<?= htmlspecialchars($fragrance['name']) ?>">
            <?php if (isLoggedIn()): ?>
            <div class="favorite-icon"></div>            
              <a class="edit-pill" href="../../index.php?action=fragrance&id=<?= urlencode($fragrance['id']) ?>">Edit</a>
            <?php endif; ?>
          </div>
          <p><?= htmlspecialchars($fragrance['name']) ?></p>
        </div>
      <?php endforeach; ?>
    </div>
  </div>

  <!-- Pagination Footer -->
  <div class="pagination-footer">
    <div class="pagination-controls">
      <a href='?page-number=1' class="pagination-btn" <?= $current_page == 1 ? 'style="pointer-events:none;opacity:0.5"' : '' ?>>
        &lt;&lt;
      </a>
      
      <?php if ($current_page > 1) : ?>
        <a href='?page-number=<?= $current_page - 1 ?>' class="pagination-btn">&lt;</a>
      <?php else : ?>
        <span class="pagination-btn disabled">&lt;</span>
      <?php endif; ?>

      <span class="page-info">Page <?= $current_page ?> of <?= $pages ?></span>
      
      <?php if ($current_page < $pages) : ?>
        <a href='?page-number=<?= $current_page + 1 ?>' class="pagination-btn">&gt;</a>
      <?php else : ?>
        <span class="pagination-btn disabled">&gt;</span>
      <?php endif; ?>

      <a href='?page-number=<?= $pages ?>' class="pagination-btn" <?= $current_page == $pages ? 'style="pointer-events:none;opacity:0.5"' : '' ?>>
        &gt;&gt;
      </a>
    </div>
  </div>

  <script>
    // Rows per page radio button handler
    document.querySelectorAll('input[name="rows"]').forEach(radio => {
      radio.addEventListener('change', (e) => {
        window.location.href = `?page-number=1&rows-per-page=${e.target.value}`;
      });
    });

    // Favorite icon toggle
    document.querySelectorAll('.favorite-icon').forEach(icon => {
      icon.addEventListener('click', (e) => {
        e.stopPropagation();
        icon.classList.toggle('active');
      });
    });

    // Card click handler (for future detail page)
    document.querySelectorAll('.card').forEach(card => {
      card.addEventListener('click', () => {
        // Future: navigate to detail page
        console.log('Card clicked');
      });
    });
  </script>
</body>
</html>