<main class="flex-1 bg-white p-4">
    <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-2 mb-2 md:justify-end">
        <div class="flex items-center gap-4">
            <div>
                <i class="fas fa-bell text-xl" style="color: black"></i>
            </div>
            <div class="bg-sky-200 px-3 py-1 rounded-full text-sm font-semibold">
                <div class="flex items-center flex-row-reverse gap-1">
                    <div class="h-7 w-7 rounded-full bg-gradient-to-l from-sky-800 to-sky-300 overflow-hidden ml-2">
                        <img src="../asset/foto.png" alt="profil" class="h-full w-full object-cover" />
                    </div>
                    <span class="text-slate-950">Windah Baturingan</span>
                </div>
            </div>
        </div>
    </div>

    <hr class="my-4 border-t-4 text-sky-800" />

    <div class="grid grid-cols-1">
        <div class="bg-white border rounded-lg p-4 border-sky-800">
            <h2 class="font-bold text-xl mb-5 text-slate-950">Pengaturan</h2>
            <div class="mt-5 mb-4">
                <label class="block text-lg font-medium mb-1 text-slate-950">Nama User</label>
                <input
                    type="text"
                    placeholder="Masukkan Nama User"
                    class="w-full border border-sky-400 hover:border-sky-800 p-2 rounded-lg text-slate-950" />
            </div>
            <div class="mt-5 mb-4">
                <label class="block text-lg font-medium mb-1 text-slate-950">Nama Depan</label>
                <input
                    type="text"
                    placeholder="Masukkan Nama Depan"
                    class="w-full border border-sky-400 hover:border-sky-800 p-2 rounded-lg text-slate-950" />
            </div>
            <div class="mt-5 mb-4">
                <label class="block text-lg font-medium mb-1 text-slate-950">Nama Belakang</label>
                <input
                    type="text"
                    placeholder="Masukkan Nama Belakang"
                    class="w-full border border-sky-400 hover:border-sky-800 p-2 rounded-lg text-slate-950" />
            </div>
            <div class="mb-4">
                <label class="block text-lg font-medium mb-1 text-slate-950">Email</label>
                <input
                    placeholder="Masukkan Email"
                    class="w-full border border-sky-400 hover:border-sky-800 p-2 rounded-lg text-slate-950" />
            </div>
            <div class="flex gap-4 w-full">
                <button type="submit" class="bg-sky-600 hover:bg-sky-700 rounded-lg flex-1 h-10 text-center text-white">Batal</button>
                <button type="submit" class="bg-sky-600 hover:bg-sky-700 rounded-lg flex-1 h-10 text-center text-white">Simpan</button>
            </div>
        </div>
    </div>
</main>
