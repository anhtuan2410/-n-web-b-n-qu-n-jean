<?php
require_once ('database.php');
class M_loai_bai_viet extends database
{
    // Quản trị

	public function Doc_loai_bai_viet($tim="",$vt=-1,$limit=-1)
    { 
		$dk="";
		if($tim!="")
		{
			$dk = "where ten_loai_bai_viet like '% $tim%' or ten_loai_bai_viet like '%$tim %'";
		}
		$sql = "Select * from loai_bai_viet ". $dk ." order by ma_loai_bai_viet";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
    public function Doc_loai_bai_viet_theo_ma_bai_viet($ma_loai_bai_viet)
    {
        $sql = "Select * from loai_bai_viet where ma_loai_bai_viet =?";
        $this->setQuery($sql);
        return $this->loadRow(array($ma_loai_bai_viet));
    }
	public function Them_loai_bai_viet($ma_loai_bai_viet, $ten_loai_bai_viet, $mo_ta, $ma_loai_cha)
	   {
		  $sql="insert into loai_bai_viet values(?,?,?,?)";
		  $this->setQuery($sql);
		  return $this->execute(array($ma_loai_bai_viet, $ten_loai_bai_viet, $mo_ta, $ma_loai_cha));
	   }
	 public function Sua_loai_bai_viet_theo_ma_bai_viet( $ten_loai_bai_viet, $mo_ta, $ma_loai_cha,$ma_loai_bai_viet)
	   {
		  $sql="update loai_bai_viet set  ten_loai_bai_viet=?, mo_ta=?, ma_loai_cha=? Where ma_loai_bai_viet=?";
		  $this->setQuery($sql);
		  return $this->execute(array($ten_loai_bai_viet, $mo_ta, $ma_loai_cha,$ma_loai_bai_viet));
	   }
	 public function Xoa_loai_bai_viet_theo_ma_loai($ma_loai_bai_viet)
	   {
		   $sql="delete from loai_bai_viet where ma_loai_bai_viet=?";
		   $this->setQuery($sql);
		   return $this->execute(array($ma_loai_bai_viet));
	   }
}

?>
