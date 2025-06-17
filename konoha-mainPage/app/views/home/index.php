
<!-- SECTION : HERO START -->
<section id="beranda">
    <!-- hero background image -->
    <div class="bg-hero bottom-24 bg-cover h-[36rem] lg:h-[40rem] xl:h-[48rem] ">
        <div class="bg-black/10 h-full">
            <!-- hero container -->
            <div class="container mx-auto pb-44 max-w-sm md:max-w-xl lg:max-w-4xl xl:max-w-6xl ">
                <!-- text container -->
                <div class="pt-[21rem]">
                    <div class="wow animate__animated animate__fadeInDown" data-wow-duration="1.5s">
                        <h1 class="text-center text-2xl lg:text-4xl xl:text-5xl font-semibold text-white text-shadow-md/60 text-shadow-black">
                            Selamat Datang di Desa Konoha!
                        </h1>
                    </div>
                    <div
                        class="container mx-auto max-w-2xs md:max-w-sm lg:max-w-2xl mt-5 lg:mt-10 wow animate__animated animate__fadeInUp"
                        data-wow-duration="1.5s">
                        <h2 class="text-center text-sm lg:text-2xl font-semibold text-white text-shadow-md/60 text-shadow-black">
                            laman pengaduan masyarakat serta informasi dan berita terkini seputar Desa Konoha!
                        </h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- SECTION : HERO END -->

<!-- Statistics Section -->
<section class="py-12 bg-sky-50 pt-18 pb-28">
    <div class="container mx-auto px-4 max-w-sm md:max-w-xl lg:max-w-4xl xl:max-w-6xl">
        <h2 class="text-center text-xl lg:text-3xl font-medium text-sky-500 mb-12">Statistik Pengaduan</h2>
        <div class="grid md:grid-cols-4 gap-6 text-center">
            <div class="bg-white p-6 rounded-xl shadow-lg hover:shadow-xl transition-all duration-700 ease-in-out">
                <h3 class="text-3xl font-bold text-sky-600 mb-2"><?= $data['dataStatistik']['total'] ?? 0 ?></h3>
                <p class="text-gray-600 font-medium">Total Pengaduan</p>
            </div>
            <div class="bg-white p-6 rounded-xl shadow-lg hover:shadow-xl transition-all duration-700 ease-in-out">
                <h3 class="text-3xl font-bold text-yellow-500 mb-2"><?= $data['dataStatistik']['menunggu'] ?? 0 ?></h3>
                <p class="text-gray-600 font-medium">Menunggu</p>
            </div>
            <div class="bg-white p-6 rounded-xl shadow-lg hover:shadow-xl transition-all duration-700 ease-in-out">
                <h3 class="text-3xl font-bold text-blue-600 mb-2"><?= $data['dataStatistik']['diproses'] ?? 0 ?></h3>
                <p class="text-gray-600 font-medium">Diproses</p>
            </div>
            <div class="bg-white p-6 rounded-xl shadow-lg hover:shadow-xl transition-all duration-700 ease-in-out">
                <h3 class="text-3xl font-bold text-green-600 mb-2"><?= $data['dataStatistik']['selesai'] ?? 0 ?></h3>
                <p class="text-gray-600 font-medium">Selesai</p>
            </div>
        </div>
    </div>
</section>

<!-- bg init for profil and foooter -->
<section class="bg-footer w-full">
