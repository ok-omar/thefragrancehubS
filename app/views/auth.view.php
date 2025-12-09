<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Login / Register</title>
<link rel="stylesheet" href="public/styles/auth.css">
<style>
 
</style>
</head>
<body>
  <header>
    <a href="index.php" class="logo"><img src="public/images/logo.png" alt="The Fragrance Hub - Return to home"></a>
  </header>

  <?php $action = $_GET['action'] ?? 'login'; ?>
  <main class="auth-box">
    <h1 class="visually-hidden">Login or Register for The Fragrance Hub</h1>
    <div>
      <div class="tabs" role="tablist" aria-label="Authentication options">
        <button type="button" class="tab <?php echo $action === 'login' ? 'active' : ''; ?>" role="tab" aria-selected="<?php echo $action === 'login' ? 'true' : 'false'; ?>" aria-controls="login" id="login-tab" data-target="login">LOGIN</button>
        <button type="button" class="tab <?php echo $action === 'register' ? 'active' : ''; ?>" role="tab" aria-selected="<?php echo $action === 'register' ? 'true' : 'false'; ?>" aria-controls="register" id="register-tab" data-target="register">REGISTER</button>
      </div> 

      <?php if (!empty($error)): ?>
        <div class="error-message" role="alert" aria-live="assertive" style="background: #ffebee; color: #c62828; padding: 10px; border-radius: 4px; margin-bottom: 15px;">
          <?php echo htmlspecialchars($error); ?>
        </div>
      <?php endif; ?>

      <?php if (!empty($success)): ?>
        <div class="success-message" role="status" aria-live="polite" style="background: #e8f5e9; color: #2e7d32; padding: 10px; border-radius: 4px; margin-bottom: 15px;">
          <?php echo htmlspecialchars($success); ?>
        </div>
      <?php endif; ?>

      <form method="POST" action="" id="login" role="tabpanel" aria-labelledby="login-tab" class="<?php echo $action === 'login' ? 'active' : ''; ?>">
        <input type="hidden" name="action" value="login">
        <input type="text" name="username" placeholder="Username" aria-label="Username" value="<?= htmlspecialchars($form_data['username'] ?? '') ?>" required style="margin-top: 30px;"/>
        <div class="password-field">
          <input type="password" name="password" placeholder="Password" aria-label="Password" id="login-password" required />
          <button type="button" class="toggle-eye" aria-label="Show password" aria-pressed="false" aria-controls="login-password">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
              <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
            </svg>
          </button>
        </div>
        <a href="../../index.php?action=resetpassword">Forgot password?</a>
        <button class="btn" type="submit" style="margin-top: 30px;">LOGIN</button>
      </form>

      <form method="POST" action="" id="register" role="tabpanel" aria-labelledby="register-tab" class="<?php echo $action === 'register' ? 'active' : ''; ?>">
        <input type="hidden" name="action" value="register">
        <input type="text" name="username" placeholder="Username" aria-label="Username" value="<?= htmlspecialchars($form_data['username'] ?? '') ?>" required />
        <input type="email" name="email" placeholder="Email" aria-label="Email address" value="<?= htmlspecialchars($form_data['email'] ?? '') ?>" required />
        <div class="password-field">
          <input type="password" name="password" placeholder="Password" aria-label="Password" id="register-password" required />
          <button type="button" class="toggle-eye" aria-label="Show password" aria-pressed="false" aria-controls="register-password">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
              <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
            </svg>
          </button>
        </div>
        <div class="password-field">
          <input type="password" name="repeat_password" placeholder="Repeat password" aria-label="Repeat password" id="register-password-repeat" required />
          <button type="button" class="toggle-eye" aria-label="Show password" aria-pressed="false" aria-controls="register-password-repeat">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
              <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
            </svg>
          </button>
        </div>
        <label class="checkbox">
          <input type="checkbox" name="accept_tos" id="tos-checkbox" <?= !empty($form_data['accept_tos']) ? 'checked' : '' ?> required /> Accept Terms of Service
        </label>
        <button class="btn" id="signup-btn" type="submit">SIGN UP</button>
      </form>
    </div>
  </main>

<script>
  // tab switch with ARIA updates
  const tabs = document.querySelectorAll('.tab');
  const forms = document.querySelectorAll('form');
  
  tabs.forEach(tab => {
    tab.addEventListener('click', () => {
      tabs.forEach(t => {
        t.classList.remove('active');
        t.setAttribute('aria-selected', 'false');
      });
      tab.classList.add('active');
      tab.setAttribute('aria-selected', 'true');
      
      forms.forEach(f => f.classList.remove('active'));
      const targetForm = document.getElementById(tab.dataset.target);
      targetForm.classList.add('active');
      
      const action = tab.dataset.target;
      const url = new URL(window.location);
      url.searchParams.set('action', action);
      window.history.pushState({}, '', url);
    });
  });

  // password visibility toggle with aria-pressed
  document.querySelectorAll('.toggle-eye').forEach(button => {
    button.addEventListener('click', () => {
      const inputId = button.getAttribute('aria-controls');
      const input = document.getElementById(inputId);
      const isPressed = button.getAttribute('aria-pressed') === 'true';
      
      if (isPressed) {
        input.type = 'password';
        button.setAttribute('aria-pressed', 'false');
        button.setAttribute('aria-label', 'Show password');
      } else {
        input.type = 'text';
        button.setAttribute('aria-pressed', 'true');
        button.setAttribute('aria-label', 'Hide password');
      }
    });
  });

  // Enable/disable signup button based on ToS checkbox
  const tosCheckbox = document.getElementById('tos-checkbox');
  const signupBtn = document.getElementById('signup-btn');
  
  tosCheckbox.addEventListener('change', () => {
    signupBtn.disabled = !tosCheckbox.checked;
  });
</script>
</body>
</html>
