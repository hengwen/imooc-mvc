<?php
class operateController{
	
	public function doAdd(){
			$adminadd = M('admin');
			$ajaxview = V('page');
			$table = $_GET['table'];
			$result = $adminadd->adminAdd();
			if ($result) {
				$ajaxview->ajaxMsg('添加成功！','admin.php?controller=admin&method=showList&table='.$table.'&p=1');
			}else{
				$ajaxview->ajaxMsg('添加失败！','admin.php?controller=admin&method=showList&table='.$table.'&p=1');
			}
		} 

	public function doEdit(){
		$editAdmin = M('admin');
		$ajaxview = V('page');
		$table = $_GET['table'];
		if(isset($table)&&$result= $editAdmin->adminEdit()){
			$ajaxview->ajaxMsg('编辑成功！','admin.php?controller=admin&method=showList&table='.$table.'&p=1');
		}else{
			$ajaxview->ajaxMsg('编辑失败！','admin.php?controller=admin&method=showList&table='.$table.'&p=1');
		}
	}

	public function doDel(){
			$delAdmin = M('admin');
			$ajaxview = V('page');
			$table = $_GET['table'];
			if($result= $delAdmin->delAdmin()){
				$ajaxview->ajaxMsg('删除成功！','admin.php?controller=admin&method=showList&table='.$table.'&p=1');
			}else{
				$ajaxview->ajaxMsg('删除失败！','admin.php?controller=admin&method=showList&table='.$table.'&p=1');
			}
		}





}


?>