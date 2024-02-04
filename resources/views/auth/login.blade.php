<x-app-layout>
    <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-sm">
            <h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900 dark:text-white">
                Faça login em sua conta
            </h2>
        </div>

        <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
            <form class="space-y-6" action="{{ route('login') }}" method="POST">
                @csrf

                <div>
                    <x-input-label for="email" value="Email" />
                    <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <div>
                    <div class="flex items-center justify-between">
                        <x-input-label for="password" value="Senha" />
                        <div class="text-sm">
                            <a href="#" class="font-semibold text-indigo-600 hover:text-indigo-500">Esqueceu sua senha?</a>
                        </div>
                    </div>
                    <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" :value="old('password')" required />
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <div>
                    <button type="submit" class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                        Acessar
                    </button>
                </div>
            </form>

            <p class="mt-10 text-center text-sm text-gray-800 dark:text-white">
                Ainda não possuí uma conta? <br>
                <a href="{{ route('register') }}" class="font-semibold leading-6 text-indigo-600 dark:text-indigo-200 hover:text-indigo-500">Cadastre-se</a>
                ou
                <a href="#" class="font-semibold leading-6 text-indigo-600 dark:text-indigo-200 hover:text-indigo-500">Comece uma demonstração</a>
            </p>
        </div>
    </div>
</x-app-layout>
