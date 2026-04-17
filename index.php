<?php
/**
 * Main fallback template
 * Used when no other template matches
 */

if (!defined('ABSPATH')) exit;

    get_header();
?>

<main style="padding:40px; text-align:center;">
    <h1>
        <?php echo esc_html(get_bloginfo('name')); ?>
    </h1>
    <p>
        <?php echo esc_html__('404 | Not Found'); ?>
    </p>
</main>

<?php get_footer(); ?>