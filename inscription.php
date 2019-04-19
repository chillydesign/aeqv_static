<?php include('includes/header.php'); ?>





    <section id="inscription_form">
        <div class="container">
            <ul class="breadcrumbs">
                <li class="current">étape 1</li>
                <li>étape 2</li>
                <li>étape 3</li>
                <li>étape 4</li>
                <li>confirmation</li>
            </ul>


            <h1>Inscription en ligne</h1>


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
                                    <p class="meta"> pour CHF 30.- de plus, devenez membre de notre association et bénéficiez des nombreux avantages : tous les essais gratuits, entrées pour le CinéVersoix, invitations à des spectacles et manifestations, <a href="devenirmembre.php" target="_blank">Plus d’infos </a> </p>
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
                                <button type="submit" class="move_next_step" data-step="2">Continuer</button>
                            </div>


                        </div><!--  END OF step_1 -->



                        <div id="step_2" class="inscription_form_step" >
                            <div class="form_field">
                                <label for="field_7">Vérification du mail:</label>
                                <input type="text" name="field_7" id="field_7" />
                                <p class="meta">Possibilité de demander un nouveau code. <a href="#">Cliquer ici</a></p>
                                    <p class="alert alert_warning">Code incorrect. </p>
                            </div>



                            <div class="form_field">
                                <button type="submit" class="move_next_step" data-step="3">Continuer</button>
                            </div>
                        </div><!--  END OF step_2 -->



                        <div id="step_3" class="inscription_form_step">

                            <p>Votre adresse email a bien été confirmée. Il ne vous reste plus qu'à terminer de remplir le formulaire ci-dessous.</p>

                            <div class="form_field">
                                <label for="field_8">Téléphone:</label>
                                <input type="text" name="field_8" id="field_8" />
                            </div>

                            <div class="form_field">
                                <label for="field_9">Date de naissance (jj/mm/aaaa) :</label>
                                <input type="date" name="field_9" id="field_9" />
                            </div>


                            <h3>Pour les mineurs</h3>
                            <p>Responsable de la personne inscrite</p>

                            <div class="form_field">
                                <label for="field_10">Nom du responsable : </label>
                                <input type="text" name="field_10" id="field_10" />
                            </div>
                            <div class="form_field">
                                <label for="field_11">Prénom du responsable : </label>
                                <input type="text" name="field_11" id="field_11" />
                            </div>
                            <div class="form_field">
                                <label for="field_12">Téléphone du responsable : </label>
                                <input type="text" name="field_12" id="field_12" />
                            </div>
                            <div class="form_field">
                                <label for="field_13">Adresse : </label>
                                <input type="text" name="field_13" id="field_13" />
                            </div>

                            <h3>Adresse</h3>
                            <div class="form_field">
                                <label for="field_14">Adresse 2 </label>
                                <input type="text" name="field_14" id="field_14" />
                            </div>
                            <div class="form_field">
                                <label for="field_15">Num. postal : </label>
                                <input type="text" name="field_15" id="field_15" />
                            </div>
                            <div class="form_field field_error">
                                <label for="field_16">lieu : </label>
                                <input type="text" name="field_16" id="field_16" />
                            </div>
                            <div class="form_field field_error">
                                <label for="field_17">Pays </label>
                                <select   name="field_17" id="field_17" >
                                    <option value="Suisse">Suisse</option>
                                    <option value="France">France</option>
                                </select>
                            </div>


                            <div class="form_field" >
                                <label class="checkbox_label"><input type="checkbox" name="field_2" value="devenez_membre" /><span>Action mairie</span></label>
                                <p class="meta"><a href="#">Info dans CG</a> Justificatif à envoyer au bureau</p>
                            </div>
                            <div class="form_field">
                                <label class="checkbox_label"><input type="checkbox" name="field_2" value="devenez_membre" /><span>Réduction</span></label>
                                <p class="meta"><a href="#">Info dans CG</a> Justificatif à envoyer au bureau</p>
                            </div>
                            <div class="form_field">

                                <label class="checkbox_label"><input type="checkbox" name="field_2" value="devenez_membre" /><span>Conditions générales</span></label>
                                <p class="meta">En cochant cette case, vous acceptez <a href="#"> les conditions générales obligatoires</a> </p>

                            </div>


                            <div class="form_field">
                                <button type="submit" class="move_next_step" data-step="4">Continuer</button>
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
                                <label class="checkbox_label"><input type="checkbox" name="field_2" value="devenez_membre" /><span>J’ai vérifié mes données personnelles et confirme leur exactitude</span></label>
                            </div>

                            <div class="form_field">

                                <label class="checkbox_label"><input type="checkbox" name="field_2" value="devenez_membre" /><span>J’accepte les  <a href="#">  conditions générales obligatoire</a></span></label>
                            </div>


                            <div class="form_field">
                                <button type="submit">Confirmer mon inscription</button>
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
