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