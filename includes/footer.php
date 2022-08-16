    <!-- contact section start -->
    <section class="contact <?php if(isset($print)) { echo 'contain';}?>" id="contact">
        <div class="max-width">
            <h2 class="title">Contact Us</h2>
            <div class="contact-content">
                <div class="column left">
                    <div class="text">Get in Touch</div>
                    <p>Welcome to Anirudh Airline Ticket Booking Service. From our home in Chennai, we fly to passenger and cargo destinations in Bangalore, Mumbai, London, Sri Lanka and United States. 
                    </p>
                    <div class="icons">
                        <div class="row">
                            <i class="far fa-user"></i>
                            <div class="info">
                                <div class="head">&nbsp;Name</div>
                                <div class="sub-title">&nbsp;ANIRUDH S</div>
                            </div>
                        </div>
                        <div class="row">
                            <i class="far fa-map"></i>
                                <div class="info">
                                <div class="head">College</div>
                                <div class="sub-title">Rajalakshmi Engineering College</div>
                            </div>
                        </div>
                        <div class="row">
                            <i class="far fa-envelope"></i>
                            <div class="info">
                                <div class="head">Email</div>
                                <div class="sub-title">anirudh.s.2019.cse@rajalakshmi.edu.in</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column right">
                    <div class="text">Message Us</div>
                    <form action="<?php echo url('feedback.php') ?>" method="POST">
                        <div class="fields">
                            <div class="field name">
                                <input type="text" placeholder="Name" required name="name">
                            </div>
                            <div class="field mobile">
                                <input type="mobile" placeholder="Mobile" required name="mobile">
                            </div>
                        </div>
                        <div class="field">
                            <input type="email" placeholder="Email" required name="email">
                        </div>
                        <div class="field textarea">
                            <textarea cols="30" rows="10" placeholder="Message.." required name="message"> </textarea>
                        </div>
                        <div class="button">
                            <button type="submit" name="submit" value="add">Send message</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- footer section start -->
    <footer>
        <span>Created By ANIRUDH S</span>
    </footer>

    <script src="<?php echo url('js/script.js') ?>"></script>
<?php
  if (isset($_SESSION['alert'])) {
    $message = $_SESSION['alert'];
    unset($_SESSION['alert']);
  ?>
    <script src="<?php echo url('js/sweetalert2.js') ?>"></script>
    <script>
      Swal.fire(
        '<?php echo ($message['title']) ?>',
        '<?php echo ($message['body']) ?>',
        '<?php echo ($message['type']) ?>',
      )
    </script>
  <?php
  }
?>