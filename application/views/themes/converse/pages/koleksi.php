<style>
	/* ======= RESET & BASE STYLES ======= */
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

.center {
    text-align: center;
    margin: 2rem 0;
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
    background-color: white;
    color: #a67c52;
    border: 1px solid #a67c52;
}

.btn-light:hover {
    background-color: #f8f8f8;
    color: #8a6642;
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

/* ======= COLLECTION PAGE ======= */
.collection {
    padding: 80px 0;
}

.filter-options {
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
    margin-bottom: 40px;
    padding: 20px;
    background-color: #f9f9f9;
    border-radius: 8px;
}

.filter-group h3 {
    font-size: 1.2rem;
    margin-bottom: 15px;
}

.filter-group ul {
    display: flex;
    flex-wrap: wrap;
    gap: 10px;
}

.filter-group ul li a {
    display: inline-block;
    padding: 8px 15px;
    background-color: #eee;
    border-radius: 30px;
    font-size: 0.9rem;
    transition: all 0.3s ease;
}

.filter-group ul li a:hover,
.filter-group ul li a.active {
    background-color: #a67c52;
    color: white;
}

.filter-group select {
    padding: 10px 15px;
    border: 1px solid #ddd;
    border-radius: 4px;
    font-size: 0.9rem;
    background-color: white;
}

.collection-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 30px;
    margin-bottom: 50px;
}

.collection-card {
    position: relative;
    border-radius: 8px;
    overflow: hidden;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
}

.collection-card img {
    width: 100%;
    height: 300px;
    object-fit: cover;
    transition: transform 0.8s ease;
}

.collection-card:hover img {
    transform: scale(1.05);
}

.collection-info {
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    padding: 30px;
    background: linear-gradient(to top, rgba(0,0,0,0.8), rgba(0,0,0,0));
    color: white;
    transition: all 0.3s ease;
}

.collection-info h3 {
    font-size: 1.5rem;
    margin-bottom: 10px;
	color:#eee
}

.collection-info p {
    margin-bottom: 15px;
}

.collection-card:hover .collection-info {
    padding-bottom: 40px;
}

/* ======= PRODUCT GRID ======= */
.featured-products {
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

.old-price {
    text-decoration: line-through;
    color: #999;
    margin-right: 10px;
    font-size: 0.9rem;
}

.badge {
    position: absolute;
    top: 15px;
    right: 15px;
    background-color: #a67c52;
    color: white;
    padding: 5px 10px;
    border-radius: 3px;
    font-size: 0.8rem;
    font-weight: 600;
}

/* ======= CTA SECTION ======= */
.cta {
    background-image: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('/api/placeholder/1600/600');
    background-size: cover;
    background-position: center;
    color: white;
    padding: 100px 0;
    text-align: center;
}

.cta-content {
    max-width: 600px;
    margin: 0 auto;
}

.cta-content h2 {
    font-size: 2.5rem;
    margin-bottom: 20px;
}

.cta-content p {
    font-size: 1.2rem;
    margin-bottom: 30px;
}


/* ======= RESPONSIVE DESIGN ======= */
@media (max-width: 1200px) {
    .product-grid {
        grid-template-columns: repeat(3, 1fr);
    }
}

@media (max-width: 992px) {
    .footer-content {
        grid-template-columns: repeat(2, 1fr);
    }
    
    .product-grid {
        grid-template-columns: repeat(2, 1fr);
    }
    
    .collection-grid {
        grid-template-columns: 1fr;
    }
}

@media (max-width: 768px) {
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
    
    .filter-options {
        flex-direction: column;
        gap: 20px;
    }
}

@media (max-width: 576px) {
    .product-grid {
        grid-template-columns: 1fr;
    }
    
    .footer-content {
        grid-template-columns: 1fr;
    }
}
</style>

<section class="page-header">
        <div class="container">
            <h2>Koleksi Kami</h2>
            <p>Temukan berbagai koleksi fashion premium untuk tampilan terbaik Anda</p>
        </div>
    </section>

    <section class="collection">
        <div class="container">
            <div class="filter-options">
                <div class="filter-group">
                    <h3>Kategori</h3>
                    <ul>
                        <li><a href="#" class="active">Semua</a></li>
                        <li><a href="#">Formal</a></li>
                        <li><a href="#">Casual</a></li>
                        <li><a href="#">Outer</a></li>
                        <li><a href="#">Accessories</a></li>
                    </ul>
                </div>
                
                <div class="filter-group">
                    <h3>Urutkan</h3>
                    <select>
                        <option value="terbaru">Terbaru</option>
                        <option value="harga-terendah">Harga: Terendah</option>
                        <option value="harga-tertinggi">Harga: Tertinggi</option>
                        <option value="populer">Paling Populer</option>
                    </select>
                </div>
            </div>

            <div class="collection-grid">
                <div class="collection-card">
                    <img src="<?php echo get_theme_uri('images/banner/formal.jpg'); ?>" alt="Koleksi Formal">
                    <div class="collection-info">
                        <h3>Koleksi Formal</h3>
                        <p>Tampil profesional dan elegan dengan koleksi formal kami</p>
                        <a href="produk.html" class="btn">Lihat Produk</a>
                    </div>
                </div>
                
                <div class="collection-card">
                    <img src="<?php echo get_theme_uri('images/banner/casual.jpeg'); ?>" alt="Koleksi Casual">
                    <div class="collection-info">
                        <h3>Koleksi Casual</h3>
                        <p>Nyaman dan stylish untuk kegiatan sehari-hari</p>
                        <a href="produk.html" class="btn">Lihat Produk</a>
                    </div>
                </div>
                
                <div class="collection-card">
                    <img src="<?php echo get_theme_uri('images/banner/outer.jpeg'); ?>" alt="Koleksi Outer">
                    <div class="collection-info">
                        <h3>Koleksi Outer</h3>
                        <p>Lapisan tambahan untuk tampilan berlapis yang menarik</p>
                        <a href="produk.html" class="btn">Lihat Produk</a>
                    </div>
                </div>
                
                <div class="collection-card">
                    <img src="<?php echo get_theme_uri('images/banner/Accessories.jpeg'); ?>" alt="Koleksi Accessories">
                    <div class="collection-info">
                        <h3>Koleksi Accessories</h3>
                        <p>Pelengkap fashion untuk tampilan yang sempurna</p>
                        <a href="produk.html" class="btn">Lihat Produk</a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="cta">
        <div class="container">
            <div class="cta-content">
                <h2 style="color: white;">Dapatkan Diskon 20%</h2>
                <p>Khusus pembelian pertama untuk member baru</p>
                <a href="produk.html" class="btn btn-light">Belanja Sekarang</a>
            </div>
        </div>
    </section>
