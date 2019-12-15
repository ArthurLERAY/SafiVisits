@extends('page')

@section('content')
    <div class="col-md-6">
        @component('/_partials/list',['items'=>$visites,'pratitioner'=>$pratitioner])
        @endcomponent
    </div>
@endsection
