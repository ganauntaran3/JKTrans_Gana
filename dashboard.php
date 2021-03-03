<?php

// include 'connection.php';
 
// mengaktifkan session
// session_start();
 
// // cek apakah user telah login, jika belum login maka di alihkan ke halaman login
// if($_SESSION['status'] !="login"){
//  header("location:index.php");
// }
 
// // menampilkan pesan selamat datang
// echo "Hai, selamat datang ". $_SESSION['username'];
 
// ?>
<!-- // <br/>
// <br/>
// <a href="logout.php">LOGOUT</a> -->


 <?php 
// session_start();
// session_destroy();
// header("location:../index.php");
// ?>

<?php
include "header.php";
?>
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Rekapan Nota</h1>
                    <div class="button mt-3 mb-3">
                    <a href="addNote.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm "> Tambah Data</a>
                    </div>

                    <?php

                        if(isset($_GET['pesan'])){
                            $pesan = $_GET['pesan'];
                            if($pesan == "input"){
                                echo "<div class='alert alert-success' role='alert'>
                                Data berhasil ditambahkan
                              </div>";
                            }else if($pesan == "update"){
                                echo "<div class='alert alert-success' role='alert'>
                                Data berhasil diubah
                              </div>";
                            }else if($pesan == "hapus"){
                                echo "<div class='alert alert-danger' role='alert'>
                                Data berhasil dihapus
                              </div>";
                            }
                        }

                    ?>
                    

        
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">JKTrans</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>S.P</th>
                                            <th>Colli</th>
                                            <th>Berat</th>
                                            <th>Franco</th>
                                            <th>Confrankert</th>
                                            <th>Penerima</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                        include "connection.php";
                                        $query = "SELECT * FROM note";
                                        $row = mysqli_query($connect, $query);
                                        $no = 1;
                                        while($data = mysqli_fetch_array($row)){
                                        ?>

                                        <tr>
                                        <td> <?= $no++; ?></td>
                                        <td> <?= $data['sp']; ?></td>
                                        <td> <?= $data['colli']; ?></td>
                                        <td> <?= $data['berat']; ?></td>
                                        <td> <?php $fr = $data['franco']; 
                                            if ($fr == 1 ){
                                                echo "Lunas";
                                            }else{
                                                echo "Belum lunas";
                                            }
                                        ?></td>
                                        <td> <?= $data['confrankert']; ?></td>
                                        <td> <?= $data['penerima']; ?></td>
                                        <td> <?= $data['status']; ?></td>
                                        <td>
                                        <a class="edit" href="edit.php?id=<?=$data['id'];?>">Edit</a> |
                                        <a class="hapus" href="delete.php?id=<?= $data['id']; ?>">Hapus</a> 
                                        </td>
                                        </tr>
                                        <?php

                                        } ?>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>#</th>
                                            <th>S.P</th>
                                            <th>Colli</th>
                                            <th>Berat</th>
                                            <th>Franco</th>
                                            <th>Confrankert</th>
                                            <th>Penerima</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                   
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2020</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="logout.php">Logout</a>
                </div>
            </div>
        </div>
    </div>

<?php
include "footer.php";
?>