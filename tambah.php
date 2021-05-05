<!DOCTYPE html>
<html>
<head>
<center>
<!-- Required meta tags -->
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <!-- Load file CSS Bootstrap offline -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>
<body>
<div class="container">
<h2>TAMBAH DATA</h2>
    <form action="simpantambah.php" method="post">
        <div class="form-group row">
            <label for="Semester" class="col-sm-2 col-form-label">Semester</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" id="Semester" name="Semester" placeholder="Semester">
            </div>
        </div>
        <div class="form-group row">
            <label for="IP" class="col-sm-2 col-form-label">IP</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" id="IP" name="IP" placeholder="IP">
            </div>
        </div>
        <a href="ip.php">IP Semester</a>
        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </form>
  
</div>
</body>
</html>