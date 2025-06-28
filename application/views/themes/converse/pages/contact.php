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

/* ======= CONTACT INFO SECTION ======= */
.contact-info {
    padding: 60px 0;
    background-color: white;
}

.contact-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 30px;
}

.contact-card {
    padding: 30px;
    text-align: center;
    background-color: #f9f9f9;
    border-radius: 8px;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
    transition: all 0.3s ease;
}

.contact-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
}

.contact-icon {
    width: 70px;
    height: 70px;
    margin: 0 auto 20px;
    background-color: #f5f5f5;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
}

.contact-icon i {
    font-size: 2rem;
    color: #a67c52;
}

.contact-card h3 {
    font-size: 1.3rem;
    margin-bottom: 15px;
    color: #333;
}

.contact-card p {
    color: #666;
    margin-bottom: 10px;
}

/* ======= CONTACT FORM SECTION ======= */
.contact-form-section {
    padding: 80px 0;
    background-color: #f9f9f9;
}

.contact-content {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 40px;
}

.contact-form-container {
    background-color: white;
    padding: 40px;
    border-radius: 8px;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
}

.contact-form-container h2 {
    font-size: 1.8rem;
    margin-bottom: 10px;
    color: #333;
}

.contact-form-container p {
    color: #666;
    margin-bottom: 30px;
}

.contact-form {
    display: flex;
    flex-direction: column;
}

.form-row {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 20px;
    margin-bottom: 20px;
}

.form-group {
    margin-bottom: 20px;
}

.form-group label {
    display: block;
    margin-bottom: 8px;
    font-weight: 500;
    color: #333;
}

.form-group input,
.form-group select,
.form-group textarea {
    width: 100%;
    padding: 12px 15px;
    border: 1px solid #ddd;
    border-radius: 4px;
    font-size: 1rem;
    transition: border-color 0.3s ease;
}

.form-group input:focus,
.form-group select:focus,
.form-group textarea:focus {
    outline: none;
    border-color: #a67c52;
}

.form-group textarea {
    min-height: 150px;
    resize: vertical;
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

/* ======= CONTACT MAP ======= */
.contact-map {
    background-color: white;
    padding: 40px;
    border-radius: 8px;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
}

.contact-map h2 {
    font-size: 1.8rem;
    margin-bottom: 20px;
    color: #333;
}

.map-container {
    width: 100%;
    height: 300px;
    border-radius: 8px;
    overflow: hidden;
    margin-bottom: 30px;
}

.map-container img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.store-locations h3 {
    font-size: 1.3rem;
    margin-bottom: 20px;
    color: #333;
}

.location-tabs {
    display: flex;
    gap: 10px;
    margin-bottom: 20px;
    flex-wrap: wrap;
}

.location-tab {
    padding: 10px 20px;
    background-color: #f5f5f5;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-size: 0.9rem;
    font-weight: 500;
    transition: all 0.3s ease;
}

.location-tab:hover,
.location-tab.active {
    background-color: #a67c52;
    color: white;
}

.location-info {
    display: none;
}

.location-info.active {
    display: block;
    animation: fadeIn 0.5s ease;
}

.location-info p {
    margin-bottom: 10px;
    color: #666;
}

.location-info i {
    color: #a67c52;
    margin-right: 10px;
}

/* ======= FAQ SECTION ======= */
.faq {
    padding: 80px 0;
    background-color: white;
}

.faq-list {
    max-width: 800px;
    margin: 0 auto;
}

.faq-item {
    margin-bottom: 20px;
    border: 1px solid #eee;
    border-radius: 8px;
    overflow: hidden;
}

.faq-question {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 20px;
    background-color: #f9f9f9;
    cursor: pointer;
    transition: all 0.3s ease;
}

.faq-question:hover {
    background-color: #f5f5f5;
}

.faq-question h3 {
    font-size: 1.1rem;
    margin-bottom: 0;
    color: #333;
}

.toggle-icon {
    color: #a67c52;
    transition: all 0.3s ease;
}

.faq-item.active .toggle-icon {
    transform: rotate(45deg);
}

.faq-answer {
    padding: 0 20px;
    max-height: 0;
    overflow: hidden;
    transition: all 0.3s ease;
}

.faq-item.active .faq-answer {
    padding: 20px;
    max-height: 1000px;
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

.social-icons {
    display: flex;
    gap: 15px;
}

.social-icons a {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    width: 40px;
    height: 40px;
    background-color: rgba(255, 255, 255, 0.1);
    border-radius: 50%;
    color: #fff;
    transition: all 0.3s ease;
}

.social-icons a:hover {
    background-color: #a67c52;
    transform: translateY(-3px);
}

.social-icons.large {
    justify-content: center;
    margin-top: 20px;
}

.social-icons.large a {
    width: 60px;
    height: 60px;
    font-size: 1.5rem;
}


/* ======= ANIMATIONS ======= */
@keyframes fadeIn {
    from { opacity: 0; }
    to { opacity: 1; }
}

/* ======= RESPONSIVE DESIGN ======= */
@media (max-width: 992px) {
    .contact-grid {
        grid-template-columns: repeat(2, 1fr);
    }
    
    .contact-content {
        grid-template-columns: 1fr;
    }
    
    .contact-map {
        margin-top: 30px;
    }
    
    .footer-content {
        grid-template-columns: repeat(2, 1fr);
    }
}

@media (max-width: 768px) {
    .form-row {
        grid-template-columns: 1fr;
        gap: 0;
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
    .contact-grid {
        grid-template-columns: 1fr;
    }
    
    .location-tabs {
        flex-direction: column;
    }
    
    .contact-form-container,
    .contact-map {
        padding: 30px 20px;
    }
    
    .footer-content {
        grid-template-columns: 1fr;
    }
}
</style>
    <section class="page-header">
        <div class="container">
            <h2>Hubungi Kami</h2>
            <p>Kami siap membantu Anda</p>
        </div>
    </section>

    <section class="contact-info">
        <div class="container">
            <div class="contact-grid">
                <div class="contact-card">
                    <div class="contact-icon">
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <h3>Alamat</h3>
                    <p>Jl. Fashion No. 123</p>
                    <p>Jakarta Selatan, 12345</p>
                    <p>Indonesia</p>
                </div>
                
                <div class="contact-card">
                    <div class="contact-icon">
                        <i class="fas fa-phone"></i>
                    </div>
                    <h3>Telepon</h3>
                    <p>+62 123 4567 890</p>
                    <p>+62 123 8765 432</p>
                </div>
                
                <div class="contact-card">
                    <div class="contact-icon">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <h3>Email</h3>
                    <p>info@prestige.id</p>
                    <p>cs@prestige.id</p>
                </div>
                
                <div class="contact-card">
                    <div class="contact-icon">
                        <i class="fas fa-clock"></i>
                    </div>
                    <h3>Jam Operasional</h3>
                    <p>Senin - Jumat: 10:00 - 21:00</p>
                    <p>Sabtu - Minggu: 09:00 - 22:00</p>
                </div>
            </div>
        </div>
    </section>

    <section class="contact-form-section">
        <div class="container">
            <div class="contact-content">
                <div class="contact-form-container">
                    <h2>Kirim Pesan</h2>
                    <p>Ada pertanyaan atau kebutuhan khusus? Silakan isi form di bawah ini</p>
                    
                    <form class="contact-form">
                        <div class="form-row">
                            <div class="form-group">
                                <label for="name">Nama Lengkap</label>
                                <input type="text" id="name" name="name" placeholder="Masukkan nama lengkap Anda" required>
                            </div>
                            
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" id="email" name="email" placeholder="Masukkan email Anda" required>
                            </div>
                        </div>
                        
                        <div class="form-row">
                            <div class="form-group">
                                <label for="phone">Nomor Telepon</label>
                                <input type="tel" id="phone" name="phone" placeholder="Masukkan nomor telepon Anda">
                            </div>
                            
                            <div class="form-group">
                                <label for="subject">Subjek</label>
                                <select id="subject" name="subject" required>
                                    <option value="" selected disabled>Pilih subjek</option>
                                    <option value="customer-service">Layanan Pelanggan</option>
                                    <option value="order">Pesanan</option>
                                    <option value="returns">Pengembalian</option>
                                    <option value="partnership">Kerjasama</option>
                                    <option value="other">Lainnya</option>
                                </select>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="message">Pesan</label>
                            <textarea id="message" name="message" rows="6" placeholder="Tulis pesan Anda di sini" required></textarea>
                        </div>
                        
                        <div class="form-group checkbox-group">
                            <input type="checkbox" id="newsletter" name="newsletter">
                            <label for="newsletter">Saya ingin berlangganan newsletter PRESTIGE</label>
                        </div>
                        
                        <button type="submit" class="btn btn-primary" style="background-color: #a67c52; border-color: #a67c52;">Kirim Pesan</button>
                    </form>
                </div>
                
                <div class="contact-map">
                    <h2>Lokasi Kami</h2>
                    <div class="map-container">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1443.9653239888107!2d106.80572139694415!3d-6.226205818720995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f6aad7283c4b%3A0x4efcd0d8d64cad53!2sGrandLucky%20-%20SCBD!5e1!3m2!1sid!2sid!4v1744963721632!5m2!1sid!2sid" width="450" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <div class="store-locations">
                        <h3>Toko Lainnya</h3>
                        <div class="location-tabs">
                            <button class="location-tab active">Jakarta</button>
                            <button class="location-tab">Bandung</button>
                            <button class="location-tab">Surabaya</button>
                            <button class="location-tab">Bali</button>
                        </div>
                        <div class="location-info active">
                            <p><i class="fas fa-map-marker-alt"></i> Jakarta Selatan: Jl. Fashion No. 123</p>
                            <p><i class="fas fa-map-marker-alt"></i> Jakarta Pusat: Grand Indonesia Lt. 2</p>
                            <p><i class="fas fa-map-marker-alt"></i> Jakarta Utara: Mall Kelapa Gading Lt. 3</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="faq">
        <div class="container">
            <h2 class="section-title">Pertanyaan yang Sering Diajukan</h2>
            <div class="faq-list">
                <div class="faq-item">
                    <div class="faq-question">
                        <h3>Bagaimana cara melakukan pemesanan online?</h3>
                        <span class="toggle-icon"><i class="fas fa-plus"></i></span>
                    </div>
                    <div class="faq-answer">
                        <p>Untuk melakukan pemesanan online, silakan pilih produk yang diinginkan, tambahkan ke keranjang, dan ikuti proses checkout. Anda perlu membuat akun atau masuk jika sudah memiliki akun untuk menyelesaikan pemesanan.</p>
                    </div>
                </div>
                
                <div class="faq-item">
                    <div class="faq-question">
                        <h3>Apa saja metode pembayaran yang tersedia?</h3>
                        <span class="toggle-icon"><i class="fas fa-plus"></i></span>
                    </div>
                    <div class="faq-answer">
                        <p>Kami menerima pembayaran melalui kartu kredit/debit, transfer bank, e-wallet (GoPay, OVO, Dana), dan pembayaran di tempat (COD) untuk wilayah tertentu.</p>
                    </div>
                </div>
                
                <div class="faq-item">
                    <div class="faq-question">
                        <h3>Berapa lama waktu pengiriman?</h3>
                        <span class="toggle-icon"><i class="fas fa-plus"></i></span>
                    </div>
                    <div class="faq-answer">
                        <p>Waktu pengiriman bervariasi tergantung lokasi Anda. Untuk wilayah Jabodetabek, pengiriman memakan waktu 1-2 hari kerja. Untuk wilayah lainnya di Indonesia, pengiriman memakan waktu 3-7 hari kerja.</p>
                    </div>
                </div>
                
                <div class="faq-item">
                    <div class="faq-question">
                        <h3>Bagaimana kebijakan pengembalian produk?</h3>
                        <span class="toggle-icon"><i class="fas fa-plus"></i></span>
                    </div>
                    <div class="faq-answer">
                        <p>Kami menerima pengembalian produk dalam 14 hari setelah penerimaan dengan syarat produk dalam kondisi asli, belum digunakan, dan dengan kemasan lengkap. Biaya pengiriman pengembalian ditanggung oleh pelanggan.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="cta">
        <div class="container">
            <div class="cta-content" >
                <h2 style="color: white;">Ikuti Kami di Media Sosial</h2>
                <p>Dapatkan inspirasi fashion dan informasi terbaru</p>
                <div class="social-icons large">
                    <a href="#"><i class="fab fa-facebook"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    
                    <a href="#"><i class="fab fa-youtube"></i></a>
                </div>
            </div>
        </div>
    </section>


