<div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                Base Laravel
                </div>
                <div class="links">
                <a href="{{ url('/produto') }}"><button type="button" class="btn btn-primary btn-lg btn-block">Lista de Produtos</button></a>
                <a href="#objetivo"><button type="button" class="btn btn-success btn-lg btn-block">Objetivo do projeto</button></a>
                </div>
                
            </div>
        </div>
        