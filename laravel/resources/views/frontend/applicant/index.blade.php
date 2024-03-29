<!DOCTYPE html>
<html>
    <head>
        <title>Applicant Control | ITCAMP#13</title>

        <meta charset="UTF-8" />
        <meta id="Viewport" name="viewport" content="initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no">
        <meta name="theme-color" content="#292B2C">

        <link rel="icon" type="image/png" href="{{ asset('assets/frontend/favicon/favicon-32x32.png') }}" sizes="32x32" />
        <link rel="icon" type="image/png" href="{{ asset('assets/frontend/favicon/favicon-16x16.png') }}" sizes="16x16" />

        {{--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">--}}
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="{{ asset('assets/frontend/css/app.css') }}?v={{ (int)microtime(true) }}" />
        <link rel="stylesheet" href="{{ asset('assets/frontend/applicant/style.css') }}?v={{ (int)microtime(true) }}" />

        <style>
            @if(isset($applicant))
                body {
                    background: url('{{ asset('assets/frontend/register/bg-'.$applicant->camp->name.'.png') }}') repeat fixed;
                }

                .badge-default {
                    background-color: {{ $colors[0] }};
                }

                .custom-control-input:checked ~ .custom-control-indicator {
                    background-color: {{ $colors[0] }};
                }

                .custom-control-input:active ~ .custom-control-indicator {
                    background-color: {{ $colors[1] }};
                }

                .custom-control-input:focus ~ .custom-control-indicator {
                    box-shadow: 0 0 0 1px #fff, 0 0 0 3px {{ $colors[0] }};
                }

                .form-control:focus {
                    border-color: {{ $colors[1] }};
                }
            @endif
        </style>
        @yield('style')
    </head>

    <body>
        <nav class="navbar fixed-top navbar-inverse bg-inverse navbar-applicant">
            <a href="#" class="nav-hamburger hidden-lg-up" data-toggle="collapse" data-target="#mobileMenu" aria-controls="mobileMenu" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars" aria-hidden="true"></i>
            </a>
            <div class="logo">
                <img src="{{ asset('/assets/frontend/images/logo-only-text.png') }}" />
            </div>
            <div class="nav-menu hidden-md-down">
                <a class="nav-linker active" data-toggle="tab" href="#prepare" role="tab">เตรียมพร้อมพจญภัย</a>
                <a class="nav-linker" data-toggle="tab" href="#download" role="tab">ดาวน์โหลดเอกสาร</a>
                <a class="nav-linker" data-toggle="tab" href="#detail" role="tab">ยืนยันสิทธิ์</a>
                <a class="nav-linker" data-toggle="tab" href="#evidence" role="tab">ส่งหลักฐาน</a>
                <a class="nav-linker" data-toggle="tab" href="#disclaim" role="tab">สละสิทธิ์</a>
            </div>
            <div class="nav-control">
                <a href="{{ route('frontend.applicant.auth.logout') }}" class="btn btn-danger" style="padding: 0.35rem 0.5rem;"><i class="fa fa-sign-out"></i> ออกจากระบบ</a>
            </div>
            <div class="nav-mobile bg-inverse collapse" id="mobileMenu">
                <div class="nav-mobile-menu">
                    <a class="nav-linker active" data-toggle="tab" href="#prepare" role="tab">เตรียมพร้อม</a>
                    <a class="nav-linker" data-toggle="tab" href="#download" role="tab">ดาวน์โหลด</a>
                    <a class="nav-linker" data-toggle="tab" href="#detail" role="tab">ยืนยันสิทธิ์</a>
                    <a class="nav-linker" data-toggle="tab" href="#evidence" role="tab">ส่งหลักฐาน</a>
                    <a class="nav-linker" data-toggle="tab" href="#disclaim" role="tab">สละสิทธิ์</a>
                </div>
            </div>
        </nav>

        <header>
            <div class="container">
                <h3 style="margin-bottom: 0;"><span class="force-fredoka" style="font-size: 1.2em;">ITCAMP#13</span> ระบบยืนยันสิทธิ์</h3>
                <span class="badge badge-pill badge-default">ค่าย @lang('camp.'.$applicant->camp->name)</span>
                <hr />
                <h4><b>ข้อมูลผู้สมัคร</b></h4>
                <b>ชื่อ:</b> {{ $applicant->getDetailValue('p_name').$applicant->getDetailValue('f_name')." ".$applicant->getDetailValue('l_name') }}<br />
                <b>ชื่อเล่น:</b> {{ $applicant->getDetailValue('nickname') }}<br />
                <b>วันที่สมัคร:</b> {{ \Carbon\Carbon::parse($applicant->created_at)->format('d/m/Y') }} <br />
                <b>สถานะปัจจุบัน:</b> @lang('frontend_applicant_state.'.$applicant->state) <br />
                <b>สถานะการส่งหลักฐานยืนยันระดับชั้นที่เรียนในปัจจุบัน:</b> เสร็จสิ้น <br />
                <b>สถานะการส่งหลักฐานยืนยันการโอนเงิน:</b> @lang('evidence_state.'.$evidence_state)
            </div>
        </header>

        <section class="body">
            <div class="container">
                <div class="tab-content">
                    <div class="tab-pane fade" id="detail" role="tabpanel">
                        @include('frontend.applicant.detail')
                    </div>
                    <div class="tab-pane fade" id="evidence" role="tabpanel">
                        @include('frontend.applicant.evidence')
                    </div>
                    <div class="tab-pane fade" id="download" role="tabpanel">
                        @include('frontend.applicant.download')
                    </div>
                    <div class="tab-pane fade show active" id="prepare" role="tabpanel">
                        @include('frontend.applicant.prepare')
                    </div>
                    <div class="tab-pane fade" id="disclaim" role="tabpanel">
                        @include('frontend.applicant.disclaim')
                    </div>
                </div>
            </div>
        </section>

        <div class="modal fade" id="uploadComplete" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalLabel"><b class="text-success">Success</b></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        อัพโหลดหลักฐานการยืนยันสำเร็จ
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">ปิด</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="invitedModal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalLabel"><b>สวัสดีจ้าน้อง</b></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <b>ยินดีด้วย!!</b> น้องได้รับบัตรเชิญ<b>เข้าร่วมกิจกรรมภายในค่าย ITCAMP13</b> กิจกรรมสุดหฤหรรษ์ที่จะพาน้องๆ เข้าสู่ประตูแห่งช่วงเวลาของค่ำคืนมหัศจรรย์... ตะลุย <b>"พิพิธภัณฑ์ Virus 4.0"</b> พิพิธภัณฑ์ไฮเทคสุดพิลึกที่ไม่เคยปรากฏที่ไหนมาก่อน จะเกิดอะไรขึ้นในค่าย <b>ITCAMP13</b> ต้องมาพบกัน!! <span class="break"></span>

                        <b>*คำเตือน - อย่าลืมเตรียมเครื่องแต่งกาย หรือเครื่องประดับที่<u>สะท้อนแสงในที่มืด</u>มาด้วยล่ะ</b> <span class="break"></span>

                        และน้อง ๆ อย่าลืม<b>ดาวน์โหลดเอกสารใบตอบรับผู้ปกครอง</b> ในหน้า<a href="#download" role="tab" data-toggle="tab" onclick="$('#invitedModal').modal('hide');"><b>ดาวน์โหลดเอกสาร</b></a> <br>
                        ให้น้อง ๆ กรอกข้อมูลให้เรียบร้อยแล้วนำมาส่งในวันค่ายที่โต๊ะลงทะเบียนจ้า
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">ปิด</button>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
        <script type="text/javascript">
            var GlobalOption = {};
            GlobalOption.evidence = false;
            @if(session('status'))
                GlobalOption.modal = '{{ session('status') }}';
            @else
                GlobalOption.modal = null;
            @endif

            $('#invitedModal').modal('show');
        </script>
        <script src="{{ asset('assets/frontend/applicant/script.js') }}" type="text/javascript"></script>
    </body>
</html>