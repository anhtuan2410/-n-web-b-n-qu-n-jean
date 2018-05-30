<div class="content-box-header">
  <h3><?php $tieude ?></h3>
  <div class="clear"></div>
</div>
<!-- End .content-box-header -->
<div class="content-box-content">
  <div class="tab-content default-tab" id="tab1">
    <form method="post" enctype="multipart/form-data" >
        <fieldset>
          
          <p>
            <label>Tên khách hàng</label>
            <input value="<?php echo $khachhangss->ten_khach_hang ?>" class="text-input small-input kiemtra" data_error="Nhập tên khách hàng" type="text" id="ten_khach_hang" name="ten_khach_hang" />
          </p>
          <p>
            <label>Phái</label>
            <input value="<?php echo $khachhangss->phai ?>" placeholder="1:Nam/0:Nữ" class="text-input small-input kiemtra" data_error="Nhập phái" type="text" id="phai" name="phai" />
            
          </p>
          <p>
            <label>Ngày sinh</label>
            <input value="<?php echo $khachhangss->ngay_sinh ?>" placeholder="Năm/tháng/ngày" class="text-input small-input kiemtra" data_error="Nhập ngày sinh" type="text" id="ngay_sinh" name="ngay_sinh" />
            
          </p>
          
           <p>
            <label>Địa chỉ</label>
            <input value="<?php echo $khachhangss->dia_chi ?>" class="text-input small-input kiemtra" data_error="Nhập địa chỉ" type="text" id="dia_chi" name="dia_chi" />
          </p>
           <p>
            <label>Điện thoại</label>
            <input value="<?php echo $khachhangss->dien_thoai ?>" class="text-input small-input kiemtra" data_error="Nhập số điện thoại" type="text" id="sdt" name="sdt" />
          </p>
          <p>
            <label>Email</label>
            <input value="<?php echo $khachhangss->email ?>" class="text-input small-input kiemtra" data_error="Nhập email" type="text" id="email" name="email" />
          </p>
          <p>
            <label>Ghi chú</label>
            <input value="<?php echo $khachhangss->ghi_chu ?>" class="text-input small-input kiemtra" data_error="Nhập ghi chú" type="text" id="ghi_chu" name="ghi_chu" />
          </p>
          <p>
            <input class="button" type="submit" value="Cập nhật" name="btnCapnhat" />
            <input class="button" type="button" value="Bỏ qua" onclick="window.location='khachhang.php'" />
          </p>
        </fieldset>
        <div class="clear"></div>
        <!-- End .clear -->
        
      </form>
  </div>
  
</div>
