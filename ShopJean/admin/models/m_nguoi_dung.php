<?php
require_once("database.php");
class M_user extends database
{
	function Doc_user()
	{
		$sql="select * from nguoi_dung";
		$this->setQuery($sql);
		return $this->loadAllRows();	
	}
	function Doc_user_theo_ma_nd($ma_nguoi_dung){
		$sql="select * from nguoi_dung where ma_nguoi_dung=?";
		$this->setQuery($sql);
		return $this->loadRow(array($ma_nguoi_dung));
		
	}
	function Doc_user_theo_tenDn_pass($ten,$mk)
	{
		$sql="select * from nguoi_dung where ten_dang_nhap=? and mat_khau=?";
		$this->setQuery($sql);
		return $this->loadRow(array($ten,md5($mk)));	
	}
	function Them_nguoi_dung($ma_nguoi_dung, $ma_loai_nguoi_dung, $ho_ten, $ten_dang_nhap, $mat_khau, $email, $ngay_dang_ky, 		      $ngay_dang_nhap_cuoi, $active)
	{
		$sql="insert into nguoi_dung value(?,?,?,?,?,?,?,?,?)";
		$this->setQuery($sql);
		return $this->execute(array("NULL",$ma_loai_nguoi_dung, $ho_ten, $ten_dang_nhap, $mat_khau, $email, $ngay_dang_ky, 		        $ngay_dang_nhap_cuoi, $active));
	}
	function Sua_nguoi_dung_theo_ma_nd( $ma_loai_nguoi_dung, $ho_ten, $ten_dang_nhap, $mat_khau, $email, $ngay_dang_ky, 		        $ngay_dang_nhap_cuoi, $active,$ma_nguoi_dung){
		$sql="update nguoi_dung set ma_loai_nguoi_dung=?, ho_ten=?, ten_dang_nhap=?, mat_khau=?, email=?, ngay_dang_ky=?, 		        ngay_dang_nhap_cuoi=?, active=? where ma_nguoi_dung=? ";
		$this->setQuery($sql);
		return $this->execute(array($ma_loai_nguoi_dung, $ho_ten, $ten_dang_nhap, $mat_khau, $email, $ngay_dang_ky, 		        $ngay_dang_nhap_cuoi, $active,$ma_nguoi_dung));
		
	}
	 public function Xoa_nguoi_dung_theo_ma_nd($ma_nguoi_dung){
		$sql="delete from nguoi_dung where ma_nguoi_dung=?";
		$this->setQuery($sql);
		return $this->execute(array($ma_nguoi_dung));
		
	}
		
}
?>