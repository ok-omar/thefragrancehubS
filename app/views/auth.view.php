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
  <a href="index.php" class="logo"><img src="public/images/logo.png" alt="LOGO"></a>

  <?php $action = $_GET['action'] ?? 'login'; ?>
  <div class="auth-box">
    <div class="tabs">
      <div class="tab <?php echo $action === 'login' ? 'active' : ''; ?>" data-target="login">LOGIN</div>
      <div class="tab <?php echo $action === 'register' ? 'active' : ''; ?>" data-target="register">REGISTER</div>
    </div> 

    <?php if (!empty($error)): ?>
      <div class="error-message" style="background: #ffebee; color: #c62828; padding: 10px; border-radius: 4px; margin-bottom: 15px;">
        <?php echo htmlspecialchars($error); ?>
      </div>
    <?php endif; ?>

    <?php if (!empty($success)): ?>
      <div class="success-message" style="background: #e8f5e9; color: #2e7d32; padding: 10px; border-radius: 4px; margin-bottom: 15px;">
        <?php echo htmlspecialchars($success); ?>
      </div>
    <?php endif; ?>

    <form method="POST" action="" id="login" class="<?php echo $action === 'login' ? 'active' : ''; ?>">
      <input type="hidden" name="action" value="login">
      <input type="text" name="username" placeholder="Username" value="<?= htmlspecialchars($form_data['username'] ?? '') ?>" required style="margin-top: 30px;"/>
      <div class="password-field">
        <input type="password" name="password" placeholder="Password" required />
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="toggle-eye">
          <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
          <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
        </svg>
      </div>
      <a href="../../index.php?action=resetpassword">forgot password?</a>
      <button class="btn" type="submit" style="margin-top: 30px;">LOGIN</button>
    </form>

    <form method="POST" action="" id="register" class="<?php echo $action === 'register' ? 'active' : ''; ?>">
      <input type="hidden" name="action" value="register">
      <input type="text" name="username" placeholder="Username" value="<?= htmlspecialchars($form_data['username'] ?? '') ?>" required />
      <input type="email" name="email" placeholder="Email" value="<?= htmlspecialchars($form_data['email'] ?? '') ?>" required />
      <div class="password-field">
        <input type="password" name="password" placeholder="Password" required />
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="toggle-eye">
          <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
          <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
        </svg>
      </div>
      <div class="password-field">
        <input type="password" name="repeat_password" placeholder="Repeat password" required />
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="toggle-eye">
          <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
          <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
        </svg>
      </div>
      <label class="checkbox">
        <input type="checkbox" name="accept_tos" id="tos-checkbox" <?= !empty($form_data['accept_tos']) ? 'checked' : '' ?> required /> Accept ToS
      </label>
      <button class="btn" id="signup-btn" type="submit">SIGN UP</button>
    </form>
  </div>

<script>
  // tab switch
  const tabs = document.querySelectorAll('.tab');
  const forms = document.querySelectorAll('form');
  
  tabs.forEach(tab => {
    tab.addEventListener('click', () => {
      tabs.forEach(t => t.classList.remove('active'));
      tab.classList.add('active');
      forms.forEach(f => f.classList.remove('active'));
      document.getElementById(tab.dataset.target).classList.add('active');
      
      const action = tab.dataset.target;
      const url = new URL(window.location);
      url.searchParams.set('action', action);
      window.history.pushState({}, '', url);
    });
  });

  // password visibility toggle
  document.querySelectorAll('.toggle-eye').forEach(icon => {
    icon.addEventListener('click', () => {
      const input = icon.previousElementSibling;
      input.type = input.type === 'password' ? 'text' : 'password';
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
