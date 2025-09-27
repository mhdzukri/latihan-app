@component('layout', ['title' => 'Ulu Kasok - Kontak'])
    @include('navbar')

    <section class="mb-[-100px]">
        <div class="relative max-w-5xl mx-auto">
            <div class="relative">
                <!-- Hero Section -->
                <div class="absolute w-full text-center mb-12 animate-fade-in-down pt-25 z-5">
                    <h1 class="text-5xl font-bold text-white mb-6 drop-shadow-lg montserrat ">
                        Hubungi Kami
                    </h1>
                    <p class="text-xl text-white/90 max-w-2xl mx-auto leading-relaxed">
                        Kami siap memberikan solusi yang tepat sesuai <br> kebutuhan anda
                    </p>
                </div>
                <!-- Background Image -->
                <img src="{{ asset('assets/img/hero-kontak.png') }}" alt="Customer Service Background" class="inset-0 ">

                <!-- Blue Overlay with Transparency -->
                <div class="absolute inset-0 bg-gradient-to-br from-slate-700/80 via-blue-900/70 to-blue-800/80"></div>
            </div>

            <!-- Main Content Card -->
            <div
                class="relative top-[-160px] w-full bg-white/95 rounded-[50px] shadow-2xl overflow-hidden animate-fade-in-up">
                <div class="grid lg:grid-cols-5 gap-0">

                    <!-- Contact Information -->
                    <div class="col-span-2 p-8 md:p-12 bg-gradient-to-br from-slate-50 to-gray-100">
                        <h2 class="text-2xl font-bold text-gray-800 mb-8">Hubungi Kami</h2>

                        <!-- Email -->
                        <div class="flex items-center mb-8 group">
                            <div
                                class="w-14 h-14 bg-[#142e50] rounded-full flex items-center justify-center mr-6  transition-colors duration-300">
                                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-semibold text-gray-800 text-lg mb-1">Email</h3>
                                <p class="text-gray-600 text-lg">ulukasok1357@gmail.com</p>
                            </div>
                        </div>

                        <!-- Phone -->
                        <div class="flex items-center mb-8 group">
                            <div
                                class="w-14 h-14 bg-[#142e50] rounded-full flex items-center justify-center mr-6  transition-colors duration-300">
                                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-semibold text-gray-800 text-lg mb-1">Telepon</h3>
                                <p class="text-gray-600 text-lg">+62 812 3456 7890</p>
                            </div>
                        </div>

                        <!-- Social Media -->
                        <div class="mt-12">
                            <h3 class="font-semibold text-gray-800 text-lg mb-6">Ikuti Sosial Media Kami</h3>
                            <div class="flex space-x-3">
                                <!-- Facebook -->
                                <a href="#"
                                    class="w-10 h-10 bg-blue-600 rounded-full flex items-center justify-center hover:bg-blue-700 transition-all duration-300 hover:scale-110 hover:shadow-lg">
                                    <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 24 24">
                                        <path
                                            d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" />
                                    </svg>
                                </a>

                                <!-- LinkedIn -->
                                <a href="#"
                                    class="w-10 h-10 bg-blue-700 rounded-full flex items-center justify-center hover:bg-blue-800 transition-all duration-300 hover:scale-110 hover:shadow-lg">
                                    <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 24 24">
                                        <path
                                            d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z" />
                                    </svg>
                                </a>

                                <!-- Twitter -->
                                <a href="#"
                                    class="w-10 h-10 bg-sky-500 rounded-full flex items-center justify-center hover:bg-sky-600 transition-all duration-300 hover:scale-110 hover:shadow-lg">
                                    <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 24 24">
                                        <path
                                            d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z" />
                                    </svg>
                                </a>

                                <!-- Instagram -->
                                <a href="#"
                                    class="w-10 h-10 bg-radial-[at_0%_10%] from-[#ffdc80] via-[#e1306c] to-[#5851db] to-95% rounded-full flex items-center justify-center hover:bg-pink-700 transition-all duration-300 hover:scale-110 hover:shadow-lg">
                                    <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 450 480">
                                        <path
                                            d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z" />
                                </a>

                                <!-- TikTok -->
                                <a href="#"
                                    class="w-10 h-10 bg-gray-900 rounded-full flex items-center justify-center hover:bg-black transition-all duration-300 hover:scale-110 hover:shadow-lg">
                                    <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 24 24">
                                        <path
                                            d="M12.525.02c1.31-.02 2.61-.01 3.91-.02.08 1.53.63 3.09 1.75 4.17 1.12 1.11 2.7 1.62 4.24 1.79v4.03c-1.44-.05-2.89-.35-4.2-.97-.57-.26-1.1-.59-1.62-.93-.01 2.92.01 5.84-.02 8.75-.08 1.4-.54 2.79-1.35 3.94-1.31 1.92-3.58 3.17-5.91 3.21-1.43.08-2.86-.31-4.08-1.03-2.02-1.19-3.44-3.37-3.65-5.71-.02-.5-.03-1-.01-1.49.18-1.9 1.12-3.72 2.58-4.96 1.66-1.44 3.98-2.13 6.15-1.72.02 1.48-.04 2.96-.04 4.44-.99-.32-2.15-.23-3.02.37-.63.41-1.11 1.04-1.36 1.75-.21.51-.15 1.07-.14 1.61.24 1.64 1.82 3.02 3.5 2.87 1.12-.01 2.19-.66 2.77-1.61.19-.33.4-.67.41-1.06.1-1.79.06-3.57.07-5.36.01-4.03-.01-8.05.02-12.07z" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Contact Form -->
                    <div class="col-span-3 p-8 md:p-12 bg-white">
                        <h2 class="text-2xl font-bold text-gray-800 mb-8">Kirim Kami Pesan</h2>

                        <form class="space-y-6">
                            <!-- Name Field -->
                            <div>
                                <label for="name" class="block text-sm font-semibold text-gray-700 mb-2">Nama</label>
                                <input type="text" id="name" name="name"
                                    class="w-full px-4 py-2 border border-gray-300 rounded-xl transition-all duration-300 text-lg"
                                    placeholder="Masukkan nama lengkap Anda" required>
                            </div>

                            <!-- Email and Phone -->
                            <div class="grid md:grid-cols-2 gap-4">
                                <div>
                                    <label for="email"
                                        class="block text-sm font-semibold text-gray-700 mb-2">Email</label>
                                    <input type="email" id="email" name="email"
                                        class="w-full px-4 py-2 border border-gray-300 rounded-xl transition-all duration-300 text-lg"
                                        placeholder="email@example.com" required>
                                </div>
                                <div>
                                    <label for="phone" class="block text-sm font-semibold text-gray-700 mb-2">No
                                        HP</label>
                                    <input type="tel" id="phone" name="phone"
                                        class="w-full px-4 py-2 border border-gray-300 rounded-xl transition-all duration-300 text-lg"
                                        placeholder="+62 xxx xxx xxxx">
                                </div>
                            </div>

                            <!-- Message Field -->
                            <div>
                                <label for="message" class="block text-sm font-semibold text-gray-700 mb-2">Pesan</label>
                                <textarea id="message" name="message" rows="4"
                                    class="w-full px-4 py-2 border border-gray-300 rounded-xl transition-all duration-300 text-lg resize-none"
                                    placeholder="Tulis pesan Anda di sini..." required></textarea>
                            </div>

                            <!-- Submit Button -->
                            <button type="submit"
                                class="w-full bg-gradient-to-r from-blue-600 to-blue-700 hover:from-blue-700 hover:to-blue-800 text-white font-bold py-4 px-8 rounded-xl transition-all duration-300 text-lg transform hover:scale-102 hover:shadow-lg active:scale-98">
                                Kirim Pesan
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('footer')
@endcomponent
