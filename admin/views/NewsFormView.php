<?php 
	//load file Layout.php vao day
	$this->fileLayout = "Layout.php";
 ?>

<div class="col-md-12">  
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Add / edit News</h3>
      </div>
      <!-- /.card-header -->
        <div class="panel-body">
            <!-- muon upload duoc anh, file thi phai co thuoc tinh enctype="multipart/form-data" -->
            <form method="post" enctype="multipart/form-data" action="<?php echo $action; ?>">
                <!-- rows -->
                <div class="row" style="margin-top:5px;">
                    <div class="col-md-2">Name</div>
                    <div class="col-md-10">
                        <input type="text" name="name" value="<?php echo isset($record->name) ? $record->name : ""; ?>" class="form-control" required>
                    </div>
                </div>
                <!-- end rows -->
                <!-- rows -->
                <div class="row" style="margin-top:5px;">
                    <div class="col-md-2"></div>
                    <div class="col-md-10">
                        <input type="checkbox" <?php if(isset($record->hot) && $record->hot == 1): ?> checked <?php endif; ?> name="hot" id="hot"> <label for="hot">Hot</label>
                    </div>
                </div>
                <!-- end rows -->
                <!-- rows -->
                <div class="row" style="margin-top:5px;">
                    <div class="col-md-2">Photo</div>
                    <div class="col-md-10">
                        <input type="file" name="photo">
                    </div>
                </div>
                <!-- end rows -->
                <!-- rows -->
                <div class="row" style="margin-top:5px;">
                    <div class="col-md-2">Description</div>
                    <div class="col-md-10">
                        <textarea name="description"><?php echo isset($record->description)?$record->description:""; ?></textarea>
                        <script type="text/javascript">
                            CKEDITOR.replace("description");
                        </script>
                    </div>
                </div>
                <!-- end rows -->
                <!-- rows -->
                <div class="row" style="margin-top:5px;">
                    <div class="col-md-2">Content</div>
                    <div class="col-md-10">
                        <textarea name="content"><?php echo isset($record->content)?$record->content:""; ?></textarea>
                        <script type="text/javascript">
                            CKEDITOR.replace("content");
                        </script>
                    </div>
                </div>
                <!-- end rows -->
                <!-- rows -->
                <div class="row" style="margin-top:5px;">
                    <div class="col-md-2"></div>
                    <div class="col-md-10 btn1">
                        <input type="submit" value="Process" class="btn btn-primary">
                    </div>
                </div>
                <!-- end rows -->
            </form>
        </div>
    </div>
</div>
<style type="text/css">
   .btn1{padding-top: 20px; padding-bottom: 15px; text-align: center;}
   form{padding-left: 10px;}
</style>