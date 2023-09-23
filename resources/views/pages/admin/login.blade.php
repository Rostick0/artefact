@include('layout.head')

<section class="auth">
    <div class="auth__inner">
        <h1 class="auth__title">Авторизация</h1>
        <form class="auth__form" action="{{ url()->current() }}" method="POST">
            @csrf
            <div class="auth__inputs">
                <label class="label">
                    <span class="label__title">E-mail</span>
                    <input class="input" type="email" name="email" required>
                    @error('email')
                        <span class="error">{{ $message }}</span>
                    @enderror
                </label>
                <label class="label">
                    <span class="label__title">Password</span>
                    <input class="input" type="password" name="password" required>
                    @error('password')
                        <span class="error">{{ $message }}</span>
                    @enderror
                </label>
            </div>
            <button class="btn auth__btn">Sign up</button>
        </form>
    </div>
</section>

@include('layout.foot')
