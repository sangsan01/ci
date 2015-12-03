<div class="row" style="margin-top:70px;">
    <div class="col-md-12">
        <div>
            <h1 class="page-header">คณะภราดาเซนต์คาเบรียล</h1>
        </div>
    </div>
</div>
<!-- end row -->       

<!-- Intro Content -->
<div class="row">
    <div class="col-md-4">
        <img class="img-responsive" src="<?php echo base_url();?>assets/images/Montfort.Brothers.Of_.St_.Gabriels.png" alt="">
    </div>
    <div class="col-md-8">
        <div class="alert" role="alert" style="background-color:orange;color:white;">
            <h2>ประวัติ คณะภราดาเซนต์คาเบรียล</h2>
            คณะภราดาเซนต์คาเบรียล เป็นคณะนักบวชคาทอลิกคณะหนึ่งซึ่งขึ้นตรงต่อพระสันตะปาปา นักบุญหลุยส์ มารี กรีญอง เดอ มงฟอร์ตเป็นผู้ก่อตั้งคณะ และบาทหลวงกาเบรียล เดแอ เป็นผู้ฟื้นฟูคณะ
            นักบวชในคณะปฏิญาณตนต่อพระเจ้าเพื่อถือ ความยากจน ความบริสุทธิ์ และความนบนอบ ทำงานรับใช้พระเจ้าแต่เพียงผู้เดียว ด้วยการอุทิศตน เสียสละ รับใช้ผู้อื่นดังพี่น้อง โดยมุ่งที่จะให้บริการศึกษาอบรมที่เป็นความรู้ทางโลกและทางธรรมแก่สังคม
            คณะภราดาเซนต์คาเบรียลมีศูนย์กลางอยู่ที่กรุงโรม ประเทศอิตาลี สมาชิกประกอบด้วยภราดาที่ทำงานรับใช้พระเป็นเจ้าผ่านทางการให้การศึกษาแก่เยาวชน และเอาใจใส่เป็นพิเศษต่อคนยากจน ตามจิตตารมณ์ของนักบุญมงฟอร์ต ปัจจุบัน ภราดา John Kallarackal เป็นอัคราธิการ และภราดาสุรสิทธิ์ สุขชัย เป็นอธิการเจ้าคณะแขวงประเทศไทย
        </div>
    </div>
</div>
<!-- end row -->

<!-- Search Content -->
<div class="row">
    <!-- <form action="<?php echo site_url('Brother/search');?>" method = "post"> -->
    <div class="col-md-12">
        <div class="form-inline" align="right">
            <div class="input-group" style="margin-bottom:15px;">
                <input type="text" class="form-control" placeholder="ค้นหาภราดา" name="keyword" id="txtSearch" style="width:   200px;" align="right">
                    <span class="input-group-btn">
                        <button type="button" class="btn glyphicon glyphicon-search" id="btnSearch"></button>
                    </span>
            </div>
        </div>
    </div>
</div>

<!-- Brother Content -->
<div class="row">
    <div id="brother">
    <?php foreach ($query as $row){ ?>
        <div class="col-xs-12 col-sm-6 col-md-4">
            <!-- Brother Profile -->
            <div class="thumbnail">
                <a href="<?php echo base_url();?>index.php/Profile/brotherprofile/<?php echo $row->UserID; ?>"><img src="<?php echo base_url(); ?>/assets/images/<?php echo $row->FileName ?>"></a>
                <div class="caption">
                    <div class="text-center">
                    <h3><?php echo $row->Firstname." ".$row->Lastname; ?></h3>
                    <h4><?php echo $row->Position; ?></h4>
                    <p>โรงเรียน : <?php echo $row->School; ?></p>
                    <p>เบอร์โทรศัพท์ : <?php echo $row->Mobilephone; ?></p>
                    <p>Line : <?php echo $row->Line; ?></p>
                    <p>Facebook : <?php echo $row->Facebook; ?></p>
                    <p>Email : <?php echo $row->Email ?></p>
                </div>

                        <!-- Brother Email Button -->
                    <ul class="list-inline">
                        <div class="text-center">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ModalEmail<?php echo $row->UserID; ?>" data-whatever="@mdo">
                            <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> Send Email
                        </button>
                    </div>
                        <div class="modal fade" id="ModalEmail<?php echo $row->UserID; ?>" tabindex="-1" role="dialog" aria-labelledby="ModalEmailLabel<?php echo $row->UserID; ?>">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title" id="ModalEmailLabel<?php echo $row->UserID; ?>">Email</h4>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-md-8 col-md-offset-2">
                                            <div class="form-group">
                                                <div class="alert alert-success" role="alert">
                                                    <h3>To</h3>
                                                </div>
                                                <label for="message-text" class="control-label" id="lbReceiver<?php echo $row->UserID; ?>"><?php echo $row->Email; ?></label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-8 col-md-offset-2">
                                            <div class="form-group">
                                                <label for="message-text" class="control-label">ชื่อเรื่อง:</label>
                                                <input class="form-control" type="input" id="txtSubject<?php echo $row->UserID; ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-8 col-md-offset-2">
                                            <div class="form-group">
                                                <label for="message-text" class="control-label">ข้อความ:</label>
                                                <textarea class="form-control" rows="5" id="txtMessage<?php echo $row->UserID; ?>"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-8 col-md-offset-2">
                                            <div class="form-group">
                                                <div class="alert alert-success" role="alert">
                                                    <h3>From</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-8 col-md-offset-2">
                                            <div class="form-group">
                                                <label for="message-text" class="control-label">Email:</label>
                                                <input class="form-control" type="input" id="txtSender<?php echo $row->UserID; ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-8 col-md-offset-2">
                                            <div class="form-group">
                                                <label for="message-text" class="control-label">ชื่อ:</label>
                                                <input class="form-control" type="input" id="txtName<?php echo $row->UserID; ?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary" onclick="sendEmail(<?php echo $row->UserID; ?>)">Send</button>
                                </div>
                                </div>
                            </div>
                        </div>  
                    </ul>

                </div>
            </div>

        </div>
    <?php } ?>     
    </div>
</div>

<!-- Footer -->        
<div class="row">
    <footer>
            <div class="container-fluid">
                <div class="cotainer">
                    <div class="col-md-12">
                        <p>Copyright &copy; Montfort College Primary Section</p>
                    </div>
                </div>
            </div>
    </footer>
</div>


<script type="text/javascript">
  
$("#btnSearch").click(function (){
    var search = $("#txtSearch").val();

    $.ajax({
    type: "POST",
    url: "<?php echo base_url();?>"+"index.php/Search",
    data: {keyword:search},
    success: function(data){
        $("#brother").html(data);
    },
    error: function(data){
        alert("Ajax fail");
    }

    });
});

$("#txtSearch").keyup(function(event){
    if(event.keyCode == 13){
        $("#btnSearch").click();
    }
});

function sendEmail(str){
  
      var id = str;
      var receiver = $('#lbReceiver'+str).text();
      var subject = $('#txtSubject'+str).val();
      var message = $('#txtMessage'+str).val();
      var sendername = $('#txtName'+str).val();
      var senderemail = $('#txtSender'+str).val();
      
  
      // var datas="receiver="+receiver+"&subject="+subject+"&message="+message+"&sender="+sender;
      
    $.ajax({
        type: "POST",
        url: "<?php echo base_url();?>"+"index.php/Email",
        data: {receiver:receiver,subject:subject,message:message,sendername:sendername,senderemail:senderemail},
        success: function(data){
            alert("Send email successfully");
            $('#ModalEmail'+id).modal('hide');
        },
        error: function(data){
            alert("Ajax fail");
        }
    });

}

</script>