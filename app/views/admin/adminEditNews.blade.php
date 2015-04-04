@extends('layout.master')
@section('content')

{{ Form::open(array('action' => 'AdminNewsController@postEditNews')) }}
{{ Form::token(); }}
<div id="content">
  <div id="main">
    <div id="profile" class="post">
      <h2>หน้าจัดการข่าวประชาสัมพันธ์</h2>
        <div class="form-group">
          <input name="id" type="hidden" value="{{ $tbn->id; }}">
          <label for="editTitleNews">หัวข้อข่าวประชาสัมพันธ์</label>
          <input name="titleNews" type="text" class="form-control" placeholder="หัวข้อข่าวประชาสัมพันธ์" value="{{ $tbn->titleNews; }}">
        </div>
        <div class="form-group">
          <label for="editDetailNews">รายละเอียด</label>
          <textarea name="detailNews" class="form-control" rows="3">{{ $tbn->detailNews; }}</textarea>
        </div>
        {{ Form::submit('ตกลง'); }}
        <input type="button" name="cancel" value="cancel" onClick="window.location='http://localhost/ictrm/admin/News/list-news';" />
    </div>
  </div>
</div>
{{ Form::close() }}

@stop