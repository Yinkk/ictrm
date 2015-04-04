<?php
class BudgetModel extends Eloquent{

	use SoftDeletingTrait;
	protected $dates = ['deleted_at'];
	protected $softDelete = true;

	protected $table = 'tbbudget';

	public static function listBudget(){
		$tbb = BudgetModel::all();
		return $tbb;

	}

	public static function showBudget($id){
		$tbb = BudgetModel::find($id);
		return $tbb;
	}

	public static function addBudget(){
		
		$input = Input::all();
		$tbb = new BudgetModel;
		$tbb->budget_year = $input['budget_year'];
		$tbb->budget = $input['budget'];
		$tbb->save();// not completed

	}

	public static function editBudget($id){
		
		$tbb = BudgetModel::find($id);
		return $tbb;
		
	}

	public static function updateBudget(){
		
		$input = Input::all();
		$tbb = BudgetModel::find($input['id']);
		
		$tbb->budget_year = $input['budget_year'];
		$tbb->budget = $input['budget'];
		$tbb->save();
		
	}

	public static function delBudget($id){

		BudgetModel::find($id)->delete();
	}
}
?>