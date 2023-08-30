@extends('layout.template')

@section('content')
    <div class="row">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="col-lg-12 margin-tb">
                    <div class="pull-left">
                        <div class="pull-left">
                            <h2>Liste des étudiants</h2>
                        </div>
                    </div>
                    <div class="pull-right">
                        <div class="pull-right">
                            <a class="btn btn-success" href="{{ route('etudiants.create') }}">Ajouter un Etudiant</a>
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
            <th>Matricule</th>
            <th>Nom</th>
            <th>Prenom</th>
            <th>Date de naissance</th>
            <th>Lieu</th>
            <th>Telepone</th>
            <th>Email</th>
            <th>Année-scolaire</th>
            <th>Niveau</th>

            <th width="280px">Action</th>
        </tr>
        @php $i=0; @endphp
        @foreach ($etudiants as $etudiant)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $etudiant->matricule }}</td>
                <td>{{ $etudiant->nom }}</td>
                <td>{{ $etudiant->prenom }}</td>
                <td>{{ $etudiant->date_de_naissance }}</td>
                <td>{{ $etudiant->lieu }}</td>
                <td>{{ $etudiant->telephone }}</td>
                <td>{{ $etudiant->email }}</td>
                <td>{{ $etudiant->annee_scolaire }}</td>
                <td>{{ $etudiant->niveau->libelet }}</td>

                <td>
                    <form action="{{ route('etudiants.destroy',$etudiant->id) }}" method="POST">
                        <a class="btn btn-info" href="{{ route('etudiants.show',$etudiant->id) }}">Show</a>

                        <a class="btn btn-primary" href="{{ route('etudiants.edit',$etudiant->id) }}">Edit</a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>


@endsection
