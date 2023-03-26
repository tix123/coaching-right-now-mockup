<!DOCTYPE html>
<html>

<head>
    <title> <?php echo get_bloginfo("name"); ?> </title>
</head>

<body>

    <div class="nav-container">
        <a>
            <div class="header-logo">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-300x72.png" alt="logo">
            </div>
        </a>

        <div>
            <ul class="nav-bar">
                <li class="nav-item">
                    <a>
                        Why Us? ▾
                    </a>
                    <ul class="drop-menu">
                        <li class="drop-items">
                            <a>
                                Best Solution For You
                            </a>
                        </li>
                        <li class="drop-items">
                            <a>
                                Our Values
                            </a>
                        </li>
                        <li class="drop-items">
                            <a>
                                Our Coaches
                            </a>
                        </li>
                        <li class="drop-items">
                            <a>
                                Our Process
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a>
                        Core Programs
                    </a>
                </li>
                <li class="nav-item">
                    <a>
                        Core Leaders
                    </a>
                </li>
                <li class="nav-item">
                    <a>
                        How We Work ▾
                    </a>
                    <ul class="drop-menu">
                        <li class="drop-items">
                            <a>
                                Maximize Results
                            </a>
                        </li>
                        <li class="drop-items">
                            <a>
                                Partnering Together
                            </a>
                        </li>
                        <li class="drop-items">
                            <a>
                                How You Benefit
                            </a>
                        </li>
                        <li class="drop-items">
                            <a>
                                Case Studies
                            </a>
                        </li>
                        <li class="drop-items">
                            <a>
                                Our Results
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a>
                        Results ▾
                    </a>
                    <ul class="drop-menu">
                        <li class="drop-items">
                            <a>
                                Transform Growth to Success
                            </a>
                        </li>
                        <li class="drop-items">
                            <a>
                                Success Metrics
                            </a>
                        </li>
                        <li class="drop-items">
                            <a>
                                View Our Work
                            </a>
                        </li>
                        <li class="drop-items">
                            <a>
                                Client Success
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a>
                        About Us ▾
                    </a>
                    <ul class="drop-menu">
                        <li class="drop-items">
                            <a>
                                Team Overview
                            </a>
                        </li>
                        <li class="drop-items">
                            <a>
                                Our Team
                            </a>
                        </li>
                        <li class="drop-items">
                            <a>
                                More About Us
                            </a>
                        </li>
                        <li class="drop-items">
                            <a>
                                Join Us
                            </a>
                        </li>
                        <li class="drop-items">
                            <a>
                                Our Coaches
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a>
                        Resources ▾
                    </a>
                    <ul class="drop-menu">
                        <li class="drop-items">
                            <a>
                                Blog
                            </a>
                        </li>
                        <li class="drop-items">
                            <a>
                                Case Studies
                            </a>
                        </li>
                        <li class="drop-items">
                            <a>
                                News
                            </a>
                        </li>
                    </ul>
                </li>

            </ul>
        </div>

        <a>
            <div class="button">
                Connect with Us
            </div>
        </a>

        <button class="phone-size-menu-open" onclick="phoneSizeNavBarOpen()">
            MENU
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/menu_icon.svg" alt="icon">
        </button>

        <div class="phone-size-nav-bar">
            <div class="phone-size-nav-bar-top-grid">
                <a>
                    <div class="header-logo">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-300x72.png" alt="logo">
                    </div>
                </a>
                <button class="phone-size-menu-close" onclick="phoneSizeNavBarClose()">
                    CLOSE
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/close_icon.svg" alt="icon">
                </button>
            </div>

            <button class="phone-size-button">
                Connect with Us
            </button>

            <div class="phone-size-menu-grid">
                <div class="phone-size-menu-grid-item">
                    <a>Why Us?</a>
                    <button class="why-us-plus plus-icon display" onclick="whyUsMenuOpen()">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/plus_icon.svg" alt="plsu-icon">
                    </button>
                    <button class="why-us-minus minus-icon" onclick="whyUsMenuClose()">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/minus_icon.svg" alt="minus-icon">
                    </button>
                </div>
                <div class="why-us-menu phone-size-drop-menu">
                    <div class="drop-items">
                        <a>
                            Best Solution For You
                        </a>
                    </div>
                    <div class="drop-items">
                        <a>
                            Our Values
                        </a>
                    </div>
                    <div class="drop-items">
                        <a>
                            Our Coaches
                        </a>
                    </div>
                    <div class="drop-items">
                        <a>
                            Our Process
                        </a>
                    </div>
                </div>

                <div class="phone-size-menu-grid-item">
                    <a>
                        Core Programs
                    </a>
                </div>

                <div class="phone-size-menu-grid-item">
                    <a>
                        Core Leaders
                    </a>
                </div>

                <div class="phone-size-menu-grid-item">
                    <a>How We Work</a>
                    <button class="how-we-work-plus plus-icon display" onclick="howWeWorkMenuOpen()">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/plus_icon.svg" alt="plsu-icon">
                    </button>
                    <button class="how-we-work-minus minus-icon" onclick="howWeWorkMenuClose()">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/minus_icon.svg" alt="minus-icon">
                    </button>
                </div>
                <div class="how-we-work-menu phone-size-drop-menu">
                    <div class="drop-items">
                        <a>
                            Maximize Results
                        </a>
                    </div>
                    <div class="drop-items">
                        <a>
                            Partnering Together
                        </a>
                    </div>
                    <div class="drop-items">
                        <a>
                            How You Benefit
                        </a>
                    </div>
                    <div class="drop-items">
                        <a>
                            Case Studies
                        </a>
                    </div>
                    <div class="drop-items">
                        <a>
                            Our Results
                        </a>
                    </div>
                </div>

                <div class="phone-size-menu-grid-item">
                    <a>Results</a>
                    <button class="results-plus plus-icon display" onclick="resultsMenuOpen()">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/plus_icon.svg" alt="plsu-icon">
                    </button>
                    <button class="results-minus minus-icon" onclick="resultsMenuClose()">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/minus_icon.svg" alt="minus-icon">
                    </button>
                </div>
                <div class="results-menu phone-size-drop-menu">
                    <div class="drop-items">
                        <a>
                            Transform Growth to Success
                        </a>
                    </div>
                    <div class="drop-items">
                        <a>
                            Success Metrics
                        </a>
                    </div>
                    <div class="drop-items">
                        <a>
                            View Our Work
                        </a>
                    </div>
                    <div class="drop-items">
                        <a>
                            Client Success
                        </a>
                    </div>
                </div>

                <div class="phone-size-menu-grid-item">
                    <a>About Us</a>
                    <button class="about-us-plus plus-icon display" onclick="aboutUsMenuOpen()">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/plus_icon.svg" alt="plsu-icon">
                    </button>
                    <button class="about-us-minus minus-icon" onclick="aboutUsMenuClose()">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/minus_icon.svg" alt="minus-icon">
                    </button>
                </div>
                <div class="about-us-menu phone-size-drop-menu">
                    <div class="drop-items">
                        <a>
                            Team Overview
                        </a>
                    </div>
                    <div class="drop-items">
                        <a>
                            Our Team
                        </a>
                    </div>
                    <div class="drop-items">
                        <a>
                            More About Us
                        </a>
                    </div>
                    <div class="drop-items">
                        <a>
                            Join Us
                        </a>
                    </div>
                    <div class="drop-items">
                        <a>
                            Our Coaches
                        </a>
                    </div>
                </div>

                <div class="phone-size-menu-grid-item">
                    <a>Resources</a>
                    <button class="resources-plus plus-icon display" onclick="resourcesMenuOpen()">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/plus_icon.svg" alt="plsu-icon">
                    </button>
                    <button class="resources-minus minus-icon" onclick="resourcesMenuClose()">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/minus_icon.svg" alt="minus-icon">
                    </button>
                </div>
                <div class="resources-menu phone-size-drop-menu">
                    <div class="drop-items">
                        <a>
                            Blog
                        </a>
                    </div>
                    <div class="drop-items">
                        <a>
                            Case Studies
                        </a>
                    </div>
                    <div class="drop-items">
                        <a>
                            News
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script>
        // Control phone size menu
        const phoneSizeNavBar = document.querySelector(".phone-size-nav-bar");

        const phoneSizeNavBarOpen = () => {
            phoneSizeNavBar.classList.add("menu-open");
            phoneSizeNavBar.classList.remove("menu-close");
        }

        const phoneSizeNavBarClose = () => {
            phoneSizeNavBar.classList.remove("menu-open");
            phoneSizeNavBar.classList.add("menu-close");
        }

        // why us menu control
        const whyUsPlus = document.querySelector(".why-us-plus");
        const whyUsMinus = document.querySelector(".why-us-minus");
        const whyUsMenu = document.querySelector(".why-us-menu");

        const whyUsMenuOpen = () => {
            whyUsPlus.classList.remove("display");
            whyUsMinus.classList.add("display");
            whyUsMenu.classList.add("display");
        }

        const whyUsMenuClose = () => {
            whyUsMinus.classList.remove("display");
            whyUsPlus.classList.add("display");
            whyUsMenu.classList.remove("display");
        }

        // how we work menu control
        const howWeWorkPlus = document.querySelector(".how-we-work-plus");
        const howWeWorkMinus = document.querySelector(".how-we-work-minus");
        const howWeWorkMenu = document.querySelector(".how-we-work-menu");


        const howWeWorkMenuOpen = () => {
            howWeWorkPlus.classList.remove("display");
            howWeWorkMinus.classList.add("display");
            howWeWorkMenu.classList.add("display");
        }


        const howWeWorkMenuClose = () => {
            howWeWorkMinus.classList.remove("display");
            howWeWorkPlus.classList.add("display");
            howWeWorkMenu.classList.remove("display");
        }

        // results menu control
        const resultsPlus = document.querySelector(".results-plus");
        const resultsMinus = document.querySelector(".results-minus");
        const resultsMenu = document.querySelector(".results-menu");


        const resultsMenuOpen = () => {
            resultsPlus.classList.remove("display");
            resultsMinus.classList.add("display");
            resultsMenu.classList.add("display");
        }


        const resultsMenuClose = () => {
            resultsMinus.classList.remove("display");
            resultsPlus.classList.add("display");
            resultsMenu.classList.remove("display");
        }

        // about us menu control
        const aboutUsPlus = document.querySelector(".about-us-plus");
        const aboutUsMinus = document.querySelector(".about-us-minus");
        const aboutUsMenu = document.querySelector(".about-us-menu");

        const aboutUsMenuOpen = () => {
            aboutUsPlus.classList.remove("display");
            aboutUsMinus.classList.add("display");
            aboutUsMenu.classList.add("display");
        }

        const aboutUsMenuClose = () => {
            aboutUsMinus.classList.remove("display");
            aboutUsPlus.classList.add("display");
            aboutUsMenu.classList.remove("display");
        }

        // resources menu control
        const resourcesPlus = document.querySelector(".resources-plus");
        const resourcesMinus = document.querySelector(".resources-minus");
        const resourcesMenu = document.querySelector(".resources-menu");

        const resourcesMenuOpen = () => {
            resourcesPlus.classList.remove("display");
            resourcesMinus.classList.add("display");
            resourcesMenu.classList.add("display");
        }

        const resourcesMenuClose = () => {
            resourcesMinus.classList.remove("display");
            resourcesPlus.classList.add("display");
            resourcesMenu.classList.remove("display");
        }
    </script>

</body>

</html>