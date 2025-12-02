<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title><?= htmlspecialchars($pageTitle) ?> | The Fragrance Hub</title>
	<link rel="stylesheet" href="../../public/styles/fragrance.css">
</head>
<body>
	<header class="fragrance-header">
		<a href="../../index.php" class="logo"><img src="../../public/images/logo.png" alt="Website Logo"></a>
	</header>

	<main class="fragrance-form-wrapper">
        <!-- Container for showing error messages -->
		<?php if (!empty($errors)): ?>
			<div class="alert alert-error">
				<strong>Something went wrong:</strong>
				<ul>
					<?php foreach ($errors as $message): ?>
						<li><?= htmlspecialchars($message) ?></li>
					<?php endforeach; ?>
				</ul>
			</div>
		<?php endif; ?>
        <!-- Container for showing success messages -->
		<?php if (!empty($successMessages)): ?>
			<div class="alert alert-success">
				<?php foreach ($successMessages as $message): ?>
					<p><?= htmlspecialchars($message) ?></p>
				<?php endforeach; ?>
			</div>
		<?php endif; ?>
        <!-- the fragrance card with the inputs -->
		<section class="fragrance-card">
			<form method="POST" action="<?= htmlspecialchars($formAction, ENT_QUOTES, encoding: 'UTF-8'); ?>" class="fragrance-form">
                <!-- hidden input to keep track of the intent (is it for create or update?) -->
				<input type="hidden" name="intent" value="<?= $isEdit ? 'update' : 'create'; ?>">
				<?php if (!empty($fragrance['id'])): ?>
                    <!-- Hidden input to maintain the fragrance when the get request is lost -->
					<input type="hidden" name="original_id" value="<?= htmlspecialchars($fragrance['id'], ENT_QUOTES, 'UTF-8'); ?>">
				<?php endif; ?>
                
                <!-- The form -->
				<div class="form-grid">
					<label class="form-field">
						<span>Name</span>
						<input type="text" name="name" value="<?= $oldValue('name'); ?>" placeholder="Fragrance Name" required />
					</label>

					<label class="form-field">
						<span>Brand</span>
						<input type="text" name="brand" value="<?= $oldValue('brand'); ?>" placeholder="Brand" required />
					</label>

					<label class="form-field">
						<span>Price (USD)</span>
						<input type="number" name="price" value="<?= $oldValue('price'); ?>" placeholder="0.00" min="0" max="1000" step="0.01" required />
					</label>
                    <!-- Longevity field with auto-complete -->
					<label class="form-field">
						<span>Longevity</span>
						<input type="text" name="longevity" value="<?= $oldValue('longevity'); ?>" placeholder="e.g. 6-8 hours" list="longevity-options" />
						<datalist id="longevity-options">
							<option value="2-4 hours"></option>
							<option value="4-6 hours"></option>
							<option value="6-8 hours"></option>
							<option value="8-10 hours"></option>
							<option value="12+ hours"></option>
						</datalist>
					</label>
                    <!-- Sillage field with auto-complete -->
					<label class="form-field">
						<span>Sillage</span>
						<input type="text" name="sillage" value="<?= $oldValue('sillage'); ?>" placeholder="e.g. Moderate" list="sillage-options" />
						<datalist id="sillage-options">
							<option value="Intimate"></option>
							<option value="Moderate"></option>
							<option value="Strong"></option>
							<option value="Beast Mode"></option>
						</datalist>
					</label>

                    <!-- Image URL input -->
					<label class="form-field form-field-full">
						<span>Image URL</span>
						<input type="url" name="image_url" value="<?= $oldValue('image_url'); ?>" placeholder="https://example.com/image.jpg" required />
					</label>
				</div>

				<?php if (!empty($fragrance['image_url'])): ?>
					<div class="preview">
						<p>Current Image</p>
						<img src="<?= htmlspecialchars($fragrance['image_url'], ENT_QUOTES, 'UTF-8'); ?>" alt="<?= htmlspecialchars($fragrance['name'] ?? 'Fragrance image', ENT_QUOTES, 'UTF-8'); ?>" />
					</div>
				<?php endif; ?>

				<div class="form-actions">
					<button type="submit" class="btn-primary"><?= $isEdit ? 'Update Fragrance' : 'Create Fragrance'; ?></button>
					<a class="btn-secondary" href="../../index.php?action=charts">Done</a>
				</div>
			</form>
		</section>
	</main>
</body>
</html>
