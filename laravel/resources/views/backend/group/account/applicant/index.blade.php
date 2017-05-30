@extends('backend.layout.master')

@section('content-header')
    บัญชีผู้ใช้ <small>กลุ่ม Applicant</small>
@endsection

@section('style')
<style>
    td {
        vertical-align: middle !important;
    }
</style>
@endsection

@section('content')

    <div class="box box-solid box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">กล่องควบคุม</h3>
        </div>
        <div class="box-body">

        </div>
    </div>

    <div class="box box-solid box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">จำนวนปัจจุบัน</h3>
        </div>
        <div class="box-body">
            <table class="table table-bordered table-hover">
                <thead>
                <tr>
                    <th>Camp</th>
                    <th>Application</th>
                    <th>Game</th>
                    <th>Network</th>
                    <th>IoT</th>
                    <th>Datasci</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>SELECT</td>
                    @foreach($camps as $camp)
                        <td class="{{ $camp->name }}-select">{{ $count[$camp->name][0] }}</td>
                    @endforeach
                </tr>
                <tr>
                    <td>RESERVE</td>
                    @foreach($camps as $camp)
                        <td class="{{ $camp->name }}-reserve">{{ $count[$camp->name][1] }}</td>
                    @endforeach
                </tr>
                <tr>
                    <td>EVIDENCE_PENDING</td>
                    @foreach($camps as $camp)
                        <td class="{{ $camp->name }}-confirm">{{ $count[$camp->name][2] }}</td>
                    @endforeach
                </tr>
                <tr>
                    <td>CONFIRM</td>
                    @foreach($camps as $camp)
                        <td class="{{ $camp->name }}-confirm">{{ $count[$camp->name][3] }}</td>
                    @endforeach
                </tr>
                <tr>
                    <td>CANCEL</td>
                    @foreach($camps as $camp)
                        <td class="{{ $camp->name }}-cancel">{{ $count[$camp->name][4] }}</td>
                    @endforeach
                </tr>
                </tbody>
            </table>
            <span class="text-info"><b>*แถบสีฟ้า</b></span> ไม่ได้ตอบคำถามรองประธาน <br />
            <span class="text-warning"><b>*แถบสีเหลือง</b></span> เด็กแคมป์เก่า <br />
            <span class="text-danger"><b>*แถบสีแดง</b></span> เด็กแคมป์เก่าและไม่ได้ตอบคำถาม <br />
        </div>
    </div>

    <div class="box box-default">
        <div class="box-body">
            <table class="table table-bordered applicant-accounts">
                <thead>
                    <tr>
                        <th width="50">ID</th>
                        <th>Username</th>
                        <th>Name</th>
                        <th>ค่าย</th>
                        <th>การส่งหลักฐาน</th>
                        <th>สถานะการสมัคร</th>
                        <th>สถานะบัญชี</th>
                        <th>แก้ไข</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($applicants as $applicant)
                        <tr>
                            <td>{{ $applicant->user->id }}</td>
                            <td>{{ $applicant->user->username }}</td>
                            <td><a href="{{ route('view.backend.applicants.detail', ['id' => $applicant->id]) }}" target="_blank">{{ $applicant->getDetailValue("p_name").$applicant->getDetailValue("f_name")." ".$applicant->getDetailValue("l_name") }}</a></td>
                            <td>@lang('camp.'.$applicant->camp->name)</td>
                            <td>{{ $applicant->evidences->count() > 0 ? __('evidence_state.'.$applicant->evidences->first()->state) : 'ยังไม่ส่ง' }}</td>
                            <td>{{ $applicant->state }}</td>
                            <td>{{ $applicant->user->active ? 'เปิด' : 'ปิด' }}</td>
                            <td><a href="{{ route('view.backend.account.applicant.update', ['id' => $applicant->id]) }}" class="btn btn-info btn-sm" target="_blank"><i class="fa fa-wrench" aria-hidden="true"></i> แก้ไขบัญชี</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection

@section('script')
    <script type="text/javascript">
        var dTable = $("table.table.applicant-accounts").DataTable({
            "paging": true,
            "lengthChange": false,
            "ordering": true,
            "info": true,
            "autoWidth": false
        });

        $(function() {
            var camp = {
                "camp_app": "@lang("camp.camp_app")",
                "camp_game": "@lang("camp.camp_game")",
                "camp_network": "@lang("camp.camp_network")",
                "camp_iot": "@lang("camp.camp_iot")",
                "camp_datasci": "@lang("camp.camp_datasci")",
            };

            var check = {
                "PENDING": '(PENDING)',
                "CHECKED": '(CHECKED|COMPLETE|SELECT|RESERVE|FAIL|CONFIRM_SELECT|CONFIRM_RESERVE|CANCEL_SELECT|CANCEL_RESERVE)',
                "REJECT": '(REJECT)',
            }

            var clearSearch = function() {
                dTable.column(2).search('').draw();
                dTable.column(3).search('').draw();
            };

            $("#btn-clear-search").click(function() {
                clearSearch();
            });

            $("#camp-control button.btn").each(function(i, e) {
                e = $(e);
                e.click(function() {
                    clearSearch();
                    dTable.column(2).search(camp[e.data('target')]).draw();
                });
            });

            $("#status-control button.btn").each(function(i, e) {
                e = $(e);
                e.click(function() {
                    clearSearch();
                    dTable.column(3).search(check[e.data('target')], true).draw();
                });
            });
        });
    </script>
@endsection