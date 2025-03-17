<!doctype html>
<html lang="<?=DEFAULT_LANG?>">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Signin Template for Bootstrap</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/sign-in/">
    <!-- Bootstrap core CSS -->
    <link href="<?=PUBLIC_CSS_PATH?>/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?=PUBLIC_CSS_PATH?>/signin.css" rel="stylesheet">
  </head>

  <body class="text-center">
    <form class="form-signin">
       <h1 class="h3 mb-3 font-weight-normal">Yönetim Paneli</h1>
      <label for="inputEmail" class="sr-only"><?=__lang('message','email')?></label>
      <input type="email" id="inputEmail" class="form-control" placeholder="<?=__lang('message','email')?>" required autofocus>
      <label for="inputPassword" class="sr-only"><?=__lang('message','password')?></label>
      <input type="password" id="inputPassword" class="form-control" placeholder="<?=__lang('message','password')?>" required>
      <button class="btn btn-sm btn-primary btn-block" type="submit">Giriş Yap</button>
     
    </form>
  </body>
</html>