@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="card">
                <div class="card-header">Tableau de bord</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Vous êtes connecté!
                </div>
            </div>

            <div class="card mt-3">
                <div class="card-header">De quoi vous inspirer : )</div>

                <div class="card-body">
                    <citation-component
                            citation="Le succès n'est pas final, l'échec n'est pas fatal. C'est le courage de continuer qui compte."
                            auteur="Winston Churchill">
                    </citation-component>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
