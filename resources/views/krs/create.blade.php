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
    
    <input type="hidden" name="mahasiswa_id" value="3312511130">
    <div class="mb-4">
        <label class="block mb-2 text-sm font-medium text-gray-900">Pilih Mata Kuliah</label>
        <select name="kodeMK" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
            @foreach($mataKuliah as $mk)
                <option value="{{ $mk->kodeMK }}">{{ $mk->namaMK }} ({{ $mk->sks }} SKS)</option>
            @endforeach
        </select>
    </div>

    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2">Simpan</button>
</form>
</div>
@endsection
