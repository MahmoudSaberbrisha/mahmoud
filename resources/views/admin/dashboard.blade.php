    @extends('admin.masterpage')
    @section('content')
        <center>
            <Welcome style="font-size: 60px">Welcome Back MR {{ Auth::guard('admin')->user()->name }} In Admin Dashboard
            </Welcome>
        </center>
    @endsection
