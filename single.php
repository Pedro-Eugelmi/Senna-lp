<?php get_header(); 
    $thumbnail = get_the_post_thumbnail_url();
    $title = get_the_title(); ?>

    <main>

        <section>
            <div class="container">
                <div class="row py-60">
                    <div class="col-12 p-20 d-flex justify-content-center">
                        <img src="<?php echo $thumbnail?>" alt="<?php echo $title ?>">
                    </div>
                    <div class="col-8 p-20">
                        <h1 class="title fc-main"><?php echo $title ?></h1>

                        <div class="mt-20">
                            <?php the_content(); ?>
                        </div>

                    </div>
                    <div class="col-4 p-20 mt-40">
                        <div>
                            <h2>Categorias</h2>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

<?php get_footer(); ?>