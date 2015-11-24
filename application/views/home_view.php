<div class="container">
        <div class="row" style="margin-top:70px;">
            <div class="col-lg-12">
                <div>
                <h1 class="page-header">คณะภราดาเซนต์คาเบรียล
                    <!-- <small>Subheading</small> -->
                </h1>
                </div>
            </div>
        </div>
        <!-- /.row -->

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
                    คณะภราดาเซนต์คาเบรียลมีศูนย์กลางอยู่ที่กรุงโรม ประเทศอิตาลี สมาชิกประกอบด้วยภราดาที่ทำงานรับใช้พระเป็นเจ้าผ่านทางการให้การศึกษาแก่เยาวชน และเอาใจใส่เป็นพิเศษต่อคนยากจน ตามจิตตารมณ์ของนักบุญมงฟอร์ต ปัจจุบัน ภราดา John Kallarackal เป็นอัคราธิการ และภราดาสุรสิทธิ์ สุขชัย เป็นอธิการเจ้าคณะแขวงประเทศไทย</p>
                </div>
            </div>
        </div>
        <!-- /.row -->

        <!-- Team Members -->

       
        
        <div class="row">

            <div class="col-lg-12">
                <div class="form-inline" align="right">
                    <div class="form-group" style="margin-bottom:15px;">
                        <input type="text" class="form-control" placeholder="ค้นหาภราดา" id="txtSearch" style="width:   200px;" align="right">
                        <button type="button" class="btn btn-primary" id="btnSearch"><span class="glyphicon glyphicon-search" aria-hidden="true"></span>Search</button>
                    </div>
                </div>
            </div>
            
            <div id="brother">
            <?php foreach ($query as $row){ ?>
            <div class="col-xs-12 col-sm-6 col-md-4 text-center">
                <div class="thumbnail">
                    <a href="profile.php?UserID=<?php echo $row->UserID;?>"><img src="<?php echo base_url(); ?>/assets/images/<?php echo $row->FileName?>"></a>
                    <div class="caption">
                        <h3><?php echo $row->Firstname." ".$row->Lastname; ?><br>
                            <h4><?php echo $row->Position; ?><h4></h4>
                        </h3>
                        <p>โรงเรียน : <?php echo $row->School; ?></p>
                        <p>เบอร์โทรศัพท์ : <?php echo $row->Mobilephone; ?></p>
                        <p>Line : <?php echo $row->Line; ?></p>
                        <p>Facebook : <?php echo $row->Facebook; ?></p>
                        <p>Email : <?php echo $row->Email ?></p>


                        <ul class="list-inline">
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ModalEmail<?php echo $row->UserID; ?>" data-whatever="@mdo">
                                <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> Send Email
                            </button>
                            <div class="modal fade" id="ModalEmail<?php echo $row->UserID; ?>" tabindex="-1" role="dialog" aria-labelledby="ModalEmailLabel<?php echo $row->UserID; ?>">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        <h4 class="modal-title" id="ModalEmailLabel<?php echo $row->UserID; ?>">Email</h4>
                                    </div>
                                    <div class="modal-body">
                                        <form>

                                        <div class="form-group">
                                            <label for="recipient-name" class="control-label">ถึง</label>
                                            <label for="message-text" class="control-label" id="lbReceiver<?php echo $row->UserID; ?>"><?php echo $row->Email; ?></label>
                                        </div>
                                        <div class="form-group">
                                            <label for="message-text" class="control-label">ชื่อเรื่อง</label>
                                            <input class="form-control" type="input" id="txtSubject<?php echo $row->UserID; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="message-text" class="control-label">ข้อความ</label>
                                            <textarea class="form-control" rows="5" id="txtMessage<?php echo $row->UserID; ?>"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="message-text" class="control-label">จาก</label>
                                            <input class="form-control" type="input" id="txtSender<?php echo $row->UserID; ?>">
                                        </div>

                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">ปิด</button>
                                        <button type="button" class="btn btn-primary" onclick="sendEmail(<?php echo $row->UserID; ?>)">ส่งอีเมล</button>
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
        <!-- /.row -->

        <!-- Our Customers -->
        <!-- <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header">Our Customers</h2>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6">
                <img class="img-responsive customer-img" src="http://placehold.it/500x300" alt="">
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6">
                <img class="img-responsive customer-img" src="http://placehold.it/500x300" alt="">
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6">
                <img class="img-responsive customer-img" src="http://placehold.it/500x300" alt="">
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6">
                <img class="img-responsive customer-img" src="http://placehold.it/500x300" alt="">
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6">
                <img class="img-responsive customer-img" src="http://placehold.it/500x300" alt="">
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6">
                <img class="img-responsive customer-img" src="http://placehold.it/500x300" alt="">
            </div>
        </div> -->
        <!-- /.row -->


    </div>
    <!-- div container  -->
    <footer>
            <div class="container-fluid">
                <div class="cotainer">
                    <div class="col-lg-12">
                        <p>Copyright &copy; Montfort College Primary Section</p>
                    </div>
                </div>
            </div>
    </footer>
    <!-- Footer -->