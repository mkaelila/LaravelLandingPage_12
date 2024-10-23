<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"
    />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script src="https://unpkg.com/scrollreveal"></script>
    <title>Kaylila Larasati_XIPPLG4</title>
  </head>
  <body>
    <nav>
      <div class="nav__bar">
        <div class="nav__logo"><a href="#">Ruang Bumi</a></div>
        <ul class="nav__links">
          <li class="link"><a href="#home">HOME</a></li>
          <li class="link"><a href="#about">ABOUT</a></li>
          <li class="link"><a href="#project">PROJECT</a></li>
          <li class="link"><a href="#contact">CONTACT</a></li>
        </ul>
        <div class="nav__btns">
          <button class="btn btn__primary"><a href="Login.html"></a>Log In</button>
          <button class="btn btn__secondary">Register Now</button>
        </div>
      </div>
    </nav>

    <header class="header">
      <div class="header__container">
        <div class="header__content">
          <h1>Turning Your Vision into Reality with Superior Construction Solutions
        </h1>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam. 
          </p>
          <div class="header__btns">
            <button class="btn btn__secondary">Buy Now</button>
            <button class="btn btn__primary">Learn More</button>
          </div>
        </div>
        <div class="header__image">
          <img src="ft.jpg" alt="header" />
        </div>
      </div>
    </header>

    <section class="section__container about__container" id="about">
      <div class="about__image">
        <img src="ft1.jpg" alt="about" />
      </div>
      <div class="about__content">
        <h3>ABOUT US</h3>
        <h2 class="section__header">
            In our efforts to transform into a more modern company
        </h2>
        <p class="section__subheader">
            Focusing on the business of office space leasing, 
            building and asset management, construction services, provision of outsourcing services, 
            and security services. 
        </p>
        <div class="about__grid">
          <div class="about__card">
            <h4>PREVIOUS PROJECTS</h4>
            <p>17+</p>
          </div>
          <div class="about__card">
            <h4>YEARS EXPERIENCE</h4>
            <p>10+</p>
          </div>
          <div class="about__card">
            <h4>ONGOING PROJECTS</h4>
            <p>12</p>
          </div>
        </div>
      </div>
    </section>

    <section class="project__container" id="project">
      <div class="project__header">
        <div>
          <h2 class="section__header">Ongoing Projects</h2>
          <p class="section__subheader">
            We are dedicated to helping you find your dream property with ease
            and confidence.
          </p>
        </div>
        <div class="project__nav">
          <span><i class="ri-arrow-left-line"></i></span>
          <span><i class="ri-arrow-right-line"></i></span>
        </div>
      </div>
      <div class="swiper">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <div class="project__card">
              <img src="ft2.jpg" alt="project" />
              <div class="project__content">
                <div class="project__details">
                  <h4>Palm View Apartments</h4>
                  <p>
                    <span><i class="ri-map-pin-line"></i></span>
                    Palm Jumeirah, Dubai
                  </p>
                  <button>Book Now</button>
                </div>
                <div class="project__ratings">
                  <div class="stars">
                    <span><i class="ri-star-fill"></i></span>
                    <span><i class="ri-star-fill"></i></span>
                    <span><i class="ri-star-fill"></i></span>
                    <span><i class="ri-star-half-fill"></i></span>
                    <span><i class="ri-star-line"></i></span>
                  </div>
                  <div class="price">1200$</div>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="project__card">
              <img src="ft3.jpg" alt="project" />
              <div class="project__content">
                <div class="project__details">
                  <h4>Cityscape Residences</h4>
                  <p>
                    <span><i class="ri-map-pin-line"></i></span>
                    Downtown Dubai
                  </p>
                  <button>Book Now</button>
                </div>
                <div class="project__ratings">
                  <div class="stars">
                    <span><i class="ri-star-fill"></i></span>
                    <span><i class="ri-star-fill"></i></span>
                    <span><i class="ri-star-fill"></i></span>
                    <span><i class="ri-star-fill"></i></span>
                    <span><i class="ri-star-half-fill"></i></span>
                  </div>
                  <div class="price">1000$</div>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="project__card">
              <img src="ft.jpg" alt="project" />
              <div class="project__content">
                <div class="project__details">
                  <h4>Marina Heights</h4>
                  <p>
                    <span><i class="ri-map-pin-line"></i></span>
                    Dubai Marina
                  </p>
                  <button>Book Now</button>
                </div>
                <div class="project__ratings">
                  <div class="stars">
                    <span><i class="ri-star-fill"></i></span>
                    <span><i class="ri-star-fill"></i></span>
                    <span><i class="ri-star-fill"></i></span>
                    <span><i class="ri-star-fill"></i></span>
                    <span><i class="ri-star-fill"></i></span>
                  </div>
                  <div class="price">1100$</div>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="project__card">
              <img src="ft1.jpg" alt="project" />
              <div class="project__content">
                <div class="project__details">
                  <h4>Desert Rose Flats</h4>
                  <p>
                    <span><i class="ri-map-pin-line"></i></span>
                    Al Barsha, Dubai
                  </p>
                  <button>Book Now</button>
                </div>
                <div class="project__ratings">
                  <div class="stars">
                    <span><i class="ri-star-fill"></i></span>
                    <span><i class="ri-star-fill"></i></span>
                    <span><i class="ri-star-fill"></i></span>
                    <span><i class="ri-star-fill"></i></span>
                    <span><i class="ri-star-half-fill"></i></span>
                  </div>
                  <div class="price">1500$</div>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="project__card">
              <img src="ft2.jpg" alt="project" />
              <div class="project__content">
                <div class="project__details">
                  <h4>Golden Sands Suites</h4>
                  <p>
                    <span><i class="ri-map-pin-line"></i></span>
                    Bur Dubai
                  </p>
                  <button>Book Now</button>
                </div>
                <div class="project__ratings">
                  <div class="stars">
                    <span><i class="ri-star-fill"></i></span>
                    <span><i class="ri-star-fill"></i></span>
                    <span><i class="ri-star-fill"></i></span>
                    <span><i class="ri-star-half-fill"></i></span>
                    <span><i class="ri-star-line"></i></span>
                  </div>
                  <div class="price">1300$</div>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="project__card">
              <img src="ft3.jpg" alt="project" />
              <div class="project__content">
                <div class="project__details">
                  <h4>Bliss Residences</h4>
                  <p>
                    <span><i class="ri-map-pin-line"></i></span>
                    Jumeirah Beach, Dubai
                  </p>
                  <button>Book Now</button>
                </div>
                <div class="project__ratings">
                  <div class="stars">
                    <span><i class="ri-star-fill"></i></span>
                    <span><i class="ri-star-fill"></i></span>
                    <span><i class="ri-star-fill"></i></span>
                    <span><i class="ri-star-fill"></i></span>
                    <span><i class="ri-star-line"></i></span>
                  </div>
                  <div class="price">1400$</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="section__container contact__container" id="contact">
      <div class="contact__image">
        <img src="ft2.jpg" alt="contact" />
      </div>
      <div class="contact__content">
        <h2 class="section__header">Contact Us</h2>
        <p class="section__subheader">
          Discover the difference, where expertise meets excellence in real
          estate. Let's embark on this exciting journey together.
        </p>
        <form action="#">
          <div class="form__group">
            <input type="text" placeholder="First Name" />
            <input type="text" placeholder="Last Name" />
          </div>
          <div class="form__group">
            <input type="text" placeholder="Email Address" />
            <input type="text" placeholder="Phone Number" />
          </div>
          <textarea cols="30" rows="5" placeholder="Description"></textarea>
          <button>SEND MESSAGE</button>
        </form>
      </div>
    </section>

    <footer class="footer">
      <div class="section__container footer__container">
        <div class="footer__col">
          <h4>Ruang Bumi</h4>
          <p>
            Our team of seasoned professionals is committed to providing you
            with exceptional service, in-depth market knowledge, and
            personalized solutions tailored to your unique needs.
          </p>
          <div class="footer__socials">
            <span>
              <a href="#"><i class="ri-facebook-circle-fill"></i></a>
            </span>
            <span>
              <a href="#"><i class="ri-instagram-line"></i></a>
            </span>
            <span>
              <a href="#"><i class="ri-twitter-fill"></i></a>
            </span>
          </div>
        </div>
        <div class="footer__col">
          <h4>Company Info</h4>
          <a href="#home">Home</a>
          <a href="#about">About</a>
          <a href="#project">Project</a>
          <a href="#contact">Contact</a>
        </div>
        <div class="footer__col">
          <h4>Resources</h4>
          <a href="#">Terms</a>
          <a href="#">Conditions</a>
          <a href="#">Policy</a>
        </div>
        <div class="footer__col">
          <h4>Contact</h4>
          <a href="#">
            <span><i class="ri-mail-line"></i></span> RB@gmail.com
          </a>
          <a href="#">
            <span><i class="ri-phone-line"></i></span> +91 9876543210
          </a>
        </div>
      </div>
      <div class="footer__bar">
        Copyright © 2023 Web Design Mastery. All rights reserved.
      </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script src="test.js"></script>
  </body>
</html>