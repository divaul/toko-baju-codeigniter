<style>
	/* 
* Lookbook Page Styles
* PRESTIGE Fashion Store
*/

/* Import base styles */

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

.btn-light {
    background-color: transparent;
    border: 1px solid #a67c52;
    color: #a67c52;
}

.btn-light:hover {
    background-color: #a67c52;
    color: #fff;
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

/* ======= LOOKBOOK CATEGORIES ======= */
.lookbook-categories {
    padding: 40px 0;
    background-color: #fff;
}

.category-filters {
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
    gap: 15px;
    margin-bottom: 30px;
}

.filter-btn {
    padding: 8px 20px;
    background-color: transparent;
    border: 1px solid #ddd;
    border-radius: 30px;
    cursor: pointer;
    font-size: 0.9rem;
    font-weight: 500;
    transition: all 0.3s ease;
}

.filter-btn:hover, .filter-btn.active {
    background-color: #a67c52;
    border-color: #a67c52;
    color: #fff;
}

/* ======= LOOKBOOK GALLERY ======= */
.lookbook-gallery {
    padding: 0 0 80px;
}

.lookbook-card {
    position: relative;
    border-radius: 8px;
    overflow: hidden;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
    margin-bottom: 30px;
    height: 100%;
    transition: all 0.3s ease;
}

.lookbook-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
}

.lookbook-card img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.8s ease;
}

.lookbook-card:hover img {
    transform: scale(1.05);
}

.lookbook-overlay {
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    background: linear-gradient(to top, rgba(0, 0, 0, 0.8), transparent);
    padding: 20px;
    color: #fff;
    opacity: 0;
    transform: translateY(20px);
    transition: all 0.3s ease;
}

.lookbook-card:hover .lookbook-overlay {
    opacity: 1;
    transform: translateY(0);
}

.lookbook-info h3 {
    font-size: 1.3rem;
    margin-bottom: 5px;
    color: #fff;
}

.lookbook-info p {
    font-size: 0.9rem;
    margin-bottom: 15px;
    opacity: 0.9;
}

.view-lookbook {
    background-color: #a67c52;
    color: #fff;
    border: none;
}

/* ======= LOOKBOOK MODAL ======= */
.modal-content {
    border-radius: 8px;
    overflow: hidden;
}

.modal-header {
    background-color: #f9f9f9;
    border-bottom: 1px solid #eee;
}

.modal-title {
    color: #333;
    font-weight: 600;
}

.lookbook-detail {
    padding: 20px 0;
}

.lookbook-detail h3 {
    font-size: 1.8rem;
    margin-bottom: 15px;
}

.lookbook-description {
    margin-bottom: 25px;
    line-height: 1.7;
}

.lookbook-items, .lookbook-styling-tips {
    margin-bottom: 25px;
}

.lookbook-items h4, .lookbook-styling-tips h4 {
    font-size: 1.2rem;
    margin-bottom: 15px;
    color: #a67c52;
}

.lookbook-items ul, .lookbook-styling-tips ul {
    padding-left: 0;
}

.lookbook-items li {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 10px 0;
    border-bottom: 1px solid #eee;
}

.item-name {
    font-weight: 500;
}

.item-price {
    color: #a67c52;
    font-weight: 600;
}

.item-link {
    color: #a67c52;
    font-size: 0.9rem;
    text-decoration: underline;
}

.lookbook-styling-tips li {
    position: relative;
    padding-left: 20px;
    margin-bottom: 10px;
}

.lookbook-styling-tips li:before {
    content: '•';
    position: absolute;
    left: 0;
    color: #a67c52;
}

.lookbook-actions {
    display: flex;
    gap: 15px;
}

/* ======= LOOKBOOK INSPIRATION ======= */
.lookbook-inspiration {
    padding: 80px 0;
    background-color: #f9f9f9;
}

.inspiration-content {
    padding: 30px 0;
}

.inspiration-content h3 {
    font-size: 1.8rem;
    margin-bottom: 20px;
}

.inspiration-content p {
    margin-bottom: 25px;
    line-height: 1.7;
}

.inspiration-tips {
    margin-bottom: 30px;
}

.inspiration-tips li {
    margin-bottom: 15px;
    display: flex;
    align-items: center;
}

.inspiration-tips li i {
    color: #a67c52;
    margin-right: 10px;
}

.inspiration-image img {
    border-radius: 8px;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
}

/* ======= LOOKBOOK SHARE ======= */
.lookbook-share {
    padding: 60px 0;
    background-color: #a67c52;
    color: #fff;
}

.share-content {
    text-align: center;
    max-width: 800px;
    margin: 0 auto;
}

.share-content h2 {
    margin-bottom: 15px;
    color: #fff;
}

.share-content p {
    margin-bottom: 30px;
    font-size: 1.1rem;
}

.social-share {
    display: flex;
    justify-content: center;
    gap: 20px;
    margin-bottom: 20px;
}

.social-btn {
    display: inline-flex;
    align-items: center;
    padding: 10px 20px;
    background-color: rgba(255, 255, 255, 0.2);
    border-radius: 30px;
    color: #fff;
    transition: all 0.3s ease;
}

.social-btn i {
    margin-right: 10px;
}

.social-btn:hover {
    background-color: rgba(255, 255, 255, 0.3);
    transform: translateY(-3px);
}

.hashtag {
    font-size: 1.2rem;
    font-weight: 600;
}


/* hamburger menu */
.hamburger {
    display: none;
    cursor: pointer;
    font-size: 24px;
}

/* ======= RESPONSIVE DESIGN ======= */
@media (max-width: 1200px) {
    .lookbook-gallery .row {
        margin-left: -10px;
        margin-right: -10px;
    }
    
    .lookbook-gallery [class*="col-"] {
        padding-left: 10px;
        padding-right: 10px;
    }
}

@media (max-width: 992px) {
    .footer-content {
        grid-template-columns: repeat(2, 1fr);
    }
    
    .modal-dialog {
        max-width: 90%;
    }
    
    .lookbook-detail {
        padding-top: 30px;
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
    
    .category-filters {
        flex-wrap: nowrap;
        overflow-x: auto;
        padding-bottom: 15px;
        justify-content: flex-start;
    }
    
    .filter-btn {
        flex: 0 0 auto;
    }
    
    .lookbook-inspiration .row {
        flex-direction: column-reverse;
    }
    
    .inspiration-image {
        margin-bottom: 30px;
    }
    
    .social-share {
        flex-direction: column;
        gap: 10px;
    }
}

@media (max-width: 576px) {
    .footer-content {
        grid-template-columns: 1fr;
    }
    
    .page-header h2 {
        font-size: 2rem;
    }
    
    .modal-content {
        padding: 10px;
    }
    
    .lookbook-actions {
        flex-direction: column;
    }
    
    .lookbook-actions .btn, .lookbook-actions .btn-light {
        width: 100%;
        text-align: center;
        margin-bottom: 10px;
    }
}

</style>
<section class="page-header">
        <div class="container">
            <h2>Lookbook PRESTIGE</h2>
            <p>Inspirasi gaya dan koleksi terbaik kami</p>
        </div>
    </section>

    <section class="lookbook-categories">
        <div class="container">
            <div class="category-filters">
                <button class="filter-btn active" data-filter="all">Semua</button>
                <button class="filter-btn" data-filter="formal">Formal</button>
                <button class="filter-btn" data-filter="casual">Casual</button>
                <button class="filter-btn" data-filter="summer">Summer</button>
                <button class="filter-btn" data-filter="winter">Winter</button>
            </div>
        </div>
    </section>

    <section class="lookbook-gallery">
        <div class="container">
            <div class="row g-4">
                <!-- Formal Collection -->
                <div class="col-md-6 col-lg-4 lookbook-item formal">
                    <div class="lookbook-card">
                        <img src="<?php echo get_theme_uri('images/banner/'); ?>Formal Look 1.jpg" alt="Formal Look 1" class="img-fluid">
                        <div class="lookbook-overlay">
                            <div class="lookbook-info">
                                <h3>Elegant Office Attire</h3>
                                <p>Blazer premium dengan kemeja putih dan celana formal</p>
                                <button class="btn-small view-lookbook" data-bs-toggle="modal" data-bs-target="#lookbookModal1">Lihat Detail</button>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-4 lookbook-item formal">
                    <div class="lookbook-card">
                        <img src="<?php echo get_theme_uri('images/banner/'); ?>Formal Look 2.jpg" alt="Formal Look 2" class="img-fluid">
                        <div class="lookbook-overlay">
                            <div class="lookbook-info">
                                <h3>Business Meeting</h3>
                                <p>Setelan jas dengan dasi sutra dan sepatu kulit</p>
                                <button class="btn-small view-lookbook" data-bs-toggle="modal" data-bs-target="#lookbookModal2">Lihat Detail</button>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-4 lookbook-item formal">
                    <div class="lookbook-card">
                        <img src="<?php echo get_theme_uri('images/banner/'); ?>Formal Look 3.jpg" alt="Formal Look 3" class="img-fluid">
                        <div class="lookbook-overlay">
                            <div class="lookbook-info">
                                <h3>Evening Gala</h3>
                                <p>Dress malam elegan dengan aksesoris minimalis</p>
                                <button class="btn-small view-lookbook" data-bs-toggle="modal" data-bs-target="#lookbookModal3">Lihat Detail</button>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Casual Collection -->
                <div class="col-md-6 col-lg-4 lookbook-item casual">
                    <div class="lookbook-card">
                        <img src="<?php echo get_theme_uri('images/banner/'); ?>Casual Look 1.jpg" alt="Casual Look 1" class="img-fluid">
                        <div class="lookbook-overlay">
                            <div class="lookbook-info">
                                <h3>Weekend Casual</h3>
                                <p>Kemeja casual dengan jeans dan sneakers</p>
                                <button class="btn-small view-lookbook" data-bs-toggle="modal" data-bs-target="#lookbookModal4">Lihat Detail</button>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-4 lookbook-item casual">
                    <div class="lookbook-card">
                        <img src="<?php echo get_theme_uri('images/banner/'); ?>Casual Look 2.jpg" alt="Casual Look 2" class="img-fluid">
                        <div class="lookbook-overlay">
                            <div class="lookbook-info">
                                <h3>Coffee Date</h3>
                                <p>Sweater rajut dengan celana chino dan loafers</p>
                                <button class="btn-small view-lookbook" data-bs-toggle="modal" data-bs-target="#lookbookModal5">Lihat Detail</button>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-4 lookbook-item casual">
                    <div class="lookbook-card">
                        <img src="<?php echo get_theme_uri('images/banner/'); ?>Casual Look 3.jpg" alt="Casual Look 3" class="img-fluid">
                        <div class="lookbook-overlay">
                            <div class="lookbook-info">
                                <h3>Urban Explorer</h3>
                                <p>Jaket denim dengan t-shirt grafis dan sepatu boots</p>
                                <button class="btn-small view-lookbook" data-bs-toggle="modal" data-bs-target="#lookbookModal6">Lihat Detail</button>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Summer Collection -->
                <div class="col-md-6 col-lg-4 lookbook-item summer">
                    <div class="lookbook-card">
                        <img src="<?php echo get_theme_uri('images/banner/'); ?>Summer Look 1.jpg" alt="Summer Look 1" class="img-fluid">
                        <div class="lookbook-overlay">
                            <div class="lookbook-info">
                                <h3>Beach Day</h3>
                                <p>Kemeja linen dengan celana pendek dan sandal</p>
                                <button class="btn-small view-lookbook" data-bs-toggle="modal" data-bs-target="#lookbookModal7">Lihat Detail</button>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-4 lookbook-item summer">
                    <div class="lookbook-card">
                        <img src="<?php echo get_theme_uri('images/banner/'); ?>Summer Look 2.jpg" alt="Summer Look 2" class="img-fluid">
                        <div class="lookbook-overlay">
                            <div class="lookbook-info">
                                <h3>Resort Wear</h3>
                                <p>Dress musim panas dengan topi lebar dan sandal espadrille</p>
                                <button class="btn-small view-lookbook" data-bs-toggle="modal" data-bs-target="#lookbookModal8">Lihat Detail</button>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-4 lookbook-item summer">
                    <div class="lookbook-card">
                        <img src="<?php echo get_theme_uri('images/banner/'); ?>Summer Look 3.jpg" alt="Summer Look 3" class="img-fluid">
                        <div class="lookbook-overlay">
                            <div class="lookbook-info">
                                <h3>Tropical Vibes</h3>
                                <p>Kemeja motif tropical dengan celana linen dan espadrilles</p>
                                <button class="btn-small view-lookbook" data-bs-toggle="modal" data-bs-target="#lookbookModal9">Lihat Detail</button>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Winter Collection -->
                <div class="col-md-6 col-lg-4 lookbook-item winter">
                    <div class="lookbook-card">
                        <img src="<?php echo get_theme_uri('images/banner/'); ?>Winter Look 1.jpg" alt="Winter Look 1" class="img-fluid">
                        <div class="lookbook-overlay">
                            <div class="lookbook-info">
                                <h3>Cozy Layers</h3>
                                <p>Sweater tebal dengan coat wool dan syal rajut</p>
                                <button class="btn-small view-lookbook" data-bs-toggle="modal" data-bs-target="#lookbookModal10">Lihat Detail</button>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-4 lookbook-item winter">
                    <div class="lookbook-card">
                        <img src="<?php echo get_theme_uri('images/banner/'); ?>Winter Look 2.jpg" alt="Winter Look 2" class="img-fluid">
                        <div class="lookbook-overlay">
                            <div class="lookbook-info">
                                <h3>Winter Elegance</h3>
                                <p>Dress wool dengan stocking tebal dan boots kulit</p>
                                <button class="btn-small view-lookbook" data-bs-toggle="modal" data-bs-target="#lookbookModal11">Lihat Detail</button>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-4 lookbook-item winter">
                    <div class="lookbook-card">
                        <img src="<?php echo get_theme_uri('images/banner/'); ?>Winter Look 3.jpg" alt="Winter Look 3" class="img-fluid">
                        <div class="lookbook-overlay">
                            <div class="lookbook-info">
                                <h3>Alpine Chic</h3>
                                <p>Jaket puffer dengan turtleneck dan celana wool</p>
                                <button class="btn-small view-lookbook" data-bs-toggle="modal" data-bs-target="#lookbookModal12">Lihat Detail</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Lookbook Detail Modals -->
    <!-- Modal 1 -->
    <div class="modal fade" id="lookbookModal1" tabindex="-1" aria-labelledby="lookbookModalLabel1" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="lookbookModalLabel1">Elegant Office Attire</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-7">
                            <img src="<?php echo get_theme_uri('images/banner/'); ?>Formal Look 1.jpg" alt="Formal Look 1" class="img-fluid">
                        </div>
                        <div class="col-md-5">
                            <div class="lookbook-detail">
                                <h3>Elegant Office Attire</h3>
                                <p class="lookbook-description">Tampil profesional dan elegan dengan blazer premium kami yang dipadukan dengan kemeja putih dan celana formal. Sempurna untuk lingkungan kantor atau pertemuan bisnis.</p>
                                
                                <div class="lookbook-items">
                                    <h4>Item dalam Look Ini:</h4>
                                    <ul>
                                        <li>
                                            <span class="item-name">Luxury Blazer</span>
                                            <span class="item-price">Rp 899.000</span>
                                            <a href="produk.html" class="item-link">Lihat Detail</a>
                                        </li>
                                        <li>
                                            <span class="item-name">Premium White Shirt</span>
                                            <span class="item-price">Rp 429.000</span>
                                            <a href="produk.html" class="item-link">Lihat Detail</a>
                                        </li>
                                        <li>
                                            <span class="item-name">Formal Pants</span>
                                            <span class="item-price">Rp 549.000</span>
                                            <a href="produk.html" class="item-link">Lihat Detail</a>
                                        </li>
                                        <li>
                                            <span class="item-name">Leather Oxford Shoes</span>
                                            <span class="item-price">Rp 1.299.000</span>
                                            <a href="produk.html" class="item-link">Lihat Detail</a>
                                        </li>
                                    </ul>
                                </div>
                                
                                <div class="lookbook-styling-tips">
                                    <h4>Tips Styling:</h4>
                                    <ul>
                                        <li>Pilih kemeja dengan fit yang pas untuk tampilan yang rapi</li>
                                        <li>Pastikan panjang lengan blazer tepat di pergelangan tangan</li>
                                        <li>Tambahkan pocket square untuk sentuhan elegan</li>
                                        <li>Sepatu harus selalu bersih dan dipoles</li>
                                    </ul>
                                </div>
                                
                                <div class="lookbook-actions">
                                    <a href="#" class="btn">Beli Semua Item</a>
                                    <a href="#" class="btn-light">Simpan Look</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal 2 - Simplified for brevity, in real implementation all modals would be complete -->
    <div class="modal fade" id="lookbookModal2" tabindex="-1" aria-labelledby="lookbookModalLabel2" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="lookbookModalLabel2">Business Meeting</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-7">
                            <img src="<?php echo get_theme_uri('images/banner/'); ?>Formal Look 2.jpg" alt="Formal Look 2" class="img-fluid">
                        </div>
                        <div class="col-md-5">
                            <div class="lookbook-detail">
                                <h3>Business Meeting</h3>
                                <p class="lookbook-description">Setelan jas dengan dasi sutra dan sepatu kulit untuk tampilan bisnis yang sempurna. Ideal untuk pertemuan penting atau presentasi.</p>
                                
                                <div class="lookbook-items">
                                    <h4>Item dalam Look Ini:</h4>
                                    <ul>
                                        <li>
                                            <span class="item-name">Premium Suit</span>
                                            <span class="item-price">Rp 1.899.000</span>
                                            <a href="produk.html" class="item-link">Lihat Detail</a>
                                        </li>
                                        <li>
                                            <span class="item-name">Silk Tie</span>
                                            <span class="item-price">Rp 199.000</span>
                                            <a href="produk.html" class="item-link">Lihat Detail</a>
                                        </li>
                                    </ul>
                                </div>
                                
                                <div class="lookbook-actions">
                                    <a href="#" class="btn">Beli Semua Item</a>
                                    <a href="#" class="btn-light">Simpan Look</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Additional modals would be implemented for each lookbook item -->

    <section class="lookbook-inspiration">
        <div class="container">
            <h2 class="section-title">Inspirasi Gaya</h2>
            <div class="row">
                <div class="col-md-6">
                    <div class="inspiration-content">
                        <h3>Bagaimana Memadukan Pakaian Anda</h3>
                        <p>Memadukan pakaian dengan tepat adalah kunci untuk tampil stylish dan percaya diri. Berikut beberapa tips dasar yang dapat membantu Anda menciptakan look yang harmonis:</p>
                        <ul class="inspiration-tips">
                            <li><i class="fas fa-check"></i> Perhatikan keseimbangan warna dan tekstur</li>
                            <li><i class="fas fa-check"></i> Pilih satu focal point dalam outfit Anda</li>
                            <li><i class="fas fa-check"></i> Sesuaikan dengan bentuk tubuh dan kepribadian Anda</li>
                            <li><i class="fas fa-check"></i> Investasikan pada item dasar berkualitas tinggi</li>
                            <li><i class="fas fa-check"></i> Aksesori dapat mengubah tampilan sederhana menjadi istimewa</li>
                        </ul>
                        <a href="style-guide.html" class="btn">Lihat Style Guide</a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="inspiration-image">
                        <img src="<?php echo get_theme_uri('images/banner/Style Guide.jpg'); ?>" alt="Style Inspiration" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="lookbook-share">
        <div class="container">
            <div class="share-content">
                <h2>Bagikan Gaya Anda</h2>
                <p>Tunjukkan bagaimana Anda mengenakan koleksi PRESTIGE dan dapatkan kesempatan untuk ditampilkan di lookbook kami</p>
                <div class="social-share">
                    <a href="#" class="social-btn"><i class="fab fa-instagram"></i> Instagram</a>
                    <a href="#" class="social-btn"><i class="fab fa-facebook"></i> Facebook</a>
                    <a href="#" class="social-btn"><i class="fab fa-twitter"></i> Twitter</a>
                </div>
                <p class="hashtag">#PRESITGEStyle #MyPRESTIGELook</p>
            </div>
        </div>
    </section>
 <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Hamburger menu
            const hamburger = document.getElementById('hamburger');
            const nav = document.querySelector('nav');
            
            hamburger.addEventListener('click', function() {
                nav.classList.toggle('active');
            });
            
            // Lookbook filtering
            const filterBtns = document.querySelectorAll('.filter-btn');
            const lookbookItems = document.querySelectorAll('.lookbook-item');
            
            filterBtns.forEach(btn => {
                btn.addEventListener('click', () => {
                    // Remove active class from all buttons
                    filterBtns.forEach(btn => btn.classList.remove('active'));
                    
                    // Add active class to clicked button
                    btn.classList.add('active');
                    
                    // Get filter value
                    const filterValue = btn.getAttribute('data-filter');
                    
                    // Filter lookbook items
                    lookbookItems.forEach(item => {
                        if (filterValue === 'all' || item.classList.contains(filterValue)) {
                            item.style.display = 'block';
                        } else {
                            item.style.display = 'none';
                        }
                    });
                });
            });
        });
    </script>

