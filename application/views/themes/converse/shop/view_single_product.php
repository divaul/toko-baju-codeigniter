<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<style>
	/* ======= GLOBAL STYLES ======= */
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

h1, h2, h3, h4, h5, h6 {
    font-family: 'Playfair Display', Georgia, 'Times New Roman', serif;
    font-weight: 600;
    margin-bottom: 0.5em;
}

a {
    text-decoration: none;
    color: #333;
    transition: all 0.3s ease;
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


/* ======= BUTTON STYLES ======= */
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

.btn-primary {
    background-color: #a67c52;
    color: white;
    padding: 12px 24px;
    border-radius: 4px;
    font-weight: 600;
    letter-spacing: 0.5px;
    display: inline-flex;
    align-items: center;
    gap: 8px;
}

.btn-primary:hover {
    background-color: #8a6642;
}

.btn-icon {
    width: 48px;
    height: 48px;
    border-radius: 50%;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    background-color: #f5f5f5;
    border: 1px solid #ddd;
    transition: all 0.3s ease;
}

.btn-icon:hover {
    background-color: #eaeaea;
    transform: translateY(-2px);
}

/* ======= PAGE HEADER ======= */
.page-header {
    background-color: #f5f5f5;
    padding: 60px 0;
    text-align: center;
}

.page-header h2 {
    font-size: 2.5rem;
    margin-bottom: 10px;
}

/* ======= PRODUCT DETAIL SECTION ======= */
.product-detail {
    padding: 80px 0;
}

.product-showcase {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 40px;
    margin-bottom: 60px;
}

.product-images {
    display: flex;
    flex-direction: column;
}

.main-image {
    margin-bottom: 20px;
    border-radius: 8px;
    overflow: hidden;
}

.main-image img {
    width: 100%;
    height: auto;
    display: block;
}

.thumbnail-images {
    display: flex;
    gap: 10px;
}

.thumbnail-images img {
    width: 80px;
    height: 80px;
    object-fit: cover;
    border-radius: 4px;
    cursor: pointer;
    opacity: 0.7;
    transition: all 0.3s ease;
}

.thumbnail-images img:hover,
.thumbnail-images img.active {
    opacity: 1;
    box-shadow: 0 0 0 2px #a67c52;
}

.product-info-detail {
    display: flex;
    flex-direction: column;
}

.category {
    color: #a67c52;
    font-size: 0.9rem;
    text-transform: uppercase;
    letter-spacing: 1px;
    margin-bottom: 5px;
}

.product-info-detail h2 {
    font-size: 2rem;
    margin-bottom: 15px;
}

.rating {
    display: flex;
    align-items: center;
    margin-bottom: 15px;
}

.rating i {
    color: #ffd700;
    margin-right: 3px;
}

.rating span {
    color: #777;
    font-size: 0.9rem;
    margin-left: 10px;
}

.product-price {
    font-size: 1.8rem;
    font-weight: 600;
    color: #a67c52;
    margin-bottom: 20px;
}

.product-description {
    margin-bottom: 30px;
}

.product-description p {
    margin-bottom: 15px;
}

.product-description ul {
    list-style: disc;
    padding-left: 20px;
    margin-bottom: 20px;
}

.product-description ul li {
    margin-bottom: 8px;
}

.product-variants {
    margin-bottom: 30px;
}

.variant-group {
    margin-bottom: 20px;
}

.variant-group h3 {
    font-size: 1rem;
    margin-bottom: 10px;
}

.variant-options {
    display: flex;
    gap: 10px;
}

.variant-btn {
    padding: 8px 16px;
    border: 1px solid #ddd;
    background-color: white;
    border-radius: 4px;
    cursor: pointer;
    transition: all 0.3s ease;
}

.variant-btn:hover,
.variant-btn.active {
    border-color: #a67c52;
    background-color: #a67c52;
    color: white;
}

.color-options {
    display: flex;
    gap: 15px;
}

.color-btn {
    width: 30px;
    height: 30px;
    border-radius: 50%;
    border: none;
    cursor: pointer;
    position: relative;
}

.color-btn.active:after {
    content: '';
    position: absolute;
    top: -4px;
    left: -4px;
    right: -4px;
    bottom: -4px;
    border: 2px solid #a67c52;
    border-radius: 50%;
}

.product-actions {
    display: flex;
    align-items: center;
    gap: 20px;
    margin-bottom: 30px;
}

.quantity {
    display: flex;
    align-items: center;
    border: 1px solid #ddd;
    border-radius: 4px;
    overflow: hidden;
}

.qty-btn {
    width: 40px;
    height: 40px;
    background-color: #f5f5f5;
    border: none;
    cursor: pointer;
    display: flex;
    align-items: center;
    justify-content: center;
}

.quantity input {
    width: 60px;
    height: 40px;
    text-align: center;
    border: none;
    font-size: 1rem;
}

.product-meta {
    border-top: 1px solid #eee;
    padding-top: 20px;
}

.product-meta p {
    margin-bottom: 10px;
    font-size: 0.9rem;
    color: #777;
}

.product-meta a {
    color: #a67c52;
}

.product-meta a:hover {
    text-decoration: underline;
}

/* ======= PRODUCT TABS ======= */
.product-tabs {
    margin-bottom: 60px;
}

.tab-header {
    display: flex;
    border-bottom: 1px solid #ddd;
    margin-bottom: 30px;
}

.tab-btn {
    padding: 15px 30px;
    background: none;
    border: none;
    font-size: 1rem;
    font-weight: 600;
    color: #777;
    cursor: pointer;
    transition: all 0.3s ease;
    position: relative;
}

.tab-btn:after {
    content: '';
    position: absolute;
    bottom: -1px;
    left: 0;
    right: 0;
    height: 3px;
    background-color: #a67c52;
    transform: scaleX(0);
    transition: transform 0.3s ease;
}

.tab-btn:hover,
.tab-btn.active {
    color: #333;
}

.tab-btn.active:after {
    transform: scaleX(1);
}

.tab-content {
    display: none;
    animation: fadeIn 0.5s ease;
}

.tab-content.active {
    display: block;
}

@keyframes fadeIn {
    from { opacity: 0; }
    to { opacity: 1; }
}

/* ======= RELATED PRODUCTS ======= */
.related-products {
    padding: 80px 0;
}

.product-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 30px;
}

.product-card {
    background-color: white;
    border-radius: 8px;
    overflow: hidden;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
    transition: all 0.3s ease;
}

.product-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
}

.product-image {
    position: relative;
    overflow: hidden;
}

.product-image img {
    width: 100%;
    transition: transform 0.8s ease;
}

.product-card:hover .product-image img {
    transform: scale(1.05);
}

.product-info {
    padding: 20px;
    text-align: center;
}

.product-info h3 {
    font-size: 1.2rem;
    margin-bottom: 10px;
}

.price {
    color: #a67c52;
    font-weight: 600;
    font-size: 1.1rem;
    margin-bottom: 15px;
}



</style>

    <section class="page-header">
        <div class="container">
            <h2>Detail Produk</h2>
            <p><?php echo $product->name; ?></p>
        </div>
    </section>

    <section class="product-detail">
        <div class="container">
            <div class="product-showcase">
                <div class="product-images">
                    <div class="main-image">
                        <img src="<?php echo base_url('assets/uploads/products/'. $product->picture_name); ?>" alt="<?php echo $product->name; ?>">
                    </div>
                    <div class="thumbnail-images">
                        <img src="<?php echo base_url('assets/uploads/products/'. $product->picture_name); ?>" alt="<?php echo $product->name; ?> Thumbnail 1">
                        <img src="<?php echo base_url('assets/uploads/products/'. $product->picture_name); ?>" alt="<?php echo $product->name; ?> Thumbnail 2">
                        <img src="<?php echo base_url('assets/uploads/products/'. $product->picture_name); ?>" alt="<?php echo $product->name; ?> Thumbnail 3">
                        <img src="<?php echo base_url('assets/uploads/products/'. $product->picture_name); ?>" alt="<?php echo $product->name; ?> Thumbnail 4">
                    </div>
                </div>
                
                <div class="product-info-detail">
                    <h2><?php echo $product->name; ?></h2>
                    <div class="rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                        <span>(120 ulasan)</span>
                    </div>
                    <p class="product-price">
                        <?php if ($product->current_discount > 0) : ?>
                            <span class="mr-2 price-dc"><strike><small>Rp <?php echo format_rupiah($product->price); ?></small></strike></span>
                            <span class="price-sale text-success">Rp <?php echo format_rupiah($product->price - $product->current_discount); ?></span>
                        <?php else : ?>
                            <span>Rp <?php echo format_rupiah($product->price); ?></span>
                        <?php endif; ?>
                    </p>
                    <div class="product-description">
                        
                        <ul>
                            <li>SKU: <?php echo $product->sku; ?></li>
                            <li>Stok: <?php echo $product->stock; ?> <?php echo $product->product_unit; ?></li>
                            <li>Status: <?php echo ($product->is_available) ? 'Tersedia' : 'Habis'; ?></li>
                        </ul>
                    </div>
                    
                    <div class="product-variants">
                        <div class="variant-group">
                            <h3>Ukuran:</h3>
                            <div class="variant-options">
                                <button class="variant-btn">S</button>
                                <button class="variant-btn active">M</button>
                                <button class="variant-btn">L</button>
                                <button class="variant-btn">XL</button>
                            </div>
                        </div>
                        
                        <div class="variant-group">
                            <h3>Warna:</h3>
                            <div class="variant-options color-options">
                                <button class="color-btn active" style="background-color: #333;"></button>
                                <button class="color-btn" style="background-color: #555;"></button>
                                <button class="color-btn" style="background-color: #224466;"></button>
                            </div>
                        </div>
                    </div>
                    
                    <div class="product-actions">
                        <div class="quantity">
                            <button class="qty-btn minus"><i class="fas fa-minus"></i></button>
                            <input type="text" id="quantity" name="quantity" value="1" min="1" max="100" readonly>
                            <button class="qty-btn plus"><i class="fas fa-plus"></i></button>
                        </div>
                        <button class="btn btn-primary add-cart cart-btn" 
                            data-sku="<?php echo $product->sku; ?>" 
                            data-name="<?php echo $product->name; ?>"
                            data-price="<?php echo ($product->current_discount > 0) ? ($product->price - $product->current_discount) : $product->price; ?>"
                            data-id="<?php echo $product->id; ?>"
							style="background-color: #a67c52; color: #fff; border-color: #a67c52;" >
                            <i class="fas fa-shopping-cart" ></i> Tambah ke Keranjang
                        </button>
                        <button class="btn-icon"><i class="far fa-heart"></i></button>
                    </div>
                    
                    <div class="product-meta">
                        <p><strong>SKU:</strong> <?php echo $product->sku; ?></p>
                        <p><strong>Kategori:</strong> <a href="#"><?php echo $product->category_id; ?></a></p>
                        <p><strong>Ditambahkan pada:</strong> <?php echo date('d M Y', strtotime($product->add_date)); ?></p>
                    </div>
                </div>
            </div>
            
            <div class="product-tabs">
                <div class="tab-header">
                    <button class="tab-btn active">Deskripsi</button>
                    <button class="tab-btn">Informasi Tambahan</button>
                    <button class="tab-btn">Ulasan (120)</button>
                    <button class="tab-btn">Pengiriman & Pengembalian</button>
                </div>
                
                <div class="tab-content active">
                    <h3>Detail Produk</h3>
                    <p><?php echo $product->description; ?></p>
                    <p>Produk ini ditambahkan pada <?php echo date('d M Y', strtotime($product->add_date)); ?>.</p>
                </div>
                
                <div class="tab-content">
                    <h3>Informasi Tambahan</h3>
                    <table>
                        <tr>
                            <th>SKU</th>
                            <td><?php echo $product->sku; ?></td>
                        </tr>
                        <tr>
                            <th>Kategori</th>
                            <td><?php echo $product->category_id; ?></td>
                        </tr>
                        <tr>
                            <th>Stok</th>
                            <td><?php echo $product->stock; ?> <?php echo $product->product_unit; ?></td>
                        </tr>
                        <tr>
                            <th>Status</th>
                            <td><?php echo ($product->is_available) ? 'Tersedia' : 'Habis'; ?></td>
                        </tr>
                    </table>
                </div>
                
                <div class="tab-content">
                    <h3>Ulasan Pelanggan</h3>
                    <p>Belum ada ulasan untuk produk ini.</p>
                </div>
                
                <div class="tab-content">
                    <h3>Kebijakan Pengiriman & Pengembalian</h3>
                    <p>Kami menawarkan pengiriman ke seluruh Indonesia dengan berbagai pilihan kurir. Produk dapat dikembalikan dalam waktu 14 hari setelah diterima dengan syarat dan ketentuan berlaku.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="related-products">
        <div class="container">
            <h2 class="section-title">Produk Terkait</h2>
            <div class="product-grid">
                <?php if (count($related_products) > 0) : ?>
                    <?php foreach ($related_products as $related) : ?>
                        <div class="product-card">
                            <div class="product-image">
                                <img src="<?php echo base_url('assets/uploads/products/'. $related->picture_name); ?>" alt="<?php echo $related->name; ?>">
                            </div>
                            <div class="product-info">
                                <h3><?php echo anchor('shop/product/'. $related->id .'/'. $related->sku .'/', $related->name); ?></h3>
                                <p class="price">
                                    <?php if ($related->current_discount > 0) : ?>
                                        Rp <?php echo format_rupiah($related->price - $related->current_discount); ?>
                                    <?php else : ?>
                                        Rp <?php echo format_rupiah($related->price); ?>
                                    <?php endif; ?>
                                </p>
                                <a href="<?php echo site_url('shop/product/'. $related->id .'/'. $related->sku .'/'); ?>" class="btn-small">Lihat Detail</a>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php else : ?>
                    <p>Tidak ada produk terkait.</p>
                <?php endif; ?>
            </div>
        </div>
    </section>



    <script>
    $(document).ready(function() {
        // Quantity control
        $('.qty-btn.plus').click(function(e) {
            e.preventDefault();
            var quantity = parseInt($('#quantity').val());
            if (quantity < 100) {
                $('#quantity').val(quantity + 1);
            }
        });

        $('.qty-btn.minus').click(function(e) {
            e.preventDefault();
            var quantity = parseInt($('#quantity').val());
            if (quantity > 1) {
                $('#quantity').val(quantity - 1);
            }
        });

        // Tab functionality
        $('.tab-btn').click(function() {
            $('.tab-btn').removeClass('active');
            $(this).addClass('active');
            
            var tabIndex = $(this).index();
            $('.tab-content').removeClass('active').eq(tabIndex).addClass('active');
        });

        // Add to cart functionality
        $('.add-cart').click(function() {
            var productId = $(this).data('id');
            var productName = $(this).data('name');
            var productPrice = $(this).data('price');
            var quantity = $('#quantity').val();
            var sku = $(this).data('sku');
            
            // You can implement AJAX call here to add to cart
            alert(productName + ' (SKU: ' + sku + ') telah ditambahkan ke keranjang sebanyak ' + quantity + ' item');
        });

        // Thumbnail image click
        $('.thumbnail-images img').click(function() {
            var mainImg = $(this).attr('src');
            $('.main-image img').attr('src', mainImg);
            $('.thumbnail-images img').removeClass('active');
            $(this).addClass('active');
        });
    });
    </script>

