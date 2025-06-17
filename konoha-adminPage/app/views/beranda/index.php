<main class="p-4 overflow-y-auto flex-1">
    <div class="grid grid-cols-1">
        <div class="bg-slate-50 border rounded-lg p-4 shadow-md">
            <h2 class="font-bold text-xl mb-5 text-slate-950">Data Pengaduan</h2>
            <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 mb-6 mt-4">
                <button class="p-4 bg-sky-600 shadow-md rounded-lg text-white font-semibold">Data 1</button>
                <button class="p-4 bg-gradient-to-r from-sky-700 to-white rounded-lg text-white font-semibold">Data 2</button>
                <button class="p-4 bg-white shadow-md rounded-lg text-sky-600 font-semibold">Data 3</button>
            </div>

            <div class="mt-2 space-y-4">
                <div class="rounded-lg p-4 bg-white text-slate-800 shadow-md">
                    <p><span class="font-semibold text-sky-400">Nama Pelapor:</span> Budiono Siregar</p>
                    <p><span class="font-semibold text-red-400">Aduan:</span> Kapal Bocor Halus</p>
                    <p><span class="font-semibold text-green-400">Tanggal:</span> 2025-06-15</p>
                </div>

                <div class="rounded-lg p-4 bg-white text-slate-800 shadow-sm">
                    <p><span class="font-semibold text-sky-400">Nama Pelapor: Budi Speed </span></p>
                    <p><span class="font-semibold text-red-400">Aduan: Ban Motor Kempes </span></p>
                    <p><span class="font-semibold text-green-400">Tanggal: 2025-06-14 </span></p>
                </div>

                <div class="rounded-lg p-4 bg-white text-slate-800 shadow-sm">
                    <p><span class="font-semibold">Nama Pelapor:</span><span class="text-sky-400"> Budi Yaping </span></p>
                    <p><span class="font-semibold">Aduan:</span><span class="text-red-400"> Tetangga Marah-marah </span></p>
                    <p><span class="font-semibold">Tanggal:</span><span class="text-green-400"> 2025-06-10 </span></p>
                </div>
            </div>
        </div>
    </div>

    <a href="admin_statistik.html">
        <div class="bg-slate-50 border rounded-lg p-4 shadow-md mt-5">
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-4 my-8">
                <!-- Total Pengaduan -->
                <div class="bg-white rounded-xl shadow-md p-4 text-center border">
                    <h3 class="text-slate-700 font-semibold">Total Pengaduan</h3>
                    <p class="text-3xl font-bold text-purple-600">3</p>
                </div>

                <!-- Pending -->
                <div class="bg-white rounded-xl shadow-md p-4 text-center border">
                    <h3 class="text-slate-700 font-semibold">Pending</h3>
                    <p class="text-3xl font-bold text-yellow-500">1</p>
                </div>

                <!-- Diproses -->
                <div class="bg-white rounded-xl shadow-md p-4 text-center border">
                    <h3 class="text-slate-700 font-semibold">Diproses</h3>
                    <p class="text-3xl font-bold text-blue-600">1</p>
                </div>

                <!-- Selesai -->
                <div class="bg-white rounded-xl shadow-md p-4 text-center border">
                    <h3 class="text-slate-700 font-semibold">Selesai</h3>
                    <p class="text-3xl font-bold text-green-600">1</p>
                </div>
            </div>
        </div>
    </a>
</main>
