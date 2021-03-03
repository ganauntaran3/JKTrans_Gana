<?php
include "header.php";
?>





                <div class="container-fluid">
                <div class="card shadow mb-4 col-11 mx-auto">
                <div class="row">

                        <div class="card-header col-12 bg-white my-1">
                            <h3 class="mb-0 d-inline text-primary">Form Tambah Data Nota</h3>
                            <a href="tables.php" type="submit" class="btn float-right btn-sm btn-danger" style="width:33px; font-weight:bold;">X</a>
                        </div>

                        <div class="card-body">

                        <?php
                            include "connection.php";
                            $id = $_GET["id"];
                            $query = "SELECT * FROM note WHERE id='$id' ";
                            $row = mysqli_query($connect, $query);
                            $no = 1;
                            while($data = mysqli_fetch_array($row))
                            {
                               
                        ?>

                        <form method="post" action="update.php">
                        <input type="hidden" name="id" value="<?=  $data['id']; ?>">
                            <div class="form-group">
                                <label class="text-dark" for="sp">S. P.</label>
                                <input class="form-control" type="text" name="sp" value="<?= $data['sp'];  ?>" id="sp">
                            </div>
                            <div class="form-group">
                                <label class="text-dark" for="colli">Colli</label>
                                <input class="form-control" type="text" name="colli" value="<?= $data['colli'];  ?>" id="colli">
                            </div>
                            <div class="form-group">
                                <label class="text-dark" for="berat">Berat</label>
                                <input class="form-control" type="text" name="berat" value="<?= $data['berat'];  ?>" id="berat">
                            </div>
                            <div class="form-group">
                                <label class="text-dark" for="franco">franco</label>
                                <select class="form-control" type="text" name="franco" value="<?= $data['franco'];  ?>" id="franco">
                                <?php

                                ?>
                                    <option value="1" <?= ($data['franco'] == 0 ) ? 'selected' : '' ?>>Lunas</option>
                                    <option value="0" <?= ($data['franco'] == 0 ) ? 'selected' : '' ?>>Belum Lunas</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="text-dark" for="confrankert">Confrankert</label>
                                <input class="form-control" type="number" name="confrankert" value="<?= $data['confrankert'];  ?>" id="confrankert">
                            </div>
                            <div class="form-group">
                                <label class="text-dark" for="penerima">Penerima</label>
                                <input class="form-control" type="text" name="penerima" value="<?= $data['penerima'];  ?>" id="penerima">
                            </div>
                            <div class="form-group">
                                <label class="text-dark" for="status">Status</label>
                                <input class="form-control" type="text" name="status" value="<?= $data['status'];  ?>" id="status">
                            </div>

                            <button type="submit" class="btn btn-primary col-lg-12">Tambah Data!</button>
                        </form>
                        <?php
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>

        <?php
include "footer.php";
?>