<?php 
  //load file Layout.php vao day
  $this->fileLayout = "LayoutTrangTrong.php";
 ?>
<div class="col-xl-9">
  <h3><?php echo $record->name; ?></h3>
  <img src="assets/upload/news/<?php echo $record->photo; ?>" style="width:100%;">
  <p><?php echo $record->description; ?></p>
  <p><?php echo $record->content; ?></p>
</div>