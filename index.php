
<?php require 'Config/config.php'; ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Sistema de Login</title>
    <link rel="stylesheet" href="Public/css/semantic.min.css">
    <link rel="stylesheet" href="Public/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.1.8/components/icon.min.css">
  </head>
  <body>


    <div class="ui middle aligned center aligned grid">
  <div class="column">
    <h2 class="ui image header">
      <div class="content">
        <h2 style="color: rgb(0, 181, 173);"><i class="user icon"></i>Login</h2>
      </div>
    </h2>
    <form action="#" method="post" class="ui large form">
      <div class="ui stacked secondary  segment">
        <div class="field">
          <div class="ui left icon input">
            <i class="user icon"></i>
            <input type="text" name="email" placeholder="E-mail address">
            <input type="hidden" name="login">
          </div>
        </div>
        <div class="field">
          <div class="ui left icon input">
            <i class="lock icon"></i>
            <input type="password" name="senha" placeholder="Password">
          </div>
        </div>
        <button type="submit"class="ui fluid large teal submit button">Login</button>
      </div>

      <div class="ui error message"></div>

    </form>

    <div class="ui message">
      New to us? <a href="https://s.codepen.io/voltron2112/debug/PqrEPM?">Register</a>
    </div>
  </div>
</div>

    <script src="/Public/Js/jquery.min.js" charset="utf-8"></script>
    <script src="/Public/Js/semantic.min.js" charset="utf-8"></script>
      
    </script>
  </body>
</html>
