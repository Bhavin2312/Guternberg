<footer class="site-footer">
    <div class="footer-widgets">
        <div class="footer-widget">
            <h4>About Us</h4>
            <p>Short description about your site or company.</p>
        </div>
        <div class="footer-widget">
            <h4>Quick Links</h4>
            <ul>
                <li><a href="<?php echo esc_url(home_url('/')); ?>">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </div>
        <div class="footer-widget">
            <h4>Follow Us</h4>
            <ul class="social-links">
                <li><a href="#">Facebook</a></li>
                <li><a href="#">Twitter</a></li>
                <li><a href="#">Instagram</a></li>
            </ul>
        </div>
    </div>
    <div class="footer-bottom">
        <p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. All rights reserved.</p>
    </div>
    <?php wp_footer(); ?>
</footer>
</body>

</html>