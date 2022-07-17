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

                    <h3 class="kt-subheader__title">{{ isset($donor) ? 'تعديل بيانات التبرع' : 'إضافة تبرع جديد' }}
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
                            action="{{ isset($donor) ? route('donor.update', $donor->id) : route('donor.store') }}"
                            method="POST" enctype="multipart/form-data">
                            <div class="kt-portlet__body">
                                <div class="form-group form-group-last">
                                    <div class="alert alert-secondary" role="alert">
                                        <div class="alert-icon"><i class="flaticon-warning kt-font-brand"></i></div>
                                        <div class="alert-text">
                                            يمكنك إضافة تبرع جديد من هنا.
                                        </div>
                                    </div>
                                </div>
                                @csrf
                                @if (isset($donor))
                                @method('PUT')
                                @endif
                                <div class="form-group">
                                    <label>إسم المتبرع الكامل</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i
                                                    class="fa fa-heading"></i></span></div>
                                        <input id="name" class="form-control" type="text" name="name"
                                            value="{{ isset($donor) ? $donor->name : '' }}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>رقم الهوية</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i
                                                    class="fa fa-address-card"></i></span></div>
                                        <input id="national_id" class="form-control" type="number" name="national_id"
                                            value="{{ isset($donor) ? $donor->national_id : '' }}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>العنوان</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i
                                                    class="fa fa-location-arrow"></i></span></div>
                                        <textarea class="form-control" name="address" id="address" cols="30" rows="5">
                                            {{ isset($donor) ? $donor->address : '' }}</textarea>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label>زمرة الدم</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i
                                                    class="fa fa-first-aid"></i></span></div>
                                        <input id="blood_group" class="form-control" type="text" name="blood_group"
                                            value="{{ isset($donor) ? $donor->blood_group : '' }}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>رقم المتبرع</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i
                                                    class="fa fa-number">1</i></span></div>
                                        <input id="donornumber" class="form-control" type="number" name="donornumber"
                                            value="{{ isset($donor) ? $donor->donornumber : '' }}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label> المستشفى/العيادة</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i
                                                    class="fa fa-heading"></i></span></div>
                                        <input id="hospital" class="form-control" type="text" name="hospital"
                                            value="{{ isset($donor) ? $donor->hospital : '' }}">
                                    </div>
                                </div>
                               
                                <div class="form-group">
                                    <label>الكمية المتبرع بها (باللتر)</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i
                                                    class="fa fa-heading"></i></span></div>
                                        <input class="form-control" type="number" name="qty" id="qty" 
                                        @if (isset($donor)) value="{{ $donor->qty }}" @endif>
                                    </div>
                                </div>

                            </div>
                            <div class="kt-portlet__foot d-flex flex-row-reverse">
                                <div class="kt-form__actions">
                                    <input type="submit" value="{{ isset($donor) ? 'تحديث' : 'حفظ' }}"
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
