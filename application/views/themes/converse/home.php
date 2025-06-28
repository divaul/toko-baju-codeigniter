<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<style>
	/* Style untuk dropdown-menu tema */
	/* ======= font ======= */

	.elegant-font h16 {
		font-family: 'Playfair Display', serif;
		font-size: 6vw;
		font-weight: 600;
		color: white;
	}

	.elegant-font h2 {
		font-family: 'Poppins', sans-serif;
		font-size: 22px;
		font-weight: 400;
		color: #555;
	}


	/* ======= FEATURES SECTION ======= */
	.features {
		padding: 80px 0;
		background-color: #f9f9f9;
	}

	.features .container {
		display: grid;
		grid-template-columns: repeat(3, 1fr);
		gap: 30px;
	}

	.feature-box {
		padding: 30px;
		text-align: center;
		background-color: white;
		border-radius: 8px;
		box-shadow: 0 5px 20px rgba(0, 0, 0, 0.05);
		transition: all 0.3s ease;
	}

	.feature-box:hover {
		transform: translateY(-10px);
		box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
	}

	.feature-box i {
		font-size: 3rem;
		color: #a67c52;
		margin-bottom: 20px;
	}

	.feature-box h3 {
		font-size: 1.5rem;
		margin-bottom: 15px;
	}
</style>

<section id="home-section" class="hero">
	<div class="home-slider owl-carousel">
		<div class="slider-item"
			style="background-image: url(<?php echo get_theme_uri('images/background_01.jpg'); ?>);">
			<div class="overlay"></div>
			<div class="container">
				<div class="row slider-text justify-content-center align-items-center">

					<<div class="col-md-12 ftco-animate text-center elegant-font">
						<h16 class="mb-2">Fashion Terbaik untuk Anda</h16>
						<h2 class="subheading mb-4">Temukan koleksi terbaru untuk tampilan elegan dan berkelas</h2>
				</div>

				<p><a href="#products" class="btn btn-primary" style="background-color: #a67c52; color: #fff; border-color: #a67c52">Belanja Sekarang!</a></p>
			</div>

		</div>
	</div>
	</div>


	</div>
</section>


<section class="features" id="products">
	<div class="container">
		<div class="feature-box">
			<i class="fas fa-tshirt"></i>
			<h3>Kualitas Premium</h3>
			<p>Bahan berkualitas tinggi untuk kenyamanan maksimal</p>
		</div>
		<div class="feature-box">
			<i class="fas fa-shipping-fast"></i>
			<h3>Pengiriman Cepat</h3>
			<p>Nikmati pengiriman cepat ke seluruh Indonesia</p>
		</div>
		<div class="feature-box">
			<i class="fas fa-medal"></i>
			<h3>Desain Eksklusif</h3>
			<p>Desain terkini yang membuat Anda tampil beda</p>
		</div>
	</div>
</section>
>


<section class="ftco-section">
	<div class="container">
		<div class="row justify-content-center mb-3 pb-3">
			<div class="col-md-12 heading-section text-center ftco-animate">
				<span class="subheading">Produk Terbaru</span>
				<h2 class="mb-4"><?php echo get_store_name(); ?></h2>
				<p><?php echo get_settings('store_tagline'); ?></p>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<?php if (count($products) > 0) : ?>
				<?php foreach ($products as $product) : ?>
					<div class="col-md-6 col-lg-3 ftco-animate">
						<div class="product">
							<a href="<?php echo site_url('shop/product/' . $product->id . '/' . $product->sku . '/'); ?>"
								class="img-prod">
								<img class="img-fluid"
									src="<?php echo base_url('assets/uploads/products/' . $product->picture_name); ?>"
									alt="<?php echo $product->name; ?>">
								<?php if ($product->current_discount > 0) : ?>
									<span
										class="status"><?php echo count_percent_discount($product->current_discount, $product->price, 0); ?>%</span>
								<?php endif; ?>
								<div class="overlay"></div>
							</a>
							<div class="text py-3 pb-4 px-3 text-center">
								<h3><a
										href="<?php echo site_url('shop/product/' . $product->id . '/' . $product->sku . '/'); ?>"><?php echo $product->name; ?></a>
								</h3>
								<div class="d-flex">
									<div class="pricing">
										<p class="price">
											<?php if ($product->current_discount > 0) : ?>
												<span class="mr-2 price-dc">Rp
													<?php echo format_rupiah($product->price); ?></span><span class="price-sale">Rp
													<?php echo format_rupiah($product->price - $product->current_discount); ?></span>
											<?php else : ?>
												<span class="mr-2"><span class="price-sale">Rp
														<?php echo format_rupiah($product->price - $product->current_discount); ?></span>
												<?php endif; ?>
										</p>
									</div>
								</div>
								<div class="bottom-area d-flex px-3">
									<div class="m-auto d-flex">
										<a href="<?php echo site_url('shop/product/' . $product->id . '/' . $product->sku . '/'); ?>"
											class="buy-now d-flex justify-content-center align-items-center text-center"
											style="background-color: #a67c52; color: #fff;">
											<span><i class="ion-ios-menu"></i></span>
										</a>
										<a href="#"
											class="add-to-chart add-cart d-flex justify-content-center align-items-center mx-1"
											style="background-color: #a67c52; color: #fff;"
											data-sku="<?php echo $product->sku; ?>"
											data-name="<?php echo $product->name; ?>"
											data-price="<?php echo ($product->current_discount > 0) ? ($product->price - $product->current_discount) : $product->price; ?>"
											data-id="<?php echo $product->id; ?>">
											<span><i class="ion-ios-cart"></i></span>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				<?php endforeach; ?>
			<?php else : ?>
			<?php endif; ?>

		</div>
	</div>
</section>

<section class="ftco-section img"
	style="background-image: url(<?php echo get_theme_uri('images/background_03.jpg'); ?>);">
	<div class="container">
		<div class="row justify-content-end">
			<div class="col-md-6 heading-section ftco-animate deal-of-the-day ftco-animate">
				<span class="subheading">Produk dengan Harga Terbaik</span>
				<h2 class="mb-4" style="color: white;">Deal of the day</h2>
				<p style="color: white;"><?php echo $best_deal->description; ?></p>
				<h3><a href="#"><?php echo $best_deal->name; ?></a></h3>
				<span class="price" style="color: white;">Rp <?php echo format_rupiah($best_deal->price); ?> <a href="#" style="color: white;">sekarang hanya Rp
						<?php echo format_rupiah($best_deal->price - $best_deal->current_discount); ?></a></span>
				<div id="timer" class="d-flex mt-5">
					<div class="time pl-3">
						<a href="#" class="btn btn-primary add-cart" data-sku="<?php echo $best_deal->sku; ?>"
							data-name="<?php echo $best_deal->name; ?>"
							data-price="<?php echo ($best_deal->current_discount > 0) ? ($best_deal->price - $best_deal->current_discount) : $best_deal->price; ?>"
							data-id="<?php echo $best_deal->id; ?>" style="background-color: #a67c52; color: #fff; border-color: #a67c52;"><i class="ion-ios-cart"></i></a>
					</div>
					<div class="time pl-3">
						<a class="btn btn-info"
							href="<?php echo site_url('shop/product/' . $product->id . '/' . $product->sku . '/'); ?>"
							class="buy-now d-flex justify-content-center align-items-center text-center">
							<span><i class="ion-ios-menu text-white"></i></span>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
