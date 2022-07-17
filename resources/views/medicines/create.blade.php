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

                    <h3 class="kt-subheader__title">{{ isset($medicine) ? 'تعديل بيانات الدواء' : 'إضافة دواء' }}</h3>

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
                            action="{{ isset($medicine) ? route('medicines.update', $medicine->id) : route('medicines.store') }}"
                            method="POST" enctype="multipart/form-data">
                            <div class="kt-portlet__body">
                                <div class="form-group form-group-last">
                                    <div class="alert alert-secondary" role="alert">
                                        <div class="alert-icon"><i class="flaticon-warning kt-font-brand"></i></div>
                                        <div class="alert-text">
                                           يمكنك إضضافة دواء جديد من هنا.
                                        </div>
                                    </div>
                                </div>
                                @csrf
                                @if (isset($medicine))
                                    @method('PUT')
                                @endif
                                <div class="form-group">
                                    <label>الإسم</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i
                                                    class="fa fa-heading"></i></span></div>
                                        <input id="name" class="form-control" type="text" name="name"
                                            value="{{ isset($medicine) ? $medicine->name : '' }}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>التعليمات</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i
                                                    class="fa fa-location-arrow"></i></span></div>
                                        <textarea class="form-control" name="instruction" id="instruction" cols="30" rows="5">{{ isset($medicine) ? $medicine->instruction : '' }}</textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>النوع</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i
                                                    class="fa fa-heading"></i></span></div>
                                        @if (isset($categories))
                                            <select class="form-control" name="category" id="category">
                                                <option>إختر النوع</option>
                                                @foreach ($categories as $category)
                                                    <option value="{{ $category->id }}"
                                                        @if (isset($medicine)) {{ $category->id == $medicine->category_id ? 'selected' : '' }} @endif>
                                                        {{ $category->name }}</option>
                                                @endforeach
                                            </select>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>سعر الشراء</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i
                                                    class="fa fa-heading"></i></span></div>
                                        <input id="purchase_price" class="form-control" type="number"
                                            name="purchase_price"
                                            value="{{ isset($medicine) ? $medicine->purchase_price : '' }}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>سعر البيع</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i
                                                    class="fa fa-heading"></i></span></div>
                                        <input id="sale_price" class="form-control" type="number" name="sale_price"
                                            value="{{ isset($medicine) ? $medicine->sale_price : '' }}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>الكمية</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i
                                                    class="fa fa-heading"></i></span></div>
                                        <input id="quantity" class="form-control" type="number" name="quantity"
                                            value="{{ isset($medicine) ? $medicine->quantity : '' }}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>الشركة</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i
                                                    class="fa fa-heading"></i></span></div>
                                        <input id="company" class="form-control" type="text" name="company"
                                            value="{{ isset($medicine) ? $medicine->company : '' }}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>تاريخ إنتهاء الصلاحية</label>
                                    <div class="input-group date">
                                        <div class="input-group-prepend"><span class="input-group-text"><i
                                                    class="fa fa-calendar"></i></span></div>
                                        <input type="date" class="form-control" name="expire_date" id="date"
                                            value="{{ isset($medicine) ? $medicine->expire_date : '' }}">
                                    </div>
                                </div>
                            </div>
                            <div class="kt-portlet__foot d-flex flex-row-reverse">
                                <div class="kt-form__actions">
                                    <input type="submit" value="{{ isset($medicine) ? 'تحديث' : 'حفظ' }}"
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
        flatpickr('#expire_date', {
            altInput: true,
            altFormat: "F j, Y",
            dateFormat: "Y-m-d",
            minDate: "today",
        });
    </script>
@endsection
