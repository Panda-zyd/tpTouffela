@extends('main')


@section('content')
    <div class="container w-25 mx-auto">
        <form action="{{route('etudiants.update', $etudiants->codeE)}}" method="post" class="d-flex w-full inverted-colors:outline">
            @csrf
            @method('PUT')
            <label cclass="form-group">
                Nom:
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" name="title" value="{{ $etudiants->nom }}" placeholder="Title" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" required />
            </label>
            <label class="form-group">
                prenom
                <input name="prenom" value="{{$etudiants->prenom}}" placeholder="prenom" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" required />
            </label>
            <label class="form-group">
                address:
                <input name="address" value="{{$etudiants->adresse}}" placeholder="address" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" required />
            </label>
            <label class="form-group">
                Date de naissance:
                <input name="address" type="date" value="{{$etudiants->dateNaissance}}" placeholder="address" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" required />
            </label>
            <button class="btn btn-primary bg-blue-500 hocus:bg-blue-600 p-2 rounded" type="submit">Confirm changes</button>
        </form>
    </div>
@endsection

