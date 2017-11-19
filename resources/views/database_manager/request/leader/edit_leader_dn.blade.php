@extends('admin.home_leader_dn') @section('css')
<style>
    .btn {
        margin: 1px;
    }
</style>
@endsection @section('main')
<!--tiep tuc lam front end -->
<div class="row">
    <div class="col-md-6">
        <h4>Test</h4>
    </div>
    <div class="col-md-6">
        <button type="button" class="btn btn-xs">
            <strong> Thay đổi bộ phận IT</strong>
        </button>
        <button type="button" class="btn btn-xs">
            <strong> Thay đổi mức độ ưu tiên</strong>
        </button>
        <button type="button" class="btn btn-xs">
            <strong> Thay đổi deadline</strong>
        </button>
        <button type="button" class="btn btn-xs">
            <strong> Thay đổi người liên quan</strong>
        </button>
        <button type="button" class="btn btn-xs">
            <strong> Assign</strong>
        </button>
        <div class="dropdown">
            <button class="btn btn-xs dropdown-toggle" type="button" id="menu1" data-toggle="dropdown">
                <strong> Thay đổi trạng thái</strong>
                <span class="caret"></span>
            </button>
            <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
                <li role="presentation">
                    <a role="menuitem" tabindex="-1" onclick="">New</a>
                </li>
                <li role="presentation">
                    <a role="menuitem" tabindex="-1" onclick="">Inprogress</a>
                </li>
                <li role="presentation">
                    <a role="menuitem" tabindex="-1" onclick=""> Resolved</a>
                </li>
                <li role="presentation">
                    <a role="menuitem" tabindex="-1" onclick="">Feedback</a>
                </li>
            </ul>
        </div>
    </div>

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
    casi nay la phan cmt
</div>
@endsection