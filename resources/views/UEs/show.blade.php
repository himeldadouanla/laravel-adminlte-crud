@extends('layout.template')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Detail d'un UE</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('UEs.index') }}"> Retour</a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Enseignant:</strong>
                {{ $u_e->enseignant->nom }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Libelet:</strong>
                {{ $u_e->libelet }}
            </div>
        </div>
    </div>
@endsection
