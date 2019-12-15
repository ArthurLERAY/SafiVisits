@extends('layouts.app')
@section('js')
    @parent
    $('.dataTable').dataTable();
@endsection
