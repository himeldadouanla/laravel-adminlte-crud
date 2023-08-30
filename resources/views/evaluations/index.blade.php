@extends('layout.template')

@section('content')
    <div class="row">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="col-lg-12 margin-tb">
                    <div class="pull-left">
                        <div class="pull-left">
                            <h2>Liste des Évaluations</h2>
                        </div>
                    </div>
                    <div class="pull-right">
                        <div class="pull-right">
                            <a class="btn btn-success" href="{{ route('evaluations.create') }}">Ajouter une Évaluation</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
        <tr>
            <th>No</th>
            <th>Etudiant</th>
            <th>UE</th>
            <th>Date</th>
            <th>Heure</th>
            <th>Durée</th>
            <th>Note</th>
            <th width="280px">Action</th>
        </tr>
        @php $i=0; @endphp
        @foreach ($evaluations as $evaluation)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $evaluation->etudiant->nom }}</td>
                <td>{{ $evaluation->UE->libelet }}</td>
                <td>{{ $evaluation->date }}</td>
                <td>{{ $evaluation->heure }}</td>
                <td>{{ $evaluation->duree }}</td>
                <td>{{ $evaluation->note }}</td>
                <td>
                    <form action="{{ route('evaluations.destroy',$evaluation->id) }}" method="POST">
                        <a class="btn btn-info" href="{{ route('evaluations.show',$evaluation->id) }}">Show</a>

                        <a class="btn btn-primary" href="{{ route('evaluations.edit',$evaluation->id) }}">Edit</a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>


@endsection
