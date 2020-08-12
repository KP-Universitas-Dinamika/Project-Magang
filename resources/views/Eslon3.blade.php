<!DOCTYPE html>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <script src="js/jquery-3.4.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <style type="">
        .margin{
            margin: 0px 10px 10px 10px;
        }
        .margin2{
            margin: 10px 10px 0px 10px;
        }
        .btbh{
            margin-left: 25px;
            margin-bottom: 5px;
        }
    </style>
    <title>Document</title>
</head>
<body>
<br>
    <div class="">
        <div class="row">
            <div class="col-sm-12">
                <center>
                    <h1>Eselon 3</h1>
                </center>
            </div>
        </div>
    </div>
    <br>

    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <!-- <a class="navbar-brand" href="#">Logo</a> -->
        <ul class="navbar-nav">
        <li class="nav-item">
                    <a class="nav-link" href="Eslon3.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="ToDoE3.php">To Do</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="ProgresE3.php">Progres</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="SelesaiE3.php">Selesai</a>
                </li>

                <!-- <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                    Dropdown</a>

                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Link 1</a>
                        <a class="dropdown-item" href="#">Link 2</a>
                        <a class="dropdown-item" href="#">Link 3</a>
                    </div>

                </li> -->
            </ul>
        </nav>

        <div class="margin2">
        <div class="row">
            <div class="col-sm-12">
                <center>
                    <h1>Home</h1>
                </center>
            </div>
        </div>
    </div>
    <br>
    
    <div class="btbh">
    <button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal">Beri Tugas</button>
                        <!-- Modal -->
	<div id="myModal" class="modal fade" role="dialog">
		<div class="modal-dialog">
			<!-- konten modal-->
			<div class="modal-content">
				<!-- heading modal -->
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title"></h4>
				</div>
				<!-- body modal -->
				<div class="modal-body">
					<p>
                        <table>
                            <tr>
                                <td>Kode </td>
                                
                                <td><input type="text" name=""></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Judul </td>
                                
                                <td><input type="text" name=""></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Note </td>
                                
                                <td><input type="text" name=""></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Kategori </td>
                                
                                
                                <td>
                                <button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal">Pilih</button>
                        <!-- Modal -->
	<div id="myModal" class="modal fade" role="dialog">
		<div class="modal-dialog">
			<!-- konten modal-->
			<div class="modal-content">
				<!-- heading modal -->
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title"></h4>
				</div>
				<!-- body modal -->
				<div class="modal-body">
					<p>
                        <table>
                            <tr>
                                <td>file</td>
                                <td>
                                    <form name="uploader" action="process.php" method="POST" enctype="multipart/form-data">

                                        <input type="file" name="file">
                                        <input type="text" name="t1" placeholder="Keterangan">
                                        <button type="submit">Upload</button>

                                    </form>
                                </td>
                            </tr>
                            
                        </table>

                    </p>
				</div>
				<!-- footer modal -->
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Tutup Modal</button>
				</div>
			</div>
		</div>
	</div>
                                    
                                </td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Date </td>
                                
                                <td><input type="text" name=""></td>
                                <!-- <td></td> -->
                            </tr>
                            <tr>
                                <td></td>
                                <td>
                                    <form name="uploader" action="process.php" method="POST" enctype="multipart/form-data">

                                        <input type="file" name="file">
                                        <input type="text" name="t1" placeholder="Keterangan">
                                        <button type="submit">Upload</button>

                                    </form>
                                </td>
                            </tr>
                            
                        </table>

                    </p>
				</div>
				<!-- footer modal -->
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Tutup Modal</button>
				</div>
			</div>
		</div>
	</div>
    </div>
    
        
        <div class="container-fluit">
        <div class="margin">
        <div class="col-sm-12">
            <table class="table table-striped table-bordered">
                <thead class="thead-dark" align="center">
                    <tr>
                        <th>Kode</th>

                        <th>Judul</th>
                        
                        
                        
                        <th>Note</th>
                        <th>Kategori</th>
                        <th>Date</th>
                        <th>Aksi</th>
                        <!-- <th>Harga Beli</th>
                        <th>Ubah</th> -->
                    </tr>
                </thead>
                <tbody align="center">

                    
                    <tr>
                        <td>Kode</td>
                        <!-- <td>Tugas</td> -->
                        <!-- <td>To do</td> -->
                        <td>Tugas</td>
                        <td>ashdaksh</td>
                        <td></td>
                        <td>date</td>
                        

                        <td>
                        
                                    <a href="Ubah-barang.php?id=----belum---"><button type="button"
                                        class=" btn btn-success">Edit</button></a>         
                                    <a href="Ubah-barang.php?id=----belum---"><button type="button"
                                        class=" btn btn-danger">Delete</button></a>
                            
                            
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