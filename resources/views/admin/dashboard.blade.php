    @extends('admin.masterpage')
    @section('content')
        <center>
            <Welcome style="font-size: 60px"> حسبنا الله ونعم الوكيل فيكم كلكم..........
                {{ Auth::guard('admin')->user()->name }} يقول
            </Welcome>
        </center>
    @endsection
