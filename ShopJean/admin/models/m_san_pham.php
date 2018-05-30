<?php
require_once ('database.php');
class M_san_pham extends database
{
    // Quản trị

	public function Doc_san_pham($tim="",$vt=-1,$limit=-1)
    { 
		$dk="";
		if($tim!="")
		{
			$dk = "where ten_san_pham like '% $tim%' or ten_san_pham like '%$tim %'";
		}
		$sql = "Select * from san_pham ". $dk ." order by ma_san_pham ";
		if($vt>=0 && $limit>0)
		{
			$sql .=" Limit $vt,$limit ";	
		}
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
    public function Doc_san_pham_theo_ma_san_pham($ma_san_pham)
    {
        $sql = "Select * from san_pham where ma_san_pham =?";
        $this->setQuery($sql);
        return $this->loadRow(array($ma_san_pham));
    }
	public function Them_san_pham($ma_san_pham, $ten_san_pham, $ma_loai_cha, $ma_loai, $mo_ta_tom_tat, $mo_ta_chi_tiet, $don_gia,        $hinh, $san_pham_moi, $so_lan_xem, $ngay_tao)
	   {
		  $sql="insert into san_pham values(?,?,?,?,?,?,?,?,?,?,?)";
		  $this->setQuery($sql);
		  return $this->execute(array("NULL",$ten_san_pham, $ma_loai_cha, $ma_loai, $mo_ta_tom_tat, $mo_ta_chi_tiet, $don_gia,        $hinh, $san_pham_moi, $so_lan_xem, $ngay_tao));
	   }
	 public function Sua_san_pham_theo_ma_sp($ten_san_pham, $ma_loai_cha, $ma_loai, $mo_ta_tom_tat, $mo_ta_chi_tiet, $don_gia,        $hinh,        $san_pham_moi, $so_lan_xem, $ngay_tao,$ma_san_pham)
	   {
		  $sql="update san_pham set ten_san_pham=?, ma_loai_cha=?, ma_loai=?, mo_ta_tom_tat=?, mo_ta_chi_tiet=?,          don_gia=?,hinh=?,san_pham_moi=?,so_lan_xem=?,ngay_tao=? Where ma_san_pham=?";
		  $this->setQuery($sql);
		  return $this->execute(array($ten_san_pham, $ma_loai_cha, $ma_loai, $mo_ta_tom_tat, $mo_ta_chi_tiet, $don_gia,        $hinh,          $san_pham_moi, $so_lan_xem, $ngay_tao,$ma_san_pham));
	   }
	 public function Xoa_san_pham_theo_ma_sp($ma_san_pham)
	   {
		   $sql="delete from san_pham where ma_san_pham=?";
		   $this->setQuery($sql);
		   return $this->execute(array($ma_san_pham));
	   }
}
//`ma_san_pham`, `ten_san_pham`, `ma_loai_cha`, `ma_loai`, `mo_ta_tom_tat`, `mo_ta_chi_tiet`, `don_gia`, `hinh`, `san_pham_moi`, `so_lan_xem`, `ngay_tao`
?>
