@extends('users.admin.layouts.print')
@section('content')
    <!-- begin:: Container -->
    <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid col-12">
        <!-- begin:: Portlet -->
        <img src="{{ asset('dist/img/logo.jpg') }}" alt="Logo" class="brand-image img-circle elevation-3"
        style="opacity: 1">
        <div class="kt-portlet kt-portlet--mobile">
            <!-- begin:: Content Head -->
            <div class="kt-subheader  kt-grid__item" id="kt_subheader">
                <div class="kt-container  kt-container--fluid ">
                    <div class="kt-subheader__main">
                        <div>

                            <h3 class="kt-subheader__title">طباعة تذكرة دخول</h3>

                            <span class="kt-subheader__separator kt-subheader__separator--v"></span>
                        </div>

                    </div>

                </div>
            </div>
            <br>
            <!-- end:: Content Head -->
            <div class="kt-portlet__body">

                <!--begin: Datatable -->
                <table class="table table-striped- table-bordered table-primary text-center table-checkable kt_table_1">
                    <thead class="bg-primary">
                        <tr>
                            <th>رقم التذكرة</th>
                            <th>إسم المريض</th>
                            <th>العنوان</th>
                            <th>رقم الهوية</th>

                            <th>القسم</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{ $accountant->id }}</td>
                            <td>{{ $accountant->first_name }} {{ $accountant->last_name }}</td>
                            <td>{{ $accountant->address }}</td>
                            <td>{{ $accountant->national_id }}</td>

                            <td>
                                @foreach ($accountant->departments as $de)
                                    <span
                                        class="kt-badge kt-badge--brand kt-badge--inline kt-badge--pill">{{ $de->name }}</span>
                                @endforeach
                            </td>
                        </tr>
                    </tbody>
                </table>
                <!--end: Datatable -->
            </div>
            <!-- begin:: print -->
            <div class="kt-portlet__foot d-flex flex-row-reverse">
                <div class="kt-form__actions">
                    <button class="btn btn-primary" onclick="window.print('printableArea')">طباعة التذكرة</button>
                </div>
            </div>
            <!-- end:: print -->
        </div>
        <!-- end:: Portlet -->
    </div>
    <!-- end:: Container -->
@endsection
