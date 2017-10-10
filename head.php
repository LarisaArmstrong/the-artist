<?php
/**
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package TheArtist
 * @subpackage TheArtist
 * @since 1.0
 */
?>

    <meta charset="utf-8">
    <title><?php wp_title('|',1,'right'); ?><?php bloginfo('name'); ?></title>
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link href=“<?php bloginfo(‘css/vendor/jquery.fullPage.css’);?>” rel=“stylesheet” />
    <link href=“<?php bloginfo(‘css/application.css);?>” rel=“stylesheet” />
    
    <?php wp_head() ?>