@extends('layouts.app')

@section('content')
    @component('/_partials/list',['items'=>$pratitioners])
    @endcomponent
@endsection
