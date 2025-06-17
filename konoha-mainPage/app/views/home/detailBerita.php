<!-- SECTION : BERITA START -->
<section>
    <!-- berita background -->
    <div class="bg-white">
        <!-- berita container -->
        <div
            class="container mx-auto px-2 pt-12 max-w-sm md:max-w-xl lg:max-w-4xl xl:max-w-6xl">
            <div
                class="flex flex-col gap-4 mt-32 lg:mt-44 lg:gap-6 mb-4 lg:mb-6">
                <!-- title -->
                <div class="lg:max-w-[70%]">
                    <h1
                        class="text-xl lg:text-3xl xl:text-4xl font-semibold text-slate-700">
                        <?= $data['berita']['judul']; ?>
                    </h1>   
                </div>

                <div class="flex flex-col gap-2">
                    <!-- author -->
                    <div class="flex items-center gap-3">
                        <i
                            class="fa-regular fa-user text-xs lg:text-sm text-slate-700"></i>
                        <span 
                            class="text-xs lg:text-sm font-medium text-slate-700">Paul McCartney</span>
                    </div>
                    <!-- date time -->
                    <div class="flex items-center gap-3">
                        <i
                            class="fa-regular fa-calendar text-xs lg:text-sm text-slate-700"></i>
                        <span
                            class="text-xs lg:text-sm font-medium text-slate-700"><?= $data['berita']['tanggal_berita']?></span>
                    </div>
                </div>
            </div>
            <!-- berita flex row -->
            <div
                class="flex flex-col lg:flex-row gap-6 lg:gap-8 justify-between mb-6">
                <!-- berita read -->
                <div class="flex flex-col gap-4 lg:gap-6 mb-8 lg:w-[75%]">
                    <!-- image -->
                    <div class="rounded-lg overflow-hidden">
                        <img
                            src="img/berita/berita.png"
                            class="hover:scale-105 transition-all duration-700 ease-in-out" />
                    </div>
                    <!-- fill -->
                    <div class="flex flex-col gap-4 lg:gap-6">
                        <p
                            class="text-sm lg:text-lg text-slate-700 text-justify">
                            Lorem ipsum dolor sit amet, consectetur adipiscing
                            elit. Mauris ex turpis, semper non laoreet et,
                            pellentesque vel nulla. Praesent semper eu turpis
                            non mattis. Donec aliquet, quam nec aliquet luctus,
                            ante dolor luctus mi, ac ullamcorper sem purus non
                            lorem. Vestibulum ante ipsum primis in faucibus orci
                            luctus et ultrices posuere cubilia curae; Mauris
                            vitae dui nulla. Donec gravida elementum nunc vitae
                            hendrerit. Nulla odio diam, dictum nec imperdiet
                            eget, varius sed orci. Proin vehicula leo urna, quis
                            sollicitudin orci interdum vitae. Integer volutpat
                            pretium sem, in porta purus maximus id. Vivamus sit
                            amet iaculis erat, non dictum lorem. Praesent auctor
                            leo nulla, gravida egestas purus dapibus nec.
                            Quisque a arcu elementum, condimentum dolor sed,
                            consequat nisi. Sed in venenatis eros, sit amet
                            condimentum sapien.
                        </p>
                        <p
                            class="text-sm lg:text-lg text-slate-700 text-justify">
                            Donec vehicula ultricies nunc id lacinia. Proin
                            laoreet sem sem. Sed eleifend dui non pretium
                            ornare. Proin blandit eget est quis venenatis.
                            Pellentesque nec imperdiet sapien. Sed pellentesque
                            sed neque at viverra. Maecenas et sapien bibendum,
                            accumsan leo ac, pulvinar lectus. Mauris a lacinia
                            odio, ac volutpat odio.
                        </p>
                        <p
                            class="text-sm lg:text-lg text-slate-700 text-justify">
                            Nulla facilisi. Curabitur congue eros odio, eget
                            congue magna semper nec. Interdum et malesuada fames
                            ac ante ipsum primis in faucibus. Pellentesque at
                            quam ultrices, placerat libero nec, blandit sem.
                            Curabitur sed ornare nisi, nec pellentesque leo.
                            Donec rutrum finibus arcu eget venenatis. Integer et
                            eleifend libero. Nunc efficitur tincidunt ante, a
                            consequat felis hendrerit et. Donec tincidunt
                            efficitur leo, eu feugiat massa dictum id. Sed
                            pharetra quam mi, vel tincidunt nisl ultricies id.
                            Aenean sed pulvinar lectus. Suspendisse viverra
                            tempor metus tempor viverra. Proin libero tellus,
                            volutpat vitae euismod at, venenatis sed quam. In
                            iaculis metus eros, a condimentum mauris malesuada
                            sit amet.
                        </p>
                        <p
                            class="text-sm lg:text-lg text-slate-700 text-justify">
                            Curabitur tempor urna sed quam accumsan consequat.
                            Sed porttitor consequat libero, non cursus sem.
                            Nullam eu hendrerit augue. Sed malesuada dolor
                            sapien, vel pellentesque justo molestie et.
                            Phasellus faucibus mollis ipsum, quis luctus risus
                            facilisis at. Fusce fermentum est at velit
                            malesuada, sed sollicitudin erat dignissim.
                            Suspendisse finibus mauris nisl, id consequat ex
                            consectetur at. Vivamus tristique velit ut bibendum
                            scelerisque. Morbi in sodales nulla, vel accumsan
                            justo. Curabitur et consectetur tortor, in facilisis
                            libero. Quisque ut ullamcorper urna. Fusce ut nisl
                            lacus. Donec finibus libero sit amet nisi porta, vel
                            vehicula ex imperdiet. Ut sed arcu id nibh hendrerit
                            posuere quis nec dolor. Vivamus eu suscipit ex.
                        </p>
                    </div>
                </div>
                <!-- sugestion -->
                <div class="flex flex-col gap-8 lg:w-[25%]">
                    <!-- berita sugestion -->
                    <a href="berita.html">
                        <div
                            class="flex flex-col gap-3 p-5 lg:p-4 bg-white shadow-black/20 shadow-md ring-2 ring-slate-200/50 rounded-lg">
                            <div class="overflow-hidden rounded-lg h-44">
                                <img
                                    src="img/berita/berita2.png"
                                    class="object-cover w-full h-full hover:scale-110 transition-all duration-700 ease-in-out" />
                            </div>
                            <div class="h-16 lg:h-24 flex flex-col">
                                <h2
                                    class="text-base lg:text-lg font-medium text-slate-700 line-clamp-3 text-ellipsis overflow-hidden">
                                    Jembatan baru di desa konoha belum ada 1
                                    bulan sudah roboh!
                                </h2>
                            </div>
                            <!-- date time -->
                            <div class="flex items-center gap-3">
                                <i
                                    class="fa-regular fa-calendar text-sm text-slate-700 mt-auto"></i>
                                <span class="text-sm text-slate-700">Selasa, 22 Mei 2025 10.00</span>
                            </div>
                        </div>
                    </a>
                    <!-- berita sugestion 2 -->
                    <a href="berita.html">
                        <div
                            class="flex flex-col gap-3 p-5 lg:p-4 bg-white shadow-black/20 shadow-md ring-2 ring-slate-200/50 rounded-lg">
                            <div class="overflow-hidden rounded-lg h-44">
                                <img
                                    src="img/informasi/informasi.jpg"
                                    class="object-cover w-full h-full hover:scale-110 transition-all duration-700 ease-in-out" />
                            </div>
                            <div class="h-16 lg:h-24 flex flex-col">
                                <h2
                                    class="text-base lg:text-lg font-medium text-slate-700 line-clamp-3 text-ellipsis overflow-hidden">
                                    Object Wisata Danau Saatu di Desa Konoha
                                </h2>
                            </div>
                            <!-- date time -->
                            <div class="flex items-center gap-3">
                                <i
                                    class="fa-regular fa-calendar text-sm text-slate-700 mt-auto"></i>
                                <span class="text-sm text-slate-700">Selasa, 22 Mei 2025 10.00</span>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- berita container -->
</section>
<!-- SECTION : BERITA END -->
