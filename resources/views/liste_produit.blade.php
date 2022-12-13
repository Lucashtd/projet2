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
                <a class="button-nav" href="{{ route('produit.index') }}" style="margin-right: 1%;">Accueil</a>
                <a class="button-nav" href="{{ route('produit.create') }}" style="margin-right: 1%;">Créer un produit</a>
                <a class="button-nav" href="" style="margin-right: 1%;">Créer une facture</a>
                <a class="button-nav" href="">afficher les facture</a>
            </header>
        </div>



        <table class="" style="margin-top: 5%;">
            <thead>
                <tr>
                    <th class="titre-table">Nom du Produit</th>
                    <th></th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>

            <tbody>
                @foreach($produits as $produit)
                <tr>
                    <td>{{ substr($produit->nomproduit,0,30) }}</td>
                    <td><a class="button-global" href="{{ route('produit.show', $produit->id) }}">Voir</a></td>
                    <td><a class="button-warning" href="{{ route('produit.edit', $produit->id) }}">Modifier</a></td>
                    <td>
                            <form action="{{ route('produit.destroy', $produit->id) }}" method="post">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                                <button class="button-danger" type="submit">Supprimer</button>
                            </form>
                        </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection