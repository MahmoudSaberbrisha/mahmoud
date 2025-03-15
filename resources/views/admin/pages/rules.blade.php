@extends('admin.masterpage')
@section('content')
    <center class="row">
        <h1>@lang('messages.Rules & Permissions')</h1>

        <form action="{{ route('rules.permissions.store') }}" method="POST" class="row" style="margin: 20px">
            @csrf
            @foreach ($rules as $rule)
                <div class="checkbox-wrapper-4">

                    <input class="inp-cbx" id="{{ $rule->id }}" name="rules[]" value="{{ $rule->id }}" type="checkbox">
                    <label class="cbx" for="{{ $rule->id }}"><span>
                            <svg width="12px" height="10px">
                            </svg>
                        </span>
                        <div class="container">
                            {{ $rule->name }}

                        </div>
                    </label>
                    <svg class="inline-svg">
                        <symbol id="check-4" viewBox="0 0 12 10">
                            <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                        </symbol>
                    </svg>
                </div>
            @endforeach
            <button type="submit">Save Selected Rules</button>
        </form>
    </center>
@endsection
