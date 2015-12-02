<?php 
$attributes = array('class' => 'email', 'id' => 'edit-form');
echo form_open_multipart('Upload/do_upload', $attributes);
foreach($query as $row){
?>
    <div class="col-md-8 col-md-offset-2">    
      <div class="panel panel-primary" style="margin-top: 100px;">
        <div class="panel-heading">
          <h3 class="panel-title">แก้ไขประวัติส่วนตัว</h3>
        </div>
        <div class="panel-body">
          <div class="form-group">
            <div class="col-md-3">
              <label class="control-label">Username</label>
            </div>
            <div class="col-md-9">
              <label><?php echo $row->Username;?></label>
            </div>
          </div>
          <div class="form-group">
            <div class="col-md-3"> 
              <label class="control-label">Password</label>
            </div>
            <div class="col-md-9">
              <input name="txtPassword" type="password" id="txtPassword" class="form-control" value="<?php echo $row->Password;?>">
            </div>
          </div>
          <div class="form-group">
            <div class="col-md-3">
              <label class="control-label">Confirm Password</label>
            </div>
            <div class="col-md-9">
              <input name="txtConPassword" type="password" id="txtConPassword" class="form-control" value="<?php echo $row->Password;?>">
            </div>
          </div>
          <div class="form-group">
            <div class="col-md-3">
              <label class="control-label">Firstname</label>
            </div>
            <div class="col-md-9">
              <input name="txtFirstname" type="text" id="txtFirstname" class="form-control" value="<?php echo $row->Firstname;?>">
            </div>
          </div>
          <div class="form-group">
            <div class="col-md-3">
              <label class="control-label">Lastname</label>
            </div>
            <div class="col-md-9">
              <input name="txtLastname" type="text" id="txtLastname" class="form-control" value="<?php echo $row->Lastname;?>">
            </div>
          </div>
          <div class="form-group">
            <div class="col-md-3">
              <label class="control-label">School</label>
            </div>
            <div class="col-md-9">
              <input name="txtSchool" type="text" id="txtSchool" class="form-control" value="<?php echo $row->School;?>">
            </div>
          </div>
          <div class="form-group">
            <div class="col-md-3">
              <label class="control-label">Position</label>
            </div>
            <div class="col-md-9">
              <input name="txtPosition" type="text" id="txtPosition" class="form-control" value="<?php echo $row->Position;?>">
            </div>
          </div>
          <div class="form-group">
            <div class="col-md-3">
              <label class="control-label">Mobilephone</label>
            </div>
            <div class="col-md-9">
              <input name="txtMobilephone" type="text" id="txtMobilephone" class="form-control" value="<?php echo $row->Mobilephone;?>">
            </div>
          </div>
          <div class="form-group">
            <div class="col-md-3">
              <label class="control-label">Address</label>
            </div>
            <div class="col-md-9">
              <textarea rows="4" name="txtAddress" id="txtAddress" class="form-control"><?php echo $row->Address;?></textarea>
            </div>
          </div>
          <div class="form-group">
            <div class="col-md-3">
              <label class="control-label">Email</label>
            </div>
            <div class="col-md-9">
              <input name="txtEmail" type="text" id="txtEmail" name="txtEmail" class="form-control" value="<?php echo $row->Email;?>">
            </div>
          </div>
          <div class="form-group">
            <div class="col-md-3">
              <label class="control-label">Line</label>
            </div>
            <div class="col-md-9">
              <input name="txtLine" type="text" id="txtLine" class="form-control" value="<?php echo $row->Line;?>">
            </div>
          </div>
          <div class="form-group">
            <div class="col-md-3">
              <label class="control-label">Facebook</label>
            </div>
            <div class="col-md-9">
              <input name="txtFacebook" type="text" id="txtFacebook" class="form-control" value="<?php echo $row->Facebook;?>">
            </div>
          </div>
          <div class="form-group">
            <div class="col-md-3">
              <label class="control-label">Status</label>
            </div>
            <div class="col-md-9">
              <label class="control-label"><?php echo $row->Role;?></label>
            </div>
          </div>
          <div class="form-group">
            <div class="col-md-3">
              <label class="control-label">รูปประจำตัว</label>
            </div>
            <div class="col-md-9">
              <div class="fileinput fileinput-new" data-provides="fileinput">
                <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 300px; height: 150px;">
                  <img src="images/<?php echo $row->FileName;?>" alt="">
                </div>
                <div>
                  <span class="btn btn-default btn-file"><span class="fileinput-new">Select image</span><span class="fileinput-exists">Change</span><input type="file" name="fileUpload"></span>
                  <!-- <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a> -->
                </div>
              </div>
              <p>* รองรับไฟล์ภาพนามสกุล jpg,jpeg,png,gif เท่านั้น</p>
              <p>* รองรับไฟล์ภาพขนาดไม่เกิน 350*350 pixel</p>
            </div>  
          </div>
          <div class="form-inline" align="right"> 
            <button type="submit" class="btn btn-default">บันทึก</button>
          </div>
        </div>
      </div>
    </div> 
<?php } ?>
<?php echo form_close(); ?>

<script type="text/javascript">
  $(document).ready(function () {
    var validator = $("#edit-form").bootstrapValidator({
      feedbackIcons: {
        valid: "glyphicon glyphicon-ok",
        invalid: "glyphicon glyphicon-remove", 
        validating: "glyphicon glyphicon-refresh"
      }, 
      fields : {
        txtPassword : {
          validators: {
            notEmpty : {
              message : "กรุณากรอก Password"
            },
            stringLength : {
              min: 8,
              max: 15,
              message: "Password ต้องมีความยาว 8 ถึง 15 ตัวอักษร"
            } 
          }
        }, 
        txtConPassword : {
          validators: {
            notEmpty : {
              message: "Confirm password"
            },
            identical : {
              field: "txtPassword", 
              message : "Password and Confirm Password ต้องเหมือนกัน"
            }
          }
        },
        txtFirstname : {
          validators: {
            notEmpty : {
              message : "กรุณากรอก ชื่อ"
            }
          }
        },
        txtLastname : {
          validators: {
            notEmpty : {  
              message : "กรุณากรอก นามสกุล"
            }
          }
        },
        txtSchool : {
          validators: {
            notEmpty : {  
              message : "กรุณากรอก โรงเรียน"
            }
          }
        },
        txtPosition : {
          validators: {
            notEmpty : {  
              message : "กรุณากรอก ตำแหน่ง"
            }
          }
        },
        txtMobilephone : {
          validators: {
            notEmpty : {  
              message : "กรุณากรอก เบอร์โทรศัพท์เคลื่อนที่"
            },
            digits: {
              message : "สามารถกรอกได้แค่ตัวเลขเท่านั้น"
            }
          }
        },
        txtAddress : {
          validators: {
            notEmpty : {  
              message : "กรุณากรอก ที่อยู่"
            }
          }
        },
        txtEmail :{
          validators: {
            notEmpty : {
              message : "กรุณากรอก Email"
            }, 
            emailAddress: {
              message: "กรุณากรอกรูปแบบ Email ให้ถูกต้อง someone@example.com"
            }
          }
        },
        txtLine : {
          validators: {
            notEmpty : {  
              message : "กรุณากรอก Line"
            }
          }
        },
        txtFacebook : {
          validators: {
            notEmpty : {  
              message : "กรุณากรอก Facebook"
            }
          }
        }, 
      }
    });  
  });
</script>