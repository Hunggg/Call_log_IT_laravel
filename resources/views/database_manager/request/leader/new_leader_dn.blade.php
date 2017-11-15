@extends('admin.home_leader_dn') 
@section('css')
<!--link css only page here-->
<link href="//cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/build/css/bootstrap-datetimepicker.css"
 rel="stylesheet"> 
@endsection
 
@section('js')
<script type="text/javascript">
	$(function () {
                $('#datetimepicker1').datetimepicker();
            });

</script>

<script src="{{ URL::asset('public/dist/js/sb-admin-2.js') }}"></script>

@endsection

@section('main')
<!--thiet ke form html nhap cong viec (request)-->
<div class="row">
	<h3>Thêm yêu cầu</h3>
	<hr/>

	<form action="">
		<div class="form-group col-md-12">
			<label for="Tencongviec">Tên công việc</label>
			<input type="text" class="form-control" id="" placeholder="Tên công việc" name="tencongviec" required>
		</div>

		<div class="form-group col-md-6">
			<label for="Mucdouutien">Mức độ ưu tiên</label>
			<br>
			<select name="Mucdouutien" id="mucdouutien" class="form-control">
				<option value="">Thấp</option>
				<option value="" selected>Bình thường</option>
				<option value="">Cao</option>
				<option value="">Cao</option>
				<option value="">Khẩn cấp</option>
			</select>
		</div>

		<div class="form-group col-md-6">
			<label for="ngayhethan">Ngày hết hạn</label>
			<div class="form-group">
				<div class="input-group date" id="datetimepicker1">
					<input type="text" class="form-control" required/>
					<span class="input-group-addon">
						<span class="glyphicon glyphicon-calendar"></span>
					</span>
				</div>
			</div>

		</div>

		<div class="form-group col-md-6">
			<label for="bophanit">Bộ phận IT</label>
			<br>
			<select name="bophanit" id="bophanit" class="form-control">
				<option value="">Hanoi-IT</option>
				<option value="">Đà Nẵng-IT</option>
			</select>
		</div>

		<div class="form-group col-md-6">
			<label for="nguoilienquan">Người liên quan</label>
			<br>
			<input type="text" name="nguoilienquan" id="nguoilienquan" class="form-control" />
		</div>

		<div class="form-group col-md-12">
			<label for="noidung">Nội dung</label>
			<br/>
			<textarea id="noidung" name="noidung" class="form-control" required></textarea>
		</div>

	

	<div class="form-horizontal">
		<div class="col-sm-10">
			<input type="file" class="filestyle form-control" id="uploadfile" placeholder="choose file to upload">
		</div>
		
	</div>
	<br>
	<div>
	    <input type="submit" class="btn btn-info" value="Gửi yêu cầu">
		<a href="#" class="btn btn-danger">Hủy bỏ</a>
	</div>
	
		
	</form>
</div>

@endsection