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
                        {{ isset($casehistory) ? 'تعديل بيانات العناية بالمريض' : 'إضافة بيانات العناية بالمريض' }}</h3>

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
                            action="{{ isset($casehistory) ? route('casehistories.update', $casehistory->id) : route('casehistories.store') }}"
                            method="POST" enctype="multipart/form-data">
                            <div class="kt-portlet__body">
                                <div class="form-group form-group-last">
                                    <div class="alert alert-secondary" role="alert">
                                        <div class="alert-icon"><i class="flaticon-warning kt-font-brand"></i></div>
                                        <div class="alert-text">
                                            يمكنك إضافة بيانات العناية بالمريض من هنا.
                                        </div>
                                    </div>
                                </div>
                                @csrf
                                @if (isset($casehistory))
                                    @method('PUT')
                                @endif
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
                                                        @if (isset($casehistory)) {{ $patient->id == $casehistory->patient_id ? 'selected' : '' }} @endif>
                                                        {{ $patient->first_name . ' ' . $patient->last_name }}</option>
                                                @endforeach
                                            </select>
                                        @endif
                                    </div>
                                </div>
                              
                                <div class="form-group" id="dateDiv">
                                    <label>التاريخ</label>
                                    <div class="input-group date">
                                        <div class="input-group-prepend"><span class="input-group-text"><i
                                                    class="fa fa-calendar"></i></span></div>
                                        <input type="date" class="form-control" name="date" id="date"
                                            value="{{ isset($casehistory) ? $casehistory->date : '' }}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>تشخيص الحالة</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i
                                                    class="fa fa-heading"></i></span></div>
                                        <input type="text" class="form-control" name="title"
                                            id="title"@if (isset($casehistory)) value="{{ $casehistory->title }}" @endif>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label>مرض قلبي</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i
                                                    class="fa fa-heading"></i></span></div>
                                        <textarea class="form-control" name="heart_disease" id="heart_disease">
                                            @if (isset($casehistory))
{{ $casehistory->heart_disease }}
@endif
                                        </textarea>

                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>ضغط الدم</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i
                                                    class="fa fa-heading"></i></span></div>
                                        <textarea class="form-control" name="blood_pressure" id="blood_pressure">
                                        @if (isset($casehistory))
{{ $casehistory->blood_pressure }}
@endif
                                        </textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>مريض بالسكر</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i
                                                    class="fa fa-heading"></i></span></div>
                                        <textarea class="form-control" name="diabetic" id="diabetic">
                                        @if (isset($casehistory))
{{ $casehistory->diabetic }}
@endif
                                        </textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>جراحة</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i
                                                    class="fa fa-heading"></i></span></div>
                                        <textarea class="form-control" name="surgery" id="surgery">
                                        @if (isset($casehistory))
{{ $casehistory->surgery }}
@endif
                                        </textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>حادث </label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i
                                                    class="fa fa-heading"></i></span></div>
                                        <textarea class="form-control" name="accident" id="accident">
                                         @if (isset($casehistory))
{{ $casehistory->accident }}
@endif
                                         </textarea>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label>تأمين صحي</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i
                                                    class="fa fa-heading"></i></span></div>
                                        <textarea class="form-control" name="health_insurance" id="health_insurance">
@if (isset($casehistory))
{{ $casehistory->health_insurance }}
@endif
</textarea>

                                    </div>
                                </div>


                                <div class="form-group">
                                    <label>الحالة</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i
                                                    class="fa fa-venus-mars"></i></span></div>
                                        <select class="form-control" name="status" id="status">
                                            <option>إختر الحالة</option>
                                            <option value="نشط"
                                                @if (isset($casehistory)) {{ $casehistory->status == 'نشط' ? 'selected' : '' }} @endif>
                                                نشط
                                            </option>
                                            <option value="غير نشط"
                                                @if (isset($casehistory)) {{ $casehistory->status == 'غير نشط' ? 'selected' : '' }} @endif>
                                                غير نشط
                                            </option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="kt-portlet__foot d-flex flex-row-reverse">
                                <div class="kt-form__actions">
                                    <input type="submit" value="{{ isset($casehistory) ? 'تحديث' : 'حفظ' }}"
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
    <script>
        flatpickr('#date', {
            altInput: true,
            altFormat: "F j, Y",
            dateFormat: "Y-m-d",
        });
    </script>
@endsection
