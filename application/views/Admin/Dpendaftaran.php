<div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="page-head-line">Pendaftaran</h4>

                </div>
            </div>
            <div class="row">
                <div class="col-md-10">
                <b>Detail Pendaftaran,</b>
                <hr>
                <table>
                  <tr>
                    <td><b>Nomor Pendaftaran</b></td>
                    <td width="10px">:</td>
                    <td><?php echo $isi['noPendaftaran']?></td>
                    <td width="30px"></td>
                    <td><b>Id Pelanggan</b></td>
                    <td width="10px">:</td>
                    <td><?php echo $isi['idPelanggan']?></td>
                  </tr>
                  <tr>
                    <td><b>Nama Pelanggan</b></td>
                    <td width="10px">:</td>
                    <td><?php echo $isi['Nama']?></td>
                    <td width="30px"></td>
                    <td><b>Pekerjaan</b></td>
                    <td width="10px">:</td>
                    <td><?php echo $isi['Pekerjaan']?></td>
                  </tr>
                  <tr>
                    <td><b>Alamat</b></td>
                    <td width="10px">:</td>
                    <td><?php echo $isi['Alamat']." No".$isi['NoRumah'].", RT".$isi['RT']."/ RW".$isi['RW'].", Kel ".$isi['NamaKelurahan']?></td>
                    <td width="30px"></td>
                    <td><b>No Handphone</b></td>
                    <td width="10px">:</td>
                    <td><?php echo $isi['noHP']?></td>
                  </tr>
                  <tr>
                    <td><b>No Telphone</b></td>
                    <td width="10px">:</td>
                    <td><?php echo $isi['noTelepon']?></td>
                    <td width="30px"></td>
                    <td><b>E-mail</b></td>
                    <td width="10px">:</td>
                    <td><?php echo $isi['Email']?></td>
                  </tr>
                  <tr>
                    <td><b>Funggsi Bangunan</b></td>
                    <td width="10px">:</td>
                    <td><?php echo $isi['fungsiBangunan']?></td>
                    <td width="30px"></td>
                    <td><b>No Rekening Tetaangga</b></td>
                    <td width="10px">:</td>
                    <td><?php echo $isi['NoRekTetangga']?></td>
                  </tr>
                   <tr>
                    <td><b>Tanggal Transaksi</b></td>
                    <td width="10px">:</td>
                    <td><?php echo tgl_indo(ubhSQL($isi['tanggalDaftar']))?></td>
                  </tr>
                </table>
                <br>
                <table>
                    <tr>
                        <td><b>KTP</b></td>
                        <td width="10px">:</td>
                        <td><img src="<?php echo base_url()?>assets/Upload/<?php echo $isi['KTP']?>" width="250" height="100"><br><br></td>
                        <td width="20px"></td>
                        <td><b>KK</b></td>
                        <td width="10px">:</td>
                        <td><img src="<?php echo base_url()?>assets/Upload/<?php echo $isi['KK']?>" width="250" height="100"><br><br></td>
                        <td><br><br></td>
                    </tr>
                     <tr>
                        <td><b>Rekening Ttg</b></td>
                        <td width="10px">:</td>
                        <td><img src="<?php echo base_url()?>assets/Upload/<?php echo $isi['RekeningPelanggan']?>" width="250" height="100"></td>
                        <td width="20px"></td>
                        <td><b>PBB</b></td>
                        <td width="10px">:</td>
                        <td><img src="<?php echo base_url()?>assets/Upload/<?php echo $isi['PBB']?>" width="250" height="100"></td>
                        <td><br><br></td>
                    </tr>
                </table>
                
            </div>
            <div class="col-md-2">
              <a href="<?php echo base_url()?>index.php/admin/pendaftaran" class="btn btn-success">Kembali !!</a>
            </div>
        </div>
        <br><br>