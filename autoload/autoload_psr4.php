<?php

// autoload_psr4.php @generated by Composer

$library_path=implode(
  '/',
  array(
    DRUPAL_ROOT,
    drupal_get_path('profile', 'dkan'),
    'libraries',
    'json-schema',
    'src',
    'JsonSchema'
  )
);

$vendorDir = $library_path;
$baseDir = $vendorDir;

return array(
  'JsonSchema\\' => array($library_path),
);
