  <div class="container">
  <div class="col-md-8 col-md-offset-2">
    
      <div class="panel panel-primary" style="margin-top: 120px;">
        <div class="panel-heading">
          <h3 class="panel-title">แก้ไขประวัติส่วนตัว</h3>
        </div>
        <div class="panel-body">
        <form id="registration-form" method="POST" class="form-horizontal" action="save_profile.php" enctype="multipart/form-data">  
          <div class="form-group">
            <div class="col-md-2">
              <label class="control-label">Username</label>
            </div>
            <div class="col-md-10">
              <label><?php echo $query->Username;?></label>
            </div>
          </div>
          <div class="form-group">
            <div class="col-md-2"> 
              <label class="control-label">Password</label>
            </div>
            <div class="col-md-10">
              <input name="txtPassword" type="password" id="txtPassword" class="form-control" value="<?php echo $query->Password;?>">
            </div>
          </div>
          <div class="form-group">
            <div class="col-md-2">
              <label class="control-label">Confirm Password</label>
            </div>
            <div class="col-md-10">
              <input name="txtConPassword" type="password" id="txtConPassword" class="form-control" value="<?php echo $query->Password;?>">
            </div>
          </div>
          <div class="form-group">
            <div class="col-md-2">
              <label class="control-label">Firstname</label>
            </div>
            <div class="col-md-10">
              <input name="txtFirstname" type="text" id="txtFirstname" class="form-control" value="<?php echo $query->Firstname;?>">
            </div>
          </div>
          <div class="form-group">
            <div class="col-md-2">
              <label class="control-label">Lastname</label>
            </div>
            <div class="col-md-10">
              <input name="txtLastname" type="text" id="txtLastname" class="form-control" value="<?php echo $query->Lastname;?>">
            </div>
          </div>
          <div class="form-group">
            <div class="col-md-2">
              <label class="control-label">School</label>
            </div>
            <div class="col-md-10">
              <input name="txtSchool" type="text" id="txtSchool" class="form-control" value="<?php echo $query->School;?>">
            </div>
          </div>
          <div class="form-group">
            <div class="col-md-2">
              <label class="control-label">Position</label>
            </div>
            <div class="col-md-10">
              <input name="txtPosition" type="text" id="txtPosition" class="form-control" value="<?php echo $query->Position;?>">
            </div>
          </div>
          <div class="form-group">
            <div class="col-md-2">
              <label class="control-label">Mobilephone</label>
            </div>
            <div class="col-md-10">
              <input name="txtMobilephone" type="text" id="txtMobilephone" class="form-control" value="<?php echo $query->Mobilephone;?>">
            </div>
          </div>
          <div class="form-group">
            <div class="col-md-2">
              <label class="control-label">Address</label>
            </div>
            <div class="col-md-10">
              <textarea rows="4" name="txtAddress" id="txtAddress" class="form-control"><?php echo $query->Address;?></textarea>
            </div>
          </div>
          <div class="form-group">
            <div class="col-md-2">
              <label class="control-label">Email</label>
            </div>
            <div class="col-md-10">
              <input name="txtEmail" type="text" id="txtEmail" name="txtEmail" class="form-control" value="<?php echo $query->Email;?>">
            </div>
          </div>
          <div class="form-group">
            <div class="col-md-2">
              <label class="control-label">Line</label>
            </div>
            <div class="col-md-10">
              <input name="txtLine" type="text" id="txtLine" class="form-control" value="<?php echo $query->Line;?>">
            </div>
          </div>
          <div class="form-group">
            <div class="col-md-2">
              <label class="control-label">Facebook</label>
            </div>
            <div class="col-md-10">
              <input name="txtFacebook" type="text" id="txtFacebook" class="form-control" value="<?php echo $query->Facebook;?>">
            </div>
          </div>
          <div class="form-group">
            <div class="col-md-2">
              <label class="control-label">Status</label>
            </div>
            <div class="col-md-10">
              <label class="control-label"><?php echo $query->Role;?></label>
            </div>
          </div>
          <div class="form-group">
            <div class="col-md-3">
              <label class="control-label">รูปประจำตัว</label>
            </div>
            <div class="col-md-9">
              <!-- <input type="file" name="fileUpload"> -->

              <div class="fileinput fileinput-new" data-provides="fileinput">
                <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px;">
                  <img src="images/<?php echo $query->FileName;?>" alt="">
                </div>
                <div>
                  <span class="btn btn-default btn-file"><span class="fileinput-new">Select image</span><span class="fileinput-exists">Change</span><input type="file" name="fileUpload"></span>
                  <!-- <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a> -->
                </div>
              </div>
              <p>* รองรับไฟล์ภาพนามสกุล jpg,jpeg,png,gif เท่านั้น</p>
              <p>* รองรับไฟล์ภาพขนาดไม่เกิน 250*250 pixel</p>
            </div>  
          </div>
          <div class="form-inline" align="right"> 
            <button type="submit" class="btn btn-default">บันทึก</button>
          </div>
          </form>
        </div>
      </div>
     
    </form>
    </div> 
  </div>