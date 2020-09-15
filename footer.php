<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Beatris
 */

?>

<footer id="colophon" class="site-footer">
  <div class="site-info">
    <div>
      <p>©<span class="js-year"></span>, Beatris - krojački salon. Sva prava zadržana.</p>
    </div>
    <div>
      <p>Ova web stranica napravljena je sa <i class="fas fa-heart"></i> od <a
          href="https://smodev.tech/">Smodev</a>
      </p>
    </div>
  </div><!-- .site-info -->
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
<script>
  var $year = document.querySelector('.js-year');
  if ($year) {
    $year.innerHTML = new Date().getFullYear();
  }
</script>
</body>

</html>