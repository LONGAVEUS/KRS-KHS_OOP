@extends('layouts.nilai_layout')

@section('title', 'Input Nilai')

@section('content')
<div class="bg-white dark:bg-gray-800 relative shadow-md sm:rounded-lg overflow-hidden p-6 border border-gray-200 dark:border-gray-700">

    <div class="pb-4 border-b border-gray-200 dark:border-gray-700">
        <h1 class="text-2xl font-bold text-gray-900 dark:text-white">Input Nilai</h1>
        <p class="text-sm text-gray-500 dark:text-gray-400">Tambah data nilai mahasiswa</p>
    </div>

    <form action="{{ route('nilai.store') }}" method="POST" class="mt-6 space-y-4">
        @csrf

        <div>
            <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">NIM Mahasiswa</label>
            <input type="text" name="mahasiswa_id"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:text-white"
                placeholder="Contoh: 3312501105" required>
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Mata Kuliah</label>
            <select name="matakuliah_id"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                @foreach($daftarMataKuliah as $mk)
                    <option value="{{ $mk->kodeMK }}">{{ $mk->namaMK }}</option>
                @endforeach
            </select>
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Semester Target</label>
            <input type="number" name="semesterTarget" min="1" max="8"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:text-white"
                required>
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Nilai Angka</label>
            <input type="number" name="nilaiAngka" min="0" max="100" step="0.1"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:text-white"
                required>
        </div>

        <div class="flex space-x-3 pt-2">
            <button type="submit"
                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                Simpan
            </button>
            <a href="{{ route('nilai.index') }}"
                class="text-gray-700 bg-gray-100 hover:bg-gray-200 focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-gray-700 dark:text-gray-300 dark:hover:bg-gray-600">
                Batal
            </a>
        </div>
    </form>
</div>
@endsection