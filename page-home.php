<?php

/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package wtt-test
 */

get_header();
?>
<main id="primary" class="site-main">

    <section class="main-banner">
        <?php the_post_thumbnail(); ?>
        <div class="info-block">
            <img src="<?php echo wp_get_attachment_image_url(20); ?>" alt="" />
            <h1>Veterans Network</h1>
            <p>We drive traffic through best SEO practices and social media drive conversions through advanced user experience development</p>
        </div>
        <div class="bottom-block">
            <div class="numbers">
                <p>01</p>
                <p>02</p>
                <p>03</p>
                <p>04</p>
            </div>
            <div class="soc-icons">
                <i class="fab fa-facebook-square"></i>
                <i class="fab fa-linkedin"></i>
            </div>
        </div>
        <button class="btn btn-become"><a href="#">Become Our Client</a></button>
    </section>

    <div class="wrapper">
        <section id="about-us">
            <div class="about-us-container">
                <div class="about-us-container__right-text">
                    <h4>about us</h4>
                    <div class="we">
                        <p>We are helping.</p>
                        <p>We are creating.</p>
                        <p>We are Veterans Network.</p>
                    </div>
                </div>
                <div class="about-us-container__unicon">
                    <img src="<?php echo wp_get_attachment_image_url(21); ?>" alt="" />
                </div>
                <div class="about-us-container__description">
                    <h2>we are your Trustworthy Partner for Your Project</h2>
                    <p>Veterans Networks (VN) has been launched to provide comprehensive support to Service leavers with the transition into civilian life. With the sole aim of helping you to make the transition as smoothly as possible, and to achieve your goals. All Service leavers, regardless of reason for discharge (contract end, notice to terminate, medical discharge or compulsory discharge)</p>
                    <p>We’re here to provide you with flexible support. We’ll give you all the tools you need to market yourself confidently to employers and to get the most out of life outside the military. From creating a CV through to learning interview skills, researching and applying for jobs.</p>
                    <div class="our-service">
                        <div class="info">
                            <div class="title">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <path d="M12 21C16.9706 21 21 16.9706 21 12C21 7.02944 16.9706 3 12 3C7.02944 3 3 7.02944 3 12C3 16.9706 7.02944 21 12 21Z" stroke="#EC640E" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M12 17C14.7614 17 17 14.7614 17 12C17 9.23858 14.7614 7 12 7C9.23858 7 7 9.23858 7 12C7 14.7614 9.23858 17 12 17Z" stroke="#EC640E" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M12 14C13.1046 14 14 13.1046 14 12C14 10.8954 13.1046 10 12 10C10.8954 10 10 10.8954 10 12C10 13.1046 10.8954 14 12 14Z" stroke="#EC640E" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                                <h5>Purpose of Veterans Networks (VN)</h5>
                            </div>
                            <p>VN is launched to support Service leavers in transitioning to civilian life, aiming to make the transition as smooth as possible</p>

                        </div>
                        <div class="info">
                            <div class="title">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <path d="M17.2461 11.0814L19.0378 7.23232C19.3586 6.65722 19.7618 6.32212 20.2292 6.23156C20.6828 6.14552 21.0265 6.32212 21.1777 6.42175C22.4012 7.03761 22.0163 8.73121 21.5809 9.65047C20.8111 11.4075 20.385 12.8882 20.0138 14.1924C19.4594 16.1351 18.9782 17.8151 17.6035 19.6672C16.5038 21.1525 14.7763 22.0084 12.9296 22.0084C12.7967 22.0084 12.6593 22.0038 12.5264 21.9948C10.6248 21.868 8.96597 20.84 8.09534 19.2506C6.88563 17.0362 3.83842 14.6996 2.58288 13.7939C2.21172 13.5177 1.98719 13.0784 1.99177 12.612C1.99635 12.1501 2.23005 11.7199 2.61037 11.4618C3.14192 11.0995 3.90715 11.0044 4.8786 11.1856C5.5751 11.3169 6.23953 11.5931 6.8673 12.0188C7.49507 12.4445 7.86623 12.5713 8.0541 12.612C8.06785 11.652 6.83522 8.48215 6.35408 7.23685C6.17996 6.79307 6.03333 6.40816 5.91877 6.09571C5.68049 5.44815 6.03333 4.66022 6.5053 4.26625C6.88563 3.95379 7.38509 3.83606 7.86623 3.94927C8.35195 4.06247 8.74144 4.38852 8.93848 4.83682L8.95223 4.86852L10.6843 9.49197L10.2536 3.70926C10.2261 2.9168 10.9363 2.10622 11.7382 2.0066L11.7795 2.00207L12.1048 2.0066C12.5539 1.96585 13.0259 2.11528 13.3833 2.41415C13.7224 2.69491 13.9148 3.07529 13.9332 3.48285L14.2127 9.02555L14.703 4.88211C14.845 4.15757 15.4911 3.63228 16.238 3.63228H16.4717C16.9345 3.63228 17.3744 3.83606 17.6723 4.18927C17.9701 4.53795 18.0893 4.99532 18.0114 5.44362L17.2461 11.0814ZM3.98047 12.2679C3.67804 12.2679 3.43976 12.3222 3.28855 12.4263C3.1969 12.4897 3.18316 12.5803 3.18316 12.6256C3.18316 12.6664 3.19232 12.7705 3.29313 12.8475C4.93358 14.0294 7.87081 16.357 9.14927 18.6936C9.82744 19.9298 11.1196 20.7268 12.618 20.8265C14.2081 20.9351 15.7157 20.2423 16.655 18.9744C17.9014 17.2943 18.3321 15.7864 18.8774 13.8754C19.2623 12.535 19.6976 11.0135 20.4995 9.17952L20.5041 9.16593C20.7332 8.67687 21.0127 7.63988 20.6233 7.46327L20.527 7.41799L20.5041 7.39535C20.4904 7.39082 20.4675 7.38176 20.4445 7.38629C20.3712 7.4044 20.2338 7.51761 20.0826 7.78478L18.0984 12.0505L18.0664 12.0958C17.7456 12.5396 17.1545 12.3086 16.875 12.1999C16.3434 11.9916 15.8623 11.7335 15.931 11.2354L16.8429 5.23532C16.8704 5.08588 16.8016 4.98173 16.7604 4.93192C16.7192 4.88211 16.6229 4.8006 16.4717 4.8006H16.2426C16.0685 4.8006 15.9173 4.91833 15.876 5.08588L15.1566 10.6195C15.0283 11.2761 14.0844 11.2399 13.8965 11.2263C13.1862 11.172 13.1313 10.6739 13.1267 10.5788L12.7463 3.53719C12.7418 3.4285 12.6639 3.35152 12.6135 3.31077C12.4989 3.21567 12.3385 3.16133 12.2056 3.17945L12.1644 3.18397L11.8574 3.17945C11.6649 3.22473 11.4404 3.48285 11.4404 3.66398L11.949 10.5516C11.9536 10.8278 11.807 11.1856 11.0647 11.3305C10.3269 11.4754 10.0566 11.1992 9.95574 10.941L7.8479 5.28966C7.78375 5.14928 7.66003 5.104 7.59588 5.09041C7.52714 5.0723 7.39426 5.06324 7.27054 5.16739C7.10558 5.30324 7.00477 5.59759 7.03684 5.69268C7.14682 5.99155 7.29345 6.37194 7.46299 6.81119C9.07137 10.9546 9.6304 12.8113 8.9339 13.5222C8.24656 14.2422 6.7894 13.3864 6.19371 12.9833C5.70798 12.6528 5.19019 12.4354 4.65865 12.3358C4.40662 12.2905 4.17751 12.2679 3.98047 12.2679Z" fill="#EC640E" />
                                </svg>
                                <h5>Purpose of Veterans Networks (VN)</h5>
                            </div>
                            <p>VN is launched to support Service leavers in transitioning to civilian life, aiming to make the transition as smooth as possible</p>

                        </div>
                        <div class="info">
                            <div class="title">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <path d="M21.926 9.08332C21.7528 8.59361 21.3084 8.23506 20.7734 8.15723L15.5695 7.39845L13.3076 2.7931C13.0694 2.30952 12.56 2 12 2C11.44 2 10.9306 2.30952 10.6925 2.7931L8.43053 7.39845L3.22599 8.15723C2.6916 8.23506 2.24721 8.59361 2.0747 9.08332C1.90282 9.57426 2.03283 10.1148 2.41034 10.4838L6.22421 14.2176L5.33981 19.3973C5.2498 19.9188 5.48044 20.4423 5.93232 20.7475C6.18046 20.9148 6.47234 21 6.76423 21C7.00423 21 7.24487 20.9424 7.463 20.8278L12 18.4325L16.5377 20.8278C16.7558 20.9424 16.9964 21 17.2358 21C17.5277 21 17.8196 20.9148 18.0683 20.7475C18.5202 20.4423 18.7496 19.9188 18.6602 19.3973L17.7752 14.2176L21.5903 10.4838C21.9672 10.1142 22.0966 9.57365 21.926 9.08332ZM16.7427 13.2547C16.4227 13.5673 16.2777 14.008 16.3508 14.4401L17.2358 19.6197L12.6982 17.2257C12.4807 17.1105 12.2407 17.0535 11.9994 17.0535C11.7594 17.0535 11.5188 17.1111 11.3012 17.2257L6.7636 19.6197L7.64863 14.4401C7.72238 14.008 7.57738 13.5673 7.25737 13.2547L3.4435 9.52094L8.64741 8.76094C9.12305 8.69168 9.53244 8.39994 9.73682 7.98377L12 3.37965L14.2626 7.98439C14.4676 8.40055 14.8764 8.69168 15.3514 8.76155L20.5565 9.52155L16.7427 13.2547Z" fill="#EC640E" />
                                </svg>
                                <h5>Purpose of Veterans Networks (VN)</h5>
                            </div>
                            <p>VN is launched to support Service leavers in transitioning to civilian life, aiming to make the transition as smooth as possible</p>

                        </div>
                        <div class="info">
                            <div class="title">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <path d="M15.3207 13.2171C17.1385 12.1495 18.3569 10.2402 18.3569 8.05998C18.3569 4.71851 15.505 2 12 2C8.49501 2 5.64311 4.71851 5.64311 8.05998C5.64311 10.2402 6.86151 12.1495 8.67928 13.2171C4.75423 14.0564 2 16.3491 2 19.1236C2 21.3941 8.28613 22 12 22C15.7139 22 22 21.3941 22 19.1236C22 16.3491 19.2458 14.0564 15.3207 13.2171ZM6.95268 8.05998C6.95268 5.4078 9.21715 3.25 12 3.25C14.7828 3.25 17.0473 5.4078 17.0473 8.05998C17.0473 10.7122 14.7828 12.8695 12 12.8695C9.21715 12.8695 6.95268 10.7122 6.95268 8.05998ZM12 20.75C6.66131 20.75 3.4656 19.675 3.30995 19.1194C3.314 16.3621 7.21096 14.1195 12 14.1195C16.7886 14.1195 20.6852 16.3617 20.69 19.1186C20.5382 19.6738 17.3422 20.75 12 20.75Z" fill="white" />
                                </svg>
                                <h5>Purpose of Veterans Networks (VN)</h5>
                            </div>
                            <p>VN is launched to support Service leavers in transitioning to civilian life, aiming to make the transition as smooth as possible</p>

                        </div>
                    </div>
                </div>
            </div>
            <div class="find-solutions-container">
                <img src="<?php echo wp_get_attachment_image_url(30); ?>" alt="" />
                <button class="btn find-your-solutions"><a href="#">Find your solution</a><i>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M12.4285 15.6429C7.1029 15.6429 2.78564 11.3256 2.78564 6H4.07136C4.07136 10.6155 7.81298 14.3571 12.4285 14.3571H18.9912L17.0457 12.4603L17.9432 11.5397L21.4922 15L17.9432 18.4603L17.0457 17.5397L18.9912 15.6429H12.4285Z" fill="black" />
                        </svg>
                    </i></button>
            </div>
        </section>
        <section class="date"></section>
    </div>

</main><!-- #main -->
<?php
get_sidebar();
get_footer();
