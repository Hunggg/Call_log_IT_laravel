@extends('admin.home_leader_dn')
@section('css')
<!--link css only page here-->

@endsection




@section('main')
<!--thiet ke form html nhap cong viec (request)-->
<div class="row">
	<h3>Thêm yêu cầu</h3>
	<hr/>

	<form action="">
		<div class="form-group col-md-12">
			<label for="Tencongviec">Tên công việc</label>
			<input type="text" class="form-control" id="" placeholder="Tên công việc" name="tencongviec">
		</div>

		<div class="form-group col-md-6">
			<label for="Mucdouutien">Mức độ ưu tiên</label>
			<select name="Mucdouutien" id="mucdouutien">
				<option value="">Thấp</option>
				<option value="" selected>Bình thường</option>
				<option value="">Cao</option>
				<option value="">Khẩn cấp</option>
			</select>
		</div>

		<div class="form-group col-md-6">
			<label for="ngayhethan">Ngày hết hạn</label>
			<input type="text" id="ngayhethan" name="ngayhethan">
		</div>

		<div class="form-group col-md-6">
			<label for="bophanit">Bộ phận IT</label>
			<select name="bophanit" id="bophanit">
				<option value="">Hanoi-IT</option>
				<option value="">Đà Nẵng-IT</option>
			</select>
		</div>

		<div class="form-group col-md-6">
			<label for="nguoilienquan">Người liên quan</label>
			<input type="text" name="nguoilienquan" id="nguoilienquan" />
		</div>

		<div class="form-group col-md-12">
			<label for="noidung">Nội dung</label>
			<br/>
			<textarea name="noidung" id="noidung" cols="100" rows="10"></textarea>
		</div>

	</form>

	<div class="col-md-12">
		<input type="text" class="uploadfile" id="uploadfile" placeholder="choose file to upload">
		<button class="btn btn-primary">Choose File</button>
		<br/>

		<input type="submit" class="btn btn-info" value="Gửi yêu cầu">
		<button type="button">Hủy bỏ</button>
	</div>
</div>


@endsection


@section('js')
<script src="{{ URL::asset('public/dist/js/sb-admin-2.js') }}"></script>
@endsection