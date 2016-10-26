<div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="page-head-line">*Update User</h4>

                </div>

            </div>
            <div class="row">
                <div class="col-md-8">
                <?php echo form_open('administrator/edit')?>
                    <div class="form-group">
                    <label class="control-label" >*Username</label>
                        <div class="controls">
                        <input class="form-control" type="text" name="user" style = "width:80%" value="<?php echo $isi['username']?>">
                        <input type="hidden" name="idp" value="<?php echo $isi['iduser']?>">
                        </div>
                    </div>
                    <div class="form-group">
                    <label class="control-label" >*Level</label>
                        <div class="controls">
                        <select class="form-control" name="level" style = "width:80%">
                          <?php 
                            if($isi['level']==1){
                              $l ="User";
                            }else{
                                $l = "Admin";
                            }
                          ?>
                          <option value="<?php echo $isi['level']?>"><?php echo $l?></option>
                          <option value="1">User</option>
                          <option value="2">Admin</option>
                        </select>
                        </div>
                    </div><div class="form-group">
                    <label class="control-label" >*Password</label>
                        <div class="controls">
                        <input class="form-control" type="password" name="pass" style = "width:80%">
                        </div>
                    </div>
                    <div class="form-group">
                    <label class="control-label" >*Confirm Password</label>
                        <div class="controls">
                        <input class="form-control" type="password" name="con" style = "width:80%">
                        </div>
                    </div>
                    <br>
                    <div class="form-group">
                        <button type="submit" name="post" class="btn btn-success"><span class="glyphicon glyphicon-plus"> Update</span></button>
                        <button type="reset" name="reset" class="btn btn-warning"><span class="glyphicon glyphicon-refresh"> Reset</span></button>
                    </div>
                    </form>

                </div>
                  </div>
              </div>
          </div>
        <br>
        <br>