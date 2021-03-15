 <?php 
 
 
 ?>
 
 
 
 <!-- ======= Book A Table Section ======= -->
 <section id="book-a-table" class="book-a-table">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Reservation</h2>
          <p>Book a Table</p>
        </div>

        <form action="./index.php" method="POST"   
          >
          <div class="form-row">
            <div class="col-lg-4 col-md-6 form-group">
              <input type="text" name="name" class="form-control" id="name" required placeholder="Name" >
              <div class="validate"></div>
            </div>
            <div class="col-lg-4 col-md-6 form-group">
              <input type="email" class="form-control" name="email" id="email" required placeholder="Email"
      >
            </div>
            <div class="col-lg-4 col-md-6 form-group">
              <input type="text" class="form-control" name="phone" id="phone" required placeholder="Phone">
                
            </div>
            <div class="col-lg-4 col-md-6 form-group">
              <input type="text" name="date" class="form-control" 
               id="date" required placeholder="Date" >
          
            </div>
            <div class="col-lg-4 col-md-6 form-group">
              <input type="text" class="form-control" name="time" id="time" required placeholder="Time" >
              
            </div>
            <div class="col-lg-4 col-md-6 form-group">
              <input type="number" class="form-control" name="people" id="people" required placeholder="# of people"
                >
             
            </div>
          </div>
          <div class="form-group">
            <textarea class="form-control" name="message" rows="5" required placeholder="Message"></textarea>
            
          </div>
          <div class="mb-3">
            <div class="loading">Loading</div>
            <div class="error-message"><?php echo display_errors($errors)?></div>
            <div class="sent-message">Your booking request was sent. We will call back or send an Email to confirm your
              reservation. Thank you!</div>
          </div>
          <div class="text-center"><button type="submit">Book a Table</button></div>
        </form>

      </div>
    </section><!-- End Book A Table Section -->
