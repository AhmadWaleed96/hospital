@extends('users.admin.layouts.login')
@section('styles')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <link rel="stylesheet" type="text/css" href="https://npmcdn.com/flatpickr/dist/themes/material_green.css">

    <link rel="stylesheet" href="{{ url('select2/dist/css/select2.min.css') }}">
@endsection
@section('content')

    <!-- begin:: Content -->
    <div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor col-12" id="kt_content">
        <!-- begin:: Content Head -->
        <div class="kt-subheader  kt-grid__item" id="kt_subheader">
            <div class="kt-container  kt-container--fluid ">
                <div class="kt-subheader__main">

                    <h3 class="kt-portlet__head-title">
                        {{ isset($appointment) ? 'تعديل حجز الموعد' : 'إضافة حجز موعد' }}
                    </h3>

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
                            action="{{ isset($appointment) ? route('appointments.update', $appointment->id) : route('appointments.store') }}"
                            method="POST" enctype="multipart/form-data">
                            <div class="kt-portlet__body">
                                <div class="form-group form-group-last">
                                    <div class="alert alert-secondary" role="alert">
                                        <div class="alert-icon"><i class="flaticon-warning kt-font-brand"></i></div>
                                        <div class="alert-text">
                                            يمكنك حجز موعد جديد من هنا.
                                        </div>
                                    </div>
                                </div>
                                @csrf
                                @if (isset($appointment))
                                    @method('PUT')
                                @endif
                               
                                <div class="form-group">
                                    <label>إسم المريض</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="fa fa-clock"></i>
                                            </span>
                                        </div>
                                        @if (isset($patients))
                                        <select class="form-control text-black" name="patient" id="patient">
                                            <option>إختيار المريض</option>
                                            @foreach ($patients as $patient)
                                                <option value="{{ $patient->id }}"
                                                    @if (isset($appointment)) {{ $patient->id == $appointment->patient_id ? 'selected' : '' }} @endif>
                                                    {{ $patient->first_name }} {{ $patient->last_name }}</option>
                                            @endforeach
                                        </select>
                                    @endif
                                    </div>
                                </div> 
                                <div class="form-group">
                                    <label>إسم الطبيب</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="fa fa-clock"></i>
                                            </span>
                                        </div>
                                        @if (isset($doctors))
                                        <select class="form-control text-black" name="doctor" id="doctor">
                                            <option>إختيار الطبيب</option>
                                            @foreach ($doctors as $doctor)
                                                <option value="{{ $doctor->id }}"
                                                    @if (isset($appointment)) {{ $doctor->id == $appointment->doctor_id ? 'selected' : '' }} @endif>
                                                    {{ $doctor->first_name }} {{ $doctor->last_name }}</option>
                                            @endforeach
                                        </select>
                                    @endif
                                     
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>القسم</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="fa fa-clock"></i>
                                            </span>
                                        </div>
                                        @if (isset($departments))
                                            <select class="form-control" name="department" id="department">
                                                <option>إختيار القسم</option>
                                                @foreach ($departments as $department)
                                                    <option value="{{ $department->id }}"
                                                        @if (isset($appointment)) {{ $department->id == $appointment->department_id ? 'selected' : '' }} @endif>
                                                        {{ $department->name }}</option>
                                                @endforeach
                                            </select>
                                        @endif
                                    </div>
                                </div>
                               

                                <div class="form-group" id="dateDiv">
                                    <label>الموعد</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i
                                                    class="fa fa-calendar"></i></span></div>
                                        <input class="form-control" type="date" name="date" 
                                            placeholder="إختيار اليوم"
                                            @if (isset($appointment)) value="{{ $appointment->date }}" @endif>
                                    </div>
                                </div>
                                <div class="form-group" id="timeSlotsDiv">
                                    <label>الأوقات المتاحة</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i
                                                    class="fa fa-heading"></i></span></div>
                                        <input type="time" name="timeSlots" class="form-control"
                                        @if (isset($appointment)) value="{{ $appointment->time }}" @endif>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>الحالة</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i
                                                    class="fa fa-heading"></i></span></div>
                                        <select class="form-control" name="status" id="status">
                                            <option value="مؤكدة">مؤكدة</option>
                                            <option value="انتظار">انتظار</option>
                                            <option value="ملغيه">ملغيه</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label>ملاحظات</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i
                                                    class="fa fa-heading"></i></span></div>
                                        <textarea class="form-control" name="notes" id="notes">
                                            {{ isset($appointment) ? $appointment->notes : '' }}
                                        </textarea>
                                    </div>
                                </div>

                            </div>
                            <div class="kt-portlet__foot d-flex flex-row-reverse">
                                <div class="kt-form__actions">
                                    <input type="submit" value="{{ isset($appointment) ? 'تحديث' : 'حفظ' }}"
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
    {{-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> --}}

    <script>
        $("#patient").change(function() {
            if ($(this).val() != 0) {
                $('#newPatientDiv').hide();
            } else {
                $('#newPatientDiv').show();
            }
        });

        /*ajax to get doctors by department*/
        $("#department").change(function() {
            $.ajax({
                url: "{{ route('get-doctors-by-department') }}?id=" + $(this).val(),
                method: 'GET',
                success: function(data) {
                    $('#doctor').html(data.html);
                }
            });
        });

        $("#status").change(function() {
            if ($("#status").val() == 'مؤكدة') {
                $('#priceDiv').show();
            } else {
                $('#priceDiv').hide();
            }
        });

        /*ajax to get time schedule of each doctor*/
        $("#doctor").change(function() {

            // Get Doctor Appointment Price
            $.ajax({
                url: "{{ route('get-payment-item-by-doctor_id') }}?doctor=" + $('#doctor').val(),
                method: 'GET',
                success: function(data) {
                    jaa = JSON.parse(data.html);
                    //alert($('#doctor').val());
                    //alert(jaa[0].price);
                    $('#priceDiv').show();
                    $('#price').val(jaa[0].price);
                    $('#commission').val(jaa[0].commission);
                    $('#item').val(jaa[0].id);
                }
            });

            $.ajax({
                url: "{{ route('get-time-schedule-by-doctor') }}?id=" + $(this).val(),
                method: 'GET',
                success: function(data) {
                    $('#dateDiv').show();
                    $('#timeScheduleDiv').show();
                    // display Time Schedule Week Day
                    $('#timeSchedule').html(data.html);
                    // return Arr of Week Day Num
                    var arr = [];
                    $(".tm").each(function(index, obj) {
                        if ($(this).text() == 'saturday') {
                            arr.push(6);
                        } else if ($(this).text() == 'sunday') {
                            arr.push(0);
                        } else if ($(this).text() == 'monday') {
                            arr.push(1);
                        } else if ($(this).text() == 'tuesday') {
                            arr.push(2);
                        } else if ($(this).text() == 'wednesday') {
                            arr.push(3);
                        } else if ($(this).text() == 'thursday') {
                            arr.push(4);
                        } else if ($(this).text() == 'friday') {
                            arr.push(5);
                        }
                    });


                    // create flat picker with specific Week Days
                    flatpickr('#date', {
                        altInput: true,
                        altFormat: "F j, Y",
                        dateFormat: "Y-m-d",
                        minDate: "today",
                        enable: [function(date) {
                            // return (date === 2020-01-30);
                            if (arr.length == 1) {
                                return (date.getDay() === arr[0]);
                            } else if (arr.length == 2) {
                                return (date.getDay() === arr[0] || date.getDay() ===
                                    arr[1]);
                            } else if (arr.length == 3) {
                                return (date.getDay() === arr[0] || date.getDay() ===
                                    arr[1] || date.getDay() === arr[2]);
                            } else if (arr.length == 4) {
                                return (date.getDay() === arr[0] || date.getDay() ===
                                    arr[1] || date.getDay() === arr[2] || date
                                    .getDay() === arr[3]);
                            } else if (arr.length == 5) {
                                return (date.getDay() === arr[0] || date.getDay() ===
                                    arr[1] || date.getDay() === arr[2] || date
                                    .getDay() === arr[3] || date.getDay() === arr[4]
                                );
                            } else if (arr.length == 6) {
                                return (date.getDay() === arr[0] || date.getDay() ===
                                    arr[1] || date.getDay() === arr[2] || date
                                    .getDay() === arr[3] || date.getDay() === arr[
                                        4] || date.getDay() === arr[5]);
                            } else if (arr.length == 7) {
                                return (date.getDay() === arr[0] || date.getDay() ===
                                    arr[1] || date.getDay() === arr[2] || date
                                    .getDay() === arr[3] || date.getDay() === arr[
                                        4] || date.getDay() === arr[5] || date
                                    .getDay() === arr[6]);
                            }
                        }],
                    });

                }
            });
        });


        // Fill Time Slots By The Date & check appointments & check day offs
        $("#date").change(function() {
            var date = moment($(this).val());
            var dadada = $(this).val();
            var time = [];
            // check appointments already reserved
            $.ajax({
                url: "{{ route('get-appointments-by-date') }}?date=" + $(this).val(),
                method: 'GET',
                success: function(data) {
                    jsonar = JSON.parse(data.html);
                    $.each(jsonar, function(i, value) {
                        time.push(jsonar[i].time);
                    });
                }
            });

            /*ajax to get day off schedule of each doctor*/
            $.ajax({
                url: "{{ route('get-dayoff-schedule-by-doctor') }}?id=" + $("#doctor").val(),
                method: 'GET',
                success: function(data) {
                    check = 0;
                    dayoffs = JSON.parse(data.html);

                    $.each(dayoffs, function(i, value) {
                        if (dayoffs[i].date == dadada) {
                            check = 1;
                        }
                    });

                    if (check == 1) {
                        /*check if the Date is day off*/
                        $("#timeSlots").empty();
                        $('#timeSlotsDiv').show();
                        $("#timeSlots").append('<option>This is a Day off</option>');

                    } else if (check == 0) {
                        /*ajax to Fill Time Slots By The Date if the Date not day off*/
                        $.ajax({
                            url: "{{ route('get-time-by-time-schedule') }}?week_num=" + date
                                .day() + "&doctor_id=" + $('#doctor').val(),
                            method: 'GET',
                            success: function(data) {
                                res = JSON.parse(data.html);
                                $("#timeSlots").empty();
                                $('#timeSlotsDiv').show();
                                $.each(res, function(i, value) {
                                    start = moment(res[i].start_time, 'HH:mm')
                                        .format('HH:mm');
                                    end = moment(res[i].end_time, 'HH:mm').format(
                                        'HH:mm');
                                    while (start <= moment(end, 'HH:mm').subtract(
                                            res[i].duration, 'm').format('HH:mm')) {
                                        for (j = 0; j < time.length; j++) {
                                            if (moment(start, 'HH:mm').isSame(
                                                    moment(time[j], 'HH:mm'))) {
                                                start = moment(start, 'HH:mm').add(
                                                        res[i].duration, 'm')
                                                    .format('HH:mm');
                                                j = 0;
                                            }
                                        }
                                        $("#timeSlots").append('<option value=' +
                                            moment(start, 'HH:mm').format(
                                                'HH:mm') + '>' + moment(start,
                                                'HH:mm').format('HH:mm') +
                                            '</option>');
                                        start = moment(start, 'HH:mm').add(res[i]
                                            .duration, 'm').format('HH:mm');
                                    }
                                });
                            }
                        });
                    }
                }
            });


        });
    </script>
@endsection
