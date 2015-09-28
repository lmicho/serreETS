<!DOCTYPE html>
<html lang="en">

    <?php include "includes/common_head.php"; ?>

    <body data-spy="scroll" data-offset="0" data-target="#navbar-main">

        <?php include "includes/common_header.php"; ?>

        <!-- ==== HEADERWRAP ==== -->
        <div id="headerwrap" name="home" id="home">
            <header class="clearfix">
                <h1>Le génie du développement durable</h1>
                <p>Lorem ipsum dolor sit amet, cu menandri molestiae voluptaria eam,<br>
                    invidunt reprehendunt nec ei. Sonet regione consulatu vel id.</p>
                <a href="#about" class="smoothScroll btn btn-lg">Notre mission</a> 
            </header>
        </div>
        <!-- /headerwrap --> 

        <!-- ==== ABOUT ==== -->
        <div id="about" name="about">
            <div class="container">
                <div class="row white">
                    <h2 class="centered">NOTRE MISSION</h2>
                    <hr>
                    <div class="col-md-6"> <img class="img-responsive" src="img/about/about1.jpg" align=""> </div>
                    <div class="col-md-6">
                        <h3>Objectifs</h3>
                        <p>Les principaux objectifs du projet SerreÉTS sont de rallier une communauté multidisciplinaire d'étudiants en ingénierie à l'ÉTS pour concevoir et construire des serres écoénergétiques à environnement contrôlé et développer des systèmes de production agroalimentaire urbains dans une optique de rentabilité et de responsabilité sociale et environnementale.</p>
                        <ul>
                            <li>Collaborer avec des spécialistes du domaine et partager le fruit de nos recherches avec l'industrie et la communauté.</li>
                            <li>Promouvoir l'indépendance alimentaire en produisant localement nos aliments grâce à des technologies alternatives tout aussi efficaces qu'écologiques.</li>
                            <li>Rendre possible l'accès à des fruits et légumes frais et d'une grande variété tout au long de l’année.</li>
                        </ul>
                    </div>
                </div>
                <!-- row --> 
            </div>
        </div>
        <!-- container --> 

        <!-- ==== SERVICES ==== -->
        <div id="services" name="services">
            <div class="container">
                <div class="row">
                    <h2 class="centered">NOTRE SERRE</h2>
                    <hr>
                    <div class="col-lg-8 col-lg-offset-2">
                        <p class="large">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut eaque, laboriosam veritatis, quos non quis ad perspiciatis, totam corporis ea, alias ut unde.</p>
                    </div>
                    <div class="col-lg-4 callout"> <i class="fa fa-pagelines fa-3x"></i>
                        <h3>Environnement</h3>
                        <p>Erat imperdiet dissentias ea usu, alia aliquid corrumpit ea qui. Eu vim oratio conclusionemque, vel at errem nominavi delicatissimi.</p>
                    </div>
                    <div class="col-lg-4 callout"> <i class="fa fa-gears fa-3x"></i>
                        <h3>Technologies</h3>
                        <p>Erat imperdiet dissentias ea usu, alia aliquid corrumpit ea qui. Eu vim oratio conclusionemque, vel at errem nominavi delicatissimi.</p>
                    </div>
                    <div class="col-lg-4 callout"> <i class="fa fa-line-chart fa-3x"></i>
                        <h3>Analyse en temps réel</h3>
                        <p>Erat imperdiet dissentias ea usu, alia aliquid corrumpit ea qui. Eu vim oratio conclusionemque, vel at errem nominavi delicatissimi.</p>
                    </div>
                </div>
                <!-- row --> 
                <!--a href="../serreETS-client_web/" class="btn btn-lg">État de la serre</a-->
            </div>
        </div>
        <!-- container --> 

        <!-- ==== PORTFOLIO ==== -->
        <div id="portfolio" name="portfolio">
            <div class="container">
                <div class="row">
                    <h2 class="centered">NOS PROJETS</h2>
                    <hr>
                    <div class="col-lg-8 col-lg-offset-2 centered">
                        <p class="large">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut eaque, laboriosam veritatis, quos non quis ad perspiciatis, totam corporis ea, alias ut unde.</p>
                    </div>
                </div>
                <!-- /row -->
                <div class="container">
                    <div class="row">
                        <div class="clearfix">
                            <?php
                            $string = file_get_contents("data/projets.json");
                            $json_a = json_decode($string, true);
                            foreach ($json_a as $project_name => $project_a) {
                              ?>


                              <div class="col-md-4 ">
                                  <div class="grid mask">
                                      <figure> 
                                          <a href="<?php echo $project_a['url']; ?>">
                                              <img class="img-responsive" src="img/portfolio/folio01.jpg" title="<?php echo $project_name; ?>" alt="<?php echo $project_name; ?>" />
                                          </a>
                                      </figure>
                                      <!-- /figure --> 
                                  </div>
                                  <!-- /grid-mask --> 
                              </div>
                              <?php
                            }
                            ?>
                        </div>
                    </div>
                    <!-- /row --> 
                </div>
                <!-- /row --> 
            </div>
        </div>
        <!-- /container --> 

        <!-- ==== TEAM MEMBERS ==== -->
        <div id="team" name="team">
            <div class="container">
                <div class="row centered">
                    <h2 class="centered">NOTRE ÉQUIPE</h2>
                    <hr>

                    <div class="clearfix">
                        <?php
                        $string = file_get_contents("data/membres.json");
                        $json_a = json_decode($string, true);
                        foreach ($json_a as $person_name => $person_a) {
                          if ($person_a['front'] == "true") {
                            ?>
                            <div class="col-lg-3 centered">
                                <img class="img img-circle" src="img/team/default-user.png" height="120px" width="120px" alt="">
                                <h4><strong><?php echo $person_name; ?></strong></h4>
                                <p><?php echo $person_a['role']; ?></p>
                            </div>
                            <?php
                          }
                        }
                        ?>
                    </div>
                    <div id="members-wrapper" class="clearfix" style="display: none;">
                        <?php
                        $string = file_get_contents("data/membres.json");
                        $json_a = json_decode($string, true);
                        foreach ($json_a as $person_name => $person_a) {
                          if ($person_a['front'] == "false") {
                            ?>
                            <div class="col-lg-3 centered">
                                <img class="img img-circle" src="img/team/default-user.png" height="120px" width="120px" alt="">
                                <h4><strong><?php echo $person_name; ?></strong></h4>
                                <p><?php echo $person_a['role']; ?></p>
                            </div>
                            <?php
                          }
                        }
                        ?>
                    </div>
                    <div class="col-lg-8 col-lg-offset-2 centered">
                        <span id="see-more" style="display: block; cursor: pointer; text-align: center;"><i class="fa fa-angle-double-down"></i></span>
                    </div>
                    <div class="col-lg-8 col-lg-offset-2 centered">
                        <p class="large">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut eaque, laboriosam veritatis, quos non quis ad perspiciatis, totam corporis ea, alias ut unde.</p>
                    </div>
                </div>
            </div>
            <!-- row --> 
        </div>
        <!-- container -->

        <!-- ==== RECRUTMENT ==== -->
        <div id="enlisting" name="enlisting">
            <div class="container">
                <div class="row white">
                    <h2 class="centered">RECRUTEMENT</h2>
                    <hr>
                    <div class="col-lg-8 col-lg-offset-2 centered">
                        <p class="large">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut eaque, laboriosam veritatis, quos non quis ad perspiciatis, totam corporis ea, alias ut unde.</p>
                    </div>
                    <div class="col-lg-8 col-lg-offset-2 centered">

                        <form id="enlisting" method="post" class="form" role="form" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                            <div class="row">
                                <div class="col-xs-6 col-md-6 form-group">
                                    <input class="form-control" id="firstName" name="firstName" placeholder="Prénom" type="text" required />
                                </div>
                                <div class="col-xs-6 col-md-6 form-group">
                                    <input class="form-control" id="lastName" name="lastName" placeholder="Nom" type="text" required />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-6 col-md-6 form-group">
                                    <select class="form-control" id="program" name="program">
                                        <option>Programme d'études</option>
                                        <option>Génie construction</option>
                                        <option>Génie mécanique</option>
                                        <option>Génie électrique</option>
                                        <option>Génie production automatisée</option>
                                        <option>Génie gestion des opérations</option>
                                        <option>Génie logiciel</option>
                                        <option>Génie technologie de l'information</option>
                                    </select>
                                </div>
                                <div class="col-xs-6 col-md-6 form-group">
                                    <input class="form-control" id="email" name="email" placeholder="Courriel" type="email" required />
                                </div>
                            </div>

                            <textarea class="form-control" id="message" name="message" placeholder="Message" rows="5"></textarea>
                            <div class="row">
                                <div class="col-xs-12 col-md-12">
                                    <button class="btn btn btn-lg" type="submit" name="enlisting-submit">Envoyer</button>
                                </div>
                            </div>
                            <div class="row">
                                <?php
                                //if "email" variable is filled out, send email
                                if (isset($_POST['enlisting-submit'])) {

                                  //Email information
                                  $admin_email = "lauriane.b.michaud@gmail.com";

                                  //subject
                                  $subject = 'Recrutement SerreETS';

                                  // message
                                  $firstName = @trim(stripslashes($_POST['firstName']));
                                  $lastName = @trim(stripslashes($_POST['lastName']));
                                  $program = @trim(stripslashes($_POST['program']));
                                  $email = @trim(stripslashes($_POST['email']));
                                  $message2 = @trim(stripslashes($_POST['message']));

                                  $message = '
                                  <html>
                                  <body>
                                    <p>Une nouvelle personne est intéressée à faire partie du club.</p><br />
                                    <p>Nom : ' . $firstName . ' ' . $lastName . '</p>
                                    <p>Programme d\'études : ' . $program . '</p>
                                    <p>Courriel : ' . $email . '</p>
                                    <p>Message : ' . $message2 . '</p>
                                  </body>
                                  </html>';

                                  // To send HTML mail, the Content-type header must be set
                                  $headers = 'MIME-Version: 1.0' . "\r\n";
                                  $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

                                  //send email
                                  mail($admin_email, $subject, $message, $headers);

                                  //Email response
                                  echo '<p>Votre message a bien été envoyé. Merci.</p>';
                                }
                                ?>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- row --> 
            </div>
        </div>
        <!-- container --> 


        <!-- ==== CONTACT ==== -->
        <div id="contact" name="contact">
            <div class="container">
                <div class="row">
                    <h2 class="centered">CONTACTEZ-NOUS</h2>
                    <hr>
                    <div class="col-md-6 centered"> <i class="fa fa-map-marker fa-2x"></i>
                        <p>1100 rue Notre-Dame Ouest, Local A-1172<br />
                            Montréal, QC H3C 1K3, Canada
                        </p>
                    </div>
                    <div class="col-md-6"> <i class="fa fa-envelope-o fa-2x"></i>
                        <p>serreets@gmail.com</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2 centered">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut eaque, laboriosam veritatis, quos non quis ad perspiciatis, totam corporis ea, alias ut unde.</p>
                        <form id="contact" method="post" class="form" role="form" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                            <div class="row">
                                <div class="col-xs-6 col-md-6 form-group">
                                    <input class="form-control" id="name" name="name" placeholder="Nom" type="text" required />
                                </div>
                                <div class="col-xs-6 col-md-6 form-group">
                                    <input class="form-control" id="email" name="email2" placeholder="Courriel" type="email" required />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12 col-md-12 form-group">
                                    <select class="form-control" id="sel1" name="subject">
                                        <option>Sujet</option>
                                        <option>Question</option>
                                        <option>Partenariat</option>
                                        <option>Financement</option>
                                        <option>Recrutement</option>
                                    </select>
                                </div>

                            </div>
                            <textarea class="form-control" id="message" name="message2" placeholder="Message" rows="5"></textarea>
                            <div class="row">
                                <div class="col-xs-12 col-md-12">
                                    <button class="btn btn btn-lg" type="submit" name="contactus-submit">Envoyer</button>
                                </div>
                            </div>
                            <div class="row">

                                <?php
                                //if "email" variable is filled out, send email
                                if (isset($_POST['contactus-submit'])) {

                                  //Email information
                                  $admin_email = "lauriane.b.michaud@gmail.com";

                                  // message
                                  $name = @trim(stripslashes($_POST['name']));
                                  $email = @trim(stripslashes($_POST['email2']));
                                  $subject = @trim(stripslashes($_POST['subject']));
                                  $message2 = @trim(stripslashes($_POST['message2']));

                                  $message = '
                                    <html>
                                    <body>
                                      <p>' . $message2 . '</p>
                                      <p>De : ' . $name . '</p>
                                      <p>Courriel : ' . $email . '</p>
                                    </body>
                                    </html>';

                                  // To send HTML mail, the Content-type header must be set
                                  $headers = 'MIME-Version: 1.0' . "\r\n";
                                  $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

                                  //send email
                                  mail($admin_email, $subject, $message, $headers);

                                  //Email response
                                  echo '<br /><p>Votre message a bien été envoyé. Merci.</p>';
                                }
                                ?>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- form --> 
            </div>
        </div-->
        <!-- row --> 

    </div>
</div>
<!-- container -->

<?php include "includes/common_footer.php"; ?>
<script>
  $("#see-more").click(function () {
      $("#members-wrapper").slideToggle("slow");
      $("#see-more i").hide();
  });
</script>

</body>
</html>
