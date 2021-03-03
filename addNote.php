<?php
include "header.php";
?>





                <div class="container-fluid">
<div class="card shadow mb-4 col-11 mx-auto">
<div class="row">

                        <div class="card-header col-12 bg-white my-1">
                            <h3 class="mb-0 d-inline text-primary">Form Tambah Data Nota</h3>
                            <a href="dashboard.php" class="btn float-right btn-sm btn-danger" style="width:33px; font-weight:bold;">X</a>
                        </div>

                        <div class="card-body">
                        <form method="post" action="input-action.php">
                            <div class="form-group">
                                <label class="text-dark" for="sp">S. P.</label>
                                <input class="form-control" type="text" name="sp" id="sp">
                            </div>
                            <div class="form-group">
                                <label class="text-dark" for="colli">Colli</label>
                                <input class="form-control" type="text" name="colli" id="colli">
                            </div>
                            <div class="form-group">
                                <label class="text-dark" for="berat">Berat</label>
                                <input class="form-control" type="text" name="berat" id="berat">
                            </div>
                            <div class="form-group">
                                <label class="text-dark" for="franco">Franco</label>
                                <select class="form-control" type="text" name="franco" id="franco">
                                    <option value="1">Lunas</option>
                                    <option value="0">Belum Lunas</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="text-dark" for="confrankert">Confrankert</label>
                                <input class="form-control" type="number" name="confrankert" id="confrankert">
                            </div>
                            <div class="form-group">
                                <label class="text-dark" for="penerima">Penerima</label>
                                <input class="form-control" type="text" name="penerima" id="penerima">
                            </div>
                            <div class="form-group">
                                <label class="text-dark" for="status">Status</label>
                                <input class="form-control" type="text" name="status" id="status">
                            </div>

                            <button type="submit" class="btn btn-primary col-lg-12">Tambah Data!</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <?php
include "footer.php";
?>