    <!-- Navbar -->
    <nav>
        <div class="flex items-center justify-between max-w-5xl m-auto h-18 open-sans">
            <div class="w-40">
                <a href="#">
                    <img src="{{ asset('assets/img/logo-navbar.png') }}" />
                </a>
            </div>
            <div>
                <ul class="flex items-center space-x-10 list-none">
                    <li><a href="/"
                            class=" no-underline font-bold transition duration-150 ease-in-out {{ request()->is('/') ? 'text-[#142e50]' : 'hover:text-[#142e50] text-[#676767]' }}">Beranda</a>
                    </li>
                    <li><a href="{{ route('view-informasi') }}"
                            class=" no-underline font-bold transition duration-150 ease-in-out {{ request()->is('informasi') ? 'text-[#142e50]' : 'hover:text-[#142e50] text-[#676767]' }}">Informasi</a>
                    </li>
                    <li><a href="{{ route('view-kontak') }}"
                            class=" no-underline font-bold transition duration-150 ease-in-out {{ request()->is('kontak') ? 'text-[#142e50]' : 'hover:text-[#142e50] text-[#676767]' }}">Kontak</a>
                    </li>
                    @if (auth('customer')->check() || auth()->check())
                        <li>
                            <el-dropdown class="inline-block">
                                <button
                                    class="inline-flex w-full justify-center gap-x-1.5 rounded-md bg-white px-3 py-2 font-bold text-gray-900 cursor-pointer">
                                    {{ auth('customer')->check() ? auth('customer')->user()->name : (auth()->check() ? auth()->user()->name : '') }}
                                    <svg viewBox="0 0 20 20" fill="currentColor" data-slot="icon" aria-hidden="true"
                                        class="-mr-1 size-5 text-gray-400">
                                        <path
                                            d="M5.22 8.22a.75.75 0 0 1 1.06 0L10 11.94l3.72-3.72a.75.75 0 1 1 1.06 1.06l-4.25 4.25a.75.75 0 0 1-1.06 0L5.22 9.28a.75.75 0 0 1 0-1.06Z"
                                            clip-rule="evenodd" fill-rule="evenodd" />
                                    </svg>
                                </button>

                                <el-menu anchor="bottom end" popover
                                    class="w-56 origin-top-right divide-y divide-gray-100 rounded-md bg-white shadow-lg outline-1 outline-black/5 transition transition-discrete [--anchor-gap:--spacing(2)] data-closed:scale-95 data-closed:transform data-closed:opacity-0 data-enter:duration-100 data-enter:ease-out data-leave:duration-75 data-leave:ease-in">
                                    <div class="py-1">
                                        <form action="{{ route('logout') }}" method="POST" class="w-full">
                                            @csrf
                                            @method('POST')
                                            <button type="submit"
                                                class="block px-4 py-2 w-full text-sm  cursor-pointer text-gray-700 text-left focus:bg-gray-100 focus:text-gray-900 focus:outline-hidden">Keluar</button>
                                        </form>
                                    </div>

                                </el-menu>
                            </el-dropdown>
                        </li>
                    @else
                        <li class="flex space-x-3">
                            <div class="hover:scale-98">
                                <a href="{{ url('/user/login') }}"
                                    class="py-2 px-5 border-2 border-[#142e50] text-[#142e50] rounded-full  font-bold">Masuk</a>
                            </div>
                            <div class="hover:scale-98">
                                <a href="#"
                                    class="py-2 px-5 bg-[#142e50] border-2 border-[#142e50] text-white rounded-full font-bold">Daftar</a>
                            </div>
                        </li>
                    @endauth
            </ul>
        </div>
    </div>
</nav>
