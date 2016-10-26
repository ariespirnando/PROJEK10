
<div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="page-head-line">LogIn User</h4>

                </div>

            </div>
            <div class="row">
                <div class="col-md-8">
                    <?php echo form_open('con_user/login'); ?>
                        <div class="form-group">
                        <label class="control-label" >*Userame</label>
                            <div class="controls">
                            <input class="form-control" type="text" name="nama" style = "width:70%">
                            </div>
                        </div>
                        <div class="form-group">
                        <label class="control-label" >*Password</label>
                            <div class="controls">
                            <input class="form-control" type="password" name="pw" style = "width:70%">
                            </div>
                        </div>

                        <div class="form-group">
                        <button type="submit" name="post" class="btn btn-success"><span class="glyphicon glyphicon-log-in"> Masuk</span></button>
                        <button type="reset" name="reset" class="btn btn-warning"><span class="glyphicon glyphicon-refresh"> Reset</span></button>
                            
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <br>
        <br>