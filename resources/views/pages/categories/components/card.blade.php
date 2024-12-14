@props(['categorie'])
<div class="max-w-sm  my-4 flex flex-col  justify-between shadow-md">
    <div class="bg-white rounded-lg p-4 flex flex-col  justify-between h-full">
        <div>
            <h3 class="text-xl font-bold text-gray-800">{{ $categorie->name }}</h3>
            <p class="text-gray-600 mt-2">{{ $categorie->description }}</p>
        </div>

        <div class="flex justify-start mt-4">
            <button
                class="bg-warning ease-in-out duration-150 text-white px-4 py-2 rounded hover:bg-warning-light focus:outline-none focus:ring-2 focus:ring-blue-300">
                Editar
            </button>
            <button
                class="bg-red-500 ease-in-out duration-150 text-white px-4 py-2 rounded ml-2 hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-red-300">
                Excluir
            </button>
        </div>
    </div>
</div>
