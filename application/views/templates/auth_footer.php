  <script src="<?= base_url('assets/') ?>js/jquery-3.5.1.min.js"></script>
  <script src="<?= base_url('assets/') ?>js/popper.min.js"></script>
  <script src="<?= base_url('assets/') ?>js/bootstrap.min.js"></script>
  <script>
    $(document).ready(function() {

      $('#signUp').hover(function() {
        // over
        $(this).addClass('btn-dark');
      }, function() {
        // out
        $(this).removeClass('btn-dark');
      });

    });
  </script>
  </body>

  </html>