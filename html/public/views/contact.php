<section class="contact-section">
        <h2 class="section-title">Contact Form</h2>
        <div class="contact-col">
            <form class="contact-form">
              <h3>Contact</h3>
              <label for="naam">Naam</label>
              <input type="text" id="naam" name="naam" required>
              <label for="email">E-mail</label>
              <input type="email" id="email" name="email" required>
              <label for="bericht">Bericht</label>
              <textarea id="bericht" name="bericht" rows="5" required></textarea>
              <button type="submit" action="process-beta.php" method="POST">Verstuur</button>
            </form>
          </div>
        </div>
      </section>