@extends('backend.layout.master')

@section('content-header')
    จัดการคำถาม <small>คำถามผู้สมัคร</small>
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
            <div class="row">
                <div class="col-xs-12">
                    <!-- small box -->
                    <div class="small-box bg-aqua">
                        <div class="inner">
                            <h3>{{ $questions->count() }}</h3>

                            <p>จำนวนคำถามทั้งหมด</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-android-document"></i>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12">
                    @if(Gate::allows('create', \App\ApplicantDetailKey::class))
                        <a href="{{ route('view.backend.question.applicant.create') }}" class="btn btn-success"><i class="fa fa-plus-circle" aria-hidden="true"></i> เพิ่มคำถามใหม่</a>
                    @else
                        <button type="button" class="btn btn-default" disabled><i class="fa fa-plus-circle" aria-hidden="true"></i> เพิ่มคำถามใหม่</button>
                    @endif
                </div>
            </div>
        </div>
    </div>

    <div class="box box-default">
        <div class="box-body">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th width="70">Priority</th>
                    <th>ID</th>
                    <th>คำถาม</th>
                    <th width="80">แก้ไข</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($questions as $question)
                        <tr>
                            <td>{{ $question->priority }}</td>
                            <td>{{ $question->id }}</td>
                            <td>{{ $question->question }}</td>
                            <td>
                                @if(Gate::allows('update', $question))
                                    <a href="{{ route('view.backend.question.applicant.update', ['id' => $question->id]) }}" class="btn btn-info btn-flat btn-sm"><i class="fa fa-wrench" aria-hidden="true"></i> แก้ไข</a>
                                @else
                                    <button type="button" class="btn btn-default btn-flat btn-sm" disabled><i class="fa fa-wrench" aria-hidden="true"></i> แก้ไข</button>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection