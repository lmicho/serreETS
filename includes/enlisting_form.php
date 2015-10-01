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
            <select class="form-control" id="program" name="program" required>
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

    <textarea class="form-control" id="message" name="messageEnlisting" placeholder="Message" rows="5"></textarea>
    <div class="row">
        <div class="col-xs-12 col-md-12">
            <button class="btn btn btn-lg" type="submit" name="enlisting-submit">Envoyer</button>
        </div>
    </div>
    <div class="row">
        <?php
        //if "email" variable is filled out, send email
        if (isset($_POST['email'])) {

          //Email information
          $admin_email = "serreets@gmail.com";

          //subject
          $subject = 'Recrutement SerreETS';

          // message
          $firstName = @trim(stripslashes($_POST['firstName']));
          $lastName = @trim(stripslashes($_POST['lastName']));
          $program = @trim(stripslashes($_POST['program']));
          $email = @trim(stripslashes($_POST['email']));
          $messageEnlisting = @trim(stripslashes($_POST['messageEnlisting']));

          $message = '
                                  <html>
                                  <body>
                                    <p>Une nouvelle personne est intéressée à faire partie du club.</p><br />
                                    <p>Nom : ' . $firstName . ' ' . $lastName . '</p>
                                    <p>Programme d\'études : ' . $program . '</p>
                                    <p>Courriel : ' . $email . '</p>
                                    <p>Message : ' . $messageEnlisting . '</p>
                                  </body>
                                  </html>';

          // To send HTML mail, the Content-type header must be set
          $headers = 'MIME-Version: 1.0' . "\r\n";
          $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

          //send email
          mail($admin_email, $subject, $message, $headers);

          //Email response
          echo '<p>Votre message a bien été envoyé!</p>';
        }
        ?>
    </div>
</form>