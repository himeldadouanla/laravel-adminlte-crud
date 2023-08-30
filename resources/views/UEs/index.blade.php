@extends('layout.template')

@section('content')
    <div class="row">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="col-lg-12 margin-tb">
                    <div class="pull-left">
                        <div class="pull-left">
                            <h2>Liste des UE</h2>
                        </div>
                    </div>
                    <div class="pull-right">
                        <div class="pull-right">
                            <a class="btn btn-success" href="{{ route('UEs.create') }}">Ajouter un UE</a>
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
            <th>Enseignant</th>
            <th>Libelet</th>
            <th width="280px">Action</th>
        </tr>
        @php $i=0; @endphp
        @foreach ($u_es as $u_e)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $u_e->enseignant->nom }}</td>
                <td>{{ $u_e->libelet }}</td>
                <td>
                    <form action="{{ route('UEs.destroy',$u_e->id) }}" method="POST">
                        <a class="btn btn-info" href="{{ route('UEs.show',$u_e->id) }}">Show</a>

                            <a class="btn btn-primary" href="{{ route('UEs.edit',$u_e->id) }}">Edit</a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>


@endsection
