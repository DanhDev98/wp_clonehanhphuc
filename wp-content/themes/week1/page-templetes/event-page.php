<?php
/*
Template Name: Event Page
*/

get_header()
    ?>


<main class="main">
    <!-- hero -->
    <section class="hero">
        <div class="hero__slider swiper">
            <div class="hero__slider-wrapper swiper-wrapper">
                <div class="hero__slider-item swiper-slide">
                    <a class="hero__item-banner"
                        href="/event-sna/?utm_source=tos&utm_medium=organic&utm_campaign=openday&utm_content=openday2003">
                        <img src="<?php echo get_theme_file_uri() . '/assets/img/event-page/40a55acd7739a37c67d050fd0d2702e2.png'; ?>"
                            alt="hero" />
                    </a>
                    <!-- <div class="hero__item-overlay-radial">
              <img src="assets/img/hero/radial-overlay.svg" alt="hero overlay radial" />
            </div>
            <div class="hero__item-overlay-effect">
              <img src="assets/img/hero/banner-layer.png" alt="hero overlay radial" />
            </div> -->
                    <!-- <div class="hero__item-content container">
              <div class="hero__content-top">
                <div class="hero__content-left">SNA</div>
                <div class="hero__content-right">
                  <p>YOUR</p>
                  <p>PATHWAY TO</p>
                </div>
              </div>
              <div class="hero__content-btm">
                <p>THE WORLD'S</p>
                <p>TOP UNIVERSITIES</p>
              </div>
              <a class="hero__content-cta btn-cta btn-cta--hero"
                href="/event-sna/?utm_source=tos&utm_medium=organic&utm_campaign=openday&utm_content=openday2802">
                REGISTER NOW
              </a>
            </div> -->
                </div>
            </div>
            <div class="hero__slider-pagination swiper-pagination"></div>
        </div>
    </section>

    <section class="main__background"
        style="background-image: url(<?php echo get_theme_file_uri() . '/assets/img/section2.png' ?>)">
        <!-- about us -->
        <section class="about-event">
            <div class="about-event__inner">
                <!-- <h1 class="section-title">The School for Future Leaders</h1> -->
                <div class="about-event__slider-outer">
                    <div class="about-event__slider swiper">
                        <div class="about-event__slider-wrapper swiper-wrapper">
                            <div class="about-event__slider-item swiper-slide">
                                <div class="about-event__item-image">
                                    <img src="<?php echo get_theme_file_uri() . '/assets/img/event-page/masks_theater_solid_2_1-1.webp'; ?>"
                                        alt="topic icon" loading="lazy" width="69" height="55" />
                                    <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                                </div>
                                <div class="about-event__item-headline--sm">The Unseen Idea</div>
                                <div class="about-event__item-description">
                                    Step into the Minds of Young Creators
                                </div>
                            </div>
                            <div class="about-event__slider-item swiper-slide">
                                <div class="about-event__item-image">
                                    <img src="<?php echo get_theme_file_uri() . '/assets/img/event-page/date.webp'; ?>"
                                        width="48" height="55" alt="time date icon" loading="lazy" />
                                    <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                                </div>
                                <div class="about-event__item-headline--sm">Time</div>
                                <div class="about-event__item-description">
                                    03:30 PM, Thursday, March 20
                                </div>
                            </div>
                            <div class="about-event__slider-item swiper-slide">
                                <div class="about-event__item-image">
                                    <img src="<?php echo get_theme_file_uri() . '/assets/img/event-page/school.webp'; ?>"
                                        alt="location school icon" loading="lazy" width="63" height="55" />
                                    <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                                </div>
                                <div class="about-event__item-headline--sm">SNA South Saigon Campus</div>
                                <div class="about-event__item-description">
                                    Street No. 20, Him Lam area, Binh Chanh
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="sharing__slider-pagination swiper-pagination"></div>
                    <div class="about-event__slider-nav swiper-button-next" role="button">
                        <img src="<?php echo get_theme_file_uri() . '/assets/img/icons/chevron-right.webp'; ?>"
                            alt="right button" width="24" height="24" />
                    </div>
                    <div class="about-event__slider-nav swiper-button-prev" role="button">
                        <img src="<?php echo get_theme_file_uri() . '/assets/img/icons/chevron-left.webp'; ?>"
                            alt="left button" width="24" height="24" />
                    </div>
                </div>
            </div>
        </section>
        <!-- event topic -->
        <section class="topic" id="topic">
            <div class="topic__inner container">
                <div class="topic__main">
                    <div class="topic__main-title">THE UNSEEN IDEA</div>
                    <div class="topic__main-subtitle">Step into the Minds of Young Creators</div>
                    <div class="topic__main-content">
                        <p>
                            Ever wondered what goes on in the mind of a young artist or filmmaker? Here’s your chance to
                            see creativity unfold before your eyes!
                        </p>
                        <p>
                            Join us for “The Unseen Idea” – SNA Open Day on March 20, where our IB DP students proudly
                            showcase their final Visual Arts & Film exhibition.<br />
                            🎭 Visual Arts: A gallery of emotions, ideas, and storytelling – a culmination of two years
                            of dedication, where every brushstroke and sculpture tells a story.<br />
                            🎥 Film: A cinematic experience straight from the minds of young filmmakers, capturing their
                            perspectives, emotions, and creativity.
                        </p>
                    </div>
                    <div class="topic__main-cta btn-cta btn-cta--highlight-invert">
                        <div class="btn-hover"></div>
                        <a
                            href="/event-sna/?utm_source=tos&utm_medium=organic&utm_campaign=openday&utm_content=openday2802">
                            <span>Register Now</span>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <!-- curriculum -->
        <section class="student-life">
            <div class="student-life__inner container">
                <div class="student-life__main">
                    <div class="section-title">Hình ảnh sự kiện</div>
                    <div class="student-life__slider-outer">
                        <div class="student-life__slider swiper">
                            <div class="student-life__slider-wrapper swiper-wrapper">
                                <div class="student-life__slider-item swiper-slide">
                                    <div class="student-life__item">
                                        <img src="<?php echo get_theme_file_uri() . '/assets/img/student-life/image-1.webp'; ?>"
                                            alt="image-1" />
                                    </div>
                                </div>
                                <div class="student-life__slider-item swiper-slide">
                                    <div class="student-life__item">
                                        <img src="<?php echo get_theme_file_uri() . '/assets/img/student-life/image-2.webp'; ?>"
                                            alt="image-2" />
                                    </div>
                                </div>
                                <div class="student-life__slider-item swiper-slide">
                                    <div class="student-life__item">
                                        <img src="<?php echo get_theme_file_uri() . '/assets/img/student-life/image-3.webp'; ?>"
                                            alt="image-3" />
                                    </div>
                                </div>
                                <div class="student-life__slider-item swiper-slide">
                                    <div class="student-life__item">
                                        <img src="<?php echo get_theme_file_uri() . '/assets/img/student-life/image-4.webp'; ?>"
                                            alt="image-4" />
                                    </div>
                                </div>
                                <div class="student-life__slider-item swiper-slide">
                                    <div class="student-life__item">
                                        <img src="<?php echo get_theme_file_uri() . '/assets/img/student-life/image-5.webp'; ?>"
                                            alt="image-5" />
                                    </div>
                                </div>
                                <div class="student-life__slider-item swiper-slide">
                                    <div class="student-life__item">
                                        <img src="<?php echo get_theme_file_uri() . '/assets/img/student-life/image-6.webp' ?>"
                                            alt="image-6" />
                                    </div>
                                </div>
                                <div class="student-life__slider-item swiper-slide">
                                    <div class="student-life__item">
                                        <img src="<?php echo get_theme_file_uri() . '/assets/img/student-life/image-7.webp' ?>"
                                            alt="image-7" />
                                    </div>
                                </div>
                                <div class="student-life__slider-item swiper-slide">
                                    <div class="student-life__item">
                                        <img src="<?php echo get_theme_file_uri() . '/assets/img/student-life/image-8.webp' ?>"
                                            alt="image-8" />
                                    </div>
                                </div>
                                <div class="student-life__slider-item swiper-slide">
                                    <div class="student-life__item">
                                        <img src="<?php echo get_theme_file_uri() . '/assets/img/student-life/image-9.webp' ?>"
                                            alt="image-9" />
                                    </div>
                                </div>
                                <div class="student-life__slider-item swiper-slide">
                                    <div class="student-life__item">
                                        <img src="<?php echo get_theme_file_uri() . '/assets/img/student-life/image-10.webp' ?>"
                                            alt="image-10" />
                                    </div>
                                </div>
                                <div class="student-life__slider-item swiper-slide">
                                    <div class="student-life__item">
                                        <img src="<?php echo get_theme_file_uri() . '/assets/img/student-life/image-11.webp' ?>"
                                            alt="image-11" />
                                    </div>
                                </div>
                                <div class="student-life__slider-item swiper-slide">
                                    <div class="student-life__item">
                                        <img src="<?php echo get_theme_file_uri() . '/assets/img/student-life/image-12.webp' ?>"
                                            alt="image-12" />
                                    </div>
                                </div>
                                <div class="student-life__slider-item swiper-slide">
                                    <div class="student-life__item">
                                        <img src="<?php echo get_theme_file_uri() . '/assets/img/student-life/image-13.webp' ?>"
                                            alt="image-13" />
                                    </div>
                                </div>
                                <div class="student-life__slider-item swiper-slide">
                                    <div class="student-life__item">
                                        <img src="<?php echo get_theme_file_uri() . '/assets/img/student-life/image-14.webp' ?>"
                                            alt="image-14" />
                                    </div>
                                </div>
                                <div class="student-life__slider-item swiper-slide">
                                    <div class="student-life__item">
                                        <img src="<?php echo get_theme_file_uri() . '/assets/img/student-life/image-15.webp' ?>"
                                            alt="image-15" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="student-life__slider-nav swiper-button-next" role="button">
                            <i class="fa-solid fa-chevron-right"></i>
                        </div>
                        <div class="student-life__slider-nav swiper-button-prev" role="button">
                            <i class="fa-solid fa-chevron-left"></i>
                        </div>
                    </div>
                    <div class="student-life__slider-pagination swiper-pagination"></div>
                </div>
            </div>
        </section>
    </section>

    <!-- agenda -->
    <section class="agenda" id="agenda">
        <div class="agenda__bg-img">
            <img src="<?php echo get_theme_file_uri() . '/assets/img/event-page/agenda.jpg'; ?>"
                alt="agenda background" />
        </div>
        <div class="agenda__inner container">
            <div class="section-title">Agenda</div>
            <div class="agenda__main">
                <div class="agenda__main-table">
                    <div class="agenda__table-item agenda__table-time">03:30 - 04:00 PM</div>
                    <div class="agenda__table-item agenda__table-content">Welcome parents and students</div>
                    <div class="agenda__table-item agenda__table-time">04:00 - 04:30 PM</div>
                    <div class="agenda__table-item agenda__table-content">“THE UNSEEN IDEA” Seminar</div>
                    <div class="agenda__table-item agenda__table-time">05:00 - 05:30 PM</div>
                    <div class="agenda__table-item agenda__table-content">School tour</div>
                    <div class="agenda__table-item agenda__table-time">05:30 PM</div>
                    <div class="agenda__table-item agenda__table-content">Closing</div>
                </div>
            </div>
        </div>
    </section>

    <section class="main__background"
        style="background-image: url(<?php echo get_theme_file_uri() . '/assets/img/video-for-school-bg.png' ?>)">
        <section class="message" id="about-sna">
            <div class="message-title container">
                <h2 class="section-title">Giới thiệu về SNA</h2>
            </div>
            <div class="message__inner container">
                <div class="message__content message__left">
                    <img src="<?php echo get_theme_file_uri() . '/assets/img/event-page/about-sna.png' ?>"
                        alt="school image" width="550" height="398" />
                </div>
                <div class="message__content message__right">
                    <div class="message__content-main">
                        <div class="message__content-title">
                            <h4 class="message__content-headline">Trường Quốc Tế IB Tại Hồ Chí Minh</h4>
                            <h3 class="message__content-school">TRƯỜNG QUỐC TẾ BẮC MỸ (SNA)</h3>
                        </div>
                        <p class="message__content-body">
                            Tọa lạc tại đường số 20, khu dân cư Him Lam, huyện Bình Chánh, TP.Hồ Chí Minh, trường giảng
                            dạy từ bậc Tiểu học
                            đến
                            bậc Trung học Phổ thông là lựa chọn của nhiều phụ huynh khi tìm kiếm một môi trường học quốc
                            tế chất lượng cao
                            cho
                            trẻ.
                            <br />
                            &nbsp;
                        </p>
                        <div class="message__content-cta btn-cta btn-cta--highlight-invert">
                            <div class="btn-hover"></div>
                            <a
                                href="/event-sna/?utm_source=tos&utm_medium=organic&utm_campaign=openday&utm_content=openday2802">
                                <span>Register Now</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="about-us">
            <div class="about-us__inner container">
                <h1 class="section-title">The School for Future Leaders</h1>
                <div class="about-us__slider-outer">
                    <div class="about-us__slider swiper">
                        <div class="about-us__slider-wrapper swiper-wrapper">
                            <div class="about-us__slider-item swiper-slide">
                                <div class="about-us__item-image">
                                    <img src="<?php echo get_theme_file_uri() . '/assets/img/about-us/graduate.webp'; ?>"
                                        alt="graduate icon" loading="lazy" width="85.734" height="48" />
                                    <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                                </div>
                                <div class="about-us__item-headline--md">18+</div>
                                <div class="about-us__item-description">
                                    years of excellence
                                </div>
                            </div>
                            <div class="about-us__slider-item swiper-slide">
                                <div class="about-us__item-image">
                                    <img src="<?php echo get_theme_file_uri() . '/assets/img/about-us/ib.webp'; ?>"
                                        width="74.873" height="55" alt="graduate icon" loading="lazy" />
                                    <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                                </div>
                                <div class="about-us__item-headline--md">1 IN ONLY 3</div>
                                <div class="about-us__item-description">
                                    IB continuum schools in HCM
                                </div>
                            </div>
                            <div class="about-us__slider-item swiper-slide">
                                <div class="about-us__item-image">
                                    <img src="<?php echo get_theme_file_uri() . '/assets/img/about-us/college-acceptance.webp'; ?>"
                                        alt="college acceptance icon" loading="lazy" />
                                    <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                                </div>
                                <div class="about-us__item-headline--md">100%</div>
                                <div class="about-us__item-description">
                                    College acceptance rate
                                </div>
                            </div>
                            <div class="about-us__slider-item swiper-slide">
                                <div class="about-us__item-image">
                                    <img src="<?php echo get_theme_file_uri() . '/assets/img/about-us/co-curricular.webp'; ?>"
                                        alt="co curricular icon" loading="lazy" />
                                    <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                                </div>
                                <div class="about-us__item-headline--md">50+</div>
                                <div class="about-us__item-description">
                                    Co-curricular Activities
                                </div>
                            </div>
                            <div class="about-us__slider-item swiper-slide">
                                <div class="about-us__item-image">
                                    <img src="<?php echo get_theme_file_uri() . '/assets/img/icons/book-a-tour.webp'; ?>"
                                        alt="boarding icon" loading="lazy" />
                                    <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                                </div>
                                <div class="about-us__item-headline--md">1st</div>
                                <div class="about-us__item-description">
                                    boarding school in Saigon South
                                </div>
                            </div>
                            <div class="about-us__slider-item swiper-slide">
                                <div class="about-us__item-image">
                                    <img src="<?php echo get_theme_file_uri() . '/assets/img/about-us/graduate.webp'; ?>"
                                        alt="graduate icon" loading="lazy" width="85.734" height="48" />
                                    <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                                </div>
                                <div class="about-us__item-headline--md">18+</div>
                                <div class="about-us__item-description">
                                    years of excellence
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="sharing__slider-pagination swiper-pagination"></div>
                    <div class="about-us__slider-nav swiper-button-next" role="button">
                        <img src="<?php echo get_theme_file_uri() . '/assets/img/icons/chevron-right.webp'; ?>"
                            alt="right button" width="24" height="24" />
                    </div>
                    <div class="about-us__slider-nav swiper-button-prev" role="button">
                        <img src="<?php echo get_theme_file_uri() . '/assets/img/icons/chevron-left.webp'; ?>"
                            alt="left button" width="24" height="24" />
                    </div>
                </div>
            </div>
        </section>
        <!-- video for school -->
        <section class="videos">
            <div class="videos__inner container">
                <h4 class="section-title">STUDENT LIFE</h4>
                <div class="videos__main">
                    <div class="video__player">
                        <div class="video__player-main">
                            <iframe id="video_play" width="100%" height="405"
                                src="https://www.youtube.com/embed/1HI_bnHLDms?"
                                title="DISCOVER OUR CAMPUS – WHERE LEARNING COMES TO LIFE" frameborder="0"
                                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        </div>
                    </div>
                    <!-- <div class="video__item" data-video-id='pvyJbdPlJzk' data-video="https://www.youtube.com/embed/pvyJbdPlJzk"
              data-title="2023-2024 SCHOOL YEAR RECAP">
              <div class="video__item-thumbnail">
                <img src="assets/img/videos/video-2.JPG" alt="video 2" />
              </div>
              <div class="video__item-control">
                <img src="assets/img/icons/play-btn.webp" alt="play button" width="72" height="72" />
              </div>
            </div>
            <div class="video__item" data-video-id='Egfo_6wXMdY' data-video="https://www.youtube.com/embed/Egfo_6wXMdY"
              data-title="A HEARTWARMING HOMECOMING: ALUMNA RETURNS TO SNA">
              <div class="video__item-thumbnail">
                <img src="assets/img/videos/video-3.JPG" alt="video 3" />
              </div>
              <div class="video__item-control">
                <img src="assets/img/icons/play-btn.webp" alt="play button" width="72" height="72" />
              </div>
            </div>
            <div class="video__item" data-video-id='N2u_i9P7VdQ' data-video="https://www.youtube.com/embed/N2u_i9P7VdQ"
              data-title="EP 1: PEER PRESSURE | AMONG US PODCAST">
              <div class="video__item-thumbnail">
                <img src="assets/img/videos/video-4.JPG" alt="video 4" />
              </div>
              <div class="video__item-control">
                <img src="assets/img/icons/play-btn.webp" alt="play button" width="72" height="72" />
              </div>
            </div> -->
                </div>
            </div>
        </section>

        <!-- Accreditation & partners -->
        <section class="anp">
            <div class="anp__inner container">
                <div class="section-title">ACCREDITATION & PARTNERS</div>
                <div class="anp__slider-outer">
                    <div class="anp__main-list anp__slider swiper">
                        <div class="swiper-wrapper">
                            <div class="anp__list-item anp__slider-item swiper-slide">
                                <img src="<?php echo get_theme_file_uri() . '/assets/img/anp/ib-program-logo.webp'; ?>"
                                    alt="ib program logo" />
                            </div>
                            <div class="anp__list-item anp__slider-item swiper-slide">
                                <img src="<?php echo get_theme_file_uri() . '/assets/img/anp/ib-continuum-logo.webp'; ?>"
                                    alt="ib continuum logo" />
                            </div>
                            <div class="anp__list-item anp__slider-item swiper-slide">
                                <img src="<?php echo get_theme_file_uri() . '/assets/img/anp/05-WASC-1.webp'; ?>"
                                    alt="owasc logo" />
                            </div>
                            <div class="anp__list-item anp__slider-item swiper-slide">
                                <img src="<?php echo get_theme_file_uri() . '/assets/img/anp/CIS_Member-FULL_icon-2.webp'; ?>"
                                    alt="cis logo" />
                            </div>
                            <div class="anp__list-item anp__slider-item swiper-slide">
                                <img src="<?php echo get_theme_file_uri() . '/assets/img/anp/https___cdn.evbuc.com_images_442205919_176375043000_1_original.jpg' ?>"
                                    alt="keep logo" />
                            </div>
                            <div class="anp__list-item anp__slider-item swiper-slide">
                                <img src="<?php echo get_theme_file_uri() . '/assets/img/anp/sisac.png'; ?>"
                                    alt="sisac logo" />
                            </div>
                        </div>
                    </div>
                    <div class="anp__slider-nav swiper-button-next" role="button">
                        <img src="<?php echo get_theme_file_uri() . '/assets/img/icons/chevron-right.webp'; ?>"
                            alt="right button" width="24" height="24" />
                    </div>
                    <div class="anp__slider-nav swiper-button-prev" role="button">
                        <img src="<?php echo get_theme_file_uri() . '/assets/img/icons/chevron-left.webp'; ?>"
                            alt="left button" width="24" height="24" />
                    </div>
                </div>
            </div>
        </section>
    </section>

    <section class="discount" id="discount">
        <div class="discount__bg-image">
            <img src="<?php echo get_theme_file_uri() . '/assets/img/event-page/discount-bg.png' ?>"
                alt="discount background">
        </div>
        <div class="discount__bg-overlay-solid"></div>
        <div class="discount__bg-overlay"></div>
        <div class="discount__bg-effect">
            <img src="<?php echo get_theme_file_uri() . '/assets/img/event-page/discount-effect.png' ?>"
                alt="discount-effect">
        </div>
        <div class="discount__inner container">
            <div class="discount__content">
                <h3 class="discount__content-headline">
                    TUITION DISCOUNTS OF UP TO 30%.
                </h3>
                <p class="discount__content-text">When registering to participate in the event.</p>
                <div class="discount__content-cta">
                    <div class="btn-cta btn-cta--primary">
                        <div class="btn-hover"></div>
                        <a
                            href="https://sna.edu.vn/vi/dat-lich-tham-quan-truong?utm_source=website&utm_medium=non-paid&utm_campaign=website_en_cta_box&utm_content=book_a_tour">
                            <span>Đăng Ký Tham Dự</span>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="consultation">
        <div class="consultation__bg-image">
            <img src="<?php echo get_theme_file_uri() . '/assets/img/event-page/consultation-bg.png' ?>"
                alt="consultation background">
        </div>
        <div class="consultation__bg-overlay-solid"></div>
        <div class="consultation__bg-overlay"></div>
        <div class="consultation__bg-effect">
            <img src="<?php echo get_theme_file_uri() . '/assets/img/event-page/consultation-effect.png' ?>"
                alt="consultation-effect">
        </div>
        <div class="consultation__inner">
            <div class="consultation__main consultation__main-left">
                <div class="consultation__main-event">
                    <div class="consultation__event-topic">THE UNSEEN IDEA</div>
                    <div class="consultation__event-headline">Step into the Minds<br /> of Young Creators</div>
                    <div class="consultation__event-details">03:30 PM | Thursday, March 20</div>
                </div>
            </div>
            <div class="consultation__main consultation__main-right">
                <form class="consultation__main-form">
                    <div class="consultation__form-headline">REGISTER FOR CONSULTATION</div>
                    <div class="consultation__form-instruction">Dear parents, please fill in the information below</div>
                    <div class="consultation__form-fieldset">
                        <input type="text" name="fullname" id="fullname" placeholder="Full name" required />
                        <input type="tel" name="phone" id="phone" placeholder="Phone number" required />
                        <input type="email" name="email" id="email" placeholder="Email" required />
                        <textarea rows="3" name="message" id="message" placeholder="Message"></textarea>
                    </div>
                    <div class="consultation__form-captcha g-recaptcha" data-sitekey="YOUR_SITE_KEY"></div>
                    <button class="consultation__form-submit">
                        Send Information
                    </button>
                    <div class="consultation__form-note">The admissions department will contact the parents as soon as
                        possible.</div>
                </form>
            </div>
        </div>
    </section>

    <section class="sharing">
        <div class="sharing__bg-overlay">
            <img src="<?php echo get_theme_file_uri() . '/assets/img/logo-eagle.webp'; ?>" alt="logo eagle" />
        </div>
        <div class="sharing__inner container">
            <div class="section-title">SHARING FROM PARENTS</div>
            <div class="sharing__slider swiper">
                <div class="sharing__slider-wrapper swiper-wrapper">
                    <div class="sharing__slide-item swiper-slide">
                        <div class="sharing__item">
                            <div class="sharing__item-content">
                                <div class="sharing__item-quote-icon">
                                    <img src="<?php echo get_theme_file_uri() . '/assets/img/icons/quote-icon.webp'; ?>"
                                        alt="quote icon" />
                                </div>
                                <div class="sharing__item-testimonial">
                                    My children always tell me about what they have experienced at school. They have
                                    talked to me about
                                    Climate change; Global warming; How much forest fires affect the Earth's
                                    environment; Plastic waste;
                                    Earth Hour,... Those global and major topics have become normal in my household. And
                                    for that, I
                                    must thank the dedicated teachers at SNA for their intuitive and vivid lessons.
                                </div>
                                <div class="sharing__item-divider"></div>
                                <div class="sharing__item-parent">
                                    <div class="sharing__parent-name">
                                        Mrs. Pham Thi Thanh Van
                                    </div>
                                    <div class="sharing__parent-title">Parent</div>
                                </div>
                            </div>
                            <div class="sharing__item-parent-img">
                                <img src="<?php echo get_theme_file_uri() . '/assets/img/sharing/parent-img.png'; ?>"
                                    alt="" />
                            </div>
                        </div>
                    </div>
                    <div class="sharing__slide-item swiper-slide">
                        <div class="sharing__item">
                            <div class="sharing__item-content">
                                <div class="sharing__item-quote-icon">
                                    <img src="<?php echo get_theme_file_uri() . '/assets/img/icons/quote-icon.webp'; ?>"
                                        alt="quote icon" />
                                </div>
                                <div class="sharing__item-testimonial">
                                    When I first visited the school, which I had known through a lot of research and
                                    through
                                    acquaintances, the spacious facilities, and the learning environment here were the 2
                                    main things
                                    that captured my heart. In addition, the teachers and staff treated me very kindly.
                                    They all have
                                    great qualifications and characteristics, which makes me trust them to take care of
                                    my child’s
                                    education.
                                </div>
                                <div class="sharing__item-divider"></div>
                                <div class="sharing__item-parent">
                                    <div class="sharing__parent-name">
                                        Mrs. Ko Eun Kyung
                                    </div>
                                    <div class="sharing__parent-title">Parent</div>
                                </div>
                            </div>
                            <div class="sharing__item-parent-img">
                                <img src="<?php echo get_theme_file_uri() . '/assets/img/sharing/parent-img-2.jpg'; ?>"
                                    alt="" />
                            </div>
                        </div>
                    </div>
                    <div class="sharing__slide-item swiper-slide">
                        <div class="sharing__item">
                            <div class="sharing__item-content">
                                <div class="sharing__item-quote-icon">
                                    <img src="<?php echo get_theme_file_uri() . '/assets/img/icons/quote-icon.webp'; ?>"
                                        alt="quote icon" />
                                </div>
                                <div class="sharing__item-testimonial">
                                    I have seen great improvements in my children as they have become more independent
                                    and more open to
                                    communicate. Even I was surprised as to how much she has changed in just 2 semesters
                                    studying at
                                    SNA.
                                </div>
                                <div class="sharing__item-divider"></div>
                                <div class="sharing__item-parent">
                                    <div class="sharing__parent-name">
                                        Mrs. Bui Thuy Hanh
                                    </div>
                                    <div class="sharing__parent-title">Parent</div>
                                </div>
                            </div>
                            <div class="sharing__item-parent-img">
                                <img src="<?php echo get_theme_file_uri() . '/assets/img/sharing/parent-img-3.png'; ?>"
                                    alt="" />
                            </div>
                        </div>
                    </div>

                </div>
                <div class="sharing__slider-pagination swiper-pagination"></div>
                <div class="sharing__slider-nav swiper-button-next" role="button">
                    <img src="<?php echo get_theme_file_uri() . '/assets/img/icons/chevron-right.webp'; ?>"
                        alt="right button" />
                </div>
                <div class="sharing__slider-nav swiper-button-prev" role="button">
                    <img src="<?php echo get_theme_file_uri() . '/assets/img/icons/chevron-left.webp'; ?>"
                        alt="left button" />
                </div>
            </div>
        </div>
    </section>
</main>

<div class="to-top" id="scrollToTopBtn">
    <i class="fa-solid fa-chevron-up"></i>
</div>

<div class="zalo-chat-widget" data-oaid="2120951076949421751" data-welcome-message="Rất vui khi được hỗ trợ bạn!"
    data-autopopup="0" data-width="" data-height="">
</div>

<?php
get_footer()
    ?>