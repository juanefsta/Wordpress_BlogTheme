<?php get_header();?>
<section id="main">
    <div id="no-slide">
      <?php include (TEMPLATEPATH. '/slideshow.php'); ?>
    </div>
    <section id="articles_list">
      <article>
        <img class="thumb" src="http://lorempixel.com/450/370/">
        <hgroup><h2><a href="#">Titulo de articulo</a></h2></hgroup>
              <p class="date">28 de Mayo de 2017 en <a href="#">Categoria 3</a></p>
              <p class="extract">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam sit amet dapibus eros. Vivamus condimentum libero sem, quis aliquam augue vulputate nec. Donec eu nisl ut lacus maximus dapibus at ac nulla. Nunc nec justo placerat, aliquam eros sit amet, vulputate sapien. Vivamus non arcu ac arcu accumsan rutrum.</p>
      </article>
      <article>
        <img class="thumb" src="http://lorempixel.com/450/370/">
        <hgroup><h2><a href="#">Titulo de articulo</a></h2></hgroup>
              <p class="date">28 de Mayo de 2017 en <a href="#">Categoria 3</a></p>
              <p class="extract">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam sit amet dapibus eros. Vivamus condimentum libero sem, quis aliquam augue vulputate nec. Donec eu nisl ut lacus maximus dapibus at ac nulla. Nunc nec justo placerat, aliquam eros sit amet, vulputate sapien. Vivamus non arcu ac arcu accumsan rutrum.</p>
      </article>
      <article>
        <img class="thumb" src="http://lorempixel.com/450/370/">
        <hgroup><h2><a href="#">Titulo de articulo</a></h2></hgroup>
              <p class="date">28 de Mayo de 2017 en <a href="#">Categoria 3</a></p>
              <p class="extract">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam sit amet dapibus eros. Vivamus condimentum libero sem, quis aliquam augue vulputate nec. Donec eu nisl ut lacus maximus dapibus at ac nulla. Nunc nec justo placerat, aliquam eros sit amet, vulputate sapien. Vivamus non arcu ac arcu accumsan rutrum.</p>
      </article>
      <div id="pagination">
        <p><a href="#"><- Anteriores</a>
        <a href="#">Siguientes -></a></p>
      </div>
    </section>
    <?php get_sidebar();?>
  </section>
<?php get_footer();?>