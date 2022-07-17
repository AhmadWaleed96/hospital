@extends('users.admin.layouts.print')
@section('styles')
    <link href="{{ url('adminpanel/assets/vendors/custom/datatables/datatables.bundle.css') }}" rel="stylesheet"
        type="text/css" />
@endsection
@section('content')
    <!-- begin:: Content -->
    <div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor col-12" id="kt_content">
        <img src="{{ asset('dist/img/logo.jpg') }}" alt="Logo" class="brand-image img-circle elevation-3"
            style="opacity: 1">
        <!-- begin:: Content Head -->
        <div class="kt-subheader  kt-grid__item" id="kt_subheader">
            <div class="kt-container  kt-container--fluid ">
                <div class="kt-subheader__main">
                    <div>

                        <h3 class="kt-subheader__title">طباعة التقرير</h3>

                        <span class="kt-subheader__separator kt-subheader__separator--v"></span>
                    </div>

                </div>

            </div>
        </div>
        <!-- end:: Content Head -->
        <br>
        <!-- begin:: Container -->
        <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid col-12" id="printableArea">

            <!-- begin:: Portlet -->
            <div class="kt-portlet kt-portlet--mobile">

                <div class="kt-portlet__body">

                    <!--begin: Datatable -->
                    <table
                        class="table table-striped- table-bordered table-primary text-center  table-checkable  kt_table_1"
                        id="kt_table_1">
                        <thead class="bg-primary">
                            <tr>
                                <th>المستشفى</th>
                                <th>المنطقة</th>
                                <th>إسم المريض</th>
                                <th>الجنسية</th>
                                <th>إسم الطبيب</th>
                                <th>تاريخ الدخول</th>
                                <th>تاريخ الخروج</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($prescription as $prescription)
                                <tr>
                                    <td>الأقصى</td>
                                    <td>دير البلح</td>
                                    <td>{{ $prescription->patient->first_name }} {{ $prescription->patient->last_name }}</td>
                                    <td>فلسطيني</td>
                                    <td>{{ $prescription->doctor->first_name }} {{ $prescription->doctor->last_name }}</td>
                                    <td>{{ $prescription->date }}</td>
                                    <td>{{ $prescription->created_at }}</td>
                                </tr>
                            @endforeach
                        </tbody>

                    </table>
                    <!--end: Datatable -->

                </div>
            </div>
            <!-- end:: Portlet -->
        </div>
        <!-- begin:: print -->
        <div class="kt-portlet__foot d-flex flex-row-reverse">
            <div class="kt-form__actions">
                <button class="btn btn-primary" onclick="window.print('printableArea')">طباعة التقرير</button>
            </div>
        </div>
        <!-- end:: print -->
        <!-- end:: Container -->
    </div>


    <!-- Scripts -->
    <script src="{{ url('adminpanel/assets/vendors/custom/datatables/datatables.bundle.js') }}" type="text/javascript">
    </script>
    <script src="{{ url('adminpanel/assets/js/demo3/pages/crud/datatables/advanced/multiple-controls.js') }}"
        type="text/javascript"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('adminlte/js/all.min.js') }}"></script>
    <script>
        $(function() {
            $('#session-alert').fadeTo(2000, 500).slideUp(500, function() {
                $('#session-alert').slideUp(500);
            })
        })
    </script>

    @yield('script')
@endsection
