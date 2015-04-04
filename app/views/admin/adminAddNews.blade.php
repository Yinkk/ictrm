@extends('layout.master')
@section('content')

{{ Form::open(array('action' => 'AdminNewsController@postAddNews')) }}
<div id="content">
  <div id="main">
    <div id="profile" class="post">
      <h2>หน้าจัดการข่าวประชาสัมพันธ์</h2>

        <div class="form-group">
          <label for="addTitleNews">หัวข้อข่าวประชาสัมพันธ์</label>
          <input name="titleNews" type="text" class="form-control" id="titleNews" placeholder="หัวข้อข่าวประชาสัมพันธ์">
        </div>
        <div class="form-group">
          <label for="addDetailNews">รายละเอียด</label>
          <textarea name="detailNews" class="form-control" rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
        <input type="button" name="cancel" value="cancel" onClick="window.location='http://localhost/ictrm/admin/News/list-news';" />
      </div>
  </div>
</div>
{{ Form::close() }}

@stop
