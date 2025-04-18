<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>SNA Saigon South Campus</title>
    <meta name="description"
        content="SNA is 1 of 6 IB Continuum Schools in Vietnam, offering Grade 1-12 programs with a focus on holistic, student-centered learning. Graduates excel at top universities worldwide." />

    <meta property="og:title" content="SNA Saigon South Campus" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://sna.edu.vn/" />
    <meta property="og:image" content="<?php echo get_theme_file_uri() . '/assets/img/meta-thumb.jpg'; ?>"
        alt="assets/img/meta-thumb.jpg" />
    <meta property="og:image:alt" content="SNA Saigon South Campus" />

    <meta property="twitter:title" content="SNA Saigon South Campus" />
    <meta property="twitter:url" content="https://sna.edu.vn/" />
    <meta property="twitter:image" content="<?php echo get_theme_file_uri() . '/assets/img/meta-thumb.jpg'; ?>"
        alt="assets/img/meta-thumb.jpg" />
    <meta property="twitter:image:alt" content="SNA Saigon South Campus" />
    <?php wp_head(); ?>
</head>

<body>
    <?php if (is_front_page() or is_page('news-page')) { ?>

    <?php } ?>

    <?php if (is_page('event-page')) { ?>
        <header class="header">
            <nav class="header__main">
                <div class="header__main-inner container">
                    <a href="/" class="header__main-logo header__main-link">
                        <picture>
                            <source media="(min-width:576px)"
                                srcset="<?php echo get_theme_file_uri() . '/assets/img/logo-sna.webp' ?>; " />
                            <source media="(min-width:0px)"
                                srcset="<?php echo get_theme_file_uri() . '/assets/img/logo-sna-mb.svg' ?>; " />
                            <img src="<?php echo get_theme_file_uri() . '/assets/img/logo-sna.webp'; ?>" width="207"
                                height="40" alt="SNA logo" />
                        </picture>
                    </a>
                    <!-- <a class="header__main-language dropdown-toggle" href="#" role="button" id="dropdownLanguage"
          data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <div class="header__language-flag">
            <img src="assets/img/icons/us-flag.webp" width="24" height="16" alt="us flag" />
          </div>
          <div class="header__language-dropdown">
            <i class="fa-solid fa-chevron-down"></i>
          </div>
        </a>
        <div class="header__languague-dropdown dropdown-menu" aria-labelledby="dropdownLanguage">
          <a class="dropdown-item" href="/">
            <img src="assets/img/icons/us-flag.webp" width="24" height="16" alt="us flag" />
            English
          </a>
          <a class="dropdown-item" href="/vi/">
            <img src="assets/img/icons/vn-flag.webp" width="24" height="16" alt="vi flag" />
            Vietnamese
          </a>
          <a class="dropdown-item" href="/kr/">
            <img src="assets/img/icons/kr-flag.webp" width="24" height="16" alt="kr flag" />
            Korean
          </a> 
        </div> -->
                    <div class="header__main-actions">
                        <a class="header__action-item btn-action--invert"
                            href="https://sna.edu.vn/vi/dat-lich-tham-quan-truong/">
                            Register Now
                        </a>
                        <div class="header__action-item header__action-hamburger">
                            <img src="<?php echo get_theme_file_uri() . '/assets/img/icons/hamburger-icon.webp'; ?>"
                                alt="menu icon" width="24" height="24" />
                        </div>
                    </div>
                    <ul class="header__main-menu">
                        <li class="header__menu-item">
                            <div class="header__menu-item-text">
                                <a href="#topic" class="header__menu-toplink">Event Content</a>
                                <i class="fa-solid fa-chevron-down"></i>
                            </div>
                        </li>
                        <li class="header__menu-item">
                            <div class="header__menu-item-text">
                                <a href="#agenda" class="header__menu-toplink">Agenda</a>
                                <i class="fa-solid fa-chevron-down"></i>
                            </div>
                        </li>
                        <li class="header__menu-item">
                            <div class="header__menu-item-text">
                                <a href="#about-sna" class="header__menu-toplink">About Us</a>
                                <i class="fa-solid fa-chevron-down"></i>
                            </div>
                        </li>
                        <li class="header__menu-item">
                            <div class="header__menu-item-text">
                                <a href="#discount" class="header__menu-toplink">Register to Participate</a>
                                <i class="fa-solid fa-chevron-down"></i>
                            </div>
                        </li>
                        </li>
                        <div class="header__menu-close">
                            <img src="<?php echo get_theme_file_uri() . '/assets/img/icons/close-icon.webp'; ?>"
                                alt="close icon" width="24" height="24" />
                        </div>
                    </ul>
                </div>
            </nav>
        </header>
    <?php } else { ?>
        <header class="header">
            <div class="header__topbar">
                <div class="header__topbar-inner container">
                    <a href="https://snamarianapolis.edu.vn/" class="header__topbar-campus">SNA Marianapolis Campus</a>
                    <div class="header__topbar-contact">
                        <a class="header__topbar-contact-details" href="tel:0964466014">
                            <img src="<?php echo get_theme_file_uri() . '/assets/img/icons/telephone-white.webp'; ?>"
                                alt="phone icon" />
                            <span>0964 466 014</span>
                        </a>
                    </div>
                    <div class="header__topbar-cta">
                        <!-- <a class="header__topbar-cta-item btn-action"
            href="/register-for-consultations?utm_source=website&utm_medium=non-paid&utm_campaign=website_en_header&utm_content=enquire_now">Enquire
            Now</a> -->
                        <a class="header__topbar-cta-item btn-action"
                            href="/register-for-consultations?utm_source=website&utm_medium=non-paid&utm_campaign=website_en_header&utm_content=enquire_now">Enquire
                            Now</a>


                        <a class="header__topbar-cta-item btn-action"
                            href="https://sna.edu.vn/vi/dat-lich-tham-quan-truong?utm_source=website&utm_medium=non-paid&utm_campaign=website_en_header&utm_content=book_a_tour">Book
                            a Tour</a>
                    </div>
                    <a class="header__main-language dropdown-toggle" href="#" role="button" id="dropdownLanguage"
                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <div class="header__language-flag">
                            <img src="<?php echo get_theme_file_uri() . '/assets/img/icons/us-flag.webp' ?>" width="24"
                                height="16" alt="us flag" />
                        </div>
                        <div class="header__language-dropdown">
                            <i class="fa-solid fa-chevron-down"></i>
                        </div>
                    </a>
                    <div class="header__languague-dropdown dropdown-menu" aria-labelledby="dropdownLanguage">
                        <a class="dropdown-item" href="/">
                            <img src="<?php echo get_theme_file_uri() . '/assets/img/icons/us-flag.webp' ?>" width="24"
                                height="16" alt="us flag" />
                            English
                        </a>
                        <a class="dropdown-item" href="/vi/">
                            <img src="<?php echo get_theme_file_uri() . '/assets/img/icons/vn-flag.webp' ?>" width="24"
                                height="16" alt="vi flag" />
                            Vietnamese
                        </a>
                        <a class="dropdown-item" href="/kr/">
                            <img src="<?php echo get_theme_file_uri() . '/assets/img/icons/kr-flag.webp' ?>" width="24"
                                height="16" alt="kr flag" />
                            Korean
                        </a>
                    </div>
                </div>
            </div>
            <nav class="header__main">
                <div class="header__main-inner container">
                    <a href="/" class="header__main-logo header__main-link">
                        <picture>
                            <source media="(min-width:576px)"
                                srcset="<?php echo get_theme_file_uri() . '/assets/img/logo-sna.webp'; ?>" />
                            <source media="(min-width:0px)"
                                srcset="<?php echo get_theme_file_uri() . '/assets/img/logo-sna-mb.svg'; ?>" />
                            <img src="<?php echo get_theme_file_uri() . '/assets/img/logo-sna-mb.svg'; ?>" width="207"
                                height="40" alt="SNA logo" />
                        </picture>
                    </a>
                    <a class="header__main-language dropdown-toggle" href="#" role="button" id="" data-bs-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false" ariaded="false">
                        <div class="header__language-flag">
                            <img src="<?php echo get_theme_file_uri() . '/assets/img/icons/us-flag.webp'; ?>" width="24"
                                height="16" alt="us flag" />
                        </div>
                        <div class="header__language-dropdown">
                            <i class="fa-solid fa-chevron-down"></i>
                        </div>
                    </a>
                    <div class="header__languague-dropdown dropdown-menu" aria-labelledby="dropdownLanguage">
                        <a class="dropdown-item" href="/">
                            <img src="<?php echo get_theme_file_uri() . '/assets/img/icons/us-flag.webp' ?>" width="24"
                                height="16" alt="us flag" />
                            English
                        </a>
                        <a class="dropdown-item" href="/vi/">
                            <img src="<?php echo get_theme_file_uri() . '/assets/img/icons/vn-flag.webp' ?>" width="24"
                                height="16" alt="vi flag" />
                            Vietnamese
                        </a>
                        <a class="dropdown-item" href="/kr/">
                            <img src="<?php echo get_theme_file_uri() . '/assets/img/icons/kr-flag.webp' ?>" width="24"
                                height="16" alt="kr flag" />
                            Korean
                        </a>
                    </div>
                    <div class="header__main-actions">
                        <a class="header__action-item btn-action--primary-inset" href="tel:0964466014">
                            Advise Now
                        </a>
                        <a class="header__action-item btn-action--invert"
                            href="https://sna.edu.vn/vi/dat-lich-tham-quan-truong/">
                            Book a Tour
                        </a>
                        <div class="header__action-item header__action-hamburger">
                            <img src="<?php echo get_theme_file_uri() . '/assets/img/icons/hamburger-icon.webp'; ?>"
                                alt="menu icon" width="24" height="24" />
                        </div>
                    </div>
                    <ul class="header__main-menu">
                        <li class="header__menu-item">
                            <div class="header__menu-item-text">
                                <a href="#" class="header__menu-toplink">Overview</a>
                                <i class="fa-solid fa-chevron-down"></i>
                            </div>
                            <ul class="header__submenu">
                                <li class="header__submenu-item">
                                    <div class="header__submenu-text">
                                        <a href="/welcome-to-sna-sai-gon-south-campus/">Welcome To SNA Saigon South
                                            Campus</a>
                                        <i class="fa-solid fa-chevron-right"></i>
                                    </div>
                                </li>
                                <li class="header__submenu-item">
                                    <div class="header__submenu-text">
                                        <a href="/accreditations-and-authorizations/">Accreditations And Authorizations</a>
                                        <i class="fa-solid fa-chevron-right"></i>
                                    </div>
                                </li>
                                <li class="header__submenu-item">
                                    <div class="header__submenu-text">
                                        <a href="/vision-and-mission/">Vision And Mission</a>
                                        <i class="fa-solid fa-chevron-right"></i>
                                    </div>
                                </li>
                                <li class="header__submenu-item">
                                    <a href="/facilities/" class="header__submenu-text">Facilities</a>
                                    <i class="fa-solid fa-chevron-right"></i>
                                </li>
                                <li class="header__submenu-item">
                                    <a href="/quick-facts/" class="header__submenu-text">Quick Facts</a>
                                    <i class="fa-solid fa-chevron-right"></i>
                                </li>
                                <li class="header__submenu-item">
                                    <a href="/e-brochure/" class="header__submenu-text">E-Brochure</a>
                                    <i class="fa-solid fa-chevron-right"></i>
                                </li>
                                <li class="header__submenu-item">
                                    <a href="/vr-tour/" class="header__submenu-text">VR Tour</a>
                                    <i class="fa-solid fa-chevron-right"></i>
                                </li>
                                <li class="header__submenu-item">
                                    <div class="header__submenu-text">
                                        <a href="https://snamarianapolis.edu.vn/">SNA Marianapolis Bien Hoa Campus</a>
                                        <i class="fa-solid fa-chevron-right"></i>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li class="header__menu-item">
                            <div class="header__menu-item-text">
                                <a href="/admissions-policies/" class="header__menu-toplink">Admission</a>
                                <i class="fa-solid fa-chevron-down"></i>
                            </div>
                            <ul class="header__submenu">
                                <li class="header__submenu-item">
                                    <div class="header__submenu-text">
                                        <a href="/parent-testimonials/">Parent Testimonials</a>
                                        <i class="fa-solid fa-chevron-right"></i>
                                    </div>
                                </li>
                                <li class="header__submenu-item">
                                    <div class="header__submenu-text">
                                        <a href="/admissions-policies/">Admissions Policies</a>
                                        <i class="fa-solid fa-chevron-right"></i>
                                    </div>

                                    <ul class="header__submenu-children">
                                        <li class="header__submenu-child">
                                            <a href="/admissions-policies/admissions-procedures-pyp/"
                                                class="header__submenu-text">
                                                Admissions Procedures - PYP
                                            </a>
                                        </li>
                                        <li class="header__submenu-child">
                                            <a href="/admissions-policies/admissions-procedures-myp/"
                                                class="header__submenu-text">
                                                Admissions Procedures - MYP
                                            </a>
                                        </li>
                                        <li class="header__submenu-child">
                                            <a href="/admissions-policies/admissions-procedures-dp/"
                                                class="header__submenu-text">
                                                Admissions Procedures - DP
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="header__submenu-item">
                                    <a href="/wp-content/uploads/2024/04/Don-xin-nhap-hoc-04.2024-demo.pdf"
                                        class="header__submenu-text">Application Forms</a>
                                    <i class="fa-solid fa-chevron-right"></i>
                                </li>
                                <li class="header__submenu-item">
                                    <a href="/tuition-fees/" class="header__submenu-text">Tuition & Fee</a>
                                    <i class="fa-solid fa-chevron-right"></i>
                                </li>
                                <li class="header__submenu-item">
                                    <a href="/e-handbook/" class="header__submenu-text">E-hand Book</a>
                                    <i class="fa-solid fa-chevron-right"></i>
                                </li>
                                <li class="header__submenu-item">
                                    <a href="/wp-content/uploads/2024/09/Brochure-SNA-NSG-24.pdf"
                                        class="header__submenu-text">Brochure</a>
                                    <i class="fa-solid fa-chevron-right"></i>
                                </li>
                            </ul>
                        </li>
                        <li class="header__menu-item">
                            <div class="header__menu-item-text">
                                <a href="/learning/" class="header__menu-toplink">Learning</a>
                                <i class="fa-solid fa-chevron-down"></i>
                            </div>
                            <ul class="header__submenu">
                                <li class="header__submenu-item">
                                    <div class="header__submenu-text">
                                        <a href="/learning/primary-years-programme/">Primary Years Programme</a>
                                        <i class="fa-solid fa-chevron-right"></i>
                                    </div>
                                </li>
                                <li class="header__submenu-item">
                                    <div class="header__submenu-text">
                                        <a href="/learning/middle-years-programme/">Middle Years Programme</a>
                                        <i class="fa-solid fa-chevron-right"></i>
                                    </div>
                                </li>
                                <li class="header__submenu-item">
                                    <a href="/learning/diploma-programme/" class="header__submenu-text">Diploma
                                        Programme</a>
                                    <i class="fa-solid fa-chevron-right"></i>
                                </li>
                                <li class="header__submenu-item">
                                    <div class="header__submenu-text">
                                        <a href="/student-support-services/">Student Support Services</a>
                                        <i class="fa-solid fa-chevron-right"></i>
                                    </div>

                                    <ul class="header__submenu-children">
                                        <li class="header__submenu-child">
                                            <a href="/student-support-services/#counseling" class="header__submenu-text">
                                                Counseling Service
                                            </a>
                                        </li>
                                        <li class="header__submenu-child">
                                            <a href="/student-support-services/#languages" class="header__submenu-text">
                                                Languages Support
                                            </a>
                                        </li>
                                        <li class="header__submenu-child">
                                            <a href="/student-support-services/#inclusion" class="header__submenu-text">
                                                Inclusion Support
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="header__submenu-item">
                                    <div class="header__submenu-text">
                                        <a href="/learning/co-curricular-activities/">Co-curricular Activities</a>
                                        <i class="fa-solid fa-chevron-right"></i>
                                    </div>
                                </li>
                                <li class="header__submenu-item">
                                    <a href="/learning/school-calendar/" class="header__submenu-text">School Calendar</a>
                                    <i class="fa-solid fa-chevron-right"></i>
                                </li>
                            </ul>
                        </li>
                        <li class="header__menu-item">
                            <div class="header__menu-item-text">
                                <a href="#" class="header__menu-toplink">Student Life</a>
                                <i class="fa-solid fa-chevron-down"></i>
                            </div>
                            <ul class="header__submenu">
                                <li class="header__submenu-item">
                                    <a href="/residential-life/" class="header__submenu-text">Boarding</a>
                                    <i class="fa-solid fa-chevron-right"></i>
                                </li>
                                <li class="header__submenu-item">
                                    <a href="/food-service/" class="header__submenu-text">Food Service</a>
                                    <i class="fa-solid fa-chevron-right"></i>
                                </li>
                                <li class="header__submenu-item">
                                    <div class="header__submenu-text">
                                        <a href="/child-protection-and-safeguarding/">Child Protection And Safeguarding</a>
                                        <i class="fa-solid fa-chevron-right"></i>
                                    </div>
                                </li>
                                <li class="header__submenu-item">
                                    <a href="/transportation/" class="header__submenu-text">Transportation</a>
                                    <i class="fa-solid fa-chevron-right"></i>
                                </li>
                                <li class="header__submenu-item">
                                    <a href="/yearbook/" class="header__submenu-text">Yearbook</a>
                                    <i class="fa-solid fa-chevron-right"></i>
                                </li>
                            </ul>
                        </li>
                        <li class="header__menu-item">
                            <div class="header__menu-item-text">
                                <a href="#" class="header__menu-toplink">Community</a>
                                <i class="fa-solid fa-chevron-down"></i>
                            </div>
                            <ul class="header__submenu">
                                <li class="header__submenu-item">
                                    <a href="/governance-board/" class="header__submenu-text">Governance Board</a>
                                    <i class="fa-solid fa-chevron-right"></i>
                                </li>
                                <li class="header__submenu-item">
                                    <div class="header__submenu-text">
                                        <a href="/school-leadership-team/">School Leadership Team</a>
                                        <i class="fa-solid fa-chevron-right"></i>
                                    </div>
                                </li>
                                <li class="header__submenu-item">
                                    <div class="header__submenu-text">
                                        <a href="/faculty/">Faculty</a>
                                        <i class="fa-solid fa-chevron-right"></i>
                                    </div>
                                    <ul class="header__submenu-children">
                                        <li class="header__submenu-child">
                                            <a href="/pyp-teachers/" class="header__submenu-text">PYP Teachers</a>
                                        </li>
                                        <li class="header__submenu-child">
                                            <a href="/myp-teachers/" class="header__submenu-text">MYP Teachers</a>
                                        </li>
                                        <li class="header__submenu-child">
                                            <a href="/dp-teachers/" class="header__submenu-text">DP Teachers</a>
                                        </li>
                                        <li class="header__submenu-child">
                                            <a href="/education-specialist/" class="header__submenu-text">
                                                Education Specialist
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="header__submenu-item">
                                    <a href="/alumni/" class="header__submenu-text">Alumni</a>
                                    <i class="fa-solid fa-chevron-right"></i>
                                </li>
                            </ul>
                        </li>
                        <li class="header__menu-item">
                            <div class="header__menu-item-text">
                                <a href="#" class="header__menu-toplink">Information</a>
                                <i class="fa-solid fa-chevron-down"></i>
                            </div>
                            <ul class="header__submenu">
                                <li class="header__submenu-item">
                                    <a href="<?php echo esc_url(site_url('index.php/event-page/')); ?>"
                                        class="header__submenu-text">Events</a>
                                    <i class="fa-solid fa-chevron-right"></i>
                                </li>
                                <li class="header__submenu-item">
                                    <a href="/announcement/" class="header__submenu-text">Announcement</a>
                                    <i class="fa-solid fa-chevron-right"></i>
                                </li>
                                <li class="header__submenu-item">
                                    <a href="/social-stream/" class="header__submenu-text">Social Stream</a>
                                    <i class="fa-solid fa-chevron-right"></i>
                                </li>
                                <li class="header__submenu-item">
                                    <a href="<?php echo site_url('index.php/news-page/'); ?>">News</a>
                                    <i class="fa-solid fa-chevron-right"></i>
                                </li>
                            </ul>
                        </li>

                        <li class="header__menu-item">
                            <div class="header__menu-item-text">
                                <a href="#" class="header__menu-toplink">Quick links</a>
                                <i class="fa-solid fa-chevron-down"></i>
                            </div>
                            <ul class="header__submenu">
                                <li class="header__submenu-item">
                                    <a href="https://search.follettsoftware.com/metasearch/ui/119925"
                                        class="header__submenu-text" target="_blank">SNA Destiny Library</a>
                                    <i class="fa-solid fa-chevron-right"></i>
                                </li>
                                <li class="header__submenu-item">
                                    <a href="https://sna.managebac.com/login" class="header__submenu-text"
                                        target="_blank">ManageBac</a>
                                    <i class="fa-solid fa-chevron-right"></i>
                                </li>
                                <li class="header__submenu-item">
                                    <a href="https://www.office.com/" class="header__submenu-text" target="_blank">Office
                                        365</a>
                                    <i class="fa-solid fa-chevron-right"></i>
                                </li>
                                <li class="header__submenu-item">
                                    <a href="https://sna-school.boxofbooks.io/auth/page/signin" class="header__submenu-text"
                                        target="_blank">Box of Books</a>
                                    <i class="fa-solid fa-chevron-right"></i>
                                </li>
                                <li class="header__submenu-item">
                                    <a href="/contact" class="header__submenu-text" target="_blank">Contact</a>
                                    <i class="fa-solid fa-chevron-right"></i>
                                </li>
                            </ul>
                        </li>
                        <li class="header__menu-item">
                            <div class="header__menu-item-text">
                                <a href="/careers/" class="header__menu-toplink">Careers</a>
                                <i class="fa-solid fa-chevron-down"></i>
                            </div>
                        </li>
                        </li>
                        <li class="header__menu-extend"><a href="https://snamarianapolis.edu.vn/">SNA Marianapolis
                                Campus</a></li>
                        <li class="header__menu-extend">
                            <div>Consulting hotline:</div>
                            <a class="header__action-item btn-action--invert" href="tel:0964466014">
                                <img src="<?php echo get_theme_file_uri() . '/assets/img/icons/telephone-blue.webp'; ?>"
                                    alt="telephone icon" />
                                0964 466 014
                            </a>
                        </li>
                        <div class="header__menu-close">
                            <img src="<?php echo get_theme_file_uri() . '/assets/img/icons/close-icon.webp'; ?>"
                                alt="close icon" width="24" height="24" />
                        </div>
                    </ul>
                </div>
            </nav>
        </header>
    <?php } ?>