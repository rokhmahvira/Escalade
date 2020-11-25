<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>International Telephone Input</title>
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/build/css/intlTelInput.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/build/css/demo.css">
</head>

<body>
  <h1>International Kode Telephone</h1>
  <form>
    <input id="mobile-number" type="tel">
    <button type="submit">Submit</button>
  </form>

  <!-- Load jQuery from CDN so can run demo immediately -->
  <script src="http://code.jquery.com/jquery-latest.min.js"></script>
  <script src="<?php echo base_url() ;?>assets/build/js/intlTelInput.js"></script>
  <script>
    $("#mobile-number").intlTelInput();
  </script>
</body>

</html>