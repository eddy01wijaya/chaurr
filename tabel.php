<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="body">
            
                <form action="<?php echo base_url(). '/index.php/main/tambah_aksi'; ?>" method="post">

                    <label>NIM</label>
                    <div class="form-group">
                        <div class="form-line">
                            <input type="text" name="NIM" class="form-control" placeholder="Masukan NIM">
                        </div>
                    </div>
                    <label>Nama</label>
                    <div class="form-group">
                        <div class="form-line">
                            <input type="text" name="Nama" class="form-control" placeholder="Masukan Nama">
                        </div>
                    <br><label>Program Studi</label>
                    <br>
                    <select class="selectpicker-line" name="Prodi">
                        <option>Ilmu Komputer</option>
                        <option>Teknik Informatika</option>
                        <option>Pendidikan Ilmu Komputer</option>
                    </select>
                    <br><br>

                    <button type="submit" class="btn btn-primary m-t-15 waves-effect center" value="tabel">
                    INPUT</button>
                </form>
            </div>
        </div>
        <br>
        <div class="card">
            <div class="header">
            <div class="body">
                <table id="mainTable" class="table table-striped" style="cursor: pointer;">
                    <thead>
                        <tr>
                            <th>NIM</th>
                            <th>Nama</th>
                            <th>Prodi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($crud as $u){ ?>
                            <tr>
                                <td><?php echo $u->NIM ?></td>
                                <td><?php echo $u->Nama ?></td>
                                <td><?php echo $u->Prodi ?></td>
                            </tr>
                        <?php } ?>
                        </tr>
                    </tbody>
                    <tfoot>
                    </tfoot>
                </table>
            <input style="position: absolute; top: 140px; left: 324px; padding: 10px; text-align: start; font: 400 14px/20px Roboto, Arial, Tahoma, sans-serif; border-width: 1px 0px; border-style: solid none; border-color: rgb(238, 238, 238) rgb(85, 85, 85); width: 220px; height: 41px; display: none;"></div>
        </div>
    </div>
</div>