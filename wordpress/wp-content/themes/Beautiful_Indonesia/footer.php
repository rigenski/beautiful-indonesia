<footer>
    <div class="container">
        <p class="footer-copyright">Copyright &copy; <?= date('Y') ?> - All rights reserved</p>
        <nav class="footer-nav">
            <?php wp_nav_menu(array('theme_location' => 'social-menu')); ?>
        </nav>
    </div>
</footer>
</div>
<?php wp_footer(); ?>
</body>

</html>