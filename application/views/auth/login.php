<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - PRESTIGE</title>
    <link rel="stylesheet" href="page css/login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<style>
	/* ======= GENERAL STYLES ======= */
:root {
    --primary-color: #a67c52;
    --primary-hover: #8c6a45;
    --text-color: #333;
    --light-text: #777;
    --border-color: #ddd;
    --light-bg: #f9f9f9;
    --white: #ffffff;
    --google-btn: #f5f5f5;
    --google-hover: #eaeaea;
    --facebook-btn: #3b5998;
    --facebook-hover: #344e86;
    --dark-bg: #222;
    --footer-text: #aaa;
}

* {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
}

body {
    font-family: 'Montserrat', 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    line-height: 1.6;
    color: var(--text-color);
    background-color: var(--white);
}

h1, h2, h3, h4, h5, h6 {
    font-family: 'Playfair Display', Georgia, 'Times New Roman', serif;
    font-weight: 600;
    margin-bottom: 0.5em;
}

a {
    text-decoration: none;
    color: var(--text-color);
    transition: all 0.3s ease;
}

ul, ol {
    list-style: none;
}

img {
    max-width: 100%;
    height: auto;
    display: block;
}

.container {
    width: 100%;
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
}

/* ======= HEADER STYLES ======= */
header {
    background-color: var(--white);
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    position: sticky;
    top: 0;
    z-index: 1000;
    padding: 15px 0;
}

header .container {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.logo h1 {
    font-size: 28px;
    font-weight: 700;
    color: var(--text-color);
    margin-bottom: 0;
    letter-spacing: 1px;
}

.logo p {
    font-size: 14px;
    color: var(--primary-color);
    letter-spacing: 1px;
    text-transform: uppercase;
}

nav ul {
    display: flex;
    align-items: center;
}

nav ul li {
    margin-left: 20px;
}

nav ul li a {
    font-size: 16px;
    font-weight: 500;
    text-transform: uppercase;
    letter-spacing: 0.5px;
    padding-bottom: 5px;
    position: relative;
}

nav ul li a:after {
    content: '';
    position: absolute;
    width: 0;
    height: 2px;
    bottom: 0;
    left: 0;
    background-color: var(--primary-color);
    transition: width 0.3s ease;
}

nav ul li a:hover:after,
nav ul li a.active:after {
    width: 100%;
}

nav ul li a.active {
    color: var(--primary-color);
}

/* Button Styles */
.btn, .btn-small {
    display: inline-block;
    padding: 12px 30px;
    background-color: var(--primary-color);
    color: var(--white);
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-weight: 600;
    letter-spacing: 0.5px;
    text-transform: uppercase;
    transition: all 0.3s ease;
    font-family: 'Montserrat', sans-serif;
}

.btn:hover, .btn-small:hover {
    background-color: var(--primary-hover);
    transform: translateY(-2px);
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
}

.btn-small {
    padding: 8px 20px;
    font-size: 0.9rem;
}

/* ======= LOGIN SECTION ======= */
.login-section {
    padding: 80px 0;
    min-height: calc(100vh - 150px);
    display: flex;
    align-items: center;
    justify-content: center;
    background-color: var(--light-bg);
}

.login-box {
    width: 100%;
    max-width: 500px;
    margin: 0 auto;
    padding: 50px;
    background-color: var(--white);
    border-radius: 10px;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.login-box:hover {
    transform: translateY(-5px);
    box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1);
}

.login-box h2 {
    text-align: center;
    margin-bottom: 30px;
    font-size: 2rem;
    color: var(--text-color);
    font-weight: 600;
}

/* Form Styles */
.form-group {
    margin-bottom: 25px;
}

.form-group label {
    display: block;
    margin-bottom: 10px;
    font-weight: 500;
    color: var(--text-color);
}

.form-group input {
    width: 100%;
    padding: 15px;
    border: 1px solid var(--border-color);
    border-radius: 6px;
    font-size: 1rem;
    transition: all 0.3s ease;
    background-color: #fafafa;
}

.form-group input:focus {
    outline: none;
    border-color: var(--primary-color);
    box-shadow: 0 0 0 3px rgba(166, 124, 82, 0.1);
}

.password-input {
    position: relative;
}

.toggle-password {
    position: absolute;
    right: 15px;
    top: 50%;
    transform: translateY(-50%);
    cursor: pointer;
    color: var(--light-text);
    transition: color 0.3s ease;
}

.toggle-password:hover {
    color: var(--primary-color);
}

/* Form Options */
.form-options {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 25px;
}

.remember-me {
    display: flex;
    align-items: center;
}

.remember-me input {
    margin-right: 10px;
    accent-color: var(--primary-color);
    width: 18px;
    height: 18px;
    cursor: pointer;
}

.forgot-password {
    color: var(--primary-color);
    font-size: 0.95rem;
    text-decoration: none;
    transition: color 0.3s ease;
}

.forgot-password:hover {
    color: var(--primary-hover);
    text-decoration: underline;
}

/* Social Login */
.social-login {
    margin-top: 30px;
    text-align: center;
}

.social-login p {
    margin-bottom: 20px;
    color: var(--light-text);
    position: relative;
    font-size: 0.95rem;
}

.social-login p:before,
.social-login p:after {
    content: '';
    position: absolute;
    top: 50%;
    width: 30%;
    height: 1px;
    background-color: var(--border-color);
}

.social-login p:before {
    left: 0;
}

.social-login p:after {
    right: 0;
}

.social-icons {
    display: flex;
    flex-direction: column;
    gap: 12px;
}

.social-btn {
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 14px;
    border-radius: 6px;
    font-weight: 500;
    transition: all 0.3s ease;
    text-decoration: none;
    font-size: 0.95rem;
}

.social-btn i {
    margin-right: 12px;
    font-size: 1.1rem;
}

.social-btn.google {
    background-color: var(--google-btn);
    color: var(--text-color);
    border: 1px solid var(--border-color);
}

.social-btn.google:hover {
    background-color: var(--google-hover);
    transform: translateY(-2px);
}

.social-btn.facebook {
    background-color: var(--facebook-btn);
    color: var(--white);
}

.social-btn.facebook:hover {
    background-color: var(--facebook-hover);
    transform: translateY(-2px);
}

/* Register Link */
.register-link {
    text-align: center;
    margin-top: 25px;
    color: var(--light-text);
    font-size: 0.95rem;
}

.register-link a {
    color: var(--primary-color);
    font-weight: 500;
    text-decoration: none;
    transition: color 0.3s ease;
}

.register-link a:hover {
    color: var(--primary-hover);
    text-decoration: underline;
}

/* ======= FOOTER STYLES ======= */
footer {
    background-color: var(--white);
    padding: 20px 0;
    text-align: center;
    box-shadow: 0 -2px 10px rgba(0, 0, 0, 0.05);
}


.social-icons-footer a {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    width: 40px;
    height: 40px;
    background-color: rgba(255, 255, 255, 0.1);
    border-radius: 50%;
    color: var(--white);
    transition: all 0.3s ease;
}

.social-icons-footer a:hover {
    background-color: var(--primary-color);
    transform: translateY(-3px);
}

.copyright {
    text-align: center;
    padding-top: 20px;
    border-top: 1px solid rgba(255, 255, 255, 0.1);
    color: var(--footer-text);
}

/* ======= RESPONSIVE DESIGN ======= */
@media (max-width: 992px) {
    .footer-content {
        grid-template-columns: repeat(2, 1fr);
    }
}

@media (max-width: 768px) {
    header .container {
        flex-direction: column;
    }
    
    .logo {
        margin-bottom: 15px;
    }
    
    nav ul {
        flex-wrap: wrap;
        justify-content: center;
    }
    
    nav ul li {
        margin: 0 10px 5px;
    }
    
    .login-box {
        padding: 40px 30px;
    }
    
    .social-login p:before,
    .social-login p:after {
        width: 25%;
    }
    
    .form-options {
        flex-direction: column;
        align-items: flex-start;
        gap: 15px;
    }
    
    .forgot-password {
        margin-left: 0;
    }
}

@media (max-width: 576px) {
    .login-section {
        padding: 60px 0;
    }
    
    .login-box {
        padding: 30px 20px;
    }
    
    .footer-content {
        grid-template-columns: 1fr;
    }
    
    nav ul li {
        margin: 0 5px 5px;
    }
    
    nav ul li a {
        font-size: 14px;
    }
    
    .btn-small {
        padding: 6px 12px;
        font-size: 0.8rem;
    }
}
</style>

<body>
    <header>
        <div class="container">
            <div class="logo">
                <h1>PRESTIGE</h1>
                <p>Premium Fashion Store</p>
            </div>
            <nav>
                <ul>
                    <li>
                        <a href="<?php echo base_url(); ?>">
                            <i class="material-icons">exit_to_app</i>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>

    <section class="login-section">
        <div class="container">
            <div class="login-box">
                <h2>Masuk ke Akun Anda</h2>
                
                <?php if ($flash_message) : ?>
                <div class="flash-message" style="color: #d9534f; background-color: #f8d7da; padding: 10px; border-radius: 4px; margin-bottom: 20px; text-align: center;">
                    <?php echo $flash_message; ?>
                </div>
                <?php endif; ?>

                <?php if ($redirection) : ?>
                <div class="flash-message" style="color: #856404; background-color: #fff3cd; padding: 10px; border-radius: 4px; margin-bottom: 20px; text-align: center;">
                    Silahkan login untuk melanjutkan...
                </div>
                <?php endif; ?>

                <?php echo form_open('auth/login/do_login', ['id' => 'loginForm']); ?>
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" id="username" name="username" value="<?php echo set_value('username', $old_username); ?>" placeholder="Masukkan username Anda" minlength="4" maxlength="16" required>
                        <?php echo form_error('username', '<span style="color: #d9534f; font-size: 0.85rem; margin-top: 5px; display: block;">', '</span>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <div class="password-input">
                            <input type="password" id="password" name="password" placeholder="Masukkan password Anda" required>
                            <span class="toggle-password"><i class="far fa-eye"></i></span>
                        </div>
                        <?php echo form_error('password', '<span style="color: #d9534f; font-size: 0.85rem; margin-top: 5px; display: block;">', '</span>'); ?>
                    </div>
                    <div class="form-options">
                        <div class="remember-me">
                            <input type="checkbox" id="remember" name="remember_me" value="1">
                            <label for="remember">Ingat saya</label>
                        </div>
                        <a href="<?php echo site_url('auth/forget-password'); ?>" class="forgot-password">Lupa password?</a>
                    </div>
                    <button type="submit" class="btn">Masuk</button>
                <?php echo form_close(); ?>
                
                <div class="social-login">
                    <p>Atau masuk dengan</p>
                    <div class="social-icons">
                        <a href="#" class="social-btn google"><i class="fab fa-google"></i> Google</a>
                        <a href="#" class="social-btn facebook"><i class="fab fa-facebook-f"></i> Facebook</a>
                    </div>
                </div>
                <p class="register-link">Belum punya akun? <a href="<?php echo site_url('auth/register'); ?>">Daftar sekarang</a></p>
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <div class="copyright">
                <p>&copy; <?php echo date('Y'); ?> PRESTIGE. All Rights Reserved.</p>
            </div>
        </div>
    </footer>

    <script>
        // Toggle password visibility
        document.querySelector('.toggle-password').addEventListener('click', function() {
            const passwordInput = document.getElementById('password');
            const icon = this.querySelector('i');
            
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                icon.classList.remove('fa-eye');
                icon.classList.add('fa-eye-slash');
            } else {
                passwordInput.type = 'password';
                icon.classList.remove('fa-eye-slash');
                icon.classList.add('fa-eye');
            }
        });
    </script>
</body>
</html>
