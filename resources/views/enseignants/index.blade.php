@extends('layout.template')

@section('content')
    <div class="row">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="col-lg-12 margin-tb">
                    <div class="pull-left">
                        <div class="pull-left">
                            <h2>Liste des Enseignants</h2>
                        </div>
                    </div>
                    <div class="pull-right">
                        <div class="pull-right">
                            <a class="btn btn-success" href="{{ route('enseignants.create') }}">Ajouter un
                                enseignant</a>
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
            <th>Nom</th>
            <th>Prenom</th>
            <th>Telephone</th>
            <th>Email</th>
            <th>Date prise de fonction</th>
            <th width="280px">Action</th>
        </tr>
        @php $i=0; @endphp
        @foreach ($enseignants as $enseignant)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $enseignant->nom }}</td>
                <td>{{ $enseignant->prenom }}</td>
                <td>{{ $enseignant->telephone }}</td>
                <td>{{ $enseignant->email }}</td>
                <td>{{ $enseignant->date_prise_fonction }}</td>
                <td>
                    <form action="{{ route('enseignants.destroy',$enseignant->id) }}" method="POST">
                        <a class="btn btn-info" href="{{ route('enseignants.show',$enseignant->id) }}">Show</a>

                        <a class="btn btn-primary" href="{{ route('enseignants.edit',$enseignant->id) }}">Edit</a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>


@endsection
