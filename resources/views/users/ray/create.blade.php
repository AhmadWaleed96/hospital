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
                <div class="kt-portlet__head">
                    <div class="kt-portlet__head-label">
                        <div class="kt-subheader__main">

                            <h3 class="kt-subheader__title">
                                {{ isset($ray) ? 'تعديل بيانات ملف الأشعة' : 'إضافة ملف اشعة' }}</h3>

                            <span class="kt-subheader__separator kt-subheader__separator--v"></span>
                            <div class="form-group form-group-last">
                                <div class="alert alert-secondary" role="alert">
                                    <div class="alert-icon"><i class="flaticon-warning kt-font-brand"></i></div>
                                    <div class="alert-text">
                                        يمكنك إضافة ملف اشعة جديد من هنا
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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
                        action="{{ isset($ray) ? route('ray.update', $ray->id) : route('ray.store') }}"
                        method="POST" enctype="multipart/form-data">
                        <div class="kt-portlet__body">

                            @csrf
                            @if (isset($ray))
                                @method('PUT')
                            @endif
                            <label>الصورة</label>
                                    <div>
                                        <div class="kt-avatar kt-avatar--outline kt-avatar--circle-"
                                            id="kt_user_edit_avatar">
                                            <div class="kt-avatar__holder"
                                                @if (isset($rays)) @if (strpos($rays->picture, 'users_pictures') !== false) style="background-image: url({{ asset('storage/' . $rays->picture) }})" @else style="background-image: url({{ $rays->picture }})" @endif
                                            @else
                                                style="background-image: url(&quot;http://keenthemes.com/metronic/preview/default/custom/user/assets/media/users/300_20.jpg&quot;);"
                                                @endif>

                                            </div>
                                            <label class="kt-avatar__upload" data-toggle="kt-tooltip" title=""
                                                data-original-title="Change avatar">
                                                <i class="fa fa-pen"></i>
                                                <input type="file" name="picture" accept=".png, .jpg, .jpeg">
                                            </label>
                                            <span class="kt-avatar__cancel" data-toggle="kt-tooltip" title=""
                                                data-original-title="Cancel avatar">
                                                <i class="fa fa-times"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            <div class="form-group">
                                <label>الإسم الأول</label>
                                <div class="input-group">
                                    <div class="input-group-prepend"><span class="input-group-text"><i
                                                class="fa fa-heading"></i></span></div>
                                    <input id="first_name" class="form-control" type="text" name="first_name"
                                        value="{{ isset($ray) ? $ray->first_name : '' }}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label>الإسم الأخير</label>
                                <div class="input-group">
                                    <div class="input-group-prepend"><span class="input-group-text"><i
                                                class="fa fa-heading"></i></span></div>
                                    <input id="last_name" class="form-control" type="text" name="last_name"
                                        value="{{ isset($ray) ? $ray->last_name : '' }}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label>التشخيص</label>
                                <div class="input-group">
                                    <div class="input-group-prepend"><span class="input-group-text"><i
                                                class="fa fa-location-arrow"></i></span></div>
                                    <textarea class="form-control" name="address" id="address" cols="30" rows="5">{{ isset($ray) ? $ray->address : '' }}</textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>الإيميل</label>
                                <div class="input-group">
                                    <div class="input-group-prepend"><span class="input-group-text">@</span></div>
                                    <input id="email" class="form-control" type="email" name="email"
                                        value="{{ isset($ray) ? $ray->email : '' }}">
                                </div>
                            </div>
                           
                            <div class="form-group">
                                <label>الحالة</label>
                                <div class="input-group">
                                    <div class="input-group-prepend"><span class="input-group-text"><i
                                                class="fa fa-venus-mars"></i></span></div>
                                    <select class="form-control" name="medical_degree" id="medical_degree">
                                        <option>إختر الحالة</option>
                                        <option value="نشط"
                                            @if (isset($rays)) {{ $rays->medical_degree == 'نشط' ? 'selected' : '' }} @endif>
                                            نشط
                                        </option>
                                        <option value="غير نشط"
                                            @if (isset($rays)) {{ $rays->medical_degree == 'غير نشط' ? 'selected' : '' }} @endif>
                                            غير نشط
                                        </option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group  d-flex flex-row-reverse">
                                <div class="kt-form__actions">
                                    <input type="submit" value="{{ isset($ray) ? 'تحديث' : 'حفظ' }}"
                                        class="btn-lg btn-primary">
                                    <input type="reset" class="btn-lg btn-danger" value="إلغاء">
                                </div>
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
    <script src="{{ url('adminpanel/assets/js/demo12/pages/custom/user/edit-user.js') }}" type="text/javascript"></script>
    <script src="{{ url('adminpanel/assets/js/demo3/pages/crud/forms/widgets/select2.js') }}" type="text/javascript">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script>
        flatpickr('#date', {
            altInput: true,
            altFormat: "F j, Y",
            dateFormat: "Y-m-d",
        });
    </script>
@endsection
