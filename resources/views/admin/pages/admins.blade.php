@extends('admin.masterpage')

@section('content')
    <div class="container">
        <h1>@lang('messages.Admins')</h1>
        <a href="{{ route('admins.create') }}" class="btn btn-primary">@lang('messages.Create New Admin')</a>
        <table class="table">
            <thead>
                <tr>
                    <th>@lang('messages.Name')</th>
                    <th>@lang('messages.Email')</th>
                    <th>@lang('messages.Actions')</th>
                    <th>@lang('messages.Permissions')</th>
                    <th>@lang('messages.Rules')</th>
                </tr>
                @foreach ($admins as $admin)
                    <tr>
                        <td>{{ $admin->name }}</td>
                        <td>{{ $admin->email }}</td>
                        <td>
                            @can('view', $admin)
                                <button style="height: 40px;width: 70px;"> <a href="{{ route('admins.show', $admin->id) }}"
                                        class="btn btn-info">@lang('messages.VIEW')</a></button>
                            @endcan
                            @can('create', $admin)
                                <button style="height: 40px;width: 70px;"> <a href="{{ route('admins.edit', $admin->id) }}"
                                        class="btn btn-warning">@lang('messages.EDIT')</a></button>
                            @endcan
                            @can('delete', $admin)
                                <form action="{{ route('admins.destroy', $admin->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn-danger"
                                        style="height: 40px;width: 70px;">@lang('messages.Delete')</button>
                                </form>
                            @endcan
                            {{-- @csrf --}}
                            {{-- @method('DELETE') --}}
                            {{-- <button type="submit" class="btn-danger" style="height: 40px;width: 70px;">Delete</button> --}}
                            </form>
                        </td>
                        <td>
                            @foreach ($admin->permissions as $permission)
                                <span class="badge badge-secondary">{{ $permission->name }}</span>
                            @endforeach
                        </td>
                        <td>
                            <button><a href="{{ route('rules') }}">@lang('messages.Rules')</a></button>
                        </td>
                    </tr>
                @endforeach
                </tbody>
        </table>
    </div>
@endsection
