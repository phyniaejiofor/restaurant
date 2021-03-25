<?php
require_once("../private/initialize.php");
// check if request is a post request
 if (is_post_request()) {
  

  // collect form inputs

  $contact['name'] = h(contact_input($_POST['name']));
  $contact['email'] = h(contact_input($_POST['email']));
  $contact['subject'] = h(contact_input($_POST['subject'])) ?? '';
  $contact['message'] = h(contact_input($_POST['message'])) ?? '';
  



  // validate user inputs
  // $errors = validateBookATableValues($data);
  $contactError = validate_contact($contact);
  


  if(empty($contactError)) {
  // submit data to database
  $sql = "INSERT INTO contact ";
	$sql .= "(name,email,subject,message)";
	$sql .= "VALUES (";
	$sql .= "'" . db_escape($db, $contact['name']). "',";
	$sql .= "'" . db_escape($db, $contact['email']). "',";
    $sql .= "'" . db_escape($db, $contact['subject']). "',";
    $sql .= "'" . db_escape($db, $contact['message']). "'";
	$sql .= ")";

	$result = mysqli_query($db, $sql);
	confirm_result_set($result);

	if($result){
        // redirect back to home
        redirect_to('index.php');
    }else{
		db_disconnect($db);
		exit;
    }

 

 
   }//else(!empty($contactError)) {
  //   redirect_to('index.php');
  // }

  

  
  
}else{
  $contactError = [];
 }

 
?>





<!-- ======= Contact Section ======= -->
<section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact</h2>
          <p>Contact Us</p>
        </div>
      </div>

      <div data-aos="fade-up">
        <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3971.5368063511323!2d7.037129014264271!3d5.486976735866892!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1042593f19f8a56d%3A0x3d116de9a709abfd!2sOwerri%20
        Tech%20Hub!5e0!3m2!1sen!2sng!4v1604145721372!5m2!1sen!2sng"
        width="600" height="450" frameborder="0" style="border:0;"
         allowfullscreen="" 
         aria-hidden="false" tabindex="0"></iframe> 
     </div>

      <div class="container" data-aos="fade-up">

        <div class="row mt-5">

          <div class="col-lg-4">
            <div class="info">
              <div class="address">
                <i class="icofont-google-map"></i>
                <h4>Location:</h4>
                <p>No 4 Ziks Avenue Street Opposite Chilly's Plaza Owerri</p>
              </div>

              <div class="open-hours">
                <i class="icofont-clock-time icofont-rotate-90"></i>
                <h4>Open Hours:</h4>
                <p>
                  Monday-Saturday:<br>
                  8:00 am - 8:00 pm GMT+1
                </p>
              </div>

              <div class="email">
                <i class="icofont-envelope"></i>
                <h4>Email:</h4>
                <p>phyniaejiofor90@gmail.com</p>
              </div>

              <div class="phone">
                <i class="icofont-phone"></i>
                <h4>Call:</h4>
                <p>+2348107430985</p>
              </div>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0">

            <form action="contact.php" method="POST"  class="php-email-form">
              <div class="form-row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name"
                    data-rule="minlen:4" data-msg="Please enter at least 4 chars" required />
                  <div class="valimessage"></div>
                </div>
                <div class="col-md-6 form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email"
                    data-rule="email" data-msg="Please enter a valid email" required />
                  <div class="valimessage"></div>
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject"
                  data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" required />
                <div class="valimessage"></div>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="8" data-rule="required"
                  data-msg="Message" placeholder="Message" required ></textarea>
                <div class="valimessage"></div>
              </div>
              <div class="mb-3">
                <div class="loading">Loading</div>
                <div><?php echo display_err($contactError); ?></div>
                <!-- <div class="sent-message">Your message has been sent. Thank you!</div> -->
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->
