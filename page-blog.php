<?php get_header(); 
$categories = get_categories();  

// Parametro
$search = isset($_GET["search"])? $_GET["search"] : "";
$category = isset($_GET["category"])? $_GET["category"] : "";

// Paginação
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

$args = [
    "post_type" => "post",
    "posts_per_page" => 9,
    "orderby" => "date",
    "order" => "DESC",
    'paged' => $paged
];

if (!empty($search)) {
    $args["s"] = $search;
}

if (!empty($category)) {
    $args["tax_query"] = array(
        array(
            'taxonomy' => 'category',
            'field' => 'slug',
            'terms' => $category
        )
    );
}

$posts = new WP_Query($args);

$banner = get_field("video"); 
?>


<main class="blog">
    <section class="blog-header">
        <video aria-hidden="true" loop autoplay muted preload="metadata" class="blog-header-video">
            <source src="<?php echo $banner["url"]?>" type="video/<?php echo $banner["subtype"]?>">
        </video>
    
        <div class="container">
            <div class="row blog-header-content">
                <div class="col-12 p-20">
                    <h1 class="page-title">Blog</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-main">
        <div class="container">
            <form id="blog-form" class="row blog-form">
                <div class="col-12 p-20">
                    <div class="blog-search">
                        <input aria-label="Pesquisa aqui" value="<?php echo $search ?>" name="search" placeholder="Pesquise aqui..." class="blog-search-input" type="search">
                        <button class="blog-search-submit">
                            <svg  xmlns="http://www.w3.org/2000/svg" width="24" height="24"  fill="currentColor" viewBox="0 0 24 24" ><!--Boxicons v3.0 https://boxicons.com | License  https://docs.boxicons.com/free--><path d="m18,10c0-4.41-3.59-8-8-8S2,5.59,2,10s3.59,8,8,8c1.85,0,3.54-.63,4.9-1.69l5.1,5.1,1.41-1.41-5.1-5.1c1.05-1.36,1.69-3.05,1.69-4.9Zm-14,0c0-3.31,2.69-6,6-6s6,2.69,6,6-2.69,6-6,6-6-2.69-6-6Z"></path></svg>
                        </button>
                    </div>
                </div>

                <div class="col-12 p-20">
                    <div class="blog-categories">
                            <label class="blog-categories-link <?php echo ($category == "" ) ? 'active' : ''?>">
                                <input type="radio" name="category" value="" <?php echo ($category == "" ) ? 'checked' : ''?> class="d-none"/>
                                Todos
                            </label>

                        <?php foreach ($categories as $cat): ?>
                            <label class="blog-categories-link <?php echo ($category == $cat->slug ) ? 'active' : ''?>">
                                <input type="radio" name="category" value="<?php echo $cat->slug ?>" <?php echo ($cat->slug == $category ) ? 'checked' : ''?> class="d-none" />
                                <?php echo $cat->name?>
                            </label>
                            
                        <?php endforeach; ?>
                    </div>
                </div>
            </form>
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
                    <?php endwhile; ?>
                    
                    <?php if ($posts->found_posts > $posts->posts_per_page): ?>
                        
                        <div class="col-12 p-20 d-flex justify-content-center align-items-center flex-wrap">
                            <div class="pagination blog-pagination">
                                <?php echo paginate_links(array(
                                    'base' => add_query_arg('paged', '%#%'),
                                    'format' => '?paged=%#%',
                                    'current' => max(1, get_query_var('paged')),
                                    'total' => $posts->max_num_pages,
                                    'prev_text' => '<svg  xmlns="http://www.w3.org/2000/svg" width="24" height="24"  fill="currentColor" viewBox="0 0 24 24" ><!--Boxicons v3.0 https://boxicons.com | License  https://docs.boxicons.com/free--><path d="m6 12 6 5v-4h6v-2h-6V7z"></path></svg>',
                                    'next_text' => '<svg  xmlns="http://www.w3.org/2000/svg" width="24" height="24"  fill="currentColor" viewBox="0 0 24 24" ><!--Boxicons v3.0 https://boxicons.com | License  https://docs.boxicons.com/free--><path d="M6 13h6v4l6-5-6-5v4H6z"></path></svg>',
                                    'show_all' => false
                                )); ?>
                            </div>
                        </div>

                    <?php endif; ?>
                    <?php wp_reset_postdata(); ?>

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