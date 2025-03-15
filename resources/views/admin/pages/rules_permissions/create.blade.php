@extends('admin.masterpage')

@section('content')
    <div class="container">
        <h1>@lang('messages.Create New Rule/Permission')</h1>
        <form action="{{ route('rules.permissions.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">@lang('messages.Name')</label>
                <input type="text" name="name" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">@lang('messages.Create Rule/Permission')</button>
        </form>
    </div>
@endsection
