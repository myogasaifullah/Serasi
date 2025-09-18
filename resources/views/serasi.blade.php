<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Serasi - Serap Aspirasi</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-100 text-gray-900 antialiased">
    {{-- Logo Bulat di Paling Atas --}}
    <div class="flex justify-center mt-6 mb-4">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQTIADQ4zEmHUL4_h42vSeAIrILRi6VEcmLiA&s" alt="Logo Serasi" class="w-24 h-24 rounded-full shadow-md border-4 border-red-700">
    </div>
    <div class="container mx-auto px-4 py-10">
        <h1 class="text-3xl font-bold text-center text-red-700 mb-8">Formulir Serasi - Serap Aspirasi</h1>

        {{-- Flash Message --}}
        @if(session('success'))
        <div class="mb-6 p-4 rounded bg-green-100 text-green-800 shadow">
            {{ session('success') }}
        </div>
        @endif

        {{-- Form Input --}}
        <form method="POST" action="{{ route('serasi.store') }}" class="bg-white p-6 rounded-lg shadow-md mb-10">
            @csrf
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <input type="text" name="nama" placeholder="Nama" class="form-input border border-gray-300 rounded p-2 w-full" required>
                <input type="text" name="npm" placeholder="NPM" class="form-input border border-gray-300 rounded p-2 w-full" required>
                <input type="email" name="email" placeholder="Email" class="form-input border border-gray-300 rounded p-2 w-full" required>
                <input type="text" name="telpon" placeholder="Telpon" class="form-input border border-gray-300 rounded p-2 w-full" required>
                <select name="kategori" class="form-select border border-gray-300 rounded p-2 w-full" required>
                    <option value="">-- Pilih Kategori --</option>
                    <option value="akademik">Akademik</option>
                    <option value="non-akademik">Non-Akademik</option>
                </select>
            </div>
            <div class="mt-4">
                <textarea name="deskripsi_laporan" rows="4" class="form-textarea w-full border border-gray-300 rounded p-2" placeholder="Deskripsi Laporan" required></textarea>
            </div>
            <button type="submit" class="mt-6 px-6 py-2 bg-red-800 text-white font-semibold rounded hover:bg-red-700 transition">
                Kirim Aspirasi
            </button>
        </form>

        {{-- Filter Form --}}
        <h2 class="text-2xl font-semibold mb-4 text-gray-800">Daftar Aspirasi</h2>
        <form method="GET" class="grid grid-cols-1 md:grid-cols-4 gap-4 mb-6">
            <input type="text" name="search" placeholder="Cari nama, NPM, email" value="{{ request('search') }}"
                class="p-2 border border-gray-300 rounded w-full">

            <select name="kategori" class="p-2 border border-gray-300 rounded w-full">
                <option value="">Semua Kategori</option>
                <option value="akademik" {{ request('kategori') == 'akademik' ? 'selected' : '' }}>Akademik</option>
                <option value="non-akademik" {{ request('kategori') == 'non-akademik' ? 'selected' : '' }}>Non-Akademik</option>
            </select>

            <select name="status" class="p-2 border border-gray-300 rounded w-full">
                <option value="">Semua Status</option>
                <option value="tinjau" {{ request('status') == 'tinjau' ? 'selected' : '' }}>Tinjau</option>
                <option value="proses" {{ request('status') == 'proses' ? 'selected' : '' }}>Proses</option>
                <option value="tolak" {{ request('status') == 'tolak' ? 'selected' : '' }}>Tolak</option>
                <option value="selesai" {{ request('status') == 'selesai' ? 'selected' : '' }}>Selesai</option>
            </select>

            <button type="submit" class="bg-red-800 text-white px-4 py-2 rounded hover:bg-red-700 transition">
                Filter
            </button>
        </form>

        {{-- Tabel Data --}}
        <div class="overflow-auto bg-white rounded-lg shadow-md">
            @if ($serasiList->isEmpty())
            <p class="p-6 text-center text-gray-500">Belum ada data aspirasi.</p>
            @else
            <table class="min-w-full table-auto divide-y divide-gray-200 text-sm">
                <thead class="bg-gray-100 text-gray-600">
                    <tr>
                        <th class="px-4 py-2 text-left font-medium">Nama</th>
                        <th class="px-4 py-2 text-left font-medium">NPM</th>
                        <th class="px-4 py-2 text-left font-medium">Email</th>
                        <th class="px-4 py-2 text-left font-medium">Telpon</th>
                        <th class="px-4 py-2 text-left font-medium">Kategori</th>
                        <th class="px-4 py-2 text-left font-medium">Deskripsi</th>
                        <th class="px-4 py-2 text-left font-medium">Status</th>
                        <th class="px-4 py-2 text-left font-medium">Pesan Balasan</th>
                        <th class="px-4 py-2 text-left font-medium">Tanggal</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    @foreach($serasiList as $serasi)
                    <tr class="hover:bg-gray-50">
                        <td class="px-4 py-2">{{ $serasi->nama }}</td>
                        <td class="px-4 py-2">{{ $serasi->npm }}</td>
                        <td class="px-4 py-2">{{ $serasi->email }}</td>
                        <td class="px-4 py-2">{{ $serasi->telpon }}</td>
                        <td class="px-4 py-2">{{ ucfirst($serasi->kategori) }}</td>
                        <td class="px-4 py-2">{{ $serasi->deskripsi_laporan }}</td>
                        <td class="px-4 py-2">
                            <span class="inline-block px-2 py-1 text-xs rounded font-medium 
                                {{ $serasi->status == 'selesai' ? 'bg-green-200 text-green-800' : 
                                   ($serasi->status == 'proses' ? 'bg-blue-200 text-white-800' :
                                   ($serasi->status == 'tolak' ? 'bg-red-200 text-red-800' : 'bg-yellow-100 text-yellow-800')) }}">
                                {{ ucfirst($serasi->status) }}
                            </span>
                        </td>
                        <td class="px-4 py-2">{{ $serasi->pesan_balasan ?? '-' }}</td>
                        <td class="px-4 py-2">{{ $serasi->created_at->format('d M Y') }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

            {{-- Footer Pagination + Per Page --}}
            <div class="flex flex-col md:flex-row justify-between items-center gap-4 p-4">
                {{-- Dropdown per_page --}}
                <form method="GET" class="flex items-center gap-2">
                    <label for="per_page" class="text-sm text-gray-700">Tampilkan</label>
                    <select name="per_page" id="per_page" onchange="this.form.submit()" class="form-select w-20 text-sm rounded border-gray-300 focus:ring focus:ring-red-200">
                        <option value="5" {{ request('per_page') == 5 ? 'selected' : '' }}>5</option>
                        <option value="10" {{ request('per_page') == 10 ? 'selected' : '' }}>10</option>
                        <option value="25" {{ request('per_page') == 25 ? 'selected' : '' }}>25</option>
                        <option value="50" {{ request('per_page') == 50 ? 'selected' : '' }}>50</option>
                    </select>
                    <span class="text-sm text-gray-700">data per halaman</span>

                    {{-- Tetap kirim query filter --}}
                    @foreach(request()->except(['per_page', 'page']) as $name => $value)
                    <input type="hidden" name="{{ $name }}" value="{{ $value }}">
                    @endforeach
                </form>

                {{-- Pagination --}}
                <div class="text-sm">
                    {{ $serasiList->links() }}
                </div>
            </div>
            @endif
        </div>
    </div>

</body>

</html>