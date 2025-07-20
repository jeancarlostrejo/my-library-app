<div class="dark:text-gray-100 text-gray-900">
    <div class="max-w-7xl mx-auto mb-5">
        <form wire:submit='dataSearch'>
            <div class="grid md:grid-cols-3 gap-5 items-center">
                <div class="mb-5 px-2 lg:px-0">
                    <label class="block mb-1 text-sm font-bold text-gray-900 dark:text-gray-100" for="author"> Buscar
                        por autor
                    </label>
                    <input id="author" type="text" wire:model='author' placeholder="Ej. Carlos Ruiz Zafón"
                        class="rounded-md shadow-sm border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 w-full p-2 bg-white dark:bg-gray-800 text-gray-900 dark:text-gray-100" />
                </div>
                <div class="mb-5 px-2 lg:px-0">
                    <label class="block mb-1 text-sm font-bold text-gray-900 dark:text-gray-100" for="bookName">Buscar
                        por libro
                    </label>
                    <input id="bookName" type="text" wire:model='bookName' placeholder="Ej. La sombra del viento"
                        class="rounded-md shadow-sm border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 w-full p-2 bg-white dark:bg-gray-800 text-gray-900 dark:text-gray-100" />
                </div>

                <div class="lg:px-0">
                    <input type="submit"
                        class="bg-blue-600 hover:bg-blue-700 transition-colors text-white text-sm font-bold px-10 py-2 rounded cursor-pointer uppercase w-full md:max-w-48 p-2"
                        value="Buscar" />
                </div>
            </div>
        </form>
    </div>
</div>
