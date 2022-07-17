@extends('users.admin.layouts.login')
@section('styles')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <link rel="stylesheet" type="text/css" href="https://npmcdn.com/flatpickr/dist/themes/material_green.css">
@endsection
@section('content')

    <!-- begin:: Content -->
    <div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">
        <!-- begin:: Content Head -->
        <div class="kt-subheader  kt-grid__item" id="kt_subheader">
            <div class="kt-container  kt-container--fluid ">
                <div class="kt-subheader__main">

                    <h3 class="kt-subheader__title">{{ isset($document) ? 'تعديل بيانات الوثيقة' : 'إضافة وثيقة' }}</h3>

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
                            action="{{ isset($document) ? route('documents.update', $document->id) : route('documents.store') }}"
                            method="POST" enctype="multipart/form-data">
                            <div class="kt-portlet__body">
                                <div class="form-group form-group-last">
                                    <div class="alert alert-secondary" role="alert">
                                        <div class="alert-icon"><i class="flaticon-warning kt-font-brand"></i></div>
                                        <div class="alert-text">
                                            يمكنك إضافة وثيقة جديدة من هنا.
                                        </div>
                                    </div>
                                </div>
                                @csrf
                                @if (isset($document))
                                    @method('PUT')
                                @endif
                                <div class="form-group">
                                    <label>المريض</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text">
                                            <i class="fa fa-user-circle" aria-hidden="true"></i></span></div>
                                        @if (isset($patients))
                                            <select class="form-control" name="patient" id="patient">
                                                <option>إخترالمريض</option>
                                                @foreach ($patients as $patient)
                                                    <option value="{{ $patient->id }}"
                                                        @if (isset($document)) {{ $patient->id == $document->patient_id ? 'selected' : '' }} @endif>
                                                        {{ $patient->first_name . ' ' . $patient->last_name }}</option>
                                                @endforeach
                                            </select>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>الطبيب</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text">
                                            <i class="fa fa-user-circle" aria-hidden="true"></i></span></div>
                                        @if (isset($doctors))
                                            <select class="form-control" name="doctor" id="doctor">
                                                <option>إخترالطبيب</option>
                                                @foreach ($doctors as $doctor)
                                                    <option value="{{ $doctor->id }}"
                                                        @if (isset($document)) {{ $doctor->id == $document->doctor_id ? 'selected' : '' }} @endif>
                                                        {{ $doctor->first_name . ' ' . $doctor->last_name }}</option>
                                                @endforeach
                                            </select>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label>الوصف</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text">
                                            <i class="fa fa-comment" aria-hidden="true"></i></div>
                                        <textarea class="form-control" name="description" id="description">
                                            @if (isset($document))
                                            {{ $document->description }}@endif
                                        </textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>التاريخ</label>
                                    <div class="input-group date">
                                        <div class="input-group-prepend"><span class="input-group-text"><i
                                                    class="fa fa-calendar"></i></span></div>
                                        <input type="date" class="form-control" name="date" id="date"
                                            value="{{ isset($document) ? $document->date : '' }}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>الوثيقة</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text">
                                            <i class="fa fa-file-text" aria-hidden="true"></i></span></div>
                                        <input type="file" class="form-control" name="doc" id="doc"
                                            @if (isset($document)) value="{{ $document->patients_documents }}" @endif
                                            accept="application/msword, application/vnd.ms-excel, application/vnd.ms-powerpoint,text/plain, application/pdf,">
                                    </div>
                                </div>
                            </div>
                            <div class="kt-portlet__foot  d-flex flex-row-reverse">
                                <div class="kt-form__actions">
                                    <input type="submit" value="{{ isset($document) ? 'تحديث' : 'حفظ' }}"
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
    <script>
        flatpickr('#date', {
            altInput: true,
            altFormat: "F j, Y",
            dateFormat: "Y-m-d",
        });
    </script>
@endsection
