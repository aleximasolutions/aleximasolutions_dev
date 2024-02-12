<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="Cache-Control" content="no-cache">
    <link rel="icon" type="image/x-icon" href="image/icons/favicon.svg">
    <link rel="stylesheet" href="css/main.css" />
    <script defer src="libs/gsap/gsap.min.js"></script>
    <script defer src="libs/gsap/ScrollTrigger.min.js"></script>
    <script defer src="libs/gsap/ScrollSmoother.min.js"></script>
    <script defer src="js/main.js"></script>
    <script defer src="js/handle.js"></script>
    <title>AleximaSolutions #Dev</title>
  </head>
  <body>
    <div id="root">
      <div id="smoother-content">

        <nav class="menu" id="menu">
          <ul class="menu_items">
            <li class="menu_btn" id="menu_btn">
              <span>Menu</span>
            </li>
            <li class="menu_item">
              <button nav-link="about-us" class="menu_item__link">About Us</button>
            </li>
            <li class="menu_item">
              <button nav-link="our-works" class="menu_item__link">Our works</button>
            </li>
            <li class="menu_item">
              <button nav-link="services" class="menu_item__link">Services</button>
            </li>
            <li class="menu_item">
              <button nav-link="cta" class="menu_item__link">Contacts</button>
            </li>
          </ul>
        </nav>

        <header id="header" class="header">
          <div class="container">
            <div class="header-content">
              <a href="#header" class="logo">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="36"
                  height="36"
                  viewBox="0 0 36 36"
                  fill="none"
                >
                  <path
                    d="M0 36V0L8.36307 18.5182L6.26493 18.5143L2.05714 9.25714V33.9429H17.4857L29.8286 0H31.8857L19.5429 33.9429H21.6L33.9429 0H36L23.6571 33.9429H36V36H0Z"
                    fill="white"
                  />
                  <path
                    d="M14.4 31.8857H12.3429L8.13506 22.6286H10.2194L14.4 31.8857Z"
                    fill="white"
                  />
                  <path
                    d="M14.4 19.5429H3.08571V21.6H14.4V19.5429Z"
                    fill="white"
                  />
                </svg>
                <h3 class="logo-text">Aleximasolutions</h3>
                <span class="logo-text">#Dev</span>
              </a>
              <div class="header-content__left">
                <h1 class="header-title" data-speed="0.6">
                  <span>{</span> Develop Agency <span>}</span>
                </h1>
                <p class="header-description" data-speed="0.7">
                  solution for your business
                </p>
              </div>
              <img
                id="header-img"
                data-speed="1.2"
                class="header-content__right"
                src="image/header-laptop.png"
                alt=""
              />
            </div>
          </div>
        </header>

        <section data-section="about-us" id="about-us">
          <div class="container">
            <div class="about-us">
              <div data-speed="1.2" class="cube_container">
                <div class="cube">
                  <div class="top"></div>
                  <div>
                    <span style="--i: 0">
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="250"
                        height="250"
                        viewBox="0 0 250 250"
                        fill="none"
                      >
                        <path
                          d="M0 250V0L58.0769 128.599L43.5065 128.571L14.2857 64.2857V235.714H121.429L207.143 0H221.429L135.714 235.714H150L235.714 0H250L164.286 235.714H250V250H0Z"
                          fill="white"
                        />
                        <path
                          d="M100 221.429H85.7143L56.4935 157.143H70.9677L100 221.429Z"
                          fill="white"
                        />
                        <path
                          d="M100 135.714H21.4286V150H100V135.714Z"
                          fill="white"
                        />
                      </svg>
                    </span>
                    <span style="--i: 1"></span>
                    <span style="--i: 2">
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="250"
                        height="250"
                        viewBox="0 0 250 250"
                        fill="none"
                      >
                        <path
                          d="M0 250V0L58.0769 128.599L43.5065 128.571L14.2857 64.2857V235.714H121.429L207.143 0H221.429L135.714 235.714H150L235.714 0H250L164.286 235.714H250V250H0Z"
                          fill="white"
                        />
                        <path
                          d="M100 221.429H85.7143L56.4935 157.143H70.9677L100 221.429Z"
                          fill="white"
                        />
                        <path
                          d="M100 135.714H21.4286V150H100V135.714Z"
                          fill="white"
                        />
                      </svg>
                    </span>
                    <span style="--i: 3"></span>
                  </div>
                </div>
              </div>
              <div data-speed="1.2" class="about-us_text">
                <h2 class="title">About Us</h2>
                <p>
                  AleximaSolutions - agency passionately crafting innovative web
                  applications. Our presence has added vibrancy to the world,
                  and we assist clients worldwide in bringing their unique ideas
                  to life.
                  <br />
                  <br />
                  At Alexima Solutions, we don't just create web applications;
                  we infuse them with soul and individuality. Our team comprises
                  talented professionals united by the commitment to provide
                  clients with more than just web solutions – real digital
                  experiences.
                  <br />
                  <br />
                  With us, your web application doesn't just exist; it stands
                  out, impresses, and achieves its goals. Trust us with your web
                  development needs, and together, we'll build an online space
                  that perfectly reflects your unique style and values.
                </p>
                <button class="btn">Contact Us</button>
              </div>
            </div>
          </div>
        </section>

        <section data-section="our-works" id="our-works" class="our-works">
          <h1 class="our-works-title">Our Works</h1>
          <div id="content__left" class="content__left">
            <p class="our-works-description">
              Explore our portfolio, where each project tells a success story.
              We proudly showcase a diverse range of web applications developed
              for our clients.
              <br />
              <br />
              From stylish corporate websites to innovative online platforms,
              each of our creations reflects an outstanding level of quality and
              attention to detail.
              <br />
              <br />
              Dive into our portfolio to witness how we bring unique ideas to
              life in the virtual realm.
            </p>
          </div>

          <div id="content__right" class="content__right">
            <div class="cards">
              <a href="https://aleximasolutions.github.io/solution_fusion_lab/" class="card">
                <h3 class="card-title">Fusion Lab</h3>
                <img src="image/card1.png" alt="works" />
              </a>
              <a href="https://aleximasolutions.github.io/lofthouse/" class="card">
                <h3 class="card-title">Loft House</h3>
                <img src="image/card2.png" alt="works" />
              </a>
              <a href="https://aleximasolutions.github.io/vue_cinema/" class="card">
                <h3 class="card-title">VUE cinema</h3>
                <img src="image/card3.png" alt="works" />
              </a>
              <a href="https://aleximasolutions.github.io/luxe/" class="card">
                <h3 class="card-title">Luxe</h3>
                <img src="image/card4.png" alt="works" />
              </a>
              <a href="https://aleximasolutions.github.io/SFLAB_TG_BOTS/" class="card">
                <h3 class="card-title">SFLAB bot</h3>
                <img src="image/card5.png" alt="works" />
              </a>
              <a href="https://aleximasolutions.github.io/amind/" class="card">
                <h3 class="card-title">Amind</h3>
                <img src="image/card6.png" alt="works" />
              </a>
              <!-- <a href="#" class="card">
                <h3 class="card-title more">More works...</h3>
              </a> -->
            </div>
          </div>
        </section>

        <section data-section="services" id="services">
          <div class="container">
            <div class="services">
              <div class="services-block">
                <h1 class="title">Services</h1>
                <div class="services-content">
                  <div class="services-descriptions">
                    <div class="service show" data-id="web">
                      <h3 class="service-title">Website Development</h3>
                      <p class="service-description">
                        Empower your online presence with our bespoke website
                        development services. We specialize in creating visually
                        stunning, user-friendly websites tailored to meet your
                        unique business needs. From concept to deployment, we
                        ensure a seamless and engaging user experience that
                        leaves a lasting impression.
                      </p>
                    </div>

                    <div class="service" data-id="eshop">
                      <h3 class="service-title">Eshop Solutions</h3>
                      <p class="service-description">
                        Take your online retail experience to the next level
                        with our comprehensive eShop solutions. We design and
                        develop eCommerce platforms that not only showcase your
                        products beautifully but also provide a secure and
                        intuitive shopping environment for your customers.
                        Elevate your online store with our expertise.
                      </p>
                    </div>

                    <div class="service" data-id="seo">
                      <h3 class="service-title">SEO Optimization</h3>
                      <p class="service-description">
                        Increase the visibility of your website in search
                        results with our SEO optimization services. We conduct
                        comprehensive keyword analysis, optimize content, and
                        create strategies to attract more traffic and improve
                        search rankings. Realize the full potential of your
                        online presence with our SEO expertise.
                      </p>
                    </div>

                    <div class="service" data-id="mobile">
                      <h3 class="service-title">Mobile App Development</h3>
                      <p class="service-description">
                        Stay connected with your audience on the go through our
                        mobile app development services. Whether it's iOS or
                        Android, we craft cutting-edge mobile applications that
                        combine functionality with a delightful user experience.
                        From concept to app store, we bring your ideas to life
                        in the palms of your users.
                      </p>
                    </div>

                    <div class="service" data-id="cms">
                      <h3 class="service-title">
                        Content Management Systems (CMS)
                      </h3>
                      <p class="service-description">
                        Effortlessly manage and update your website content with
                        our customized Content Management Systems (CMS). We
                        offer scalable and user-friendly solutions that empower
                        you to control your digital content efficiently.
                        Streamline your website management with our CMS
                        expertise.
                      </p>
                    </div>

                    <div class="service" data-id="design">
                      <h3 class="service-title">Design Services</h3>
                      <p class="service-description">
                        Unleash the power of visual storytelling with our design
                        services. From captivating logos to user interface
                        design, our creative team ensures your brand stands out
                        in the digital landscape. Elevate your online presence
                        with visually appealing and cohesive design elements
                        that resonate with your audience.
                      </p>
                    </div>
                  </div>

                  <ul class="service-cards">
                    <li class="service-card active" data-id="web">
                      <div class="service-card__icon">
                        <img
                          src="image/icons/fi-rs-browser.svg"
                          alt="Website Development"
                        />
                      </div>
                      <h3 class="service-card__title">Website Development</h3>
                    </li>

                    <li class="service-card" data-id="eshop">
                      <div class="service-card__icon">
                        <img
                          src="image/icons/01 align center.svg"
                          alt="EshopSolutions"
                        />
                      </div>
                      <h3 class="service-card__title">Eshop Solutions</h3>
                    </li>

                    <li class="service-card" data-id="design">
                      <div class="service-card__icon">
                        <img src="image/icons/3.svg" alt="Design Services" />
                      </div>
                      <h3 class="service-card__title">Design Services</h3>
                    </li>

                    <li class="service-card" data-id="cms">
                      <div class="service-card__icon">
                        <img src="image/icons/4.svg" alt="CMS" />
                      </div>
                      <h3 class="service-card__title">CMS</h3>
                    </li>

                    <li class="service-card" data-id="seo">
                      <div class="service-card__icon">
                        <img src="image/icons/5.svg" alt="SEO" />
                      </div>
                      <h3 class="service-card__title">SEO</h3>
                    </li>

                    <li class="service-card" data-id="mobile">
                      <div class="service-card__icon">
                        <img src="image/icons/6.svg" alt="Mobile App" />
                      </div>
                      <h3 class="service-card__title">Mobile App</h3>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </section>

        <section data-section="cta" id="cta" class="cta">
          <div class="container">
            <div class="cta-title title">Think we could be a match?</div>
            <div class="cta__wrapper">
              <div class="cta__text">
                <p>
                  You can reach us by filling out the form, or by sending an
                  email or a message via messenger.
                </p>
                <!-- <a href="#!">Privacy Statement (EU)</a> -->
              </div>
              <form id="form" action="#" method="POST" class="cta__form">
              <div id="main-success" class="notification_items">
              <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="none"><g clip-path="url(#a)"><path fill="#fff" d="M24 0a24 24 0 1 0 0 48 24 24 0 0 0 0-48Zm0 44a20 20 0 1 1 0-40 20 20 0 0 1 0 40Z"/></g><path fill="#fff" d="M19.55 30.53 13.02 24a1.67 1.67 0 0 0-2.35 2.36l6.53 6.53a3.33 3.33 0 0 0 4.71 0l15.42-15.42a1.67 1.67 0 0 0 0-2.36 1.67 1.67 0 0 0-2.35 0L19.55 30.53Z"/><defs><clipPath id="a"><path fill="#fff" d="M0 0h48v48H0z"/></clipPath></defs></svg>
              <span class="form-message" id="message-success"></span>
                </div>
              <div id="main-error" class="notification_items">
              <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="none"><g fill="#fff" clip-path="url(#a)"><path d="M32 16a2 2 0 0 0-2.83 0L24 21.17 18.83 16A2 2 0 0 0 16 18.83L21.17 24 16 29.17A2 2 0 0 0 18.83 32L24 26.83 29.17 32A2 2 0 0 0 32 29.17L26.83 24 32 18.83A2 2 0 0 0 32 16Z"/><path d="M24 0a24 24 0 1 0 0 48 24 24 0 0 0 0-48Zm0 44a20 20 0 1 1 0-40 20 20 0 0 1 0 40Z"/></g><defs><clipPath id="a"><path fill="#fff" d="M0 0h48v48H0z"/></clipPath></defs></svg>
              <span class="form-message" id="message-error"></span>
                </div>
                <input name="csrf" type="hidden" value="<?php
                include_once 'csrf.php';
                echo generateCSRFToken();
                ?>" />
                <div class="input_wraper">
                <input
                  class="form-input"
                  id="name"
                  name="name"
                  type="text"
                  placeholder="Name"
                />
                <span class="error"></span>
                </div>
                <div class="input_wraper"><input
                  class="form-input"
                  id="phone"
                  name="phone"
                  type="text"
                  placeholder="Phone"
                /><span class="error"></span></div>
                <div class="input_wraper">
                <input
                  class="form-input"
                  id="email"
                  name="email"
                  type="text"
                  placeholder="Email"
                /><span class="error"></span></div>
                <button id="form_btn" name="form_btn" type="submit" class="btn">Contact Us</button>
              </form>
            </div>
          </div>
        </section>

        <footer class="footer">
          <div class="container">
            <div class="footer-content">
              <div class="footer-logo-items">
                <a href="#header" class="footer-logo">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="36"
                    height="36"
                    viewBox="0 0 36 36"
                    fill="none"
                  >
                    <path
                      d="M0 36V0L8.36307 18.5182L6.26493 18.5143L2.05714 9.25714V33.9429H17.4857L29.8286 0H31.8857L19.5429 33.9429H21.6L33.9429 0H36L23.6571 33.9429H36V36H0Z"
                      fill="white"
                    />
                    <path
                      d="M14.4 31.8857H12.3429L8.13506 22.6286H10.2194L14.4 31.8857Z"
                      fill="white"
                    />
                    <path
                      d="M14.4 19.5429H3.08571V21.6H14.4V19.5429Z"
                      fill="white"
                    />
                  </svg>
                  <h3 class="footer-logo-text">Aleximasolutions</h3>
                  <span class="footer-logo-text">#Dev</span>
                </a>
                <p>
                  © 2024 Aleximasolutions. All Rights Reserved.
                </p>
              </div>

              <ul class="footer__list">
                <li class="footer__list-item">
                  <h3 class="footer__list-title">
                      Menu
                  </h3>
              </li>
                <li class="footer__list-item">
                  <button nav-link="about-us" class="footer__list-link"> About Us </button>
                </li>
                <li class="footer__list-item">
                  <button nav-link="our-works" class="footer__list-link"> Our works </button>
                </li>
                <li class="footer__list-item">
                  <button nav-link="services" class="footer__list-link"> Services </button>
                </li>
                <li class="footer__list-item">
                  <button nav-link="cta" class="footer__list-link"> Contact Us </button>
                </li>
              </ul>

              <ul class="footer__list">
                <h3 class="footer__list-title">
                  Social
              </h3>

                <li class="footer__list-item">
                  <a href="#!" class="footer__list-link"> Instagram </a>
                </li>
                <li class="footer__list-item">
                  <a href="#!" class="footer__list-link"> Facebook </a>
                </li>
              </ul>

              <ul class="footer__list">
                <h3 class="footer__list-title">
                  Contacts
              </h3>
                <li class="footer__list-item">
                  Phone:
                  <a href="tel:+420608947745" class="footer__list-link">
                     +420 608 947 745
                  </a>
                </li>
                <li class="footer__list-item">
                  Adress:
                  <a href="!#" class="footer__list-link" target="_blank">
                    Kurzova 2202/20, Prague, Czech Republic
                  </a>
                </li>
                <li class="footer__list-item">
                  Email:
                  <a
                    href="mailto:info@aleximasolutions.com"
                    class="footer__list-link"
                  >
                    info@aleximasolutions.com
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </footer>
      </div>
    </div>

    <div id="preloader">
      <div class="loader"></div>
      <p class="loader-text">AleximaSolutions</p>
    </div>

  </body>
</html>
