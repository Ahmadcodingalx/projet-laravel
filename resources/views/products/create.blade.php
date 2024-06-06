@extends('layout.base')

@section('content')
    <div class="container mt-4">
        <div class="row">
            <div class="col-xl-4"></div>
            <div class="col-xl-4">
                <h1>Créer un produit</h1> <br/>

                    @if ($message = Session::get('error'))
                        <div class="alert alert-danger" role="alert">
                            {{ $message }}
                        </div>
                    @endif
                <form action="{{ route('product_store') }}" method="post" enctype="multipart/form-data">
                    @csrf {{-- En Laravel, @csrf est une directive Blade utilisée pour insérer un jeton CSRF (Cross-Site Request Forgery) dans les formulaires HTML. Ce jeton est utilisé pour protéger les applications web contre les attaques CSRF. --}}
                    <label for="name">Nom du produit</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Saisire le nom du produit ici...">
                    
                    <label for="name">Prix du produit</label>
                    <input type="number" id="price" name="price" class="form-control" min="1000" max="1000000" value="1000" placeholder="Prix du produit">

                    <label for="description">Description du produit</label>
                    <textarea name="description" id="description" class="form-control" cols="30" rows="4" placeholder="Saisire la description ici..."></textarea>

                    <label for="file">Image de couverture</label>
                    <div>
                        <input type="file" name="file" id="file" placeholder="Joindre un fichier" class="form-control">
                    </div>
                    <br/>

                    <button type="submit" class="btn btn-primary">Publier</button>
                </form>
            </div>
            <div class="col-xl-4"></div>
        </div>
    </div>
@endsection