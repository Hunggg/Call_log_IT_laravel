@extends('admin.home_subleader_hn')
@section('css')
<!--link css only page here-->

@endsection




@section('main')
<!--thiet ke form html nhap cong viec (request)-->
<p>thiet ke form html nhap cong viec (request)</p>
<table class="table">
    <thead>
      <tr>
        <th>STT</th>
        <th>Tên công việc</th>
        <th>Mức độ ưu tiên</th>
        <th>Người yêu cầu</th>
        <th>Người thực hiện</th>
        <th>Ngày hết hạn</th>
        <th>Trạng thái</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>John</td>
        <td>Doe</td>
        <td>john@example.com</td>
        <td>John</td>
        <td>Doe</td>
        <td>john@example.com</td>
        <td>aaaa</td>
      </tr>
      <tr>
        <td>John</td>
        <td>Doe</td>
        <td>john@example.com</td>
        <td>John</td>
        <td>Doe</td>
        <td>john@example.com</td>
        <td>aaaa</td>
      </tr>
      <tr>
       <td>John</td>
        <td>Doe</td>
        <td>john@example.com</td>
        <td>John</td>
        <td>Doe</td>
        <td>john@example.com</td>
        <td>aaaa</td>
      </tr>
    </tbody>
  </table>
@endsection


@section('js')
<script src="{{ URL::asset('public/dist/js/sb-admin-2.js') }}"></script>
@endsection