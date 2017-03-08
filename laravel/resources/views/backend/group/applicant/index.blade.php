@extends('backend.layout.master')

@section('content-header')
    จัดการผู้สมัคร
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

    <div class="box box-default">
        <div class="box-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th width="60">ID</th>
                        <th>ชื่อ - นามสกุล</th>
                        <th>ค่าย</th>
                        <th>สถานะการสมัคร</th>
                        <th width="80">แก้ไข</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($applicants as $applicant)
                        {{-- TODO add created_at (regis time) / updated_at columns --}}
                        <?php

                        $p_name = null;
                        $p_name_key = json_decode($applicant->applicantDetails->find('p_name')->pivot->answer, True)['value'];
                        $p_name_setting = json_decode(\App\ApplicantDetailKey::find('p_name')->field_setting, True)['lists'];
                        foreach ($p_name_setting as $item) {
                            if($p_name_key == $item['key']) {
                                $p_name = $item['text'];
                                break;
                            }
                        }

                        $f_name = json_decode($applicant->applicantDetails->find('f_name')->pivot->answer, True)['value'];
                        $l_name = json_decode($applicant->applicantDetails->find('l_name')->pivot->answer, True)['value'];
                        ?>

                        <tr>
                            <td>{{ $applicant->id }}</td>
                            <td>{{ ($p_name != 'อื่นๆ' ? $p_name : '').$f_name." ".$l_name }}</td>
                            <td>@lang("camp.".$applicant->camp->name)</td>
                            <td>{{ $applicant->state }}</td>
                            <td><a href="{{ route('view.backend.applicants.detail', ['id' => $applicant->id]) }}" class="btn btn-info btn-flat btn-sm"><i class="fa fa-wrench" aria-hidden="true"></i> แก้ไข</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection