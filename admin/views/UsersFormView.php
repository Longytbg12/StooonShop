<?php 
	//load file layout vao day
	$this->fileLayout = "Layout.php";
 ?>
<div class="col-md-12">  
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Add edit user</h3>
      </div>
      <!-- /.card-header -->
      <div class="panel-body">
        <form method="post" action="<?php echo $action; ?>">
            <!-- s -->
            <div class="" style="margin-top:5px;">
                <div class="col-md-2">Name</div>
                <div class="col-md-10">
                    <input type="text" name="name" value="<?php echo isset($record->name) ? $record->name : ""; ?>" class="form-control" required>
                </div>
            </div>
            <!-- end s -->
            <!-- s -->
            <div class="" style="margin-top:5px;">
                <div class="col-md-2">Email</div>
                <div class="col-md-10">
                    <input type="email" <?php if(isset($record->email)): ?> disabled <?php else: ?> required <?php endif; ?> value="<?php echo isset($record->email) ? $record->email : ""; ?>" name="email" class="form-control">
                </div>
            </div>
            <!-- end s -->
            <!-- s -->
            <div class="" style="margin-top:5px;">
                <div class="col-md-2">Password</div>
                <div class="col-md-10">
                    <input type="password" name="password" <?php if(isset($record->email)): ?> placeholder="Không đổi password thì không nhập thông tin vào ô textbox này" <?php else: ?> required <?php endif; ?> class="form-control">
                </div>
            </div>
            <!-- end s -->
            <!-- s -->
            <div class="" style="margin-top:5px;">
                <div class="col-md-2"></div>
                <div class="col-md-10 btn1">
                    <input type="submit" value="Process" class="btn btn-primary">
                </div>
            </div>
            <!-- end s -->
        </form>
        </div>
    </div>
</div>
<style type="text/css">
   .btn1{padding-top: 20px; padding-bottom: 15px; text-align: center;}
</style>