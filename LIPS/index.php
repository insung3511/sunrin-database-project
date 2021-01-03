<?php
session_start();
    if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
        header("location: whatyouwant.html");
        exit;
    }
?>

<!DOCTYPE html>
<html lang="en" data-ready="false">
    <head>
        <meta charset="utf-8" />
        <title>LIPS Skateboard SEOUL</title>
        <meta name="description" content="LIPS Skateboard SEOUL is a Seoul-based skateboard brand that deals with skateboard culture." />
        <meta name="keywords" content="" />
        <meta http-equiv="cleartype" content="on" />
        <meta name="MobileOptimized" content="375" />
        <meta name="HandheldFriendly" content="True" />
        <meta name="apple-mobile-web-app-capable" content="yes" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0" />
        <meta property="og:title" content="SHOP" />
        <meta property="og:type" content="website" />
        <meta property="og:image" content="./images/lips_Textlogo.png" />
        <meta property="og:description" content="LIPS Skateboard SEOUL is a Seoul-based skateboard brand that deals with skateboard culture." />
        <link rel="canonical" href="index.html" />
        <link rel="apple-touch-icon" sizes="180x180" href="./images/lips_Textlogo.png" />
        <link rel="icon" type="image/png" sizes="32x32" href="./images/lips_Textlogo.png" />
        <link rel="icon" type="image/png" sizes="16x16" href="./images/lips_Textlogo.png" />
        <link rel="mask-icon" href="./images/lips_Textlogo.png" color="#000000" />
        <link rel="shortcut icon" href="./images/lips_Textlogo.png" />
        <meta name="msapplication-TileColor" content="#000000" />
        <meta name="theme-color" content="#ffffff" />
        <link rel="manifest" href="https://www.marpi.studio/user/themes/basiis/dist/manifest.json" />
        <link href="https://www.marpi.studio/user/themes/basiis/dist/main.css" type="text/css" rel="stylesheet" />
        <script src="https://www.marpi.studio/user/themes/basiis/dist/main.bundle.js"></script>
    </head>
    <body style="visibility: hidden;" data-template="modular">
        <main id="app" data-js="Common">
            <header class="header js-header" data-sticky="false">
                <div class="header__bg"></div>
                <div class="header__line"></div>
                <div class="header__container">
                    <h1 class="header__logo js-logo" data-current-logo-id="1">
                        <a href="." aria-label="Marpi Studio" class="header__logo__link js-logoLink">
                            <span class="header__logo__hover">
                                <div class="header__logo__hoverImg js-logoHover" data-logo-id="3">
                                    <svg width="129" height="72" viewBox="0 0 129 72" xmlns="http://www.w3.org/2000/svg">
                                        <g fill-rule="evenodd">
                                            <path d="M12 6h15v15H12zM42 6h15v15H42zM72 6h15v15H72zM12 36h15v15H12zM102 6h15v15h-15zM102 36h15v15h-15zM27 21h15v15H27zM57 21h15v30H57zM27 51h15v15H27zM87 21h15v15H87zM87 51h15v15H87z" />
                                        </g>
                                    </svg>
                                </div>
                                <div style="background-image: url(http://nefus.kr/media/images/Webp.net-resizeimage.png);" class="header__logo__hoverImg js-logoHover" data-logo-id="5"></div>
                            </span>
                            <span class="header__logo__hover">
                                <div>
                                    <h3>🇰🇷👄</h3>
                                </div>
                            </span>
                            <span class="header__logo__default">
                                <h3>👄🛹</h3>
                            </span>
                        </a>
                    </h1>
                    <nav class="header__nav">
                        <div class="nav js-nav">
                            <div class="nav__container">
                                <div class="nav__inner">
                                    <div class="nav__primary">
                                        <ul class="nav__primary__list">
                                            <li class="nav__item js-navItem" data-active="false">
                                                <a href="shop/" class="nav__link js-navLink">
                                                    <div class="nav__link__wrap">
                                                        <span class="nav__item__char">S</span>
                                                        <span class="nav__item__char">H</span>
                                                        <span class="nav__item__char">O</span>
                                                        <span class="nav__item__char">P</span>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="nav__item js-navItem" data-active="false">
                                                <a href="./login/logout.php" class="nav__link js-navLink">
                                                    <div class="nav__link__wrap">
                                                        <span class="nav__item__char">L</span>
                                                        <span class="nav__item__char">O</span>
                                                        <span class="nav__item__char">G</span>
                                                        <span class="nav__item__char">O</span>
                                                        <span class="nav__item__char">U</span>
                                                        <span class="nav__item__char">T</span>
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="nav__secondary">
                                        <ul class="nav__secondary__list">
                                            <li class="nav__item js-navItem" data-active="false">
                                                <a href="lookbook/" class="nav__link js-navLink">
                                                    <div class="nav__link__wrap">
                                                        <span class="nav__item__char">L</span>
                                                        <span class="nav__item__char">o</span>
                                                        <span class="nav__item__char">o</span>
                                                        <span class="nav__item__char">k</span>
                                                        <span class="nav__item__char">b</span>
                                                        <span class="nav__item__char">o</span>
                                                        <span class="nav__item__char">o</span>
                                                        <span class="nav__item__char">k</span>
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="nav__socialLinks">
                                            <div class="socialLinks" data-format="icon_only"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="nav__btnToggle">
                                <div class="btnMenu js-btnMenu" aria-label="Toggle Menu">
                                    <div class="btnMenu__menu">
                                        <div class="btnMenu__menu__line"></div>
                                        <div class="btnMenu__menu__line"></div>
                                        <div class="btnMenu__menu__line"></div>
                                    </div>
                                    <div class="btnMenu__close">
                                        <div class="btnMenu__close__line"></div>
                                        <div class="btnMenu__close__line"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>
            </header>
            <div class="modular">
                <div class="pageTitle" data-js="PageTitle">
                    <h2 class="pageTitle__text js-text">
                        LIPS Skateboard SEOUL
                    </h2>
                </div>
                <section data-id="modular-image" class="module js-module" data-prev="none" data-next="modular-text-layout">
                    <section class="image" data-width="full_bleed">
                        <div class="image__container">
                            <div class="responsiveImage js-responsiveImage image__img" style="padding-top: 56.73828125%;" data-fill-container="false" data-image-size="cover">
                                <img alt="About LIPS Skateboard SEOUL" title="" data-sizes="1200w" src="images/about.jpeg" class="responsiveImage__img lazyload image__img__img" />
                                <div class="responsiveImage__loader"></div>
                            </div>
                        </div>
                    </section>
                </section>
                <section data-id="modular-text-layout" class="module js-module" data-prev="modular-image" data-next="modular-profiles">
                    <section class="textLayout">
                        <div class="textLayout__container">
                            <div class="textLayout__row" data-align="distribute">
                                <div class="textLayout__column" data-column-width="5">
                                    <div class="textLayout__block" data-text-style="large_body" data-text-align="left">
                                        <p>It is a skateboard brand that is operated based on street culture and skater culture, focusing on skateboard culture in Seoul.</p>
                                    </div>
                                </div>
                                <div class="textLayout__column" data-column-width="6">
                                    <div class="textLayout__block" data-text-style="default" data-text-align="left">
                                        <p>The origin of the LIPS Skateboard SEOUL began with the fact that Seoul can draw 35 and the Korean Peninsula, and the brand begins with the fact that lip shapes make Seoul.</p>
                                        <p>The current clothing market. Most people abuse or use skateboards to pretend to be street brands.</p>
                                        <p>We are developing our own brand by feeling problems and getting inspiration from the 90s skateboard culture and atmosphere.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </section>
                <section data-id="modular-profiles" class="module js-module" data-prev="modular-text-layout" data-next="modular-press">
                    <div class="profiles" data-columns="3">
                        <div class="profiles__container">
                            <h2 class="profiles__heading" data-position="right">Create Website Frontend and Backend — Original Frontend by <a href="//marpi.studio">Maripi.Studio</a></h2>

                            <!-- Jeon Minki Profile -->
                            <div class="profiles__items">
                                <div class="profiles__item">
                                    <div class="profiles__image">
                                        <div class="profiles__image__container">
                                            <div class="responsiveImage js-responsiveImage profiles__img" style="padding-top: 100%;" data-fill-container="false" data-image-size="cover">
                                                <img
                                                    alt="Bahk InSung (박인성)"
                                                    title=""
                                                    data-sizes="(max-width: 1500px) 33vw, 500px"
                                                    data-src="./images/bahkProfile.jpg"
                                                    data-srcset=""
                                                    class="responsiveImage__img lazyload profiles__img__img"
                                                />
                                                <div class="responsiveImage__loader"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="profiles__text">
                                        <h4 class="profiles__name">
                                            Bahk InSung (박인성)
                                        </h4>
                                        <div class="profiles__bio">
                                            <p>Frontend (HTML, CSS) & Backend (PHP)</p>
                                        </div>
                                        <div class="profiles__details">
                                            <div class="profiles__details__item">
                                                <span class="profiles__details__icon">
                                                    <svg width="11" height="15" viewBox="0 0 11 15" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M5.5 0C2.477 0 0 2.584 0 5.76 0 8.935 5.5 15 5.5 15S11 8.953 11 5.778C11 2.566 8.523 0 5.5 0zm0 9A3.512 3.512 0 0 1 2 5.49 3.496 3.496 0 0 1 5.5 2C7.432 2 9 3.581 9 5.51A3.496 3.496 0 0 1 5.5 9z"
                                                        />
                                                    </svg>
                                                </span>
                                                <span class="profiles__details__text">
                                                    Seoul, KR
                                                </span>
                                            </div>
                                            <div class="profiles__details__item">
                                                <span class="profiles__details__icon">
                                                    <svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M6.482 10.492a.917.917 0 0 1-.65-.27 4.615 4.615 0 0 1 0-6.517L7.534 2a4.58 4.58 0 0 1 3.26-1.35c1.231 0 2.388.48 3.259 1.35.87.87 1.35 2.028 1.35 3.26 0 1.23-.48 2.388-1.35 3.258a.919.919 0 1 1-1.301-1.301 2.755 2.755 0 0 0 .811-1.958c0-.74-.288-1.435-.811-1.958-1.046-1.046-2.87-1.046-3.917 0L7.132 5.004a2.774 2.774 0 0 0 0 3.917.919.919 0 0 1-.65 1.571zm-1.19 4.878a4.575 4.575 0 0 1-3.258-1.35 4.578 4.578 0 0 1-1.35-3.26c0-1.23.479-2.387 1.349-3.258a.919.919 0 1 1 1.3 1.301 2.75 2.75 0 0 0-.81 1.959c0 .74.287 1.435.81 1.958 1.048 1.046 2.87 1.046 3.917 0l1.563-1.563a2.752 2.752 0 0 0 .812-1.958c0-.74-.288-1.435-.812-1.959a.919.919 0 1 1 1.301-1.3 4.58 4.58 0 0 1 1.35 3.259c0 1.23-.479 2.389-1.35 3.258L8.551 14.02a4.578 4.578 0 0 1-3.259 1.35z"
                                                        />
                                                    </svg>
                                                </span>
                                                <span class="profiles__details__text">
                                                    <a href="https://github.com/insung3511" target="_blank" rel="noopener">
                                                        Instagram
                                                    </a>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Jeon Minki Profile -->
                                <div class="profiles__item">
                                    <div class="profiles__image">
                                        <div class="profiles__image__container">
                                            <div class="responsiveImage js-responsiveImage profiles__img" style="padding-top: 100%;" data-fill-container="false" data-image-size="cover">
                                                <img alt="Jeon Minki" title="" data-sizes="(max-width: 1500px) 33vw, 500px" data-src="images/jeonminki.jpeg" data-srcset="" class="responsiveImage__img lazyload profiles__img__img" />
                                                <div class="responsiveImage__loader"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="profiles__text">
                                        <h4 class="profiles__name">
                                            Jeon Minki (전민기)
                                        </h4>
                                        <div class="profiles__bio">
                                            <p>Backend(PHP) & Server(Linux, MySQL)</p>
                                        </div>
                                        <div class="profiles__details">
                                            <div class="profiles__details__item">
                                                <span class="profiles__details__icon">
                                                    <svg width="11" height="15" viewBox="0 0 11 15" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M5.5 0C2.477 0 0 2.584 0 5.76 0 8.935 5.5 15 5.5 15S11 8.953 11 5.778C11 2.566 8.523 0 5.5 0zm0 9A3.512 3.512 0 0 1 2 5.49 3.496 3.496 0 0 1 5.5 2C7.432 2 9 3.581 9 5.51A3.496 3.496 0 0 1 5.5 9z"
                                                        />
                                                    </svg>
                                                </span>
                                                <span class="profiles__details__text">
                                                    Uijeongbu, KR
                                                </span>
                                            </div>
                                            <div class="profiles__details__item">
                                                <span class="profiles__details__icon">
                                                    <svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M6.482 10.492a.917.917 0 0 1-.65-.27 4.615 4.615 0 0 1 0-6.517L7.534 2a4.58 4.58 0 0 1 3.26-1.35c1.231 0 2.388.48 3.259 1.35.87.87 1.35 2.028 1.35 3.26 0 1.23-.48 2.388-1.35 3.258a.919.919 0 1 1-1.301-1.301 2.755 2.755 0 0 0 .811-1.958c0-.74-.288-1.435-.811-1.958-1.046-1.046-2.87-1.046-3.917 0L7.132 5.004a2.774 2.774 0 0 0 0 3.917.919.919 0 0 1-.65 1.571zm-1.19 4.878a4.575 4.575 0 0 1-3.258-1.35 4.578 4.578 0 0 1-1.35-3.26c0-1.23.479-2.387 1.349-3.258a.919.919 0 1 1 1.3 1.301 2.75 2.75 0 0 0-.81 1.959c0 .74.287 1.435.81 1.958 1.048 1.046 2.87 1.046 3.917 0l1.563-1.563a2.752 2.752 0 0 0 .812-1.958c0-.74-.288-1.435-.812-1.959a.919.919 0 1 1 1.301-1.3 4.58 4.58 0 0 1 1.35 3.259c0 1.23-.479 2.389-1.35 3.258L8.551 14.02a4.578 4.578 0 0 1-3.259 1.35z"
                                                        />
                                                    </svg>
                                                </span>
                                                <span class="profiles__details__text">
                                                    <a href="https://rokst90sd9tou1.tistory.com/" target="_blank" rel="noopener">
                                                        Website
                                                    </a>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <footer class="footer">
                        <div class="footer__container">
                            <div class="footer__column" data-column-width="6" data-text-align="left">
                                <p>© LIPS Skateboard SEOUL</p>
                            </div>
                            <div class="footer__column" data-column-width="6" data-text-align="right">
                                <p>Made by <a href="https://www.standandmarvel.com/" target="blank">Stand &amp; Marvel</a></p>
                            </div>
                        </div>
                        <div class="footer__bg"></div>
                    </footer>
                    <script>
                        document.body.removeAttribute("style");
                    </script>
                </section>
            </div>
        </main>
    </body>
</html>

