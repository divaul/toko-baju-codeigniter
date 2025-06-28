<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<section class="ftco-section ftco-no-pt ftco-no-pb py-5 bg-light">
    <div class="container py-4">
    </div>
</section>
<style>
	/* ======= FOOTER ======= */
footer {
    background-color: #222;
    color: #fff;
    padding: 80px 0 20px;
}

.footer-content {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 40px;
    margin-bottom: 40px;
}

.footer-section h3 {
    color: #fff;
    font-size: 1.3rem;
    margin-bottom: 20px;
    position: relative;
    padding-bottom: 10px;
}

.footer-section h3:after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 0;
    width: 50px;
    height: 2px;
    background-color: #a67c52;
}

.footer-section p, .footer-section li {
    margin-bottom: 10px;
    color: #aaa;
}

.footer-section a {
    color: #aaa;
}

.footer-section a:hover {
    color: #a67c52;
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

.copyright {
    text-align: center;
    padding-top: 20px;
    border-top: 1px solid rgba(255, 255, 255, 0.1);
    color: #777;
}

</style>
<footer>
        <div class="container">
            <div class="footer-content">
                <div class="footer-section">
                    <h3>PRESTIGE</h3>
                    <p>Fashion premium untuk tampilan elegan dan berkelas. Kualitas terbaik untuk gaya hidup Anda.</p>
                </div>
                <div class="footer-section">
                    <h3>Navigasi</h3>
                    <ul>
                        <li><a href="index.html">Beranda</a></li>
                        <li><a href="koleksi.html">Koleksi</a></li>
                        <li><a href="produk.html">Produk</a></li>
                        <li><a href="tentang.html">Tentang Kami</a></li>
                        <li><a href="kontak.html">Kontak</a></li>
                    </ul>
                </div>
                <div class="footer-section">
                    <h3>Kontak</h3>
                    <p><i class="fas fa-map-marker-alt"></i> Jl. Fashion No. 123, Jakarta</p>
                    <p><i class="fas fa-phone"></i> +62 123 4567 890</p>
                    <p><i class="fas fa-envelope"></i> info@prestige.id</p>
                </div>
                <div class="footer-section">
                    <h3>Ikuti Kami</h3>
                    <div class="social-icons">
                        <a href="#"><i class="fab fa-facebook"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        
                    </div>
                </div>
            </div>
            <div class="copyright">
                <p>&copy; 2015 PRESTIGE. All Rights Reserved.</p>
            </div>
        </div>
    </footer>



<!-- loader -->
<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
        <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
        <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
            stroke="#F96D00" />
    </svg></div>

<script src="<?php echo get_theme_uri('js/popper.min.js'); ?>"></script>
<script src="<?php echo get_theme_uri('js/bootstrap.min.js'); ?>"></script>
<script src="<?php echo get_theme_uri('js/jquery.easing.1.3.js'); ?>"></script>
<script src="<?php echo get_theme_uri('js/jquery.waypoints.min.js'); ?>"></script>
<script src="<?php echo get_theme_uri('js/jquery.stellar.min.js'); ?>"></script>
<script src="<?php echo get_theme_uri('js/owl.carousel.min.js'); ?>"></script>
<script src="<?php echo get_theme_uri('js/jquery.magnific-popup.min.js'); ?>"></script>
<script src="<?php echo get_theme_uri('js/aos.js'); ?>"></script>
<script src="<?php echo get_theme_uri('js/jquery.animateNumber.min.js'); ?>"></script>
<script src="<?php echo get_theme_uri('js/bootstrap-datepicker.js'); ?>"></script>
<script src="<?php echo get_theme_uri('js/scrollax.min.js'); ?>"></script>
<script src="<?php echo get_theme_uri('js/main.js'); ?>"></script>
<script src="<?php echo base_url('assets/plugins/toastr/toastr.min.js'); ?>"></script>

<script>
toastr.options = {
    "closeButton": false,
    "debug": false,
    "newestOnTop": false,
    "progressBar": false,
    "positionClass": "toast-top-right",
    "preventDuplicates": false,
    "onclick": null,
    "showDuration": "300",
    "hideDuration": "1000",
    "timeOut": "5000",
    "extendedTimeOut": "1000",
    "showEasing": "swing",
    "hideEasing": "linear",
    "showMethod": "fadeIn",
    "hideMethod": "fadeOut"
}

$.ajax({
    method: 'GET',
    url: '<?php echo site_url('shop/cart_api?action=cart_info'); ?>',
    success: function(res) {
        var data = res.data;

        var total_item = data.total_item;
        $('.cart-item-total').text(total_item);
    }
});

$('.add-cart').click(function(e) {
    e.preventDefault();

    var id = $(this).data('id');
    var sku = $(this).data('sku');
    var qty = $(this).data('qty');
    qty = (qty > 0) ? qty : 1;
    var price = $(this).data('price');
    var name = $(this).data('name');

    $.ajax({
        method: 'POST',
        url: '<?php echo site_url('shop/cart_api?action=add_item'); ?>',
        data: {
            id: id,
            sku: sku,
            qty: qty,
            price: price,
            name: name
        },
        success: function(res) {
            if (res.code == 200) {
                var totalItem = res.total_item;

                $('.cart-item-total').text(totalItem);
                toastr.info('Item ditambahkan dalam keranjang');
            } else {
                console.log('Terjadi kesalahan');
            }
        }
    });
});
</script>

</body>

</html>
