<x-guest-layout>
    <h2>Entrar</h2>

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <div class="form-group">
            <label for="email">E-mail</label>
            <input id="email" type="email" name="email" required autofocus>
        </div>

        <div class="form-group">
            <label for="password">Senha</label>
            <input id="password" type="password" name="password" required>
        </div>

        <button class="btn btn-primary">Entrar</button>
    </form>

    <a href="{{ route('password.request') }}" class="link">Esqueci minha senha</a>
    <a href="{{ route('register') }}" class="link">Criar nova conta</a>
</x-guest-layout>
