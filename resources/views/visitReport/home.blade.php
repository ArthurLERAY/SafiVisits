@extends('page')

@section('content')

    <div class="row justify-content-center">
        <div>
            <br>
            <p>Raisons de la visite: {{$report->reason}}</p>


            <label for="description">Description du rapport</label>
        </div>
    </div>

    <div class="row justify-content-center">
        <textarea id="description" rows="5" cols="33">
            {{$report->results}}
        </textarea>
    </div>
    <div class="row justify-content-center">
        <a href="{{route('reportEdit',['id'=>$report->id])}}">
            <button class="edit-modal btn btn-info">
                <span class="glyphicon glyphicon-edit"></span> voir le rapport
            </button>
        </a>
    </div>




@endsection
