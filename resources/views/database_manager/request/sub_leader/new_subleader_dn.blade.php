@extends('admin.home_subleader_dn') @section('css')
<!--link css only page here-->
<link href="//cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/build/css/bootstrap-datetimepicker.css"
 rel="stylesheet"> @endsection @section('js')
<script type="text/javascript">
	$(function () {
                $('#datetimepicker').datetimepicker();
            });

	$("#noidung").wysihtml5();

</script>


<script src="{{ URL::asset('public/dist/js/sb-admin-2.js') }}"></script>

@endsection @section('main')
<!--thiet ke form html nhap cong viec (request)-->
<div class="row">
	<h3>Thêm yêu cầu</h3>	
	<hr/>

	<form action="{{route('crequest_subleader_dn')}}" method="post" enctype="multipart/form-data">
		{{csrf_field()}}
		<div class="form-group col-md-12">
			<label for="Tencongviec">Tên công việc</label>
			<input type="text" class="form-control" id="" placeholder="Tên công việc" name="subject" required>
		</div>

		<div class="form-group col-md-6">
			<label for="Mucdouutien">Mức độ ưu tiên</label>
			<br>
			<select name="priority" id="priority" class="form-control">
				<option value="1">Thấp</option>
				<option value="2" selected>Bình thường</option>
				<option value="3">Cao</option>
				<option value="4">Khẩn cấp</option>
			</select>
		</div>

		<div class="form-group col-md-6">
			<label for="ngayhethan">Ngày hết hạn</label>
			<div class="form-group">
				<div class="input-group date" id="datetimepicker">
					<input type="text" class="form-control" name="deadline" required/>
					<span class="input-group-addon">
						<span class="glyphicon glyphicon-calendar"></span>
					</span>
				</div>
			</div>
		</div>

		<div class="form-group col-md-6">
			<label for="bophanit">Bộ phận IT</label>
			<br>
			<select name="team_id" id="bophanit" class="form-control">
				<option value="1">Hanoi-IT</option>
				<option value="2">Đà Nẵng-IT</option>
			</select>
		</div>

		<div class="form-group col-md-6">
			<label for="nguoilienquan">Người liên quan</label>
			<br>
			<input type="text" name="nguoi_lien_quan" id="nguoilienquan" class="form-control" />
		</div>

		<div class="form-group col-md-12">
			<label for="noidung">Nội dung</label>
			<br/>
			<textarea id="noidung" name="content" class="form-control" required></textarea>
		</div>



		<div class="form-group col-sm-10">
			<input name="file-anh" type="file" class="filestyle form-control" id="uploadfile" placeholder="choose file to upload">
		</div>



		<div class="form-group col-md-12">
			<input type="submit" class="btn btn-info" value="Gửi yêu cầu">
			<a href="{{route('sub_leader_dn')}}" class="btn btn-danger">Hủy bỏ</a>
		</div>


	</form>
</div>

@endsection