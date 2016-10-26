<div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="page-head-line">Konfirmasi</h4>

                </div>

            </div>
            <div class="row">
                <div class="col-md-8">
                    <div>
                        
                            <?php echo form_open_multipart('con_user/previewKonftimasi')?>
                            <table width="100%">
                                <tr>
                                    <td>*Nomor Pendaftaran</td>
                                    <td><input disabled class="form-control" type="text" name="pend1" style = "width:86%" value="<?php echo $pend?>">
                                        <input type="hidden" name="pend" value="<?php echo $pend?>"></td>
                                        <input type="hidden" name="trx" value="<?php echo $ktr ?>">
                                        <input type="hidden" name="pell" value="<?php echo $pel['idPelanggan']?>"></td>
                                    <td><br><br></td>
                                </tr>
                                <tr>
                                    <td>*Bank</td>
                                    <td><SELECT class="form-control" name="bank" style = "width:30%" onchange="changeValue(this.value)">
                                        <option value="0"></option>
                                        <option value="1">BNI 46</option>
                                        <option value="2">Mandiri</option>
                                        </SELECT></td>
                                    <td><br><br></td>
                                </tr>
                                <tr>
                                    <td>*Rekening Pembayaran</td>
                                    <td><input type="hidden" name="rek" id="nama">
                                    <input disabled class="form-control" type="text" style = "width:30%" id="nama1">
                                    </td>
                                    <td><br><br></td>
                                </tr>
                                <tr>
                                    <td>*Atas Nama</td>
                                    <td><input class="form-control" type="text" name="nama" style = "width:86%"></td>
                                    <td><br><br></td>
                                </tr>
                                <tr>
                                    <td>*Jumlah Transaksi</td>
                                    <td><input class="form-control" type="text" name="juml" style = "width:86%" onkeypress="return isNumberKey(event)"></td>
                                    <td><br><br></td>
                                </tr>
                                <tr>
                                    <td>*Bukti Transaksi</td>
                                    <td><input type="file" name="upload" style = "width:86%"></td>
                                    <td><br><br></td>
                                </tr>
                            </table>
                            <br>
                            <button type="submit" name="post" class="btn btn-success"><span class="glyphicon glyphicon-tags"> Konfirmasi !</span></button>
                            <button type="reset" name="reset" class="btn btn-warning"><span class="glyphicon glyphicon-tags"> Batal</span></button>
                        </div>
                        <?php echo form_close() ?>
                </div>
                <div class="col-md-4">
                </div>
            </div>
        </div>
        <br>
        <br>