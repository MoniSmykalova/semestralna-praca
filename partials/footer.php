<footer class="container bg-dark text-white">
    <div class="row">
      <div class="col-25">
        <h4>Kto sme</h4>
        <p>Laboris duis ut est fugiat et reprehenderit magna labore aute.</p>
        <p>Laboris duis ut est fugiat et reprehenderit magna labore aute.</p>
        <p>Laboris duis ut est fugiat et reprehenderit magna labore aute.</p>
      </div>
      <div class="col-25">
        <h4>Kontaktujte nás</h4>
        <?php
          $email = "monikasmykalova4@gmail.com";
          $tel = "0911144555";
        ?>
        <ul>
          <?php
          echo '<li><i class="fa fa-envelope" aria-hidden="true"><a href="mailto:'.$email.'">'.$email.'</a></i></li>';
          echo '<li><i class="fa fa-phone" aria-hidden="true"><a href="tel:'.$tel.'"> '.$tel.'</a></i></li>';   
          ?>
        </ul>
      </div>
      <div class="col-25">
        <h4>Rýchle odkazy</h4>
        <ul>
        <?php
          //page_menu();
          print_menu($Footer_menu);
        ?>    
        </ul>
      </div>
      <div class="col-25">
        <h4>Nájdete nás</h4>
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d10614.839764656655!2d18.0910518!3d48.3084298!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xba2bad032d96b960!2sFakulta%20pr%C3%ADrodn%C3%BDch%20vied%20a%20informatiky!5e0!3m2!1ssk!2ssk!4v1669307792855!5m2!1ssk!2ssk" width="300" height="150" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> 
       </div>
    </div>
    <div class="row">
      Created and designed by Lívia <?php echo date("Y"); ?> 
    </div>
  </footer>
<script src="js/app.js"></script>
<script src="js/accordion.js"></script>
</body>
</html>