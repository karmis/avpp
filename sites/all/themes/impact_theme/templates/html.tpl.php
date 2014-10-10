<!DOCTYPE html>
<html lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>"<?php print $rdf_namespaces; ?>>
<head>
<?php print $head; ?>
<title><?php print $head_title; ?></title>

<?php print $styles; ?>
<?php print $scripts; ?>

<?php

  drupal_add_js(drupal_get_path('theme', 'impact_theme') . '/js/jquery-1.11.0.min.js');
  drupal_add_js(drupal_get_path('theme', 'impact_theme') . '/js/moment.min.js');
  drupal_add_js(drupal_get_path('theme', 'impact_theme') . '/js/jquery-validation-1.13.0/dist/jquery.validate.min.js');

  // drupal_add_js(drupal_get_path('theme', 'impact_theme') . '/js/jquery.cycle.all.min.js');
  drupal_add_js(drupal_get_path('theme', 'impact_theme') . '/js/jquery.bpopup.min.js');
  drupal_add_js(drupal_get_path('theme', 'impact_theme') . '/bootstrap/bootstrap-3.2.0-dist/js/bootstrap.min.js');
  
  drupal_add_js(drupal_get_path('theme', 'impact_theme') . '/js/mimo84-bootstrap-maxlength-5df24c0/bootstrap-maxlength.min.js');

// js/jquery-validation-1.13.0/dist

  // drupal_add_js(drupal_get_path('theme', 'impact_theme') . '/js/slide.js');
  drupal_add_js(drupal_get_path('theme', 'impact_theme') . '/js/custom.js');

?>

<!--[if lt IE 9]><script src="<?php print base_path() . drupal_get_path('theme', 'impact_theme') . '/js/html5.js'; ?>"></script><![endif]-->
</head>
<body class="<?php print $classes; ?>"<?php print $attributes; ?>>
  <?php print $page_top; ?>
  <?php print $page; ?>
  <?php print $page_bottom; ?>
</body>
</html>