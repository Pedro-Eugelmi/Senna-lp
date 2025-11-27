<?php get_header(); 
    $thumbnail = get_the_post_thumbnail_url();
    $title = get_the_title(); 
    $post_id = get_the_ID();
    
    $related = new WP_Query([
        'orderby' => 'rand',
        'posts_per_page' => 3,
        'post__not_in' => [$post_id],
        'post_type' => 'post'
    ]);

    $recent = new WP_Query([
        'orderby' => 'date',
        'order' => 'DESC',
        'posts_per_page' => 5,
        'post__not_in' => [$post_id],
        'post_type' => 'post'
    ]);

    $categories = get_categories();
?>

<main>

<section>
    <div class="container py-60">
        <div class="row">
            <div class="col-12 p-20 d-flex justify-content-center">
                <img class="blog-image" src="<?php echo $thumbnail?>" alt="<?php echo $title ?>">
            </div>

            <div class="col-12 col-lg-8 p-20">
                <h1 class="title fc-main"><?php echo $title ?></h1>

                <div class="mt-40 editor">
                    <?php the_content(); ?>
                </div>

            </div>

            <aside class="col-12 col-lg-4 p-20 mt-40">

                <div class="slicky">
                    <div class="blog-aside-categories">
                        <h2>Categorias</h2>

                        <ul>
                            <?php foreach ($categories as $category): ?>
                                <li><a href="<?php echo site_url()."/blog"?>?category=<?php echo $category->slug?>"><?php echo $category->name ?></a></li>
                            <?php endforeach; ?>
                        </ul>

                    </div>

                    <div class="blog-aside-categories mt-40">
                        <h2>Posts recentes</h2>

                        <ul>
                            <?php while ($recent->have_posts()): $recent->the_post();?>
                                <li><a href="<?php echo get_the_permalink() ?>"><?php echo get_the_title() ?></a></li>
                            <?php endwhile;
                            wp_reset_postdata(); ?>
                        </ul>

                    </div>
                </div>

            </aside>
        </div>

        <?php if($related->have_posts()): ?>    
            <div class="row">
                <div class="col-12 p-20">
                    <h2 class="title fc-main">Leia também</h2>
                </div>

                <?php while($related->have_posts()): $related->the_post(); ?>

                    <div class="col-12 col-sm-6 col-lg-4 p-20">
                        <?php include ("includes/post-content.php"); ?>
                    </div>

                <?php endwhile;?>

            </div>
        <?php endif; ?>

    </div>
</section>

</main>
<?php get_footer(); ?>