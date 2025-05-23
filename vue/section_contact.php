 <!-- Section Contact -->
 <section id="contact" class="contact section">

    <!-- Titre de la Section -->
    <div class="container section-title" data-aos="fade-up">
      <h2>Me Contacter</h2>
      <p>Besoin d'aide ou d'informations ? Contactez-nous via les moyens ci-dessous.</p>
    </div><!-- Fin Titre de la Section -->
    
    <div class="container" data-aos="fade-up" data-aos-delay="100">
    
      <div class="row gy-4">
    
        <div class="col-lg-6">
          <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="200">
            <i class="bi bi-geo-alt"></i>
            <h3>Adresse</h3>
            <p>6-8 Impasse Des 2 Cousins</p>
          </div>
        </div><!-- Fin Élément Info -->
    
        <div class="col-lg-3 col-md-6">
          <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="300">
            <i class="bi bi-telephone"></i>
            <h3>Appelez-nous</h3>
            <p>+33 123 456 789</p>
          </div>
        </div><!-- Fin Élément Info -->
    
        <div class="col-lg-3 col-md-6">
          <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="400">
            <i class="bi bi-envelope"></i>
            <h3>Envoyez-nous un Email</h3>
            <p>truong-son.vu@mediaschool.me</p>
          </div>
        </div><!-- Fin Élément Info -->
    
      </div>
    
      <div class="row gy-4 mt-1">
        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2624.999231293062!2d2.292292315674162!3d48.87379197928871!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66fdf8f8c6b1b%3A0x8c8c8c8c8c8c8c8c!2sEcole%20IRis%2C%206-8%20Impasse%20Des%202%20Cousins%2C%2075017%20Paris%2C%20France!5e0!3m2!1sen!2sus!4v1676961268712!5m2!1sen!2sus" frameborder="0" style="border:0; width: 100%; height: 400px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div><!-- Fin Google Maps -->
    
        <div class="col-lg-6">
          <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="400">
            <div class="row gy-4">
    
              <div class="col-md-6">
                <input type="text" name="name" class="form-control" placeholder="Votre Nom" required="">
              </div>
    
              <div class="col-md-6 ">
                <input type="email" class="form-control" name="email" placeholder="Votre Email" required="">
              </div>
    
              <div class="col-md-12">
                <input type="text" class="form-control" name="subject" placeholder="Sujet" required="">
              </div>
    
              <div class="col-md-12">
                <textarea class="form-control" name="message" rows="6" placeholder="Message" required=""></textarea>
              </div>
    
              <div class="col-md-12 text-center">
                <div class="loading">Chargement</div>
                <div class="error-message"></div>
                <div class="sent-message">Votre message a été envoyé. Merci !</div>
    
                <button type="submit">Envoyer le message</button>
              </div>
    
            </div>
          </form>
        </div><!-- Fin Formulaire de Contact -->
    
      </div>
    
    </div>

</section><!-- /Section Contact -->
