@extends('users.admin.layouts.login')
@section('styles')
    <link href="{{url('adminpanel')}}/assets/vendors/custom/datatables/datatables.bundle.css" rel="stylesheet"
          type="text/css"/>

@endsection
@section('content')

    <!-- begin:: Content -->
    <div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor col-21" id="kt_content">

        <!-- begin:: Content Head -->
        <div class="kt-subheader  kt-grid__item" id="kt_subheader">
            <div class="kt-container  kt-container--fluid col-12">
                <div class="kt-subheader__main">

                    <h3 class="kt-subheader__title"> قائمة حجز الزبائن </h3>

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
            @if(session()->has('success'))
                <div class="alert alert-light alert-elevate" role="alert">
                    <div class="alert-icon"><i class="flaticon2-check-mark kt-font-success"></i></div>
                    <div class="alert-text">
                        {{session()->get('success')}}
                    </div>
                </div>
        @endif
        <!-- end:: Alert -->
            <div class="kt-portlet">
                <div class="kt-portlet__head">
                </div>
                <div class="kt-portlet__body">
                    <ul class="nav nav-pills nav-fill" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#kt_tabs_5_1">الكل</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#kt_tabs_5_2">انتظار</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#kt_tabs_5_3">مؤكدة</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#kt_tabs_5_5">ملغيه</a>
                        </li>

                    </ul>

                    <div class="tab-content">
                        <div class="tab-pane active" id="kt_tabs_5_1" role="tabpanel">
                            <!--begin: Datatable -->
                            <table class="table table-striped- table-bordered  table-primary text-center table-checkable  kt_table_1">
                                <thead class="bg-primary">
                                <tr>
                                    <th>الاسم</th>
                                    <th>الايميل</th>
                                    <th>رقم الهاتف</th>
                                    <th>الناريخ</th>
                                    <th>الوقت</th>
                                    <th>عدد الاشخاص</th>
                                    <th>رسالة</th>
                                    <th colspan="2">الإجراء</th>
                                </tr>
                                </thead>

                                <tbody>
                                    @foreach ($books as $book )
                                    <tr>
                                        <td>{{$book->name}}</td>
                                        <td>{{$book->email}}</td>
                                        <td>{{$book->mobile}}</td>
                                        <td>{{$book->date}}</td>
                                        <td>{{$book->time}}</td>
                                        <td>{{$book->number_of_people}}</td>
                                        <td>
                                            <form action="{{ route('لاخخن.edit', $book->id) }}" method="post">
                                                @method('get')
                                                @csrf
                                                <button type="submit" class="btn btn-md btn-warning"> تعديل <i
                                                        class="fa fa-edit" aria-hidden="true"></i></button>
                                            </form>
                                        </td>
                                        <td>
                                            <form action="{{route('books.destroy',$book->id)}}" method="post">
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
                        <div class="tab-pane" id="kt_tabs_5_2" role="tabpanel">
                            <!--begin: Datatable -->
                            <table class="table table-striped- table-bordered  table-primary text-center table-checkable  kt_table_1">
                                <thead class="bg-primary">
                                    <tr>
                                        <th>الاسم</th>
                                        <th>الايميل</th>
                                        <th>رقم الهاتف</th>
                                        <th>الناريخ</th>
                                        <th>الوقت</th>
                                        <th>عدد الاشخاص</th>
                                        <th>رسالة</th>
                                        <th colspan="2">الإجراء</th>
                                    </tr>
                                </thead>

                                <tbody>
                                @foreach($pendingAppointments as $appointment)
                                    <tr>
                                        <td> {{$appointment->patient_id}}</td>
                                        <td>{{$appointment->doctor->first_name }} {{$appointment->doctor->last_name }} </td>
                                        <td>{{$appointment->department->name}}</td>
                                        <td>{{$appointment->date.' / '.$appointment->time}}</td>
                                        <td>
                                            <form action="{{ route('appointments.edit', $appointment->id) }}" method="post">
                                                @method('get')
                                                @csrf
                                                <button type="submit" class="btn btn-md btn-warning"> تعديل <i
                                                        class="fa fa-edit" aria-hidden="true"></i></button>
                                            </form>
                                        </td>
                                        <td>
                                            <form action="{{route('appointments.destroy',$appointment->id)}}" method="post">
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
                        <div class="tab-pane" id="kt_tabs_5_3" role="tabpanel">
                            <!--begin: Datatable -->
                            <table class="table table-striped- table-bordered  table-primary text-center table-checkable  kt_table_1">
                                <thead class="bg-primary">
                                <tr>
                                    <th>المريض</th>
                                    <th>الطبيب</th>
                                    <th>القسم</th>
                                    <th>التاريخ/الوقت</th>

                                    <th colspan="2">الإجراء</th>
                                </tr>
                                </thead>

                                <tbody>
                                @foreach($confirmedAppointments as $appointment)
                                    <tr>
                                        <td>{{$appointment->patient_id}}</td>
                                        <td>{{$appointment->doctor->first_name }} {{$appointment->doctor->last_name }} </td>
                                        <td>{{$appointment->department->name}}</td>
                                        <td>{{$appointment->date.' / '.$appointment->time}}</td>
                                        <td>
                                            <form action="{{ route('appointments.edit', $appointment->id) }}" method="post">
                                                @method('get')
                                                @csrf
                                                <button type="submit" class="btn btn-md btn-warning"> تعديل <i
                                                        class="fa fa-edit" aria-hidden="true"></i></button>
                                            </form>
                                        </td>
                                        <td>
                                            <form action="{{route('appointments.destroy',$appointment->id)}}" method="post">
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

                        <div class="tab-pane" id="kt_tabs_5_5" role="tabpanel">
                            <!--begin: Datatable -->
                            <table class="table table-striped- table-bordered  table-primary text-center table-checkable  kt_table_1">
                                <thead class="bg-primary">
                                <tr>
                                    <th>المريض</th>
                                    <th>الطبيب</th>
                                    <th>القسم</th>
                                    <th>التاريخ/الوقت</th>
                                    <th colspan="2">الإجراء</th>
                                </tr>
                                </thead>

                                <tbody>
                                @foreach($cancelledAppointments as $appointment)
                                    <tr>
                                        <td> {{$appointment->patient_id}} </td>
                                        <td>{{$appointment->doctor->first_name }} {{$appointment->doctor->last_name }} </td>
                                        <td>{{$appointment->department->name}}</td>
                                        <td>{{$appointment->date.' / '.$appointment->time}}</td>
                                        <td>
                                            <form action="{{ route('appointments.edit', $appointment->id) }}" method="post">
                                                @method('get')
                                                @csrf
                                                <button type="submit" class="btn btn-md btn-warning"> تعديل <i
                                                        class="fa fa-edit" aria-hidden="true"></i></button>
                                            </form>
                                        </td>
                                        <td>
                                            <form action="{{route('appointments.destroy',$appointment->id)}}" method="post">
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
                </div>
            </div>
        </div>
        <!-- end:: Container -->
    </div>
    <!-- begin:: Content -->

@endsection

@section('scripts')
    <script src="{{url('adminpanel')}}/assets/vendors/custom/datatables/datatables.bundle.js"
            type="text/javascript"></script>
    <script src="{{url('adminpanel')}}/assets/js/demo3/pages/crud/datatables/advanced/multiple-controls.js"
            type="text/javascript"></script>
@endsection
