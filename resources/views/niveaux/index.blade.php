@extends('layout.template')

@section('content')
    <div class="row">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="col-lg-12 margin-tb">
                    <div class="pull-left">
                        <div class="pull-left">
                            <h2>Liste des Niveaux</h2>
                        </div>
                    </div>
                    <div class="pull-right">
                        <div class="pull-right">
                            <a class="btn btn-success" href="{{ route('niveaux.create') }}">Ajouter un Niveau</a>
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
            <th>Libelet</th>
            <th width="280px">Action</th>
        </tr>
        @php $i=0; @endphp
        @foreach ($niveaux as $niveau)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $niveau->libelet }}</td>
                <td>
                    <form action="{{ route('niveaux.destroy',$niveau->id) }}" method="POST">
                        <a class="btn btn-info" href="{{ route('niveaux.show',$niveau->id) }}">Show</a>

                        <a class="btn btn-primary" href="{{ route('niveaux.edit',$niveau->id) }}">Edit</a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>


@endsection
