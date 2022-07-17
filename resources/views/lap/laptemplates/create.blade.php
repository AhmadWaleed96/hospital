@extends('users.admin.layouts.login')
@section('styles')
@endsection
@section('content')
    <!-- begin:: Content -->
    <div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor col-12" id="kt_content">
        <!-- begin:: Content Head -->
        <div class="kt-subheader  kt-grid__item" id="kt_subheader">
            <div class="kt-container  kt-container--fluid ">
                <div class="kt-subheader__main">

                    <h3 class="kt-subheader__title">
                        {{ isset($laptemplate) ? 'تعديل بيانات المختبر' : 'إضافة إسم مختبر جديد' }}</h3>

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
                            action="{{ isset($laptemplate) ? route('laptemplates.update', $laptemplate->id) : route('laptemplates.store') }}"
                            method="POST" enctype="multipart/form-data">
                            <div class="kt-portlet__body">
                                <div class="form-group form-group-last">
                                    <div class="alert alert-secondary" role="alert">
                                        <div class="alert-icon"><i class="flaticon-warning kt-font-brand"></i></div>
                                        <div class="alert-text">
                                           يمكنك إضافة إسم مختبر جديد من هنا.
                                        </div>
                                    </div>
                                </div>
                                @csrf
                                @if (isset($laptemplate))
                                    @method('PUT')
                                @endif
                                <div class="form-group">
                                    <label>الإسم</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i
                                                    class="fa fa-heading"></i></span></div>
                                        <input id="name" class="form-control" type="text" name="name"
                                            value="{{ isset($laptemplate) ? $laptemplate->name : '' }}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>النموذج</label>
                                    <div class="input-group">
                                        <textarea name="template" class="summernote" id="kt_summernote_1" cols="50" rows="5">{{ isset($laptemplate) ? $laptemplate->template : '' }}</textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="kt-portlet__foot d-flex flex-row-reverse">
                                <div class="kt-form__actions">
                                    <input type="submit" value="{{ isset($laptemplate) ? 'تحديث' : 'حفظ' }}"
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
    <script src="{{ url('adminpanel') }}/assets/js/demo12/pages/crud/forms/widgets/summernote.js" type="text/javascript">
    </script>
@endsection
