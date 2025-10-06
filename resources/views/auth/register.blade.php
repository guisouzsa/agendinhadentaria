<x-guest-layout>
    <h2>Criar Conta</h2>

    <form method="POST" action="{{ route('register') }}">
        @csrf

        <div class="form-group">
            <label for="name">Nome</label>
            <input id="name" type="text" name="name" required autofocus>
        </div>

        <div class="form-group">
            <label for="email">E-mail</label>
            <input id="email" type="email" name="email" required>
        </div>

        <div class="form-group">
            <label for="password">Senha</label>
            <input id="password" type="password" name="password" required>
        </div>

        <div class="form-group">
            <label for="password_confirmation">Confirmar Senha</label>
            <input id="password_confirmation" type="password" name="password_confirmation" required>
        </div>

        <button class="btn btn-primary">Cadastrar</button>
    </form>

    <a href="{{ route('login') }}" class="link">Já tem conta? Entrar</a>
</x-guest-layout>
