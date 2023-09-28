@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="text-2xl font-semibold mb-4">Reset Password</h1>
        <form id="resetPasswordForm" class="space-y-4">
            @csrf
            <input type="hidden" name="token" value="{{ $request->route('token') }}">
            <div class="form-group">
                <label for="email" class="block font-medium">Email</label>
                <input type="email" name="email" id="email" class="form-input" value="{{$request->email}}" required>
            </div>
            <div class="form-group">
                <label for="password" class="block font-medium">New Password</label>
                <input type="password" name="password" id="password" class="form-input" required>
            </div>
            <div class="form-group">
                <label for="password_confirmation" class="block font-medium">Confirm New Password</label>
                <input type="password" name="password_confirmation" id="password_confirmation" class="form-input" required>
            </div>
            <button type="submit" class="btn btn-primary">Reset Password</button>
        </form>
        <div id="messageContainer" class="mt-4"></div>

    </div>
@endsection
