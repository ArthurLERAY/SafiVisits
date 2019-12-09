@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="col-3">
                        @component('_partials.box')
                            <h3>{{ $reports->count() }}</h3>
                            {{ Str::plural('Report',$reports->count()) }}
                        @endcomponent
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
