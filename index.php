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
                <a href="dashboard/index.php" class="btn btn-lg">État de la serre</a>
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

                        <!-- PORTFOLIO IMAGE 1 -->
                        <div class="col-md-4 ">
                            <div class="grid mask">
                                <figure> <img class="img-responsive" src="img/portfolio/folio01.jpg" alt="">
                                    <figcaption>
                                        <h5>UX / UI</h5>
                                        <a data-toggle="modal" href="#myModal" class="btn btn-default">More Details</a> </figcaption>
                                    <!-- /figcaption --> 
                                </figure>
                                <!-- /figure --> 
                            </div>
                            <!-- /grid-mask --> 
                        </div>

                        <!-- MODAL SHOW THE PORTFOLIO IMAGE. In this demo, all links point to this modal. You should create
                                              a modal for each of your projects. -->

                        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                        <h4 class="modal-title">Project Title</h4>
                                    </div>
                                    <div class="modal-body">
                                        <p><img class="img-responsive" src="img/portfolio/folio01-preview.jpg" alt=""></p>
                                        <p>Lorem ipsum dolor sit amet, quo meis audire placerat eu, te eos porro veniam. An everti maiorum detracto mea. Eu eos dicam voluptaria, erant bonorum albucius et per, ei sapientem accommodare est. Saepe dolorum constituam ei vel</p>
                                        <p><b><a href="#">Visit Site</a></b></p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                                <!-- /.modal-content --> 
                            </div>
                            <!-- /.modal-dialog --> 
                        </div>
                        <!-- /.modal --> 

                        <!-- PORTFOLIO IMAGE 2 -->
                        <div class="col-md-4">
                            <div class="grid mask">
                                <figure> <img class="img-responsive" src="img/portfolio/folio01.jpg" alt="">
                                    <figcaption>
                                        <h5>CONCEPT</h5>
                                        <a data-toggle="modal" href="#myModal" class="btn btn-default">More Details</a> </figcaption>
                                    <!-- /figcaption --> 
                                </figure>
                                <!-- /figure --> 
                            </div>
                            <!-- /grid-mask --> 
                        </div>

                        <!-- PORTFOLIO IMAGE 3 -->
                        <div class="col-md-4">
                            <div class="grid mask">
                                <figure> <img class="img-responsive" src="img/portfolio/folio01.jpg" alt="">
                                    <figcaption>
                                        <h5>UX / UI</h5>
                                        <a data-toggle="modal" href="#myModal" class="btn btn-default">More Details</a> </figcaption>
                                    <!-- /figcaption --> 
                                </figure>
                                <!-- /figure --> 
                            </div>
                            <!-- /grid-mask --> 
                        </div>
                    </div>
                    <!-- /row --> 

                    <!-- PORTFOLIO IMAGE 4 -->
                    <div class="row">
                        <div class="col-md-4 ">
                            <div class="grid mask">
                                <figure> <img class="img-responsive" src="img/portfolio/folio01.jpg" alt="">
                                    <figcaption>
                                        <h5>CONCEPT</h5>
                                        <a data-toggle="modal" href="#myModal" class="btn btn-default">More Details</a> </figcaption>
                                    <!-- /figcaption --> 
                                </figure>
                                <!-- /figure --> 
                            </div>
                            <!-- /grid-mask --> 
                        </div>

                        <!-- PORTFOLIO IMAGE 5 -->
                        <div class="col-md-4">
                            <div class="grid mask">
                                <figure> <img class="img-responsive" src="img/portfolio/folio01.jpg" alt="">
                                    <figcaption>
                                        <h5>UX / UI</h5>
                                        <a data-toggle="modal" href="#myModal" class="btn btn-default">More Details</a> </figcaption>
                                    <!-- /figcaption --> 
                                </figure>
                                <!-- /figure --> 
                            </div>
                            <!-- /grid-mask --> 
                        </div>

                        <!-- PORTFOLIO IMAGE 6 -->
                        <div class="col-md-4">
                            <div class="grid mask">
                                <figure> <img class="img-responsive" src="img/portfolio/folio01.jpg" alt="">
                                    <figcaption>
                                        <h5>CMS INTEGRATION</h5>
                                        <a data-toggle="modal" href="#myModal" class="btn btn-default">More Details</a> </figcaption>
                                    <!-- /figcaption --> 
                                </figure>
                                <!-- /figure --> 
                            </div>
                            <!-- /grid-mask --> 
                        </div>
                        <!-- /col --> 
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
                    <div class="col-lg-3 centered"> <img class="img img-circle" src="img/team/default-user.png" height="120px" width="120px" alt="">
                        <h4><strong>Marc-Antoine Meilleur</strong></h4>
                        <p>Chargé des opérations<span class="engineering-program">Génie mécanique</span></p>
                        <a href="#"><i class="fa fa-linkedin"></i></a> </div>
                    <div class="col-lg-3 centered"> <img class="img img-circle" src="img/team/default-user.png" height="120px" width="120px" alt="">
                        <h4><b>Joël Gagnon</b></h4>
                        <p>Chargé des opérations<span class="engineering-program">Génie mécanique</span></p>
                        <a href="#"><i class="fa fa-linkedin"></i></a> </div>
                    <div class="col-lg-3 centered"> <img class="img img-circle" src="img/team/default-user.png" height="120px" width="120px" alt="">
                        <h4><b>William Paradis</b></h4>
                        <p>Chargé de la communication<span class="engineering-program">Génie construction</span></p>
                        <a href="#"><i class="fa fa-linkedin"></i></a> </div>
                    <div class="col-lg-3 centered "> <img class="img img-circle" src="img/team/default-user.png" height="120px" width="120px" alt="">
                        <h4><b>Philippe Connor</b></h4>
                        <p>Construction de la serre <span class="engineering-program">Génie logiciel</span></p>
                        <a href="#"><i class="fa fa-linkedin"></i></a> </div>







                    <div id="members-wrapper" style="display: none;">
                        <div class="col-lg-3 centered lastrow"> <img class="img img-circle" src="img/team/default-user.png" height="120px" width="120px" alt="">
                            <h4><strong>Alex</strong></h4>
                            <p>Construction de la serre <span class="engineering-program">Génie de la production automatisée</span></p>
                            <a href="#"><i class="fa fa-linkedin"></i></a> </div>
                        <div class="col-lg-3 centered lastrow"> <img class="img img-circle" src="img/team/default-user.png" height="120px" width="120px" alt="">
                            <h4><strong>Alex</strong></h4>
                            <p>Construction de la serre <span class="engineering-program">Génie de la production automatisée</span></p>
                            <a href="#"><i class="fa fa-linkedin"></i></a> </div>
                        <div class="col-lg-3 centered lastrow"> <img class="img img-circle" src="img/team/default-user.png" height="120px" width="120px" alt="">
                            <h4><strong>Alex</strong></h4>
                            <p>Construction de la serre <span class="engineering-program">Génie de la production automatisée</span></p>
                            <a href="#"><i class="fa fa-linkedin"></i></a> </div>
                        <div class="col-lg-3 centered lastrow"> <img class="img img-circle" src="img/team/default-user.png" height="120px" width="120px" alt="">
                            <h4><strong>Alex</strong></h4>
                            <p>Construction de la serre <span class="engineering-program">Génie de la production automatisée</span></p>
                            <a href="#"><i class="fa fa-linkedin"></i></a> </div>
                        <div class="col-lg-3 centered lastrow"> <img class="img img-circle" src="img/team/default-user.png" height="120px" width="120px" alt="">
                            <h4><strong>Alex</strong></h4>
                            <p>Construction de la serre <span class="engineering-program">Génie de la production automatisée</span></p>
                            <a href="#"><i class="fa fa-linkedin"></i></a> </div>
                        <div class="col-lg-3 centered lastrow"> <img class="img img-circle" src="img/team/default-user.png" height="120px" width="120px" alt="">
                            <h4><strong>Alex</strong></h4>
                            <p>Construction de la serre <span class="engineering-program">Génie de la production automatisée</span></p>
                            <a href="#"><i class="fa fa-linkedin"></i></a> </div>
                        <div class="col-lg-3 centered lastrow"> <img class="img img-circle" src="img/team/default-user.png" height="120px" width="120px" alt="">
                            <h4><strong>Alex</strong></h4>
                            <p>Construction de la serre <span class="engineering-program">Génie de la production automatisée</span></p>
                            <a href="#"><i class="fa fa-linkedin"></i></a> </div>
                        <div class="col-lg-3 centered lastrow"> <img class="img img-circle" src="img/team/default-user.png" height="120px" width="120px" alt="">
                            <h4><b>Sam</b></h4>
                            <p>Construction de la serre <span class="engineering-program">Génie des opérations logistique</span></p>
                            <a href="#"><i class="fa fa-linkedin"></i></a> </div>
                        <div class="col-lg-3 centered lastrow"> <img class="img img-circle" src="img/team/default-user.png" height="120px" width="120px" alt="">
                            <h4><b>Felix</b></h4>
                            <p>Développement Web<span class="engineering-program">Génie des TI</span></p>
                            <a href="#"><i class="fa fa-linkedin"></i></a> </div>
                        <div class="col-lg-3 centered lastrow"> <img class="img img-circle" src="img/team/default-user.png" height="120px" width="120px" alt="">
                            <h4><b>Tom</b></h4>
                            <p>Construction de la serre <span class="engineering-program">Génie électrique</span></p>
                            <a href="#"><i class="fa fa-linkedin"></i></a> </div>
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
                        <form id="contact" method="post" class="form" role="form">
                            <div class="row">
                                <div class="col-xs-6 col-md-6 form-group">
                                    <input class="form-control" id="name" name="name" placeholder="Prénom" type="text" required />
                                </div>
                                <div class="col-xs-6 col-md-6 form-group">
                                    <input class="form-control" id="email" name="email" placeholder="Nom" type="email" required />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-6 col-md-6 form-group">
                                    <select class="form-control" id="sel1">
                                        <option>Programme d'études</option>
                                        <option>Génie construction</option>
                                        <option>Génie mécanique</option>
                                        <option>Génie Électrique</option>
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
                                    <button class="btn btn btn-lg" type="submit">Envoyer</button>
                                </div>
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
                        <form id="contact" method="post" class="form" role="form">
                            <div class="row">
                                <div class="col-xs-6 col-md-6 form-group">
                                    <input class="form-control" id="name" name="name" placeholder="Nom" type="text" required />
                                </div>
                                <div class="col-xs-6 col-md-6 form-group">
                                    <input class="form-control" id="email" name="email" placeholder="Courriel" type="email" required />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12 col-md-12 form-group">
                                    <select class="form-control" id="sel1">
                                        <option>Sujet</option>
                                        <option>Question</option>
                                        <option>Partenariat</option>
                                        <option>Financement</option>
                                        <option>Recrutement</option>
                                    </select>
                                </div>
                                
                            </div>
                            <textarea class="form-control" id="message" name="message" placeholder="Message" rows="5"></textarea>
                            <div class="row">
                                <div class="col-xs-12 col-md-12">
                                    <button class="btn btn btn-lg" type="submit">Envoyer</button>
                                </div>
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
      if ($("#see-more i").hasClass("fa-angle-double-down")) {
          $("#see-more i").removeClass("fa-angle-double-down");
          $("#see-more i").addClass("fa-angle-double-up");
      } else if ($("#see-more i").hasClass("fa-angle-double-up")) {
          $("#see-more i").removeClass("fa-angle-double-up");
          $("#see-more i").addClass("fa-angle-double-down");
      }
  });
</script>

</body>
</html>
