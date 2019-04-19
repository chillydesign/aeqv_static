<?php include('includes/header.php'); ?>




<section class="latest_section">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <h1>Devenir membre de l'association</h1>
                <p>
                  Notre association existe avant tout au travers de ses membres.<br>
                  En devenant membre, vous permettez à notre association de poursuivre son activité auprès de la population de Versoix et de ses environs qui vise à proposer des formations et des loisirs proches de chez vous.
                </p>
                <p>Vous bénéficiez aussi de nombreux avantages : </p>
                <ul>
                  <li>nombre illimité d’essais gratuits*</li>
                  <li>participation offerte aux sorties culturelles organisées par l’association</li>
                  <li>réduction du prix des entrées CinéVersoix</li>
                  <li>au choix : un billet gratuit au CinéVersoix ou au spectacle de danse</li>
                </ul>
                <p><em>*Avantage non cumulable sur un même cours</em></p>
            </div><!-- END OF COL -->
            <div class="col-sm-6">
                <div class="box pink_box">
                    <img src="images/aeqv4.jpg" alt="" />
                </div>
            </div><!-- END OF COL -->
        </div>
    </div><!-- end of container -->
</section>



    <section id="inscriptionmembre">
        <div class="container">



            <div class="row">
                <div class="col-sm-6">


                    <form action="confirmation_membres.php" method="get">

                            <div class="form_field">
                                <h3>Je souhaite devenir membre et soutenir Ecole & Quartier</h3>
                                <label class="radio_label"><input type="radio" name="type_membre" value="membre" /><span>Membre<br>CHF 30.-/an</span></label>
                                <label class="radio_label"><input type="radio" name="type_membre" value="membre" /><span>Membre de soutien<br>CHF 60.-/an</span></label>
                                <label class="radio_label"><input type="radio" name="type_membre" value="membre" /><span>Carte famille<br>CHF 50.-/an</span></label>
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
                                <label for="adresse">Adresse :</label>
                                <input  type="text" name="adresse" id="adresse" />
                            </div>

                            <div class="form_field">
                                <label for="npa">NPA :</label>
                                <input  type="text" name="npa" id="npa" />
                            </div>

                            <div class="form_field">
                                <label for="lieu">Lieu :</label>
                                <input  type="text" name="lieu" id="lieu" />
                            </div>

                            <div class="form_field">
                                <label for="phone">Téléphone:</label>
                                <input  type="phone" name="phone" id="phone" />
                            </div>

                            <div class="form_field">
                                <label for="email">Email :</label>
                                <input  type="email" name="email" id="email" />
                            </div>

                            <div class="form_field" >
                                <label class="checkbox_label"><input type="radio" name="choix" value="cine" /><span>Je souhaite recevoir un billet gratuit pour le CinéVersoix</span></label>
                                <p style="padding-bottom:0;"><em>ou</em></p>
                                  <label class="checkbox_label"><input type="radio" name="choix" value="danse" /><span>Je souhaite recevoir un billet gratuit pour le spectacle de danse</span></label>
                            </div>
                            <div class="form_field">
                                <label class="checkbox_label"><input type="checkbox" name="newsletter" value="newsletter" /><span>Je souhaite recevoir la newsletter une fois par mois.</span></label>
                            </div>

                            <div class="form_field">
                                <button type="submit">Je confirme mon adhésion
</button>
                            </div>

                    </form>


                </div><!-- END OF .col-sm-6 -->
            </div> <!-- END OF .row -->
        </div><!-- END OF .container -->
    </section>


<?php include('includes/footer.php'); ?>
