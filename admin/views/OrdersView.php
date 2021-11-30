<?php 
    //load file layout vao day
    $this->fileLayout = "Layout.php";
 ?>
<div class="col-md-12">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">List orders</h3>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <table id="example1" class="table table-bordered table-striped table-hover">
            <tr>
                <th>Họ và tên</th>
                <th>Địa chỉ</th>
                <th>Điện thoại</th>
                <th>Ngày mua</th>
                <th>Giá</th>
                <th style="width:150px;">Trạng thái</th>
                <th style="width:150px;"></th>
            </tr>
            <?php foreach ($data as $rows): ?>
            <?php 
                $customer = $this->modelGetCustomer($rows->customer_id);
             ?>
            <tr>
                <td><?php echo isset($customer->name)?$customer->name:""; ?></td>
                <td><?php echo isset($customer->address)?$customer->phone:""; ?></td>
                <td><?php echo isset($customer->phone)?$customer->address:""; ?></td>
                <td><?php echo date("d/m/Y",strtotime($rows->date)); ?></td>
                <td><?php echo number_format($rows->price); ?> VNĐ</td>
                <td>
                    <?php if($rows->status == 1): ?>
                        <div class="">Đã giao hàng</div>
                    <?php else: ?>
                        <div class="">Chưa giao hàng</div>
                    <?php endif; ?>
                </td>
                <td style="text-align:center;">
                    <?php if($rows->status == 0): ?>
                        <a href="index.php?controller=orders&action=delivery&id=<?php echo $rows->id; ?>" class="label label-info">Giao hàng</a>
                    &nbsp;&nbsp;
                    <br>
                    <?php endif; ?>
                    <a href="index.php?controller=orders&action=detail&id=<?php echo $rows->id; ?>" class="label label-success">Chi tiết</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <style type="text/css">
                .pagination{float: right; margin-top: 20px;}
            </style>
            <ul class="pagination">
                <li class="page-item"><a href="#" class="page-link">Trang</a></li>
                <?php for($i = 1; $i <= $numPage; $i++): ?>
                <li class="page-item"><a href="index.php?controller=orders&p=<?php echo $i; ?>" class="page-link"><?php echo $i; ?></a></li>
                <?php endfor; ?>
            </ul>
      </div>
      <!-- /.card-body -->
    </div>
</div>