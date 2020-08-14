<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>In-Progres</title>

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
    <!-- <div class="container-fluid">
      Brand and toggle get grouped for better mobile display
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand glyphicon glyphicon-tasks" href="#"> Tugas Utama</a>
      </div> -->
  
      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
            <li ><a href="staff.php" > To-do <span class="sr-only">(current)</span></a></li>
          <li class="active"><a  href="progres.php">In-Progres </a></li>
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
  
<center>
<div class="container-fluit">
        <div class="margin">
        <div class="col-sm-12">
            <table class="table table-striped table-bordered">
            <thead align="center" style="background-color: darkslategrey;">
              <tr class="fontwhite">
              <td>Kode</td>
                  <td>Tugas</td>
                  <td>ashdaksh</td>
                  <td>date</td>
                  <td>Aksi</td>
              </tr>
            </thead>
            <tbody align="center">

                    
                    <tr>
                        <td>Kode</td>
                        <!-- <td>Tugas</td> -->
                        <!-- <td>To do</td> -->
                        <td>Tugas</td>
                        <td>ashdaksh</td>
                        <td>date</td>
                        

                        <td>
                        
                                    <a href="Ubah-barang.php?id=----belum---"><button type="button"
                                        class=" btn btn-danger">Upload</button></a>         
                                    <a href="Ubah-barang.php?id=----belum---"><button type="button"
                                        class=" btn btn-success">Selesai</button></a>
                            
                            
                                        </td>
                        
                        <!-- <td><a href="Ubah-barang.php?id=----belum---"><button type="button"
                                    class=" btn btn-success"><img src="centang.png" alt="" width="25"
                                        height="25"></button></a>&nbsp;&nbsp;&nbsp;&nbsp;
                            <a href="hapus.php?id=&status=Barang1"><button type="submit"
                                    class=" btn btn-danger" onclick="Hapus()"><img src="silang.png" alt="" width="25"
                                        height="25"></button></a> -->
                                        
                    </tr>
                    

                </tbody>
            </table>
        </div>
        </div>
    </div>

</body>
</html>