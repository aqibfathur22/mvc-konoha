<main class="flex-1 overflow-y-auto p-4">
    <div class="grid grid-cols-1">
        <div class="bg-white border rounded-lg p-4 border-sky-800">
            <h2 class="font-bold text-xl mb-5 text-slate-950">Berita dan Informasi</h2>
            <form action="<?= BASEURL; ?>/berita_controller/createBerita" method="post" enctype="multipart/form-data">\
                <div class="my-3">
                    <label class="block text-lg font-medium mb-1 text-slate-950">Gambar</label>

                    <label
                        for="upload"
                        class="relative w-40 h-40 border-2 border-dashed border-sky-400 rounded-lg cursor-pointer overflow-hidden flex items-center justify-center bg-slate-100">
                        <i id="icon-upload" class="fas fa-image text-gray-400 text-7xl"></i>
                    </label>

                    <input name="gambar" type="file" id="upload" class="hidden" />
                </div>

                <div class="mt-5 mb-4">
                    <label class="block text-lg font-medium mb-1 text-slate-950">Judul</label>
                    <input
                        name="judul"
                        type="text"
                        placeholder="Masukkan Judul"
                        class="w-full border border-sky-400 hover:border-sky-800 p-2 rounded-lg text-slate-950" />
                </div>
                <div class="mb-4">
                    <label class="block text-lg font-medium mb-1 text-slate-950">Deskripsi</label>
                    <textarea
                        name="deskripsi"
                        placeholder="Deskripsi..."
                        rows="12"
                        class="w-full border border-sky-400 hover:border-sky-800 p-2 rounded-lg text-slate-950 resize-none"></textarea>
                </div>
                <div class="flex gap-4 w-full">
                    <button type="submit" class="bg-sky-600 hover:bg-sky-700 rounded-lg flex-1 h-10 text-center text-white">Batal</button>
                    <button type="submit" class="bg-sky-600 hover:bg-sky-700 rounded-lg flex-1 h-10 text-center text-white">Simpan</button>
                </div>
            </form>
            
        </div>
    </div>
</main>
