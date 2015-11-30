<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal" style="margin-top: 100px; margin-bottom:20px;">
  <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>เพิ่มข้อมูล
</button>
<br/>
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">เพิ่มข้อมูล</h4>
      </div>
      <div class="modal-body">

<!-- Added form -->       
<form>
  <div class="form-group">
    <label for="year">ปี พ.ศ.</label>
    <input type="text" class="form-control" id="year">
  </div>
  <div class="form-group">
    <label for="description">รายละเอียด</label>
    <input type="text" class="form-control" id="description">
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
  <?php $i=1;?>

<div class="table-responsive">
<table class="table table-bordered table-hover">
  <thead>
    <tr>
      <th>ลำดับที่</th>
      <th>ปี พ.ศ.</th>
      <th>รายละเอียด</th>
      <th>action</th>
    </tr>
  </thead>
  <tbody>

<?php
foreach ($query as $row){ ?>
    <tr>
      <td><?php echo $i; ?></td>
      <?php $i++; ?>
      <td><?php echo $row->Year; ?></td>
      <td><?php echo $row->Description; ?></td>
      
      <td>
      <a class="btn btn-warning btn-sm" data-toggle="modal" data-target="#myModal<?php echo $row->Work_ID; ?>"><span class="glyphicon glyphicon-pencil" aria-hidden="true">แก้ไข</span></a>
      <a class="btn btn-danger btn-sm " onclick="deletedata('<?php echo $row->Work_ID; ?>')" ><span class="glyphicon glyphicon-trash" aria-hidden="true">ลบ</span></a>

<!-- Modal -->
<form>
<div class="modal fade" id="myModal<?php echo $row->Work_ID; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel<?php echo $row->Work_ID; ?>" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel<?php echo $row->Work_ID; ?>">Edit Data</h4>
      </div>
      <div class="modal-body">

<!-- Edit form -->
<form>
  <div class="form-group">
    <label for="year">ปี พ.ศ.</label>
    <input type="text" class="form-control" id="year<?php echo $row->Work_ID; ?>" value="<?php echo $row->Year; ?>">
  </div>
  <div class="form-group">
    <label for="description">รายละเอียด</label>
    <input type="text" class="form-control" id="description<?php echo $row->Work_ID; ?>" value="<?php echo $row->Description; ?>">
  </div>
</form>
      
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" onclick="updatedata('<?php echo $row->Work_ID; ?>')" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk">บันทึก</span></button>
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
    var year = $('#year').val();
    var description = $('#description').val();

    $.ajax({
      type: "POST",
      url: "<?php echo base_url();?>"+"index.php/Work/insert",
      data: {year:year,description:description},
      success: function(data) {
        $('#result').html(data);
        $('#myModal').modal('hide');
      },
      error: function(data){
        alert("Ajax fail");
      }
    });
  });
      
  function updatedata(str){
    var id = str;
    var year = $('#year'+str).val();
    var description = $('#description'+str).val();
      
    $.ajax({
      type: "POST",
      url: "<?php echo base_url();?>"+"index.php/Work/update",
      data: {id:id,year:year,description:description},
      success:function(data) {
        $('#result').html(data);
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
      url: "<?php echo base_url();?>"+"index.php/Work/delete",
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