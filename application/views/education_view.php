<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal" style="margin-top: 100px; margin-bottom:20px;">
      <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>เพิ่มข้อมูล
    </button>

    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">เพิ่มข้อมูล</h4>
          </div>  
          <!-- Added form --> 
          <div class="modal-body">  
            <form>
              <div class="form-group">
                <label for="start">เริ่มต้น พ.ศ.</label>
                <input type="text" class="form-control" id="start">
              </div>
              <div class="form-group">
                <label for="end">สิ้นสุด พ.ศ.</label>
                <input type="text" class="form-control" id="end">
              </div>
              <div class="form-group">
                <label for="degree">ระดับการศึกษา</label>
                <input type="text" class="form-control" id="degree">
              </div>
              <div class="form-group">
                <label for="detail">รายละเอียด</label>
                <input type="text" class="form-control" id="detail">
              </div>
            </form>
          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">ปิด</button>
            <button type="button" id="save" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk">บันทึก</span></button>
          </div>
        </div>
      </div>
    </div>

<div id="result">
  <?php
    $i=1;
  ?>
<div class="table-responsive">
<table class="table table-bordered table-hover">
  <thead>
    <tr>
      <th>ลำดับที่</th>
      <th>เริ่ม พ.ศ.</th>
      <th>สิ้นสุด พ.ศ.</th>
      <th>ระดับการศึกษา</th>
      <th>รายละเอียด</th>
      <th>action</th>
    </tr>
  </thead>
  <tbody>

<?php foreach ($query as $row){ ?>
    
    <tr>
      <td><?php echo $i; ?></td>
      <?php $i++; ?>
      <td><?php echo $row->Start; ?></td>
      <td><?php echo $row->End; ?></td>
      <td><?php echo $row->Degree; ?></td>
      <td><?php echo $row->Detail; ?></td>
      <td>
      <a class="btn btn-warning btn-sm" data-toggle="modal" data-target="#myModal<?php echo $row->EducationID; ?>"><span class="glyphicon glyphicon-pencil" aria-hidden="true">แก้ไข</span></a>
      <a class="btn btn-danger btn-sm " onclick="deletedata('<?php echo $row->EducationID; ?>')" ><span class="glyphicon glyphicon-trash" aria-hidden="true">ลบ</span></a>

<!-- Modal -->
<form>
<div class="modal fade" id="myModal<?php echo $row->EducationID; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel<?php echo $row->EducationID; ?>" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel<?php echo $row->EducationID; ?>">Edit Data</h4>
      </div>
      <div class="modal-body">

<!-- Edit form -->
<form>
  <div class="form-group">
    <label for="start">เริ่ม พ.ศ.</label>
    <input type="text" class="form-control" id="start<?php echo $row->EducationID; ?>" value="<?php echo $row->Start; ?>">
  </div>
  <div class="form-group">
    <label for="end">สิ้นสุด พ.ศ.</label>
    <input type="text" class="form-control" id="end<?php echo $row->EducationID; ?>" value="<?php echo $row->End; ?>">
  </div>
  <div class="form-group">
    <label for="education">ระดับการศึกษา</label>
    <input type="text" class="form-control" id="degree<?php echo $row->EducationID; ?>" value="<?php echo $row->Degree; ?>">
  </div>
  <div class="form-group">
    <label for="detail">รายละเอียด</label>
    <input type="text" class="form-control" id="detail<?php echo $row->EducationID; ?>" value="<?php echo $row->Detail; ?>">
  </div>
</form>
      
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" onclick="updatedata('<?php echo $row->EducationID; ?>')" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk">บันทึก</span></button>
      </div>
    </div>
  </div>
</div>
</form>
      </td>
    </tr>
    <?php } ?>
  </tbody>
      </table>
</div>
</div>

<script type="text/javascript">
    
  $('#save').click(function(){  
    var start = $('#start').val();
    var end = $('#end').val();
    var degree = $('#degree').val();
    var detail = $('#detail').val();

    $.ajax({
      type: "POST",
      url: "<?php echo base_url();?>"+"index.php/Education/insert",
      data: {start:start,end:end,degree:degree,detail:detail},
      success: function(data) {
        $('#result').html(data);
        $('#myModal').modal('hide');

        // viewdata();
      },
      error: function(data){
        alert("Ajax fail");
      }
    });
  });
      
  function updatedata(str){
    var id = str;
    var start = $('#start'+str).val();
    var end = $('#end'+str).val();
    var degree = $('#degree'+str).val();
    var detail = $('#detail'+str).val();
      
    $.ajax({
      type: "POST",
      url: "<?php echo base_url();?>"+"index.php/Education/update",
      data: {id:id,start:start,end:end,degree:degree,detail:detail},
      success:function(data) {
        $('#result').html(data);
        $('#myModal').modal('hide');
        $("html,body").css("overflow","auto");
      },
      error: function (data){

      }
    });
  };
    
  function deletedata(str){
    var id = str;
      
    $.ajax({
      type: "POST",
      url: "<?php echo base_url();?>"+"index.php/Education/delete",
      data: {id:id},
      success:function(data) {
        $('#result').html(data);
        $("html,body").css("overflow","auto");
      },
      error: function (data){

      }
    });
  };

</script>

