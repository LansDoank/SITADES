<x-layout>
    <div class="w-full bg-gray-200 flex justify-center">
        <section id="receptionist-login"
            class="w-[450px] group flex flex-shrink-0 overflow-hidden  justify-start dark:bg-gray-900 transition-transform duration-500">
            <div class="flex">
                <div id="receptionist-form"
                    class="flex flex-col w-[450px]  transition   items-center justify-center  md:h-screen lg:py-0">
                    <a href="#" class="flex items-center mb-6 text-2xl font-semibold text-gray-900 dark:text-white">
                        <img class="w-36 mr-2" src="/img/logo.png" alt="logo">
                    </a>
                    <div
                        class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
                        <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                            <h1
                                class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
                                Masuk sebagai resepsionis
                            </h1>
                            <form class="space-y-4 md:space-y-6" action="#">
                                @csrf
                                <div>
                                    <label for="username"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Username</label>
                                    <input type="text" name="username" id="username"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="name@company.com" required>
                                </div>
                                <div>
                                    <label for="password"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                                    <input type="password" name="password" id="password" placeholder="••••••••"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        required>
                                </div>
                                <button type="submit"
                                    class="w-full text-white bg-[#2C7D9E] focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center hover:bg-[#3E788E]">Sign
                                    in</button>
                                <p class="text-sm font-light text-gray-500 dark:text-gray-400">
                                    Masuk sebagai admin? <a href="javascript:void(0);" onclick="toggleLoginForm()"
                                        class="font-medium text-[#2C7D9E] hover:underline dark:text-primary-500">Masuk</a>
                                </p>
                            </form>
                        </div>
                    </div>
                </div>
                <div id="admin-form"
                    class="flex w-[450px] transition  flex-col  items-center justify-center  md:h-screen lg:py-0">
                    <a href="#"
                        class="flex items-center mb-6 text-2xl font-semibold text-gray-900 dark:text-white">
                        <img class="w-36 mr-2" src="/img/logo.png" alt="logo">
                    </a>
                    <div
                        class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
                        <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                            <h1
                                class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
                                Masuk sebagai admin
                            </h1>
                            <form class="space-y-4 md:space-y-6" action="#">
                                @csrf
                                <div>
                                    <label for="username"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Username</label>
                                    <input type="text" name="username" id="username"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="name@company.com" required>
                                </div>
                                <div>
                                    <label for="password"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                                    <input type="password" name="password" id="password" placeholder="••••••••"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        required>
                                </div>
                                <button type="submit"
                                    class="w-full text-white bg-[#2C7D9E] focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center hover:bg-[#3E788E]">Sign
                                    in</button>
                                <p class="text-sm font-light text-gray-500 dark:text-gray-400">
                                    Masuk sebagai resepsionis? <a href="javascript:void(0);" onclick="toggleLoginForm()"
                                        class="font-medium text-[#2C7D9E] hover:underline dark:text-primary-500">Masuk</a>
                                </p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <script>
        const receptionistForm = document.querySelector('#receptionist-form');
        const adminForm = document.querySelector('#admin-form');

        const toggleLoginForm = () => {
            receptionistForm.classList.toggle("-translate-x-[100%]");
            adminForm.classList.toggle("-translate-x-[100%]");
        }
    </script>
</x-layout>
