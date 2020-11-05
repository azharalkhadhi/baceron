<script src="<?= base_url('assets/') ?>js/jquery-3.5.1.min.js"></script>
<script src="<?= base_url('assets/') ?>js/popper.min.js"></script>
<script src="<?= base_url('assets/') ?>js/bootstrap.min.js"></script>
<script src="<?= base_url('assets/') ?>js/froala_editor.pkgd.min.js"></script>
<script>
  new FroalaEditor("textarea");

  $(document).ready(function() {
    $('.alert').alert().delay(3000).slideUp();
  });
</script>
</body>

</html>