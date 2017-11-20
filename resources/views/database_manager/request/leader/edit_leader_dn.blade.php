@extends('admin.home_leader_dn') @section('css')
<style>
	.btn {
		margin: 1px;
	}

	<link href="//cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/build/css/bootstrap-datetimepicker.css" rel="stylesheet"/>
</style>
@endsection @section('main')
<!--tiep tuc lam front end -->
<div class="row">
	<div class="col-md-8">
		<h4>Test</h4>
	</div>
	<div class="col-md-4">
		<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
			Change Data
		</button>

	</div>
	<hr>
	<div class="hienthi">
		<div class="col-md-4">
			<b>Ngày tạo</b>: abcxyzt
			<br>
			<b> Người yêu cầu</b>: abcxyzt
			<br>
			<b> Mức độ ưu tiên </b>: abcxyzt
			<br>
		</div>
		<div class="col-md-4">
			<b>Ngày hết hạn:</b> abcxyzt
			<br>
			<b> Người thực hiện:</b> abcxyzt
			<br>
			<b> Trạng thái:</b> abcxyzt
			<br>
		</div>
		<div class="col-md-4">
			<br>
			<b>Bộ phận IT:</b> abcxyzt
			<br>
			<b> Người liên quan:</b> abcxyzt
			<br>
		</div>
	</div>

</div>
<hr>
<div>
	cái này là phần hiển thị nội dung công việc
	<h4>Nội dung</h4>
	<hr> tên người tạo
	<br> ngày tháng năm tạo
	<br> nội dung của công việc
</div>
<hr>
<div>
	cái này là comment

	<div class="form-group">
		<label for="binhluan">Bình luận</label>
		<br/>
		<textarea id="binhluan" name="content" class="form-control" required></textarea>
	</div>

	<input type="submit" value="gửi bình luận">
</div>


<!-- The Modal -->
<div class="modal fade" id="myModal">
	<div class="modal-dialog">
		<div class="modal-content">

			<!-- Modal Header -->
			<div class="modal-header">
				<h4 class="modal-title">Change Data</h4>
				<button type="button" class="close" data-dismiss="modal">&times;</button>
			</div>

			<!-- Modal body -->
			<div class="modal-body">
				<div class="row">

					<form action="{{route('crequest_leader_dn')}}" method="post" enctype="multipart/form-data">
						{{csrf_field()}}

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

						<div class="form-group col-md-6">
							<label for="assign">Assign</label>
							<br>
							<select name="assign" id="assign" class="form-control">
								<option value="2">nhân viên 1</option>
								<option value="3">nhân viên 2</option>
								<option value="4">nhân viên 3</option>
								<option value="5">nhân viên 4</option>
							</select>
						</div>

						<div class="form-group col-md-6">
								<label for="trangthai">Thay đổi trạng thái</label>
								<br>
								<select name="trangthai" id="trangthai" class="form-control">
									<option value="2">New</option>
									<option value="3">Inprogress</option>
									<option value="4"> Resolved</option>
									<option value="5">Feedback</option>
									<option value="6"> Closed</option>
									<option value="7">Cancelled</option>
								</select>
							</div>
					</form>
				</div>
			</div>

			<!-- Modal footer -->
			<div class="modal-footer">
				<input type="submit" class="btn btn-info" value="Lưu thay đổi">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			</div>

		</div>
	</div>
</div>

@endsection @section('js')
<script type="text/javascript">
	$(function () {
		$('#datetimepicker').datetimepicker({
			format: 'DD/MM/YYYY HH:mm:ss'
		});
	});

	CKEDITOR.replace('binhluan');
</script>
@endsection