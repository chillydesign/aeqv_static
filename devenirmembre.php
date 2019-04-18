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



    <section id="inscription_form">
        <div class="container">



            <div class="row">
                <div class="col-sm-6">


                    <form action="confirmation.php" method="get">

                        <div id="step_1" class="inscription_form_step" >

                            <div class="form_field">
                                <h4>Inscription</h4>
                                <label class="radio_label"><input type="radio" name="field_0" value="annuelle" /><span>Annuelle</span></label>
                                <label class="radio_label"><input type="radio" name="field_0" value="trimestrielle" /><span>Trimestrielle</span></label>
                                <label class="radio_label"><input type="radio" name="field_0" value="cours_d_essai" /><span>Cours d’essai</span></label>
                            </div>

                            <div class="form_field">
                                <label class="radio_label"><input type="radio" name="field_1" value="paiement_en_1x" /><span>Paiement en 1x</span></label>
                                <label class="radio_label"><input type="radio" name="field_1" value="paiement_en_3x" /><span>Paiement en 3x</span></label>
                            </div>


                            <div class="form_field">


                                <div class="form_field">
                                    <label class="checkbox_label"><input type="checkbox" name="field_2" value="devenez_membre" /><span>Devenez membre</span></label>
                                    <p class="meta"> pour CHF 30.- de plus, devenez membre de notre association et bénéficiez des nombreux avantages : tous les essais gratuits, entrées pour le CinéVersoix, invitations à des spectacles et manifestations, <a href="#">Plus d’infos </a> fenêtre qui s’ouvre dans un autre onglet avec la page « à propos » </p>
                                </div>


                            </div>

                            <div class="form_field">
                                <h4>Titre</h4>
                                <label class="radio_label"><input type="radio" name="field_3" value="Madame" /><span>Madame</span></label>
                                <label class="radio_label"><input type="radio" name="field_3" value="Monsieur" /><span>Monsieur</span></label>
                            </div>

                            <div class="form_field">
                                <label for="field_4">Nom:</label>
                                <input type="text" name="field_4" id="field_4" />
                            </div>

                            <div class="form_field">
                                <label for="field_5">Prénom :</label>
                                <input type="text" name="field_5" id="field_5" />
                            </div>

                            <div class="form_field">
                                <label for="field_6">Email :</label>
                                <input  type="email" name="field_6" id="field_6" />
                            </div>

                            <div class="form_field">
                                <button type="submit" class="move_next_step" data-step="2">Continue</button>
                            </div>


                        </div><!--  END OF step_1 -->



                        <div id="step_2" class="inscription_form_step" >
                            <div class="form_field">
                                <label for="field_7">Vérification du mail:</label>
                                <input type="text" name="field_7" id="field_7" />
                                <p class="meta">Possibilité de demander un nouveau code. <a href="#">Click here</a></p>
                                    <p class="alert alert_warning">Code was incorrect. </p>
                            </div>



                            <div class="form_field">
                                <button type="submit" class="move_next_step" data-step="3">Continue</button>
                            </div>
                        </div><!--  END OF step_2 -->



                        <div id="step_3" class="inscription_form_step">

                            <p>Votre adresse email a bien été confirmée. Il ne vous reste plus qu'à terminer de remplir le formulaire ci-dessous.</p>

                            <div class="form_field">
                                <label for="field_8">téléphone:</label>
                                <input type="text" name="field_8" id="field_8" />
                            </div>

                            <div class="form_field">
                                <label for="field_9">date de naiss. (jj/mm/aaaa) :</label>
                                <input type="date" name="field_9" id="field_9" />
                            </div>


                            <h3>Pour les mineurs</h3>
                            <p> responsable de la personne inscrite</p>

                            <div class="form_field">
                                <label for="field_10">nom du responsable : </label>
                                <input type="text" name="field_10" id="field_10" />
                            </div>
                            <div class="form_field">
                                <label for="field_11">prénom du responsable : </label>
                                <input type="text" name="field_11" id="field_11" />
                            </div>
                            <div class="form_field">
                                <label for="field_12">téléphone du responsable : </label>
                                <input type="text" name="field_12" id="field_12" />
                            </div>
                            <div class="form_field">
                                <label for="field_13">adresse : </label>
                                <input type="text" name="field_13" id="field_13" />
                            </div>

                            <h3>Addresse</h3>
                            <div class="form_field">
                                <label for="field_14">adresse 2 </label>
                                <input type="text" name="field_14" id="field_14" />
                            </div>
                            <div class="form_field">
                                <label for="field_15">num. postal : </label>
                                <input type="text" name="field_15" id="field_15" />
                            </div>
                            <div class="form_field field_error">
                                <label for="field_16">lieu : </label>
                                <input type="text" name="field_16" id="field_16" />
                            </div>
                            <div class="form_field field_error">
                                <label for="field_17">pays </label>
                                <select   name="field_17" id="field_17" >
                                    <option value="Suisse">Suisse</option>
                                    <option value="France">France</option>
                                </select>
                            </div>


                            <div class="form_field" >
                                <label class="checkbox_label"><input type="checkbox" name="field_2" value="devenez_membre" /><span>action mairie</span></label>
                                <p class="meta"><a href="#">info dans CG</a> justificatif à envoyer au bureau</p>
                            </div>
                            <div class="form_field">
                                <label class="checkbox_label"><input type="checkbox" name="field_2" value="devenez_membre" /><span>réduction</span></label>
                                <p class="meta"><a href="#">info dans CG</a> justificatif à envoyer au bureau</p>
                            </div>
                            <div class="form_field">

                                <label class="checkbox_label"><input type="checkbox" name="field_2" value="devenez_membre" /><span>conditions générales</span></label>
                                <p class="meta">en cochant cette case, vous acceptez.    <a href="#"> les conditions générales obligatoire</a> </p>

                            </div>


                            <div class="form_field">
                                <button type="submit" class="move_next_step" data-step="4">Continue</button>
                            </div>
                        </div><!--  END OF step_3 -->



                        <div id="step_4" class="inscription_form_step">

                            <h3>Coordonnées : </h3>

                            <p>
                                Madame X <br />
                                Chemin des Colombières,  <br />
                                1290 Versoix <br />
                                Téléphone: 1234567 <br />
                                Email: email@website.com <br />
                            </p>

                            <p>Je valide mon inscription au cours de :</p>

                            <p>Titre <br/>
                            Jour, heure</p>

                            <p>Et m’engage à régler le montant du cours dans les 10 jours dès réception du bulletin de versement.</p>


                            <div class="form_field">
                                <label class="checkbox_label"><input type="checkbox" name="field_2" value="devenez_membre" /><span>    J’ai vérifié mes données personnelles et confirme leur exactitude</span></label>
                            </div>

                            <div class="form_field">

                                <label class="checkbox_label"><input type="checkbox" name="field_2" value="devenez_membre" /><span>J’accepte les  <a href="#">  conditions générales obligatoire</a></span></label>
                            </div>


                            <div class="form_field">
                                <button type="submit">  Confirmer mon inscription</button>
                            </div>

                        </div><!--  END OF step_4 -->









                    </form>


                </div><!-- END OF .col-sm-6 -->
                <div class="col-sm-6">
                    <div class="box pink_box">
                        <img src="images/lettres_AEQV.jpg" alt="" />
                    </div>
                </div>
            </div> <!-- END OF .row -->
        </div><!-- END OF .container -->
    </section>


<?php include('includes/footer.php'); ?>
