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

/* ======= FEATURED EVENT CAROUSEL ======= */
.featured-event {
    padding: 60px 0;
    background-color: #fff;
}

.carousel-content {
    display: flex;
    align-items: center;
    height: 500px;
}

.carousel-text {
    flex: 1;
    padding: 0 30px;
}

.carousel-image {
    flex: 1;
    height: 100%;
}

.carousel-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    border-radius: 8px;
}

.event-date {
    display: inline-block;
    background-color: #a67c52;
    color: #fff;
    padding: 5px 15px;
    border-radius: 20px;
    font-size: 0.9rem;
    margin-bottom: 15px;
}

.carousel-text h2 {
    font-size: 2.2rem;
    margin-bottom: 20px;
}

.carousel-text p {
    margin-bottom: 30px;
    font-size: 1.1rem;
    line-height: 1.7;
}

.carousel-control-prev-icon,
.carousel-control-next-icon {
    background-color: rgba(166, 124, 82, 0.7);
    border-radius: 50%;
    padding: 25px;
}

.carousel-indicators button {
    background-color: #a67c52;
    width: 12px;
    height: 12px;
    border-radius: 50%;
    margin: 0 5px;
}

/* ======= UPCOMING EVENTS ======= */
.upcoming-events {
    padding: 80px 0;
    background-color: #f9f9f9;
}

.event-card {
    background-color: #fff;
    border-radius: 8px;
    overflow: hidden;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
    height: 100%;
    transition: all 0.3s ease;
}

.event-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
}

.event-image {
    position: relative;
    height: 200px;
}

.event-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.event-date-badge {
    position: absolute;
    top: 15px;
    right: 15px;
    background-color: #a67c52;
    color: #fff;
    text-align: center;
    padding: 10px;
    border-radius: 5px;
    min-width: 60px;
}

.event-date-badge .day {
    display: block;
    font-size: 1.5rem;
    font-weight: 700;
    line-height: 1;
}

.event-date-badge .month {
    display: block;
    font-size: 0.8rem;
    text-transform: uppercase;
    font-weight: 600;
}

.event-info {
    padding: 20px;
}

.event-info h3 {
    font-size: 1.3rem;
    margin-bottom: 10px;
}

.event-location, .event-time {
    font-size: 0.9rem;
    color: #666;
    margin-bottom: 10px;
}

.event-location i, .event-time i {
    color: #a67c52;
    margin-right: 5px;
}

.event-description {
    margin-bottom: 20px;
    font-size: 0.95rem;
    line-height: 1.6;
}

/* ======= PAST EVENTS ======= */
.past-events {
    padding: 80px 0;
    background-color: #fff;
}

.past-event-card {
    background-color: #fff;
    border-radius: 8px;
    overflow: hidden;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
    transition: all 0.3s ease;
    height: 100%;
}

.past-event-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
}

.card-body {
    padding: 20px;
    height: 100%;
    display: flex;
    flex-direction: column;
}

.card-body .event-date {
    margin-bottom: 10px;
}

.card-body h3 {
    font-size: 1.3rem;
    margin-bottom: 10px;
}

.event-gallery {
    margin-top: auto;
}

.gallery-link {
    color: #a67c52;
    font-weight: 600;
    display: inline-flex;
    align-items: center;
}

.gallery-link i {
    margin-left: 5px;
}

.gallery-link:hover {
    color: #8a6642;
}

/* ======= EVENT REGISTRATION ======= */
.event-registration {
    padding: 60px 0;
    background-color: #f9f9f9;
}

.registration-content {
    text-align: center;
    max-width: 800px;
    margin: 0 auto;
}

.registration-content h2 {
    margin-bottom: 15px;
}

.registration-content p {
    margin-bottom: 30px;
    font-size: 1.1rem;
}

.form-control {
    height: 50px;
    border: 1px solid #ddd;
    border-radius: 4px;
    padding: 0 15px;
    font-size: 1rem;
}

.form-control:focus {
    border-color: #a67c52;
    box-shadow: 0 0 0 0.2rem rgba(166, 124, 82, 0.25);
}



/* hamburger menu */
.hamburger {
    display: none;
    cursor: pointer;
    font-size: 24px;
}

/* ======= RESPONSIVE DESIGN ======= */
@media (max-width: 1200px) {
    .carousel-content {
        height: auto;
        flex-direction: column;
    }
    
    .carousel-text, .carousel-image {
        width: 100%;
        padding: 30px;
    }
}

@media (max-width: 992px) {
    .footer-content {
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
    
    .carousel-content {
        padding: 20px 0;
    }
    
    .carousel-text h2 {
        font-size: 1.8rem;
    }
}

@media (max-width: 576px) {
    .footer-content {
        grid-template-columns: 1fr;
    }
    
    .page-header h2 {
        font-size: 2rem;
    }
    
    .carousel-text h2 {
        font-size: 1.5rem;
    }
    
    .event-date-badge {
        min-width: 50px;
        padding: 5px;
    }
    
    .event-date-badge .day {
        font-size: 1.2rem;
    }
}
</style>

<section class="page-header">
      <div class="container">
        <h2>Event PRESTIGE</h2>
        <p>Temukan acara eksklusif dan kolaborasi spesial kami</p>
      </div>
    </section>

    <section class="featured-event">
      <div class="container">
        <div
          id="featuredEventCarousel"
          class="carousel slide"
          data-bs-ride="carousel"
        >
          
          </div>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="carousel-content">
                <div class="carousel-text">
                  <span class="event-date">15-17 Juni 2025</span>
                  <h2>PRESTIGE Summer Collection Launch</h2>
                  <p>
                    Bergabunglah dengan kami untuk peluncuran koleksi musim
                    panas terbaru kami di Mall Grand Indonesia. Nikmati diskon
                    eksklusif, minuman gratis, dan kesempatan untuk bertemu
                    dengan desainer kami.
                  </p>
                  <a href="#" class="btn">Daftar Sekarang</a>
                </div>
                <div class="carousel-image">
                  <img
                    src="<?php echo get_theme_uri('images/background_01.jpg'); ?>"
                    alt="Summer Collection Launch"
                  />
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="carousel-content">
                <div class="carousel-text">
                  <span class="event-date">22 Juli 2025</span>
                  <h2>Fashion Talk: Sustainable Fashion</h2>
                  <p>
                    Webinar eksklusif bersama para ahli industri fashion tentang
                    tren fashion berkelanjutan dan bagaimana PRESTIGE
                    berkomitmen untuk praktik fashion yang lebih ramah
                    lingkungan.
                  </p>
                  <a href="#" class="btn">Daftar Sekarang</a>
                </div>
                <div class="carousel-image">
                  <img
                    src="gambar/gambar produk/fashion talk.jpg"
                    alt="Fashion Talk"
                  />
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="carousel-content">
                <div class="carousel-text">
                  <span class="event-date">5-7 Agustus 2025</span>
                  <h2>PRESTIGE x Designer Collaboration</h2>
                  <p>
                    Kolaborasi eksklusif dengan desainer ternama Indonesia.
                    Dapatkan koleksi terbatas dan kesempatan untuk bertemu
                    langsung dengan desainer di toko flagship kami.
                  </p>
                  <a href="#" class="btn">Daftar Sekarang</a>
                </div>
                <div class="carousel-image">
                  <img
                    src="gambar/gambar produk/Designer Collaboration.jpg"
                    alt="Designer Collaboration"
                  />
                </div>
              </div>
            </div>
          </div>
          
        </div>
      </div>
    </section>

    <section class="upcoming-events">
      <div class="container">
        <h2 class="section-title">Acara Mendatang</h2>
        <div class="row">
          <div class="col-md-4 mb-4">
            <div class="event-card">
              <div class="event-image">
                <img
                  src="<?php echo get_theme_uri('images/banner/Jakarta Fashion Week.jpg'); ?>"
                  alt="Jakarta Fashion Week"
                />
                <div class="event-date-badge">
                  <span class="day">10</span>
                  <span class="month">SEP</span>
                </div>
              </div>
              <div class="event-info">
                <h3>Jakarta Fashion Week</h3>
                <p class="event-location">
                  <i class="fas fa-map-marker-alt"></i> Senayan City, Jakarta
                </p>
                <p class="event-time">
                  <i class="far fa-clock"></i> 10:00 - 20:00 WIB
                </p>
                <p class="event-description">
                  PRESTIGE akan berpartisipasi dalam Jakarta Fashion Week dengan
                  menampilkan koleksi terbaru kami di runway utama.
                </p>
                <a href="#" class="btn-small">Detail Event</a>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-4">
            <div class="event-card">
              <div class="event-image">
                <img
                  src="<?php echo get_theme_uri('images/banner/Trunk Show.jpg'); ?>"
                  alt="Trunk Show"
                />
                <div class="event-date-badge">
                  <span class="day">15</span>
                  <span class="month">SEP</span>
                </div>
              </div>
              <div class="event-info">
                <h3>Trunk Show: Fall Collection</h3>
                <p class="event-location">
                  <i class="fas fa-map-marker-alt"></i> PRESTIGE Flagship Store,
                  Jakarta
                </p>
                <p class="event-time">
                  <i class="far fa-clock"></i> 14:00 - 18:00 WIB
                </p>
                <p class="event-description">
                  Preview eksklusif koleksi musim gugur kami dengan penawaran
                  khusus untuk pelanggan yang hadir.
                </p>
                <a href="#" class="btn-small">Detail Event</a>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-4">
            <div class="event-card">
              <div class="event-image">
                <img
                  src="<?php echo get_theme_uri('images/banner/Styling Workshop.jpg'); ?>"
                  alt="Styling Workshop"
                />
                <div class="event-date-badge">
                  <span class="day">22</span>
                  <span class="month">SEP</span>
                </div>
              </div>
              <div class="event-info">
                <h3>Styling Workshop</h3>
                <p class="event-location">
                  <i class="fas fa-map-marker-alt"></i> Online via Zoom
                </p>
                <p class="event-time">
                  <i class="far fa-clock"></i> 19:00 - 21:00 WIB
                </p>
                <p class="event-description">
                  Workshop online bersama stylist profesional untuk membantu
                  Anda memaksimalkan koleksi pakaian Anda.
                </p>
                <a href="#" class="btn-small">Detail Event</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="past-events">
      <div class="container">
        <h2 class="section-title">Event Sebelumnya</h2>
        <div class="row">
          <div class="col-md-6 mb-4">
            <div class="past-event-card">
              <div class="row g-0">
                <div class="col-md-5">
                  <img
                    src="<?php echo get_theme_uri('images/banner/Spring Collection Launch.jpg'); ?>"
                    alt="Spring Collection Launch"
                    class="img-fluid rounded-start h-100"
                  />
                </div>
                <div class="col-md-7">
                  <div class="card-body">
                    <span class="event-date">15 Maret 2025</span>
                    <h3>Spring Collection Launch</h3>
                    <p class="event-description">
                      Peluncuran koleksi musim semi yang dihadiri oleh selebriti
                      dan influencer fashion terkemuka.
                    </p>
                    <div class="event-gallery">
                      <a href="#" class="gallery-link"
                        >Lihat Galeri <i class="fas fa-images"></i
                      ></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 mb-4">
            <div class="past-event-card">
              <div class="row g-0">
                <div class="col-md-5">
                  <img
                    src="<?php echo get_theme_uri('images/banner/Charity Fashion Gala.jpg'); ?>"
                    alt="Charity Fashion Gala"
                    class="img-fluid rounded-start h-100"
                  />
                </div>
                <div class="col-md-7">
                  <div class="card-body">
                    <span class="event-date">28 Februari 2025</span>
                    <h3>Charity Fashion Gala</h3>
                    <p class="event-description">
                      Acara amal yang menggabungkan fashion dan kepedulian
                      sosial, dengan hasil penjualan disumbangkan untuk
                      pendidikan.
                    </p>
                    <div class="event-gallery">
                      <a href="#" class="gallery-link"
                        >Lihat Galeri <i class="fas fa-images"></i
                      ></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 mb-4">
            <div class="past-event-card">
              <div class="row g-0">
                <div class="col-md-5">
                  <img
                    src="<?php echo get_theme_uri('images/banner/Pop-Up Store.jpg'); ?>"
                    alt="Pop-Up Store"
                    class="img-fluid rounded-start h-100"
                  />
                </div>
                <div class="col-md-7">
                  <div class="card-body">
                    <span class="event-date">10-15 Januari 2025</span>
                    <h3>Pop-Up Store Experience</h3>
                    <p class="event-description">
                      Toko pop-up eksklusif di Bali yang menampilkan koleksi
                      resort wear terbaru kami.
                    </p>
                    <div class="event-gallery">
                      <a href="#" class="gallery-link"
                        >Lihat Galeri <i class="fas fa-images"></i
                      ></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 mb-4">
            <div class="past-event-card">
              <div class="row g-0">
                <div class="col-md-5">
                  <img
                    src="<?php echo get_theme_uri('images/banner/Fashion Talk Show.jpg'); ?>"
                    alt="Fashion Talk Show"
                    class="img-fluid rounded-start h-100"
                  />
                </div>
                <div class="col-md-7">
                  <div class="card-body">
                    <span class="event-date">5 Desember 2024</span>
                    <h3>Fashion Talk Show</h3>
                    <p class="event-description">
                      Diskusi interaktif dengan desainer dan ahli fashion
                      tentang tren fashion tahun 2025.
                    </p>
                    <div class="event-gallery">
                      <a href="#" class="gallery-link"
                        >Lihat Galeri <i class="fas fa-images"></i
                      ></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="event-registration">
      <div class="container">
        <div class="registration-content">
          <h2>Dapatkan Undangan Event Eksklusif</h2>
          <p>
            Daftar untuk mendapatkan informasi terbaru dan undangan eksklusif ke
            acara-acara PRESTIGE
          </p>
          <form>
            <div class="row">
              <div class="col-md-4 mb-3">
                <input
                  type="text"
                  class="form-control"
                  placeholder="Nama Lengkap"
                  required
                />
              </div>
              <div class="col-md-4 mb-3">
                <input
                  type="email"
                  class="form-control"
                  placeholder="Email"
                  required
                />
              </div>
              <div class="col-md-4 mb-3">
                <button type="submit" class="btn w-100">Daftar Sekarang</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </section>
