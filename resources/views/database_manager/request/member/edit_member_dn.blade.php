@extends('admin.home_member_dn') @section('css')
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

		height: auto;
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

		height: auto;
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



	<div class="hienthi">
		<div class="col-md-4">
			<div>
				<b class="col-md-6">Ngày tạo:</b>
			</div> {{ date('d/m/Y',strtotime($edit_data->created_at)) }}

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
			</div> {{ date('d/m/Y H:m:s',strtotime($edit_data->deadline)) }}

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
		<div name="noidung" id="noidung" class="form-control fixingbox2">
			<h2 style="text-align: center; font-weight: bold;">{!! $edit_data->content !!}</h2>
		</div>
	</div>
</div>
<br>
<br>
<div class="row">
	<div class="col-md-9" id="font">
		<span class="glyphicon glyphicon-picture  col-md-1"></span>
		<p id="tieude2">Ảnh thông tin yêu cầu</p>
	</div>
	<div class="col-md-12 shadow">
	    @if($edit_data->url_image == null)
	        <img src="{{ URL::asset('public/default.jpg') }}">
	    @else
	    <img src="{{ URL::asset($edit_data->url_image) }}" style="width:100%">
	     @endif

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
				<h6 class="col-md-12">{!!$item->content!!}</h6>
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
{{-- test merge branch quanghung2--}}
{{-- i dont know what im doing --}}
{{-- doing deo j --}}
{{-- fuck --}}
@endsection @section('js')
<script type="text/javascript">
	$(function () {
		$('#datetimepicker').datetimepicker(
			{format:'YYYY/MM/DD HH:mm:ss'}
		);
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
           /*alert($(this).val());*/
            var bophanit = $(this).val();

            $.ajax({
                url: "/member/DaNang/sua/{{$edit_data->id}}/ajax",
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
			$("#binhluan2").wysihtml5();
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
                url: "/member/DaNang/sua/{{$edit_data->id}}/comment-ajax",
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
