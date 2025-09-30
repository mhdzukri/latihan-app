    <!-- Navbar -->

    <nav
        class="fixed w-full top-0 z-1000 bg-white after:pointer-events-none after:absolute after:inset-x-0 after:bottom-0 after:h-px after:bg-white/10 shadow-lg">
        <div class="w-xs sm:w-sm md:w-3xl lg:w-5xl mx-auto max-w-5xl">
            <div class="relative flex h-16 items-center justify-between">
                <div class="absolute inset-y-0 right-0 flex items-center sm:hidden">
                    <!-- Mobile menu button-->
                    <button type="button" command="--toggle" commandfor="mobile-menu"
                        class="relative inline-flex items-center justify-center rounded-md p-2 text-[#142e50] hover:text-gray-600 focus:outline-2 focus:-outline-offset-1 focus:outline-indigo-500">
                        <span class="absolute -inset-0.5"></span>
                        <span class="sr-only">Open main menu</span>
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
                            data-slot="icon" aria-hidden="true" class="size-6 in-aria-expanded:hidden">
                            <path d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
                            data-slot="icon" aria-hidden="true" class="size-6 not-in-aria-expanded:hidden">
                            <path d="M6 18 18 6M6 6l12 12" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>
                </div>
                <div class="flex flex-1 items-center justify-start md:justify-between sm:items-stretch ">
                    <div class="flex shrink-0 items-center">
                        <img src="{{ asset('assets/img/logo-navbar.png') }}" alt="Your Company" class="w-40" />
                    </div>
                    <div class="hidden sm:ml-6 sm:block">
                        <div class="flex items-center h-full space-x-4">
                            <!-- Current: "bg-gray-950/50 text-white", Default: "text-gray-300 hover:bg-white/5 hover:text-white" -->
                            <a href="{{ route('view-beranda') }}" aria-current="page"
                                class="rounded-md px-3 py-2 text-sm font-medium hover:bg-[#142e50] hover:text-white transition-colors {{ request()->is('/') ? 'text-white bg-[#142e50]' : 'text-[#142e50]' }}">Beranda</a>
                            <a href="{{ route('view-informasi') }}"
                                class="rounded-md px-3 py-2 text-sm font-medium hover:bg-[#142e50] hover:text-white transition-colors {{ request()->is('informasi') ? 'text-white bg-[#142e50]' : 'text-[#142e50] ' }}">Informasi</a>
                            <a href="{{ route('view-kontak') }}"
                                class="rounded-md px-3 py-2 text-sm font-medium hover:bg-[#142e50] hover:text-white transition-colors {{ request()->is('kontak') ? 'text-white bg-[#142e50]' : 'text-[#142e50] ' }}">Kontak</a>
                        </div>
                    </div>
                </div>
                <div
                    class="relative inset-y-0 right-0 md:flex hidden items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
                    <!-- Profile dropdown -->
                    @if (auth('customer')->check() || auth()->check())
                        {{-- <el-dropdown class="inline-block"> --}}
                        <button type="button" command="--toggle" commandfor="profile-menu"
                            class="inline-flex w-full justify-center gap-x-1.5 rounded-md bg-white py-2 font-medium text-sm text-gray-900 cursor-pointer">
                            {{ auth('customer')->check() ? auth('customer')->user()->name : (auth()->check() ? auth()->user()->name : '') }}
                            <svg viewBox="0 0 20 20" fill="currentColor" data-slot="icon" aria-hidden="true"
                                class="-mr-1 size-5 text-gray-400">
                                <path
                                    d="M5.22 8.22a.75.75 0 0 1 1.06 0L10 11.94l3.72-3.72a.75.75 0 1 1 1.06 1.06l-4.25 4.25a.75.75 0 0 1-1.06 0L5.22 9.28a.75.75 0 0 1 0-1.06Z"
                                    clip-rule="evenodd" fill-rule="evenodd" />
                            </svg>
                        </button>

                        <el-disclosure id="profile-menu"
                            class="w-56 divide-y divide-gray-100 rounded-md bg-white shadow-lg outline-1 outline-black/5 transition transition-discrete absolute z-10 bottom-[-40px] right-0 [--anchor-gap:--spacing(2)] data-closed:scale-95 data-closed:transform data-closed:opacity-0 data-enter:duration-100 data-enter:ease-out data-leave:duration-75 data-leave:ease-in">
                            <div class="py-1">
                                <form action="{{ route('logout') }}" method="POST" class="w-full">
                                    @csrf
                                    @method('POST')
                                    <button type="submit"
                                        class="px-3 py-2 w-full text-sm font-medium cursor-pointer text-gray-700 text-left focus:bg-gray-100 focus:text-gray-900 focus:outline-hidden">Keluar</button>
                                </form>
                            </div>

                        </el-disclosure>
                        {{-- </el-dropdown> --}}
                    @else
                        <div class="hover:scale-98">
                            <a href="{{ url('/user/login') }}"
                                class="py-2 px-5 border-2 border-[#142e50] text-[#142e50] rounded-full mr-3 font-bold">Masuk</a>
                        </div>
                        <div class="hover:scale-98">
                            <a href="{{ url('/user/register') }}"
                                class="py-2 px-5 bg-[#142e50] border-2 border-[#142e50] text-white rounded-full font-bold">Daftar</a>
                        </div>
                    @endauth
            </div>
        </div>
    </div>

    <el-disclosure id="mobile-menu" hidden class="block sm:hidden">
        <div class="space-y-1 px-2 pt-2 pb-3 absolute z-10 bg-white w-full shadow-lg">
            <div class="w-sm mx-auto space-y-3">
                <!-- Current: "bg-gray-950/50 text-white", Default: "text-gray-300 hover:bg-white/5 hover:text-white" -->
                <a href="{{ route('view-beranda') }}" aria-current="page"
                    class="block rounded-md px-3 py-2 text-base font-medium hover:bg-[#142e50] hover:text-white transition-colors {{ request()->is('/') ? 'text-white bg-[#142e50]' : 'text-[#142e50]' }}">Beranda</a>
                <a href="{{ route('view-informasi') }}"
                    class="block rounded-md px-3 py-2 text-base font-medium hover:bg-[#142e50] hover:text-white transition-colors {{ request()->is('informasi') ? 'text-white bg-[#142e50]' : 'text-[#142e50] ' }}">Informasi</a>
                <a href="{{ route('view-kontak') }}"
                    class="block rounded-md px-3 py-2 text-base font-medium hover:bg-[#142e50] hover:text-white transition-colors {{ request()->is('kontak') ? 'text-white bg-[#142e50]' : 'text-[#142e50] ' }}">Kontak</a>
                <hr class="my-2 bg-[#142e50]">
                @if (auth('customer')->check() || auth()->check())
                    <form action="{{ route('logout') }}" method="POST" class="w-full">
                        @csrf
                        @method('POST')
                        <button type="submit"
                            class="block rounded-md px-3 py-2 w-full text-base font-medium cursor-pointer text-left text-[#142e50] hover:bg-[#142e50] hover:text-white focus:bg-gray-100 focus:text-gray-900 focus:outline-hidden">Keluar</button>
                    </form>
                @else
                    <a href="{{ url('user/login') }}"
                        class="block rounded-md px-3 py-2 text-base text-center border border-[#142e50] font-medium transition-colors {{ request()->is('user/login') ? 'text-white bg-[#142e50]' : 'text-[#142e50] ' }}">Masuk</a>
                    <a href="{{ url('user/register') }}"
                        class="block rounded-md px-3 py-2 text-base text-center font-medium border border-[#142e50] bg-[#142e50] text-white transition-colors {{ request()->is('user/register') ? 'text-white bg-[#142e50]' : 'text-[#142e50] ' }}">Daftar</a>
                @endif
            </div>
        </div>
    </el-disclosure>
</nav>

</nav>
