@extends('users.admin.layouts.app')
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

                    <h3 class="kt-subheader__title">{{ isset($blood_bank) ? 'تعديل بيانات المتبرع' : 'إضافة متبرع جديد' }}
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
                            action="{{ isset($blood_bank) ? route('blood_bank.update', $blood_bank->id) : route('blood_bank.store') }}"
                            method="POST" enctype="multipart/form-data">
                            <div class="kt-portlet__body">
                                <div class="form-group form-group-last">
                                    <div class="alert alert-secondary" role="alert">
                                        <div class="alert-icon"><i class="flaticon-warning kt-font-brand"></i></div>
                                        <div class="alert-text">
                                            يمكنك إضافة متبرع جديد من هنا.
                                        </div>
                                    </div>
                                </div>
                                @csrf
                                @if (isset($blood_bank))
                                @method('PUT')
                                @endif
                                <div class="form-group">
                                    <label>إسم المتبرع الكامل</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i
                                                    class="fa fa-heading"></i></span></div>
                                        <input id="name" class="form-control" type="text" name="name"
                                            value="{{ isset($blood_bank) ? $blood_bank->name : '' }}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>رقم الهوية</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i
                                                    class="fa fa-address-card"></i></span></div>
                                        <input id="national_id" class="form-control" type="number" name="national_id"
                                            value="{{ isset($blood_bank) ? $blood_bank->national_id : '' }}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>العنوان</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i
                                                    class="fa fa-location-arrow"></i></span></div>
                                        <textarea class="form-control" name="address" id="address" cols="30" rows="5">
                                            {{ isset($blood_bank) ? $blood_bank->address : '' }}</textarea>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label>تاريخ الميلاد</label>
                                    <div class="input-group date">
                                        <div class="input-group-prepend"><span class="input-group-text"><i
                                                    class="fa fa-calendar"></i></span></div>
                                        <input type="date" class="form-control" name="birth_date" id="date"
                                            value="{{ isset($blood_bank) ? $blood_bank->birth_date : '' }}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>الجنس</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i
                                                    class="fa fa-venus-mars"></i></span></div>
                                        <select class="form-control" name="gender" id="gender">
                                            <option>إختر الجنس</option>
                                            <option value="male"
                                                @if (isset($blood_bank)) {{ $blood_bank->gender == 'male' ? 'selected' : '' }} @endif>
                                                ذكر
                                            </option>
                                            <option value="female"
                                                @if (isset($blood_bank)) {{ $blood_bank->gender == 'female' ? 'selected' : '' }} @endif>
                                                أنثى
                                            </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label> العمر</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i
                                                    class="fa fa-heading"></i></span></div>
                                        <input type="number" class="form-control" name="age"
                                            id="age" @if (isset($blood_bank)) value="{{ $blood_bank->age }}"
                                             @endif>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>رقم الجوال</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i
                                                    class="fa fa-mobile"></i></span></div>
                                        <input id="mobile" class="form-control" type="number" name="mobile"
                                            value="{{ isset($blood_bank) ? $blood_bank->mobile : '' }}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label> الوزن الحالي (يجب أن لا يقل عن 50 كيلو)</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i
                                                    class="fa fa-heading"></i></span></div>
                                        <input type="number" class="form-control" name="weight"
                                            id="weight"@if (isset($blood_bank)) value="{{ $blood_bank->weight }}" @endif>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>زمرة الدم</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i
                                                    class="fa fa-first-aid"></i></span></div>
                                        <input id="blood_group" class="form-control" type="text" name="blood_group"
                                            value="{{ isset($blood_bank) ? $blood_bank->blood_group : '' }}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>رقم المتبرع</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i
                                                    class="fa fa-number">1</i></span></div>
                                        <input id="donornumber" class="form-control" type="number" name="donornumber"
                                            value="{{ isset($blood_bank) ? $blood_bank->donornumber : '' }}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label> المستشفى/العيادة</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i
                                                    class="fa fa-heading"></i></span></div>
                                        <input id="hospital" class="form-control" type="text" name="hospital"
                                            value="{{ isset($blood_bank) ? $blood_bank->hospital : '' }}">
                                    </div>
                                </div>
                                <div class="form-group" id="dateDiv">
                                    <label>إختر يوم التبرع</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i
                                                    class="fa fa-calendar"></i></span></div>
                                        <input class="form-control" type="date" name="date" 
                                            placeholder="إختيار اليوم"
                                            @if (isset($blood_bank)) value="{{ $blood_bank->date }}" @endif>
                                    </div>
                                </div>
                                <div class="form-group" id="timeSlotsDiv">
                                    <label>إختر الوقت</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i
                                                    class="fa fa-heading"></i></span></div>
                                        <input type="time" name="time" class="form-control"
                                        @if (isset($blood_bank)) value="{{ $blood_bank->time }}" @endif>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>ملاحظات</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i
                                                    class="fa fa-heading"></i></span></div>
                                        <textarea class="form-control" name="notes" id="notes" 
                                        @if (isset($blood_bank)) value="{{ $blood_bank->notes }}" @endif>
                                        </textarea>
                                    </div>
                                </div>

                            </div>
                            <div class="kt-portlet__foot d-flex flex-row-reverse">
                                <div class="kt-form__actions">
                                    <input type="submit" value="{{ isset($blood_bank) ? 'تحديث' : 'حفظ' }}"
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
    <script src="{{ url('adminpanel/assets/js/demo3/pages/crud/forms/widgets/summernote.js') }}" type="text/javascript">
    </script>
@endsection
