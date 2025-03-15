@extends('admin.masterpage')

@section('content')
    <div class="container">
        <h1>@lang('messages.Admin Details')</h1>
        <p><strong>@lang('messages.Name'):</strong> {{ $admin->name }}</p>
        <p><strong>@lang('messages.Email'):</strong> {{ $admin->email }}</p>

        <a href="{{ route('admins.edit', $admin->id) }}" class="btn btn-warning">Edit Admin</a>
        <form action="{{ route('admins.destroy', $admin->id) }}" method="POST" style="display:inline;">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">@lang('messages.Delete Admin Account')</button>
        </form>
        <a href="{{ route('admins.index') }}" class="btn btn-secondary">@lang('messages.Back to Admins')</a>
    </div>
@endsection
