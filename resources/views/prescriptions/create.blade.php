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

                    <h3 class="kt-subheader__title">
                        {{ isset($prescription) ? 'تعديل بيانات التقرير' : 'إضافة تقرير' }}</h3>

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
                            action="{{ isset($prescription) ? route('prescriptions.update', $prescription->id) : route('prescriptions.store') }}"
                            method="POST" enctype="multipart/form-data">
                            <div class="kt-portlet__body">
                                <div class="form-group form-group-last">
                                    <div class="alert alert-secondary" role="alert">
                                        <div class="alert-icon"><i class="flaticon-warning kt-font-brand"></i></div>
                                        <div class="alert-text">
                                           يمكنك إضافة تقرير جديد من هنا.
                                        </div>
                                    </div>
                                </div>
                                @csrf
                                @if (isset($prescription))
                                    @method('PUT')
                                @endif
                                <div class="form-group">
                                    <label>المريض</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i
                                                    class="fa fa-heading"></i></span></div>
                                        @if (isset($patients))
                                            <select class="form-control" name="patient" id="patient">
                                                <option>إختيار مريض</option>
                                                @foreach ($patients as $patient)
                                                    <option value="{{ $patient->id }}"
                                                        @if (isset($prescription)) {{ $patient->id == $prescription->patient_id ? 'selected' : '' }} @endif>
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
                                                <option>إختيار طبيب</option>
                                                @foreach ($doctors as $doctor)
                                                    <option value="{{ $doctor->id }}"
                                                        @if (isset($prescription)) {{ $doctor->id == $prescription->doctor_id ? 'selected' : '' }} @endif>
                                                        {{ $doctor->first_name . '' . $doctor->last_name }}</option>
                                                @endforeach
                                            </select>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group" id="dateDiv">
                                    <label>تاريخ الدخول</label>
                                    <div class="input-group date">
                                        <div class="input-group-prepend"><span class="input-group-text"><i
                                                    class="fa fa-calendar"></i></span></div>
                                        <input type="date" class="form-control" name="date" id="date"
                                            value="{{ isset($prescription) ? $prescription->date : '' }}">
                                    </div>
                                   
                                </div>
                               
                           
                                <div class="form-group">
                                    <label>الأعراض</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i
                                                    class="fa fa-heading"></i></span></div>
                                        <textarea class="form-control" name="symptoms" id="symptoms">
                                        @if (isset($prescription)){{ $prescription->symptoms }}@endif
                                        </textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>التشخيص</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i
                                                    class="fa fa-heading"></i></span></div>
                                        <textarea class="form-control" name="diagnosis" id="diagnosis">
                                            @if (isset($prescription)){{ $prescription->diagnosis }}@endif
                                        </textarea>
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label>الدواء</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i
                                                    class="fa fa-heading"></i></span></div>
                                        <textarea class="form-control" name="advice" id="advice">
                                            @if (isset($prescription)) {{ $prescription->advice }} @endif
                                        </textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="kt-portlet__foot d-flex flex-row-reverse">
                                <div class="kt-form__actions">
                                    <input type="submit" value="{{ isset($prescription) ? 'تحديث' : 'حفظ' }}"
                                        class="btn-lg btn-primary">
                                    <input type="reset" class="btn-lg btn-danger" value="إلغاء">
                                </div>
                            </div>
                        </form>
                        <br>
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
    <script src="{{ url('adminpanel/assets/js/demo3/pages/crud/forms/widgets/form-repeater.js') }}" type="text/javascript">
    </script>

    <script>
        /*$("#medicine_exist").change(function () {

            });*/
        flatpickr('#date', {
            altInput: true,
            altFormat: "F j, Y",
            dateFormat: "Y-m-d",
        });
    </script>
@endsection
