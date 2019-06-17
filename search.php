<?php include('includes/header.php'); ?>


    <h1 class="for_screen_readers">Trouver un cours</h1>

    <section id="search_results">
        <div class="container">
            <div class="row">

                <aside class="col-sm-3 sticky_on_desktop">

                    <form action="search.php" id="search_form">
                        <div class="search_section">
                            <input type="text" name="keyword" id="keyword" placeholder="trouver un cours" />

                        </div>

                        <div class="search_section">
                            <h4>Secteur</h4>
                            <label class="radio_label"><input type="checkbox" name="categorie" value="nouveaute" /><span>Nouveautés</span></label>
                            <label class="radio_label"><input type="checkbox" name="categorie" value="jeunepublic" /><span>Jeune public</span></label>
                            <label class="radio_label"><input type="checkbox" name="categorie" value="détente_et_sport" /><span>Détente et Sport</span></label>
                              <label class="radio_label"><input type="checkbox" name="categorie" value="langues" /><span>Langues</span></label>
                              <label class="radio_label"><input type="checkbox" name="categorie" value="culture" /><span>Culture</span></label>
                            <label class="radio_label"><input type="checkbox" name="categorie" value="arts" /><span>Arts créatifs</span></label>
                            <label class="radio_label"><input type="checkbox" name="categorie" value="informatique" /><span>Informatique</span></label>
                        </div>
                        <div class="search_section">
                            <h4>Jour</h4>
                            <label class="radio_label"><input type="checkbox" name="jour" value="Lundi" /><span>Lundi</span></label>
                            <label class="radio_label"><input type="checkbox" name="jour" value="Mardi" /><span>Mardi</span></label>
                            <label class="radio_label"><input type="checkbox" name="jour" value="Mercredi" /><span>Mercredi</span></label>
                            <label class="radio_label"><input type="checkbox" name="jour" value="Jeudi" /><span>Jeudi</span></label>
                            <label class="radio_label"><input type="checkbox" name="jour" value="Vendredi" /><span>Vendredi</span></label>
                            <label class="radio_label"><input type="checkbox" name="jour" value="Samedi" /><span>Samedi</span></label>
                        </div>
                        <div class="search_section">
                            <h4>Âge</h4>
                            <label class="radio_label"><input type="checkbox" name="age" value="enfants" /><span>4 à 9 ans</span></label>
                            <label class="radio_label"><input type="checkbox" name="age" value="jeunes_Adultes" /><span>10 à 18 ans</span></label>
                            <label class="radio_label"><input type="checkbox" name="age" value="adultes" /><span>Dès 18 ans</span></label>
                            <label class="radio_label"><input type="checkbox" name="age" value="seniors" /><span>Dès 50 ans</span></label>
                        </div>
                        <div class="search_section">
                            <h4>Niveau</h4>
                            <label class="radio_label"><input type="checkbox" name="level" value="debutant" /><span>Débutant</span></label>
                            <label class="radio_label"><input type="checkbox" name="level" value="moyen" /><span>Moyen</span></label>
                            <label class="radio_label"><input type="checkbox" name="level" value="avance" /><span>Avancé</span></label>
                        </div>
                        <div class="search_section">
                            <h4>Type</h4>
                            <label class="radio_label"><input type="checkbox" name="type" value="annuel" /><span>Annuel</span></label>
                            <label class="radio_label"><input type="checkbox" name="type" value="stage" /><span>Stage</span></label>
                        </div>
                        <div class="search_section">
                            <button type="submit" name="search_course">Rechercher</button>
                        </div>

                        <div class="search_section">
                            <a href="#" id="reset_filters" class="button button_grey">
                              <span class="icon reset_icon"></span> Réinitialiser
                            </a>
                        </div>


                    </form>
                </aside>

                <div class="col-sm-9">
                  <h2>6 Activités trouvées</h2>

                    <div class="row">
                        <div class="col-sm-4">
                            <a class="box box_course box_cat_1" href="course.php">
                                <span class="box_content">
                                    <span class="box_title">Titre du cours</span>
                                    <span class="box_description">Débutant</span>
                                </span>
                                <span class="box_age">Pour adulte</span>
                            </a>


                        </div>
                        <div class="col-sm-4">
                            <a class="box box_course box_cat_2" href="course.php">
                                <span class="box_content">
                                    <span class="box_title">Titre du cours</span>
                                    <span class="box_description">Moyen</span>
                                </span>
                                <span class="box_age">Pour adulte</span>
                            </a>
                        </div>
                        <div class="col-sm-4">
                            <a class="box box_workshop box_cat_3" href="course.php">
                                <span class="box_content">
                                    <span class="box_title">Titre du cours</span>
                                    <span class="box_description">Débutant</span>
                                </span>
                                <span class="box_age">Pour adulte</span>
                            </a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            <a class="box box_workshop box_cat_4" href="course.php">
                                <span class="box_content">
                                    <span class="box_title">Titre du cours</span>
                                    <span class="box_description">Avancé</span>
                                </span>
                                <span class="box_age">Pour adulte</span>
                            </a>
                        </div>
                        <div class="col-sm-4">
                            <a class="box box_workshop box_cat_5" href="course.php">
                                <span class="box_content">
                                    <span class="box_title">Titre du cours</span>
                                    <span class="box_description">Débutant</span>
                                </span>
                                <span class="box_age">Pour adulte</span>
                            </a>
                        </div>
                        <div class="col-sm-4">
                            <a class="box box_course box_cat_6" href="course.php">
                                <span class="box_content">
                                    <span class="box_title">Titre du cours</span>
                                    <span class="box_description">Avancé</span>
                                </span>
                                <span class="box_age">Pour adulte</span>
                            </a>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-4">
                            <a class="box box_course box_cat_3" href="course.php">
                                <span class="box_content">
                                    <span class="box_title">Titre du cours</span>
                                    <span class="box_description">Moyen</span>
                                </span>
                                <span class="box_age">Pour adulte</span>
                            </a>


                        </div>
                        <div class="col-sm-4">
                            <a class="box box_workshop box_cat_2" href="course.php">
                                <span class="box_content">
                                    <span class="box_title">Titre du cours</span>
                                    <span class="box_description">Moyen</span>
                                </span>
                                <span class="box_age">Pour adulte</span>
                            </a>
                        </div>
                        <div class="col-sm-4">
                            <a class="box box_course box_cat_1" href="course.php">
                                <span class="box_content">
                                    <span class="box_title">Titre du cours</span>
                                    <span class="box_description">Avancé</span>
                                </span>
                                <span class="box_age">Pour adulte</span>
                            </a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            <a class="box box_course box_cat_4" href="course.php">
                                <span class="box_content">
                                    <span class="box_title">Titre du cours</span>
                                    <span class="box_description">Débutant</span>
                                </span>
                                <span class="box_age">Pour adulte</span>
                            </a>
                        </div>
                        <div class="col-sm-4">
                          <a class="box box_workshop box_cat_6" href="course.php">
                                <span class="box_content">
                                    <span class="box_title">Titre du cours</span>
                                    <span class="box_description">Débutant</span>
                                </span>
                                <span class="box_age">Pour adulte</span>
                            </a>
                        </div>
                        <div class="col-sm-4">
                          <a class="box box_workshop box_cat_5" href="course.php">
                              <span class="box_content">
                                  <span class="box_title">Titre du cours</span>
                                  <span class="box_description">Avancé</span>
                              </span>
                              <span class="box_age">Pour adulte</span>
                          </a>
                        </div>
                      </div>


                    </div><!-- end of col -->
                </div>
            </div>
        </section>

<?php include('includes/footer.php'); ?>
