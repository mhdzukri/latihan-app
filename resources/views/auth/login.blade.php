@component('layout', ['title' => 'Login'])
    {{-- @include('navbar') --}}

    <div class="flex flex-col justify-between h-screen pt-30">
        <div class="flex justify-center items-center max-w-5xl w-full mx-auto shadow-lg rounded-xl overflow-hidden ">
            <div class="w-1/2 hidden h-100 lg:block">
                <img src="{{ asset('assets/img/img-1.png') }}" alt="Placeholder Image" class="object-cover h-full">
            </div>
            <!-- Right: Login Form -->
            <div class= "w-full lg:w-1/2">
                <div class="flex flex-col justify-center ">
                    <div class="sm:mx-auto sm:w-full sm:max-w-sm">
                        <h2 class="text-center text-2xl/9 font-bold tracking-tight text-gray-900">Masuk</h2>
                    </div>

                    <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
                        <form action="{{ route('login.authenticate') }}" method="POST" class="space-y-6">
                            @csrf
                            @method('POST')
                            <div>
                                <label for="email" class="block text-sm/6 font-medium text-gray-900">Email
                                    address</label>
                                <div class="mt-2">
                                    <input id="email" type="email" name="email" required autocomplete="email"
                                        class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6" />
                                </div>
                            </div>

                            <div>
                                <div class="flex items-center justify-between">
                                    <label for="password" class="block text-sm/6 font-medium text-gray-900">Password</label>
                                    <div class="text-sm">
                                        <a href="#" class="font-semibold text-[#142e50] hover:text-gray-600">Forgot
                                            password?</a>
                                    </div>
                                </div>
                                <div class="mt-2">
                                    <input id="password" type="password" name="password" required
                                        autocomplete="current-password"
                                        class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6" />
                                </div>
                            </div>

                            <div>
                                <button type="submit"
                                    class="flex w-full justify-center rounded-md bg-[#142e50] px-3 py-1.5 text-sm/6 font-semibold text-white shadow-xs cursor-pointer hover:scale-101 transition focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Sign
                                    in</button>
                            </div>
                        </form>

                        <p class="mt-5 text-center text-sm/6 text-gray-500">
                            Belum punya akun?
                            <a href="#" class="font-semibold text-[#142e50] hover:text-gray-600">Daftar</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        @include('footer')
    </div>
@endcomponent
