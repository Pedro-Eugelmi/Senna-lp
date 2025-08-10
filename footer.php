    <footer class="bg-black footer">
        <div class="container">
            <div class="row py-40">
                <div class="col-12 pt-20 pb-20 d-flex justify-content-md-start justify-content-center col-md-4">
                    <?php the_custom_logo(); ?>
                </div>
                
                <div class="col-12 col-lg-8 pt-20 pb-20 d-flex justify-content-center justify-content-md-end">
                    <nav>
                        <ul class="d-flex gap-20 gap-xl-40 align-items-center footer-links">
                            <li><a class="footer-link" href="">Política de privacidade</a></li>
                            <li><a class="footer-link" href="">Criar conta</a></li>
                            <li><a class="button white" href="">Entrar</a></li>
                        </ul>

                    </nav>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <hr>
                </div>

                <div class="col-12 d-flex justify-content-between align-items-center footer-bottom pt-20 pb-20">
                    <span class="footer-bottom-text">Todos os direitos reservados - <?php echo get_the_date('Y') ?></span>

                    <a title="Ir para o site do IFSP campus Birigui" target="_blank" href="">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/ifsp.png" alt="IFSP Birigui">
                    </a>
                </div>
            </div>
        </div>
    </footer>
    <?php wp_footer(); ?>
</body>
</html>