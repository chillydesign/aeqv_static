<?php include('includes/header.php'); ?>




<section class="latest_section">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <h1>Transmettez votre passion</h1>
                <p>Rejoignez notre association et proposez VOTRE formule de cours.</p>
                <h3>Etape 1 : Construire son projet</h3>
                <ul>
                  <li>Définir les objectifs, les pré-requis (niveau) et l’âge du public cible,</li>
                  <li>Définir les besoins en matériel et le prix (approximatif),</li>
                  <li>Définir la durée idéale pour votre activité : sur l’année (30 cours), sous forme de stage (durée limitée),</li>
                  <li>Définir le nombre d’heures hebdomadaires,</li>
                  <li>Définir le nombre minimum et maximum de participants pour votre activité.</li>
                </ul>
            </div><!-- END OF COL -->
            <div class="col-sm-6">
                <div class="box pink_box">
                    <img src="images/aeqv-slide1.jpg" alt="" />
                </div>
            </div><!-- END OF COL -->
        </div>
    </div><!-- end of container -->
</section>

<section class="latest_section">
    <div class="container">
        <div class="row ">
            <div class="col-sm-6 col-sm-push-6">
                <h3>Etape 2 : compléter le formulaire nouveauté</h3>
                <p>
                  Télécharger le formulaire de nouveauté en cliquant sur le lien ci-dessous et le compléter.<br>
                  <a href="#" target="_blank">Questionnaire nouveauté</a>
                </p>
            </div><!-- END OF COL -->
            <div class="col-sm-6 col-sm-pull-6">
                <div class="box brown_box">
                    <img src="images/aeqv10.jpg" alt="" />
                </div>
            </div><!-- END OF COL -->

        </div>
    </div><!-- end of container -->
</section>


    <section id="inscriptionmembre">
        <div class="container">



            <div class="row">
                <div class="col-sm-6">


                    <form action="confirmation_professeurs.php" method="get">

                            <div class="form_field">
                                <h3>Etape 3 : nous écrire</h3>
                            </div>




                            <div class="form_field">
                                <h4>Titre</h4>
                                <label class="radio_label"><input type="radio" name="politesse" value="Madame" /><span>Madame</span></label>
                                <label class="radio_label"><input type="radio" name="politesse" value="Monsieur" /><span>Monsieur</span></label>
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

                            <div class="form_field">
                                <label for="sujet">Sujet:</label>
                                <input type="text" name="sujet" id="sujet" />
                            </div>

                            <div class="form_field" >
                                <label for="message">Message : </label>
                                <textarea name="message" rows="8" cols="80"></textarea>
                            </div>

                            <div class="form_field" >
                                <label for="message">Ajouter des documents (CV, Questionnaire nouveauté,  dossier, photos, autres..) : </label>
                                <input type="file" id="documents" name="documents" accept="*">
                            </div>

                            <div class="form_field">
                                <button type="submit">Envoyer
</button>
                            </div>

                    </form>


                </div><!-- END OF .col-sm-6 -->
                <div class="col-sm-6">
                    <div class="box green_box">
                        <img src="images/aeqv2.jpg" alt="" />
                    </div>
                </div><!-- END OF COL -->
            </div> <!-- END OF .row -->
        </div><!-- END OF .container -->
    </section>


<?php include('includes/footer.php'); ?>
