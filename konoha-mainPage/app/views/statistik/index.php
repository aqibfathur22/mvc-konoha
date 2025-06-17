<!-- Statistik Section -->
<section id="statistik" class="py-20">
    <!-- pengaduan container -->
    <div class="container mx-auto px-2 mb-24 max-w-sm md:max-w-xl lg:max-w-4xl xl:max-w-6xl">
    <div class="container mx-auto px-4 text-center">
        <h2 class="section-title text-sky-500">Statistik Pengaduan</h2>
        <form action="" method="post">
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-4 gap-8 mb-16">
                <!-- Total -->
                <button name="total" cursor="pointer" class="hover:scale-103 focus:bg-sky-50 bg-white rounded-2xl shadow-lg p-6 border-2 border-slate-100 hover:shadow-xl transition-all duration-700 ease-in-out">     
                    <h3 class="text-xl font-semibold text-slate-700">Total Pengaduan</h3>
                    <p class="text-4xl font-bold text-indigo-600 mt-2">
                        <?= $data['dataStatistik']['total'] ?? 0 ?>
                    </p>
                </button>
                <!-- Pending -->
                <button name="menunggu" class="hover:scale-103 focus:bg-sky-50 bg-white rounded-2xl shadow-lg p-6 border-2 border-slate-100 hover:shadow-xl transition-all duration-700 ease-in-out">
                    <h3 class="text-xl font-semibold text-slate-700">Menunggu</h3>
                    <p class="text-4xl font-bold text-yellow-500 mt-2">
                        <?= $data['dataStatistik']['menunggu'] ?? 0 ?>
                    </p>
                </button>
                <!-- Diproses -->
                <button name="diproses" cursor="pointer" class="hover:scale-103 focus:bg-sky-50 bg-white rounded-2xl shadow-lg p-6 border-2 border-slate-100 hover:shadow-xl transition-all duration-700 ease-in-out">
                    <h3 class="text-xl font-semibold text-slate-700">Diproses</h3>
                    <p class="text-4xl font-bold text-blue-500 mt-2">
                            <?= $data['dataStatistik']['diproses'] ?? 0 ?>
                    </p>
                </button>
                <!-- Selesai -->
                <button name="selesai" cursor="pointer" class="hover:scale-103 focus:bg-sky-50 bg-white rounded-2xl shadow-lg p-6 border-2 border-slate-100 hover:shadow-xl transition-all duration-700 ease-in-out">
                    <h3 class="text-xl font-semibold text-slate-700">Selesai</h3>
                    <p class="text-4xl font-bold text-green-500 mt-2">
                            <?= $data['dataStatistik']['selesai'] ?? 0 ?>
                    </p>
                </button>
            </div>
        </form>
        
        <!-- Table Pengaduan Selesai -->
        <div class="flex-1 overflow-y-auto p-1">
            <table class="min-w-lg md:min-w-2xl rounded-lg ring-1 ring-slate-300 overflow-hidden w-full">
                <thead class="bg-sky-100 text-slate-700">
                    <tr>
                        <th class="px-14 py-4 text-left text-slate-700">Nama Pelapor</th>
                        <th class="px-6 py-4 text-left text-slate-700">Aduan</th>
                        <th class="px-6 py-4 text-left text-slate-700">Tanggal</th>
                        <th class="px-6 py-4 text-left text-slate-700">Status</th>
                    </tr>
                </thead>
                <tbody class="text-slate-700">
                    <?php if (!empty($data['dataPengaduan'])): ?>
                    <?php foreach ($data['dataPengaduan'] as $aduan): ?>
                    <tr class="border-t border-slate-300 hover:bg-sky-50 transition">
                        <td class="md:px-14 py-4 text-left text-xs md:text-sm xl:text-base text-slate-700"><?= htmlspecialchars($aduan['nama_pelapor']) ?></td>
                        <td class="md:px-6 py-4 text-left text-xs md:text-sm xl:text-base text-slate-700 w-92"><?= htmlspecialchars($aduan['judul_pengaduan']) ?></td>
                        <td class="md:px-6 py-4 text-left text-xs md:text-sm xl:text-base text-slate-700"><?= htmlspecialchars($aduan['tanggal_dikirim']) ?></td>
                        <td class="md:px-3 py-4 text-left text-xs md:text-sm xl:text-base text-slate-700">
                            <?php 
                                if ($aduan['status'] === 'menunggu') {
                                    $statusClass = 'bg-amber-100 text-amber-800 px-[10px]';
                                } elseif ($aduan['status'] === 'diproses') {
                                    $statusClass = 'bg-sky-100 text-sky-800 px-[16px]';
                                } elseif ($aduan['status'] === 'selesai') {
                                    $statusClass = 'bg-green-100 text-green-800 px-[21px]';
                                } elseif ($aduan['status'] === 'ditolak') {
                                    $statusClass = 'bg-red-100 text-red-800 px-[23px]';
                                }
                            ?>
                            <span class="<?= $statusClass ?> text-sm font-medium py-1 rounded-full">
                            <?= htmlspecialchars($aduan['status']) ?>
                            </span>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                    <?php else: ?>
                    <tr>
                        <td colspan="4" class="py-4 px-6 text-center text-slate-500">Belum ada pengaduan yang selesai.</td>
                    </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</section>