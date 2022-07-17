@extends('users.admin.layouts.login')
@section('styles')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <link rel="stylesheet" type="text/css" href="https://npmcdn.com/flatpickr/dist/themes/material_green.css">
@endsection
@section('content')

    <!-- begin:: Content -->
    <div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor col-12" id="kt_content">
        <!-- begin:: Content Head -->
        <div class="kt-subheader  kt-grid__item" id="kt_subheader">
            <div class="kt-container  kt-container--fluid ">
                <div class="kt-subheader__main">

                    <h3 class="kt-subheader__title">{{ isset($lapreport) ? 'تعديل بيانات التقرير' : 'إضافة تقرير المختبر' }}
                    </h3>

                    <span class="kt-subheader__separator kt-subheader__separator--v"></span>

                </div>
            </div>
        </div>
        <!-- end:: Content Head -->

        <!-- begin:: Content Container-->
        <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid col-12">
            <div class="row">
                <div class="offset col-md-12">
                    <!--begin::Portlet-->
                    <div class="kt-portlet">
                        
                        <!--begin::Form-->
                        <form class="kt-form kt-form--label-right"
                            action="{{ isset($lapreport) ? route('lapreports.update', $lapreport->id) : route('lapreports.store') }}"
                            method="POST" enctype="multipart/form-data">
                            <div class="kt-portlet__body">
                                <div class="form-group form-group-last">
                                    <div class="alert alert-secondary" role="alert">
                                        <div class="alert-icon"><i class="flaticon-warning kt-font-brand"></i></div>
                                        <div class="alert-text">
                                            يمكنك إضافة تقرير مختبر جديد من هنا.
                                        </div>
                                    </div>
                                </div>
                                @csrf
                                @if (isset($lapreport))
                                    @method('PUT')
                                @endif
                                <div class="form-group">
                                    <label>الصورة</label>
                                    <div>
                                        <div class="kt-avatar kt-avatar--outline kt-avatar--circle-" id="kt_user_edit_avatar">
                                            <div class="kt-avatar__holder" @if(isset($lapreport)) @if(strpos($lapreport->picture,'users_pictures')!==false) style="background-image: url({{asset('storage/'.$lapreport->picture)}})" @else style="background-image: url({{$lapreport->picture}})" @endif  @else style="background-image: url(&quot;http://keenthemes.com/metronic/preview/default/custom/user/assets/media/users/300_20.jpg&quot;);" @endif>

                                            </div>
                                            <label class="kt-avatar__upload" data-toggle="kt-tooltip" title="" data-original-title="Change avatar">
                                                <i class="fa fa-pen"></i>
                                                <input type="file" name="picture" accept=".png, .jpg, .jpeg">
                                            </label>
                                            <span class="kt-avatar__cancel" data-toggle="kt-tooltip" title="" data-original-title="Cancel avatar">
                                                    <i class="fa fa-times"></i>
                                                </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>التاريخ</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i
                                                    class="fa fa-calendar"></i></span></div>
                                        <input class="form-control date" type="date" name="date"
                                            placeholder="Select Date"
                                            @if (isset($lapreport)) value="{{ $lapreport->date }}" @endif>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>الوقت</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="fa fa-clock"></i>
                                            </span>
                                        </div>
                                        <input class="form-control timepicker" id="time" name="time"
                                            placeholder="Select time" type="time"
                                            @if (isset($lapreport)) value="{{ $lapreport->time }}" @endif>

                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>المريض</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i
                                                    class="fa fa-heading"></i></span></div>
                                        @if (isset($patients))
                                            <select class="form-control" name="patient" id="patient">
                                                <option>إختر المريض</option>
                                                @foreach ($patients as $patient)
                                                    <option value="{{ $patient->id }}"
                                                        @if (isset($lapreport)) {{ $patient->id == $lapreport->patient_id ? 'selected' : '' }} @endif>
                                                        {{ $patient->first_name . '' . $patient->last_name }}</option>
                                                @endforeach
                                            </select>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>الطبيب</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i
                                                    class="fa fa-heading"></i></span></div>
                                        @if (isset($doctors))
                                            <select class="form-control" name="doctor" id="doctor">
                                                <option>إختر الطبيب</option>
                                                @foreach ($doctors as $doctor)
                                                    <option value="{{ $doctor->id }}"
                                                        @if (isset($lapreport)) {{ $doctor->id == $lapreport->doctor_id ? 'selected' : '' }} @endif>
                                                        {{ $doctor->first_name . '' . $doctor->last_name }}</option>
                                                @endforeach
                                            </select>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>النموذج</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i
                                                    class="fa fa-heading"></i></span></div>
                                        @if (isset($templates))
                                            <select class="form-control" name="template" id="template">
                                                <option>إختر النموذج</option>
                                                @foreach ($templates as $template)
                                                    <option value="{{ $template->id }}"
                                                        @if (isset($lapreport)) {{ $template->id == $lapreport->template_id ? 'selected' : '' }} @endif>
                                                        {{ $template->name }}</option>
                                                @endforeach
                                            </select>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>التشخيص</label>
                                    <div class="input-group">
                                        <textarea name="report" id="summernote" class="summernote" cols="50" rows="5">{{ isset($lapreport) ? $lapreport->report : '' }}</textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="kt-portlet__foot d-flex flex-row-reverse">
                                <div class="kt-form__actions">
                                    <input type="submit" value="{{ isset($lapreport) ? 'تحديث' : 'حفظ' }}"
                                        class="btn-lg btn-primary">
                                    <input type="reset" class="btn-lg btn-danger" value="إلغاء">
                                </div>
                            </div>
                        </form>
                        <!--end::Form-->
                    </div>
                    <!--end::Portlet-->
                </div>
            </div>
        </div>
        <!-- end:: Content Container-->
    </div>
    <!-- begin:: Content -->

@endsection

@section('scripts')
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script src="{{ url('adminpanel') }}/assets/js/demo3/pages/crud/forms/widgets/summernote.js" type="text/javascript">
    </script>
    <script>
        jQuery(document).ready(function() {
            //$('#summernote').summernote('codeview.toggle');
            /*ajax to get template by template id*/
            $("#template").change(function() {
                $.ajax({
                    url: "{{ route('get-template-by-id') }}?id=" + $(this).val(),
                    method: 'GET',
                    success: function(data) {
                        var content = data.html;

                        $('.summernote').summernote('code', content);

                        //$('#summernote').summernote('codeview.toggle');
                    }
                });
            });

            // create flat picker with specific Week Days
            $(".date").flatpickr({
                altInput: true,
                altFormat: "F j, Y",
                dateFormat: "Y-m-d",
                minDate: "today",
            });

            $('.timepicker').timepicker({
                minuteStep: 5,
                format: 'H:i',
                showSeconds: false,
                showMeridian: false,
                snapToStep: true
            });
        });
    </script>
@endsection
