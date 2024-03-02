@section('races')
<div class="container">
    <div class="row mt-4 mb-2">
        <div class="col-md-10">
            <h1>RACES</h1>
        </div>
        <div class="col-md-2 d-flex align-items-center">
            <a href="{{ route('race.create') }}" class="btn btn-primary">Añadir carrera</a>
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
                    @foreach ($races as $race)
                    <tr>
                        <td>{{ $race->id }}</td>
                        <td>{{ $race->desnivel }}</td>
                        <td>{{ $race->competidores }}</td>
                        <td>{{ $race->distancia }}</td>
                        <td>{{ $race->fecha }}</td>
                        <td>{{ $race->hora }}</td>
                        <td>{{ $race->inscripcion }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@show