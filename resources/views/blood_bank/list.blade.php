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

                    <h3 class="kt-subheader__title">عرض بيانات المتبرعين</h3>

                    <span class="kt-subheader__separator kt-subheader__separator--v"></span>

                    <div class="kt-input-icon kt-input-icon--right kt-subheader__search kt-hidden">
                        <input type="text" class="form-control" placeholder="بحث..." id="generalSearch">
                        <span class="kt-input-icon__icon kt-input-icon__icon--right">
                            <span><i class="flaticon2-search-1"></i></span>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <!-- end:: Content Head -->

        <!-- begin:: Container -->
        <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid col-12">
            <!-- begin:: Alert -->
            @if (session()->has('success'))
                <div class="alert alert-light alert-elevate" role="alert">
                    <div class="alert-icon"><i class="flaticon2-check-mark kt-font-success"></i></div>
                    <div class="alert-text">
                        {{ session()->get('success') }}
                    </div>
                </div>
            @endif
            <!-- end:: Alert -->

            <!-- begin:: Portlet -->
            <div class="kt-portlet kt-portlet--mobile">
                <div class="kt-portlet__head kt-portlet__head--lg">
                    <div class="kt-portlet__head-label">
                        <span class="kt-portlet__head-icon">
                            <i class="kt-font-brand flaticon2-line-chart"></i>
                        </span>
                    </div>
                    <div class="kt-portlet__head-toolbar">
                        <div class="kt-portlet__head-wrapper">
                            <div class="kt-portlet__head-actions">
                                <a href="{{ route('blood_bank.create') }}"
                                    class="btn btn-brand btn-elevate btn-icon-sm">
                                    <i class="fa fa-plus-square" aria-hidden="true"></i>
                                    إضافة بيانات متبرع جديد
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="kt-portlet__body">
                    <!--begin: Datatable -->
                    <table class="table table-responsive table-striped table-bordered table-primary text-center table-checkable  kt_table_1"
                        id="kt_table_1">
                        <thead class="bg-primary">
                            <tr>
                                <th>إسم المريض</th>
                                <th>رقم الهوية</th>
                                <th>العنوان</th>
                                <th>المستشفى / العيادة</th>
                                <th>العمر</th>
                                <th>الوزن</th>
                                <th>رقم المتبرع</th>
                                <th>تاريخ الميلاد</th>
                                <th>الجنس</th>
                                <th>رقم الجوال</th>
                                <th>زمرة الدم</th>
                                <th>اليوم</th>
                                <th>الساعة</th>
                                <th>ملاحطات</th>
                                <th colspan="3">الإجراء</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($blood_bank as $blood_bank)
                                <tr>
                                    <td>{{ $blood_bank->name }} </td>
                                    <td>{{ $blood_bank->national_id }}</td>
                                    <td>{{ $blood_bank->address }}</td>
                                    <td>{{ $blood_bank->hospital }}</td>
                                    <td>{{ $blood_bank->age }}</td>
                                    <td>{{ $blood_bank->weight }}</td>
                                    <td>{{ $blood_bank->donornumber }}</td>
                                    <td>{{ $blood_bank->birth_date }}</td>
                                    <td>{{ $blood_bank->gender }}</td>
                                    <td>{{ $blood_bank->mobile }}</td>
                                    <td>{{ $blood_bank->blood_group }}</td>
                                    <td>{{ $blood_bank->date }}</td>
                                    <td>{{ $blood_bank->time }}</td>
                                    <td>{{ $blood_bank->notes }}</td>
                                    <td>
                                        <span class="dropdown">
                                            <a href="#" class="btn btn-sm btn-warning btn-icon btn-icon-md"
                                                data-toggle="dropdown" aria-expanded="true">
                                                الإجراء
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item"
                                                    href="{{ route('blood_bank.edit', $blood_bank->id) }}">
                                                    تعديل <i
                                                        class="fa fa-edit" aria-hidden="true"></i></button>
                                                </a>
                                                <a href="{{ route('blood_bank.show', $blood_bank->id) }}"
                                                    class="dropdown-item"> حذف <i class="fa fa-trash"
                                                        aria-hidden="true"></i></button>
                                                </a>
                                            </div>
                                        </span>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>

                    </table>
                    <!--end: Datatable -->
                </div>
            </div>
            <!-- end:: Portlet -->
        </div>
        <!-- end:: Container -->
    </div>
    <!-- begin:: Content -->
@endsection

@section('scripts')
    <script src="{{ url('adminpanel') }}/assets/vendors/custom/datatables/datatables.bundle.js" type="text/javascript">
    </script>
    <script src="{{ url('adminpanel') }}/assets/js/demo3/pages/crud/datatables/advanced/multiple-controls.js"
        type="text/javascript"></script>
@endsection
