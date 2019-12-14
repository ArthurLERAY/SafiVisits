<!-- todo list with search bar -->
@section('js')
    <script>
        $(document).ready(function () {
            $('.Datatables').dataTable();
        });
    </script>
@stop
<table class="Datatables">
    <thead>
        <tr>
            <th>
                Heure
            </th>
            <th>
                Lieu
            </th>
            <th>
                Personne
            </th>
            <th>
                Actions
            </th>
        </tr>
    </thead>
    <tbody>
    @if (isset($visites))
            @foreach($visites as $visite)
                <tr>
                    <td>
                        {{$visite->date}}
                    </td>
                </tr>
            @endforeach

    @endif
    </tbody>
</table>



