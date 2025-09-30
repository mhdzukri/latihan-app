@component('layout', ['title' => 'Ulu Kasok - Informasi'])
    @include('navbar')

    <section class="mt-15">
        <div class="mb-5">
            <img src="{{ asset('assets/img/hero-informasi.png') }}" alt="photo_ulu_kasok">
        </div>
        <div class="w-xs sm:w-sm md:w-3xl lg:w-5xl max-w-5xl mx-auto space-y-5 md:space-y-20">
            <div class="space-y-5">
                <h1 class="text-center text-[#142e50] montserrat font-bold text-3xl">Tentang Ulu Kasok</h1>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-15 mb-10">
                    <p class="text-justify text-lg text-gray-600 open-sans">Ulu Kasok memiliki akar yang dalam dalam sejarah
                        dan
                        budaya yang
                        kaya. Terletak di jantung komunitas yang memegang teguh nilai-nilai tradisional, Ulu Kasok lahir
                        sebagai wadah untuk melestarikan warisan leluhur, serta menyediakan informasi yang bermanfaat bagi
                        masyarakat luas. Nama "Ulu Kasok" sendiri berasal dari bahasa lokal yang memiliki makna mendalam
                        tentang koneksi antara manusia dengan alam serta kekuatan yang terjalin dari generasi ke generasi.
                    </p>
                    <p class="text-justify text-lg text-gray-600 open-sans">Sejak awal berdirinya, Ulu Kasok bertujuan untuk
                        menjadi
                        jembatan antara budaya dan modernitas, menyatukan informasi lokal dan global, serta mengedukasi
                        masyarakat dengan cara yang mudah dipahami. Kami percaya bahwa pengetahuan adalah kunci untuk
                        membangun masa depan yang lebih baik, dan di sinilah kami hadir, memberikan informasi yang
                        bermanfaat dan relevan.
                    </p>
                </div>
                <p class="text-justify text-lg text-gray-600 open-sans">Dengan pengalaman yang telah teruji selama
                    bertahun-tahun,
                    kami di Ulu Kasok berkomitmen untuk terus berkembang, menghadirkan konten yang tidak hanya informatif,
                    tetapi juga mencerminkan semangat kebersamaan dan keberagaman. Melalui website ini, kami berharap dapat
                    terus menjalin hubungan yang kuat dengan masyarakat, serta memberikan kontribusi positif bagi
                    pembangunan dan pelestarian budaya yang ada.
                </p>
            </div>

            <div class="space-y-5">
                <h1 class="text-center text-[#142e50] montserrat font-bold text-3xl">Tiket & Fasilitas</h1>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-15 mb-10">
                    <div
                        class="bg-linear-to-t from-[#2E69B6] to-[#142E50] rounded-2xl text-white text-center montserrat font-bold space-y-5 py-5">
                        <h2 class="text-3xl">WeekDay</h2>
                        <h1 class="text-5xl">Rp 10.000</h1>
                        <p class="font-normal">Senin - Jumat</p>
                    </div>
                    <div
                        class="bg-linear-to-t from-[#2E69B6] to-[#142E50] rounded-2xl text-white text-center montserrat font-bold space-y-5 py-5">
                        <h2 class="text-3xl">WeekEnd</h2>
                        <h1 class="text-5xl">Rp 20.000</h1>
                        <p class="font-normal">Sabtu - Minggu</p>
                    </div>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
                    <div class="rounded-3xl font-bold py-10 shadow-xl space-y-5 text-gray-600">
                        <h4 class="text-[#142E50] text-2xl text-center">Fasilitas Alam</h4>
                        <ul class="list-disc ml-12">
                            <li>Speedboat</li>
                            <li>Pulau Qeis Trend Camp</li>
                        </ul>
                    </div>
                    <div class="rounded-3xl font-bold py-10 shadow-xl space-y-5 text-gray-600">
                        <h4 class="text-[#142E50] text-2xl text-center">Fasilitas Umun</h4>
                        <ul class="list-disc ml-12">
                            <li>Area Parkir</li>
                            <li>Toilet Umum</li>
                            <li>Musholla</li>
                            <li>Tempat Makan</li>
                            <li>Spot Foto</li>
                        </ul>
                    </div>
                    <div class="rounded-3xl font-bold py-10 shadow-xl space-y-5 text-gray-600">
                        <h4 class="text-[#142E50] text-2xl text-center">Fasilitas Tambahan</h4>
                        <ul class="list-disc ml-12">
                            <li>Aula</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="space-y-5 mb-20">
                <h1 class="text-center text-[#142e50] montserrat font-bold text-3xl">Lokasi</h1>
                <div id="map" class="max-w-5xl z-10" style="height: 30rem;"></div>
            </div>
        </div>
    </section>

    @include('footer')

    <!-- Make sure you put this AFTER Leaflet's CSS -->
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
        integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>

    <script>
        const map = L.map('map').setView([0.29591274317227445, 100.85670101205207], 15);
        var marker = L.marker([0.29591274317227445, 100.85670101205207]).addTo(map);
        const tiles = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 19,
            attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
        }).addTo(map);
    </script>
@endcomponent
