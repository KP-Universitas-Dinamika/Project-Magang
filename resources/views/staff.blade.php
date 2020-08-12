<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>STAFF</title>

    <link rel="stylesheet" type-="text/css" href="css/bootstrap.css">
	<script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>

    <style>
        
    .judul{
        font-family: 'Cambria';
        font-size: xx-large;
        font-weight: bold;
    }

    .fontwhite{
        color: white;
    }
    .margi{
      margin-right: 10px;
      margin-bottom: 5px;
      margin-top: 7px;
    }

    </style>
</head>
<body>
<center>    <P1 class="judul">STAFF</P1></center>

<nav class="navbar navbar-inverse">

      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
            <li class="active"><a href="staff.php" class="glyphicon glyphicon-tasks"> To-do<span class="sr-only">(current)</span></a></li>
          <li ><a  href="progres.php">In-Progres </a></li>
          <li><a href="tugas-selesai.php">Finish </a></li>
        </ul>
        <div class="margi">
          <div class="form-grup">
            <ul class="nav navbar-nav navbar-right">
              <input type="button" class="btn btn-danger glyphicon glyphicon-off" value="Logout">

            </ul>

            </div>
        </div>
        
        
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>
  
<div class="container-fluit">
<div class="margin">
  <div class="col-md-12">
    
      <table class="table table-striped-danger "  >
        <thead align="center">
          <tr style="background-color: black;" class="fontwhite">
            <td>Kode</td>
            <td>Tugas</td>
            <td>Tanggal</td>
            <td>Keterangan</td>
            <td>Aksi</td>
          </tr>
        </thead>
    <tbody align="center">
      <tr style="background-color:lightgrey">
        <td>K11</td>
        <td>Membuat desain iklan</td>
        <td>11 Agustus 2020</td>
        <td>Belum Dikerjakan</td>
        <td style="width: 200px;">
          <button class="btn btn-primary glyphicon " value="Upload"> Ambil</button>
        </td>
    </tr>
    <tr style="background-color: silver">
      <td>K12</td>
      <td>Membuat desain Banner</td>
      <td>11 Agustus 2020</td>
      <td>Revisi</td>
      <td style="width: 200px;">
        <button class="btn btn-primary glyphicon "> Ambil</button>
      </td>
    </tr>
    </tbody>
          </table>
  
  </div>
</div>
</div>
</body>
</html>