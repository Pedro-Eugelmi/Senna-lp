<?php get_header(); 
$categories = get_categories();  

$args = [
    "post_type" => "post",
    "posts_per_page" => 6,
    "orderby" => "date",
    "order" => "DESC"
];

$posts = new WP_Query($args);

$banner = get_field("video"); ?>


<main>
    <section class="blog-header">
        <video aria-hidden="true" loop autoplay muted preload="metadata" class="blog-header-video">
            <source src="<?php echo $banner["url"]?>" type="video/<?php echo $banner["subtype"]?>">
        </video>
    
        <div class="container">
            <div class="row py-120">
                <div class="col-12 p-20">
                    <h1 class="page-title">Blog</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-main">
        <div class="container">
            <div class="row py-60">
                <div class="col-12 p-20">
                    <div class="blog-search">
                        <input aria-label="Pesquisa aqui" placeholder="Pesquise aqui..." class="blog-search-input" type="search">
                        <button class="blog-search-submit">
                            <svg  xmlns="http://www.w3.org/2000/svg" width="24" height="24"  fill="currentColor" viewBox="0 0 24 24" ><!--Boxicons v3.0 https://boxicons.com | License  https://docs.boxicons.com/free--><path d="m18,10c0-4.41-3.59-8-8-8S2,5.59,2,10s3.59,8,8,8c1.85,0,3.54-.63,4.9-1.69l5.1,5.1,1.41-1.41-5.1-5.1c1.05-1.36,1.69-3.05,1.69-4.9Zm-14,0c0-3.31,2.69-6,6-6s6,2.69,6,6-2.69,6-6,6-6-2.69-6-6Z"></path></svg>
                        </button>
                    </div>
                </div>

                <div class="col-12 p-20">
                    <div class="blog-categories d-flex gap-20 flex-wrap">
                        <?php foreach ($categories as $category): ?>
                            <a class="blog-categories-link" href="<?php echo get_term_link($category->slug, 'category') ?>"><?php echo $category->name?></a>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row py-60">
                <?php if ($posts->have_posts()): ?>
                    <?php while ($posts->have_posts()): $posts->the_post(); ?>
                        <div class="col-12 col-sm-6 col-lg-4 p-20">
                            <?php include ("includes/post-content.php"); ?>
                        </div>
                    <?php endwhile;
                    wp_reset_postdata(); ?>
                <?php else: ?>
                    <div class="col-12 p-20">
                        <p>Nenhum post encontrado</p>
                    </div>
                <?php endif;?>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>