<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title><?php echo $title; ?> | <?php echo get_store_name(); ?></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap"
		rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600&family=Poppins:wght@400&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css"/>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
	
<!-- Font Awesome untuk ikon -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
	<!-- Logo sites -->
	<link rel="icon" href="<?php echo base_url('assets/uploads/sites/Logo.jpg'); ?>">

	<link rel="stylesheet" href="<?php echo get_theme_uri('css/open-iconic-bootstrap.min.css'); ?>">
	<link rel="stylesheet" href="<?php echo get_theme_uri('css/animate.css'); ?>">

	<link rel="stylesheet" href="<?php echo get_theme_uri('css/owl.carousel.min.css'); ?>">
	<link rel="stylesheet" href="<?php echo get_theme_uri('css/owl.theme.default.min.css'); ?>">
	<link rel="stylesheet" href="<?php echo get_theme_uri('css/magnific-popup.css'); ?>">
	<!-- bottstrap icon -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
	
	<!-- aos animation -->
	<link rel="stylesheet" href="<?php echo get_theme_uri('css/aos.css'); ?>">
	<!-- ionicons -->
	<link rel="stylesheet" href="<?php echo get_theme_uri('css/ionicons.min.css'); ?>">
	<link rel="stylesheet"
		href="<?php echo get_theme_uri('js/plugins/@fortawesome/fontawesome-free/css/all.min.css', 'argon'); ?>">
	<link rel="stylesheet" href="<?php echo get_theme_uri('css/tentang-kami.css'); ?>">
	<link rel="stylesheet" href="<?php echo get_theme_uri('css/bootstrap-datepicker.css'); ?>">
	<link rel="stylesheet" href="<?php echo get_theme_uri('css/jquery.timepicker.css'); ?>">

	<link rel="stylesheet" href="<?php echo get_theme_uri('css/flaticon.css'); ?>">
	<link rel="stylesheet" href="<?php echo get_theme_uri('css/icomoon.css'); ?>">
	<link rel="stylesheet" href="<?php echo get_theme_uri('css/style.css'); ?>">
	<!-- toastr notification -->
	<link rel="stylesheet" href="<?php echo base_url('assets/plugins/toastr/toastr.min.css'); ?>">
	<!-- jquery -->
	<script src="<?php echo get_theme_uri('js/jquery.min.js'); ?>"></script>
	<script src="<?php echo get_theme_uri('js/jquery-migrate-3.0.1.min.js'); ?>"></script>
	<!-- Bootstrap CSS -->

</head>
<style>
	/* ===================== GLOBAL ===================== */
	* {
		margin: 0;
		padding: 0;
		box-sizing: border-box;
	}

	body {
		font-family: 'Montserrat', 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
		line-height: 1.6;
		color: #333;
		background-color: #fff;
	}

	h1,
	h2,
	h3,
	h4,
	h5,
	h6 {
		font-family: 'Playfair Display', Georgia, 'Times New Roman', serif;
		font-weight: 600;
		margin-bottom: 0.5em;
	}

	a {
		text-decoration: none;
		color: #333;
		transition: all 0.3s ease;
	}

	ul,
	ol {
		list-style: none;
	}

	img {
		max-width: 100%;
		height: auto;
		display: block;
	}

	.container {
		width: 90%;
		max-width: 1200px;
		margin: 0 auto;
		padding: 0 15px;
	}

	.section-title {
		text-align: center;
		margin-bottom: 2rem;
		font-size: 2.2rem;
		position: relative;
		padding-bottom: 15px;
	}

	.section-title:after {
		content: '';
		position: absolute;
		bottom: 0;
		left: 50%;
		transform: translateX(-50%);
		width: 80px;
		height: 3px;
		background-color: #a67c52;
	}

	.center {
		text-align: center;
		margin: 2rem 0;
	}

	/* ===================== BUTTONS ===================== */
	.btn {
		display: inline-block;
		padding: 12px 30px;
		background-color: #a67c52;
		color: #fff;
		border: none;
		border-radius: 4px;
		cursor: pointer;
		font-weight: 600;
		letter-spacing: 0.5px;
		text-transform: uppercase;
		transition: all 0.3s ease;
	}

	.btn:hover {
		background-color: #8a6642;
		transform: translateY(-2px);
		box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
	}

	.btn-small {
		padding: 8px 20px;
		font-size: 0.9rem;
	}

	/* ===================== HEADER ===================== */
	header {
		background-color: white;
		box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
		position: sticky;
		top: 0;
		z-index: 1000;
	}

	header .container {
		display: flex !important;
		justify-content: space-between !important;
		align-items: center !important;
		padding: 15px !important;
	}

	.logo h1 {
		font-size: 28px;
		font-weight: 700;
		color: #333;
		margin-bottom: 0;
		letter-spacing: 1px;
	}

	.logo p {
		font-size: 14px;
		color: #a67c52;
		letter-spacing: 1px;
		text-transform: uppercase;
	}

	nav ul {
		display: flex !important;
		align-items: center !important;
		padding: 0 !important;
		margin: 0 !important;
		list-style: none !important;
		flex-wrap: wrap !important;
	}

	nav ul li {
		margin-left: 20px !important;
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
		background-color: #a67c52;
		transition: width 0.3s ease;
	}
	nav ul li:hover a {
    color: #a67c52; /* Ubah warna teks saat dihover ke #a67c52 */
}

	nav ul li a:hover:after,
	nav ul li a.active:after {
		width: 100%;
	}

	nav ul li a.active {
		color: #a67c52;
	}

	/* ===================== ACCOUNT MENU ===================== */
	.account-menu {
		position: relative;
		margin-left: 15px;
		list-style-type: none !important;
	}

	.account-menu>.account-trigger {
		display: flex !important;
		align-items: center;
		padding: 8px 12px !important;
		background-color: transparent !important;
		border: none !important;
		text-decoration: none !important;
		color: inherit !important;
	}

	.account-menu>.account-trigger:hover {
		background-color: transparent !important;
	}

	.account-trigger i {
		font-size: 1.4rem !important;
		color: #555 !important;
		transition: all 0.3s ease;
	}

	.account-trigger:hover i {
		color: #a67c52 !important;
		transform: scale(1.1);
	}

	.account-dropdown {
		position: absolute !important;
		top: 100% !important;
		right: 0 !important;
		background-color: white !important;
		border-radius: 6px !important;
		box-shadow: 0 5px 25px rgba(0, 0, 0, 0.15) !important;
		width: 200px !important;
		padding: 10px 0 !important;
		opacity: 0 !important;
		visibility: hidden !important;
		transform: translateY(12px) !important;
		transition: all 0.3s cubic-bezier(0.175, 0.885, 0.32, 1.275) !important;
		z-index: 1000 !important;
		display: block !important;
	}

	.account-menu.active .account-dropdown,
	.account-menu:hover .account-dropdown {
		opacity: 1 !important;
		visibility: visible !important;
		transform: translateY(8px) !important;
	}

	.account-dropdown .dropdown-item {
		display: flex !important;
		align-items: center !important;
		padding: 12px 20px !important;
		color: #555 !important;
		font-size: 0.9rem !important;
		font-weight: 500 !important;
		transition: all 0.2s ease !important;
		text-decoration: none !important;
		background-color: transparent !important;
		border: none !important;
		width: 100% !important;
		text-align: left !important;
	}

	.account-dropdown .dropdown-item i {
		margin-right: 12px !important;
		width: 20px !important;
		font-size: 0.95rem !important;
		color: #a67c52 !important;
		text-align: center !important;
	}

	.account-dropdown .dropdown-item:hover {
		background-color: #f8f8f8 !important;
		color: #a67c52 !important;
		padding-left: 22px !important;
	}

	.account-dropdown .dropdown-divider {
		height: 1px !important;
		background-color: #eee !important;
		margin: 8px 0 !important;
		border: none !important;
	}

	/* ===================== HAMBURGER MENU ===================== */
	.hamburger {
		display: none;
		cursor: pointer;
		font-size: 24px;
	}

	@media (max-width: 768px) {
		header .container {
			flex-direction: column !important;
			padding: 10px !important;
		}

		.logo {
			margin-bottom: 15px !important;
		}

		nav {
			display: none;
			width: 100%;
		}

		nav.active {
			display: block;
		}

		nav ul {
			flex-direction: column;
			width: 100%;
		}

		nav ul li {
			margin: 0;
			padding: 10px 0;
			border-bottom: 1px solid #eee;
		}

		.hamburger {
			display: block;
		}

		.account-menu {
			position: relative;
			margin-left: 8px !important;
		}

		.account-dropdown {
			position: static !important;
			display: none;
			box-shadow: none !important;
		}

		.account-menu:hover .account-dropdown {
			display: block !important;
		}
	}

	/* RESPONSIVE BREAKPOINTS */
	@media (max-width: 1200px) {
		nav ul li {
			margin-left: 15px !important;
		}
	}

	@media (max-width: 992px) {
		nav ul li {
			margin-left: 12px !important;
		}

		.account-trigger i {
			font-size: 1.3rem !important;
		}

		.account-menu>.account-trigger {
			padding: 6px 10px !important;
		}
	}

	@media (max-width: 576px) {
		nav ul li {
			margin: 0 8px 5px !important;
		}

		.account-dropdown {
			width: 180px !important;
		}
	}
</style>

<header>
	<div class="container">
		<div class="logo">
			<h1>PRESTIGE</h1>
			<p>Premium Fashion Store</p>
		</div>
		<div class="hamburger" id="hamburger">
			<i class="fas fa-bars"></i>
		</div>
		<nav>
			<ul>
				<li class=""><a href="<?php echo base_url(); ?>">Beranda</a></li>
				<li><a href="<?php echo site_url('pages/event'); ?>">Event</a></li>
				<li><a href="<?php echo site_url('pages/review'); ?>">Review</a></li>
				<li><a href="<?php echo site_url('pages/about'); ?>">Tentang Kami</a></li>
				<li><a href="<?php echo site_url('pages/contact'); ?>">Kontak</a></li>



				<li class="account-menu">
					<a href="#" class="account-trigger">
						<i class="bi bi-collection-fill" style="font-size: 20px"></i>
					</a>
					<div class="account-dropdown">
						<a href="<?php echo site_url('pages/koleksi'); ?>" class="dropdown-item">
							<i class="fa fa-camera-retro"></i> Koleksi
						</a>
						<a href="<?php echo site_url('pages/produk'); ?>" class="dropdown-item">
							<i class="fas fa-tshirt"></i> Produk
						</a>
					</div>
				</li>

				<li class="account-menu">
					<a href="#" class="account-trigger">
						<i class="bi bi-palette2" style="font-size: 20px"></i>
					</a>
					<div class="account-dropdown">
						<a href="<?php echo site_url('pages/ReferensiGaya'); ?>" class="dropdown-item" >
							<i class="bi bi-book-fill"></i> Referensi Gaya
						</a>
						<a href="<?php echo site_url('pages/Inspirasi'); ?>" class="dropdown-item">
							<i class="bi bi-lightbulb-fill"></i> Inspirasi
						</a>
						<a href="<?php echo site_url('pages/Galeri'); ?>" class="dropdown-item">
							<i class="bi bi-images"></i> Galeri
						</a>
					</div>
				</li>

				<li class="account-menu">
					<a href="#" class="account-trigger">
						<i class="fas fa-shopping-cart" style="font-size: 20px"></i>
					</a>
					<div class="account-dropdown">
						<a href="<?php echo site_url('shop/cart'); ?>" class="dropdown-item">
							<i class="fa fa-cart-plus"></i> Keranjang
						</a>
						<a href="<?php echo site_url('customer/payments/confirm'); ?>" class="dropdown-item">
							<i class="fas fa-cart-arrow-down"></i> Checkout
						</a>
					</div>
				</li>

				<li class="account-menu">
					<a href="#" class="account-trigger">
						<i class="fas fa-user" style="font-size: 20px"></i>
					</a>
					<div class="account-dropdown">
						<?php if (is_login() && is_customer()) : ?>
							<a href="<?php echo site_url('customer'); ?>" class="dropdown-item">
								<i class="fas fa-user-cog"></i> Akun Saya
							</a>
							<a href="<?php echo site_url('customer/orders'); ?>" class="dropdown-item">
								<i class="fa fa-cart-plus"></i> Order
							</a>
							<a href="<?php echo site_url('auth/logout'); ?>" class="dropdown-item">
								<i class="fas fa-sign-out-alt"></i> Logout
							</a>
						<?php elseif (is_login() && is_admin()) : ?>
							<a href="<?php echo site_url('admin'); ?>" class="dropdown-item">
								<i class="fas fa-user-cog"></i> Dasbor
							</a>
							<a href="<?php echo site_url('auth/logout'); ?>" class="dropdown-item">
								<i class="fas fa-sign-in-alt"></i> Logout
							</a>
						<?php else : ?>
							<a href="<?php echo site_url('auth/login'); ?>" class="dropdown-item">
								<i class="fas fa-sign-in-alt"></i> Login
							</a>
							<a href="<?php echo site_url('auth/register'); ?>" class="dropdown-item">
								<i class="fas fa-user-plus"></i> Daftar
							</a>
						<?php endif; ?>
					</div>
				</li>
			</ul>
		</nav>
	</div>
</header>

<!-- Tambahkan skrip hamburger agar tetap berfungsi -->
<script>
	document.addEventListener('DOMContentLoaded', function() {
		const hamburger = document.getElementById('hamburger');
		const nav = document.querySelector('nav');

		hamburger.addEventListener('click', function() {
			nav.classList.toggle('active');
		});
	});
</script>

<!-- END nav -->
