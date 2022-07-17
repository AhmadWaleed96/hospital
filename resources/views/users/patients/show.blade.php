@extends('users.admin.layouts.login')
@section('styles')
    <link href="{{ url('adminpanel/assets/vendors/custom/datatables/datatables.bundle.css') }}" rel="stylesheet"
        type="text/css" />
@endsection
@section('content')
    <!-- begin:: Content -->
    <div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor col-12" id="kt_content">

        <!-- begin:: Content Head -->
        <div class="kt-subheader  kt-grid__item" id="kt_subheader">
            <div class="kt-container  kt-container--fluid ">
                <div class="kt-subheader__main">

                    <h3 class="kt-subheader__title">تعديل قسم المريض</h3>

                    <span class="kt-subheader__separator kt-subheader__separator--v"></span>
                    <div class="form-group form-group-last">
                        <div class="alert alert-secondary" role="alert">
                            <div class="alert-icon"><i class="flaticon-warning kt-font-brand"></i></div>
                            <div class="alert-text">
                                يمكنك تغيير قسم المريض من هنا.
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
        <!-- end:: Content Head -->
        <div class="kt-portlet__body">
            <!-- begin:: Content Container-->
        <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid col-12">
            <div class="row">
                <div class="offset col-md-12">
                    <!--begin::Portlet-->
                    <div class="kt-portlet">

                        <!--begin::Form-->
                        <form class="kt-form kt-form--label-right"
                            action="{{ isset($patient) ? route('patients.update', $patient->id) : route('patients.update', $patient->id)}}"
                            method="POST" enctype="multipart/form-data">
                            <div class="kt-portlet__body">

                                @csrf
                                @if (isset($patient))
                                    @method('PUT')
                                @endif

                                <div class="form-group">
                                    <label>الإسم </label>
                                    <br>
                                    <div class="card">
                                        <label>{{ $patient->first_name . ' ' . $patient->last_name }} </label>
                                    </div>
                                    
                                </div>
                                <div class="form-group">
                                    <label>الأقسام</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i
                                                    class="fa fa-h-square"></i></span></div>
                                        <select id="kt_select2_3" class="kt-select form-control" name="departments[]"
                                            id="departments">
                                            <option>إختر قسم....</option>
                                            @foreach ($departments as $department)
                                                <option value="{{ $department->id }}"
                                                    @if (isset($patient)) {{ $patient->hasDepartment($department->id) ? 'selected' : '' }} @endif>
                                                    {{ $department->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="kt-portlet__foot  d-flex flex-row-reverse">
                                    <div class="kt-form__actions">
                                        <input type="submit" value="{{ isset($patient) ? 'حفظ':'حفظ' }}"
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
            <!--begin: Datatable -->
            {{-- <table class="table table-striped- table-bordered table-primary text-center table-checkable  kt_table_1"
                id="kt_table_1">
                <thead class="bg-primary">
                    <tr>
                        <th>الإسم</th>
                        <th>القسم</th>
                        <th>الإجراء</th>
                    </tr>
                </thead>
                <tbody>
                        <tr>
                            <td>  {{ $patient->first_name . ' ' . $patient->last_name }}</td>
                            <td>
                                <div class="input-group">
                                    <div class="input-group-prepend"></div>
                                    <select id="kt_select2_3" class="kt-select form-control" name="departments[]"
                                        id="departments">
                                        <option>إختر قسم....</option>
                                        @foreach ($departments as $department)
                                            <option value="{{ $department->id }}"
                                                @if (isset($patient)) {{ $patient->hasDepartment($department->id) ? 'selected' : '' }} @endif>
                                                {{ $department->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </td>
                           
                            <td>
                               
                                <div class="kt-portlet__foot  d-flex flex-row-reverse">
                                    <div class="kt-form__actions">
                                        <input type="submit" value="{{ isset($patient) ?'حفظ' :'حفظ' }}"
                                            class="btn-lg btn-primary">
                                        <input type="reset" class="btn-lg btn-danger" value="إلغاء">
                                    </div>
                                </div>
                            </td>
                        </tr>
                </tbody>

            </table> --}}
            <!--end: Datatable -->
        </div>
    </div>
    </div>

    <!-- begin:: Content -->
@endsection

@section('scripts')
    <script src="{{ url('adminpanel/assets/vendors/custom/datatables/datatables.bundle.js') }}" type="text/javascript">
    </script>
    <script src="{{ url('adminpanel/assets/js/demo3/pages/crud/datatables/advanced/multiple-controls.js') }}"
        type="text/javascript"></script>
    <script src="{{ url('adminpanel/assets/js/demo3/pages/dashboard.js') }}" type="text/javascript"></script>
@endsection
