@extends('layout.master')
@section('content')

{{ Form::open(array('action' => 'AdminBudgetController@postAddBudget')) }}
<div id="content">
  <div id="main">
    <div id="profile" class="post">
      <h2>หน้าจัดการงบประมาณ</h2>

        <div class="form-group">
          <label for="addBedget_year">ปีงบประมาณ</label>
         <select name="budget_year">
			<option value="2550">2550</option>
			<option value="2551">2551</option>
			<option value="2552">2552</option>
			<option value="2553">2553</option>
			<option value="2554">2554</option>
			<option value="2555">2555</option>
			<option value="2556">2556</option>
			<option value="2557">2557</option>
			<option value="2558">2558</option>
			<option value="2559">2559</option>
			<option value="2560">2560</option>
			<option value="2561">2561</option>
			<option value="2562">2562</option>
			<option value="2563">2563</option>
			<option value="2564">2564</option>
			<option value="2565">2565</option>
		</select>
        </div>
        <div class="form-group">
          <label for="addBudget">งบประมาณ</label>
          <input name="budget" type="text" class="form-control" id="budget">บาท
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
        <input type="button" name="cancel" value="cancel" onClick="window.location='http://localhost/ictrm/admin/budget/list-budget';" />
      </div>
  </div>
</div>
{{ Form::close() }}

@stop
