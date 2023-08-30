@extends('layout.template')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Detail d'un cours suivi</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('suivre.index') }}"> Retour</a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Etudiant:</strong>
                {{ $suivre->etudiant->nom }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>UE:</strong>
                {{ $suivre->UE->libelet }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Durée:</strong>
                {{ $suivre->duree }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Date:</strong>
                {{ $suivre->date }}
            </div>
        </div>
    </div>
@endsection
