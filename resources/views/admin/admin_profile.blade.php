@extends('admin.admin_dash')

@section('content')
<div class="card mt-5 w-75 p-3 text-primary bg-warning opacity-50">
    <div class="card-body">
        <strong>
            Name: {{ $data->name }} <br><br>
            Email: {{ $data->email }} <br><br>
            Mobile: {{ $data->mobile }}
        </strong>
    </div>
</div>
@endsection
