<div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="page-head-line">Pelanggan</h4>

                </div>

            </div>
            <div class="row">
                <div class="col-md-12">
                        <table width="100%" class="table table-striped table-bordered responsive" id="tabeldata1">
                          <thead>
                            <tr>
                              <th>No</th>
                              <th>ID Pelanggan</th>
                              <th>Nama Pelanggan</th>
                              <th>Alamat</th>
                              <th>Pekerjaan</th>
                              <th>HP</th>
                              <th>Telepon</th>
                              <th>Status</th>
                              <th width="100px">Aksi</th>
                            </tr>
                          </thead>

                          <tbody>
                          <?php 
                          $no = 1;
                          foreach ($isi->result() as $i) {
                            if($i->Status == "Belum Membayar"){
                                $s = "<font color='FF0000'>Belum Membayar</font>";
                            }else{
                                $s = "Sudah Membayar";
                            }
                            echo "
                            <tr>
                              <td>$no</td>
                              <td>$i->idPelanggan</td>
                              <td>$i->Nama</td>
                              <td>$i->Alamat</td>
                              <td>$i->Pekerjaan</td>
                              <td>$i->noHP</td>
                              <td>$i->noTelepon</td>
                              <td>$s</td>";
                              ?>
                              <td class="text-center" style="vertical-align:middle;">
                              <a href="<?php echo base_url()?>index.php/admin/Dpelanggan/<?php echo $i->idPelanggan?>" class="btn btn-warning btn-sm"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
                              <a href="<?php echo base_url()?>index.php/admin/hPelanggan/<?php echo $i->idPelanggan?>" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
                              </td>
                            </tr>
                            <?php
                            $no++;
                          }
                          ?>
                          </tbody>
                        </table>
            </div>
        </div>
        <br>
        <br>