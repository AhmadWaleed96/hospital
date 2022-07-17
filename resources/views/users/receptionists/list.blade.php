@extends('users.admin.layouts.login')
@section('styles')
    <link href="{{ url('adminpanel') }}/assets/vendors/custom/datatables/datatables.bundle.css" rel="stylesheet"
        type="text/css" />
@endsection
@section('content')
    <!-- begin:: Content -->
    <div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor col-12" id="kt_content">

        <!-- begin:: Content Head -->
        <div class="kt-subheader  kt-grid__item" id="kt_subheader">
            <div class="kt-container  kt-container--fluid ">
                <div class="kt-subheader__main">

                    <h3 class="kt-subheader__title">قائمة موظفي الاستقبال</h3>

                    <span class="kt-subheader__separator kt-subheader__separator--v"></span>

                </div>
                <div class="kt-input-icon kt-input-icon--right kt-subheader__search kt-hidden">
                    <input type="text" class="form-control" placeholder="بحث..." id="generalSearch">
                    <span class="kt-input-icon__icon kt-input-icon__icon--right">
                        <span><i class="flaticon2-search-1"></i></span>
                    </span>
                </div>
            </div>
        </div>
        <!-- end:: Content Head -->

        <!-- begin:: Container -->
        <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
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
                                <a href="{{ route('receptionists.create') }}" class="btn btn-brand btn-elevate btn-icon-sm">
                                    <i class="fa fa-plus-square" aria-hidden="true"></i>
                                    إضافة موظف الاستقبال
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="kt-portlet__body">

                    <!--begin: Datatable -->
                    <table class="table table-striped- table-bordered table-primary text-center table-checkable kt_table_1">
                        <thead class="bg-primary">
                            <tr>
                                <th>الإسم</th>
                                <th>رقم الهوية</th>
                                <th>الإيميل</th>
                                <th>رقم الجوال</th>
                                <th>تاريخ الميلاد</th>
                                <th>القسم</th>
                                <th colspan="2">الإجراء</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($receptionists as $receptionist)
                                <tr>

                                    <td>{{ $receptionist->first_name }} {{ $receptionist->last_name }}</td>
                                    <td>{{ $receptionist->national_id }}</td>
                                    <td>{{ $receptionist->email }}</td>
                                    <td>{{ $receptionist->mobile }}</td>
                                    <td>{{ $receptionist->birth_date }}</td>
                                    <td>
                                        @foreach ($receptionist->departments as $de)
                                            <span
                                                class="kt-badge kt-badge--brand kt-badge--inline kt-badge--pill">{{ $de->name }}</span>
                                        @endforeach
                                    </td>
                                    <td>

                                        <form action="{{ route('receptionists.edit', $receptionist->id) }}" method="post">
                                            @method('get')
                                            @csrf
                                            <button type="submit" class="btn btn-md btn-warning"> تعديل <i
                                                    class="fa fa-edit" aria-hidden="true"></i></button>
                                        </form>
                                    </td>
                                    <td>
                                        <form action="{{ route('receptionists.destroy', $receptionist->id) }}"
                                            method="post">
                                            @method('DELETE')
                                            @csrf
                                            <button type="submit" class="btn btn-danger btn-md"> حذف <i class="fa fa-trash"
                                                    aria-hidden="true"></i></button>
                                        </form>
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
    </div>
    <!-- begin:: Content -->
@endsection

@section('scripts')
    <script src="{{ url('adminpanel') }}/assets/vendors/custom/datatables/datatables.bundle.js" type="text/javascript">
    </script>
    <script src="{{ url('adminpanel') }}/assets/js/demo3/pages/crud/datatables/advanced/multiple-controls.js"
        type="text/javascript"></script>
@endsection
