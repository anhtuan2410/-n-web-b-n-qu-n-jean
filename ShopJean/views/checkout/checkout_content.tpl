<div class="checkout-area margin-bottom-80">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h3 class="title-6 margin-bottom-50">Checkout</h3>
      </div>
    </div>
    <div class="coupon-area">
      <div class="row">
        <div class="col-md-12">
          <div class="coupon-accordion"> 
            <!-- ACCORDION START -->
            <h3>Đăng nhập để đặt hàng</h3>
            <!-- ACCORDION END --> 
            <!-- Genaral Login start -->
            <div class="coupon-info margin-bottom-50">
              <form action="mua_hang_co_tk.php" method="post">
                <div class="row">
                  <div class="col-md-6">
                    <p class="form-row-first">
                      <label>Tên đăng nhập <span class="required">*</span></label>
                      <input type="text" name="ten_dang_nhap" />
                    </p>
                  </div>
                  <div class="col-md-6">
                    <p class="form-row-last">
                      <label>Mật khẩu <span class="required">*</span></label>
                      <input type="password" name="mat_khau" />
                    </p>
                  </div>
                </div>
                <p>{if isset($error)}{$error}{/if}</p>
                <p class="form-row">
                  <input type="submit" value="Đăng nhập" name="DangNhap" />
                </p>
              </form>
            </div>
            <br />
            <!-- Genaral Login end --> 
            <!-- ACCORDION START -->
             <h3>Đặt hàng luôn</h3>
            <div id="checkout_coupon" class="coupon-checkout-content">

            </div>
            <!-- ACCORDION END --> 
          </div>
        </div>
      </div>
    </div>
    <!-- Checkout-Billing-details and order start -->
    <div class="checkout-bill-order">
      <form action="mua_hang_thanh_cong.php" method="post">
          <div class="new-customers">
			<!-- $ten_khach_hang, $dia_chi, $dien_thoai, $email -->
            <div class="row">
              <div class="col-sm-12">
                <input type="text" class="custom-form" name="txtTenKhachHang" placeholder="Họ và tên" />
              </div>
            </div>
            <div class="row">
              <div class="col-sm-12">
                <input class="custom-form" type="text" name="txtEmail" placeholder="Email" name="email" />
              </div>
            </div>
            <div class="row">
              <div class="col-sm-12">
                <input class="custom-form" type="text" name="txtDiaChi" placeholder="Địa chỉ giao hàng" />
              </div>
            </div>
            <div class="row">
              <div class="col-sm-12">
                <input class="custom-form" type="text" name="txtDienThoai" placeholder="Số điện thoại" />
              </div>
            </div>
            <div class="row">	
              <div class="col-sm-6">
                <center><input type="submit" class="custom-form custom-submit no-margin" value="Đặt hàng" name="submit"/></center>
              </div>
            </div>
          </div>
        </form>
    </div>
    <!-- Checkout-Billing-details and order end --> 
  </div>
</div>
