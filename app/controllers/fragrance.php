<?php
require_once __DIR__ . '/../models/connection.php';
require_once __DIR__ . '/../models/DAO/fragrance/read.php';
require_once __DIR__ . '/../models/DAO/fragrance/create.php';
require_once __DIR__ . '/../models/DAO/fragrance/update.php';
require_once __DIR__ . '/common.php';


requireLogin();

// Array to maintain the inputs in case of page reload
$formValues = [];

// Arrays for errors and success messages
$errors = [];
$successMessages = [];

// The fragrance being created / Updated
$fragrance = [];


// Get the fragrance id from the URL
$fragranceId = isset($_GET['id']) ? (int) $_GET['id'] : null;

// This is an if to maintain the fragrance id after the page refresh and the get request is lost
if ($_SERVER['REQUEST_METHOD'] === 'POST' && !$fragranceId) {
	$postedOriginal = trim($_POST['original_id'] ?? '');
	if ($postedOriginal !== '' && ctype_digit($postedOriginal)) {
		$fragranceId = (int) $postedOriginal;
	}
}

// Get the fragrance from the database
if ($fragranceId) {
	$fragrance = getFragranceById($pdo, $fragranceId) ?: [];
	if (!$fragrance) {
		$errors[] = 'Fragrance not found.';
	}
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	$formValues = [
		'name' => trim($_POST['name'] ?? ''),
		'brand' => trim($_POST['brand'] ?? ''),
		'price' => trim($_POST['price'] ?? ''),
		'longevity' => trim($_POST['longevity'] ?? ''),
		'image_url' => trim($_POST['image_url'] ?? ''),
		'sillage' => trim($_POST['sillage'] ?? ''),
	];

    // Get the intent of the form, if the hidden field is not set up.
    // If its not setup but the fragrance already exists, then it must be an update
	$intent = $_POST['intent'] ?? ($fragrance ? 'update' : 'create');

    // Error handling for invalid input
	if ($formValues['name'] === '') {
		$errors[] = 'Name is required.';
	}
	if ($formValues['brand'] === '') {
		$errors[] = 'Brand is required.';
	}
	if ($formValues['image_url'] === '') {
		$errors[] = 'Image URL is required.';
	}

	if ($formValues['price'] === '') {
		$errors[] = 'Price is required.';
	} elseif (!is_numeric($formValues['price'])) {
		$errors[] = 'Price must be a number.';
	} elseif ((float) $formValues['price'] <= 0) {
		$errors[] = 'Price must greater than 0';
	}

    // The new data of the fragrance
	$payload = [
		'name' => $formValues['name'],
		'brand' => $formValues['brand'],
		'image_url' => $formValues['image_url'] ?: null,
		'gender' => $fragrance['gender'] ?? 'unisex',
		'price' => $formValues['price'] === '' ? null : number_format((float) $formValues['price'], 2, '.', ''),
		'longevity' => $formValues['longevity'] ?: null,
		'sillage' => $formValues['sillage'] ?: null,
	];

	if (empty($errors)) {
		try {
			if ($intent === 'update' && $fragrance) {
                $currentId = (int) ($fragrance['id'] ?? 0);
                updateFragrance($pdo, $currentId, $payload);
                $fragranceId = $currentId;
                $fragrance = getFragranceById($pdo, $currentId) ?: [];
                
                // restore ID if reload fails
                if (empty($fragrance['id'])) {
                    $fragrance['id'] = $currentId;
                }

                $successMessages[] = 'Fragrance updated successfully.';
			} else {
				$newId = createFragrance($pdo, $payload);
				$fragranceId = $newId;
				$fragrance = getFragranceById($pdo, $newId) ?: [];
				$successMessages[] = 'Fragrance created successfully.';
			}
			$formValues = [];
		} catch (Throwable $t) {
            $errors[] = 'Unable to save fragrance right now.';
		}
	}
}

// View helper variables
$isEdit = !empty($fragrance) && !empty($fragrance['id']);
$pageTitle = $isEdit ? 'Edit Fragrance' : 'Create Fragrance';
$formAction = $_SERVER['PHP_SELF'] ?? 'fragrance.php';

// helper function, it gets the value of the input field from formValues, if none existant then in fragrance from the db, if not then an empty string
// Serves for preserving the values of the inputs on page reload
$oldValue = function($key) use ($formValues, $fragrance) {
    $value = $formValues[$key] ?? $fragrance[$key] ?? '';
    return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
};

require __DIR__ . '/../views/fragrance.view.php';

?>
