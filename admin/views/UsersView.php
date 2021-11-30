<?php 
	//load file layout vaof day 
	$this->fileLayout = "Layout.php";
 ?>
<div class="col-md-12">
    <div style="margin-bottom:5px;">
        <a href="index.php?controller=users&action=create" class="btn btn-primary">Add user</a>
    </div>
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">List User</h3>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <table id="example1" class="table table-bordered table-striped table-hover">
          <tr>
                <th>Fullname</th>
                <th>Email</th>
                <th style="width:100px;"></th>
            </tr>
            <?php foreach($data as $rows): ?>
            <tr>
                <td><?php echo $rows->name; ?></td>
                <td><?php echo $rows->email; ?></td>
                <td style="text-align:center;">
                    <a href="index.php?controller=users&action=update&id=<?php echo $rows->id; ?>">Edit</a>&nbsp;
                    <a href="index.php?controller=users&action=delete&id=<?php echo $rows->id; ?>" onclick="return window.confirm('Bạn có chắc muốn xóa?');">Delete</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <style type="text/css">
            .pagination{float: right; margin-top: 20px; }
        </style>
        <ul class="pagination">
            <li class="page-item"><a href="#" class="page-link">Trang</a></li>
            <?php for($i = 1; $i <= $numPage; $i++): ?>
                <li class="page-item"><a href="index.php?controller=users&p=<?php echo $i; ?>" class="page-link"><?php echo $i; ?></a></li>
            <?php endfor; ?>
        </ul>
      </div>
      <!-- /.card-body -->
    </div>
</div>
