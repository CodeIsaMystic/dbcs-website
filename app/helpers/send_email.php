<?php

  /**
   * Function sending Email and confirmation
   * @param string input email address
   * @param string input name prospect
   */
  function contactProspectEmail(string $email,string $name) {
    // recipient email address
    $toEmail = 'julienorjollet.wd@gmail.com';
    // subject mail
    $subject = 'Prise de Contact Site Web';

    
    // body mail // html template
    $body = '
    <!--[if (gte mso 9)|(IE)]>
    <table cellspacing="0" cellpadding="0" border="0" width="600" align="center" role="presentation"><tr><td>
    <![endif]-->
    
    <br>
    <h2 align="center">&mdash; D.B.C.S coaching personnalisé &mdash;</h2>
    <h4 align="center">Site Web &mdash; prise de contact prospect</h4>
    <hr>
    <p>Un contact vous a envoyé ses coordonnées via votre site web afin de le recontacter.</p>
    <p><strong>Nom du prospect:</strong>&emsp; '.$name.'</p>
    <p><strong>Adresse mail:</strong>&emsp; '.$email.'</p>
    
    <!--[if (gte mso 9)|(IE)]>
    </td></tr></table>
    <![endif]-->
    ';
    
    // Builtin Headers
    // email headers
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-Type:text/html;charset=UTF-8" . "\r\n";
    // additional headers
    $headers .= "From: " . $name . "<".$email.">" . "\r\n";
    
    

    if(mail($toEmail, $subject, $body, $headers)) {
      
      // HTML Response Template 
      $msg_response = '
      <!--[if (gte mso 9)|(IE)]>
      <table cellspacing="0" cellpadding="0" border="0" width="600" align="center" role="presentation"><tr><td>
      <![endif]-->

        <h2 align="center">&mdash; D.B.C.S coaching personnalisé &mdash;</h2></br>
        <h4>Le Coach vous contacte au plus vite pour échanger sur vos objectifs, votre disponibilité. Vous pourrez prendre ainsi toutes les informations nécessaires.</h4>
        <p>si vous n\'avez pas encore bénéficié de votre séance d\'essai gratuite, pensez à nous le rappeler au cas où le coach ne vous aurai pas mentionné.</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus distinctio dolore sint deleniti doloribus est dignissimos culpa, quidem, officia suscipit quaerat, dicta tempora facere consequatur odit velit accusantium nemo animi veniam perferendis! Numquam quidem distinctio quaerat adipisci laborum aspernatur accusamus, repudiandae, inventore unde tenetur quasi labore beatae temporibus voluptate magni iusto dolorem? Perferendis aperiam ad, at nemo fugit obcaecati illo tempore ipsam inventore corporis. Asperiores.</p>
        </br><p>Prenez soin de vous.</p>
        <p>Cordialement,</p>
        <p>&mdash; DBCS Studio &mdash;</p>
        </br><small>Ceci est un message automatique veuillez ne pas répondre directement. Nous vous contacterons le plus vite possible.</small>
        
      <!--[if (gte mso 9)|(IE)]>
      </td></tr></table>
      <![endif]-->
      ';

      mail($email, $subject, $msg_response, $headers);
    }
  }

  /**
   * Function sending Email and confirmation
   * @param string input email address
   * @param string input name prospect
   */
  function contactPartnerEmail(string $email,string $name, ?string $message, ?string $partnership) {
    // recipient email address
    $toEmail = 'julienorjollet.wd@gmail.com';
    // subject mail
    $subject = 'Prise de Contact Site Web';

    
    // body mail // html template
    $body = '
    <!--[if (gte mso 9)|(IE)]>
    <table cellspacing="0" cellpadding="0" border="0" width="600" align="center" role="presentation"><tr><td>
    <![endif]-->
    
    <br>
    <h2 align="center">&mdash; D.B.C.S coaching personnalisé &mdash;</h2>
    <h4 align="center">Site Web &mdash; prise de contact pour partenariat</h4>
    <hr>
    <p>Un contact vous a envoyé ses coordonnées via votre site web afin de le recontacter.</p>
    <p><strong>Nom du partenaire:</strong>&emsp; '.$name.'</p>
    <p><strong>Adresse mail:</strong>&emsp; '.$email.'</p>

    <p><strong>Partenariat:</strong>&emsp; '.typePartnershipHandler($partnership).'</p>
    <div>
      <p><strong>Message:</strong></p> 
      <p>'.$message.'</p>
    
    </div>

    
    <!--[if (gte mso 9)|(IE)]>
    </td></tr></table>
    <![endif]-->
    ';
    
    // Builtin Headers
    // email headers
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-Type:text/html;charset=UTF-8" . "\r\n";
    // additional headers
    $headers .= "From: " . $name . "<".$email.">" . "\r\n";
    
    

    if(mail($toEmail, $subject, $body, $headers)) {
      
      // HTML Response Template 
      $msg_response = '
      <!--[if (gte mso 9)|(IE)]>
      <table cellspacing="0" cellpadding="0" border="0" width="600" align="center" role="presentation"><tr><td>
      <![endif]-->

        <h2 align="center">&mdash; D.B.C.S coaching personnalisé &mdash;</h2></br>
        <h4>Le Coach vous contacte au plus vite pour pouvoir échanger, selon vos disponibilités, sur un potentiel partenariat. Vous pourrez prendre ainsi toutes les informations nécessaires.</h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus distinctio dolore sint deleniti doloribus est dignissimos culpa, quidem, officia suscipit quaerat, dicta tempora facere consequatur odit velit accusantium nemo animi veniam perferendis! Numquam quidem distinctio quaerat adipisci laborum aspernatur accusamus, repudiandae, inventore unde tenetur quasi labore beatae temporibus voluptate magni iusto dolorem? Perferendis aperiam ad, at nemo fugit obcaecati illo tempore ipsam inventore corporis. Asperiores.</p>
        </br><p>Prenez soin de vous.</p>
        <p>Cordialement,</p>
        <p>&mdash; DBCS Studio &mdash;</p>
        </br><small>Ceci est un message automatique veuillez ne pas répondre directement. Nous vous contacterons le plus vite possible.</small>
        
      <!--[if (gte mso 9)|(IE)]>
      </td></tr></table>
      <![endif]-->
      ';

      mail($email, $subject, $msg_response, $headers);
    }
  }

?>