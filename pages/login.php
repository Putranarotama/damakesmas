<?php
require_once __DIR__ . '/../config.php';
$page_title = 'DAMAKESMAS - Masuk ke Akun Anda';
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= htmlspecialchars($page_title) ?></title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">
  <style>
    /* ── Design Tokens (sesuai sistem DAMAKESMAS) ── */
    :root {
      --color-primary:       #1A4A3C;
      --color-primary-dark:  #0F3028;
      --color-primary-light: #E8F4F0;
      --color-accent-green:  #4CAF7D;
      --color-border:        #E5E7EB;
      --color-bg:            #F5F7F6;
      --color-white:         #FFFFFF;
      --color-text-primary:  #111827;
      --color-text-secondary:#374151;
      --color-text-muted:    #6B7280;
      --color-text-faint:    #9CA3AF;
      --color-danger:        #EF4444;
      --font-display:        'Poppins', sans-serif;
      --font-body:           'Poppins', sans-serif;
      --radius-sm:  6px;
      --radius-md:  10px;
      --radius-lg:  12px;
      --radius-xl:  16px;
      --radius-2xl: 20px;
      --shadow-card: 0 2px 8px rgba(0,0,0,.06);
      --shadow-card-hover: 0 6px 20px rgba(0,0,0,.10);
      --shadow-btn:  0 4px 14px rgba(26,74,60,.30);
      --transition-fast: 150ms ease;
    }

    *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }
    html, body { height: 100%; }
    body {
      font-family: var(--font-body);
      display: flex;
      min-height: 100vh;
      background: var(--color-white);
      color: var(--color-text-primary);
      -webkit-font-smoothing: antialiased;
      font-size: 1rem;
      line-height: 1.6;
    }
    a { text-decoration: none; color: inherit; }
    button { font-family: var(--font-body); cursor: pointer; border: none; }
    input  { font-family: var(--font-body); }

    /* ── LEFT PANEL ── */
    .left-panel {
      width: 42%;
      flex-shrink: 0;
      background: var(--color-primary);
      display: flex;
      flex-direction: column;
      justify-content: space-between;
      padding: 2.5rem 3rem;
      position: relative;
      overflow: hidden;
    }
    .left-panel::before {
      content: '';
      position: absolute;
      inset: 0;
      background:
        radial-gradient(ellipse 70% 50% at 20% 80%, rgba(76,175,125,.18) 0%, transparent 60%),
        radial-gradient(ellipse 40% 40% at 80% 10%, rgba(110,231,183,.10) 0%, transparent 50%);
      pointer-events: none;
    }
    .left-panel::after {
      content: '';
      position: absolute;
      bottom: -80px; right: -80px;
      width: 320px; height: 320px;
      border-radius: 50%;
      border: 1px solid rgba(255,255,255,.06);
      pointer-events: none;
    }

    .lp-brand {
      display: flex;
      align-items: center;
      gap: .875rem;
      position: relative;
      z-index: 1;
    }
    .lp-logo {
      width: 40px; height: 40px;
      background: transparent;
      display: grid; place-items: center;
      flex-shrink: 0;
    }
    .lp-logo img { width: 40px; height: 40px; object-fit: contain; }
    .lp-divider {
      width: 1px; height: 24px;
      background: rgba(255,255,255,.25);
    }
    .lp-brand-name {
      font-family: var(--font-display);
      font-weight: 800;
      font-size: 1.125rem;
      color: var(--color-white);
      letter-spacing: .05em;
      text-transform: uppercase;
    }

    .lp-content {
      position: relative;
      z-index: 1;
    }
    .lp-tagline {
      font-family: var(--font-display);
      font-size: 2rem;
      font-weight: 700;
      color: var(--color-white);
      line-height: 1.25;
      margin-bottom: 1rem;
    }
    .lp-tagline span {
      color: var(--color-white);
      display: block;
    }
    .lp-desc {
      font-family: var(--font-body);
      font-size: .9375rem;
      font-weight: 400;
      color: rgba(255,255,255,.62);
      line-height: 1.75;
      max-width: 340px;
    }

    .lp-footer {
      position: relative;
      z-index: 1;
      font-size: .75rem;
      color: rgba(255,255,255,.30);
    }

    /* ── RIGHT PANEL ── */
    .right-panel {
      flex: 1;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      padding: 2rem;
      background: var(--color-bg);
    }

    .login-card {
      background: var(--color-white);
      border-radius: var(--radius-xl);
      box-shadow: var(--shadow-card);
      border: 1px solid var(--color-border);
      padding: 2.5rem 2.25rem;
      width: 100%;
      max-width: 440px;
      animation: slideUp .4s ease both;
    }
    @keyframes slideUp {
      from { opacity: 0; transform: translateY(20px); }
      to   { opacity: 1; transform: translateY(0); }
    }

    .login-title {
      font-family: var(--font-display);
      font-size: 1.5rem;
      font-weight: 700;
      color: var(--color-text-primary);
      margin-bottom: .5rem;
      line-height: 1.2;
    }
    .login-sub {
      font-family: var(--font-body);
      font-size: .9rem;
      color: var(--color-text-muted);
      line-height: 1.6;
      margin-bottom: 2rem;
    }

    /* ── Fields ── */
    .field { margin-bottom: 1.25rem; }
    .field-label {
      display: block;
      font-family: var(--font-body);
      font-size: .6875rem;
      font-weight: 700;
      text-transform: uppercase;
      letter-spacing: .08em;
      color: var(--color-text-muted);
      margin-bottom: .5rem;
    }
    .field-wrap {
      position: relative;
      display: flex;
      align-items: center;
    }
    .field-icon {
      position: absolute;
      left: .875rem;
      color: var(--color-text-faint);
      display: grid; place-items: center;
      pointer-events: none;
    }
    .field-input {
      width: 100%;
      border: 1.5px solid var(--color-border);
      border-radius: var(--radius-lg);
      padding: .875rem 1rem .875rem 2.75rem;
      font-family: var(--font-body);
      font-size: .9375rem;
      color: var(--color-text-primary);
      background: var(--color-bg);
      outline: none;
      transition: border-color var(--transition-fast), background var(--transition-fast), box-shadow var(--transition-fast);
    }
    .field-input::placeholder { color: var(--color-text-faint); }
    .field-input:focus {
      border-color: var(--color-primary);
      background: var(--color-white);
      box-shadow: 0 0 0 3px rgba(26,74,60,.08);
    }
    .field-input.error {
      border-color: var(--color-danger);
      box-shadow: 0 0 0 3px rgba(239,68,68,.08);
    }
    .field-error {
      font-size: .75rem;
      color: var(--color-danger);
      margin-top: .375rem;
      display: none;
    }
    .field-error.show { display: block; }

    .toggle-pw {
      position: absolute;
      right: .875rem;
      background: none;
      border: none;
      color: var(--color-text-faint);
      cursor: pointer;
      display: grid; place-items: center;
      padding: .25rem;
      border-radius: var(--radius-sm);
      transition: color var(--transition-fast);
    }
    .toggle-pw:hover { color: var(--color-text-secondary); }

    /* ── Options ── */
    .form-opts {
      display: flex;
      align-items: center;
      justify-content: space-between;
      margin-bottom: 1.5rem;
    }
    .checkbox-wrap {
      display: flex;
      align-items: center;
      gap: .5rem;
      cursor: pointer;
    }
    .checkbox-wrap input[type="checkbox"] {
      width: 16px; height: 16px;
      accent-color: var(--color-primary);
      cursor: pointer;
    }
    .checkbox-label {
      font-size: .875rem;
      color: var(--color-text-secondary);
      user-select: none;
    }
    .forgot-link {
      font-size: .875rem;
      font-weight: 600;
      color: var(--color-primary);
      transition: color var(--transition-fast);
    }
    .forgot-link:hover { color: var(--color-accent-green); }

    /* ── Button ── */
    .btn-login {
      width: 100%;
      background: var(--color-primary);
      color: var(--color-white);
      border: none;
      border-radius: var(--radius-lg);
      padding: 1rem;
      font-family: var(--font-display);
      font-size: 1rem;
      font-weight: 700;
      letter-spacing: .04em;
      text-transform: uppercase;
      display: flex;
      align-items: center;
      justify-content: center;
      gap: .625rem;
      cursor: pointer;
      transition: background var(--transition-fast), box-shadow var(--transition-fast), transform var(--transition-fast);
      box-shadow: var(--shadow-btn);
      margin-bottom: 1.5rem;
    }
    .btn-login:hover { background: var(--color-primary-dark); box-shadow: 0 6px 20px rgba(26,74,60,.40); }
    .btn-login:active { transform: scale(.99); }
    .btn-login .spinner {
      display: none;
      width: 18px; height: 18px;
      border: 2px solid rgba(255,255,255,.35);
      border-top-color: white;
      border-radius: 50%;
      animation: spin .6s linear infinite;
    }
    .btn-login.loading .spinner { display: block; }
    .btn-login.loading .btn-text { display: none; }
    @keyframes spin { to { transform: rotate(360deg); } }

    /* ── Alert ── */
    .alert-error {
      display: none;
      background: #FEF2F2;
      border: 1px solid #FECACA;
      border-radius: var(--radius-md);
      padding: .75rem 1rem;
      margin-bottom: 1.25rem;
      font-size: .875rem;
      color: #B91C1C;
      align-items: center;
      gap: .5rem;
    }
    .alert-error.show { display: flex; }

    /* ── Page footer ── */
    .page-footer {
      margin-top: 2rem;
      text-align: center;
    }
    .page-footer-copy {
      font-size: .75rem;
      color: var(--color-text-faint);
      margin-bottom: .5rem;
    }
    .page-footer-links {
      display: flex;
      align-items: center;
      justify-content: center;
      gap: .5rem;
      font-size: .75rem;
      color: var(--color-text-faint);
    }
    .page-footer-links a { color: var(--color-text-muted); transition: color var(--transition-fast); }
    .page-footer-links a:hover { color: var(--color-text-primary); }
    .page-footer-links span { opacity: .4; }

    /* ── RESPONSIVE ── */
    @media (max-width: 900px) {
      .left-panel { width: 38%; padding: 2rem; }
      .lp-tagline { font-size: 1.625rem; }
    }
    @media (max-width: 680px) {
      body { flex-direction: column; }
      .left-panel {
        width: 100%;
        padding: 1.75rem 1.5rem 2rem;
      }
      .lp-footer { display: none; }
      .right-panel {
        padding: 2rem 1.25rem 3rem;
        justify-content: flex-start;
      }
      .login-card { padding: 2rem 1.5rem; }
    }
    @media (max-width: 400px) {
      .right-panel { padding: 1.5rem 1rem 2.5rem; }
      .login-card  { padding: 1.75rem 1.25rem; }
      .login-title { font-size: 1.25rem; }
    }
  </style>
</head>
<body>

  <!-- LEFT PANEL -->
  <div class="left-panel">
    <div class="lp-brand">
      <div class="lp-logo">
        <img src="<?= asset('assets/img/logo-kota-denpasar.png') ?>" alt="Logo Kota Denpasar">
      </div>
      <div class="lp-divider"></div>
      <span class="lp-brand-name">DAMAKESMAS</span>
    </div>

    <div class="lp-content">
      <h1 class="lp-tagline">
        Selamat Datang di Portal
        <span>DAMAKESMAS</span>
      </h1>
      <p class="lp-desc">
        Denpasar Mantap Kesehatan Masyarakat  program inovasi pelayanan kesehatan terpadu Pemerintah Kota Denpasar.
      </p>
    </div>

    <div class="lp-footer">
      &copy; 2026 Pemerintah Kota Denpasar
    </div>
  </div>

  <!-- RIGHT PANEL -->
  <div class="right-panel">
    <div class="login-card">

      <h2 class="login-title">Masuk ke Akun Anda</h2>
      <p class="login-sub">Silakan masukkan kredensial resmi Anda untuk melanjutkan.</p>

      <div class="alert-error" id="alert-error" role="alert">
        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><line x1="12" y1="8" x2="12" y2="12"/><line x1="12" y1="16" x2="12.01" y2="16"/></svg>
        <span id="alert-msg">Username atau password salah. Silakan coba lagi.</span>
      </div>

      <form id="login-form" novalidate>

        <div class="field">
          <label class="field-label" for="username">Username</label>
          <div class="field-wrap">
            <span class="field-icon">
              <svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75"><path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
            </span>
            <input type="text" id="username" name="username"
                   class="field-input"
                   placeholder="Masukkan username"
                   autocomplete="username"
                   required>
          </div>
          <span class="field-error" id="err-username">Username tidak boleh kosong.</span>
        </div>

        <div class="field">
          <label class="field-label" for="password">Password</label>
          <div class="field-wrap">
            <span class="field-icon">
              <svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"/><path d="M7 11V7a5 5 0 0110 0v4"/></svg>
            </span>
            <input type="password" id="password" name="password"
                   class="field-input"
                   placeholder="••••••••"
                   autocomplete="current-password"
                   required>
            <button type="button" class="toggle-pw" id="toggle-pw" aria-label="Tampilkan password">
              <svg id="eye-show" width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/><circle cx="12" cy="12" r="3"/></svg>
              <svg id="eye-hide" width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" style="display:none"><path d="M17.94 17.94A10.07 10.07 0 0112 20c-7 0-11-8-11-8a18.45 18.45 0 015.06-5.94M9.9 4.24A9.12 9.12 0 0112 4c7 0 11 8 11 8a18.5 18.5 0 01-2.16 3.19m-6.72-1.07a3 3 0 11-4.24-4.24"/><line x1="1" y1="1" x2="23" y2="23"/></svg>
            </button>
          </div>
          <span class="field-error" id="err-password">Password tidak boleh kosong.</span>
        </div>

        <div class="form-opts">
          <label class="checkbox-wrap">
            <input type="checkbox" name="remember" id="remember">
            <span class="checkbox-label">Ingat saya</span>
          </label>
          <a href="#" class="forgot-link">Lupa Password?</a>
        </div>

        <button type="submit" class="btn-login" id="btn-login">
          <div class="spinner"></div>
          <span class="btn-text">Masuk</span>
        </button>

      </form>
    </div>

    <div class="page-footer">
      <p class="page-footer-copy">&copy; 2026 Pemerintah Kota Denpasar. Seluruh Hak Cipta Dilindungi.</p>
      <div class="page-footer-links">
        <a href="#">Kebijakan Privasi</a>
        <span>•</span>
        <a href="#">Syarat &amp; Ketentuan</a>
        <span>•</span>
        <a href="#">SLA Pelayanan</a>
      </div>
    </div>
  </div>

  <script>
    const togglePw = document.getElementById('toggle-pw');
    const pwInput  = document.getElementById('password');
    const eyeShow  = document.getElementById('eye-show');
    const eyeHide  = document.getElementById('eye-hide');

    togglePw.addEventListener('click', () => {
      const isHidden = pwInput.type === 'password';
      pwInput.type = isHidden ? 'text' : 'password';
      eyeShow.style.display = isHidden ? 'none'  : 'block';
      eyeHide.style.display = isHidden ? 'block' : 'none';
    });

    const form      = document.getElementById('login-form');
    const btnLogin  = document.getElementById('btn-login');
    const alertBox  = document.getElementById('alert-error');
    const alertMsg  = document.getElementById('alert-msg');
    const usernameI = document.getElementById('username');
    const passwordI = document.getElementById('password');
    const errUser   = document.getElementById('err-username');
    const errPass   = document.getElementById('err-password');

    function setError(input, errEl, show) {
      input.classList.toggle('error', show);
      errEl.classList.toggle('show', show);
    }

    usernameI.addEventListener('input', () => setError(usernameI, errUser, false));
    passwordI.addEventListener('input', () => setError(passwordI, errPass, false));

    form.addEventListener('submit', async (e) => {
      e.preventDefault();
      alertBox.classList.remove('show');

      let valid = true;
      if (!usernameI.value.trim()) { setError(usernameI, errUser, true); valid = false; }
      if (!passwordI.value.trim()) { setError(passwordI, errPass, true); valid = false; }
      if (!valid) return;

      btnLogin.classList.add('loading');
      btnLogin.disabled = true;

      await new Promise(r => setTimeout(r, 1500));

      if (usernameI.value.trim() !== 'admin') {
        alertMsg.textContent = 'Username atau password salah. Silakan coba lagi.';
        alertBox.classList.add('show');
        btnLogin.classList.remove('loading');
        btnLogin.disabled = false;
        return;
      }

      window.location.href = '../index.php';
    });
  </script>

</body>
</html>