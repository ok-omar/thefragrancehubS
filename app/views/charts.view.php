<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <link rel="stylesheet" href="../../public/styles/homepage.css">
  <title>The Fragrance Hub</title>
</head>
<body>
  <section class="left-panel">
    <div class="dropdown">
      <details>
        <summary>FRAGRANCE PER PAGE </summary>
        <div class="dropdown-content">
          <a href="?page-number=1&rows-per-page=3">3</a>
          <a href="?page-number=1&rows-per-page=5">5</a>
          <a href="?page-number=1&rows-per-page=10">10</a>
        </div>
      </details>
      </section>
  <section class="right-panel">
    <?php foreach ($fragrances as $fragrance): ?>
      <article class="perfume-card">
        <figure class="perfume-card__img">
          <img src="<?= htmlspecialchars($fragrance['image_url']) ?>" alt="<?= htmlspecialchars($fragrance['name']) ?>">
        </figure>
        <div>
          <h1 class="perfume-card__title"><?= htmlspecialchars($fragrance['name']) ?></h1>
          <div class="perfume-card__brand"><?= htmlspecialchars($fragrance['brand']) ?></div>
          <span class="pill">Sillage: <?= htmlspecialchars($fragrance['sillage']) ?></span>
          <span class="pill">Longevity: <?= htmlspecialchars($fragrance['longevity']) ?></span>
          <span class="gender <?= strtolower(htmlspecialchars($fragrance['gender'])) ?>"><?= htmlspecialchars($fragrance['gender']) ?></span>
          <div class="price">$<?= number_format($fragrance['price'], 2) ?></div>
        </div>
      </article>
    <?php endforeach; ?>
    <div class="pagination">
      <!-- PREVIOUS -->
      <a href='?page-number=1'><<</a>
      <?php if (isset($current_page) && $current_page > 1) : ?>
        <a href='?page-number=<?php echo $current_page - 1 ?>'><</a>
      <?php else : ?>
        <a class="disabled"><</a>
      <?php endif; ?>

      <!-- Current page -->
      <div class="page-info">
        <?php echo "$current_page / $pages"; ?>
      </div>
      
      <!-- NEXT -->
        <?php if (isset($current_page) && $current_page < $pages) : ?>
          <a href='?page-number=<?php echo $current_page + 1 ?>'>></a>
        <?php else : ?>
          <a class="disabled">></a>
        <?php endif; ?> 

        <!-- LAST -->   
      <a href='?page-number=<?php echo $pages ?>'>>></a>
    </div>
  </section>
    </div>
</body>
</html>