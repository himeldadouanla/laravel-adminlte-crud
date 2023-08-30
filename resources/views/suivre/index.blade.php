@extends('layout.template')

@section('content')
    <div class="row">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="col-lg-12 margin-tb">
                    <div class="pull-left">
                        <div class="pull-left">
                            <h2>Liste des cours suivis</h2>
                        </div>
                    </div>
                    <div class="pull-right">
                        <div class="pull-right">
                            <a class="btn btn-success" href="{{ route('suivre.create') }}">Ajouter un cours suivi</a>
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
            <th>Durée</th>
            <th>Date</th>
            <th width="280px">Action</th>
        </tr>
        @php $i=0; @endphp
        @foreach ($suivres as $suivre)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $suivre->etudiant->nom }}</td>
                <td>{{ $suivre->ue->libelet }}</td>
                <td>{{ $suivre->duree }}</td>
                <td>{{ $suivre->date }}</td>
                <td>
                    <form action="{{ route('suivre.destroy',$suivre->id) }}" method="POST">
                        <a class="btn btn-info" href="{{ route('suivre.show',$suivre->id) }}">Show</a>

                        <a class="btn btn-primary" href="{{ route('suivre.edit',$suivre->id) }}">Edit</a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>


@endsection
