<!-- Mengarahkan ke nama layout barumu -->
@extends('layouts.matakuliah_layout')

@section('title', 'Daftar Mata Kuliah')

@section('content')
<div
    class="bg-white dark:bg-gray-800 relative shadow-md sm:rounded-lg overflow-hidden p-6 border border-gray-200 dark:border-gray-700">


    <div
        class="flex flex-col md:flex-row items-center justify-between space-y-3 md:space-y-0 md:space-x-4 pb-4 border-b border-gray-200 dark:border-gray-700">
        <div class="w-full md:w-auto">
            <h1 class="text-2xl font-bold text-gray-900 dark:text-white">Daftar Mata Kuliah</h1>
            <p class="text-sm text-gray-500 dark:text-gray-400">Modul Manajemen Data Kurikulum Akademik</p>
        </div>

        <div
            class="w-full md:w-auto flex flex-col md:flex-row space-y-2 md:space-y-0 items-stretch md:items-center justify-end flex-shrink-0">
            <a href="{{ route('matakuliah.create') }}"
                class="flex items-center justify-center text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                <svg class="h-3.5 w-3.5 mr-2" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"
                    aria-hidden="true">
                    <path clip-rule="evenodd" fill-rule="evenodd"
                        d="10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" />
                </svg>
                Tambah Mata Kuliah
            </a>
        </div>
    </div>

    @if(session('sukses'))
    <div class="flex p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400 mt-4"
        role="alert">
        <svg class="flex-shrink-0 inline w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20"
            xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd"
                d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                clip-rule="evenodd"></path>
        </svg>
        <div>
            <span class="font-medium">Berhasil!</span> {{ session('sukses') }}
        </div>
    </div>
    @endif

    <div class="overflow-x-auto mt-6">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-4 py-3">Kode MK</th>
                    <th scope="col" class="px-4 py-3">Nama Mata Kuliah</th>
                    <th scope="col" class="px-4 py-3">SKS</th>
                    <th scope="col" class="px-4 py-3">Semester</th>
                </tr>
            </thead>
            <tbody>
                @forelse($daftarMataKuliah as $mk)
                <tr class="border-b dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                    <th scope="row" class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{ $mk->kodeMK }}</th>
                    <td class="px-4 py-3">{{ $mk->namaMK }}</td>
                    <td class="px-4 py-3 font-semibold text-blue-600 dark:text-blue-400">{{ $mk->sks }} SKS</td>
                    <td class="px-4 py-3">Semester {{ $mk->semester }}</td>
                </tr>
                @empty
                <tr class="border-b dark:border-gray-700">
                    <td colspan="4" class="px-4 py-6 text-center text-gray-500 dark:text-gray-400 font-medium">
                        <svg class="mx-auto mb-2 w-10 h-10 text-gray-400" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01">
                            </path>
                        </svg>
                        Belum ada data mata kuliah di sistem db_oop.
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
