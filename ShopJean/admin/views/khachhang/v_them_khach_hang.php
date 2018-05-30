<div class="content-box-header">
  <h3><?php echo $tieude ?></h3>
  <div class="clear"></div>
</div>
<!-- End .content-box-header -->
<div class="content-box-content">
  <div class="tab-content default-tab" id="tab1">
    <!--`ma_tin_tuc`, `tieu_de`, `tom_tat`, `chi_tiet`, `hinh`, `tac_gia`, `ngay_dang`, `ngay_gui`, `so_luot_xem`-->
    <form method="post" enctype="multipart/form-data">
        <fieldset>
          
          <p>
            <label>Tên khách hàng</label>
            <input class="text-input small-input kiemtra" data_error="Nhập tên khách hàng" type="text" id="ten_khach_hang" name="ten_khach_hang" />
          </p>
          <p>
            <label>Phái</label>
            <input placeholder="1:Nam/0:Nữ" class="text-input small-input kiemtra" data_error="Nhập phái" type="text" id="phai" name="phai" />
            
          </p>
          <p>
            <label>Ngày sinh</label>
            <input placeholder="Năm/tháng/ngày" class="text-input small-input kiemtra" data_error="Nhập ngày sinh" type="text" id="ngay_sinh" name="ngay_sinh" />
            
          </p>
          
           <p>
            <label>Địa chỉ</label>
            <input class="text-input small-input kiemtra" data_error="Nhập địa chỉ" type="text" id="dia_chi" name="dia_chi" />
          </p>
           <p>
            <label>Điện thoại</label>
            <input class="text-input small-input kiemtra" data_error="Nhập số điện thoại" type="text" id="sdt" name="sdt" />
          </p>
          <p>
            <label>Email</label>
            <input class="text-input small-input kiemtra" data_error="Nhập email" type="text" id="email" name="email" />
          </p>
          <p>
            <label>Ghi chú</label>
            <input class="text-input small-input kiemtra" data_error="Nhập ghi chú" type="text" id="ghi_chu" name="ghi_chu" />
          </p>
          
          <p>
            <input class="button" type="submit" value="Cập nhật" name="btnCapnhat" onclick="return Kiemtradulieu()" />
            <input class="button" type="button" value="Bỏ qua" onclick="window.location='khachhang.php'" />
          </p>
        </fieldset>
        <div class="clear"></div>
        <!-- End .clear -->
        
      </form>
	   
  </div>
  
</div>
