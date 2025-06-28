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

/* ======= ABOUT INTRO SECTION ======= */
.about-intro {
    padding: 80px 0;
}

.about-content {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 40px;
    align-items: center;
}

.about-image {
    border-radius: 8px;
    overflow: hidden;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
}

.about-text h2 {
    font-size: 2.5rem;
    margin-bottom: 20px;
    position: relative;
    padding-bottom: 15px;
}

.about-text h2:after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 0;
    width: 80px;
    height: 3px;
    background-color: #a67c52;
}

.about-text p {
    margin-bottom: 20px;
}

blockquote {
    font-style: italic;
    color: #555;
    border-left: 3px solid #a67c52;
    padding-left: 20px;
    margin: 25px 0;
}

cite {
    display: block;
    margin-top: 10px;
    font-style: normal;
    font-weight: 600;
    color: #333;
}

/* ======= VALUES SECTION ======= */
.values {
    padding: 80px 0;
    background-color: #f9f9f9;
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
    color: #777;
    margin-bottom: 3rem;
    font-size: 1.1rem;
}

.values-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 30px;
}

.value-box {
    text-align: center;
    padding: 40px 30px;
    background-color: white;
    border-radius: 8px;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
    transition: all 0.3s ease;
}

.value-box:hover {
    transform: translateY(-10px);
    box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
}

.value-box i {
    font-size: 3rem;
    color: #a67c52;
    margin-bottom: 20px;
}

.value-box h3 {
    font-size: 1.5rem;
    margin-bottom: 15px;
}

/* ======= TEAM SECTION ======= */
.team {
    padding: 80px 0;
}

.team-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 30px;
}

.team-member {
    text-align: center;
}

.member-image {
    border-radius: 8px;
    overflow: hidden;
    margin-bottom: 20px;
}

.team-member h3 {
    font-size: 1.3rem;
    margin-bottom: 5px;
}

.position {
    color: #a67c52;
    font-style: italic;
    margin-bottom: 15px;
}

.bio {
    margin-bottom: 15px;
    color: #666;
}

.social-icons {
    display: flex;
    justify-content: center;
    gap: 10px;
}

.social-icons a {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    width: 36px;
    height: 36px;
    background-color: #f5f5f5;
    border-radius: 50%;
    color: #777;
    transition: all 0.3s ease;
}

.social-icons a:hover {
    background-color: #a67c52;
    color: white;
}

/* ======= MILESTONES SECTION ======= */
.milestones {
    padding: 80px 0;
}

.timeline {
    position: relative;
    max-width: 800px;
    margin: 0 auto;
}

.timeline:before {
    content: '';
    position: absolute;
    top: 0;
    left: 50%;
    width: 2px;
    height: 100%;
    background-color: #a67c52;
    transform: translateX(-50%);
}

.timeline-item {
    display: flex;
    justify-content: space-between;
    margin-bottom: 40px;
    position: relative;
}

.year {
    width: 100px;
    height: 100px;
    background-color: #a67c52;
    color: white;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.5rem;
    font-weight: 600;
    z-index: 1;
}

.event {
    width: calc(50% - 70px);
    padding: 20px;
    background-color: white;
    border-radius: 8px;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
}

.timeline-item:nth-child(even) .event {
    margin-left: auto;
}

/* ======= TESTIMONIALS SECTION ======= */
.testimonials {
    padding: 80px 0;
    background-color: white;
}

.testimonial-slider {
    max-width: 800px;
    margin: 0 auto;
}

.testimonial-item {
    padding: 30px;
    background-color: #f9f9f9;
    border-radius: 8px;
    margin-bottom: 20px;
}

.testimonial-content p {
    font-style: italic;
    color: #555;
    margin-bottom: 20px;
}

.testimonial-author {
    display: flex;
    align-items: center;
    margin-top: 20px;
}

.testimonial-author img {
    width: 60px;
    height: 60px;
    border-radius: 50%;
    margin-right: 15px;
}

.author-info h4 {
    font-size: 1.1rem;
    margin-bottom: 5px;
}

.author-info p {
    color: #777;
    font-size: 0.9rem;
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

/* ======= FORM STYLES ======= */
.contact-form {
    display: flex;
    flex-direction: column;
}

.form-group {
    margin-bottom: 25px;
}

.form-group label {
    display: block;
    margin-bottom: 8px;
    font-weight: 600;
}

.form-control {
    width: 100%;
    padding: 12px 15px;
    border: 1px solid #ddd;
    border-radius: 4px;
    font-size: 1rem;
    transition: border-color 0.3s ease;
}

.form-control:focus {
    outline: none;
    border-color: #a67c52;
}

textarea.form-control {
    min-height: 150px;
    resize: vertical;
}

.form-row {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 20px;
}

.checkbox-group {
    display: flex;
    align-items: center;
    gap: 10px;
}

.checkbox-group input {
    width: auto;
}

.checkbox-group label {
    margin-bottom: 0;
    font-weight: normal;
}

/* ======= RESPONSIVE STYLES ======= */
@media (max-width: 1200px) {
    .values-grid,
    .team-grid {
        grid-template-columns: repeat(3, 1fr);
    }
    


}

@media (max-width: 992px) {
    .values-grid {
        grid-template-columns: repeat(2, 1fr);
    }
    
    .team-grid {
        grid-template-columns: repeat(2, 1fr);
    }
    
    .about-content {
        grid-template-columns: 1fr;
    }
    
    .timeline:before {
        left: 100px;
    }
    
    .timeline-item {
        flex-direction: column;
    }
    
    .year {
        margin-bottom: 20px;
    }
    
    .event {
        width: calc(100% - 120px);
        margin-left: 120px;
    }
    
    .timeline-item:nth-child(even) .event {
        margin-left: 120px;
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
    
    .values-grid,
    .team-grid {
        grid-template-columns: 1fr;
    }
    
    .form-row {
        grid-template-columns: 1fr;
    }
    
    .timeline:before {
        left: 50px;
    }
    
    .event {
        width: calc(100% - 70px);
        margin-left: 70px;
    }
    
    .timeline-item:nth-child(even) .event {
        margin-left: 70px;
    }
}


@media (max-width: 576px) {
   
}

</style>

    <section class="page-header">
        <div class="container">
            <h2>Tentang Kami</h2>
            <p>Kenali lebih dekat dengan PRESTIGE</p>
        </div>
    </section>

    <section class="about-intro">
        <div class="container">
            <div class="about-content">
                <div class="about-image">
                    <img src="<?php echo get_theme_uri('images/banner/PRESTIGE.jpeg'); ?>" alt="PRESTIGE Store">
                </div>
                <div class="about-text">
                    <h2>Cerita Kami</h2>
                    <p>PRESTIGE didirikan pada tahun 2015 dengan visi menyediakan fashion premium berkualitas tinggi yang terjangkau. Kami percaya bahwa setiap orang berhak tampil elegan dan berkelas tanpa harus mengeluarkan biaya yang berlebihan.</p>
                    <p>Dimulai dari toko kecil di sudut Jakarta, kini PRESTIGE telah berkembang menjadi salah satu toko fashion premium terkemuka di Indonesia dengan 15 cabang yang tersebar di kota-kota besar.</p>
                    <p>Komitmen kami pada kualitas, desain yang timeless, dan pelayanan prima menjadi kunci kesuksesan PRESTIGE hingga saat ini.</p>
                    <blockquote>
                        "Fashion bukanlah tentang label. Fashion adalah tentang sesuatu yang ada dalam diri Anda."
                        <cite> Founder PRESTIGE</cite>
                    </blockquote>
                </div>
            </div>
        </div>
    </section>

    <section class="values">
        <div class="container">
            <h2 class="section-title">Nilai-Nilai Kami</h2>
            <div class="values-grid">
                <div class="value-box">
                    <i class="fas fa-gem"></i>
                    <h3>Kualitas Premium</h3>
                    <p>Kami selektif dalam memilih material berkualitas terbaik untuk setiap produk kami.</p>
                </div>
                <div class="value-box">
                    <i class="fas fa-pencil-ruler"></i>
                    <h3>Desain Elegan</h3>
                    <p>Setiap desain kami dibuat dengan mempertimbangkan keseimbangan antara tren dan keabadian.</p>
                </div>
                <div class="value-box">
                    <i class="fas fa-hands-helping"></i>
                    <h3>Pelayanan Prima</h3>
                    <p>Kepuasan pelanggan adalah prioritas utama dalam setiap aspek bisnis kami.</p>
                </div>
                <div class="value-box">
                    <i class="fas fa-leaf"></i>
                    <h3>Keberlanjutan</h3>
                    <p>Kami berkomitmen untuk menerapkan praktik bisnis yang bertanggung jawab terhadap lingkungan.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="team">
        <div class="container">
            <h2 class="section-title">Tim Kami</h2>
            <p class="section-subtitle">Perkenalkan talenta-talenta hebat di balik PRESTIGE</p>
            
            <div class="team-grid">
                <div class="team-member">
                    <div class="member-image">
                        <img src="<?php echo get_theme_uri('images/banner/user1.png'); ?>" alt="Divaul">
                    </div>
                    <div class="member-info">
                        <h3>Divaul</h3>
                        <p class="position">kiper</p>
                        <p class="bio">Memiliki pengalaman -15 tahun di mana.</p>
                        <div class="social-icons">
                            <a href="#"><i class="fab fa-linkedin"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
                
                <div class="team-member">
                    <div class="member-image">
                        <img src="<?php echo get_theme_uri('images/banner/user2.png'); ?>" alt="agista">
                    </div>
                    <div class="member-info">
                        <h3>Agista</h3>
                        <p class="position">sayap kanan</p>
                        <p class="bio">Lulusan Institut wasit Paris dengan berbagai penghargaan desain.</p>
                        <div class="social-icons">
                            <a href="#"><i class="fab fa-linkedin"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
                
                <div class="team-member">
                    <div class="member-image">
                        <img src="<?php echo get_theme_uri('images/banner/user3.png'); ?>" alt="raya">
                    </div>
                    <div class="member-info">
                        <h3>raya</h3>
                        <p class="position">gelandang</p>
                        <p class="bio">Ahli strategi parkir bus dengan fokus pada bek lawan</p>
                        <div class="social-icons">
                            <a href="#"><i class="fab fa-linkedin"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
                
                
            </div>
        </div>
    </section>

    <section class="milestones">
        <div class="container">
            <h2 class="section-title">Perjalanan Kami</h2>
            <div class="timeline">
                <div class="timeline-item">
                    <div class="year">2015</div>
                    <div class="event">
                        <h3>PRESTIGE Didirikan</h3>
                        <p>Toko pertama dibuka di Jakarta Selatan dengan koleksi awal 50 item.</p>
                    </div>
                </div>
                
                <div class="timeline-item">
                    <div class="year">2017</div>
                    <div class="event">
                        <h3>Ekspansi Pertama</h3>
                        <p>Membuka 3 cabang baru di Jakarta dan Bandung.</p>
                    </div>
                </div>
                
                <div class="timeline-item">
                    <div class="year">2019</div>
                    <div class="event">
                        <h3>Peluncuran Website</h3>
                        <p>Memulai perjalanan e-commerce untuk menjangkau lebih banyak pelanggan.</p>
                    </div>
                </div>
                
                <div class="timeline-item">
                    <div class="year">2021</div>
                    <div class="event">
                        <h3>Penghargaan Fashion Retail</h3>
                        <p>Menerima penghargaan "Best Fashion Retail Experience" tingkat nasional.</p>
                    </div>
                </div>
                
                <div class="timeline-item">
                    <div class="year">2023</div>
                    <div class="event">
                        <h3>Kolaborasi Internasional</h3>
                        <p>Berkolaborasi dengan desainer internasional untuk koleksi eksklusif.</p>
                    </div>
                </div>
                
                <div class="timeline-item">
                    <div class="year">2015</div>
                    <div class="event">
                        <h3>Ekspansi Regional</h3>
                        <p>Membuka toko pertama di luar Indonesia: Singapura dan Malaysia.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="testimonials">
        <div class="container">
            <h2 class="section-title">Apa Kata Mereka</h2>
            <div class="testimonial-slider">
                <div class="testimonial-item">
                    <div class="testimonial-content">
                        <p>"PRESTIGE mengubah cara saya berpakaian. Kualitas produknya luar biasa dan desainnya selalu up-to-date namun tetap timeless."</p>
                            <div class="author-info">
                                <h4>Mira Lesmana</h4>
                                <p>Pelanggan Setia sejak Kemarin</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="testimonial-item">
                    <div class="testimonial-content">
                        <p>"Saya selalu mengandalkan PRESTIGE untuk kebutuhan formal saya. Harga yang ditawarkan sangat sepadan dengan kualitas yang didapatkan."</p>
                            <div class="author-info">
                                <h4>Ahmad Rizki</h4>
                                <p>Pelanggan Setia sejak Tadi Malam</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="cta">
        <div class="container">
            <div class="cta-content">
                <h2 style="color: white;">Menjadi Bagian dari PRESTIGE</h2>
                <p>Bergabunglah dengan komunitas fashion kami</p>
                <a href="kontak.html" class="btn btn-light">Hubungi Kami</a>
            </div>
        </div>
    </section>

    
    <script src="script/dropdown.js"></script>
