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
            <label>Mã loại người dùng</label>
            <input class="text-input small-input kiemtra" data_error="Nhập mã loại người dùng" type="text" id="ma_loai_nguoi_dung" name="ma_loai_nguoi_dung" />
          </p>
          <p>
            <label>Họ tên</label>
            <input class="text-input small-input kiemtra" data_error="Nhập họ tên" type="text" id="ho_ten" name="ho_ten" />
          </p>
          <p>
            <label>Tên đăng nhập</label>
            <input class="text-input small-input kiemtra" data_error="Nhập tên đăng nhập" type="text" id="ten_dang_nhap" name="ten_dang_nhap" />
          </p>
          <p>
            <label>Mật khẩu</label>
            <input class="text-input small-input kiemtra" data_error="Nhập mật khẩu" type="text" id="mat_khau" name="mat_khau" />
          </p>
          <p>
            <label>Email</label>
            <input class="text-input small-input kiemtra" data_error="Nhập email" type="text" id="eamil" name="email" />
          </p>
          <p>
            <label>Ngày đăng nhập cuối </label>
            <input class="text-input small-input kiemtra" data_error="Nhập ngày" type="text" id="ngay_dang_nhap_cuoi" name="ngay_dang_nhap_cuoi" />
          </p>
           <p>
            <label>Active</label>
            <input class="text-input small-input kiemtra" data_error="Nhập active" type="text" id="active" name="active" />
          </p>
          
          
          <p>
            <input class="button" type="submit" value="Cập nhật" name="btnCapnhat" onclick="return Kiemtradulieu()" />
            <input class="button" type="button" value="Bỏ qua" onclick="window.location='nguoidung.php'" />
          </p>
        </fieldset>
        <div class="clear"></div>
        <!-- End .clear -->
        
      </form>
	   
  </div>
  
</div>
