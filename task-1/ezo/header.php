<?php

/**
 * Header Template
 */

?>
<!doctype html>
<html <?php language_attributes(); ?> style="margin: 0!important;">

<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <?php if (is_single()) { ?>
        <title><?php wp_title(); ?> | <?php bloginfo('name'); ?></title>
    <?php } else { ?>
        <title><?php bloginfo('name'); ?> | <?php bloginfo('description'); ?></title>
    <?php } ?>

    <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>