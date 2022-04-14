@extends('produits.layout')

@section('content')
<style>
.exempleimage{
    background: #C4C4C4;
    width: 160px;
    height: 200px;
    margin: 0 auto;
}

 table.tablo {
  /* border: 1px solid #C4C4C4; */
  
  width: 100%;
  text-align: center;
 
}
table.tablo td, table.tablo th {
  border: 1px solid #C4C4C4;
  background-color: #9FE8FA;
  padding: 5px 0px;
}
table.tablo tbody td {
  font-size: 25px;
  color: #000000;
}
    .espace{
         height : 25px;
    }
    
    </style>

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="float-start">
                <h2>Liste des films</h2>
            </div>
            <div class="float-end">
                <a class="btn btn-secondary" href="{{ route('produits.create') }}"> Ajouter un nouveau film</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="tablo">
        {{-- <tr>
            <th>Numéro</th>
            <th>Libellé</th>
            <th>Prix</th>
            <th>Quantité</th>
            <th>Description</th>
            <th width="280px">Action</th>
        </tr> --}}
        @foreach ($produits as $produit)
        <tr>

            <td>{{ $produit->npro }}<br><div class="exempleimage">miniature<br>film</div></td>
            <td>{{ $produit->libelle }}<br>{{ $produit->description }}</td>
            {{-- <td>{{ $produit->prix }}</td>
            <td>{{ $produit->qstock }}</td> --}}
            <td></td>
            <td>
                <form action="{{ route('produits.destroy',$produit->npro) }}" method="POST">

                    <a class="btn btn-outline-primary" href="{{ route('produits.show',$produit->npro) }}">Montrer</a>

                    <a class="btn btn-outline-success" href="{{ route('produits.edit',$produit->npro) }}">Éditer</a>

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-outline-danger">Supprimer</button>
                </form>
            </td>
        </tr>
        <tr class=espace></tr>
        @endforeach
    </table>
    <div class="d-flex justify-content-center pagination-lg">
    {!! $produits->links('pagination::bootstrap-4') !!}
      </div>
@endsection
