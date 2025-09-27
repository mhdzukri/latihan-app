@component('layout', ['title' => 'Detail Ticket - Ulu Kasok'])
    @include('navbar')

    <section class="bg-gray-100 py-10">
        <div class="max-w-5xl mx-auto bg-white rounded-xl shadow-lg overflow-hidden">
            <!-- Header -->
            <div class="p-6 md:p-8 border-b border-gray-200">
                <h1 class="text-2xl md:text-3xl font-semibold text-gray-900 mb-2">Pesanan Tiket Anda</h1>
                <p class="text-sm text-gray-600 mb-3">Order ID : {{ $order->invoice_number }}</p>
            </div>

            <div class="p-6 md:p-8">
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                    <!-- Ticket Details -->
                    <div class="lg:col-span-2">
                        <!-- Ticket Item -->
                        <div class="flex items-center p-5 bg-blue-50 rounded-xl border border-blue-100 mb-6">
                            <div class="flex-1">
                                <p class="text-sm text-gray-500 uppercase tracking-wide font-medium mb-1">Tiket Wisata
                                </p>
                                <h3 class="text-xl font-semibold text-gray-900 mb-2">Ulu Kasok</h3>
                                <div class="flex items-center space-x-4 text-sm text-gray-600 mt-1">
                                    <span>Tanggal Kunjungan:
                                        {{ \Carbon\Carbon::parse($order->date_of_visit)->format('d-m-Y') }} </span>
                                </div>
                            </div>
                            <div class="text-right">
                                <p class="text-2xl font-semibold text-gray-900">Rp
                                    {{ number_format($order->total_amount, 0, ',', '.') }}</p>
                                <span
                                    class="inline-flex items-center px-2 py-1 rounded-full text-xs font-medium bg-yellow-100 text-yellow-800 mt-1">
                                    Pending
                                </span>
                            </div>
                        </div>

                        <!-- Order Summary -->
                        <div class="bg-gray-50 rounded-xl p-6">
                            <button class="flex items-center justify-between w-full mb-4">
                                <h3 class="text-lg font-semibold text-gray-900">Ringkasan Pesanan</h3>
                                <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </button>

                            <div class="space-y-3">
                                <div class="flex justify-between text-gray-600">
                                    <span>Subtotal</span>
                                    <span>Rp {{ number_format($order->total_amount, 0, ',', '.') }}</span>
                                </div>
                                {{-- <div class="flex justify-between text-gray-600">
                                    <span>Biaya Admin</span>
                                    <span>Rp25.000</span>
                                </div>
                                <div class="flex justify-between text-gray-600">
                                    <span>Diskon</span>
                                    <span class="text-green-600">-Rp50.000</span>
                                </div> --}}
                                <hr class="border-gray-300">
                                <div class="flex justify-between text-lg font-semibold text-gray-900">
                                    <span>Total</span>
                                    <span>Rp {{ number_format($order->total_amount, 0, ',', '.') }}</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Customer Info Sidebar -->
                    <div class="space-y-6">
                        <!-- Customer Information -->
                        <div class="bg-white border border-gray-200 rounded-xl p-5">
                            <div class="flex items-center justify-between mb-4">
                                <h3 class="text-lg font-semibold text-gray-900">Pelanggan</h3>
                            </div>
                            <div class="flex items-center space-x-3 mb-4">
                                <div class="w-10 h-10 bg-blue-100 rounded-full flex items-center justify-center">
                                    <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z">
                                        </path>
                                    </svg>
                                </div>
                                <div>
                                    <p class="font-medium text-gray-900">{{ $order->customer->name }}</p>
                                    <p class="text-sm text-gray-500">{{ $order->orderItem->quantity }} Tiket</p>
                                </div>
                            </div>
                        </div>

                        <!-- Customer Details -->
                        <div class="bg-white border border-gray-200 rounded-xl p-5">
                            <div class="flex items-center justify-between mb-4">
                                <h3 class="text-lg font-semibold text-gray-900">Informasi Pelanggan</h3>
                                {{-- <button class="text-blue-600 hover:text-blue-800">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z">
                                        </path>
                                    </svg>
                                </button> --}}
                            </div>
                            <div class="space-y-3">
                                <div class="flex items-center space-x-3 text-sm">
                                    <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                                        </path>
                                    </svg>
                                    <span class="text-gray-700">{{ $order->customer->email }}</span>
                                </div>
                                <div class="flex items-center space-x-3 text-sm">
                                    <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z">
                                        </path>
                                    </svg>
                                    <span class="text-gray-700">{{ $order->customer->phone }}</span>
                                </div>
                            </div>
                        </div>

                        <!-- Payment Button -->
                        <button id="pay-button"
                            class="w-full bg-blue-600 hover:bg-blue-700 text-white font-semibold py-4 px-6 rounded-xl transition duration-200 shadow-lg hover:shadow-xl transform hover:-translate-y-0.5 cursor-pointer">
                            <div class="flex items-center justify-center space-x-2">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z">
                                    </path>
                                </svg>
                                <span>Bayar Sekarang</span>
                            </div>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('footer')

    <script src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="{{ config('midtrans.client_key') }}">
    </script>
    <script type="text/javascript">
        document.getElementById('pay-button').onclick = function() {
            snap.pay('{{ $snap_token }}', {
                onSuccess: function(result) {
                    window.location.href = '{{ url('payment/success') }}'
                },
                onPending: function(result) {},
                onError: function(result) {}
            });
        };
    </script>
@endcomponent
