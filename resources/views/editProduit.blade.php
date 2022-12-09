@extends('template1')
@section('contenu')
<div class="card" style="padding: 2%;">
    <header class="card-header">
        <p class="card-header-title">Application (nom a venir)</p>
        <a class="button is-info" href="{{ route('produit.index') }}" style="margin-right: 1%;">Accueil</a>
        <a class="button is-info" href="{{ route('produit.create') }}" style="margin-right: 1%;">Créer un produit</a>
        <a class="button is-info" href="" style="margin-right: 1%;">Créer une facture</a>
        <a class="button is-info" href="">afficher les facture</a>
    </header>

    <div class="content" style="padding: 2%;">
        <form class="form-horizontal" method="POST" action="{{ route('produit.update', $produit->id) }}">
            {{ csrf_field() }}

            {{ method_field('PUT') }}

            <div class="field">
                <label id="nomproduit">Nom du produit : </label>
                <input name="nomproduit" id="nomproduit" type="text" value="{{ old('nomproduit', $produit->nomproduit) }}" require> 
            </div>
            <div class="field">
                <label id="prixunitaire">Prix unitaire : </label>
                <input name="prixunitaire" id="prixunitaire" type="number" value="{{ old('prixunitaire', $produit->prixunitaire) }}" require>
            </div>
            <div class="field">
                <label id="ref">Référence du produit : </label>
                <input name="ref" id="ref" type="text" value="{{ old('ref', $produit->ref) }}" require>
            </div>
            <button type="submit" class="button is-link">Enregistrer</button>
            <a class="button is-info" href="{{ route('produit.liste') }}">Retour</a>
        </form>
    </div>
</div>