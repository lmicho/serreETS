<form id="contact" method="post" class="form" role="form" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <div class="row">
        <div class="col-xs-6 col-md-6 form-group">
            <input class="form-control" id="name" name="name" placeholder="Nom" type="text" required />
        </div>
        <div class="col-xs-6 col-md-6 form-group">
            <input class="form-control" id="email" name="emailFrom" placeholder="Courriel" type="email" required />
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-md-12 form-group">
            <select class="form-control" id="sel1" name="subject" required>
                <option>Sujet</option>
                <option>Question</option>
                <option>Partenariat</option>
                <option>Financement</option>
                <option>Recrutement</option>
            </select>
        </div>

    </div>
    <textarea class="form-control" id="message" name="messageContact" placeholder="Message" rows="5"></textarea>
    <div class="row">
        <div class="col-xs-12 col-md-12">
            <button class="btn btn btn-lg" type="submit" name="contactus-submit">Envoyer</button>
        </div>
    </div>
    <div class="row">

        <?php
        //if "email" variable is filled out, send email
        if (isset($_POST['emailFrom'])) {

          //Email information
          $admin_email = "serreets@gmail.com";

          // message
          $name = @trim(stripslashes($_POST['name']));
          $emailFrom = @trim(stripslashes($_POST['emailFrom']));
          $subject = @trim(stripslashes($_POST['subject']));
          $messageContact = @trim(stripslashes($_POST['messageContact']));

          $message = '
                                    <html>
                                    <body>
                                      <p>' . $messageContact . '</p>
                                      <p>De : ' . $name . '</p>
                                      <p>Courriel : ' . $emailFrom . '</p>
                                    </body>
                                    </html>';

          // To send HTML mail, the Content-type header must be set
          $headers = 'MIME-Version: 1.0' . "\r\n";
          $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

          //send email
          mail($admin_email, $subject, $message, $headers);

          //Email response
          echo '<br /><p>Votre message a bien été envoyé!</p>';
        }
        ?>
    </div>
</form>