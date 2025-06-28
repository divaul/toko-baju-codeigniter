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

/* ======= STYLE INTRO ======= */
.style-intro {
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

/* ======= STYLE CATEGORIES ======= */
.style-categories {
    padding: 80px 0;
    background-color: #f9f9f9;
}

.category-card {
    background-color: #fff;
    border-radius: 8px;
    overflow: hidden;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
    height: 100%;
    transition: all 0.3s ease;
}

.category-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
}

.category-image {
    position: relative;
    height: 200px;
}

.category-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.category-badge {
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

.category-info {
    padding: 20px;
    text-align: center;
}

.category-info p {
    margin-bottom: 20px;
    font-size: 0.95rem;
    line-height: 1.6;
}

/* ======= IMPROVED STYLE GUIDES ACCORDION ======= */
.style-guides {
    padding: 80px 0;
    background-color: #fff;
}

.style-guides:nth-child(odd) {
    background-color: #f9f9f9;
}

.accordion {
    --bs-accordion-border-radius: 8px;
    --bs-accordion-inner-border-radius: 8px;
    --bs-accordion-btn-padding-x: 20px;
    --bs-accordion-btn-padding-y: 20px;
    --bs-accordion-body-padding-x: 30px;
    --bs-accordion-body-padding-y: 30px;
    --bs-accordion-active-color: #fff;
    --bs-accordion-active-bg: #a67c52;
    --bs-accordion-btn-focus-box-shadow: 0 0 0 0.25rem rgba(166, 124, 82, 0.25);
}

.accordion-item {
    border: none;
    margin-bottom: 15px;
    border-radius: 8px;
    overflow: hidden;
    box-shadow: 0 3px 10px rgba(0, 0, 0, 0.05);
    background-color: #fff;
}

.accordion-button {
    font-family: 'Playfair Display', Georgia, 'Times New Roman', serif;
    font-weight: 600;
    font-size: 1.2rem;
    color: #333;
    background-color: #fff;
    transition: all 0.3s ease;
}

.accordion-button:not(.collapsed) {
    color: #fff;
    background-color: #a67c52;
    box-shadow: none;
}

.accordion-button:focus {
    box-shadow: none;
    border-color: transparent;
}

.accordion-button::after {
    background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23a67c52'%3e%3cpath fill-rule='evenodd' d='M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z'/%3e%3c/svg%3e");
    transition: transform 0.3s ease, background-image 0.3s ease;
}

.accordion-button:not(.collapsed)::after {
    background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23fff'%3e%3cpath fill-rule='evenodd' d='M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z'/%3e%3c/svg%3e");
}

.accordion-button i {
    margin-right: 10px;
    font-size: 1.1rem;
    transition: color 0.3s ease;
}

.accordion-button:not(.collapsed) i {
    color: #fff;
}

.accordion-body {
    padding: 30px;
    background-color: #fff;
}

.accordion-body h4 {
    font-size: 1.5rem;
    margin-bottom: 20px;
    color: #333;
}

.accordion-body p {
    margin-bottom: 20px;
    line-height: 1.7;
}

.style-tips {
    margin-bottom: 0;
}

.style-tips li {
    margin-bottom: 15px;
    position: relative;
    padding-left: 0;
    display: flex;
    align-items: flex-start;
}

.tip-badge {
    display: inline-block;
    background-color: #a67c52;
    color: #fff;
    padding: 3px 10px;
    border-radius: 20px;
    font-size: 0.8rem;
    font-weight: 600;
    margin-right: 10px;
    flex-shrink: 0;
}

/* ======= STYLE ESSENTIALS ======= */
.style-essentials {
    padding: 80px 0;
    background-color: #f9f9f9;
}

.essentials-card {
    background-color: #fff;
    border-radius: 8px;
    padding: 30px;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
    height: 100%;
}

.essentials-card h3 {
    font-size: 1.5rem;
    margin-bottom: 20px;
    color: #333;
    display: flex;
    align-items: center;
}

.essentials-card h3 i {
    margin-right: 10px;
    color: #a67c52;
}

.essentials-list li {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 12px 0;
    border-bottom: 1px solid #eee;
}

.item-name {
    font-weight: 500;
}

.item-badge {
    display: inline-block;
    background-color: #f0f0f0;
    color: #333;
    padding: 3px 10px;
    border-radius: 20px;
    font-size: 0.8rem;
    font-weight: 600;
}

.item-badge[data-type="must-have"] {
    background-color: #a67c52;
    color: #fff;
}

/* ======= STYLE CONSULTATION ======= */
.style-consultation {
    padding: 60px 0;
    background-color: #a67c52;
    color: #fff;
}

.consultation-content {
    text-align: center;
    max-width: 800px;
    margin: 0 auto;
}

.consultation-content h2 {
    margin-bottom: 15px;
    color: #fff;
    font-size: 2.2rem;
}

.consultation-content p {
    margin-bottom: 30px;
    font-size: 1.1rem;
}

.consultation-content .btn {
    background-color: #fff;
    color: #a67c52;
}

.consultation-content .btn:hover {
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
    .style-intro .row {
        margin-left: -10px;
        margin-right: -10px;
    }
    
    .style-intro [class*="col-"] {
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
    
    .accordion-body .row {
        flex-direction: column;
    }
    
    .accordion-body .col-md-4 {
        margin-top: 30px;
        text-align: center;
    }
    
    .accordion-body .col-md-4 img {
        max-width: 300px;
        margin: 0 auto;
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
    
    .style-intro {
        padding: 50px 0;
    }
    
    .style-categories, .style-guides, .style-essentials {
        padding: 50px 0;
    }
    
    .accordion-button {
        font-size: 1rem;
        padding: 15px;
    }
    
    .accordion-body {
        padding: 20px;
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
    
    .essentials-card {
        margin-bottom: 30px;
    }
}
</style>

<!-- The HTML content remains exactly the same as provided -->
<section class="page-header">
    <div class="container">
        <h2>Style Guide PRESTIGE</h2>
        <p>Tips dan panduan berpakaian untuk berbagai kesempatan</p>
    </div>
</section>

<section class="style-intro">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="intro-content">
                    <h3>Panduan Gaya Berpakaian</h3>
                    <p>Selamat datang di Style Guide PRESTIGE, panduan lengkap untuk membantu Anda menemukan gaya berpakaian yang sesuai dengan kepribadian dan berbagai kesempatan. Kami percaya bahwa fashion adalah bentuk ekspresi diri, dan dengan panduan ini, kami ingin membantu Anda menemukan gaya yang paling mencerminkan siapa Anda.</p>
                    <p>Dari acara formal hingga casual, dari kantor hingga liburan, temukan tips dan inspirasi untuk tampil terbaik di setiap kesempatan.</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="intro-image">
                    <img src="<?php echo get_theme_uri('images/banner/Style Guide.jpg'); ?>" alt="Style Guide" class="img-fluid rounded">
                </div>
            </div>
        </div>
    </div>
</section>

<section class="style-categories">
    <div class="container">
        <h2 class="section-title">Kategori Gaya</h2>
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="category-card">
                    <div class="category-image">
                        <img src="<?php echo get_theme_uri('images/banner/Formal.jpg'); ?>" alt="Formal Style">
                        <span class="category-badge">Formal</span>
                    </div>
                    <div class="category-info">
                        <p>Panduan lengkap untuk acara formal, kantor, dan pertemuan bisnis</p>
                        <a href="#formal" class="btn-small">Lihat Tips</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="category-card">
                    <div class="category-image">
                        <img src="<?php echo get_theme_uri('images/banner/Casual Style.jpg'); ?>" alt="Casual Style">
                        <span class="category-badge">Casual</span>
                    </div>
                    <div class="category-info">
                        <p>Tips untuk gaya santai namun tetap stylish untuk aktivitas sehari-hari</p>
                        <a href="#casual" class="btn-small">Lihat Tips</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="category-card">
                    <div class="category-image">
                        <img src="<?php echo get_theme_uri('images/banner/Special Occasion Style.jpg'); ?>" alt="Special Occasion Style">
                        <span class="category-badge">Special Occasion</span>
                    </div>
                    <div class="category-info">
                        <p>Panduan berpakaian untuk acara spesial seperti pesta dan pernikahan</p>
                        <a href="#special" class="btn-small">Lihat Tips</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="style-guides" id="formal">
    <div class="container">
        <h2 class="section-title">Gaya Formal</h2>
        
        <div class="accordion" id="formalAccordion">
            <div class="accordion-item">
                <h2 class="accordion-header" id="formalHeading1">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#formalCollapse1" aria-expanded="true" aria-controls="formalCollapse1">
                        <i class="fas fa-briefcase"></i> Pakaian Kantor untuk Pria
                    </button>
                </h2>
                <div id="formalCollapse1" class="accordion-collapse collapse show" aria-labelledby="formalHeading1" data-bs-parent="#formalAccordion">
                    <div class="accordion-body">
                        <div class="row">
                            <div class="col-md-8">
                                <h4>Panduan Dasar Pakaian Kantor Pria</h4>
                                <p>Berpakaian untuk lingkungan kantor memerlukan keseimbangan antara profesionalisme dan kenyamanan. Berikut adalah beberapa panduan dasar:</p>
                                <ul class="style-tips">
                                    <li><span class="tip-badge">Tip 1</span> Pilih jas dengan warna netral seperti navy, abu-abu, atau hitam untuk fleksibilitas maksimal</li>
                                    <li><span class="tip-badge">Tip 2</span> Pastikan kemeja pas di badan, tidak terlalu longgar atau terlalu ketat</li>
                                    <li><span class="tip-badge">Tip 3</span> Investasikan pada sepatu kulit berkualitas yang dapat bertahan lama</li>
                                    <li><span class="tip-badge">Tip 4</span> Pilih dasi dengan warna atau pola yang melengkapi kemeja, bukan bersaing dengannya</li>
                                    <li><span class="tip-badge">Tip 5</span> Untuk lingkungan kantor yang lebih santai, blazer dengan celana chino adalah pilihan yang baik</li>
                                </ul>
                            </div>
                            <div class="col-md-4">
                                <img src="<?php echo get_theme_uri('images/banner/Office Attire Men.jpg'); ?>" alt="Office Attire Men" class="img-fluid rounded">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="accordion-item">
                <h2 class="accordion-header" id="formalHeading2">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#formalCollapse2" aria-expanded="false" aria-controls="formalCollapse2">
                        <i class="fas fa-female"></i> Pakaian Kantor untuk Wanita
                    </button>
                </h2>
                <div id="formalCollapse2" class="accordion-collapse collapse" aria-labelledby="formalHeading2" data-bs-parent="#formalAccordion">
                    <div class="accordion-body">
                        <div class="row">
                            <div class="col-md-8">
                                <h4>Panduan Dasar Pakaian Kantor Wanita</h4>
                                <p>Berpakaian profesional untuk wanita menawarkan banyak pilihan yang dapat disesuaikan dengan gaya pribadi. Berikut beberapa tips:</p>
                                <ul class="style-tips">
                                    <li><span class="tip-badge">Tip 1</span> Blazer adalah investasi yang bagus, pilih potongan yang pas dan warna netral</li>
                                    <li><span class="tip-badge">Tip 2</span> Dress midi dengan potongan sederhana sangat serbaguna untuk lingkungan kantor</li>
                                    <li><span class="tip-badge">Tip 3</span> Blus dengan bahan berkualitas dapat dipadukan dengan rok pensil atau celana formal</li>
                                    <li><span class="tip-badge">Tip 4</span> Sepatu dengan hak 2-3 inci ideal untuk kenyamanan sepanjang hari</li>
                                    <li><span class="tip-badge">Tip 5</span> Aksesori minimal namun berkualitas dapat meningkatkan tampilan profesional</li>
                                </ul>
                            </div>
                            <div class="col-md-4">
                                <img src="<?php echo get_theme_uri('images/banner/Office Attire Women.jpg'); ?>" alt="Office Attire Women" class="img-fluid rounded">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="accordion-item">
                <h2 class="accordion-header" id="formalHeading3">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#formalCollapse3" aria-expanded="false" aria-controls="formalCollapse3">
                        <i class="fas fa-handshake"></i> Pakaian untuk Pertemuan Bisnis
                    </button>
                </h2>
                <div id="formalCollapse3" class="accordion-collapse collapse" aria-labelledby="formalHeading3" data-bs-parent="#formalAccordion">
                    <div class="accordion-body">
                        <div class="row">
                            <div class="col-md-8">
                                <h4>Panduan Berpakaian untuk Pertemuan Bisnis Penting</h4>
                                <p>Pertemuan bisnis penting memerlukan tampilan yang lebih formal dan terperinci. Berikut beberapa tips:</p>
                                <ul class="style-tips">
                                    <li><span class="tip-badge">Tip 1</span> Pilih setelan formal lengkap dengan warna solid untuk kesan yang kuat</li>
                                    <li><span class="tip-badge">Tip 2</span> Pastikan pakaian Anda bersih, rapi, dan bebas dari kerutan</li>
                                    <li><span class="tip-badge">Tip 3</span> Detail kecil seperti manset dan dasi dapat membuat perbedaan besar</li>
                                    <li><span class="tip-badge">Tip 4</span> Tas atau briefcase berkualitas menunjukkan profesionalisme</li>
                                    <li><span class="tip-badge">Tip 5</span> Hindari parfum yang terlalu kuat atau aksesori yang terlalu mencolok</li>
                                </ul>
                            </div>
                            <div class="col-md-4">
                                <img src="<?php echo get_theme_uri('images/banner/Business Meeting.jpg'); ?>" alt="Business Meeting" class="img-fluid rounded">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="style-guides" id="casual">
    <div class="container">
        <h2 class="section-title">Gaya Casual</h2>
        
        <div class="accordion" id="casualAccordion">
            <div class="accordion-item">
                <h2 class="accordion-header" id="casualHeading1">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#casualCollapse1" aria-expanded="true" aria-controls="casualCollapse1">
                        <i class="fas fa-coffee"></i> Smart Casual untuk Sehari-hari
                    </button>
                </h2>
                <div id="casualCollapse1" class="accordion-collapse collapse show" aria-labelledby="casualHeading1" data-bs-parent="#casualAccordion">
                    <div class="accordion-body">
                        <div class="row">
                            <div class="col-md-8">
                                <h4>Panduan Smart Casual yang Stylish</h4>
                                <p>Smart casual adalah keseimbangan sempurna antara kenyamanan dan gaya. Berikut beberapa tips untuk tampilan smart casual yang effortless:</p>
                                <ul class="style-tips">
                                    <li><span class="tip-badge">Tip 1</span> Padukan jeans berkualitas dengan kemeja button-down untuk tampilan yang rapi namun santai</li>
                                    <li><span class="tip-badge">Tip 2</span> Sweater rajut dengan celana chino adalah kombinasi klasik untuk musim dingin</li>
                                    <li><span class="tip-badge">Tip 3</span> Sepatu loafer atau sneakers premium dapat melengkapi tampilan smart casual</li>
                                    <li><span class="tip-badge">Tip 4</span> Untuk wanita, dress casual dengan cardigan adalah pilihan yang mudah dan stylish</li>
                                    <li><span class="tip-badge">Tip 5</span> Aksesori sederhana seperti jam tangan atau kalung tipis dapat meningkatkan tampilan</li>
                                </ul>
                            </div>
                            <div class="col-md-4">
                                <img src="<?php echo get_theme_uri('images/banner/Smart Casual.jpg'); ?>" alt="Smart Casual" class="img-fluid rounded">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="accordion-item">
                <h2 class="accordion-header" id="casualHeading2">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#casualCollapse2" aria-expanded="false" aria-controls="casualCollapse2">
                        <i class="fas fa-utensils"></i> Casual untuk Brunch & Hangout
                    </button>
                </h2>
                <div id="casualCollapse2" class="accordion-collapse collapse" aria-labelledby="casualHeading2" data-bs-parent="#casualAccordion">
                    <div class="accordion-body">
                        <div class="row">
                            <div class="col-md-8">
                                <h4>Panduan Casual untuk Brunch dan Hangout</h4>
                                <p>Acara brunch atau hangout dengan teman memerlukan tampilan yang santai namun tetap stylish. Berikut beberapa tips:</p>
                                <ul class="style-tips">
                                    <li><span class="tip-badge">Tip 1</span> T-shirt berkualitas dengan jeans adalah dasar yang sempurna untuk tampilan casual</li>
                                    <li><span class="tip-badge">Tip 2</span> Tambahkan jaket denim atau kemeja flannel untuk lapisan tambahan</li>
                                    <li><span class="tip-badge">Tip 3</span> Sneakers bersih dan nyaman adalah pilihan alas kaki yang ideal</li>
                                    <li><span class="tip-badge">Tip 4</span> Untuk wanita, jumpsuit atau dress casual adalah pilihan yang mudah dan stylish</li>
                                    <li><span class="tip-badge">Tip 5</span> Tas crossbody atau tote bag praktis untuk membawa barang-barang penting</li>
                                </ul>
                            </div>
                            <div class="col-md-4">
                                <img src="<?php echo get_theme_uri('images/banner/Brunch Casual.jpg'); ?>" alt="Brunch Casual" class="img-fluid rounded">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="accordion-item">
                <h2 class="accordion-header" id="casualHeading3">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#casualCollapse3" aria-expanded="false" aria-controls="casualCollapse3">
                        <i class="fas fa-plane"></i> Travel Style
                    </button>
                </h2>
                <div id="casualCollapse3" class="accordion-collapse collapse" aria-labelledby="casualHeading3" data-bs-parent="#casualAccordion">
                    <div class="accordion-body">
                        <div class="row">
                            <div class="col-md-8">
                                <h4>Panduan Berpakaian untuk Traveling</h4>
                                <p>Berpakaian untuk perjalanan memerlukan keseimbangan antara kenyamanan dan gaya. Berikut beberapa tips:</p>
                                <ul class="style-tips">
                                    <li><span class="tip-badge">Tip 1</span> Pilih pakaian berbahan nyaman dan stretch yang tidak mudah kusut</li>
                                    <li><span class="tip-badge">Tip 2</span> Teknik layer adalah kunci untuk beradaptasi dengan perubahan suhu</li>
                                    <li><span class="tip-badge">Tip 3</span> Sepatu slip-on praktis untuk pemeriksaan keamanan bandara</li>
                                    <li><span class="tip-badge">Tip 4</span> Scarf multifungsi dapat digunakan sebagai selimut, penutup mata, atau aksesori</li>
                                    <li><span class="tip-badge">Tip 5</span> Tas dengan banyak kompartemen memudahkan akses ke barang-barang penting</li>
                                </ul>
                            </div>
                            <div class="col-md-4">
                                <img src="<?php echo get_theme_uri('images/banner/Travel Style.jpg'); ?>" alt="Travel Style" class="img-fluid rounded">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="style-guides" id="special">
    <div class="container">
        <h2 class="section-title">Gaya untuk Acara Spesial</h2>
        
        <div class="accordion" id="specialAccordion">
            <div class="accordion-item">
                <h2 class="accordion-header" id="specialHeading1">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#specialCollapse1" aria-expanded="true" aria-controls="specialCollapse1">
                        <i class="fas fa-glass-cheers"></i> Cocktail & Evening Party
                    </button>
                </h2>
                <div id="specialCollapse1" class="accordion-collapse collapse show" aria-labelledby="specialHeading1" data-bs-parent="#specialAccordion">
                    <div class="accordion-body">
                        <div class="row">
                            <div class="col-md-8">
                                <h4>Panduan Berpakaian untuk Pesta Cocktail</h4>
                                <p>Pesta cocktail memerlukan tampilan yang elegan namun tidak terlalu formal. Berikut beberapa tips:</p>
                                <ul class="style-tips">
                                    <li><span class="tip-badge">Tip 1</span> Untuk wanita, little black dress (LBD) adalah pilihan klasik yang selalu tepat</li>
                                    <li><span class="tip-badge">Tip 2</span> Untuk pria, blazer dengan kemeja dan celana formal adalah kombinasi yang ideal</li>
                                    <li><span class="tip-badge">Tip 3</span> Aksesori statement seperti kalung atau dasi dapat menjadi focal point</li>
                                    <li><span class="tip-badge">Tip 4</span> Sepatu hak tinggi atau oxford yang mengkilap melengkapi tampilan formal</li>
                                    <li><span class="tip-badge">Tip 5</span> Clutch kecil atau dompet slim lebih sesuai daripada tas besar</li>
                                </ul>
                            </div>
                            <div class="col-md-4">
                                <img src="<?php echo get_theme_uri('images/banner/Cocktail Party.jpg'); ?>" alt="Cocktail Party" class="img-fluid rounded">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="accordion-item">
                <h2 class="accordion-header" id="specialHeading2">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#specialCollapse2" aria-expanded="false" aria-controls="specialCollapse2">
                        <i class="fas fa-ring"></i> Wedding Guest
                    </button>
                </h2>
                <div id="specialCollapse2" class="accordion-collapse collapse" aria-labelledby="specialHeading2" data-bs-parent="#specialAccordion">
                    <div class="accordion-body">
                        <div class="row">
                            <div class="col-md-8">
                                <h4>Panduan Berpakaian untuk Tamu Pernikahan</h4>
                                <p>Berpakaian untuk pernikahan memerlukan pertimbangan terhadap waktu, lokasi, dan tema acara. Berikut beberapa tips:</p>
                                <ul class="style-tips">
                                    <li><span class="tip-badge">Tip 1</span> Perhatikan dress code yang tertera pada undangan</li>
                                    <li><span class="tip-badge">Tip 2</span> Untuk pernikahan siang, pilih warna pastel atau cerah; untuk malam, warna gelap lebih sesuai</li>
                                    <li><span class="tip-badge">Tip 3</span> Hindari warna putih atau terlalu mencolok yang dapat mengalihkan perhatian dari pengantin</li>
                                    <li><span class="tip-badge">Tip 4</span> Untuk pria, jas dengan dasi atau bow tie adalah pilihan aman</li>
                                    <li><span class="tip-badge">Tip 5</span> Untuk wanita, dress midi atau maxi dengan aksesori elegan sangat sesuai</li>
                                </ul>
                            </div>
                            <div class="col-md-4">
                                <img src="<?php echo get_theme_uri('images/banner/Wedding Guest.jpg'); ?>" alt="Wedding Guest" class="img-fluid rounded">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="accordion-item">
                <h2 class="accordion-header" id="specialHeading3">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#specialCollapse3" aria-expanded="false" aria-controls="specialCollapse3">
                        <i class="fas fa-calendar-day"></i> Gala & Formal Events
                    </button>
                </h2>
                <div id="specialCollapse3" class="accordion-collapse collapse" aria-labelledby="specialHeading3" data-bs-parent="#specialAccordion">
                    <div class="accordion-body">
                        <div class="row">
                            <div class="col-md-8">
                                <h4>Panduan Berpakaian untuk Acara Gala Formal</h4>
                                <p>Acara gala dan formal memerlukan tampilan yang paling elegan. Berikut beberapa tips:</p>
                                <ul class="style-tips">
                                    <li><span class="tip-badge">Tip 1</span> Untuk pria, tuxedo atau jas formal dengan dasi hitam adalah standar</li>
                                    <li><span class="tip-badge">Tip 2</span> Untuk wanita, gaun panjang atau gaun cocktail mewah sangat sesuai</li>
                                    <li><span class="tip-badge">Tip 3</span> Perhiasan statement dapat meningkatkan tampilan formal</li>
                                    <li><span class="tip-badge">Tip 4</span> Sepatu formal yang nyaman penting untuk acara yang berlangsung lama</li>
                                    <li><span class="tip-badge">Tip 5</span> Clutch kecil dengan detail mewah melengkapi tampilan formal</li>
                                </ul>
                            </div>
                            <div class="col-md-4">
                                <img src="<?php echo get_theme_uri('images/banner/Charity Fashion Gala.jpg'); ?>" alt="Gala Event" class="img-fluid rounded">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="style-essentials">
    <div class="container">
        <h2 class="section-title">Item Esensial untuk Setiap Lemari Pakaian</h2>
        <div class="row">
            <div class="col-md-6">
                <div class="essentials-card">
                    <h3><i class="fas fa-male"></i> Untuk Pria</h3>
                    <ul class="essentials-list">
                        <li>
                            <span class="item-name">Kemeja Putih Klasik</span>
                            <span class="item-badge" data-type="must-have">Must Have</span>
                        </li>
                        <li>
                            <span class="item-name">Blazer Navy</span>
                            <span class="item-badge" data-type="must-have">Must Have</span>
                        </li>
                        <li>
                            <span class="item-name">Celana Chino Beige</span>
                            <span class="item-badge" data-type="must-have">Must Have</span>
                        </li>
                        <li>
                            <span class="item-name">Jeans Dark Wash</span>
                            <span class="item-badge" data-type="must-have">Must Have</span>
                        </li>
                        <li>
                            <span class="item-name">Sepatu Oxford Hitam</span>
                            <span class="item-badge" data-type="must-have">Must Have</span>
                        </li>
                        <li>
                            <span class="item-name">Sneakers Putih</span>
                            <span class="item-badge" data-type="must-have">Must Have</span>
                        </li>
                        <li>
                            <span class="item-name">Sweater V-neck</span>
                            <span class="item-badge">Versatile</span>
                        </li>
                        <li>
                            <span class="item-name">Jaket Kulit</span>
                            <span class="item-badge">Statement</span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6">
                <div class="essentials-card">
                    <h3><i class="fas fa-female"></i> Untuk Wanita</h3>
                    <ul class="essentials-list">
                        <li>
                            <span class="item-name">Little Black Dress</span>
                            <span class="item-badge" data-type="must-have">Must Have</span>
                        </li>
                        <li>
                            <span class="item-name">Blazer Tailored</span>
                            <span class="item-badge" data-type="must-have">Must Have</span>
                        </li>
                        <li>
                            <span class="item-name">Blus Putih</span>
                            <span class="item-badge" data-type="must-have">Must Have</span>
                        </li>
                        <li>
                            <span class="item-name">Jeans High-Waisted</span>
                            <span class="item-badge" data-type="must-have">Must Have</span>
                        </li>
                        <li>
                            <span class="item-name">Rok Pensil</span>
                            <span class="item-badge" data-type="must-have">Must Have</span>
                        </li>
                        <li>
                            <span class="item-name">Pumps Hitam</span>
                            <span class="item-badge" data-type="must-have">Must Have</span>
                        </li>
                        <li>
                            <span class="item-name">Ankle Boots</span>
                            <span class="item-badge">Versatile</span>
                        </li>
                        <li>
                            <span class="item-name">Trench Coat</span>
                            <span class="item-badge">Statement</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="style-consultation">
    <div class="container">
        <div class="consultation-content">
            <h2>Butuh Bantuan Personal?</h2>
            <p>Konsultasikan gaya Anda dengan stylist profesional kami untuk mendapatkan rekomendasi yang disesuaikan dengan kebutuhan dan preferensi Anda.</p>
            <a href="#" class="btn">Jadwalkan Konsultasi</a>
        </div>
    </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
