<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#ed1c24" /><!--#20C520 #ed1c24-->
    <title>Update Note</title>
    <link rel="stylesheet" href="../css/note.css?v=1.4">
    <script src="http://code.jquery.com/jquery-latest.min.js"></script>
    <script src="../js/main.min.js"></script>
  </head>

  <body>
    <div class="login-wrapper">
      <div class="note"></div>
      <div class="loginform container-two-wrapper">
        <div class="container-two">
          <p class="updatetitle">
          Current version:
          </p>
          <h2 class="updateversion">
            <?php echo $oldversion; ?>
          </h2>
        </div>
        <div class="container-two">
          <p class="updatetitle">
            New version:
          </p>
          <h2 class="updateversion">
            <?php echo $newversion; ?>
          </h2>
        </div>
        <p class="changelogbutton">
          <a id="changelogtrigger"><i>What's changed?</i></a>
        </p>
        <div class="changelog closed">
          <?php echo $changelog; ?>
        </div>
        <a href='update.php?install=true' class="updatebutton">Update</a>
      </div>
    </div>
  </body>
</html>
