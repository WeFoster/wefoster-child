<?php
/*
Template Name: Styleguide
*/
?>

<?php get_template_part('templates/head'); ?>

<body class="buddypress wordpress-page activity directory members groups styleguide">
  <!--[if lt IE 8]><div class="alert alert-warning"><?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'wefoster'); ?></div><![endif]-->

  <?php
    do_action('get_header');
      get_template_part('templates/header-top-navbar');
  ?>

  <div class="container">
    <div class="content row row-offcanvas row-offcanvas-left">
      <div class="main col-xs-12 col-sm-9" role="main">
  

    <?php get_template_part( 'templates/styleguide/styleguide-content' ); ?>


      </div><!-- /.main -->

        <aside class="sidebar col-xs-6 col-sm-3 sidebar-offcanvas" role="complementary">
          <div class="inner-sidebar">
            <?php get_template_part( 'templates/styleguide/styleguide/styleguide-sidebar' ); ?>
          </div>
        </aside><!-- /.sidebar -->

    </div><!-- /.content -->
  </div><!-- /.wrap -->

  <?php get_template_part('templates/footer'); ?>

<script type='text/javascript'>

var ToC =
  "<nav role='navigation' class='table-of-contents widget'>" +
    "<h5>Quick Navigation:</h5>" +
    "<ul>";

var newLine, el, title, link;

$(".sg-title").each(function() {

  el = $(this);
  title = el.text();
  link = "#" + el.attr("id");

  newLine =
    "<li>" +
      "<a href='" + link + "'>" +
        title +
      "</a>" +
    "</li>";

  ToC += newLine;

});

ToC +=
   "</ul>" +
  "</nav>";

$(".all-questions").prepend(ToC);

$(".inner-sidebar").prepend(ToC);

</script>

</body>
</html>