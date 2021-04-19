<footer id="footer">
        <div class="container">
          <div class="row">
            <div class="col-md-3">
                <a href="index.php">
                    <img src="../images/logo-white.svg" id="footerLogo" alt="Logo">
                </a>
            </div>
          </div>
        </div>
    </footer>

    <section id="subFooter">
      <div class="container">
        <div class="row">
        <div class="col-md-11">
          <p>© <?php echo date("Y"); ?> Crystal Engineering. All Rights Reserved. Powered by&nbsp;ZooCru.</p>
        </div>
      </div>
      </div>
    </section>

    <!-- JS Scripts -->
    <script src="//code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="../scripts/main.js"></script>
    <!-- For Gallery-->
    <script src="../scripts/lightboxgallery-min.js"></script>
    <script>
        jQuery(function($) {
            $(document).on('click', '.lightboxgallery-gallery-item', function(event) {
              event.preventDefault();
              $(this).lightboxgallery({
                  showCounter: true,
                  showTitle: true,
                  showDescription: true
                  })
            })
        })
    </script>