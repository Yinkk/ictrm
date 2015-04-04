<?php

class AdminBudgetController extends BaseController{

	
	public function getIndex(){
		
		return View::make('admin/adminPage');

	}

	public function getListBudget(){
		
		$tbb = BudgetModel::listBudget();
		return View::make('admin/adminListBudget', array('tbb' => $tbb));
	}

	public function getAddBudget(){
		return View::make('admin/adminAddBudget');

	}

	public function postAddBudget(){
		//return $a =Input::all();
		BudgetModel::addBudget();
		$tbb = BudgetModel::listBudget();
		return View::make('admin/adminListBudget', array('tbb' => $tbb));
	}

	public function getEditBudget($id){
		//echo $id;
		$tbb = BudgetModel::editBudget($id);
		//echo $tbu;
   		return View::make('admin/adminEditBudget', array('tbb' => $tbb));
	}

	public function postEditBudget(){
		//return $a = Input::all();
		BudgetModel::updateBudget();
		
		$tbb = BudgetModel::listBudget();
		return View::make('admin/adminListBudget', array('tbb' => $tbb));
	}

	public function getDelBudget($id){
		
		BudgetModel::delBudget($id);
		$tbb = BudgetModel::listBudget();
		return View::make('admin/adminListBudget', array('tbb' => $tbb));
		
	}	
}

?>