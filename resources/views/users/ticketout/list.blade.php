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

                    <h3 class="kt-subheader__title">قائمة تذاكر الخروج</h3>

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
                                <a href="{{ route('ticketout.create') }}" class="btn btn-brand btn-elevate btn-icon-sm">
                                    <i class="fa fa-plus-square" aria-hidden="true"></i>
                                    إضافة تذكرة خروج
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
                                <th>رقم التذكرة</th>
                                <th>إسم المريض</th>
                                <th> العنوان</th>
                                <th>رقم الهوية</th>
                                <th>القسم</th>
                                <th colspan="3">الإجرء</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($ticketout as $ticketout)
                                <tr>
                                    <td>{{ $ticketout->id }}</td>
                                    <td>{{ $ticketout->first_name }} {{ $ticketout->last_name }}</td>
                                    <td>{{ $ticketout->address }}</td>
                                    <td>{{ $ticketout->national_id }}</td>
                                    <td>
                                        @foreach ($ticketout->departments as $de)
                                            <span
                                                class="kt-badge kt-badge--brand kt-badge--inline kt-badge--pill">{{ $de->name }}</span>
                                        @endforeach
                                    </td>
                                    <td>
                                        <form action="{{ route('ticketout.edit', $ticketout->id) }}" method="post">
                                            @method('get')
                                            @csrf
                                            <button type="submit" class="btn btn-md btn-warning"> تعديل <i
                                                    class="fa fa-edit" aria-hidden="true"></i></button>
                                        </form>
                                    </td>
                                    <td>
                                        <form action="{{ route('ticketout.destroy', $ticketout->id) }}" method="post">
                                            @method('DELETE')
                                            @csrf
                                            <button type="submit" class="btn btn-danger btn-md"> حذف <i class="fa fa-trash"
                                                    aria-hidden="true"></i></button>
                                        </form>
                                    </td>
                                    <td>
                                        <form action="{{ route('ticketout.show', $ticketout->id) }}" method="post">
                                            @method('get')
                                            @csrf
                                            <button type="submit" class="btn btn-md btn-primary"> طباعة <i
                                                    class="fa fa-print" aria-hidden="true"></i></button>
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
    <!-- begin:: Content -->
@endsection

@section('scripts')
    <script src="{{ url('adminpanel') }}/assets/vendors/custom/datatables/datatables.bundle.js" type="text/javascript">
    </script>
    <script src="{{ url('adminpanel') }}/assets/js/demo3/pages/crud/datatables/advanced/multiple-controls.js"
        type="text/javascript"></script>
@endsection
