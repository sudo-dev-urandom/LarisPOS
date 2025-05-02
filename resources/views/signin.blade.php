@extends('partials.blank')
@section('content')
<!-- BEGIN #app -->
<div id="app" class="app app-full-height app-without-header">
    <!-- BEGIN login -->
    <div class="login">
        <!-- BEGIN login-content -->
        <div class="login-content">
            <form method="POST" action="/login" name="login_form">
                <h1 class="text-center">Sign In</h1>
                <div class="text-inverse text-opacity-50 text-center mb-4">
                    For your protection, please verify your identity.
                </div>
                @csrf
                {{-- Show validation errors --}}
                @if ($errors->any())
                <div class="alert alert-danger text-white" role="alert">
                    @foreach ($errors->all() as $error)
                    <div>{{ $error }}</div>
                    @endforeach
                </div>
                @endif
                <div class="mb-3">
                    <label class="form-label">Email Address <span class="text-danger">*</span></label>
                    <input type="text" name="email" class="form-control form-control-lg bg-inverse bg-opacity-5" value="" placeholder="">
                </div>
                <div class="mb-3">
                    <div class="d-flex">
                        <label class="form-label">Password <span class="text-danger">*</span></label>
                        <a href="#" class="ms-auto text-inverse text-decoration-none text-opacity-50">Forgot password?</a>
                    </div>
                    <input type="password" name="password" class="form-control form-control-lg bg-inverse bg-opacity-5" value="" placeholder="">
                </div>
                <div class="mb-3">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="customCheck1">
                        <label class="form-check-label" for="customCheck1">Remember me</label>
                    </div>
                </div>
                <button type="submit" class="btn btn-outline-theme btn-lg d-block w-100 fw-500 mb-3">Sign In</button>
                <div class="text-center text-inverse text-opacity-50">
                    Don't have an account yet? <a href="page_register.html">Sign up</a>.
                </div>
            </form>
        </div>
        <!-- END login-content -->
    </div>
    <!-- END login -->
    <!-- BEGIN btn-scroll-top -->
    <a href="#" data-toggle="scroll-to-top" class="btn-scroll-top fade"><i class="fa fa-arrow-up"></i></a>
    <!-- END btn-scroll-top -->
</div>
<!-- END #app -->
@stop
