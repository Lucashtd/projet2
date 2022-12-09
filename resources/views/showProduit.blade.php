@extends('template1')
    @section('contenu')
        <div class="card">
            <header class="card-header">
                <p class="card-header-title"><strong>Nom du Produit</strong> : {{ $produit->nomproduit }}</p>
            </header>
            <div class="card-content">
                <div class="content">
                    <p>Prix unitaire : {{ $produit->prixunitaire }}</p>
                    <hr>
                    <p>Référence : {{ $produit->ref }}</p>
                </div>
            </div>
            <footer class="card-footer is-centered">
            <a class="button is-info" href="{{ route('produit.liste') }}">Retour à la liste</a>
        </footer>
        </div>
    @endsection
