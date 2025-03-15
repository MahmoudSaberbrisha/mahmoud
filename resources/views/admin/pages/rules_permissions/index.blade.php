@extends('admin.masterpage')
@section('content')
    <div class="container">
        <h1>@lang('messages.Rules & Permissions')</h1>
        <a href="{{ route('rules.permissions.create') }}" class="btn btn-primary">@lang('messages.Create New Rule/Permission')</a>
        <table class="table">
            <thead>
                <tr>
                    <th>@lang('messages.Name')</th>
                    <th>@lang('messages.Actions')</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($rules as $rule)
                    <tr>
                        <td>{{ $rule->name }}</td>
                        <td>
                            <a href="{{ route('rules.permissions.show', $rule->id) }}"
                                class="btn btn-info">@lang('messages.VIEW')</a>
                            <a href="{{ route('rules.permissions.edit', $rule->id) }}"
                                class="btn btn-warning">@lang('messages.EDIT')</a>
                            <form action="{{ route('rules.permissions.destroy', $rule->id) }}" method="POST"
                                style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">@lang('messages.Delete')</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
