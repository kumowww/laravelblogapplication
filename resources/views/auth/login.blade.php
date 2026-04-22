@extends('layouts.app')

@section('title', __('messages.login'))

@section('content')
<div class="container" style="max-width: 400px;">
    <h1>@lang('messages.login')</h1>
    <form method="POST" action="{{ route('login.store', ['locale' => $locale]) }}">
        @csrf
        <div style="margin-bottom: 15px;">
            <label for="email">Email</label>
            <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus style="width: 100%; padding: 8px;">
            @error('email')
                <div style="color: red;">{{ $message }}</div>
            @enderror
        </div>
        <div style="margin-bottom: 15px;">
            <label for="password">@lang('messages.password')</label>
            <input id="password" type="password" name="password" required style="width: 100%; padding: 8px;">
        </div>
        <div style="margin-bottom: 15px;">
            <label>
                <input type="checkbox" name="remember"> @lang('messages.remember_me')
            </label>
        </div>
        <button type="submit" class="btn">@lang('messages.login')</button>
    </form>
</div>
@endsection