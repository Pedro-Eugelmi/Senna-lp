<?php get_header(); ?>

<main>

    <section class="py-120">
        <div class="container">
            <div class="row">
                <div class="col-20">
                    <h1 class="title-2 fc-main">
                        Conteúdo não encontrado
                    </h1>

                    <p class="mt-60">Parece que o conteúdo que você busca não existe ou está indisponível.</p>

                    <a class="button blue mt-60" title="Ir para o inicio" href="<?php echo home_url(); ?>">Voltar para a Home</a>

                </div>
            </div>
        </div>
    </section>

    <?php include("includes/newsletter.php");?>

    <section class="bg-main py-60">
        <?php include("includes/instagram.php")?>
    </section>
</main>

<?php get_footer(); ?>