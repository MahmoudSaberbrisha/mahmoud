@extends('admin.masterpage')

@section('content')
    <div class="container" style="margin-bottom: 30px">
        <h1>@lang('messages.Edit Admin')</h1>
        <form action="{{ route('profile.update', $admin->id) }}" method="POST">
            @csrf
            @method('POST')
            <div class="form-group">
                <label for="name">@lang('messages.Name')</label>
                <input type="text" name="name" class="form-control" value="{{ $admin->name }}" required>
            </div>
            <div class="form-group">
                <label for="email">@lang('messages.Email')</label>
                <input type="email" name="email" class="form-control" value="{{ $admin->email }}" required>
            </div>
            <div class="form-group">
                <label for="password">@lang('messages.Password') (leave blank to keep current password)</label>
                <input type="password" name="password" class="form-control">
            </div>
            <div class="form-group">
                <label for="password_confirmation">@lang('messages.Confirm Password')</label>
                <input type="password" name="password_confirmation" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">@lang('messages.Update Account')</button>
        </form>
    </div>

    <div class="container" style="margin-bottom: 30px">
        <h1>@lang('messages.Delete Admin Account')</h1>
        <form action="{{ route('profile.destroy', $admin->id) }}" method="POST" style="display:inline;">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn-danger" style="height: 40px;width: 170px;">@lang('messages.Delete')</button>
        </form>
    </div>
@endsection
