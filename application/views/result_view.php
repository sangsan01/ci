<?php foreach ($query as $row){ ?>
        <div class="col-xs-12 col-sm-6 col-md-4">
            <!-- Brother Profile -->
            <div class="thumbnail">
                <a href="<?php echo base_url();?>index.php/Profile/brotherprofile/<?php echo $row->UserID; ?>"><img src="<?php echo base_url(); ?>/assets/images/<?php echo $row->FileName?>"></a>
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