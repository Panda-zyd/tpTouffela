@extends('main')

@section('content')
    <a class="link link-primary" href="{{route('etudiants.create')}}">Add user</a>
<h1>Liste des étudiants</h1>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<form action="{{route('etudiants.search')}}" method="GET">
    @csrf
    <div class="form-group d-flex flex-row">
        <input type="search" class="form-control" name="keyword" placeholder="Code ou name ...">
        <button type="submit" class="btn btn-primary">Search</button>
    </div>
</form>
    <table>
    <thead>
    <tr>
        <th>Code</th>
        <th>Nom</th>
        <th>Prénom</th>
        <th>Adresse</th>
        <th>Date de naissance</th>
        <th>Sale pleine</th>
        <th>Action</th>
    </tr>
    </thead>
    <tbody>
    @foreach($etudiants as $etudiant)
        <tr>
            <td>{{ $etudiant->codeE }}</td>
            <td>{{ $etudiant->nom }}</td>
            <td>{{ $etudiant->prenom }}</td>
            <td>{{ $etudiant->adresse }}</td>
            <td>{{ $etudiant->dateNaissance }}</td>
            <td><div class="d-none">{{
                $randomInt = rand(0, 1)}}</div>
                {{$randomInt ? "yes" : "no"}}</td>
            <td class="d-flex">
                <a class="btn btn-primary" href="{{route('etudiants.edit',$etudiant->codeE)}}">Edit</a>
                <form action="{{route('etudiants.destroy',$etudiant->codeE)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger">Delete</button>
                </form>
            </td>
{{--            <td>{{ $etudiant->classe->libelle }}</td>--}}
{{--            <td>{{ $etudiant->formation->Titre }}</td>--}}
        </tr>
    @endforeach
    </tbody>
</table>
    {{$etudiants->links()}}
@endsection
