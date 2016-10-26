
<div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="page-head-line">Pendaftaran</h4>

                </div>

            </div>
            <div class="row">
                <div class="col-md-8">
                    <div>
                        <div class="row">
                <div class="col-md-12">
                <form action="<?php echo base_url()?>index.php/con_user/pdaftar" method="post" enctype="multipart/form-data">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <b>Form Pendaftaran</b>
                        </div>
                        <div class="panel-body">

                            <div class="form-group">
                            <label class="control-label" >*Nama</label>
                                <div class="controls">
                                <input class="form-control" type="text" name="nama" style = "width:100%">
                                </div>
                            </div>

                            <div class="form-group">
                            <label class="control-label" >*Alamat</label>
                                <div class="controls">
                                <textarea name="alamat" class="form-control" rows="2" style = "width:100%"></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                            <label class="control-label" >*Pekerjaan</label>
                                <div class="controls">
                                <input class="form-control" type="text" name="pekerjaan" style = "width:300px">
                                </div>
                            </div>

                            <div class="form-group">
                            <label class="control-label" >*No. Rumah</label>
                                <div class="controls">
                                <input class="form-control" type="text" name="noRumah" style = "width:50px">
                                </div>
                            </div>

                            <div class="form-group">
                            <label class="control-label" >*RT / RW / KodePos</label>
                                <div class="controls">
                                <table width="100%">
                                    <tr>
                                        <td colspan="2"><input  class="form-control" type="text" name="rt" style = "width:50px" onkeypress="return isNumberKey(event)"></td>
                                        <td><span> - </span></td>
                                        <td colspan="2"><input  class="form-control" type="text" name="rw" style = "width:50px" onkeypress="return isNumberKey(event)"></td>
                                        <td><span> - </span></td>
                                        <td colspan="2" width="100%"><input  class="form-control" type="text" name="kodepos" style = "width:100px" onkeypress="return isNumberKey(event)"></td>
                                    </tr>
                                </table>
                                </div>
                            </div>

                            <div class="form-group">
                            <label class="control-label" >*Kelurahan</label>
                                <div class="controls">
                                <input id="kode" class="form-control" type="text" name="kelurahan" style = "width:500px">
                                <input id="idKelu" type="hidden" name="idkelurahan" >
                                <input type="hidden" name="idPel" value="<?php echo $idPel; ?>">
                                <input type="hidden" name="noPend" value="<?php echo $idpend; ?>">
                                </div>
                            </div>

                            <div class="form-group">
                            <label class="control-label" >*No. Handphone</label>
                                <div class="controls">
                                <input class="form-control" type="text" name="nHP" style = "width:300px" onkeypress="return isNumberKey(event)">
                                </div>
                            </div>

                            <div class="form-group">
                            <label class="control-label" >No. Telephone</label>
                                <div class="controls">
                                <input class="form-control" type="text" name="nTelphone" style = "width:300px" onkeypress="return isNumberKey(event)">
                                </div>
                            </div>


                            <div class="form-group">
                            <label>*Fungsi Bangunan</label>
                            <select class="form-control" style = "width:300px" name="fbangunan">
                                <option></option>
                                <option value="Rumah Tangga">Rumah Tangga</option>
                                <option value="Sosial">Sosial</option>
                                </select>
                            </div>

                            <div class="form-group">
                            <label class="control-label" >*No. Rekening Tetangga</label>
                                <div class="controls">
                                <input class="form-control" type="text" name="nRekening" style = "width:300px" onkeypress="return isNumberKey(event)">
                                </div>
                                <br>
                            </div>

                            
                            <div class="form-group">
                            <button type="submit" name="post" class="btn btn-success"><span class="glyphicon glyphicon-plus"> Daftar</span></button>
                            <button type="reset" name="reset" class="btn btn-warning"><span class="glyphicon glyphicon-refresh"> Reset</span></button>
                                
                            </div>


                        </div>
                    </div>
                </div>
            </div>      
        </div>
    </div>
				<div class="col-md-4">
                    <div class="alert">
                    <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <b>Lampiran - Lampiran Pendaftaran</b><br>
                            <font color="#FF0000">Ukuran Maksimum file 2 mb dan format diizinkan jpg dan PNG !!!</font>
                        </div>
                        <div class="panel-body">
                        <div class="form-group">
                            <label class="control-label" >*KTP (Kartu Tanda Penduduk)</label>
                                <div class="controls">
                                <input type="file" name="im">
                                </div>
                            </div>
                            <div class="form-group">
                            <label class="control-label" >*KK (Kartu Keluarga)</label>
                                <div class="controls">
                                <input type="file" name="im1">
                                </div>
                            </div>
                            <div class="form-group">
                            <label class="control-label" >*Rekening Tetangga</label>
                                <div class="controls">
                                <input type="file" name="im2">
                                </div>
                            </div>
                            <div class="form-group">
                            <label class="control-label" >*PBB (Pajak Bumi dan Bangunan)</label>
                                <div class="controls">
                                <input type="file" name="im3">
                                </div>
                                </div>
                            </div>
                        </div> 
                    </div>
                </div>
            </div>
            </form>
        </div>
        <br>
        <br>