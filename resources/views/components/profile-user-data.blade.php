   
    <div class="d-flex gap-5">
       
        <div>
            <i class="fa-solid fa-user me-3"></i>Nome: {{ auth()->user()->name }}
        </div>

        <div>
            <i class="fa-solid fa-user me-3"></i>Cargo: {{ auth()->user()->role }}
        </div>

        <div>
            <i class="fa-solid fa-at me-3"></i>Email: {{ auth()->user()->email }}
        </div>

        <div>
            <i class="fa-regular fa-calendar-days me-3"></i>Criado em: {{ auth()->user()->created_at->format('d/m/Y') }}
        </div>
    </div>

