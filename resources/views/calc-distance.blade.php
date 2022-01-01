@extends('layouts.app')

@section('content')
    <section class="px-6 py-8">
        <main class="max-w-lg mx-auto mt-10 bg-gray-100 border border-gray-200 p-6 rounded-xl">
            <h1 class="text-center font-bold text-xl">Calculate Edit Distance</h1>

            <form method="POST" action="" submit="return false;" class="mt-10">
                @csrf
                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="name" >
                        Text (a):
                    </label>

                    <input class="border border-gray-400 p-2 w-full" type="text" name="text-a" id="text-a" required >
                </div>

                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="username" >
                        Text (b):
                    </label>

                    <input class="border border-gray-400 p-2 w-full" type="text" name="text-b" id="text-b" required >
                </div>
                
                <div class="row m-0 p-2 bg-green-200 mb-4 d-none result-selector">
                    <div class="col-12">
                        <div id="result">
                            <!-- dynamic content -->
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-3 mb-2">
                        <button type="button" id="calc_hamming" class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500" >
                            Hamming Distance
                        </button>
                    </div>

                    <div class="col-3 mb-2">
                        <button type="button" id="calc_levenshtein" class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500" >
                            Levenshtein Distance
                        </button>
                    </div>
                </div>
                
            </form>
        </main>
    </section> 
@endsection
