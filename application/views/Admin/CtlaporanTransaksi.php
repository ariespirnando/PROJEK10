
<!DOCTYPE html>
<head>
    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <title>Transaski</title>
    <!-- BOOTSTRAP CORE STYLE  -->
   <link href="<?php echo base_url();?>assets/assets/css/bootstrap.css" rel="stylesheet" />
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
                
                   <div align="center">
                    <b>Laporan Transaksi</b><br>
                    <?php echo $ket ?>
                   </div>
					<br><br> 

                    <table border="1" cellpadding="2" cellspacing="2" class="table table-striped" width="100%">
                        <tr>
                              <th><b>No</b></th>
                              <th><b>No Transaksi</b></th>
                              <th><b>No Pendaftaran</b></th>
                              <th><b>No Pelanggan</b></th>
                              <th><b>Atas Nama</b></th>
                              <th><b>Bank / Rekening</b></th>
                              <th><b>Total Pembayaran</b></th>
                              <th><b>Tanggal Pembayaran</b></th>
                        </tr>
                        <?php 
                        $no = 1;
                        foreach ($isi->result() as $i) {
                            if($i->fungsiBangunan == 'Sosial'){
                                $bayar ="Rp. 170.000,-";
                            }else{
                                $bayar ="Rp. 150.000,-";
                            }
                            $tgl = tgl_indo_timestamp($i->tanggalDaftar);
                            echo " <span><tr>
                              <td> $no</td>
                              <td> $i->idtransaksi</td>
                              <td> $i->noPendaftaran</td>
                              <td> $i->idPelanggan</td>
                              <td> $i->atasNama</td>
                              <td> $i->TempatPembayaran</td>
                              <td> $i->JumlahTransaksi</td>";
                              ?>
                              <td> <?php echo ubhSQL($i->tanggalPembayaran);?></td>
                            </tr></span>
                            <?php
                            $no++;
                          }
                          ?>
                        </table>
                        <hr>
                        <br> 
                        <br>
                        <div align="center">
                            <table width="100%">
                                <tr>
                                    <td align="center">Mengetahui <br>Kabag Humas & Langganan<br><br></td>
                                    <td width="20"></td>
                                    <td align="center">Diketahui <br>Oleh Kasubag Langganan<br><br></td>
                                    <td width="20"></td>
                                    <td align="center">Dibuat Oleh <br>Staff Hubungan Langganan<br><br></td>
                                </tr>
                                 <tr>
                                    <td align="center"><br><br><br><br>Senjaya, S.Kom</td>
                                    <td width="20"></td>
                                    <td align="center"><br><br><br><br>Intan, S.E<br><br></td>
                                    <td width="20"></td>
                                    <td align="center"><br><br><br><br>Hosi, S.MM<br><br></td>
                                </tr>
                            </table>
                        </div>
                        <br><br><br>

                       
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
