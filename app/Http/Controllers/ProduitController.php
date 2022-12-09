<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProduitRequest;
use App\Models\Produit;
use Illuminate\Http\Request;

class ProduitController extends Controller
{
    public function index(){
        return view('index');
    }

    
    public function create()
    {
        $produits=Produit::all();
        return view('creer_produit', compact('produits'));
    }

    public function store(ProduitRequest $request, Produit $produit)
    {
        $produit->nomproduit=$request->nomproduit;
        $produit->prixunitaire=$request->prixunitaire;
        $produit->ref=$request->ref;
        $produit->save();
        return redirect()->route('produit.index')->with('info','Le Produit ' . $produit->nomproduit . ' a été créée');
    }

    public function liste(){

        $produits = Produit::all();
        return view('liste_produit', compact('produits'));
    }

    public function show(Produit $produit){

        return view('showProduit', compact('produit'));
    }

    public function edit(Produit $produit){
        return view('editProduit', compact('produit'));
    }

    public function update(ProduitRequest $request, Produit $produit){
        $produit->update($request->all());
        return redirect()->route('produit.liste')->with('info', 'Le produit a été mis a jour');
    }

    public function destroy(Produit $produit){
        $produit->delete();
        return redirect()->route('produit.liste')->with('info', 'Le produit a été supprimer');
    }
}
