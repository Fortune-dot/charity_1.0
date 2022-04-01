<?php
  //Get Heroku ClearDB connection information
$cleardb_url = parse_url(getenv("CLEARDB_DATABASE_URL"));
$cleardb_server = $cleardb_url["host"];
$cleardb_username = $cleardb_url["user"];
$cleardb_password = $cleardb_url["pass"];
$cleardb_db = substr($cleardb_url["path"],1);
$active_group = 'default';
$query_builder = TRUE;
// Connect to DB
$conn = mysqli_connect($cleardb_server, $cleardb_username, $cleardb_password, $cleardb_db);
  $results = mysqli_query($conn, "SELECT * FROM users");
  $users = mysqli_fetch_all($results, MYSQLI_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Image Preview and Upload</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.min.css" />
  <?php include('./links.php');?>
</head>
<body>
  <?php include('./nav.php'); ?>
  <br>
    <br>
  <br>
  <br>

  <div class="container">
    <div class="row">
      <div class="col-4 offset-md-4" style="margin-top: 30px;">
        <a href="./story.php" class="btn btn-success">New Story</a>
        <br>
        <br>
        <table class="table table-bordered">
          <thead>
            <th>Avatar</th>
            <th>Story</th>
          </thead>
          <tbody>
            <?php foreach ($users as $user): ?>
              <tr>
                <td> <img src="<?php echo 'images/' . $user['profile_image'] ?>" width="90" height="90" alt=""> </td>
                <td> <?php echo $user['bio']; ?> </td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <br><br><br><br>
<?php include('./footer.php');?>