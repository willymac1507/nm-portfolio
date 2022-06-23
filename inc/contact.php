<?php ?>

<section id="contact">
  <div class="contact__container">

    <div class="contact__content">

      <div class="contact__info-container">
        <h2 class="contact__heading">Get In Touch...</h2>
        <p class="contact__text">...if you would like to know more about me, have a question or comment
          about my work, or would like to discuss working together. </p>
        <a href="tel:07808550651" class="contact__details contact--tel"><span class="icon icon--tel"></span> 07808
          550651</a>
        <a href="mailto:will@camel-case.co.uk" class="contact__details contact--email"><span
            class="icon icon--mail"></span> will@camel-case.co.uk</a>
        <p class="contact__text">Alternatively, complete and submit the form, and I'll get back to you as
          soon as I can.</p>
      </div>

      <form id="contactForm" class="contact__form-container" onsubmit="return false">
        <div class="success">Your message has been sent. Thanks.</div>
        <div class="contact__input">
          <label for="name"></label>
          <input id="name" name="name" type="text" class="input--fname" placeholder="Your Name*">
        </div>
        <div class="contact__input">
          <label for="email"></label>
          <input id="email" name="email" type="email" class="input--email" placeholder="Email Address*">
        </div>
        <div class="contact__input">
          <label for="subject"></label>
          <input id="subject" name="subject" type="text" class="input--subject" placeholder="Subject">
        </div>
        <div class="contact__input">
          <label for="message"></label>
          <textarea id="message" name="message" rows=50 class="input--message" placeholder="Message"></textarea>
        </div>
        <input type="submit" class="button" id="contact__submit">
        <div class="contact__required">Please complete all fields marked * before submitting.</div>
      </form>

    </div>

  </div>
</section>
