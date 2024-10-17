<x-layout-guest page-title="Login">
    
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-4">
                <div class="text-center mb-5">
                   
                </div>

                <div class="card p-5">

                    <form action="{{ route('login') }}" method="post">
                        @csrf
                        
                        <div class="mb-3">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email">
                            @error('email')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        
                        <div class="mb-3">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password" name="password">
                            @error('password')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="d-flex justify-content-between align-itens-center">
                            <a href="{{ route('password.request') }}">Esqueceu sua Senha?</a>
                            <button type="submit" class="btn btn-sm btn-primary">Entrar</button>
                        </div>
                    </form>

                    @if (session('status'))
                        <div class="alert alert-success mt-3 text-center">
                            {{ session('status') }}
                        </div>
                    @endif

                </div>

            </div>
        </div>
    </div>

</x-layout-guest>