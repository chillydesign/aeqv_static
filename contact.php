<?php include('includes/header.php'); ?>





<section class="latest_section">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
        <h1>Contact</h1>
        <p>Le secrétariat de l’association se trouve au troisième étage du Collège des Colombières.<br>

Nous sommes ouverts du lundi au vendredi de 8h30 à 12h00.</p>

<p><strong>Adresse :</strong><br>
Chemin des Colombières 4 (s.332)<br>
1290 Versoix
<br><strong>Téléphone :</strong> 022.388.24.44
<br><strong>Email :</strong> <a href="mailto:info@aeqv.ch" target="_blank">info@aeqv.ch</a>


</p>

      </div><!-- END OF COL -->
      <div class="col-sm-6">
          <div class="box pink_box">
        <div id="map_container"></div>
        <script>
            var map_location = {lat: 46.2787847, lng: 6.1617023, title: 'AEQV'};
        </script>
    </div>
  </div>
</div><!-- END OF COL -->
</div>
</section>

<section class="latest_section" id="contactform">
    <div class="container">
        <div class="row ">
            <div class="col-sm-6 col-sm-push-6">
              <form action="confirmation_membres.php" method="get">

                      <div class="form_field">
                          <h2>Nous contacter</h2>
                      </div>
                      <div class="form_field">
                          <label for="nom">Nom:</label>
                          <input type="text" name="nom" id="nom" />
                      </div>

                      <div class="form_field">
                          <label for="prenom">Prénom :</label>
                          <input type="text" name="prenom" id="prenom" />
                      </div>


                      <div class="form_field">
                          <label for="email">Email :</label>
                          <input  type="email" name="email" id="email" />
                      </div>

                      <div class="form_field" >
                        <label for="message">Message : </label>
                        <textarea name="message" rows="8" cols="80"></textarea>
                      </div>

                      <div class="form_field">
                          <button type="submit">Envoyer
</button>
                      </div>

              </form>
            </div><!-- END OF COL -->
            <div class="col-sm-6 col-sm-pull-6">
                <div class="box brown_box">
                    <img src="images/aeqv18.jpg" alt="" />
                </div>
            </div><!-- END OF COL -->

        </div>
    </div><!-- end of container -->
</section>


<?php include('includes/footer.php'); ?>
