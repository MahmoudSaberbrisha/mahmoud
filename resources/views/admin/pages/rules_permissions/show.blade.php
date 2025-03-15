@extends('admin.masterpage')

@section('content')
    <div class="container">
        <h1>@lang('messages.Rule/Permission Details')</h1>
        <p><strong>@lang('messages.Name')</strong> {{ $rule->name }}</p>

        <a href="{{ route('rules.permissions.edit', $rule->id) }}" class="btn btn-warning">@lang('messages.Edit messages.Edit Rule/Permission')</a>
        <form action="{{ route('rules.permissions.destroy', $rule->id) }}" method="POST" style="display:inline;">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">@lang('messages.Delete Rule/Permission')</button>
        </form>
        <a href="{{ route('rules.permissions.index') }}" class="btn btn-secondary">@lang('messages.Back to Rules/Permissions')</a>
    </div>
@endsection
