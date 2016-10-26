<div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="page-head-line">Pendaftaran</h4>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div>
                        <b>Terima Kasih,</b><br>Anda sudah melakukan pendaftaran pemasangan baru PDAM WayRilau Kota Bandar lampung<br>
                        Berikut merupakan no pendaftaran no pelanggan anda,
                        <br> 
                        <table>
                            <tr>
                                <td>No pendaftaran</td>
                                <td>:</td>
                                <td><b><?php echo $isiPreview['noPendaftaran'] ?></b></td>
                            </tr>
                            <tr>
                                <td>No Pelanggan</td>
                                <td>:</td>
                                <td><b><?php echo $isiPreview['idPelanggan'] ?></b></td>
                            </tr>
                        </table>
                        <?php 
                        if($isiPreview['fungsiBangunan']=='Sosial'){
                            $bayar ="Rp. 170.000,-";
                        }else{
                            $bayar ="Rp. 150.000,-";
                        }

                        ?>
                        <b>Pembayaran</b><br>
                        Segera lakukan pembayaran, sebesar <b><?php echo $bayar; ?></b><br>
                        di bank-bank yang berkerja sama dengan PDAM WAyRilau Kota Bandar lampung.
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="alert alert-warning">
                        Bukti Pendaftaran Baru<br>
                        Klik untuk mencetak Pendaftaran Pemasangan Baru Sambungan Air Minum PDAM Way Rilau Kota Bandar lampung<br>
                        <a href="<?php echo base_url()?>index.php/con_user/cetak/<?php echo $isiPreview['noPendaftaran'] ?>" class="btn btn-success" ><span class="glyphicon glyphicon-save"> DownloadBukti !</span> </a>
                        <a href="<?php echo base_url()?>index.php/con_user/back" class="btn btn-success" onclick=''><span class="glyphicon glyphicon-tags" onclick="return confirm('Yakin Proses Pendaftaran Telah Selesai !')"> PendaftaranSelesai</span> </a>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <br>