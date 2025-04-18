<?php
/*
Template Name: News Page
*/
get_header()
    ?>
<main class="main">
    <!-- hero -->
    <section class="hero">
        <div class="hero__bg"><img src="<?php echo get_theme_file_uri() . '/assets/img/register/register-bg.jpg'; ?>"
                aria-hidden="true"></div>
        <div class="hero__bg-overlay-radial">
            <img
                src="<?php echo get_theme_file_uri() . '/assets/img/hero/radial-overlay.svg" alt="hero overlay radial'; ?>" />
        </div>
        <div class="hero__bg-overlay-effect">
            <img src="<?php echo get_theme_file_uri() . '/assets/img/hero/banner-layer.png'; ?>"
                alt="hero overlay radial" />
        </div>
        <div class="hero__inner container">
            <h1 class="page-title">NEWS</h1>
        </div>
    </section>
    <div class="main__background"
        style="background-image: url(<?php echo get_theme_file_uri() . '/assets/img/Background.png' ?>);">
        <div class="main__inner container">
            <div class="page-breadcrumb">
                <ul class="breadcrumb__inner">
                    <li><a href="/">Home</a></li>
                    <img src="<?php echo get_theme_file_uri() . '/assets/img/icons/chevron-right-b.svg'; ?>" width="16"
                        height="16" />
                    <li class="current">News</li>
                </ul>
            </div>

            <section class="post-filter">
                <h2 class="cate-header">
                    SNA NEWS
                </h2>
                <form>
                    <div class="filter__searchbar">
                        <input type="text" name="keyword" id="filter-kw" class="filter__searchbar-input"
                            placeholder="Keyword search">
                        <button type="reset" class="filter__searchbar-clear">
                            <img src="<?php echo get_theme_file_uri() . '/assets/img/icons/clear-icon.svg' ?>"
                                alt="clear icon">
                        </button>
                    </div>
                    <button type="submit"
                        class="filter__searchbtn btn-cta btn-cta--highlight btn-cta--highlight-default">
                        <div class="btn-hover"></div>
                        <span>
                            Search
                        </span>
                        <div class="filter__searchbtn-icon"><img
                                src="<?php echo get_theme_file_uri() . '/assets/img/icons/search-icon.svg ' ?>"
                                alt="search icon"></div>
                    </button>
                </form>
            </section>

            <section class="post-grid">
                <div class="post-grid__main">
                <?php
$args = array(
    'post_type' => 'post',
    'posts_per_page' => 8
);

$loop = new WP_Query($args);

if ($loop->have_posts()) :
    while ($loop->have_posts()) : $loop->the_post();

        $thumbnail = get_field('thumbnail');
        $tag = get_field('tag');
        $date = get_field('date');
        $title = get_field('title');
        $description = get_field('description');
        $link = get_field('link');
?>
    <a class="post__item-wrapper" href="<?php the_permalink(); ?>">
        <article class="post__item">
            <div class="post__item-tag"><?php echo esc_html($tag); ?></div>
            <div class="post__item-thumbnail">
                <img src="<?php echo esc_url($thumbnail); ?>" alt="post thumbnail">
            </div>
            <div class="post__item-content">
                <time class="post__content-date"><?php echo esc_html($date); ?></time>
                <h4 class="post__content-title"><?php echo esc_html($title); ?></h4>
                <p class="post__content-description"><?php echo esc_html($description); ?></p>
                <div class="post__item-cta">
                    Read article
                    <img src="<?php echo get_theme_file_uri() . '/assets/img/icons/arrow-cta-icon.svg' ?>" alt="arrow cta">
                </div>
            </div>
        </article>
    </a>
<?php
    endwhile;
    wp_reset_postdata();
endif;
?>

                </div>
                <ul class="post-grid__pagination">
                    <li class="page page--current">1</li>
                    <li class="page">2</li>
                    <li class="page">3</li>
                    <li class="page page--other">....</li>
                    <li class="page">7</li>
                    <li class="page page--next"><img
                            src="<?php echo get_theme_file_uri() . '/assets/img/icons/page-next.svg' ?>"
                            alt="next page icon" width="16" height="16"></li>
                </ul>
            </section>

            <section class="other-cate">
                <div class="cate__item">
                    <div class="cate__item-bg">
                        <img src="<?php echo get_theme_file_uri() . '/assets/img/post/cate-bg-1.jpg' ?>"
                            alt="cate thumbnail">
                    </div>
                    <div class="cate__item-overlay"></div>
                    <div class="cate__item-title">
                        Event
                    </div>
                    <div class="cate__item-cta btn-cta btn-cta--highlight">
                        <div class="btn-hover"></div>
                        <span>
                            Learn more
                        </span>
                    </div>
                </div>
                <div class="cate__item">
                    <div class="cate__item-bg">
                        <img src="<?php echo get_theme_file_uri() . '/assets/img/post/cate-bg-2.jpg' ?>"
                            alt="cate thumbnail">
                    </div>
                    <div class="cate__item-overlay"></div>
                    <div class="cate__item-title">
                        Announcement
                    </div>
                    <div class="cate__item-cta btn-cta btn-cta--highlight">
                        <div class="btn-hover"></div>
                        <span>
                            Learn more
                        </span>
                    </div>
                </div>
                <div class="cate__item">
                    <div class="cate__item-bg">
                        <img src="<?php echo get_theme_file_uri() . '/assets/img/post/cate-bg-3.jpg' ?>"
                            alt="cate thumbnail">
                    </div>
                    <div class="cate__item-overlay"></div>
                    <div class="cate__item-title">
                        social stream
                    </div>
                    <div class="cate__item-cta btn-cta btn-cta--highlight">
                        <div class="btn-hover"></div>
                        <span>
                            Learn more
                        </span>
                    </div>
                </div>
            </section>
        </div>
    </div>
</main>
<div class="side-action">
    <a class="side-action__item"
        href="https://sna.edu.vn/vi/dat-lich-tham-quan-truong?utm_source=website&utm_medium=non-paid&utm_campaign=website_en_nav_bar&utm_content=book_a_tour">
        <div class="side-action__item-icon">
            <img src="<?php echo get_theme_file_uri() . '/assets/img/icons/location-white.webp'; ?>" alt="location icon"
                width="30" height="30" />
        </div>
        <div class="side-action__item-text">Book A Tour</div>
    </a>
    <a class="side-action__item"
        href="/learning?utm_source=website&utm_medium=non-paid&utm_campaign=website_en_nav_bar&utm_content=curriculum">
        <div class="side-action__item-icon">
            <img src="<?php echo get_theme_file_uri() . '/assets/img/icons/program.webp'; ?>" alt="program icon"
                width="30" height="30" />
        </div>
        <div class="side-action__item-text">Curriculum</div>
    </a>
    <a class="side-action__item"
        href="/tuition-fees?utm_source=website&utm_medium=non-paid&utm_campaign=website_en_nav_bar&utm_content=fees">
        <div class="side-action__item-icon">
            <img src="<?php echo get_theme_file_uri() . '/assets/img/icons/fee-icon.webp'; ?>" alt="fee icon" width="30"
                height="30" />
        </div>
        <div class="side-action__item-text">Tuition Fees</div>
    </a>
</div>

<div class="to-top" id="scrollToTopBtn">
    <i class="fa-solid fa-chevron-up"></i>
</div>

<div class="float-cta">
    <div class="float-cta__menu"><img class="open-widget"
            src="<?php echo get_theme_file_uri() . '/assets/img/icons/phone-call-cta.png'; ?>">
        <img class="close-widget" src="<?php echo get_theme_file_uri() . '/assets/img/icons/close-widget.webp'; ?>">
    </div>
    <div class="float-cta__menu-open">
        <a href="tel:0964466014" class="call-widget"><img
                src="<?php echo get_theme_file_uri() . '/assets/img/icons/phone-call-click.png'; ?>"></a>
        <div class="zalo-chat-widget" data-oaid="2120951076949421751"
            data-welcome-message="Rất vui khi được hỗ trợ bạn!" data-autopopup="0" data-width="" data-height="">
        </div>
    </div>
</div>


<?php get_footer() ?>