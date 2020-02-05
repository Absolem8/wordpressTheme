<?php
/**
 * Шаблон подвала (footer.php)
 * @package WordPress
 * @subpackage travelcream
 */
?>
<footer class="pb-4">
    <div class="container">
        <div class="row">
            <div class="col-6 col-md-3">
                <div class="footer-main-link font-weight-bold pb-3">Cities</div>
                <div class="footer-link pt-1"><a href="javascript:void(0);">Cities</a></div>
                <div class="footer-link pt-1"><a href="javascript:void(0);">Cities</a></div>
                <div class="footer-link pt-1"><a href="javascript:void(0);">Cities</a></div>
                <div class="footer-link pt-1"><a href="javascript:void(0);">Cities</a></div>
                <div class="footer-link pt-1"><a href="javascript:void(0);">Cities</a></div>
                <div class="footer-link pt-1"><a href="javascript:void(0);">Cities</a></div>
            </div>
            <div class="col-6 col-md-3">
                <div class="footer-main-link font-weight-bold pb-3">Cities</div>
                <div class="footer-link pt-1"><a href="javascript:void(0);">Cities</a></div>
                <div class="footer-link pt-1"><a href="javascript:void(0);">Cities</a></div>
                <div class="footer-link pt-1"><a href="javascript:void(0);">Cities</a></div>
                <div class="footer-link pt-1"><a href="javascript:void(0);">Cities</a></div>
            </div>
            <div class="col-6 col-md-3">
                <div class="footer-main-link font-weight-bold pb-3">Cities</div>
                <div class="footer-link pt-1"><a href="javascript:void(0);">Cities</a></div>
                <div class="footer-link pt-1"><a href="javascript:void(0);">Cities</a></div>
                <div class="footer-link pt-1"><a href="javascript:void(0);">Cities</a></div>
                <div class="footer-link pt-1"><a href="javascript:void(0);">Cities</a></div>
                <div class="footer-link pt-1"><a href="javascript:void(0);">Cities</a></div>
            </div>
            <div class="col-6 col-md-3">
                <div class="footer-main-link font-weight-bold pb-3">Cities</div>
                <div class="footer-link pt-1">Cities</div>
                <div class="footer-link pt-1 mail"><a href="javascript:void(0);">Cities</a></div>
            </div>
        </div>
    </div>
</footer>
<?php wp_footer(); // необходимо для работы плагинов и функционала  ?>
<script>
    var $ = jQuery;
    $(".menu-item .nav-link").click(function(event) {
        event.preventDefault();
        var id = $(this).attr('href'),
            top = $(id).offset().top;
        $('body,html').animate({
            scrollTop: top
        }, 1000);
    });
</script>
</body>
</html>