<div class="content-box-header">
  <h3><?php echo $tieude ?> <label id="kqXoa"></label> </h3>
  <div class="clear"></div>
</div>
<!-- End .content-box-header -->
<div class="content-box-content">
  <div class="tab-content default-tab" id="tab1">
    <table>
    <caption>
    <form method="post">
    <p>
    <label>Nhập tên khach hàng:</label> <input type="text" name="tim" class="text-input small-input" />;
    <input class="button" type="submit" value="Tìm " name="btnTim" />
    </p>
    </form>
    </caption>
      <thead>
        <tr>
          <th><input class="check-all" type="checkbox" /></th>
          <th>Mã khách hàng</th>
          <th>Tên khách hàng</th>
          <th>Phái</th>
          <th>Ngày sinh</th>
          <th>Địa chỉ</th>
           <th>SĐT</th>
          <th>Email</th>
          <th>Ghi chú</th>
        </tr>
      </thead>
      <tfoot>
          <tr>
            <td colspan="6">
            <div class="pagination"> <?php echo $lst ?> </div>
            <div class="clear"></div></td>
          </tr>
        </tfoot>
      <tbody>
        <?php
        foreach ($khachhangs as $kh)
		{
		?>	
        <tr>
          <td><input type="checkbox" /></td>
          <td><?php echo $kh->ma_khach_hang; ?></td>
          <td><a href="suakhachhang.php?ma_kh=<?php echo $kh->ma_khach_hang; ?>" title="Edit"><?php echo $kh->ten_khach_hang ?></a></td>
          <td><?php echo $kh->phai ?></td>
          <td><?php echo $kh->ngay_sinh ?></td>
          <td><?php echo $kh->dia_chi ?></td>
          <td><?php echo $kh->dien_thoai ?></td>
          <td><?php echo $kh->email ?></td>
          <td><?php echo $kh->ghi_chu ?></td>
          <td><!-- Icons --> 
            <a href="suakhachhang.php?ma_kh=<?php echo $kh->ma_khach_hang ?>" title="Edit" >
            <img src="public/layout/resources/images/icons/pencil.png" alt="Edit" />
            </a> 
            <a href="xoakhachhang.php?ma_kh=<?php echo $kh->ma_khach_hang ?>" title="Edit" >
            <img src="public/layout/resources/images/icons/cross.png" alt="Delete" />
            </a>
            </td>
        </tr>
        <?php 
		}
		?>
      </tbody>
    </table>
   
  </div>
  
</div>
