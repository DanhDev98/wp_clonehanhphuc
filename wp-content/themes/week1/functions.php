<?php
// Ngăn truy cập trực tiếp
if (!defined('ABSPATH'))
    exit;

// Load assets
function sna_replace_jquery()
{
    if (!is_admin()) {
        wp_deregister_script('jquery');
        wp_deregister_script('jquery-migrate');

        wp_register_script('jquery', 'https://code.jquery.com/jquery-3.7.1.min.js', [], '3.7.1', true);
        wp_enqueue_script('jquery');
    }
}
add_action('wp_enqueue_scripts', 'sna_replace_jquery');
function sna_load_assets()
{
    // Bootstrap CSS
    wp_enqueue_style(
        'bootstrap',
        'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css',
        array(),
        '5.3.3'
    );

    // Font Awesome 6
    wp_enqueue_style(
        'fontawesome-core',
        'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/fontawesome.min.css',
        array(),
        '6.7.2'
    );
    wp_enqueue_style(
        'fontawesome-brands',
        'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/brands.min.css',
        array(),
        '6.7.2'
    );
    wp_enqueue_style(
        'fontawesome-solid',
        'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/solid.min.css',
        array(),
        '6.7.2'
    );

    // Swiper
    wp_enqueue_style(
        'swiper',
        'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css',
        array(),
        '11'
    );

    // Main + Home CSS

    wp_enqueue_style(
        'posts-style',
        get_template_directory_uri() . '/assets/css/posts.css',
        array(),
        filemtime(get_template_directory() . '/assets/css/posts.css'),
        'all'
    );


    wp_enqueue_style(
        'home-style',
        get_template_directory_uri() . '/assets/css/home.css',
        array('main-style'),
        filemtime(get_template_directory() . '/assets/css/home.css'),
        'all'
    );


    if (is_page('event-page')) {
        wp_enqueue_style(
            'event-style',
            get_template_directory_uri() . '/assets/css/event-page.css',
            array(),
            filemtime(get_template_directory() . '/assets/css/event-page.css'),
            'all'
        );
    }
    wp_enqueue_style(
        'main-style',
        get_template_directory_uri() . '/assets/css/main.css',
        array(),
        filemtime(get_template_directory() . '/assets/css/main.css'),
        'all'
    );
    wp_enqueue_style(
        'postdetail-style',
        get_template_directory_uri() . '/assets/css/post-details.css',
        array(),
        filemtime(get_template_directory() . '/assets/css/post-details.css'),
        'all'
    );


    wp_enqueue_script(
        'flatpickr',
        'https://cdn.jsdelivr.net/npm/flatpickr',
        [],
        '4.6.13',
        true
    );
    wp_enqueue_script("zalo-sdk", "https://sp.zalo.me/plugins/sdk.js", array(), null, true);
    wp_enqueue_script("popper", "https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js", array(), "2.11.8", true);
    wp_enqueue_script("bootstrap-bundle", "https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js", array("popper"), "5.3.3", true);
    wp_enqueue_script("swiper", "https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js", array(), "11", true);
    wp_enqueue_script(
        "custom-script",
        get_theme_file_uri() . "/assets/js/app.js",
        array("jquery", "flatpickr"), // jQuery là dependency
        "1.0",
        true
    );

    wp_enqueue_script(
        "event-script",
        get_theme_file_uri() . "/assets/js/event-page.js",
        array("jquery", "flatpickr"), // jQuery là dependency
        "1.1",
        true
    );

    wp_enqueue_script(
        "detail-script",
        get_theme_file_uri() . "/assets/js/post-details.js",
        array("jquery", "flatpickr"), // jQuery là dependency
        "1.1.1",
        true
    );
    wp_enqueue_script(
        'google-recaptcha',
        'https://www.google.com/recaptcha/api.js',
        array(),
        null,
        true // Load ở footer
    );
    // Scripts

    // Custom fonts (inline <style> sẽ dùng thêm ở bước dưới nếu bạn muốn inline hoặc nhúng vào main.css)
}
add_action('wp_enqueue_scripts', 'sna_load_assets');


// Load custom fonts inline (nếu bạn không nhúng vào CSS riêng)
function sna_custom_fonts_inline()
{
    ?>
    <style>
        @font-face {
            font-family: Gilroy;
            src: url("<?php echo get_template_directory_uri(); ?>/assets/fonts/SVN-Gilroy-Regular.woff2") format("woff2");
            font-weight: 400;
            font-style: normal;
            font-display: swap;
        }

        @font-face {
            font-family: Gilroy;
            src: url("<?php echo get_template_directory_uri(); ?>/assets/fonts/SVN-Gilroy-Light.woff2") format("woff2");
            font-weight: 300;
            font-style: normal;
            font-display: swap;
        }

        @font-face {
            font-family: Gilroy;
            src: url("<?php echo get_template_directory_uri(); ?>/assets/fonts/SVN-Gilroy-Medium.woff2") format("woff2");
            font-weight: 500;
            font-style: normal;
            font-display: swap;
        }

        @font-face {
            font-family: Gilroy;
            src: url("<?php echo get_template_directory_uri(); ?>/assets/fonts/SVN-Gilroy-SemiBold.woff2") format("woff2");
            font-weight: 600;
            font-style: normal;
            font-display: swap;
        }

        @font-face {
            font-family: Gilroy;
            src: url("<?php echo get_template_directory_uri(); ?>/assets/fonts/SVN-Gilroy-Bold.woff2") format("woff2");
            font-weight: 700;
            font-style: normal;
            font-display: swap;
        }

        @font-face {
            font-family: Gilroy;
            src: url("<?php echo get_template_directory_uri(); ?>/assets/fonts/SVN-Gilroy-XBold.woff2") format("woff2");
            font-weight: 800;
            font-style: normal;
            font-display: swap;
        }
    </style>
    <?php
}
add_action('wp_head', 'sna_custom_fonts_inline');
add_theme_support('post-thumbnails');