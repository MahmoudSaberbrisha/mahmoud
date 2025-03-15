@extends('admin.masterpage')

@section('content')
    <div class="container">
        <h1>@lang('messages.Create New Admin')</h1>
        <form action="{{ route('admins.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">@lang('messages.Name')</label>
                <input type="text" name="name" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="email">@lang('messages.Email')</label>
                <input type="email" name="email" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="password">@lang('messages.Password')</label>
                <input type="password" name="password" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="password_confirmation">@lang('messages.Confirm Password') </label>
                <input type="password" name="password_confirmation" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">@lang('messages.Create New Admin')</button>
        </form>
    </div>
@endsection
