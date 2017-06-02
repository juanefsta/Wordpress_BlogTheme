<section id="slideshow">
    <?php query_posts('category_name=slider'); ?>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <div class="slide">
        <div class="thumb">
            <?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'slider_thumbs' ); }?>
        </div> 
        <article>
          <div class="thumb"><a href="<?php the_permalink();?>"></a></div>             
          <hgroup>
            <h2>
              <a href="<?php the_permalink();?>"><?php the_title();?></a>
            </h2>
          </hgroup>
                <div class="date"><?php the_date();?> en <span><?php the_category();?><span></div>
                <div class="extract"><?php the_excerpt();?></div>
        </article>
    </div>        
    <?php endwhile; else: ?>

    <?php endif; ?>  
</section>