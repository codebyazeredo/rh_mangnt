<div class="d-flex flex-column sidebar pt-4">
    <a href="{{ route('home') }}"><i class="fa-solid fa-house me-3"></i>Início</a>

    @can('admin')
        <a href="#" class=""><i class="fas fa-users me-3"></i>Colaboradores</a>
        <a href="#" class=""><i class="fas fa-user-gear me-3"></i>RH Colaboradores</a>  
        <a href="{{ route('departments') }}" class=""><i class="fas fa-industry me-3"></i>Departamentos</a>  
    @endcan

    <hr>

    <a href="{{ route('user.profile') }}" class=""><i class="fas fa-cog me-3"></i>Perfil</a>
    
    <hr>

    <div class="text-center mt-3">
        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit" class="btn btn-sm btn-outline-dark">
                <i class="fa-solid fa-right-from-bracket"></i>
                Logout
            </button>
        </form>
    </div>
</div>