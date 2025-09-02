@extends('layouts.app')

@section('content')
<div class="min-h-screen flex items-center justify-center bg-gray-50 dark:bg-gray-900 py-12 px-4 sm:px-6 lg:px-8">
    <div class="max-w-md w-full">
        <!-- Owl mascot -->
        <div id="auth-owl-register" class="mx-auto flex items-center justify-center mb-4">
            <svg width="96" height="96" viewBox="0 0 96 96" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                <g id="owl">
                    <circle cx="48" cy="48" r="44" fill="#F8FAFC" stroke="#E6E7E9" />
                    <g id="eyes" class="owl-eyes">
                        <ellipse class="eye" cx="34" cy="44" rx="8" ry="6" fill="#111827"></ellipse>
                        <ellipse class="eye" cx="62" cy="44" rx="8" ry="6" fill="#111827"></ellipse>
                    </g>
                    <path d="M40 60c3 3 8 3 11 0" stroke="#111827" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M48 30c0-6 10-6 10 0" stroke="#F97316" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                </g>
            </svg>
        </div>

    <div id="auth-card-register" class="mx-auto mt-6 bg-gray-50 dark:bg-gray-800 border border-gray-200 dark:border-gray-700 rounded-2xl p-6 shadow-2xl transform transition-all duration-700 opacity-0 translate-y-6">
            <div class="text-center">
                <h2 class="text-2xl font-extrabold text-gray-900 dark:text-white">Create your account</h2>
                <p class="mt-1 text-sm text-gray-600 dark:text-gray-300">Or <a href="{{ route('login') }}" class="font-medium text-indigo-600 dark:text-indigo-400 hover:text-indigo-500">sign in to an existing account</a></p>
            </div>

            <form class="mt-6 space-y-6" method="POST" action="{{ route('register') }}">
            @csrf

            @if ($errors->any())
                <div class="text-sm text-red-600 mb-2">
                    <ul class="list-disc pl-5">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="rounded-lg">
                <div class="mb-4">
                    <label for="name" class="sr-only">Full name</label>
                    <input id="name" name="name" type="text" autocomplete="name" required
                        class="appearance-none rounded-lg relative block w-full px-4 py-3 border border-gray-200 bg-white dark:bg-gray-800 dark:border-gray-700 placeholder-gray-400 dark:placeholder-gray-500 text-gray-900 dark:text-white focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                        placeholder="Full name" value="{{ old('name') }}">
                </div>

                <div class="mb-4">
                    <label for="email" class="sr-only">Email address</label>
                    <input id="email" name="email" type="email" autocomplete="email" required
                        class="appearance-none rounded-lg relative block w-full px-4 py-3 border border-gray-200 bg-white dark:bg-gray-800 dark:border-gray-700 placeholder-gray-400 dark:placeholder-gray-500 text-gray-900 dark:text-white focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                        placeholder="Email address" value="{{ old('email') }}">
                </div>

                <div class="mb-4 relative">
                    <label for="password" class="sr-only">Password</label>
                    <input id="password" name="password" type="password" autocomplete="new-password" required
                        class="appearance-none rounded-lg relative block w-full px-4 py-3 border border-gray-200 bg-white dark:bg-gray-800 dark:border-gray-700 placeholder-gray-400 dark:placeholder-gray-500 text-gray-900 dark:text-white focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                        placeholder="Password">
                    <button type="button" id="toggle-password-register" class="absolute right-2 top-1/2 transform -translate-y-1/2 text-gray-500 hover:text-gray-700 dark:text-gray-400">
                        <svg id="eye-open-register" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.477 0 8.268 2.943 9.542 7-1.274 4.057-5.065 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                            <circle cx="12" cy="12" r="3" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        <svg id="eye-closed-register" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 hidden" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 3l18 18" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9.88 9.88A3 3 0 0114.12 14.12" />
                        </svg>
                    </button>
                </div>

                <div class="relative">
                    <label for="password_confirmation" class="sr-only">Confirm Password</label>
                    <input id="password_confirmation" name="password_confirmation" type="password" autocomplete="new-password" required
                        class="appearance-none rounded-lg relative block w-full px-4 py-3 border border-gray-200 bg-white dark:bg-gray-800 dark:border-gray-700 placeholder-gray-400 dark:placeholder-gray-500 text-gray-900 dark:text-white focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                        placeholder="Confirm password">
                    <button type="button" id="toggle-password-confirm" class="absolute right-2 top-1/2 transform -translate-y-1/2 text-gray-500 hover:text-gray-700 dark:text-gray-400">
                        <svg id="eye-open-confirm" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.477 0 8.268 2.943 9.542 7-1.274 4.057-5.065 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                            <circle cx="12" cy="12" r="3" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        <svg id="eye-closed-confirm" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 hidden" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 3l18 18" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9.88 9.88A3 3 0 0114.12 14.12" />
                        </svg>
                    </button>
                </div>
            </div>

            <div class="mt-6">
                <button type="submit" class="w-full inline-flex justify-center items-center py-3 px-4 border border-transparent text-sm font-semibold rounded-lg text-white bg-indigo-600 hover:bg-indigo-700 shadow-md transition-transform transform hover:-translate-y-0.5">
                    Create account
                </button>
            </div>
            </form>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const card = document.getElementById('auth-card-register');
        if (!card) return;
        requestAnimationFrame(() => {
            card.classList.remove('opacity-0', 'translate-y-6');
            card.classList.add('opacity-100', 'translate-y-0');
        });
    });
</script>

@endsection

<style>
/* Owl eyes animation for register */
.owl-eyes .eye { transform-origin: center; transform-box: fill-box; transition: transform 180ms ease; }
.owl-eyes.closed .eye { transform: scaleY(0.18); }
</style>

<script>
document.addEventListener('DOMContentLoaded', function () {
    const owl = document.getElementById('auth-owl-register');
    if (!owl) return;
    const pw = document.getElementById('password');
    const pwc = document.getElementById('password_confirmation');
    function updateEyes() {
        const group = owl.querySelector('.owl-eyes');
        if (!group) return;
        if ((pw && pw.value && pw.value.length > 0) || (pwc && pwc.value && pwc.value.length > 0) || (pw && document.activeElement === pw) || (pwc && document.activeElement === pwc)) {
            group.classList.add('closed');
        } else {
            group.classList.remove('closed');
        }
    }
    [pw, pwc].forEach(el => {
        if (!el) return;
        el.addEventListener('input', updateEyes);
        el.addEventListener('focus', updateEyes);
        el.addEventListener('blur', updateEyes);
    });
    updateEyes();
    // toggle buttons
    const togglePw = document.getElementById('toggle-password-register');
    const toggleConfirm = document.getElementById('toggle-password-confirm');
    if (togglePw && pw) {
        const open = document.getElementById('eye-open-register');
        const closed = document.getElementById('eye-closed-register');
        togglePw.addEventListener('click', () => {
            const isPwd = pw.type === 'password';
            pw.type = isPwd ? 'text' : 'password';
            open.classList.toggle('hidden');
            closed.classList.toggle('hidden');
            updateEyes();
        });
    }
    if (toggleConfirm && pwc) {
        const openC = document.getElementById('eye-open-confirm');
        const closedC = document.getElementById('eye-closed-confirm');
        toggleConfirm.addEventListener('click', () => {
            const isPwd = pwc.type === 'password';
            pwc.type = isPwd ? 'text' : 'password';
            openC.classList.toggle('hidden');
            closedC.classList.toggle('hidden');
            updateEyes();
        });
    }
});
</script>
