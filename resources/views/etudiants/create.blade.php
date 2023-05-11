@extends('main')


@section('content')
    <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 w-50" method="post" action={{route("etudiants.store")}}>
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="mb-4">
            <label class="block text-gray-700 font-bold mb-2" for="title">
                Nom
            </label>
            <input required name="nom" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="title" type="text" placeholder="Enter Title">
        </div>
        <div class="mb-6">
            <label class="block text-gray-700 font-bold mb-2" for="content">
                Prenom
            </label>
            <input name="prenom" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="content" type="text" placeholder="Enter Content">
        </div>
        <div class="mb-6">
            <label class="form-group block text-grey-700 font-bold mb-2" for="address">
                Address
                <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" name="addresse" value="1" />
            </label>
            </div>
        <div class="mb-6">
            <label class="form-group block text-grey-700 font-bold mb-2" for="address">
                date de naissance
                <input type="date" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" name="date_naissance" />
            </label>
        </div>
        <div class="flex items-center justify-between">
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                Submit
            </button>
            <a class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" href={{route("etudiants.index")}}>
                Cancel
            </a>
        </div>
    </form>

@endsection

