@extends('template1')
@section('css')
@endsection

@section('contenu')
@if(session()->has('info'))
<div class="notification is-success">
    {{ session('info') }}
</div>
@endif


    <div class="container">
        <div class="" style="width:100%">
            <header class="">
                <p class="titre">Application (nom a venir)</p>
                <a class="button-nav" href="{{ route('produit.create') }}" style="margin-right: 1%;">Créer un produit</a>
                <a class="button-nav" href="{{ route('produit.liste') }}" style="margin-right: 1%;">Liste des produits</a>
                <a class="button-nav" href="" style="margin-right: 1%;">Créer une facture</a>
                <a class="button-nav" href="">afficher les facture</a>
            </header>
        </div>
    </div>
@endsection