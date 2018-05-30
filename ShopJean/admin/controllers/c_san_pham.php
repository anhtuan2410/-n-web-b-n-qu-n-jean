<?php
@session_start();
include("models/m_san_pham.php");
class C_san_pham
{
	function Hien_thi_san_pham()
	{
			// Models
			$m_san_pham=new M_san_pham();
			$sanphams=$m_san_pham->Doc_san_pham();
			
			// phan trang
			include("Pager.php");
			$p=new pager();
			$limit=8;
			$count=count($sanphams);
			$vt=$p->findStart($limit);
			$pages=$p->findPages($count,$limit);
			$curpage=$_GET["page"];
			$lst=$p->pageList($curpage,$pages);
			
			$sanphams=$m_san_pham->Doc_san_pham("",$vt,$limit);
			if(isset($_POST["btnTim"])&& isset($_POST["tim"]))
			{
				$gt=$_POST["tim"];
				$sanphams=$m_san_pham->Doc_san_pham($gt,$vt,$limit);
			}	
			
			// View
			
			
			$title="Quản lý Shop Jean";
			$tieude="Danh sách sản phẩm";
			$view="views/sanpham/v_san_pham.php";
			include("include/layout.php");	
	
	}
	function Them_san_pham()
	{
			// Models
			
			$m_san_pham=new M_san_pham();
			if(isset($_POST["btnCapnhat"]))
			{
				$ma_san_pham =NULL;
				$ten_san_pham =$_POST["ten_san_pham"];
				$ma_loai_cha =$_POST["ma_loai_cha"];
				$ma_loai =$_POST["ma_loai"];
				$mo_ta_tom_tat =$_POST["mo_ta_tom_tat"];
				$mo_ta_chi_tiet =$_POST["mo_ta_chi_tiet"];
				$don_gia =$_POST["don_gia"];
				$hinh=$_FILES["hinh"]["error"]==0?$_FILES["hinh"]["name"]:"";
				$san_pham_moi =$_POST["san_pham_moi"];
				$so_lan_xem =$_POST["so_lan_xem"];
				$ngay_tao =$_POST["ngay_tao"];
				
				
				$kq=$m_san_pham->Them_san_pham($ma_san_pham, $ten_san_pham, $ma_loai_cha, $ma_loai, $mo_ta_tom_tat, $mo_ta_chi_tiet, $don_gia,$hinh, $san_pham_moi, $so_lan_xem, $ngay_tao);
				if($kq)
				{
					if($_FILES["hinh"]["error"]==0)
					{
						$kqa=move_uploaded_file($_FILES["hinh"]["tmp_name"],"../images/$hinh");
							
					}
					echo "<script>alert('Thêm thành công')</script>";
					echo "<script>window.location='sanpham.php'</script>";
					
					
				}
			}
			
			
			
			// View
			$title="Quản lý Shop Jean";
			$tieude="Thêm  sản phẩm";
			
			
			$view="views/sanpham/v_them_san_pham.php";
			include("include/layout.php");	
	
	}
	function Sua_san_pham()
	{		
		    $m_san_pham=new M_san_pham();
			// Models
			if(isset($_GET["ma_sp"]))
			{
				$ma_san_pham=$_GET["ma_sp"];
				
			}
			$san_phamss=$m_san_pham->Doc_san_pham_theo_ma_san_pham($ma_san_pham);
			if(isset($_POST["btnCapnhat"])){
				
				
				$ten_san_pham =$_POST["ten_san_pham"];
				$ma_loai_cha =$_POST["ma_loai_cha"];
				$ma_loai =$_POST["ma_loai"];
				$mo_ta_tom_tat =$_POST["mo_ta_tom_tat"];
				$mo_ta_chi_tiet =$_POST["mo_ta_chi_tiet"];
				$don_gia =$_POST["don_gia"];
				$hinh=$_FILES["hinh"]["error"]==0?$_FILES["hinh"]["name"]:"";
				$san_pham_moi =$_POST["san_pham_moi"];
				$so_lan_xem =$_POST["so_lan_xem"];
				$ngay_tao =$_POST["ngay_tao"];
				
				$kq=$m_san_pham->Sua_san_pham_theo_ma_sp($ten_san_pham, $ma_loai_cha, $ma_loai, $mo_ta_tom_tat, $mo_ta_chi_tiet		                ,$don_gia, $hinh,$san_pham_moi, $so_lan_xem, $ngay_tao,$ma_san_pham);
				if($kq)
				{    
					if($_FILES["hinh"]["error"]==0)
					{
						$kqa=move_uploaded_file($_FILES["hinh"]["tmp_name"],"../images/$hinh");
							
					}
					echo "<script>alert('Sửa thành công')</script>";
					echo "<script>window.location='sanpham.php'</script>";	
				}
			}
			
			// View
			
			$title="Quản lý Nhà Hàng";
			$tieude="Sửa sản phẩm";
			$view="views/sanpham/v_sua_san_pham.php";
			include("include/layout.php");
	
	}
	public function Xoa_san_pham()
	{
		
		$ma_san_pham=$_GET["ma_sp"];
		$m_san_pham= new M_san_pham();
		
		$kq=$m_san_pham->Xoa_san_pham_theo_ma_sp($ma_san_pham);
		if($kq)
		{
			echo "<script>alert('Xóa thành công')</script>";
			echo "<script>window.location='sanpham.php'</script>";	
		}
		else
		{
			echo "<script>alert('Xóa bị lỗi.')</script>";	
		}
			
	}	
	
	
		
}
?>