@extends('layout.master')
@section('content')

{{ Form::open(array('action' => 'AdminBudgetController@postEditBudget')) }}
<div id="content">
  <div id="main">
    <div id="profile" class="post">
      <h2>หน้าจัดการงบประมาณ</h2>

        <div class="form-group">
          <input name="id" type="hidden" value="{{ $tbb->id; }}">
          <label for="addBedget_year">ปีงบประมาณ</label>
          <select name="budget_year">
            <option value="2550" <?php echo ($tbb->budget_year=="2550")?'selected':'' ?> >2550</option>
            <option value="2551" <?php echo ($tbb->budget_year=="2551")?'selected':'' ?> >2551</option>
            <option value="2552" <?php echo ($tbb->budget_year=="2552")?'selected':'' ?> >2552</option>
            <option value="2553" <?php echo ($tbb->budget_year=="2553")?'selected':'' ?> >2553</option>
            <option value="2554" <?php echo ($tbb->budget_year=="2554")?'selected':'' ?> >2554</option>
            <option value="2555" <?php echo ($tbb->budget_year=="2555")?'selected':'' ?> >2555</option>
            <option value="2556" <?php echo ($tbb->budget_year=="2556")?'selected':'' ?> >2556</option>
            <option value="2557" <?php echo ($tbb->budget_year=="2557")?'selected':'' ?> >2557</option>
            <option value="2558" <?php echo ($tbb->budget_year=="2558")?'selected':'' ?> >2558</option>
            <option value="2559" <?php echo ($tbb->budget_year=="2559")?'selected':'' ?> >2559</option>
            <option value="2560" <?php echo ($tbb->budget_year=="2560")?'selected':'' ?> >2560</option>
            <option value="2561" <?php echo ($tbb->budget_year=="2561")?'selected':'' ?> >2561</option>
            <option value="2562" <?php echo ($tbb->budget_year=="2562")?'selected':'' ?> >2562</option>
            <option value="2563" <?php echo ($tbb->budget_year=="2563")?'selected':'' ?> >2563</option>
            <option value="2564" <?php echo ($tbb->budget_year=="2564")?'selected':'' ?> >2564</option>
            <option value="2565" <?php echo ($tbb->budget_year=="2565")?'selected':'' ?> >2565</option>
        </select>
        </div>
        <div class="form-group">
          <label for="addBudget">งบประมาณ</label>
          <input name="budget" type="text" class="form-control" id="bedget" value="{{ $tbb->budget; }}">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
        <input type="button" name="cancel" value="cancel" onClick="window.location='';" />
      </div>
  </div>
</div>
{{ Form::close() }}

@stop
