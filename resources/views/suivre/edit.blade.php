@extends('layout.template')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Modifier un cours suivi </h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('suivre.index') }}"> Retour</a>
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

    <form action="{{route('suivre.update',$suivre->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Etudiant:</strong>
                    <select class="form-control" name="etudiant_id" id="etudiant_id">

                        @foreach ($etudiants as $etudiant)
                            <option value="{!! $etudiant->id !!}">{!! $etudiant->nom !!}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <strong>UE:</strong>
                    <select class="form-control" name="u_e_id" id="u_e_id">

                        @foreach ($UEs as $u_e)
                            <option value="{!! $u_e->id !!}">{!! $u_e->libelet !!}</option>
                        @endforeach
                    </select>                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Durée:</strong>
                    <input type="text" name="duree" value="{{ $suivre->duree }}" class="form-control" placeholder="Duree">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Date:</strong>
                    <input type="date" name="date" value="{{ $suivre->date }}" class="form-control" placeholder="Date">
                </div>
            </div>


            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Enregistrer</button>
            </div>
        </div>

    </form>
@endsection

