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
	  </tr>
	  <?php } ?>
	</tbody>
      </table>
</div>

