<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Akun - <?php echo get_store_name(); ?></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <style>
        /* ======= GLOBAL STYLES ======= */
        :root {
            --primary-color: #a67c52;
            --primary-dark: #8c6b48;
            --text-color: #333;
            --text-light: #777;
            --border-color: #ddd;
            --bg-light: #f9f9f9;
            --error-color: #e74c3c;
            --success-color: #2ecc71;
            --warning-color: #f39c12;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Montserrat', 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: var(--text-color);
            line-height: 1.6;
            background-color: var(--bg-light);
        }

        h1, h2, h3, h4, h5, h6 {
            font-family: 'Playfair Display', Georgia, 'Times New Roman', serif;
            font-weight: 600;
            margin-bottom: 0.5em;
        }

        .container {
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        a {
            text-decoration: none;
            color: var(--primary-color);
            transition: all 0.3s ease;
        }

        a:hover {
            color: var(--primary-dark);
        }

        .required {
            color: var(--error-color);
            margin-left: 4px;
        }

        .hint {
            display: block;
            margin-top: 5px;
            font-size: 0.8rem;
            color: var(--text-light);
        }

        /* ======= HEADER STYLES ======= */
        header {
            background-color: white;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            position: sticky;
            top: 0;
            z-index: 1000;
        }

        header .container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px 15px;
        }

        .logo h1 {
            font-size: 28px;
            font-weight: 700;
            color: #333;
            margin-bottom: 0;
            letter-spacing: 1px;
            font-family: 'Playfair Display', Georgia, 'Times New Roman', serif;
        }

        .logo p {
            font-size: 14px;
            color: var(--primary-color);
            letter-spacing: 1px;
            text-transform: uppercase;
        }

        ul, ol {
            list-style: none;
        }

        nav ul {
            display: flex;
        }

        nav ul li {
            margin-left: 30px;
        }

        /* ======= REGISTER STYLES ======= */
        .register-section {
            padding: 60px 0;
            min-height: calc(100vh - 150px);
            display: flex;
            align-items: center;
        }

        .register-box {
            max-width: 580px;
            margin: 0 auto;
            padding: 40px;
            background-color: white;
            border-radius: 12px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
        }

        .register-header {
            text-align: center;
            margin-bottom: 30px;
        }

        .register-header h2 {
            font-size: 2rem;
            font-weight: 600;
            color: var(--text-color);
            margin-bottom: 10px;
            font-family: 'Playfair Display', Georgia, 'Times New Roman', serif;
        }

        .register-header p {
            color: var(--text-light);
            font-size: 0.95rem;
        }

        /* FORM STYLES */
        .form-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
        }

        .form-group {
            margin-bottom: 20px;
            position: relative;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: 500;
            color: var(--text-color);
            font-size: 0.95rem;
        }

        .form-group input {
            width: 100%;
            padding: 12px 15px;
            border: 1px solid var(--border-color);
            border-radius: 6px;
            font-size: 1rem;
            font-family: 'Poppins', sans-serif;
            transition: all 0.3s ease;
        }

        .form-group input:focus {
            outline: none;
            border-color: var(--primary-color);
            box-shadow: 0 0 0 2px rgba(166, 124, 82, 0.2);
        }

        .form-group input::placeholder {
            color: #aaa;
            font-weight: 300;
        }

        /* ERROR MESSAGE STYLES */
        .error-message {
            color: var(--error-color);
            font-size: 0.8rem;
            margin-top: 5px;
        }

        /* PASSWORD INPUT STYLES */
        .password-input {
            position: relative;
        }

        .toggle-password {
            position: absolute;
            right: 15px;
            top: 50%;
            transform: translateY(-50%);
            cursor: pointer;
            color: var(--text-light);
            transition: color 0.3s ease;
        }

        .toggle-password:hover {
            color: var(--primary-color);
        }

        /* PASSWORD STRENGTH METER */
        .password-strength {
            margin-top: 8px;
        }

        .strength-meter {
            height: 4px;
            background-color: #eee;
            border-radius: 2px;
            overflow: hidden;
            margin-bottom: 5px;
        }

        .strength-bar {
            height: 100%;
            width: 0;
            background-color: var(--error-color);
            transition: width 0.3s ease, background-color 0.3s ease;
        }

        .strength-text {
            font-size: 0.8rem;
            color: var(--text-light);
        }

        /* CHECKBOX STYLES */
        .checkbox-group {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
        }

        .checkbox-group input {
            width: auto;
            margin-right: 10px;
            accent-color: var(--primary-color);
        }

        .checkbox-group label {
            margin-bottom: 0;
            font-weight: 400;
            font-size: 0.9rem;
            color: var(--text-color);
        }

        .terms-group label {
            font-weight: 500;
        }

        /* BUTTON STYLES */
        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 12px 24px;
            border-radius: 6px;
            font-weight: 500;
            font-size: 1rem;
            cursor: pointer;
            transition: all 0.3s ease;
            border: none;
            font-family: 'Montserrat', sans-serif;
        }

        .btn-primary {
            background-color: var(--primary-color);
            color: white;
            width: 100%;
        }

        .btn-primary:hover {
            background-color: var(--primary-dark);
            transform: translateY(-2px);
        }

        .btn-text {
            margin-right: 8px;
        }

        .btn-icon {
            font-size: 0.9rem;
        }

        /* SOCIAL REGISTER STYLES */
        .social-register {
            margin-top: 30px;
        }

        .divider {
            position: relative;
            margin: 20px 0;
            text-align: center;
        }

        .divider-text {
            display: inline-block;
            padding: 0 15px;
            background-color: white;
            position: relative;
            z-index: 1;
            color: var(--text-light);
            font-size: 0.9rem;
        }

        .divider:before {
            content: '';
            position: absolute;
            top: 50%;
            left: 0;
            right: 0;
            height: 1px;
            background-color: var(--border-color);
            z-index: 0;
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
            padding: 12px;
            border-radius: 6px;
            font-weight: 500;
            transition: all 0.3s ease;
        }

        .social-btn i {
            margin-right: 10px;
            font-size: 1.1rem;
        }

        .social-btn.google {
            background-color: white;
            color: var(--text-color);
            border: 1px solid var(--border-color);
        }

        .social-btn.google:hover {
            background-color: #f5f5f5;
        }

        .social-btn.facebook {
            background-color: #3b5998;
            color: white;
        }

        .social-btn.facebook:hover {
            background-color: #344e86;
        }

        /* FOOTER STYLES */
        footer {
            padding: 30px 0;
            background-color: white;
            border-top: 1px solid var(--border-color);
        }

        .footer-links {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 20px;
            margin-bottom: 20px;
        }

        .footer-links a {
            color: var(--text-light);
            font-size: 0.9rem;
        }

        .footer-links a:hover {
            color: var(--primary-color);
        }

        .copyright {
            text-align: center;
        }

        .copyright p {
            font-size: 0.85rem;
            color: var(--text-light);
        }

        /* RESPONSIVE STYLES */
        @media (max-width: 768px) {
            .form-row {
                grid-template-columns: 1fr;
            }
            
            .register-box {
                padding: 30px;
            }

            header .container {
                flex-direction: column;
            }
            
            .logo {
                margin-bottom: 20px;
            }
            
            nav ul {
                flex-wrap: wrap;
                justify-content: center;
            }
            
            nav ul li {
                margin: 0 15px 10px;
            }
        }

        @media (max-width: 576px) {
            .register-box {
                padding: 25px 20px;
            }
            
            .register-header h2 {
                font-size: 1.7rem;
            }
            
            .btn {
                padding: 12px 20px;
            }
        }
    </style>
</head>
<body>
    <header>
        <div class="container">
            <div class="logo">
                <h1><?php echo get_store_name(); ?></h1>
                <p>Premium Fashion Store</p>
            </div>
            <nav>
                <ul>
                    <li>
                        <a href="<?php echo base_url(); ?>">
                            <i class="material-icons" style="color: black;">exit_to_app</i>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>

    <section class="register-section">
        <div class="container">
            <div class="register-box">
                <div class="register-header">
                    <h2>Buat Akun Baru</h2>
                    <p>Sudah punya akun? <a href="<?php echo site_url('auth/login'); ?>">Masuk disini</a></p>
                </div>
                
                <?php echo form_open('auth/register/verify'); ?>
                    <div class="form-row">
                        <div class="form-group">
                            <label for="name">Nama Lengkap<span class="required">*</span></label>
                            <input type="text" id="name" name="name" required placeholder="Masukkan nama lengkap" value="<?php echo set_value('name'); ?>">
                            <div class="error-message"><?php echo form_error('name'); ?></div>
                        </div>
                        <div class="form-group">
                            <label for="username">Username<span class="required">*</span></label>
                            <input type="text" id="username" name="username" minlength="4" maxlength="16" required placeholder="Masukkan username" value="<?php echo set_value('username'); ?>">
                            <div class="error-message"><?php echo form_error('username'); ?></div>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="email">Email<span class="required">*</span></label>
                        <input type="email" id="email" name="email" required placeholder="contoh@email.com" value="<?php echo set_value('email'); ?>">
                        <div class="error-message"><?php echo form_error('email'); ?></div>
                    </div>
                    
                    <div class="form-group">
                        <label for="phone_number">Nomor Telepon<span class="required">*</span></label>
                        <input type="tel" id="phone_number" name="phone_number" minlength="9" maxlength="15" required placeholder="081234567890" value="<?php echo set_value('phone_number'); ?>">
                        <small class="hint">Format: 08xxxxxxxxxx</small>
                        <div class="error-message"><?php echo form_error('phone_number'); ?></div>
                    </div>
                    
                    <div class="form-group">
                        <label for="password">Password<span class="required">*</span></label>
                        <div class="password-input">
                            <input type="password" id="password" name="password" required placeholder="Minimal 8 karakter" value="<?php echo set_value('password'); ?>">
                            <span class="toggle-password"><i class="far fa-eye"></i></span>
                        </div>
                        <div class="password-strength">
                            <div class="strength-meter">
                                <div class="strength-bar"></div>
                            </div>
                            <span class="strength-text">Kekuatan password: <span id="strengthLevel">Lemah</span></span>
                        </div>
                        <div class="error-message"><?php echo form_error('password'); ?></div>
                    </div>
                    
                    <div class="form-group">
                        <label for="confirmPassword">Konfirmasi Password<span class="required">*</span></label>
                        <div class="password-input">
                            <input type="password" id="confirmPassword" name="confirmPassword" required placeholder="Ketik ulang password">
                            <span class="toggle-password"><i class="far fa-eye"></i></span>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="address">Alamat<span class="required">*</span></label>
                        <input type="text" id="address" name="address" required placeholder="Masukkan alamat lengkap" value="<?php echo set_value('address'); ?>">
                        <div class="error-message"><?php echo form_error('address'); ?></div>
                    </div>
                    
                    <div class="form-group checkbox-group terms-group">
                        <input type="checkbox" id="terms" name="terms" required>
                        <label for="terms">Saya menyetujui <a href="#">Syarat & Ketentuan</a> dan <a href="#">Kebijakan Privasi</a> <?php echo get_store_name(); ?><span class="required">*</span></label>
                    </div>
                    
                    <button type="submit" class="btn btn-primary">
                        <span class="btn-text">Daftar</span>
                        <i class="fas fa-arrow-right btn-icon"></i>
                    </button>
                </form>
                
                <div class="social-register">
                    <div class="divider">
                        <span class="divider-text">Atau daftar dengan</span>
                    </div>
                    <div class="social-icons">
                        <a href="#" class="social-btn google">
                            <i class="fab fa-google"></i>
                            <span>Google</span>
                        </a>
                        <a href="#" class="social-btn facebook">
                            <i class="fab fa-facebook-f"></i>
                            <span>Facebook</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <div class="footer-links">
                <a href="#">Tentang Kami</a>
                <a href="#">Kebijakan Privasi</a>
                <a href="#">Syarat & Ketentuan</a>
                <a href="#">Bantuan</a>
            </div>
            <div class="copyright">
                <p>&copy; <?php echo date('Y'); ?> <?php echo get_store_name(); ?>. All Rights Reserved.</p>
            </div>
        </div>
    </footer>

    <script>
        // Toggle password visibility
        document.querySelectorAll('.toggle-password').forEach(function(element) {
            element.addEventListener('click', function() {
                const input = this.parentElement.querySelector('input');
                const type = input.getAttribute('type') === 'password' ? 'text' : 'password';
                input.setAttribute('type', type);
                this.querySelector('i').classList.toggle('fa-eye');
                this.querySelector('i').classList.toggle('fa-eye-slash');
            });
        });

        // Password strength checker
        document.getElementById('password').addEventListener('input', function() {
            const password = this.value;
            const strengthBar = document.querySelector('.strength-bar');
            const strengthLevel = document.getElementById('strengthLevel');
            
            // Reset
            strengthBar.style.width = '0%';
            strengthBar.style.backgroundColor = 'var(--error-color)';
            strengthLevel.textContent = 'Lemah';
            strengthLevel.style.color = 'var(--error-color)';
            
            if (password.length === 0) return;
            
            // Calculate strength
            let strength = 0;
            
            // Length
            if (password.length >= 8) strength += 1;
            if (password.length >= 12) strength += 1;
            
            // Contains numbers
            if (/\d/.test(password)) strength += 1;
            
            // Contains special chars
            if (/[!@#$%^&*(),.?":{}|<>]/.test(password)) strength += 1;
            
            // Contains both lower and upper case
            if (/[a-z]/.test(password) && /[A-Z]/.test(password)) strength += 1;
            
            // Update UI
            if (strength <= 2) {
                strengthBar.style.width = '33%';
                strengthBar.style.backgroundColor = 'var(--error-color)';
                strengthLevel.textContent = 'Lemah';
                strengthLevel.style.color = 'var(--error-color)';
            } else if (strength <= 4) {
                strengthBar.style.width = '66%';
                strengthBar.style.backgroundColor = 'var(--warning-color)';
                strengthLevel.textContent = 'Sedang';
                strengthLevel.style.color = 'var(--warning-color)';
            } else {
                strengthBar.style.width = '100%';
                strengthBar.style.backgroundColor = 'var(--success-color)';
                strengthLevel.textContent = 'Kuat';
                strengthLevel.style.color = 'var(--success-color)';
            }
        });
    </script>
</body>
</html>
