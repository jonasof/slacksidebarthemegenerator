<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Slack Palette Generator</title>
    <style>
      .slackpreview {
          display: inline-block;
          vertical-align: top;
      }
      .right {
          display: inline-block;
          vertical-align: top;
      }
      #client_body {
          margin-top: 0 !important;
      }
    </style>
  </head>
  <body>
    <?php include __DIR__ . '/slack.php' ?>
    <div class="right">
        <h1>Copie e cole no slack!</h1>
        <p><?php echo $slackBar->toSlackString() ?></p>
        <p><a href='..'>Voltar</a></p>
    </div>

  </body>
</html>
