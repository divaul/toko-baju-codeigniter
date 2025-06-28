<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// Initialize variables with default values
$search = isset($search) ? $search : '';
$category = isset($category) ? $category : '';
$sort = isset($sort) ? $sort : 'name';
$page = isset($page) ? max(1, $page) : 1;
$totalPages = isset($totalPages) ? $totalPages : 1;
$categories = isset($categories) ? $categories : [];
$products = isset($products) ? $products : [];

// Konversi array produk menjadi objek untuk konsistensi
$products = array_map(function($item) {
    return (object) $item;
}, $products);
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

    /* ======= PRODUCT FILTERS ======= */
    .products-filters {
        background: #f8f9fa;
        padding: 20px 0;
        border-bottom: 1px solid #dee2e6;
    }

    .filter-row {
        display: flex;
        gap: 15px;
        align-items: center;
        flex-wrap: wrap;
    }

    /* ======= PRODUCT GRID ======= */
    .products-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
        gap: 30px;
        padding: 40px 0;
    }

    .product-card {
        background: white;
        border-radius: 8px;
        overflow: hidden;
        box-shadow: 0 5px 15px rgba(0,0,0,0.05);
        transition: all 0.3s ease;
    }

    .product-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 25px rgba(0,0,0,0.1);
    }

    .product-image {
        position: relative;
        height: 250px;
        overflow: hidden;
    }

    .product-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.8s ease;
    }

    .product-card:hover .product-image img {
        transform: scale(1.05);
    }

    .product-info {
        padding: 20px;
    }

    .product-category {
        color: #a67c52;
        font-size: 12px;
        text-transform: uppercase;
        letter-spacing: 1px;
        margin-bottom: 5px;
    }

    .product-name {
        font-size: 18px;
        font-weight: 600;
        margin-bottom: 10px;
        color: #333;
    }

    .product-price {
        font-size: 20px;
        font-weight: 700;
        color: #a67c52;
        margin-bottom: 10px;
    }

    .price-dc {
        text-decoration: line-through;
        color: #6c757d;
        font-size: 16px;
        font-weight: normal;
    }

    .price-sale {
        color: #a67c52;
        font-weight: 700;
    }

    .product-rating {
        display: flex;
        align-items: center;
        gap: 5px;
        margin-bottom: 15px;
    }

    .rating-stars {
        color: #ffc107;
    }

    .rating-count {
        color: #6c757d;
        font-size: 14px;
    }

    .product-actions {
        display: flex;
        gap: 10px;
    }

    .btn-detail {
        flex: 1;
        background: #a67c52;
        color: white;
        border: none;
        padding: 10px;
        border-radius: 4px;
        text-decoration: none;
        text-align: center;
        transition: background 0.3s ease;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }

    .btn-detail:hover {
        background: #8a6642;
        color: white;
    }

    /* ======= PAGINATION ======= */
    .pagination-wrapper {
        display: flex;
        justify-content: center;
        margin: 40px 0;
    }

    .pagination {
        display: flex;
        gap: 5px;
        list-style: none;
    }

    .page-item {
        display: inline-block;
    }

    .page-link {
        display: block;
        padding: 8px 16px;
        border: 1px solid #ddd;
        color: #333;
        border-radius: 4px;
        transition: all 0.3s ease;
        text-decoration: none;
    }

    .page-item.active .page-link {
        background-color: #a67c52;
        border-color: #a67c52;
        color: white;
    }

    .page-link:hover {
        background-color: #f5f5f5;
    }

    /* ======= NO PRODUCTS ======= */
    .no-products {
        text-align: center;
        padding: 60px 0;
        color: #6c757d;
    }

    /* ======= FORM ELEMENTS ======= */
    .form-control, .form-select {
        padding: 10px 15px;
        border: 1px solid #ddd;
        border-radius: 4px;
        font-size: 1rem;
        transition: all 0.3s ease;
    }

    .form-control:focus, .form-select:focus {
        outline: none;
        border-color: #a67c52;
        box-shadow: 0 0 0 2px rgba(166, 124, 82, 0.2);
    }

    .btn-primary {
        background-color: #a67c52;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 4px;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.3s ease;
    }

    .btn-primary:hover {
        background-color: #8a6642;
    }

    .flex-grow-1 {
        flex-grow: 1;
    }
</style>


<section class="page-header">
    <div class="container">
        <h2>Koleksi Produk PRESTIGE</h2>
        <p>Temukan fashion premium yang sesuai dengan gaya Anda</p>
    </div>
</section>

<section class="products-filters">
    <div class="container">
        <form method="GET" action="">
            <div class="filter-row">
                <div class="flex-grow-1">
                    <input type="text" name="search" class="form-control" placeholder="Cari produk..." value="<?php echo htmlspecialchars($search); ?>">
                </div>
                <select name="category" class="form-select" style="width: auto;">
                    <option value="">Semua Kategori</option>
                    <?php foreach ($categories as $cat): ?>
                        <option value="<?php echo htmlspecialchars($cat['id']); ?>" <?php echo $category == $cat['id'] ? 'selected' : ''; ?>>
                            <?php echo htmlspecialchars($cat['name']); ?>
                        </option>
                    <?php endforeach; ?>
                </select>
                <select name="sort" class="form-select" style="width: auto;">
                    <option value="name" <?php echo $sort === 'name' ? 'selected' : ''; ?>>Nama A-Z</option>
                    <option value="price_low" <?php echo $sort === 'price_low' ? 'selected' : ''; ?>>Harga Terendah</option>
                    <option value="price_high" <?php echo $sort === 'price_high' ? 'selected' : ''; ?>>Harga Tertinggi</option>
                    <option value="rating" <?php echo $sort === 'rating' ? 'selected' : ''; ?>>Rating Tertinggi</option>
                    <option value="newest" <?php echo $sort === 'newest' ? 'selected' : ''; ?>>Terbaru</option>
                </select>
                <button type="submit" class="btn btn-primary">
                    <i class="fas fa-search"></i> Cari
                </button>
            </div>
        </form>
    </div>
</section>

<section class="products-section">
    <div class="container">
        <?php if (empty($products)): ?>
            <div class="no-products">
                <i class="fas fa-search" style="font-size: 48px; margin-bottom: 20px;"></i>
                <h3>Tidak ada produk ditemukan</h3>
                <p>Coba ubah kata kunci pencarian atau filter Anda</p>
            </div>
        <?php else: ?>
            <div class="products-grid">
                <?php foreach ($products as $product): ?>
                    <div class="product-card">
                        <div class="product-image">
                            <img src="<?php echo base_url('assets/uploads/products/'. $product->picture_name); ?>" alt="<?php echo htmlspecialchars($product->name); ?>">
                        </div>
                        <div class="product-info">
                            <div class="product-category">
                                <?php 
                                // Cari nama kategori berdasarkan ID
                                $category_name = 'Uncategorized';
                                foreach ($categories as $cat) {
                                    if ($cat['id'] == $product->category_id) {
                                        $category_name = $cat['name'];
                                        break;
                                    }
                                }
                                echo htmlspecialchars($category_name); 
                                ?>
                            </div>
                            <h3 class="product-name"><?php echo htmlspecialchars($product->name); ?></h3>
                            <div class="product-price">
                                <?php if ($product->current_discount > 0): ?>
                                    <span class="price-dc">Rp <?php echo format_rupiah($product->price); ?></span>
                                    <span class="price-sale">Rp <?php echo format_rupiah($product->price - $product->current_discount); ?></span>
                                <?php else: ?>
                                    Rp <?php echo format_rupiah($product->price); ?>
                                <?php endif; ?>
                            </div>
                            <div class="product-rating">
                                <div class="rating-stars">
                                    <?php
                                    $rating = $product->rating;
                                    for ($i = 1; $i <= 5; $i++) {
                                        if ($i <= $rating) {
                                            echo '<i class="fas fa-star"></i>';
                                        } elseif ($i - 0.5 <= $rating) {
                                            echo '<i class="fas fa-star-half-alt"></i>';
                                        } else {
                                            echo '<i class="far fa-star"></i>';
                                        }
                                    }
                                    ?>
                                </div>
                                <span class="rating-count">(<?php echo $product->review_count; ?>)</span>
                            </div>
                            <div class="product-actions">
                                <a href="<?php echo site_url('shop/product/'. $product->id .'/'. $product->sku .'/'); ?>" class="btn-detail">
                                    <i class="fas fa-eye"></i> Lihat Detail
                                </a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

            <?php if ($totalPages > 1): ?>
                <div class="pagination-wrapper">
                    <nav aria-label="Product pagination">
                        <ul class="pagination">
                            <?php if ($page > 1): ?>
                                <li class="page-item">
                                    <a class="page-link" href="?<?php echo http_build_query(array_merge($_GET, ['page' => $page - 1])); ?>">
                                        <i class="fas fa-chevron-left"></i>
                                    </a>
                                </li>
                            <?php endif; ?>
                            
                            <?php for ($i = max(1, $page - 2); $i <= min($totalPages, $page + 2); $i++): ?>
                                <li class="page-item <?php echo $i === $page ? 'active' : ''; ?>">
                                    <a class="page-link" href="?<?php echo http_build_query(array_merge($_GET, ['page' => $i])); ?>">
                                        <?php echo $i; ?>
                                    </a>
                                </li>
                            <?php endfor; ?>
                            
                            <?php if ($page < $totalPages): ?>
                                <li class="page-item">
                                    <a class="page-link" href="?<?php echo http_build_query(array_merge($_GET, ['page' => $page + 1])); ?>">
                                        <i class="fas fa-chevron-right"></i>
                                    </a>
                                </li>
                            <?php endif; ?>
                        </ul>
                    </nav>
                </div>
            <?php endif; ?>
        <?php endif; ?>
    </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
