@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Raport</div>
                        <form action="{{route('reportEdit', $report[0]->visit_id)}}" method="POST">
                            @method('PUT')
                            @csrf
                            <div>
                                <label for="description">Description</label>
                                <input id="description" type="text">
                                <!-- TODO  Zone texte-->
                            </div>
                            <div>
                                <!-- TODO  Avis (étoile) -->
                            </div>
                            <div>
                                <label for="medicament">Médicament données</label>
                                <select id="medicament" multiple>
                                    <option value="">Choisir le médicament</option>
                                    @foreach($drugs as $drug)
                                        <option value="{{$drug->commercialName}}">{{$drug->commercialName}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <button type="submit">
                                <a href="{{route('home')}}"></a>Edit
                            </button>
                        </form>
                    <div class="card-body">

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
