<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/style.css? <?php echo wp_date('Y-m-d-H-i-s'); ?>" />
    <script>
        window.onload = () => {
            const logo = document.querySelector('.header-logo');
            const button = document.querySelector('.button');
            const navContainer = document.querySelector('.nav-container');
            window.addEventListener("scroll", () => {
                if (window.scrollY > 0) {
                    logo.classList.add('header-logo-scroll-down');
                    button.classList.add('button-scroll-down');
                    navContainer.classList.add('nav-container-scroll-down');
                } else {
                    logo.classList.remove('header-logo-scroll-down');
                    button.classList.remove('button-scroll-down');
                    navContainer.classList.remove('nav-container-scroll-down');
                }
            });
        }
    </script>
</head>

<body id="body-top">
    <?php get_header(); ?>

    <section class="hero-section">
        <div class="hero-container">
            <div class="hero-text">
                <div class="site-name-container">
                    <div class="pre-site-name">
                    </div>
                    <div class="site-name">
                        COACHING RIGHT NOW
                    </div>
                </div>
                <h1 class="hero-title">
                    Developing high performing
                    <div class="hero-deco">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/orange_underline.svg" alt="deco">
                        <div>teams</div>
                    </div>
                    for your business reality.
                </h1>
                <div class="hero-context">
                    We work with organizations who want to be ahead of the curve in developing their Leaders.
                </div>
            </div>
            <div class="hero-image-container">
                <div class="pre-hero-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/dots_orange_large_vertical.svg" alt="pre-hero-image">
                </div>
                <div class="hero-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/hero_section_1024x806.jpg" alt="hero-image">
                </div>
            </div>
        </div>
    </section>

    <section class="leader-section">
        <div class="leader-container">
            <div class="leader-image-container">
                <div class="leader-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/leader_section_800x772.jpg" alt="leader-image">
                </div>
                <div class="after-leader-image"></div>
            </div>

            <div class="leader-text">
                <h2 class="leader-title">
                    Coaching your
                    <div class="leader-deco">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/green_underline.svg" alt="deco">
                        <div>Core</div>
                    </div>

                    Leaders
                </h2>
                <div class="leader-context">
                    Core Leaders are critical to your success as an organization. And just like a human body is supported by a strong core, the same is true of businesses.
                    <br>
                    <br>
                    We help you develop your Core Leaders through coaching that is specific to your organization's culture and business results.
                </div>
            </div>
        </div>
    </section>

    <section class="stats-section">
        <div class="stats-container">
            <h1 class="stats-title">
                Coaching Right Now participants
                <div class="stats-deco">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/orange_circle.svg" alt="deco">
                    <div>report</div>
                </div>

            </h1>
            <div class="stats-grid">
                <div class="stats-grid-item">
                    <div class="stats-item-title">80%</div>
                    <div class="stats-item-text">
                        Are working on real-time challenges related to COVID-19 stress
                    </div>
                </div>
                <div class="stats-grid-item">
                    <div class="stats-item-title">97%</div>
                    <div class="stats-item-text">
                        Find coaching to be a valuable use of their time
                    </div>
                </div>
                <div class="stats-grid-item">
                    <div class="stats-item-title">98%</div>
                    <div class="stats-item-text">
                        Report that coaching helped them improve their ability to lead people
                    </div>
                </div>
                <div class="stats-grid-item">
                    <div class="stats-item-title">96%</div>
                    <div class="stats-item-text">
                        Feel more confident in their role because of coaching
                    </div>
                </div>
                <div class="stats-grid-item">
                    <div class="stats-item-title">96%</div>
                    <div class="stats-item-text">
                        Work on behavioral skills such as navigating change and communication
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="result-section">
        <div class="result-container">
            <div class="first-result-grid">
                <div class="result-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/result_section_795x467.jpg" alt="result-image">
                </div>
                <div class="result-text">
                    <h1 class="result-title">
                        Proven
                        <div class="result-deco">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/orange_circle.svg" alt="deco">
                            <div>results</div>
                        </div>
                    </h1>
                    <div class="result-context">
                        Every company is different in the way it grows or pivots with the times. That’s why the best solution for your business is an individualized approach that makes sense for your organization.
                    </div>
                </div>
            </div>

            <div class="second-result-grid">
                <div class="result-grid-item">
                    <div class="result-item-title-container">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/highly_personal.svg" alt="icon">
                        <div class="result-item-title">
                            Highly Personal
                        </div>
                    </div>
                    <div class="result-item-context">
                        We get to know you and what is important to your company. From there, we tailor leadership development solutions that fit your unique challenges, specific business goals, and culture.
                    </div>
                </div>

                <div class="result-grid-item">
                    <div class="result-item-title-container">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/scalable.svg" alt="icon">
                        <div class="result-item-title">
                            Scalable
                        </div>
                    </div>
                    <div class="result-item-context">
                        All coaching is delivered through flexible virtual platforms. Because of this, our one-on-one coaching programs are designed to support your Core Leaders and your entire organization worldwide.
                    </div>
                </div>

                <div class="result-grid-item">
                    <div class="result-item-title-container">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/proven.svg" alt="icon">
                        <div class="result-item-title">
                            Measurable ROI
                        </div>
                    </div>
                    <div class="result-item-context">
                        Our measurable success spans more than 55,000 coaching sessions, in over 58 countries. We also use real-time tracking and insights that show behavior change. As a result, we deliver business metrics and KPIs specific to your organization.
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="social-section">
        <div class="social-container">
            <h1 class="social-section-title">
                <div class="social-deco">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/green_underline.svg" alt="deco">
                    <div>Connect</div>
                </div>
                with @coachingrightnow
            </h1>
            <div class="social-main-grid">
                <div class="social-left-grid">
                    <a class="left-grid-item">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/social_left_1.png" alt="post-image">
                    </a>
                    <a class="left-grid-item">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/social_left_2.jpg" alt="post-image">
                    </a>
                    <div class="social-links">
                        <div class="social-links-title">
                            FOLLOW US ON:
                        </div>
                        <div class="social-links-grid">
                            <a class="links-item">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/linkedin.svg" alt="icon">
                            </a>
                            <a class="links-item">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/facebook.svg" alt="icon">
                            </a>
                            <a class="links-item">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/twitter.svg" alt="icon">
                            </a>
                        </div>
                    </div>
                </div>

                <a class="social-center-grid">
                    <div class="social-post-title">
                        <div class="social-post-title-icon">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/crn-150x150.png" alt="icon">
                        </div>
                        <div class="social-post-title-text">
                            Coaching Right Now
                        </div>
                    </div>
                    <div class="social-center-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/social_center.png" alt="post-image">
                    </div>
                    <div class="social-post-footer">
                        <div class="social-post-footer-item">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/meta_likes.svg" alt="icon">
                        </div>
                        <div class="social-post-footer-item">
                            25
                        </div>
                        <div class="social-post-footer-item">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/meta_comments.svg" alt="icon">
                        </div>
                        <div class="social-post-footer-item">
                            6
                        </div>
                    </div>
                </a>

                <div class="social-right-grid">
                    <a class="social-right-grid-story">
                        <div class="social-right-image">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/social_section_1024x683.jpg" alt="post-image">
                        </div>
                        <div class="social-right-text">
                            <div class="social-post-title">
                                <div class="social-post-title-icon">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/crn-150x150.png" alt="icon">
                                </div>
                                <div class="social-post-title-text">
                                    Coaching Right Now
                                </div>
                            </div>
                            <div class="social-right-context">
                                Have you been wondering how to develop your Core Leaders as they are working virtually?
                                Read more on our blog...
                                <br>
                                <br>
                                #humanresources #covid19 #virtualteams #leadershipcoaching
                            </div>
                            <div class="social-post-footer">
                                <div class="social-post-footer-item">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/meta_likes.svg" alt="icon">
                                </div>
                                <div class="social-post-footer-item">
                                    40
                                </div>
                                <div class="social-post-footer-item">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/meta_comments.svg" alt="icon">
                                </div>
                                <div class="social-post-footer-item">
                                    4
                                </div>
                            </div>
                        </div>
                    </a>
                    <div class="social-right-grid-post">
                        <a class="right-grid-item">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/social_right_1.jpg" alt="post-image">
                        </a>
                        <a class="right-grid-item">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/social_right_2.png" alt="post-image">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <?php get_footer(); ?>

</body>

</html>