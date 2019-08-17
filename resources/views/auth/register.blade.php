@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }} New Account -  تسجيل حساب جديد </div>

                <div class="card-body">

                    <div class="text-center" style="margin-bottom: 40px;">
                            <img src="icons/register.png"  width="100px" height="100px">
                            <br>
                            <br>

                             <strong> <h2 >New Account</h2></strong>
                             <b> <h2 >حساب جديد</h2></b>
                    </div>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right"> Name/ Organization  <br> الاسم/ المؤسسة </label>
                            
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="degree" class="col-md-4 col-form-label text-md-right">Category <br> الفئة</label>

                            <div class="col-md-6 text-center" >
                               <select name="degree" class="form-control" id="degree" value="{{ old('degree') }}" >
                                   <option value="دكتور/Doctor">طبيب - Doctor</option>
                                   <option value="باحث/Researcher">باحث - Researcher</option>
                                   <option value="الأبوين/Parent">الأبوين - Parent</option>
                                   <option value="طالب/Studnet">طالب - Studnet</option>
                                   <option value="مؤسسة/Organization"> مؤسسة - Organization</option>
                               </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address')  }} <br> البريد الإلكتروني</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }} <br> الرقم السري</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}<br> تأكيد الرقم السري</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }} -  التسجيل
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
