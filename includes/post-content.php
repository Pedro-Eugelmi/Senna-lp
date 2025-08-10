 <?php 
   $title = get_the_title();
   $excerpt = get_the_excerpt();
   $permalink = get_the_permalink();
   $thumbnail = get_the_post_thumbnail_url();
?>

<div class="post">
   
   <div class="post-thumbnail">
      <img src="<?php echo (!empty($thumbnail)) ? $thumbnail : get_template_directory_uri()."/assets/no-image.png" ?>" alt="<?php echo $title ?>">
   </div>

   <div class="post-content p-20">
      <h3 class="post-title"><?php echo $title ?></h3>

      <div class="post-excerpt mt-20">
         <?php echo $excerpt; ?>
      </div>

      <div class="post-link-area mt-20 pt-20">
         <a class="post-link" href="<?php echo $permalink ?>">
            SAIBA MAIS
            <svg width="27" height="20" viewBox="0 0 27 20" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M16.4118 0L14.9412 1.35714L22.8824 8.82142H0.529419V10.7214H22.8824L14.9412 18.1857L16.4118 19.5428L27 9.77142L16.4118 0Z" fill="#131E8D"/></svg>
         </a>
      </div>

   </div>

</div>
