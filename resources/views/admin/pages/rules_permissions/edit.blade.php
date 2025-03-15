@extends('admin.masterpage')

@section('content')
    <div class="container">
        <h1>@lang('messages.Edit Rule/Permission')</h1>
        <form action="{{ route('rules.permissions.update', $rule->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">@lang('messages.Name')</label>
                <input type="text" name="name" class="form-control" value="{{ $rule->name }}" required>
            </div>
            <button type="submit" class="btn btn-primary">@lang('messages.Update Rule/Permission')</button>
        </form>
    </div>
@endsection
