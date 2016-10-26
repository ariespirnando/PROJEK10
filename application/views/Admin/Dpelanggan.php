<div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="page-head-line">Pelanggan</h4>

                </div>
            </div>
            <div class="row">
                <div class="col-md-10">
                <b>Detail Pelanggan,</b>
                <hr>
                <table>
                <tr>
                    <td><b>Id Pelanggan</b></td>
                    <td width="10px">:</td>
                    <td><?php echo $isi['idPelanggan']?></td>
                    <td width="30px"></td>
                    <td><b>Nama Pelanggan</b></td>
                    <td width="10px">:</td>
                    <td><?php echo $isi['Nama']?></td>
                  </tr>
                  <tr>
                    <td><b>Alamat</b></td>
                    <td width="10px">:</td>
                    <td><?php echo $isi['Alamat']?></td>
                    <td width="30px"></td>
                    <td><b>Pekerjaan</b></td>
                    <td width="10px">:</td>
                    <td><?php echo $isi['Pekerjaan']?></td>
                  </tr>
                  <tr>
                    <td><b>No Telphone</b></td>
                    <td width="10px">:</td>
                    <td><?php echo $isi['noTelepon']?></td>
                    <td width="30px"></td>
                    <td><b>No Handphone</b></td>
                    <td width="10px">:</td>
                    <td><?php echo $isi['noHP']?></td>
                  </tr>
                  <tr>
                    <td><b>Status</b></td>
                    <td width="10px">:</td>
                    <td><?php if($isi['Status'] == "Belum Membayar"){
                                echo "<font color='FF0000'><b>Belum Membayar</b></font>";
                            }else{
                                echo  "<b>Sudah Membayar</b>";
                            }?>
                        </td>
                  </tr>
                </table>
                <br>
            </div>
            <div class="col-md-2">
              <a href="<?php echo base_url()?>index.php/admin/pelanggan" class="btn btn-success">Kembali !!</a>
            </div>
        </div>
        <br><br>