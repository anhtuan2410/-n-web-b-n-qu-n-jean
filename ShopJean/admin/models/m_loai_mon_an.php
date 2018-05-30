<?php
include_once("database.php");
class M_loai_mon_an extends database
{
	public function Doc_loai_mon_an($vt=-1,$limit=-1)
	{
		$sql="select * from loai_mon_an";
		if($vt>=0 && $limit>0)
		{
			$sql.=" limit $vt,$limit";	
		}
		$this->setQuery($sql);
		return $this->loadAllRows();	
	}
	public function Doc_loai_mon_an_theo_ma_loai($ma_loai)
	{
		$sql="select * from loai_mon_an where ma_loai=?";
		$this->setQuery($sql);
		return $this->loadRow(array($ma_loai));	
	}
	// ma_loai, ten_loai, mo_ta, hinh
	
	// Thêm 
	public function Them_loai_mon_an($ten_loai, $mo_ta, $hinh)
	{
		$sql="insert into loai_mon_an values(?,?,?,?)";
		$this->setQuery($sql);
		$param=array(NULL,$ten_loai, $mo_ta, $hinh);
		return $this->execute($param);	
	}
	// Sửa
	public function Sua_loai_mon_an($ma_loai,$ten_loai, $mo_ta, $hinh)
	{
		$sql="update loai_mon_an set ten_loai=?,mo_ta=?,hinh=? where ma_loai=?";
		$this->setQuery($sql);
		$param=array($ten_loai, $mo_ta, $hinh,$ma_loai);
		return $this->execute($param);	
	}
	// Xóa
	public function Xoa_loai_mon_an($ma_loai)
	{
		$sql="delete from loai_mon_an where ma_loai=?";
		$this->setQuery($sql);
		return $this->execute(array($ma_loai));	
	}
}
?>