@section('js')
    <script>
        $(document).ready(function() {
            $('#table').DataTable();
        } );
    </script>
@endsection
<table class="table" id="table">
    <thead>
    <tr>
        <th class="text-center">Heure</th>
        <th class="text-center">Lieu</th>
        <th class="text-center">Personne</th>
        <th class="text-center">Action</th>
    </tr>
    </thead>
    <tbody>
    @foreach($items as $data)
        <tr>
            <td class="text-center">{{$data->date}}</td>
            <td class="text-center">{{$pratitioner->address}}</td>
            <td class="text-center">{{$pratitioner->firstname.' '.$pratitioner->lastname}}</td>
            <td>
                <a href="{{route('report',['id'=>$pratitioner->id])}}">
                    <button class="edit-modal btn btn-info">
                        <span class="glyphicon glyphicon-edit"></span> voir le rapport
                    </button>
                </a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>

