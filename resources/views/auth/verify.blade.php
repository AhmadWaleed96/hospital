@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('تأكيد بريدك الإلكتروني') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('تم إرسال رابط المصادقة إلى بريدك الإلكتروني') }}
                        </div>
                    @endif

                    {{ __('قبل المتابعة ، رجاءٌ قم بالتحقق من بريدك بحثاٌ عن رابط المصادقة') }}
                    {{ __('إذا لم تستلم البريد') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('إضغط هنا لإرسال رابط أخر') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
