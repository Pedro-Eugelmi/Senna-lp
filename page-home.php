<?php get_header(); ?>

<main>
    
    <?php $banner = get_field("banner"); ?>
    <?php if (!empty($banner)): ?>
        <section class="banner">

            <video aria-hidden="true" loop autoplay muted preload="metadata" class="banner-video">
                <source src="<?php echo $banner["video"]["url"]?>" type="video/<?php echo $banner["video"]["subtype"]?>">
            </video>

            <div class="banner-container container">
                <div class="row">
                    <div class="col-12 d-flex align-items-center flex-column pl-20 pr-20 pb-120 pt-120">
                        <h1 class="banner-title"><?php echo $banner["titulo"] ?></h1>

                        <p class="mt-40 banner-subtitle"><?php echo $banner["subtitulo"] ?></p>

                        <a class="button white mt-30" target="<?php echo $banner["link"]["target"] ?>" href="<?php echo $banner["link"]["url"] ?>"><?php echo $banner["link"]["title"] ?></a>
                    </div>
                </div>
            </div>

        </section>
    <?php endif; ?>

    <?php $pitchbar = get_field("pitchbar"); ?>
    <?php if (!empty($pitchbar)): ?>
        <section class="bg-main pitchbar">
            <div class="container">
                <div class="row">
                    <?php foreach ($pitchbar as $item): ?>
                        <div class="col-12 col-sm-6 col-lg-3 d-flex gap-20 pb-20 pt-20">
                            <img class="pitchbar-icon" src="<?php echo $item["icone"]?>" aria-hidden="true">
                            
                            <div class="pitchbar-content">
                                <h2 class="pitchbar-title"><?php echo $item["titulo"]?></h2>
                                <p class="pitchbar-desc mt-10"><?php echo $item["descricao"]?></p>
                            </div>

                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>
    <?php endif;?>

    <?php $customers = get_field("clientes");?>
    <?php if ($customers): ?>
        <section class="pt-80">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-xl-6 d-flex flex-column justify-content-center p-20">
                        <h2 class="title fc-main"><?php echo $customers["titulo"] ?></h2>

                        <div class="mt-40 text">
                            <?php echo $customers["descricao"] ?>
                        </div>

                        <a href="#" class="button blue has-icon mt-40">
                            SAIBA MAIS
                            <svg width="27" height="21" viewBox="0 0 27 21" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M15.8823 0L14.4118 1.42908L22.3529 9.28902H0V11.2897H22.3529L14.4118 19.1497L15.8823 20.5788L26.4706 10.2894L15.8823 0Z" fill="white"/></svg>
                        </a>
                    </div>

                    <div class="col-12 col-xl-6 p-20">
                        <img class="content-image" src="<?php echo $customers["imagem"]["url"] ?>" alt="<?php echo $customers["imagem"]["alt"]?>">
                    </div>
                </div>
            </div>
        </section>
    <?php endif; ?>

    <?php $businesses = get_field("negocios");?>
    <?php if ($businesses): ?>
        <section class="pt-40 pb-20">
            <div class="container">
                <div class="row flex-wrap-reverse">
                    <div class="col-12 col-xl-6 p-20">
                        <img class="content-image" src="<?php echo $businesses["imagem"]["url"] ?>" alt="<?php echo $businesses["imagem"]["alt"]?>">
                    </div>

                    <div class="col-12 col-xl-6 d-flex flex-column p-20 justify-content-center">
                        <h2 class="title fc-main"><?php echo $businesses["titulo"] ?></h2>

                        <div class="mt-40 text">
                            <?php echo $businesses["descricao"] ?>
                        </div>

                        <a href="#" class="button blue has-icon mt-40">
                            SAIBA MAIS
                            <svg width="27" height="21" viewBox="0 0 27 21" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M15.8823 0L14.4118 1.42908L22.3529 9.28902H0V11.2897H22.3529L14.4118 19.1497L15.8823 20.5788L26.4706 10.2894L15.8823 0Z" fill="white"/></svg>
                        </a>
                    </div>

                </div>
            </div>
        </section>
    <?php endif; ?>

    <?php 
        $args = [
            "post_type" => "post",
            "posts_per_page" => 6,
            "orderby" => "date",
            "order" => "DESC"
        ];

        $posts = new WP_Query($args);
    ?>

    <?php if ($posts->have_posts() ): ?>
        <section class="pt-40 pb-60">
            <div class="container swiper-blog swiper">
                <div class="row">
                    <div class="col-sm-8 pt-20 pb-20 pl-30 pr-30">
                        <h2 class="title fc-main">ÚLTIMOS POSTS</h2>
                    </div>
                    <div class="col-sm-4 p-20 d-flex justify-content-sm-end align-items-center gap-20">
                        <button class="swiper-blog-next">
                            <svg  xmlns="http://www.w3.org/2000/svg" width="24" height="24"  fill="currentColor" viewBox="0 0 24 24" ><!--Boxicons v3.0 https://boxicons.com | License  https://docs.boxicons.com/free--><path d="M11.79 6.29 6.09 12l5.7 5.71 1.42-1.42L9.91 13H18v-2H9.91l3.3-3.29z"></path></svg>                        
                        </button>

                        <button class="swiper-blog-prev">
                            <svg  xmlns="http://www.w3.org/2000/svg" width="24" height="24"  fill="#fff" viewBox="0 0 24 24" ><!--Boxicons v3.0 https://boxicons.com | License  https://docs.boxicons.com/free--><path d="M6 13h6v4l6-5-6-5v4H6z"></path></svg>
                        </button>
                    </div>
                </div>

                <div class="swiper-wrapper">
                    <?php while ($posts->have_posts() ): $posts->the_post(); ?>
                        <article class="swiper-slide p-20">
                            <?php include ("includes/post-content.php"); ?>
                        </article>
                    <?php endwhile;
                    wp_reset_postdata(); ?>
                </div>

                <div class="swiper-pagination"></div>

                <div class="row">
                    <div class="col-12 py-20 d-flex justify-content-center">
                        <a href="<?php echo get_permalink(get_page_by_path("blog")) ?>" class="button blue has-icon mt-40">
                            VER MAIS POSTS
                            <svg width="27" height="21" viewBox="0 0 27 21" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M15.8823 0L14.4118 1.42908L22.3529 9.28902H0V11.2897H22.3529L14.4118 19.1497L15.8823 20.5788L26.4706 10.2894L15.8823 0Z" fill="white"/></svg>
                        </a>
                    </div>
                </div>

            </div>
        </section>
    <?php endif; ?>

    <section class="bg-black py-60 newsletter">
        <div class="container">
            <div class="row">
                <div class="col-12 p-20">
                    <h2 class="newsletter-title">FAÇA PARTE DA NOSSA <strong>NEWSLETTER</strong></h2>
                </div>

                <div class="col-12 p-20">
                    <?php echo do_shortcode("[mc4wp_form id=54]"); ?>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-main py-60">
        <div class="container">
            <div class="row">
                <div class="col-12 py-20">
                    <h2 class="social-title">
                        FAÇA PARTE DA NOSSA REDE! <br>
                        SIGA <a href="">@Senna</a>
                    </h2>
                </div>
            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>