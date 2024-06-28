<?php
          // if "email" variable is filled out, send email
if (isset($_REQUEST['email'])) {

          //Email information
          $to = "support@appprotech.com";
          $subject = 'Contact Form';
          $name = $_REQUEST['name'];
          $email = $_REQUEST['email'];
          $phone = $_REQUEST['phone'];
          $service = $_REQUEST['service'];
          $content = $_REQUEST['content'];
          $message = "Message from Website \nName: " . $name . "\nEmail: " . $email 
          . "\nPhone no: " . $phone  . "\nCountry: " . $country ."\nContent " . $content;

          //Send email
          mail($to, $subject, $message, "From:" . $email);

          //Email response
          echo "Thank you for contacting us!"; 
          ?>
          <script>
          alert('Thanks')
          </script>
          <?php
          header('Location: '. 'index.html');
          die();
}
      
          //if "email" variable is not filled out, display the form
else { ?>

          <form method="post">
                    Name: <input name="name" type="text" />
                    Email: <input name="email" type="text" />
                    Phone: <input name="phone" type="text" />
                    Country: <input name="country" type="text" />
                    <input type="submit" value="Submit" />
          </form>

<?php } ?>