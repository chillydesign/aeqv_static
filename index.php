<?php include('includes/header.php'); ?>


    <section id="student_slider_section">

        <div class="welcome_text">
            <p>Nam ne aute noster amet, eu aut imitarentur do admodum multos ita consequat philosophari, ea iudicem firmissimum, velit an pariatur an dolore eu qui deserunt relinqueret, esse expetendis de praetermissum, id singulis familiaritatem.</p>
            <a href="#" class="button">Découvrir nos cours</a>

        </div>
        <div class="dark_bg"></div>

        <div class="slick_slider" id="student_slider" >
            <div class="slide" style="background-image:url(images/aeqv-slide1.jpg)"></div>
            <div class="slide" style="background-image:url(images/aeqv-slide2.jpg)"></div>
            <div class="slide" style="background-image:url(images/aeqv-slide3.jpg)"></div>
            <div class="slide" style="background-image:url(images/aeqv-slide4.jpg)"></div>
        </div>
    </section>


    <section id="home_page_search" class="sticky_on_desktop">
        <div class="container">
            <form action="search.php">

                <input type="text" name="keyword" id="keyword" placeholder="trouver un cours" />
                <select name="category" id="category">
                    <option value="">Secteur</option>
                    <option value="nouveaute">Nouveauté</option>
                    <option value="jeunepublic">Jeune public</option>
                    <option value="sport">Détente et Sport</option>
                    <option value="langues">Langues</option>
                    <option value="culture">Culture générale</option>
                    <option value="arts">Arts Créatifs</option>
                    <option value="informatique">Informatique</option>
                </select>
                <select name="age" id="age">
                    <option value="">Âge</option>
                    <option value="enfants">4 à 9 ans</option>
                    <option value="jeunes">10 à 18 ans</option>
                    <option value="adultes">dès 18 ans</option>
                    <option value="seniors">dès 50 ans</option>
                </select>
                <button type="submit" name="search_course">Rechercher</button>

            </form>
        </div>
    </section>


    <section id="latest_workshop" class="latest_section">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-sm-right">
                    <h2 class="big_title">Cours <br>du mois</h2>
                    <h3>Découvrez les nouveautés</h3>
                    <ul>
                      <li>Guitare électrique en groupe</li>
                      <li>Edition de photos</li>
                      <li>Poterie</li>
                      <li>Anglais niveau 1P/2P	</li>
                      <li>Comptabilité Association</li>
                    </ul>
                    <br>
                    <br>
                    <a href="#" class="button">En savoir plus</a>
                </div><!-- END OF COL -->
                <div class="col-sm-6">
                    <div class="box green_box">
                        <img src="images/aeqv4.jpg" alt="" />
                    </div>
                </div><!-- END OF COL -->
            </div>
        </div><!-- end of container -->
    </section>


    <section id="latest_course" class="latest_section">
        <div class="container">
            <div class="row ">
                <div class="col-sm-6 col-sm-push-6">
                    <h2 class="big_title ">Stage <br>du mois</h2>
                    <h3>Atelier de poterie intensif</h3>
                    <p> Lorem ea iudicem firmissimum, velit an pariatur an dolore eu qui deserunt relinqueret</p>
                    <a href="#" class="button">En savoir plus</a>
                </div><!-- END OF COL -->
                <div class="col-sm-6 col-sm-pull-6">
                    <div class="box brown_box">
                        <img src="images/aeqv7.jpg" alt="" />
                    </div>
                </div><!-- END OF COL -->

            </div>
        </div><!-- end of container -->
    </section>


    <section id="become_member" class="latest_section">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-sm-right">
                  <h2 class="big_title">Devenir <br>membre</h2>
                  <p>Do excepteur cohaerescant, voluptate te legam de vidisse amet tempor non malis malnibus. In minim duis aut pariatur, magna id an magna excepteur te ad aliqua fugiat fugiat proident, voluptate an excepteur, qui magna ingeniis se se nosm.</p>
                  <a href="devenirmembre.php" class="button">Devenir membre</a>
                </div><!-- END OF COL -->
                <div class="col-sm-6">
                    <div class="box pink_box">
                        <img src="images/lettres_AEQV.jpg" alt="" />
                    </div>
                </div>
            </div>
        </div><!-- end of container -->
    </section>


    <section id="become_teacher" class="latest_section">
        <div class="container">
            <div class="row ">
                <div class="col-sm-6 col-sm-push-6">
                  <h2 class="big_title ">Rejoindre l'équipe <br>enseignante</h2>
                  <p>In minim duis aut pariatur, magna id an magna excepteur te ad aliqua fugiat fugiat proident, voluptate an excepteur, qui magna ingeniis se se nosm. Do excepteur cohaerescant, voluptate te legam de vidisse amet tempor non malis malnibus. </p>
                  <a href="#" class="button">M'inscrire</a>
                </div><!-- END OF COL -->
                <div class="col-sm-6 col-sm-pull-6">
                    <div class="box green_box">
                        <img src="images/aeqv10.jpg" alt="" />
                    </div>
                </div><!-- END OF COL -->

            </div>
        </div><!-- end of container -->
    </section>

<?php include('includes/footer.php'); ?>
