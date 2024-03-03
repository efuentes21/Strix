@section('sponsors')
<div class="container">
    <div class="row mt-4 mb-2">
        <div class="col-md-10">
            <h1>SPONSORS</h1>
        </div>
        <div class="col-md-2 d-flex align-items-center">
            <a href="{{ route('sponsor.create') }}" class="btn btn-primary">ADD SPONSORS</a>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Desnivel</th>
                        <th>Competidores</th>
                        <th>Distancia</th>
                        <th>Fecha</th>
                        <th>Hora</th>
                        <th>Inscripción</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($sponsors as $sponsor)
                    <tr>
                        <td>{{ $sponsor->id }}</td>
                        <td>{{ $sponsor->desnivel }}</td>
                        <td>{{ $sponsor->competidores }}</td>
                        <td>{{ $sponsor->distancia }}</td>
                        <td>{{ $sponsor->fecha }}</td>
                        <td>{{ $sponsor->hora }}</td>
                        <td>{{ $sponsor->inscripcion }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@show