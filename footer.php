    <footer class="footer-wrapper col-lg-12">
        <div class="row">
            <form class="form-wrapper mb-3 col col-lg-6">
                <div class="row mb-3">
                    <h3>Napisz do mnie</h3>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <input class="form-input" placeholder="Imię">
                    </div>
                    <div class="col-lg-6">
                        <input class="form-input" placeholder="Nazwisko">
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <input class="form-input" placeholder="Adres email">
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <textarea class="form-input" placeholder="Treść wiadomości"></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <button class="styled-button full-width">Wyślij</button>
                    </div>
                </div>
            </form>
            <div class="contact-wrapper col-lg-6">
                <div class="row mb-3">
                    <h3>Kontakt</h3>
                </div>
                <div class="row text-center mb-3">
                    <p>+48 123 456 789</p>
                    <p>kontakt@domena.pl</p>
                </div>
                <div class="row mb-4">
                    <h3>Social Media</h3>
                </div>
                <div class="row text-center justify-content-center">
                    <div class="col-auto">
                        <a href="" class="image-link"><img src="<?php echo get_template_directory_uri() . '/images/facebook.png' ?>" alt=""></a>
                    </div>
                    <div class="col-auto">
                        <a href="" class="image-link"><img src="<?php echo get_template_directory_uri() . '/images/instagram.png' ?>" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-12 mt-5">
            <p class="text-center">Wszystkie prawa zastrzeżone &copy; <?php echo date('Y') ?> Fotografia</p> 
        </div>
    </footer>

</div><!-- #page -->
<?php wp_footer(); ?>


</body>
</html>
