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
            <label>Mã  bài viết</label>
            <input class="text-input small-input kiemtra" data_error="Nhập mã  bài viết" type="text" id="ma_bai_viet" name="ma_bai_viet" />
          </p>
           <p>
            <label>Mã loại bài viết</label>
            <input class="text-input small-input kiemtra" data_error="Nhập mã loại bài viết" type="text" id="loai_bai_viet" name="loai_bai_viet" />
          </p>
          <p>
            <label>Mã người dùng</label>
            <input class="text-input small-input kiemtra" data_error="Nhập mã người dùng" type="text" id="ma_nguoi_dung" name="ma_nguoi_dung" />
          </p>
          <p>
            <label>Tiêu đề bài viết</label>
            <input class="text-input small-input kiemtra" data_error="Nhập tiêu đề bài viết" type="text" id="tieu_de" name="tieu_de" />
          </p>
          <p>
            <label>Nội dung tóm tắt</label>
            <textarea name="tom_tat" cols="50" rows="3" class="text-input large-input ckeditor " id="medium-input"></textarea>
          <p>
            <label>Nội dung chi tiết</label>
            <textarea name="chi_tiet" cols="50" rows="5" class="text-input large-input ckeditor" id="large-input"></textarea>
          </p>
          <p>
            <label>Ngày gửi bài</label>
            <input placeholder="năm/tháng/ngày" class="text-input small-input kiemtra" data_error="Nhập ngày gửi bài" type="text" id="ngay_gui_bai" name="ngay_gui_bai" />
          </p>
           <p>
            <label>Ngày xuất bản</label>
            <input placeholder="năm/tháng/ngày" class="text-input small-input kiemtra" data_error="Nhập ngày xuất bản" type="text" id="ngay_xuat_ban" name="ngay_xuat_ban" />
          </p>
          <p>
            <label>Ngày hết hạn</label>
            <input placeholder="năm/tháng/ngày" class="text-input small-input kiemtra" data_error="Nhập ngày hết hạn" type="text" id="ngay_het_han" name="ngay_het_han" />
          </p>
         
          
          <p>
            <label>Số lần xem</label>
            <input class="text-input small-input" type="text" id="so_luot_xem" name="so_luot_xem" />
          </p>
          <p>
            <label>Xuất bản</label>
            <input placeholder="1:Xuất bản" class="text-input small-input" type="text" id="xuat_ban" name="xuat_ban" />
          </p>
          
          <p>
            <input class="button" type="submit" value="Cập nhật" name="btnCapnhat" onclick="return Kiemtradulieu()" />
            <input class="button" type="button" value="Bỏ qua" onclick="window.location='baiviet.php'" />
          </p>
        </fieldset>
        <div class="clear"></div>
        <!-- End .clear -->
        
      </form>
	   
  </div>
  
</div>
