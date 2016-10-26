<div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="page-head-line">Transaksi</h4>

                </div>
            </div>
            <div class="row">
                <div class="col-md-10">
                <b>Detail Transaksi,</b>
                <hr>
                <table>
                  <tr>
                    <td><b>Nomor Transaksi</b></td>
                    <td width="10px">:</td>
                    <td><?php echo $isi['idtransaksi']?></td>
                    <td width="30px"></td>
                    <td><b>Nomor Pendaftaran</b></td>
                    <td width="10px">:</td>
                    <td><?php echo $isi['noPendaftaran']?></td>
                  </tr>
                  <tr>
                    <td><b>Id Pelanggan</b></td>
                    <td width="10px">:</td>
                    <td><?php echo $isi['idPelanggan']?></td>
                    <td width="30px"></td>
                    <td><b>Atas Nama</b></td>
                    <td width="10px">:</td>
                    <td><?php echo $isi['atasNama']?></td>
                  </tr>
                  <tr>
                    <td><b>Total Pembayaran</b></td>
                    <td width="10px">:</td>
                    <td>Rp. <?php echo $isi['JumlahTransaksi']?></td>
                    <td width="30px"></td>
                    <td><b>Tanggal Transaksi</b></td>
                    <td width="10px">:</td>
                    <td><?php echo tgl_indo(ubhSQL($isi['tanggalPembayaran']))?></td>
                  </tr>
                </table>
                <br>
                <b>Bukti Pembayaran :</b>
                <img src="<?php echo base_url()?>assets/Upload/<?php echo $isi['bukti']?>" width="450" height="300">
                <br>
            </div>
            <div class="col-md-2">
              <a href="<?php echo base_url()?>index.php/admin/transaksi" class="btn btn-success">Kembali !!</a>
            </div>
        </div>
        <br><br>