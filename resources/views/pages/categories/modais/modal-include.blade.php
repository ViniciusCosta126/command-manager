<div id="myModal" class="fixed inset-0 bg-gray-800 bg-opacity-50 flex items-center justify-center hidden">
    <div class="bg-white w-11/12 max-w-lg py-3 px-5 rounded-lg shadow-lg relative">
        <div class="title">
            <h2 class="text-xl font-bold">Incluir nova categoria</h2>
            <p class="text-sm">Utilize esta tela para incluir uma nova categoria</p>
        </div>

        <div class="mt-2">
            <form method="POST" action="{{ route('categories.createCategorie') }}">
                @csrf
                <div class="mb-4">
                    <label for="name" class="block text-gray-700 text-sm font-bold mb-2">
                        Nome
                    </label>
                    <input type="text" id="name" name="name" placeholder="Digite o nome da categoria"
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" />
                </div>
                <div class="mb-4">
                    <label for="description" class="block text-gray-700 text-sm font-bold mb-2">
                        Descrição
                    </label>
                    <textarea id="description" name="description" placeholder="Digite a descricao da categoria"
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" />
                    </textarea>
                </div>
                <div class="mb-4">
                    <label for="status" class="block text-gray-700 text-sm font-bold mb-2">
                        Status
                    </label>
                    <select name="status" id="status"
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" />>
                    <option value="1" selected>Ativo</option>
                    <option value="0">Inativo</option>
                    </select>
                </div>
                <button class="bg-success px-3 py-1 rounded text-white w-1/4" type="submit">Enviar</button>
            </form>
        </div>

        <button class="bg-danger top-2 right-2 absolute text-white px-3 py-0.5 rounded" onclick="closeModal()">
            <i class="fa-solid fa-x"></i>
        </button>

    </div>
</div>
