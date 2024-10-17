<x-layout-app page-title="Home">
    <h1 class="text-center">APP INSIDE</h1>

    @php
        dump(auth()->user());
    @endphp
</x-layout-app>