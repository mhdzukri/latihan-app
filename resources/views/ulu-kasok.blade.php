@component('layout', ['title' => 'Ulu Kasok - Beranda'])
    @include('navbar')

    <!-- Hero Section -->
    <section>
        <div class="md:w-3xl lg:w-5xl max-w-5xl mx-auto mt-15">
            <div class="relative">
                <div class="absolute w-full h-full flex flex-col items-center justify-center space-y-10 bg-black/40">
                    <h1 class="montserrat w-xs sm:w-sm md:w-full text-3xl text-center lg:text-4xl text-white font-bold">Mulai
                        Petualanganmu Dari
                        Puncak</h1>
                    <img src="{{ asset('assets/img/ulu-kasok.png') }}" alt="ulu-kasok" class="w-80 lg:w-100">
                    <div class="flex items-center mt-20 space-x-4">
                        @if (auth('customer')->check() || auth()->check())
                            <a href="{{ url('user/tickets/create') }}"
                                class="bg-white font-bold rounded-full px-6 py-3 cursor-pointer hover:scale-96 duration-150">Pesan
                                Tiket</a>
                        @else
                            <a href="{{ url('user/login') }}"
                                class="bg-white font-bold rounded-full px-6 py-3 cursor-pointer hover:scale-96 duration-150">Pesan
                                Tiket</a>
                        @endauth
                </div>
            </div>
            <img src="{{ asset('assets/img/hero-img.png') }}" alt="bg-ulu-kasok"
                class="object-cover object-center w-full h-130">
        </div>
    </div>
</section>

<!-- Tingkatkan Pengalaman -->
<section>
    <div class="w-xs sm:w-sm md:w-3xl lg:w-5xl max-w-5xl mx-auto my-10">
        <h1 class="text-center text-3xl montserrat text-[#142e50] font-bold">Tingkatkan Pengalaman Liburan Anda di
            Ulu Kasok</h1>
        <p class="text-center text-[#696969] mt-5 mb-10">Jelajahi Keindahan Ulu Kasok
        </p>
        <div class="space-y-20">

            @foreach ($todoPosts as $todoPost)
                <div
                    class="grid grid-cols-1 md:grid-cols-2 gap-5 md:gap-15 items-center bg-gray-200 p-5 rounded-xl md:bg-white md:p-0 md:rounded-none">
                    <div class="space-y-10 order-2 md:{{ $loop->iteration % 2 == 0 ? 'order-end' : 'order-first' }}">
                        <h4 class="text-[#142e50] font-bold text-xl mb-5">{{ $todoPost->title }}</h4>
                        <p class="text-[#696969] text-justify">{{ $todoPost->description }}</p>
                        <a href="{{ $todoPost->link }}"
                            class="bg-[#026F97] text-white font-bold rounded-full px-6 py-3 cursor-pointer hover:scale-96 duration-150">Lihat
                            Selengkapnya</a>
                    </div>
                    <div
                        class="rounded-xl overflow-hidden order-1 md:{{ $loop->iteration % 2 == 0 ? 'order-first' : 'order-end' }}">
                        <img src="{{ asset('assets/img/' . $todoPost->path_image) }}" alt="">
                    </div>
                </div>
            @endforeach

        </div>
    </div>
</section>

<!-- Testimoni Wisatawan -->
<section class="bg-[#eee]">
    <div class="w-xs sm:w-sm md:w-3xl lg:w-5xl max-w-5xl mx-auto bg-[#eeeeee] py-10">
        <h1 class="text-center text-3xl montserrat text-[#142e50] font-bold mb-10">Pengalaman Wisatawan Di Ulu Kasok
        </h1>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-10">

            <?php for($i = 0; $i < count($comments); $i++) : ?>
            <div class="flex flex-col items-center p-10 bg-white rounded-xl space-y-5">
                <img src="{{ asset('assets/img/' . $comments[$i]['logo_avatar']) }}" alt="" width="60" />
                <p><?= $comments[$i]['rating'] ?></p>
                <p><?= $comments[$i]['comment'] ?></p>
                <p class="font-bold text-[#142e50]"><?= $comments[$i]['name'] . ' - ' . $comments[$i]['city'] ?></p>
            </div>
            <?php endfor; ?>

        </div>
    </div>
</section>

@include('footer')
@endcomponent
