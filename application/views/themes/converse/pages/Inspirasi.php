<style>
	/* 
* Inspirasi Page Styles
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

.section-subtitle {
    text-align: center;
    margin-bottom: 30px;
    color: #666;
    max-width: 800px;
    margin-left: auto;
    margin-right: auto;
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

/* ======= FEATURED VIDEO ======= */
.featured-video {
    padding: 80px 0;
    background-color: #fff;
}

.video-container {
    border-radius: 8px;
    overflow: hidden;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
}

.video-content {
    padding: 30px;
}

.content-label {
    display: inline-block;
    background-color: #a67c52;
    color: #fff;
    padding: 5px 15px;
    border-radius: 20px;
    font-size: 0.9rem;
    margin-bottom: 15px;
}

.video-content h3 {
    font-size: 2rem;
    margin-bottom: 20px;
    color: #333;
}

.video-content p {
    margin-bottom: 20px;
    line-height: 1.8;
}

/* ======= OUTFIT IDEAS ======= */
.outfit-ideas {
    padding: 80px 0;
    background-color: #f9f9f9;
}

.outfit-card {
    background-color: #fff;
    border-radius: 8px;
    overflow: hidden;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
    height: 100%;
    transition: all 0.3s ease;
}

.outfit-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
}

.outfit-image {
    position: relative;
    height: 300px;
}

.outfit-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.outfit-day {
    position: absolute;
    top: 15px;
    right: 15px;
    background-color: #a67c52;
    color: #fff;
    padding: 5px 15px;
    border-radius: 20px;
    font-size: 0.9rem;
    font-weight: 600;
}

.outfit-info {
    padding: 20px;
}

.outfit-info h3 {
    font-size: 1.3rem;
    margin-bottom: 10px;
}

.outfit-info p {
    margin-bottom: 15px;
    font-size: 0.95rem;
    line-height: 1.6;
}

.outfit-items {
    margin-bottom: 20px;
    background-color: #f9f9f9;
    padding: 15px;
    border-radius: 8px;
}

.item-label {
    font-weight: 600;
    display: block;
    margin-bottom: 10px;
}

.outfit-items ul {
    padding-left: 20px;
}

.outfit-items ul li {
    list-style-type: disc;
    margin-bottom: 5px;
    font-size: 0.9rem;
}

/* ======= CUSTOMER GALLERY ======= */
.customer-gallery {
    padding: 80px 0;
    background-color: #fff;
}

.gallery-filter {
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

.gallery-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 20px;
    margin-bottom: 40px;
}

.gallery-item {
    position: relative;
    border-radius: 8px;
    overflow: hidden;
    aspect-ratio: 1/1;
}

.gallery-item img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.8s ease;
}

.gallery-item:hover img {
    transform: scale(1.05);
}

.gallery-overlay {
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

.gallery-item:hover .gallery-overlay {
    opacity: 1;
    transform: translateY(0);
}

.customer-info h4 {
    font-size: 1.1rem;
    margin-bottom: 5px;
    color: #fff;
}

.customer-info p {
    font-size: 0.9rem;
    margin-bottom: 10px;
    opacity: 0.9;
}

.view-product {
    color: #a67c52;
    font-weight: 500;
    font-size: 0.9rem;
}

.view-product:hover {
    color: #fff;
    text-decoration: underline;
}

.gallery-cta {
    text-align: center;
    max-width: 800px;
    margin: 0 auto;
}

.gallery-cta p {
    margin-bottom: 20px;
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
    background-color: #f0f0f0;
    border-radius: 30px;
    color: #333;
    transition: all 0.3s ease;
}

.social-btn i {
    margin-right: 10px;
}

.social-btn:hover {
    background-color: #a67c52;
    color: #fff;
    transform: translateY(-3px);
}

.hashtag {
    font-size: 1.1rem;
    font-weight: 600;
    color: #a67c52;
}

/* ======= WEEKLY RECOMMENDATIONS ======= */
.weekly-recommendations {
    padding: 80px 0;
    background-color: #f9f9f9;
}

.recommendation-card {
    background-color: #fff;
    border-radius: 8px;
    overflow: hidden;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
    height: 100%;
    transition: all 0.3s ease;
}

.recommendation-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
}

.recommendation-image {
    height: 250px;
}

.recommendation-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.recommendation-content {
    padding: 25px;
}

.recommendation-content h3 {
    font-size: 1.5rem;
    margin-bottom: 15px;
}

.recommendation-content p {
    margin-bottom: 15px;
    line-height: 1.7;
}

/* ======= INSPIRATION VIDEOS ======= */
.inspiration-videos {
    padding: 80px 0;
    background-color: #fff;
}

.video-card {
    background-color: #fff;
    border-radius: 8px;
    overflow: hidden;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
    height: 100%;
    transition: all 0.3s ease;
}

.video-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
}

.video-thumbnail {
    border-radius: 8px 8px 0 0;
    overflow: hidden;
}

.video-info {
    padding: 20px;
}

.video-info h3 {
    font-size: 1.2rem;
    margin-bottom: 10px;
}

.video-info p {
    font-size: 0.95rem;
    line-height: 1.6;
}

/* ======= SUBSCRIBE INSPIRATION ======= */
.subscribe-inspiration {
    padding: 60px 0;
    background-color: #a67c52;
    color: #fff;
}

.subscribe-content {
    text-align: center;
    max-width: 800px;
    margin: 0 auto;
}

.subscribe-content h2 {
    margin-bottom: 15px;
    color: #fff;
    font-size: 2.2rem;
}

.subscribe-content p {
    margin-bottom: 30px;
    font-size: 1.1rem;
}

.input-group {
    display: flex;
}

.form-control {
    flex: 1;
    height: 50px;
    border: none;
    border-radius: 4px 0 0 4px;
    padding: 0 15px;
    font-size: 1rem;
}

.input-group .btn {
    border-radius: 0 4px 4px 0;
    background-color: #333;
}

.input-group .btn:hover {
    background-color: #222;
}

/* hamburger menu */
.hamburger {
    display: none;
    cursor: pointer;
    font-size: 24px;
}

/* ======= RESPONSIVE DESIGN ======= */
@media (max-width: 1200px) {
    .gallery-grid {
        grid-template-columns: repeat(3, 1fr);
    }
}

@media (max-width: 992px) {
    .footer-content {
        grid-template-columns: repeat(2, 1fr);
    }
    
    .video-content {
        padding: 30px 0;
    }
    
    .gallery-grid {
        grid-template-columns: repeat(2, 1fr);
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
    
    .featured-video .row {
        flex-direction: column-reverse;
    }
    
    .video-container {
        margin-top: 30px;
    }
    
    .gallery-filter {
        flex-wrap: nowrap;
        overflow-x: auto;
        padding-bottom: 15px;
        justify-content: flex-start;
    }
    
    .filter-btn {
        flex: 0 0 auto;
    }
    
    .social-share {
        flex-direction: column;
        gap: 10px;
    }
    
    .input-group {
        flex-direction: column;
    }
    
    .form-control {
        border-radius: 4px;
        margin-bottom: 10px;
    }
    
    .input-group .btn {
        border-radius: 4px;
        width: 100%;
    }
}

@media (max-width: 576px) {
    .footer-content {
        grid-template-columns: 1fr;
    }
    
    .page-header h2 {
        font-size: 2rem;
    }
    
    .video-content h3 {
        font-size: 1.8rem;
    }
    
    .section-title {
        font-size: 1.8rem;
    }
    
    .gallery-grid {
        grid-template-columns: 1fr;
    }
}

</style>
<section class="page-header">
      <div class="container">
        <h2>Inspirasi PRESTIGE</h2>
        <p>Temukan ide dan inspirasi fashion untuk gaya Anda</p>
      </div>
    </section>

    <section class="featured-video">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6">
            <div class="video-container">
              <div class="ratio ratio-16x9">
                <video autoplay muted loop playsinline>
                  <source src="<?php echo get_theme_uri('images/banner/prestige.mp4'); ?>" type="video/mp4" />
                  Browser Anda tidak mendukung video HTML5.
                </video>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="video-content">
              <span class="content-label">Video Terbaru</span>
              <h3>PRESTIGE Summer Collection 2025</h3>
              <p>
                Saksikan koleksi musim panas terbaru kami yang menampilkan
                desain eksklusif dengan bahan premium dan potongan yang
                sempurna. Terinspirasi oleh keindahan pantai tropis Indonesia,
                koleksi ini menggabungkan warna-warna cerah dengan siluet yang
                elegan.
              </p>
              <p>
                Temukan cara memadukan item-item dari koleksi ini untuk berbagai
                kesempatan, dari santai di pantai hingga dinner di resort mewah.
              </p>
              <a href="koleksi.html" class="btn">Lihat Koleksi</a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="outfit-ideas">
      <div class="container">
        <h2 class="section-title">Outfit of the Week</h2>
        <div class="row">
          <div class="col-md-4 mb-4">
            <div class="outfit-card">
              <div class="outfit-image">
                <img
                  src="<?php echo get_theme_uri('images/banner/Monday Outfit.jpg'); ?>"
                  alt="Monday Outfit"
                />
                <div class="outfit-day">Senin</div>
              </div>
              <div class="outfit-info">
                <h3>Office Chic</h3>
                <p>
                  Mulai minggu Anda dengan tampilan profesional namun tetap
                  stylish. Padukan blazer dengan kemeja dan celana formal untuk
                  kesan yang rapi dan berkelas.
                </p>
                <div class="outfit-items">
                  <span class="item-label">Item:</span>
                  <ul>
                    <li>Luxury Blazer</li>
                    <li>Premium White Shirt</li>
                    <li>Formal Pants</li>
                    <li>Leather Oxford Shoes</li>
                  </ul>
                </div>
                <a href="produk.html" class="btn-small">Shop This Look</a>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-4">
            <div class="outfit-card">
              <div class="outfit-image">
                <img
                  src="<?php echo get_theme_uri('images/banner/Wednesday Outfit.jpg'); ?>"
                  alt="Wednesday Outfit"
                />
                <div class="outfit-day">Rabu</div>
              </div>
              <div class="outfit-info">
                <h3>Smart Casual</h3>
                <p>
                  Untuk pertengahan minggu, pilih tampilan smart casual yang
                  nyaman namun tetap profesional. Kombinasi kemeja dengan celana
                  chino adalah pilihan sempurna.
                </p>
                <div class="outfit-items">
                  <span class="item-label">Item:</span>
                  <ul>
                    <li>Oxford Button-Down Shirt</li>
                    <li>Premium Chino Pants</li>
                    <li>Leather Loafers</li>
                    <li>Casual Belt</li>
                  </ul>
                </div>
                <a href="produk.html" class="btn-small">Shop This Look</a>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-4">
            <div class="outfit-card">
              <div class="outfit-image">
                <img
                  src="<?php echo get_theme_uri('images/banner/friday outfit.jpg'); ?>"
                  alt="Friday Outfit"
                />
                <div class="outfit-day">Jumat</div>
              </div>
              <div class="outfit-info">
                <h3>Casual Friday</h3>
                <p>
                  Sambut akhir pekan dengan tampilan casual yang tetap rapi.
                  Padukan kemeja casual dengan jeans premium untuk keseimbangan
                  sempurna antara santai dan stylish.
                </p>
                <div class="outfit-items">
                  <span class="item-label">Item:</span>
                  <ul>
                    <li>Casual Shirt</li>
                    <li>Premium Denim Jeans</li>
                    <li>Leather Sneakers</li>
                    <li>Casual Watch</li>
                  </ul>
                </div>
                <a href="produk.html" class="btn-small">Shop This Look</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="customer-gallery">
      <div class="container">
        <h2 class="section-title">Galeri Pelanggan</h2>
        <p class="section-subtitle">
          Inspirasi dari pelanggan PRESTIGE yang mengenakan koleksi kami
        </p>

        <div class="gallery-filter">
          <button class="filter-btn active" data-filter="all">Semua</button>
          <button class="filter-btn" data-filter="formal">Formal</button>
          <button class="filter-btn" data-filter="casual">Casual</button>
          <button class="filter-btn" data-filter="accessories">
            Aksesoris
          </button>
        </div>

        <div class="gallery-grid">
          <div class="gallery-item formal">
            <img
              src="<?php echo get_theme_uri('images/banner/Blazer Premium.png'); ?>"
              alt="Customer Gallery1"
            />
            <div class="gallery-overlay">
              <div class="customer-info">
                <h4>Anita W.</h4>
                <p>Mengenakan Luxury Blazer untuk meeting penting</p>
                <a href="produk.html" class="view-product">Lihat Produk</a>
              </div>
            </div>
          </div>
          <div class="gallery-item casual">
            <img
              src="<?php echo get_theme_uri('images/banner/Casual Set.png'); ?>"
              alt="Customer Gallery2"
            />
            <div class="gallery-overlay">
              <div class="customer-info">
                <h4>shinta S.</h4>
                <p>Weekend look dengan Casual Set</p>
                <a href="produk.html" class="view-product">Lihat Produk</a>
              </div>
            </div>
          </div>
          <div class="gallery-item formal">
            <img
              src="<?php echo get_theme_uri('images/banner/Dress Elegant.png'); ?>"
              alt="Customer Gallery3"
            />
            <div class="gallery-overlay">
              <div class="customer-info">
                <h4>Citra D.</h4>
                <p>Elegant Dress untuk acara formal</p>
                <a href="produk.html" class="view-product">Lihat Produk</a>
              </div>
            </div>
          </div>
          <div class="gallery-item accessories">
            <img
              src="<?php echo get_theme_uri('images/banner/Silk Tie.png'); ?>"
              alt="Customer Gallery4"
            />
            <div class="gallery-overlay">
              <div class="customer-info">
                <h4>davina P.</h4>
                <p>Melengkapi tampilan dengan Silk Tie</p>
                <a href="produk.html" class="view-product">Lihat Produk</a>
              </div>
            </div>
          </div>
          <div class="gallery-item casual">
            <img
              src="<?php echo get_theme_uri('images/banner/casual.jpeg'); ?>"
              alt="Customer Gallery5"
            />
            <div class="gallery-overlay">
              <div class="customer-info">
                <h4>Eka P.</h4>
                <p>Casual chic dengan Premium T-shirt</p>
                <a href="produk.html" class="view-product">Lihat Produk</a>
              </div>
            </div>
          </div>
          <div class="gallery-item formal">
            <img
              src="<?php echo get_theme_uri('images/banner/Formal Shirt.png'); ?>"
              alt="Customer Gallery6"
            />
            <div class="gallery-overlay">
              <div class="customer-info">
                <h4>Fitri R.</h4>
                <p>Business meeting dengan Formal Shirt</p>
                <a href="produk.html" class="view-product">Lihat Produk</a>
              </div>
            </div>
          </div>
          <div class="gallery-item accessories">
            <img
              src="<?php echo get_theme_uri('images/banner/Accessories.jpeg'); ?>"
              alt="Customer Gallery7"
            />
            <div class="gallery-overlay">
              <div class="customer-info">
                <h4>Gita S.</h4>
                <p>Aksesori elegan dengan Leather Belt</p>
                <a href="produk.html" class="view-product">Lihat Produk</a>
              </div>
            </div>
          </div>
          <div class="gallery-item casual">
            <img
              src="<?php echo get_theme_uri('images/banner/Casual Set.png'); ?>"
              alt="Customer Gallery8"
            />
            <div class="gallery-overlay">
              <div class="customer-info">
                <h4>Zahra W.</h4>
                <p>Santai namun stylish dengan Denim Jacket</p>
                <a href="produk.html" class="view-product">Lihat Produk</a>
              </div>
            </div>
          </div>
        </div>

        <div class="gallery-cta">
          <p>
            Bagikan foto Anda mengenakan produk PRESTIGE dan dapatkan kesempatan
            ditampilkan di galeri kami
          </p>
          <div class="social-share">
            <a href="#" class="social-btn"
              ><i class="fab fa-instagram"></i> Instagram</a
            >
            <a href="#" class="social-btn"
              ><i class="fab fa-facebook"></i> Facebook</a
            >
          </div>
          <p class="hashtag">#PRESITGEStyle #MyPRESTIGELook</p>
        </div>
      </div>
    </section>

    <section class="weekly-recommendations">
      <div class="container">
        <h2 class="section-title">Rekomendasi Minggu Ini</h2>
        <div class="row">
          <div class="col-md-6">
            <div class="recommendation-card">
              <div class="recommendation-image">
                <img
                  src="<?php echo get_theme_uri('images/banner/fashion trend.jpg'); ?>"
                  alt="Fashion Trend"
                />
              </div>
              <div class="recommendation-content">
                <span class="content-label">Trend Alert</span>
                <h3>Earth Tones: Warna Netral yang Timeless</h3>
                <p>
                  Warna-warna earth tone seperti beige, olive, dan terracotta
                  sedang menjadi tren di dunia fashion. Warna-warna ini tidak
                  hanya timeless, tetapi juga mudah dipadukan dengan berbagai
                  item pakaian lainnya.
                </p>
                <p>
                  Koleksi terbaru PRESTIGE menampilkan berbagai item dengan
                  warna earth tone yang sempurna untuk melengkapi lemari pakaian
                  Anda.
                </p>
                <a href="koleksi.html" class="btn-small">Lihat Koleksi</a>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="recommendation-card">
              <div class="recommendation-image">
                <img
                  src="<?php echo get_theme_uri('images/banner/style tips.jpg'); ?>"
                  alt="Style Tips"
                />
              </div>
              <div class="recommendation-content">
                <span class="content-label">Style Tips</span>
                <h3>Layering untuk Cuaca Transisi</h3>
                <p>
                  Teknik layering adalah kunci untuk menghadapi cuaca yang tidak
                  menentu. Mulailah dengan pakaian dasar tipis, tambahkan
                  sweater atau cardigan, dan lengkapi dengan outer layer seperti
                  blazer atau jaket ringan.
                </p>
                <p>
                  Dengan teknik ini, Anda dapat dengan mudah menyesuaikan
                  pakaian dengan perubahan suhu sepanjang hari.
                </p>
                <a href="style-guide.html" class="btn-small"
                  >Lihat Style Guide</a
                >
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="inspiration-videos">
      <div class="container">
        <h2 class="section-title">Video Inspirasi</h2>
        <div class="row">
          <div class="col-md-4 mb-4">
            <div class="video-card">
              <div class="video-thumbnail">
                <div class="ratio ratio-16x9">
                  <video autoplay muted loop playsinline>
                    <source src="<?php echo get_theme_uri('images/banner/prestige.mp4'); ?>" type="video/mp4" />
                    Browser Anda tidak mendukung video HTML5.
                  </video>
                </div>
              </div>
              <div class="video-info">
                <h3>How to Style: Office Wear</h3>
                <p>
                  Panduan lengkap untuk memadukan pakaian kantor yang
                  profesional namun tetap stylish.
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-4">
            <div class="video-card">
              <div class="video-thumbnail">
                <div class="ratio ratio-16x9">
                  <video autoplay muted loop playsinline>
                    <source src="<?php echo get_theme_uri('images/banner/prestige2.mp4'); ?>" type="video/mp4" />
                    Browser Anda tidak mendukung video HTML5.
                  </video>
                </div>
              </div>
              <div class="video-info">
                <h3>Capsule Wardrobe Essentials</h3>
                <p>
                  Item-item esensial yang harus dimiliki untuk membangun capsule
                  wardrobe yang efisien.
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-4">
            <div class="video-card">
              <div class="video-thumbnail">
                <div class="ratio ratio-16x9">
                  <video autoplay muted loop playsinline>
                    <source src="<?php echo get_theme_uri('images/banner/prestige3.mp4'); ?>" type="video/mp4" />
                    Browser Anda tidak mendukung video HTML5.
                  </video>
                </div>
              </div>
              <div class="video-info">
                <h3>Weekend Outfit Ideas</h3>
                <p>
                  Inspirasi outfit untuk akhir pekan yang santai namun tetap
                  stylish.
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="text-center mt-4">
          <a href="#" class="btn">Lihat Semua Video</a>
        </div>
      </div>
    </section>

    <section class="subscribe-inspiration">
      <div class="container">
        <div class="subscribe-content">
          <h2>Dapatkan Inspirasi Mingguan</h2>
          <p>
            Berlangganan newsletter kami untuk mendapatkan inspirasi fashion,
            tips styling, dan informasi tentang koleksi terbaru langsung ke
            inbox Anda.
          </p>
          <form>
            <div class="row justify-content-center">
              <div class="col-md-6">
                <div class="input-group">
                  <input
                    type="email"
                    class="form-control"
                    placeholder="Masukkan alamat email Anda"
                    required
                  />
                  <button type="submit" class="btn">Berlangganan</button>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </section>

	   <script>
      document.addEventListener("DOMContentLoaded", function () {
        const hamburger = document.getElementById("hamburger");
        const nav = document.querySelector("nav");

        hamburger.addEventListener("click", function () {
          nav.classList.toggle("active");
        });

        // Gallery filtering
        const filterBtns = document.querySelectorAll(
          ".gallery-filter .filter-btn"
        );
        const galleryItems = document.querySelectorAll(".gallery-item");

        filterBtns.forEach((btn) => {
          btn.addEventListener("click", () => {
            // Remove active class from all buttons
            filterBtns.forEach((btn) => btn.classList.remove("active"));

            // Add active class to clicked button
            btn.classList.add("active");

            // Get filter value
            const filterValue = btn.getAttribute("data-filter");

            // Filter gallery items
            galleryItems.forEach((item) => {
              if (
                filterValue === "all" ||
                item.classList.contains(filterValue)
              ) {
                item.style.display = "block";
              } else {
                item.style.display = "none";
              }
            });
          });
        });
      });
    </script>
