<main class="p-4 overflow-y-auto flex-1">
    <div class="grid grid-cols-1 mt-5">
        <div class="bg-slate-50 rounded-lg p-4 shadow-md">
            <h2 class="font-bold text-xl mb-5 text-slate-950">Statistik</h2>

            <div class="mt-8 space-y-4">
                <div class="rounded-lg p-12 bg-white text-slate-800 shadow-md">
                    <div class="flex gap-10 justify-between">
                        <div>
                            <p class="text-lg"><span class="font-semibold text-lg">Nama Pelapor :</span> <?= $data['detailPengaduan']['nama_pelapor'] ?></p>
                            <p class="text-lg"><span class="font-semibold text-lg">Nomor Hp :</span> <?= $data['detailPengaduan']['nomor_telepon'] ?></p>
                            <p class="text-lg"><span class="font-semibold text-lg">Kategori Aduan :</span> <?= $data['detailPengaduan']['nama_kategori'] ?></p>
                            <p class="text-lg"><span class="font-semibold text-lg">Judul Aduan :</span> <?= $data['detailPengaduan']['judul_pengaduan'] ?></p>
                            <p class="text-lg"><span class="font-semibold text-lg">Aduan :</span> <?= $data['detailPengaduan']['detail_pengaduan'] ?></p>
                            <p class="text-lg"><span class="font-semibold text-lg">Tanggal :</span> <?= $data['detailPengaduan']['tanggal_dikirim'] ?></p>
                        </div>
                        <div class="px-6 w-2/6 h-120 border border-sky-400 rounded-lg text-center mb-2 overflow-x-scroll overflow-y-scroll">
                            <p><span class="font-semibold">Lampiran:</span> 
                                <img src="http://localhost/konoha/images/pengaduan/<?= $data['detailPengaduan']['path_lampiran'] ?>" 
                                    alt="Lampiran" 
                                    class="max-w-[100%] max-h-[100%] object-contain mt-4">
                            </p>
                            <br /><br /><br /><br />
                        </div>
                    </div>

                    
                </div>
            </div>

            <div class="flex gap-4 w-full my-8">
                <button type="submit" class="bg-sky-600 hover:bg-sky-700 rounded-lg flex-1 h-10 text-center text-white">Pending</button>
                <button type="submit" class="bg-sky-600 hover:bg-sky-700 rounded-lg flex-1 h-10 text-center text-white">Diproses</button>
                <button type="submit" class="bg-sky-600 hover:bg-sky-700 rounded-lg flex-1 h-10 text-center text-white">Selesai</button>
            </div>
        </div>
    </div>
</main>
