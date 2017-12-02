@extends('admin.home_leader_hn') @section('css')

<style>
	#button-style .btn {
		margin: 10px;
	}

	#font .glyphicon {
		font-size: 25px;
		margin-bottom: -10px;
		padding-bottom: -15px;
		margin-top: 5px;
	}

	#tieude1 {
		font-family: Helvetica;
		text-shadow: 3px 5px 4px rgba(150, 150, 150, 1);
		font-size: 170%;
	}

	#tieude2 {
		font-family: Helvetica;
		text-shadow: 3px 5px 4px rgba(150, 150, 150, 1);
		font-size: 170%;
	}

	.shadow {
		-webkit-border-radius: 0% 0% 100% 100% / 0% 0% 8px 8px;
		-webkit-box-shadow: rgba(0, 0, 0, .30) 0 2px 3px;
	}

	.fixingbox1 {
		margin: 0 auto;
		margin-top: 10px;
		;

		height: 200px;
		background: #F2F2F2;
		border: 1px solid #ccc;
		box-shadow: 1px 1px 2px #fff inset,
		-1px -1px 2px #fff inset;
		border-radius: 3px/6px;
	}

	.fixingbox2 {
		margin: 0 auto;
		margin-top: 10px;
		margin-bottom: 10px;

		height: 70px;
		background: #F2F2F2;
		border: 1px solid #ccc;
		box-shadow: 1px 1px 2px #fff inset,
		-1px -1px 2px #fff inset;
		border-radius: 3px/6px;
	}
</style>
<link href="//cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/build/css/bootstrap-datetimepicker.css"
 rel="stylesheet" /> @endsection @section('main')
<!--tiep tuc lam front end -->



<div class="row">
	<div class="col-md-9" id="font">
		<span class="glyphicon glyphicon-globe col-md-1"></span>
		<p id="tieude1">{{ $edit_data->subject }}</p>
	</div>
	@if($check_status == false)
	<div class="col-md-3">
		<button id="button-style" type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal">
			Change Data
		</button>

	</div>
	@endif
	
	<div class="hienthi">
		<div class="col-md-4">
			<div>
				<b class="col-md-6">Ngày tạo:</b>
			</div> {{ $edit_data->created_at -> format('d/m/Y')}}

			<div>
				<b class="col-md-6">Người yêu cầu:</b>
			</div> {{$edit_data->employee_cre}}

			<div>
				<b class="col-md-6">Mức độ ưu tiên:</b>
			</div> {{$edit_data->priority}}


		</div>
		<div class="col-md-4">
			<div>
				<b class="col-md-6">Ngày hết hạn:</b>
			</div> {{ $edit_data->deadline }}

			<div>
				<b class="col-md-6">Người thực hiện:</b>
			</div> {{$edit_data->employee_assi}}

			<div>
				<b class="col-md-6">Trạng thái:</b>
			</div> {{$edit_data->status}}

		</div>
		<div class="col-md-4">
			<div>
				<b class="col-md-6">Bộ phận IT:</b>
			</div> {{ $edit_data->team_id }}

			<div>
				<b class="col-md-6">Người liên quan:</b>
			</div> {{$edit_data->nguoi_lien_quan}}

		</div>
	</div>

</div>
<br>
<br>
<div class="row">
	<div class="col-md-9" id="font">
		<span class="glyphicon glyphicon-user col-md-1"></span>
		<p id="tieude2">Nội Dung</p>
	</div>
	<div class="col-md-12 shadow">
		<div class="fixingbox1 col-md-12">
			<h2 class="col-md-12">{!!$edit_data->content!!}</h2>
		</div>

	</div>
</div>
<br>
<br>




<!--chu ý phần này hộ cái nhé-->
<div class="row" id="result-comment-mysql">
	<div class="form-group">
		<!--comment mysql result dữ liệu trước khi nhấn nút bình luận và khi nhấn bình luận cái này sẽ hide đi-->
		@foreach($comment_data as $item)
		<label>{{$item->employee}}</label>
		<br>
		<div>
			<p class="glyphicon glyphicon-time">{{$item->created_at}}</p>
		</div>
		<div class="col-md-12 shadow">
			<div class="fixingbox2 col-md-12">
				<h6 class="col-md-12">{{$item->content}}</h6>
			</div>
		</div>
		@endforeach
	</div>
</div>


<div class="row">
	<div id="result-comment" class="form-group">
		<!--comment ajax result sau khi bình luận xong cái này sẽ suất hiện 1 list danh giống như ở trên kèm theo cái bình luận vừa submit. theo ajax để tránh bị trùng nên tôi đã hide phần trên-->
	</div>
</div>
<br>
<br>



<!---->







<form action="" method="post" enctype="multipart/form-data">
	{{csrf_field()}}

	<div class="form-group">
		<label for="binhluan">Bình luận</label>
		<br/>

		<select id="comment_vl" class="form-control">
			<option value="" selected disabled>Chọn loại comment</option>
			<option value="0">Comment Bình thường</option>
			<option value="1">Comment Đánh giá</option>
			<option value="2">Comment thay đổi mức độ ưu tiên</option>
			<option value="3">Comment thay đổi deadline</option>
		</select>
		<br>
		<!--phần này sẽ chạy trpng jquery ở duwosi-->
		<div id="showtextarea">
			<!--textarea-->
		</div>


	</div>
	<button id="comment" class="btn btn-primary" type="submit" style="display: none">Gửi Bình Luận</button>

</form>
<br>
<br>
<br>

<!-- The Modal -->
<div class="modal fade" id="myModal">
	<div class="modal-dialog">
		<div class="modal-content">
			<form action="{{route('edit_leader_hn',$edit_data->id)}}" method="post" enctype="multipart/form-data">
				<!-- Modal Header -->
				<div class="modal-header">
					<h4 class="modal-title">Change Data</h4>
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>

				<!-- Modal body -->
				<div class="modal-body">
					<div class="row">


						{{csrf_field()}}

						<div class="form-group col-md-6">
							<label for="Mucdouutien">Mức độ ưu tiên</label>
							<br>
							<select name="priority" id="priority" class="form-control">
								@foreach($priority_data as $item) @if($edit_data->priority == $item->name_priority)
								<option value="{{$item->id}}" selected>{{$item->name_priority}}</option>
								@else
								<option value="{{$item->id}}">{{$item->name_priority}}</option>
								@endif @endforeach
							</select>
						</div>

						<div class="form-group col-md-6">
							<label for="ngayhethan">Ngày hết hạn</label>
							<div class="form-group">
								<div class="input-group date" id="datetimepicker">
									<input value="{{$edit_data->deadline}}" type="text" class="form-control" name="deadline" required/>
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
								<option value="" selected>Chọn bộ phận IT</option>
								@foreach($team_data as $item)

								<option value="{{$item->id}}">{{$item->team_name}}</option>

								@endforeach


							</select>
						</div>

						<div class="form-group col-md-6">
							<label for="nguoilienquan">Người liên quan</label>
							<br>
							<input value="{{$edit_data->nguoi_lien_quan}}" type="text" name="nguoi_lien_quan" id="nguoilienquan" class="form-control"
							/>
						</div>




						<div id="result" class="form-group col-md-6">
							<!--show ajax assign-->
						</div>




						<div class="form-group col-md-6">
							<label for="trangthai">Thay đổi trạng thái</label>
							<br>
							<select name="trangthai" id="trangthai" class="form-control">
								@foreach($status_data as $item) @if($edit_data->status == $item->name_status)
								<option value="{{$item->id}}" selected>{{$item->name_status}}</option>
								@else
								<option value="{{$item->id}}">{{$item->name_status}}</option>
								@endif @endforeach
							</select>
						</div>


					</div>
				</div>

				<!-- Modal footer -->
				<div class="modal-footer">
					<input type="submit" class="btn btn-info" value="Lưu thay đổi">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				</div>

			</form>
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

</script>


<script type="text/javascript">
	$(document).ready(function(){
        $.ajaxSetup({
	    headers: {
	        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
	    }
	});
        
        $('#bophanit').change(function(){
           
            var bophanit = $(this).val();
            
            $.ajax({
                url: "/leader/HaNoi/sua/{{$edit_data->id}}/ajax",
                type: "POST",
                datatype: "text",
                data: {
                    bophanit: bophanit
                },
                success: function(response)
                {
                    console.log(response);
                    $('#result').html(response);
                },
                
            });
        });
        $('#comment_vl').change(function(){
            
            
            $('#comment').show();
            $('#showtextarea').empty();
            var valuecmt = $(this).val();
            

            if(valuecmt == 0){
                $('#showtextarea').css({"display": "true"});
                $('#showtextarea').append('<textarea name="binhluan" id="binhluan2" class="col-md-12" rows="10"></textarea>');
                
            }
            if(valuecmt == 1){
                $('#showtextarea').css({"display": "true"});
                $('#showtextarea').append('<textarea name="binhluan" id="binhluan2" class="col-md-12" rows="10">Đánh giá:</textarea>');
                
            }
            if(valuecmt == 2){
               $('#showtextarea').css({"display": "true"});
                $('#showtextarea').append('<textarea name="binhluan" id="binhluan2" class="col-md-12" rows="10">Mức độ ưu tiên:{{$edit_data->priority}}=></textarea>');
                
            }
            if(valuecmt == 3){
                $('#showtextarea').css({"display": "true"});
                $('#showtextarea').append('<textarea name="binhluan" id="binhluan2" class="col-md-12" rows="10">Thay đổi deadline:{{$edit_data->deadline}}=></textarea>');
                
            }
        });
        
        $('#comment').click(function(e){
            e.preventDefault();
           
            $('#result-comment-mysql').hide();
            $('#comment').hide();
            $('#binhluan2').value = '';
            var binhluan = $('#binhluan2').val();
            var user = {{$id_user}};
            var ticket = {{$edit_data->id}};
            $.ajax({
                url: "/leader/HaNoi/sua/{{$edit_data->id}}/comment-ajax",
                type: "POST",
                datatype: "text",
                data: {
                    binhluan: binhluan,
                    user: user,
                    ticket: ticket
                },
                success: function(response)
                {         
                    console.log(response);
                    $('#result-comment').html(response);
                },
                
            });
            $('#showtextarea').empty();
        });
    });

</script>
@endsection