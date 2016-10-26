<div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="page-head-line">Laporan Pelanggan</h4>

                </div>

            </div>
            <div class="row">
                <div class="col-md-12">
                <?php echo form_open('admin/laporanPelanggan')?>
                  <table>
                    <span>
                    <tr>
                      <td><select class="form-control" name="Status">
                        <option value="<?php echo $sts ?>"><?php echo $sts ?></option>
                        <option Value ="Belum Membayar">Belum Membayar</option>
                        <option value="Sudah Membayar">Sudah Membayar</option>
                      </select>
                      <td width="10px"></td>
                      <td><button type="submit" name="tampil" class="btn btn-success">Tampilkan !!</button></td>
                      <td width="10px"></td>
                      <td><button type="submit" name="cetak" class="btn btn-success">Cetak !!</button></td>
                    </tr>
                    </span>
                  </table>
                </form>
                <br>
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