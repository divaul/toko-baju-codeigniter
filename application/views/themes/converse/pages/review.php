<style>
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

ul, ol {
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

/* ======= BUTTONS ======= */
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

/* ======= PAGE HEADER ======= */
.page-header {
    background-color: #f9f9f9;
    padding: 60px 0;
    text-align: center;
}

.page-header h2 {
    font-size: 2.5rem;
    margin-bottom: 10px;
    color: #333;
}

.page-header p {
    font-size: 1.1rem;
    color: #666;
    max-width: 700px;
    margin: 0 auto;
}

/* ======= REVIEW INTRO ======= */
.review-intro {
    padding: 80px 0;
    background-color: #fff;
}

.intro-content {
    padding-right: 30px;
}

.intro-content h3 {
    font-size: 2rem;
    margin-bottom: 20px;
    color: #333;
}

.intro-content p {
    margin-bottom: 20px;
    line-height: 1.8;
}

.intro-image img {
    border-radius: 8px;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
}

.review-stats {
    display: flex;
    justify-content: space-between;
    margin-top: 30px;
    flex-wrap: wrap;
}

.stat-item {
    text-align: center;
    padding: 20px;
    background-color: #f9f9f9;
    border-radius: 8px;
    flex: 1;
    margin: 0 10px 10px 0;
    min-width: 120px;
}

.stat-number {
    display: block;
    font-size: 2rem;
    font-weight: 700;
    color: #a67c52;
    margin-bottom: 5px;
}

.stat-label {
    font-size: 0.9rem;
    color: #666;
}

/* ======= REVIEW FILTER ======= */
.review-filter {
    padding: 20px 0;
    background-color: #f9f9f9;
}

.filter-container {
    display: flex;
    justify-content: space-between;
    align-items: center;
    flex-wrap: wrap;
    padding: 20px;
    background-color: #fff;
    border-radius: 8px;
    box-shadow: 0 3px 10px rgba(0, 0, 0, 0.05);
}

.filter-group {
    display: flex;
    align-items: center;
    margin-bottom: 10px;
}

.filter-group label {
    margin-right: 10px;
    font-weight: 500;
}

.form-select {
    padding: 8px 15px;
    border: 1px solid #ddd;
    border-radius: 4px;
    background-color: #fff;
    min-width: 150px;
}

/* ======= REVIEW LIST ======= */
.review-list {
    padding: 60px 0;
    background-color: #fff;
}

.review-card {
    background-color: #fff;
    border-radius: 8px;
    padding: 25px;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
    margin-bottom: 30px;
    height: 100%;
    transition: all 0.3s ease;
}

.review-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
}

.review-header {
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
    margin-bottom: 15px;
}

.reviewer-info {
    display: flex;
    align-items: center;
}

.reviewer-avatar {
    width: 50px;
    height: 50px;
    border-radius: 50%;
    overflow: hidden;
    margin-right: 15px;
}

.reviewer-avatar img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.reviewer-details h4 {
    font-size: 1.1rem;
    margin-bottom: 5px;
}

.review-date {
    font-size: 0.85rem;
    color: #888;
    margin: 0;
}

.product-info {
    text-align: right;
}

.product-info h5 {
    font-size: 1rem;
    margin-bottom: 5px;
}

.product-category {
    display: inline-block;
    background-color: #f0f0f0;
    color: #666;
    padding: 3px 10px;
    border-radius: 20px;
    font-size: 0.8rem;
}

.review-rating {
    display: flex;
    align-items: center;
    margin-bottom: 15px;
}

.stars {
    display: flex;
    margin-right: 10px;
}

.stars i {
    color: #ffc107;
    margin-right: 2px;
}

.rating-value {
    font-weight: 600;
    color: #333;
}

.review-content {
    margin-bottom: 20px;
    line-height: 1.7;
}

.review-images {
    display: flex;
    gap: 10px;
    margin-bottom: 20px;
    flex-wrap: wrap;
}

.review-images img {
    width: 80px;
    height: 80px;
    object-fit: cover;
    border-radius: 4px;
    cursor: pointer;
    transition: all 0.3s ease;
}

.review-images img:hover {
    transform: scale(1.05);
}

.review-footer {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-top: auto;
}

.helpful-btn {
    background: none;
    border: 1px solid #ddd;
    padding: 5px 15px;
    border-radius: 20px;
    cursor: pointer;
    font-size: 0.9rem;
    transition: all 0.3s ease;
}

.helpful-btn:hover, .helpful-btn.active {
    background-color: #a67c52;
    border-color: #a67c52;
    color: #fff;
}

.helpful-btn i {
    margin-right: 5px;
}

.view-product {
    color: #a67c52;
    font-weight: 500;
    font-size: 0.9rem;
}

.view-product:hover {
    text-decoration: underline;
}

/* ======= PAGINATION ======= */
.pagination-container {
    margin-top: 40px;
}

.pagination .page-link {
    color: #333;
    border: 1px solid #ddd;
    margin: 0 5px;
    border-radius: 4px;
    transition: all 0.3s ease;
}

.pagination .page-link:hover {
    background-color: #f0f0f0;
    border-color: #ddd;
}

.pagination .page-item.active .page-link {
    background-color: #a67c52;
    border-color: #a67c52;
}

.pagination .page-item.disabled .page-link {
    color: #aaa;
}

/* ======= WRITE REVIEW ======= */
.write-review {
    padding: 60px 0;
    background-color: #a67c52;
    color: #fff;
}

.write-review-content {
    text-align: center;
    max-width: 800px;
    margin: 0 auto;
}

.write-review-content h2 {
    margin-bottom: 15px;
    color: #fff;
    font-size: 2.2rem;
}

.write-review-content p {
    margin-bottom: 30px;
    font-size: 1.1rem;
}

.write-review-content .btn {
    background-color: #fff;
    color: #a67c52;
}

.write-review-content .btn:hover {
    background-color: rgba(255, 255, 255, 0.9);
}

/* hamburger menu */
.hamburger {
    display: none;
    cursor: pointer;
    font-size: 24px;
}

/* ======= RESPONSIVE DESIGN ======= */
@media (max-width: 1200px) {
    .review-intro .row {
        margin-left: -10px;
        margin-right: -10px;
    }
    
    .review-intro [class*="col-"] {
        padding-left: 10px;
        padding-right: 10px;
    }
}

@media (max-width: 992px) {
    .footer-content {
        grid-template-columns: repeat(2, 1fr);
    }
    
    .intro-content {
        padding-right: 0;
        margin-bottom: 30px;
    }
    
    .filter-container {
        flex-direction: column;
        align-items: flex-start;
    }
    
    .filter-group {
        width: 100%;
        margin-bottom: 15px;
    }
    
    .form-select {
        width: 100%;
    }
}

@media (max-width: 768px) {
    header .container {
        flex-direction: row;
        justify-content: space-between;
        align-items: center;
    }
    
    .logo {
        margin-bottom: 0;
        text-align: left;
        width: auto;
    }
    
    nav {
        display: none;
        width: 100%;
        order: 3;
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
    }
    
    .account-dropdown {
        position: static;
        display: none;
        box-shadow: none;
    }
    
    .account-menu:hover .account-dropdown {
        display: block;
    }
    
    .review-intro {
        padding: 50px 0;
    }
    
    .review-stats {
        justify-content: center;
    }
    
    .stat-item {
        min-width: 100px;
        margin: 0 5px 10px;
    }
    
    .review-header {
        flex-direction: column;
    }
    
    .product-info {
        text-align: left;
        margin-top: 15px;
    }
    
    .review-footer {
        flex-direction: column;
        gap: 15px;
    }
}

@media (max-width: 576px) {
    .footer-content {
        grid-template-columns: 1fr;
    }
    
    .page-header h2 {
        font-size: 2rem;
    }
    
    .intro-content h3 {
        font-size: 1.8rem;
    }
    
    .section-title {
        font-size: 1.8rem;
    }
    
    .review-images img {
        width: 60px;
        height: 60px;
    }
}


</style>



<section class="page-header">
        <div class="container">
            <h2>Review Produk PRESTIGE</h2>
            <p>Pengalaman nyata pelanggan dengan produk kami</p>
        </div>
    </section>

    <section class="review-intro">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="intro-content">
                        <h3>Ulasan Jujur dari Pelanggan Kami</h3>
                        <p>Di PRESTIGE, kami percaya bahwa pengalaman pelanggan adalah hal terpenting. Kami bangga dengan kualitas produk kami dan senang berbagi pengalaman nyata dari pelanggan yang telah membeli dan menggunakan produk PRESTIGE.</p>
                        <p>Semua ulasan di bawah ini adalah pengalaman asli dari pelanggan kami. Kami menghargai setiap masukan, baik positif maupun konstruktif, karena hal ini membantu kami terus meningkatkan kualitas dan layanan.</p>
                        <div class="review-stats">
                            <div class="stat-item">
                                <span class="stat-number">4.8</span>
                                <span class="stat-label">Rating Rata-rata</span>
                            </div>
                            <div class="stat-item">
                                <span class="stat-number">95%</span>
                                <span class="stat-label">Pelanggan Puas</span>
                            </div>
                            <div class="stat-item">
                                <span class="stat-number">1200+</span>
                                <span class="stat-label">Total Review</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="intro-image">
                        <img src="<?php echo get_theme_uri('images/banner/Customer Reviews.jpg'); ?>" alt="Customer Reviews" class="img-fluid rounded">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="review-filter">
        <div class="container">
            <div class="filter-container">
                <div class="filter-group">
                    <label for="categoryFilter">Kategori:</label>
                    <select id="categoryFilter" class="form-select">
                        <option value="all">Semua Kategori</option>
                        <option value="formal">Formal</option>
                        <option value="casual">Casual</option>
                        <option value="accessories">Aksesoris</option>
                    </select>
                </div>
                <div class="filter-group">
                    <label for="ratingFilter">Rating:</label>
                    <select id="ratingFilter" class="form-select">
                        <option value="all">Semua Rating</option>
                        <option value="5">5 Bintang</option>
                        <option value="4">4 Bintang</option>
                        <option value="3">3 Bintang</option>
                        <option value="2">2 Bintang</option>
                        <option value="1">1 Bintang</option>
                    </select>
                </div>
                <div class="filter-group">
                    <label for="sortFilter">Urutkan:</label>
                    <select id="sortFilter" class="form-select">
                        <option value="newest">Terbaru</option>
                        <option value="oldest">Terlama</option>
                        <option value="highest">Rating Tertinggi</option>
                        <option value="lowest">Rating Terendah</option>
                    </select>
                </div>
            </div>
        </div>
    </section>

    <section class="review-list">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mb-4">
                    <div class="review-card">
                        <div class="review-header">
                            <div class="reviewer-info">
                                <div class="reviewer-avatar">
                                    <img src="<?php echo get_theme_uri('images/banner/userp.png'); ?>" alt="Avatar">
                                </div>
                                <div class="reviewer-details">
                                    <h4>Anita Wijaya</h4>
                                    <p class="review-date">15 Mei 2025</p>
                                </div>
                            </div>
                            <div class="product-info">
                                <h5>Luxury Blazer</h5>
                                <div class="product-category">Formal</div>
                            </div>
                        </div>
                        <div class="review-rating">
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <span class="rating-value">5.0</span>
                        </div>
                        <div class="review-content">
                            <p>Blazer ini benar-benar luar biasa! Bahannya sangat berkualitas dan jahitannya rapi. Saya sudah mencoba banyak blazer dari brand lain, tapi ini adalah yang terbaik. Pas di badan dan memberikan tampilan yang sangat profesional. Saya mendapat banyak pujian saat mengenakannya di meeting penting. Worth every penny!</p>
                        </div>
                        <div class="review-images">
                            <img src="<?php echo get_theme_uri('images/banner/Blazer Premium.png'); ?>" alt="Review Image">
                            <img src="<?php echo get_theme_uri('images/banner/1.png'); ?>" alt="Review Image">
                            <img src="<?php echo get_theme_uri('images/banner/2.png'); ?>" alt="Review Image">
                        </div>
                        <div class="review-footer">
                            <div class="helpful-count">
                                <button class="helpful-btn"><i class="far fa-thumbs-up"></i> Membantu (24)</button>
                            </div>
                            <a href="produk.html" class="view-product">Lihat Produk</a>
                        </div>
                    </div>
                </div>
                
                <!-- Review 2 -->
                <div class="col-md-6 mb-4">
                    <div class="review-card">
                        <div class="review-header">
                            <div class="reviewer-info">
                                <div class="reviewer-avatar">
                                    <img src="<?php echo get_theme_uri('images/banner/userl.png'); ?>" alt="Avatar">
                                </div>
                                <div class="reviewer-details">
                                    <h4>Budi Santoso</h4>
                                    <p class="review-date">10 Mei 2025</p>
                                </div>
                            </div>
                            <div class="product-info">
                                <h5>Formal Shirt</h5>
                                <div class="product-category">Formal</div>
                            </div>
                        </div>
                        <div class="review-rating">
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                            </div>
                            <span class="rating-value">4.0</span>
                        </div>
                        <div class="review-content">
                            <p>Kemeja formal ini sangat nyaman dipakai seharian di kantor. Bahannya breathable dan tidak mudah kusut. Saya suka dengan cutting-nya yang pas di badan, tidak terlalu ketat atau terlalu longgar. Satu-satunya kekurangan adalah warnanya sedikit berbeda dari yang di foto, tapi masih dalam batas wajar. Overall, saya puas dengan pembelian ini.</p>
                        </div>
                        <div class="review-footer">
                            <div class="helpful-count">
                                <button class="helpful-btn"><i class="far fa-thumbs-up"></i> Membantu (18)</button>
                            </div>
                            <a href="produk.html" class="view-product">Lihat Produk</a>
                        </div>
                    </div>
                </div>
                
                <!-- Review 3 -->
                <div class="col-md-6 mb-4">
                    <div class="review-card">
                        <div class="review-header">
                            <div class="reviewer-info">
                                <div class="reviewer-avatar">
                                    <img src="<?php echo get_theme_uri('images/banner/userp.png'); ?>" alt="Avatar">
                                </div>
                                <div class="reviewer-details">
                                    <h4>Citra Dewi</h4>
                                    <p class="review-date">5 Mei 2025</p>
                                </div>
                            </div>
                            <div class="product-info">
                                <h5>Dress Elegant</h5>
                                <div class="product-category">Formal</div>
                            </div>
                        </div>
                        <div class="review-rating">
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                            <span class="rating-value">4.5</span>
                        </div>
                        <div class="review-content">
                            <p>Dress ini benar-benar elegan dan membuat saya merasa percaya diri saat menghadiri acara formal. Bahannya berkualitas tinggi dan jatuhnya sangat bagus di badan. Saya mendapat banyak pujian saat memakainya. Ukurannya juga pas sesuai size chart. Satu-satunya masukan adalah mungkin bisa ditambahkan varian warna lain karena saya ingin membeli lagi dengan warna berbeda!</p>
                        </div>
                        <div class="review-images">
                            <img src="<?php echo get_theme_uri('images/banner/Dress Elegant.png'); ?>" alt="Review Image">
                        </div>
                        <div class="review-footer">
                            <div class="helpful-count">
                                <button class="helpful-btn"><i class="far fa-thumbs-up"></i> Membantu (32)</button>
                            </div>
                            <a href="produk.html" class="view-product">Lihat Produk</a>
                        </div>
                    </div>
                </div>
                
                <!-- Review 4 -->
                <div class="col-md-6 mb-4">
                    <div class="review-card">
                        <div class="review-header">
                            <div class="reviewer-info">
                                <div class="reviewer-avatar">
                                    <img src="<?php echo get_theme_uri('images/banner/userl.png'); ?>" alt="Avatar">
                                </div>
                                <div class="reviewer-details">
                                    <h4>Dimas Pratama</h4>
                                    <p class="review-date">28 April 2025</p>
                                </div>
                            </div>
                            <div class="product-info">
                                <h5>Casual Set</h5>
                                <div class="product-category">Casual</div>
                            </div>
                        </div>
                        <div class="review-rating">
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                            </div>
                            <span class="rating-value">3.0</span>
                        </div>
                        <div class="review-content">
                            <p>Casual set ini cukup nyaman dipakai untuk aktivitas sehari-hari. Bahannya lembut dan tidak panas. Namun, setelah beberapa kali dicuci, warnanya sedikit pudar. Saya juga merasa ukurannya agak lebih kecil dari yang diharapkan. Mungkin sebaiknya order satu ukuran lebih besar dari biasanya. Secara keseluruhan masih ok untuk harganya.</p>
                        </div>
                        <div class="review-footer">
                            <div class="helpful-count">
                                <button class="helpful-btn"><i class="far fa-thumbs-up"></i> Membantu (15)</button>
                            </div>
                            <a href="produk.html" class="view-product">Lihat Produk</a>
                        </div>
                    </div>
                </div>
                
                <!-- Review 5 -->
                <div class="col-md-6 mb-4">
                    <div class="review-card">
                        <div class="review-header">
                            <div class="reviewer-info">
                                <div class="reviewer-avatar">
                                    <img src="<?php echo get_theme_uri('images/banner/userl.png'); ?>" alt="Avatar">
                                </div>
                                <div class="reviewer-details">
                                    <h4>Agus Suyatno</h4>
                                    <p class="review-date">20 April 2025</p>
                                </div>
                            </div>
                            <div class="product-info">
                                <h5>Silk Tie</h5>
                                <div class="product-category">Accessories</div>
                            </div>
                        </div>
                        <div class="review-rating">
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <span class="rating-value">5.0</span>
                        </div>
                        <div class="review-content">
                            <p>Saya membeli celana jeans ini sebagai hadiah untuk suami saya, dan dia sangat menyukainya! Kualitasnya luar biasa, teksturnya halus, dan warnanya elegan. Dasi ini memberikan sentuhan sempurna untuk pakaian formal suami saya. Packaging-nya juga sangat bagus dan cocok untuk hadiah. Sangat merekomendasikan produk ini!</p>
                        </div>
                        <div class="review-images">
                           
                            <img src="<?php echo get_theme_uri('images/banner/Casual Style.jpg'); ?>" alt="Review Image">
                        </div>
                        <div class="review-footer">
                            <div class="helpful-count">
                                <button class="helpful-btn"><i class="far fa-thumbs-up"></i> Membantu (27)</button>
                            </div>
                            <a href="produk.html" class="view-product">Lihat Produk</a>
                        </div>
                    </div>
                </div>
                
                <!-- Review 6 -->
                <div class="col-md-6 mb-4">
                    <div class="review-card">
                        <div class="review-header">
                            <div class="reviewer-info">
                                <div class="reviewer-avatar">
                                    <img src="<?php echo get_theme_uri('images/banner/userl.png'); ?>" alt="Avatar">
                                </div>
                                <div class="reviewer-details">
                                    <h4>Fajar Ramadhan</h4>
                                    <p class="review-date">15 April 2025</p>
                                </div>
                            </div>
                            <div class="product-info">
                                <h5>Formal Pants</h5>
                                <div class="product-category">Formal</div>
                            </div>
                        </div>
                        <div class="review-rating">
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                            </div>
                            <span class="rating-value">4.0</span>
                        </div>
                        <div class="review-content">
                            <p>Celana formal ini sangat nyaman dipakai seharian di kantor. Bahannya berkualitas dan tidak mudah kusut. Potongannya slim fit tapi tidak terlalu ketat, sehingga tetap nyaman saat duduk lama. Saya suka dengan detail jahitannya yang rapi. Satu-satunya masukan adalah kantongnya agak dangkal, jadi hati-hati saat menyimpan barang di sana.</p>
                        </div>
                        <div class="review-footer">
                            <div class="helpful-count">
                                <button class="helpful-btn"><i class="far fa-thumbs-up"></i> Membantu (19)</button>
                            </div>
                            <a href="produk.html" class="view-product">Lihat Produk</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="pagination-container">
                <nav aria-label="Page navigation">
                    <ul class="pagination justify-content-center">
                        <li class="page-item disabled">
                            <a class="page-link" href="#" tabindex="-1" aria-disabled="true">
                                <i class="fas fa-chevron-left"></i>
                            </a>
                        </li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#">
                                <i class="fas fa-chevron-right"></i>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </section>

    <section class="write-review">
        <div class="container">
            <div class="write-review-content">
                <h2>Bagikan Pengalaman Anda</h2>
                <p>Sudah mencoba produk PRESTIGE? Bagikan pengalaman Anda dan bantu pelanggan lain membuat keputusan yang tepat.</p>
                <a href="#" class="btn">Tulis Review</a>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="script/dropdown.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const hamburger = document.getElementById('hamburger');
            const nav = document.querySelector('nav');
            
            hamburger.addEventListener('click', function() {
                nav.classList.toggle('active');
            });
            
            // Filter functionality would be implemented here in a real project
            const categoryFilter = document.getElementById('categoryFilter');
            const ratingFilter = document.getElementById('ratingFilter');
            const sortFilter = document.getElementById('sortFilter');
            
            // Example of filter change event
            categoryFilter.addEventListener('change', function() {
                // Filter logic would go here
                console.log('Category filter changed to: ' + this.value);
            });
            
            // Helpful button functionality
            const helpfulBtns = document.querySelectorAll('.helpful-btn');
            
            helpfulBtns.forEach(btn => {
                btn.addEventListener('click', function() {
                    // In a real implementation, this would send an AJAX request
                    // For now, just toggle the active class
                    this.classList.toggle('active');
                    
                    // Update the count text (this is just for demo)
                    const currentText = this.textContent;
                    const countMatch = currentText.match(/\((\d+)\)/);
                    if (countMatch) {
                        const currentCount = parseInt(countMatch[1]);
                        const newCount = this.classList.contains('active') ? currentCount + 1 : currentCount - 1;
                        this.innerHTML = `<i class="far fa-thumbs-up"></i> Membantu (${newCount})`;
                    }
                });
            });
        });
    </script>
