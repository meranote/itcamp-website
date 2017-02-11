@extends('backend.layout.master')

@section('content-header', 'แก้ไขคำถาม '.$data['question']->id)

@section('content')

    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">ฟอร์มบัญชีผู้ใช้สำหรับ Staff</h3>
        </div>
        <form class="form-horizontal" action="{{ route("backend.question.update", ['id' => $data['question']->id]) }}" method="post">
            {{ csrf_field() }}

            <div class="box-body">
                <div class="form-group">
                    <label for="inputQuestion" class="col-sm-2 control-label">คำถาม</label>

                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputQuestion" name="question" placeholder="Question" value="{{ $data['question']->question }}">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputDescription" class="col-sm-2 control-label">คำอธิบายเพิ่มเติม</label>

                    <div class="col-sm-10">
                        <textarea class="form-control" rows="3" id="inputDescription" name="description" placeholder="Description">{{ $data['question']->description }}</textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputSection" class="col-sm-2 control-label">ของฝ่าย</label>

                    <div class="col-sm-10">
                        <select class="form-control" id="inputSection" name="section">
                            @foreach($data['sections'] as $section)
                                @if($section->has_question)
                                    <option value="{{ $section->id }}" {{ $data['question']->section->id == $section->id ? "selected" : "" }}>@lang('section.'.$section->name)</option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputId" class="col-sm-2 control-label">ID</label>

                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputId" name="id" placeholder="ID" value="{{ $data['question']->id }}" disabled>
                        <p class="help-block" style="margin-bottom: 0;">
                            <span class="text-red">**Field ID แก้ไขไม่ได้ (ถ้าจำเป็นต้องแก้บอกฝ่ายเว็บ)</span>
                        </p>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPriority" class="col-sm-2 control-label">Priority</label>

                    <div class="col-sm-10">
                        <input type="number" class="form-control" id="inputPriority" name="priority" placeholder="Priority" value="{{ $data['question']->priority }}">
                        <p class="help-block" style="margin-bottom: 0;">
                            ลำดับความสำคัญในการขึ้นก่อน - หลัง (เลขยิ่งมาก ยิ่งมีความสำคัญสูง - ขึ้นก่อน)
                        </p>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputFieldType" class="col-sm-2 control-label">Field Type</label>

                    <div class="col-sm-10">
                        <select class="form-control" id="inputFieldType" name="field_type">
                            @foreach($data['field_types'] as $fieldType)
                                <option value="{{ $fieldType }}" {{ $data['question']->field_type == $fieldType ? "selected" : "" }}>{{ $fieldType }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputFieldSetting" class="col-sm-2 control-label">Field Setting</label>

                    <div class="col-sm-10">
                        <textarea class="form-control" rows="10" id="inputFieldSetting" name="field_setting" placeholder="Field_setting" style="font-family: Menlo,Monaco,Consolas,'Courier New',monospace">{{ $data['question']->field_setting }}</textarea>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <pre id="FieldTypeDescribe"></pre>
                    </div>
                </div>
            </div>


            <div class="box-footer">
                <a href="{{ route("view.backend.question") }}" class="btn btn-default">ยกเลิกการแก้ไข</a>
                <div class="btn-group pull-right" role="group">
                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#confirmDeleteModal">ลบคำถามนี้</button>
                    <button type="submit" class="btn btn-info">บันทึกการแก้ไข</button>
                </div>
            </div>
        </form>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="confirmDeleteModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">ยืนยันการลบคำถาม</h4>
                </div>
                <div class="modal-body">
                    ต้องการลบคำถามนี้หรือไม่
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">ไม่</button>
                    <a href="{{ route('backend.question.delete', ['id' => $data['question']->id]) }}" class="btn btn-danger">ลบคำถามนี้</a>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('script')
    <script src="{{ asset('assets/backend/js/field_type_describe.js') }}" type="text/javascript"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            initFieldTypeSettingDescribe($('#inputFieldType'), null, $('#FieldTypeDescribe'));
        });
    </script>
@endsection