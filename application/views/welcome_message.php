<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Google reCAPTCHA Demo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>

<body>
  <div class="vh-100 d-flex justify-content-center align-items-center">
    <form action="<?php echo base_url('index.php/recaptcha/try_it'); ?>" method="POST">
      <div class="g-recaptcha" data-sitekey="<?php echo $this->config->item('GOOGLE_RECAPTCHA_SITE_KEY'); ?>"></div>
      <br/>
      <input type="submit" value="Try it">
    </form>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>