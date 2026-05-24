@extends('layouts.matakuliah_layout')

@section('title', 'Tambah Mata Kuliah')

@section('content')
<div class="bg-white dark:bg-gray-800 relative shadow-md sm:rounded-lg
 overflow-hidden p-6 border border-gray-200 dark:border-gray-700 max-w-lg mx-auto">

    <div class="pb-4 mb-6 border-b border-gray-200 dark:border-gray-700">
        <h1 class="text-xl font-bold text-gray-900 dark:text-white">Form Tambah Mata Kuliah</h1>
        <p class="text-sm text-gray-500 dark:text-gray-400">Masukkan spesifikasi mata kuliah baru ke sistem db_oop.</p>
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

    <form action="{{ route('matakuliah.store') }}" method="POST">
        @csrf

        <div class="mb-4">
            <label for="kodeMK" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kode Mata Kuliah</label>
            <input type="text" name="kodeMK" id="kodeMK" value="{{ old('kodeMK') }}" class="bg-gray-50
            border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5
            dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white" placeholder="Kode Mata Kuliah" required>
        </div>

        <div class="mb-4">
            <label for="namaMK" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Mata Kuliah</label>
            <input type="text" name="namaMK" id="namaMK" value="{{ old('namaMK') }}" class="bg-gray-50 border border-gray-300
            text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700
            dark:border-gray-600 dark:placeholder-gray-400 dark:text-white" placeholder="Nama Mata Kuliah" required>
        </div>

        <div class="mb-4">
            <label for="sks" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jumlah SKS</label>
            <input type="number" name="sks" id="sks" value="{{ old('sks') }}" min="1" max="6" class="bg-gray-50 border
            border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5
            dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white" placeholder="Jumlah SKS" required>
        </div>


        <div class="mb-6">
            <label for="semester" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Semester Target</label>
            <input type="number" name="semester" id="semester" value="{{ old('semester') }}" min="1" max="8" class="bg-gray-50 border
            border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5
            dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white" placeholder="Semester" required>
        </div>

        <div class="flex justify-between items-center border-t border-gray-200 dark:border-gray-700 pt-4">
            <a href="{{ route('matakuliah.index') }}" class="text-gray-500 bg-white hover:bg-gray-100
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
