@extends('layouts.krs_layout')

@section('title', 'Tambah KRS')

@section('content')
<div class="bg-white dark:bg-gray-800 relative shadow-md sm:rounded-lg
 overflow-hidden p-6 border border-gray-200 dark:border-gray-700 max-w-lg mx-auto">

    <div class="pb-4 mb-6 border-b border-gray-200 dark:border-gray-700">
        <h1 class="text-xl font-bold text-gray-900 dark:text-white">Form Tambah Mata Kuliah</h1>
        <p class="text-sm text-gray-500 dark:text-gray-400">Masukkan mata kuliah pada daftar KRS.</p>
    </div>

    @if ($errors->any())
    <div class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400" role="alert">
        <ul class="list-disc pl-5 font-medium">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form action="{{ route('krs.store') }}" method="POST">
        @csrf

        <div class="p-4 mb-4 text-sm text-gray-500 dark:text-gray-400 text-center font-medium">
        Belum ada data mata kuliah di sini.
        </div>

        <div class="flex justify-between items-center border-t border-gray-200 dark:border-gray-700 pt-4">
            <a href="{{ route('krs.index') }}" class="text-gray-500 bg-white hover:bg-gray-100
            focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5
            py-2.5 hover:text-gray-900 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600">
                Kembali
            </a>
            <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none
             focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700
             dark:focus:ring-blue-800">
                Simpan
            </button>
        </div>
    </form>
</div>
@endsection
