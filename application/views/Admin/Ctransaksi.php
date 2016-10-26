
<!DOCTYPE html>
<head>
    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <title>Transaksi</title>   <link href="<?php echo base_url();?>assets/assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONT AWESOME ICONS  -->
    <link href="<?php echo base_url();?>assets/assets/css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLE  -->
    <link href="<?php echo base_url();?>assets/assets/css/style.css" rel="stylesheet" />
    <link rel="shortcut icon" href="<?php echo base_url();?>assets/assets/img/logo.png">

    <link href="<?php echo base_url();?>assets/assets/css/content.css" rel="stylesheet" />

    <link href="<?php echo base_url();?>assets/css/fileinput.css" media="all" rel="stylesheet" type="text/css" />

    <script src="<?php echo base_url();?>assets/assets/js/jquery-1.11.1.js"></script>
    <!-- BOOTSTRAP SCRIPTS  -->
    <script src="<?php echo base_url();?>assets/assets/js/bootstrap.js"></script>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

    <script src="<?php echo base_url();?>assets/js/fileinput.js" type="text/javascript"></script>


    <link href="<?=base_url()?>assets/js/jquery-ui.css" rel="stylesheet">
    <script src="<?=base_url()?>assets/js/jquery-ui.js" type="text/javascript"></script>
     <!-- HTML5 Shiv and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    
    <!-- HEADER END-->
    
    <!-- MENU SECTION END-->
    <div class="content-wrapper">

        <div class="container">
            
                <table>
                    <tr>
                        <td><div class="col-md-2" align="right">
                <img src="<?php echo base_url();?>assets/assets/img/logo.png" width="100">
                </div></td>
                        <td><b>Perusahaan Daerah Air Minum (PDAM) Kota Bandar Lampung<b><br>
                Jl. P Emir M Noer No.11a, Sumur Putri, Tlk. Betung Utara, <br>Kota Bandar Lampung, Lampung 35211</p></td>
                    </tr>
                </table>
                <hr>
                <div class="col-md-12">
                    <div class="alert">
                    <br>
                        <?php echo date('d-M-Y')?>
                       <br>
                        <b>Transaksi Pembayaran,</b><br> pemasangan baru PDAM WayRilau Kota Bandar lampung<br>
						Berikut merupakan Rincian nya:,
						<br><br> 

						<table>
							<tr>
								<td>No Transaksi</td>
								<td>:</td>
								<td><b><?php echo $isiPreview['noPendaftaran'] ?></b></td>
							</tr>
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
                            <tr>
                                <td>Tanggal Pendaftaran</td>
                                <td>:</td>
                                <td><b> <?php echo tgl_indo_timestamp($isiPreview['tanggalDaftar']) ?></b></td>
                            </tr>
                            <tr>
                                <td>Nama Pelanggan</td>
                                <td>:</td>
                                <td><b><?php echo $isiPreview['Nama'] ?></b></td>
                            </tr>
                            <tr>
                                <td>Kelurahan</td>
                                <td>:</td>
                                <td><b><?php echo $isiPreview['NamaKelurahan'] ?></b></td>
                            </tr>
                            <tr>
                                <td>Alamat Pelanggan</td>
                                <td>:</td>
                                <td><b><?php echo $isiPreview['Alamat'] ?>,RT<?php echo $isiPreview['RT'] ?>/RW<?php echo $isiPreview['RW'] ?>/Kodepos  : <?php echo $isiPreview['KodePos'] ?></b></td>
                            </tr>
                            <tr>
                                <td>No Handphone</td>
                                <td>:</td>
                                <td><b><?php echo $isiPreview['noHP'] ?></b></td>
                            </tr>
                            <tr>
                                <td>Telephone</td>
                                <td>:</td>
                                <td><b><?php echo $isiPreview['noTelepon'] ?></b></td>
                            </tr>
                            <tr>
                                <td>fungsi Bangunan</td>
                                <td>:</td>
                                <td><b><?php echo $isiPreview['fungsiBangunan'] ?></b></td>
                            </tr>
                            <tr>
                                <td>Nomor Referensi</td>
                                <td>:</td>
                                <td><b><?php echo $isiPreview['NoRekTetangga'] ?></b></td>
                            </tr>
                            <?php 
                            if($isiPreview['fungsiBangunan']=='Sosial'){
                                $bayar ="Rp. 170.000,-";
                            }else{
                                $bayar ="Rp. 150.000,-";
                            }
                            ?>
                            <tr>
                                <td>Total Tagihan</td>
                                <td>:</td>
                                <td><b><?php echo $bayar; ?></b></td>
                            </tr>
                            <tr>
                                <td>Tanggal Transaksi</td>
                                <td width="10px">:</td>
                                <td><b><?php echo tgl_indo_timestamp($isiPreview['tanggalPembayaran'])?></b></td>
                              </tr>
						</table><br>
                        <hr>
                        <br> 
                        <br><br><br>

                        <font size="10">PDAM Way Rilau</font>
            </div>
        </div>
    </div>
    <!-- CONTENT-WRAPPER SECTION END-->
    <!-- FOOTER SECTION END-->
    <!-- JAVASCRIPT AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
    <!-- CORE JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.11.1.js"></script>
    <!-- BOOTSTRAP SCRIPTS  -->
    <script src="assets/js/bootstrap.js"></script>
</body>
</html>
