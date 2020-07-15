@extends('master.master')
@section('title', 'Land')

@section('content')
<div class='row'>
    <div class='col-md-3'>
        hello world
    </div>
    <div class='col-md-9'>
        <div class='container'>
        @include('_partials.land')
        </div>
    </div>
</div>
@endsection