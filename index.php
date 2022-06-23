<?php
include 'inc/header.php';
?>
<section id="hero">
  <div class="hero__container">
    <div class="hero__content">
      <div class="hamburger">
        <div class="hamburger__slice"></div>
        <div class="hamburger__slice"></div>
        <div class="hamburger__slice"></div>
      </div>
      <div
        class="animate-typing"
        data-animate-loop="false"
        data-type-speed="50"
        data-type-delay="200"
        data-remove-speed="1"
        data-remove-delay="500"
        data-cursor-speed="500">
        &lt;h1&gt;My name is Will McCloy&lt;/h1&gt;
      </div>
      <div
        class="animate-typing"
        data-animate-loop="false"
        data-type-speed="50"
        data-type-delay="3500"
        data-remove-speed="1"
        data-remove-delay="500"
        data-cursor-speed="500">
        &lt;h2&gt;I am a Web Developer&lt;/h2&gt;
      </div>
      <h1 class="hero__headline">
        My name is Will McCloy
      </h1>
      <h2 class="hero__subtitle">
        I am a Web Developer
      </h2>
      <a href="#portfolio" class="hero__foot">
        Scroll Down
        <div class="icon icon--arrow-down"></div>
      </a>
    </div>
  </div>

</section>

<section id="portfolio">
  <div class="portfolio__container">
    <div class="portfolio__content">
      <h2 class="portfolio__heading">My Portfolio</h2>
      <a href="/project1" target="_blank" class="portfolio__card">
        <div class="portfolio__image-container">
          <picture>
            <source media="(min-width: 1200px)" srcset="images/NM_xlarge.webp">
            <source media="(min-width: 992px)" srcset="images/NM_large.webp">
            <source media="(min-width: 768px)" srcset="images/NM_medium.webp">
            <img class="portfolio__image" src="images/NM_small.webp" alt="netmatters">
          </picture>
          <div class="portfolio__tooltip">A facsimile of the netmatters.co.uk website, built using
            HTML
            and Sass.
          </div>
          <div class="portfolio__image-overlay"></div>
        </div>
        <div class="card__text">
          <div class="card__title">Project 1</div>
          <div class="card__cta">View project <span class="icon icon--arrow-forward"></span></div>
        </div>
      </a>
      <a href="/project2" class="portfolio__card">
        <div class="portfolio__image-container">
          <picture>
            <source media="(min-width: 1200px)" srcset="images/imago_xlarge.webp">
            <source media="(min-width: 992px)" srcset="images/imago_large.webp">
            <source media="(min-width: 768px)" srcset="images/imago_medium.webp">
            <img class="portfolio__image" src="images/imago_small.webp" alt="time tracker">
          </picture>
          <div class="portfolio__tooltip">An app that presents a random image and gives the user the option to save the
            image to a collection. Built using Sass, JS, JQuery and HTML.
          </div>
          <div class="portfolio__image-overlay"></div>
        </div>
        <div class="card__text">
          <div class="card__title">Project 2</div>
          <div class="card__cta">View project <span class="icon icon--arrow-forward"></span></div>
        </div>
        <hr>
      </a>
      <a href="#" class="portfolio__card">
        <div class="portfolio__image-container">
          <picture>
            <div class="portfolio__tooltip">A fictional space tourism site, built using Node and
              express.
            </div>
            <source media="(min-width: 1200px)" srcset="images/space_xlarge.webp">
            <source media="(min-width: 992px)" srcset="images/space_large.webp">
            <source media="(min-width: 768px)" srcset="images/space_medium.webp">
            <img class="portfolio__image" src="images/space_small.webp" alt="netmatters">
          </picture>
          <div class="portfolio__image-overlay"></div>
        </div>
        <div class="card__text">
          <div class="card__title">Project 3</div>
          <div class="card__cta">View project <span class="icon icon--arrow-forward"></span></div>
        </div>
        <hr>
      </a>
      <a href="#" class="portfolio__card">
        <div class="portfolio__image-container">
          <picture>
            <div class="portfolio__tooltip">A 'countdown to launch' timer, built using HTML, Sass
              and
              JQuery.
            </div>
            <source media="(min-width: 1200px)" srcset="images/launch_xlarge.webp">
            <source media="(min-width: 992px)" srcset="images/launch_large.webp">
            <source media="(min-width: 768px)" srcset="images/launch_medium.webp">
            <img class="portfolio__image" src="images/launch_small.webp" alt="netmatters">
          </picture>
          <div class="portfolio__image-overlay"></div>
        </div>
        <div class="card__text">
          <div class="card__title">Project 4</div>
          <div class="card__cta">View project <span class="icon icon--arrow-forward"></span></div>
        </div>
        <hr>
      </a>
      <a href="#" class="portfolio__card">
        <div class="portfolio__image-container">
          <picture>
            <div class="portfolio__tooltip">Art gallery single page site, built using HTML, Sass and
              JQuery.
            </div>
            <source media="(min-width: 1200px)" srcset="images/art_xlarge.webp">
            <source media="(min-width: 992px)" srcset="images/art_large.webp">
            <source media="(min-width: 768px)" srcset="images/art_medium.webp">
            <img class="portfolio__image" src="images/art_small.webp" alt="netmatters">
          </picture>
          <div class="portfolio__image-overlay"></div>
        </div>
        <div class="card__text">
          <div class="card__title">Project 5</div>
          <div class="card__cta">View project <span class="icon icon--arrow-forward"></span></div>
        </div>
        <hr>
      </a>
      <a href="#" class="portfolio__card">
        <div class="portfolio__image-container">
          <picture>
            <div class="portfolio__tooltip">An e-commerce site built using HTML, Python and
              Django/Flask.
            </div>
            <source media="(min-width: 1200px)" srcset="images/audio_xlarge.webp">
            <source media="(min-width: 992px)" srcset="images/audio_large.webp">
            <source media="(min-width: 768px)" srcset="images/audio_medium.webp">
            <img class="portfolio__image" src="images/audio_small.webp" alt="netmatters">
          </picture>
          <div class="portfolio__image-overlay"></div>
        </div>

        <div class="card__text">
          <div class="card__title">Project 6</div>
          <div class="card__cta">View project <span class="icon icon--arrow-forward"></span></div>
        </div>
        <hr>
      </a>
    </div>
  </div>
</section>

<section id="contact">
  <div class="contact__container">
    <div class="contact__content">
      <div class="contact__info-container">
        <h2 class="contact__heading">Get In Touch...</h2>
        <p class="contact__text">...if you would like to know more about me, have a question or comment
          about
          my work, or would like to discuss working together. </p>
        <a href="tel:07808550651" class="contact__details contact--tel"><span class="icon icon--tel"></span> 07808
          550651</a>
        <a href="mailto:will@camel-case.co.uk" class="contact__details contact--email"><span
            class="icon icon--mail"></span> will@camel-case.co.uk</a>
        <p class="contact__text">Alternatively, complete and submit the form and I'll get back to you as
          soon as I can.</p>
      </div>
      <form id="contactForm" class="contact__form-container" onsubmit="return false">
        <div class="success">Your message has been sent. Thanks.</div>
        <div class="contact__input">
          <input id="fname" name="fname" type="text" class="input--fname" placeholder="First Name*">
        </div>
        <div class="contact__input">
          <input id="lname" name="lname" type="text" class="input--lname" placeholder="Last Name*">
        </div>
        <div class="contact__input">
          <input id="email" name="email" type="email" class="input--email"
                 placeholder="Email Address*">
        </div>
        <div class="contact__input">
          <input id="subject" name="subject" type="text" class="input--subject" placeholder="Subject">
        </div>
        <div class="contact__input">
                                <textarea id="message" name="message" class="input--message"
                                          placeholder="Message"></textarea>
        </div>
        <input type="submit" class="button" id="contact__submit">
        <div class="contact__required">Please complete all fields marked * before submitting.</div>
      </form>
    </div>
  </div>
</section>

<footer>
  <div class="footer__container">
    <div class="footer__content">
      <a href="#hero" class="footer">
        <div class="icon icon--arrow-up"></div>
        Back to top
      </a>
    </div>
  </div>
</footer>
</div>

<!-- </div> -->
<!-- Scripts -->
<script src="scripts/jquery-3.6.0.js"></script>
<!-- <script src="js/animsition/animsition.min.js"></script> -->
<script src="scripts/jquery.animateTyping.js"></script>
<script src="scripts/app.js"></script>
</body>

</html>