@extends('template1')
@section('contenu')
    
<div class="container">
    <div class="titre" style="margin-bottom: 1%;">
        <h1>Application (nom a venir)</h1>
        <h2>Création d'un produit</h2>
    </div>
    <div>
        <form action="{{ route('produit.store') }}" method="POST" style="padding-top: 3%;">
           @csrf
            <div>
                <label id="nomproduit">Nom du produit : </label>
                <input class="form" id="nomproduit" type="text" name="nomproduit" value="{{ old('nomproduit') }}">
            </div>
            <div>
                <label id="prixunitaire">Prix unitaire : </label>
                <input class="form" type="number" name="prixunitaire" id="prixunitaire">
            </div>
            <div>
                <label id="ref">Réference du produit : </label>
                <input class="form" type="text" name="ref" id="ref">
            </div>
            <div>
                <button class="button-global" style="width: 10%; margin-top: 2%;">Confirmer</button>
            </div>
        </form>
        <div>
            <a class="button-global" href="{{ route('produit.index') }}" style="width: 10%; margin-top: 1%;">retour</a>
        </div>
    </div>
</div>
    
@endsection