
@extends('layout.master')
@section('content')

{{ Form::open(array('action' => 'AdminUserController@postEditUsers')) }}
{{ Form::token(); }}
<div id="content">
	<div id="main">
	
		<div id="profile-detail" class="post form-edit">
			<h2>หน้าแก้ไขข้อมูลประวัตินักวิจัย: {{ $tbu->user_fname; }} {{ $tbu->user_lname; }}</h2>			

			<div class="profile-detail-form">
				<ul>
					<li><a href="#tabs-1">ประวัตินักวิจัย</a></li>
					<!--<li><a href="#tabs-2">โครงการวิจัยที่เกี่ยวข้อง</a></li>
					<li><a href="#tabs-3">ผลงาน</a></li>-->
				</ul>
				<div id="tabs-1">
				
					<div style="padding: 10px 0;position:relative;">
					
						<h4>ข้อมูลทั่วไป</h4>
						<table class="detailtb">
						<tr>
							<input name="id" type="hidden" value="{{ $tbu->id; }}">
							<td class="label" style="width:150px;">username</td>
							<td><input type="text" name="username" value="{{ $tbu->username; }}"></td>
						</tr>
						<tr>
							<td class="label" style="width:150px;">password</td>
							<td><input type="password" name="password" value="{{ $tbu->password; }}"></td>
						</tr>
						<tr>
							<td class="label" style="width:150px;">คำนำหน้า</td>
							<td>
								
								
								<input type="radio" name="user_prefix" value="นาย" <?php echo ($tbu->user_prefix=='นาย')?'checked':'' ?> >นาย
								<input type="radio" name="user_prefix" value="นาง" <?php echo ($tbu->user_prefix=='นาง')?'checked':'' ?> >นาง
								<input type="radio" name="user_prefix" value="นางสาว" <?php echo ($tbu->user_prefix=='นางสาว')?'checked':'' ?> >นางสาว
							</td>
						</tr>
						<tr>
							<td class="label" style="width:150px;">ชื่อ</td>
							<td><input type="text" name="user_fname" value="{{ $tbu->user_fname; }}"></td>
						</tr>
						<tr>
							<td class="label" style="width:150px;">นามสกุล</td>
							<td><input type="text" name="user_lname" value="{{ $tbu->user_lname; }}"></td>
						</tr>
						<tr>
							<td class="label" style="width:150px;">คณะ/หน่วยงาน</td>
							<td><input type="text" name="user_faculty" value="{{ $tbu->user_faculty; }}"></td>
						</tr>
						<tr>
							<td class="label" style="width:150px;">สาขาวิชา</td>
							<td><input type="text" name="user_major" value="{{ $tbu->user_major; }}"></td>
						</tr>
						
						<tr>
							<td class="label" style="width:150px;">ตำแหน่งวิชาการ</td>
							<td><input type="text" name="user_position" value="{{ $tbu->user_position; }}"></td>
						</tr>
						
						<tr>
							<td class="label" style="width:150px;">เพศ</td>
							<td>
								<input type="radio" name="user_gender" <?php echo ($tbu->user_gender=='ชาย')?'checked':'' ?> value="ชาย">ชาย
								<input type="radio" name="user_gender" <?php echo ($tbu->user_gender=='หญิง')?'checked':'' ?> value="หญิง">หญิง
							</td>
						</tr>
						<tr>
							<td class="label" style="width:150px;">สัญชาติ</td>
							<td><input type="text" name="user_nation" value="{{ $tbu->user_nation; }}"></td>
						</tr>
						
						</table>
						
						<h4>การศึกษาสูงสุด</h4>
						<table class="detailtb">
						
						<tr>
							<td class="label" style="width:150px;">ระดับการศึกษา</td>
							<td>
								<input type="radio" name="user_level_education" <?php echo ($tbu->user_level_education=='Bachelor')?'checked':'' ?> value="Bachelor"  >ปริญญาตรี
								<input type="radio" name="user_level_education" <?php echo ($tbu->user_level_education=='Master')?'checked':'' ?> value="Master"  >ปริญญาโท
								<input type="radio" name="user_level_education" <?php echo ($tbu->user_level_education=='PhD.')?'checked':'' ?> value="PhD." >ปริญญาเอก
							</td>
						</tr>
						<tr>
							<td class="label" style="width:150px;">ชื่อปริญญา</td>
							<td><input type="text" name="user_degree" value="{{ $tbu->user_degree; }}"></td>
						</tr>
						
						<tr>
							<td class="label" style="width:150px;">สถานศึกษาที่สำเร็จ</td>
							<td><input type="text" name="user_education" value="{{ $tbu->user_education; }}"></td>
						</tr>
						<tr>
							<td class="label" style="width:150px;">เบอร์โทรศัพท์ติดต่อ</td>
							<td><input type="text" name="user_tel" value="{{ $tbu->user_tel; }}"></td>
						</tr>
						<tr>
							<td class="label" style="width:150px;">Email</td>
							<td><input type="email" name="email" value="{{ $tbu->email; }}"></td>
						</tr>
						</table>
	
						<div style="position:absolute;top:10px;right:10px;">
							<img src="lib-phpthumb?src=&w=120" alt="{{ $tbu->user_fname; }} {{ $tbu->user_lname; }}" style="border:4px solid #ddd;" />
						</div>
						
					</div>
					
				</div>
				<!--<div id="tabs-2">
					
					<div style="padding: 10px 0;">
						
						<h4>ผู้อำนวยการแผนงานวิจัย (0)</h4>
						<ol class="list-menu">
													</ol>
						
						<h4>หัวหน้าโครงการวิจัย (2)</h4>
						<ol class="list-menu">
														<li><a href="http://rpm.rmutp.ac.th/research-detail?id=281">ลักษณะการชนและปัจจัยที่เกี่ยวข้องกับอุบัติเหตุของรถโดยสารประจำทางขนาดใหญ่ระหว่างจังหวัดประเภทรุนแรง</a> (ร้อยละการทำวิจัย )</li>
														<li><a href="http://rpm.rmutp.ac.th/research-detail?id=438">การวิเคราะห์สาเหตุของอุบัติเหตุเชิงลึกในประเทศไทย กรณีศึกษา: อุบัติเหตุขบวนรถไฟชนยานพาหนะ</a> (ร้อยละการทำวิจัย )</li>
													</ol>
						
						<h4>ผู้ร่วมวิจัย (1)</h4>
						<ol class="list-menu">
														<li><a href="http://rpm.rmutp.ac.th/research-detail?id=167">การใช้เถ้าถ่านหิน เถ้าชานอ้อย และเถ้าแกลบเปลือกไม้ในคอนกรีตกำลังสูง</a> (ร้อยละการทำวิจัย 10)</li>
													</ol>
					
					</div>
					
				</div>
				
				<div id="tabs-3">
					
					<div style="padding: 10px 0;">
						
						<h4>การประชุมวิชาการ (0)</h4>
						<ol class="list-menu">
													</ol>
						
						<h4>ผลงานที่เผยแพร่ในวารสาร (2)</h4>
						<ol class="list-menu">
														<li><a href="http://rpm.rmutp.ac.th/research-detail?id=167#tabs-3"><strong>Journal of Materials in Civil Engineering (ASCE)</strong></a><br />การใช้เถ้าถ่านหิน เถ้าชานอ้อย และเถ้าแกลบเปลือกไม้ในคอนกรีตกำลังสูง</li>
														<li><a href="http://rpm.rmutp.ac.th/research-detail?id=167#tabs-3"><strong>๋Journal of Applied Sciences Research</strong></a><br />The innovation of use of waste ash from agricultural by-product in concrete work</li>
													</ol>
						
						<h4>การจดทะเบียนทรัพย์สินทางปัญญา (0)</h4>
						<ol class="list-menu">
													</ol>
						
						<h4>นิทรรศการ (0)</h4>
						<ol class="list-menu">
													</ol>
						
						<h4>การนำผลงานไปใช้ประโยชน์ (0)</h4>
						<ol class="list-menu">
													</ol>
						
						<h4>การเผยแพร่ผลงานวิจัยผ่านสื่อมวลชน (0)</h4>
						<ol class="list-menu">
													</ol>
						
						<h4>รางวัลที่ได้รับ (0)</h4>
						<ol class="list-menu">
													</ol>

					</div>-->	
					 {{ Form::submit('ตกลง'); }}
        			<input type="button" name="cancel" value="cancel" onClick="window.location='http://localhost/ictrm/admin/user/list-users';" />			
				</div>
			</div>
		</div>
	</div>

{{ Form::close(); }}
@stop

