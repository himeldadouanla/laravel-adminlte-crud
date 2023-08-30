@extends('layout.template')

@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Ajouter un Etudiant</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('etudiants.index') }}"> Retour</a>
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

    <form action="{{ route('etudiants.store') }}" method="POST">
        @csrf
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nineau:</strong>
                <select class="form-control" name="niveau_id" id="niveau_id">

                    @foreach ($niveaux as $niveau)
                        <option value="{!! $niveau->id !!}">{!! $niveau->libelet !!}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Matricule:</strong>
                    <input type="text" name="matricule" class="form-control" placeholder="atricule">
                </div>
            </div>
            <div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <strong>Nom:</strong>
                    <input type="text" name="nom" class="form-control" placeholder="Nom">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Prenom:</strong>
                    <input type="text" name="prenom" class="form-control" placeholder="Prenom">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Date de naissance:</strong>
                    <input type="date" name="date_de_naissance" class="form-control" placeholder="DateN">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Lieu:</strong>
                    <input type="text" name="lieu" class="form-control" placeholder="Lieu">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Telephone:</strong>
                    <input type="number" name="telephone" class="form-control" placeholder="Telephone">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Email:</strong>
                    <input type="text" name="email" class="form-control" placeholder="Email">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Année-scolaire:</strong>
                    <input type="text" name="annee_scolaire" class="form-control" placeholder="Année-scolaire">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Enregistrer</button>
            </div>
        </div>

    </form>
@endsection
