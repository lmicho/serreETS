<div id="navbar-main"> 
    <!-- Fixed navbar -->
    <div class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                <a class="navbar-brand smoothScroll" href="#home"><img src="img/logo.png" width="112" height="40" alt="SerreÉTS"></a></div>
            <div class="navbar-collapse collapse">
                <?php if($projectPage) { ?>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="../index.php#home" class="smoothScroll">Accueil</a></li>
                    <li> <a href="../index.php#about" class="smoothScroll">Notre mission</a></li>
                    <li> <a href="../index.php#services" class="smoothScroll">Notre serre</a></li>
                    <li> <a href="../index.php#portfolio" class="smoothScroll">Nos projets</a></li>
                    <li> <a href="../index.php#team" class="smoothScroll">Notre équipe</a></li>
                    <li> <a href="../index.php#enlisting" class="smoothScroll">Recrutement</a></li>
                    <li> <a href="../index.php#contact" class="smoothScroll">Contactez-nous</a></li>
                </ul>
                <?php } else { ?>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#home" class="smoothScroll">Accueil</a></li>
                    <li> <a href="#about" class="smoothScroll">Notre mission</a></li>
                    <li> <a href="#services" class="smoothScroll">Notre serre</a></li>
                    <li> <a href="#portfolio" class="smoothScroll">Nos projets</a></li>
                    <li> <a href="#team" class="smoothScroll">Notre équipe</a></li>
                    <li> <a href="#enlisting" class="smoothScroll">Recrutement</a></li>
                    <li> <a href="#contact" class="smoothScroll">Contactez-nous</a></li>
                </ul>
                <?php } ?>
            </div>
            <!--/.nav-collapse --> 
        </div>
    </div>
</div>