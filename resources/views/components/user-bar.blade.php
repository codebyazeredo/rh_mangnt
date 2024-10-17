<div class="d-flex justify-content-between bg-color-1 text-white py-1 px-3">

    <div class="d-flex align-items-center">

        <h4 class="ms-3 text-primary m-0 p-0">
            <a href="{{ route('home') }}">{{ config('app.name') }}</a>
        </h4>
    </div>
    <div class="d-flex align-items-center">
        <i class="fas fa-user-circle me-3"></i>
        <a href="#" class="text-primary me-3">
            {{ auth()->user()->name }}
        </a>

        <form action="{{ route('logout') }}" method="post">
            @csrf
            <button type="submit" class="btn bnt-sm btn-danger">
            <i class="fas fa-sign-out-alt"></i></button>
        </form>
    </div>
</div>
