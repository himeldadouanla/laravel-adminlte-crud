@extends('layout.template')

@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Ajouter un UE</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('UEs.index') }}"> Retour</a>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('UEs.store') }}" method="POST">
        @csrf

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>enseignant:</strong>

                    <select class="form-control" name="enseignant_id" id="enseignant_id">

                        @foreach ($enseignants as $enseignant)
                            <option value="{!! $enseignant->id !!}">{!! $enseignant->nom !!}</option>
                         @endforeach
                    </select>
                </div>
            </div>
            <div>
                <div class="form-group">
                    <strong>Libelet:</strong>
                    <input type="text" name="libelet" class="form-control" placeholder="libelet">
                </div>
            </div>


            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Enregistrer</button>
            </div>
        </div>

    </form>
@endsection
