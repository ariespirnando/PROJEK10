<div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="page-head-line">Konfirmasi</h4>

                </div>

            </div>
            <div class="row">
                <div class="col-md-8">
                    <div>
                        <p>*Silakan Masukan nomor pendaftaran dan no pelanggan anda untuk melakukan Konfirmasi</p>
                            <?php echo form_open_multipart('con_user/konfirmasi')?>
                            <table width="100%">
                                <tr>
                                    <td>*Nomor Pendaftaran</td>
                                    <td><input class="form-control" type="text" name="pend" style = "width:66%"></td>
                                    <td>*Nomor Pelanggan</td>
                                    <td><input class="form-control" type="text" name="pel" style = "width:86%"></td>
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