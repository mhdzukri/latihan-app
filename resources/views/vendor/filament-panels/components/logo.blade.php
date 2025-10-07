<a href="/" class="mb-20 block">
    <img src="{{ asset('assets/img/ulu-kasok.png') }}" alt="logo" class="hidden dark:flex h-10">
    <img src="{{ asset('assets/img/logo-navbar.png') }}" alt="logo" class="block dark:hidden h-10">
</a>
@if (request()->is('*/login') || request()->is('*/register'))
    <br>
@endif
