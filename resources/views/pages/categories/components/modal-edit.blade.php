@props(['categorie'])

<div id="editCategorie{{ $categorie->id }}"
    class="fixed inset-0 bg-gray-800 bg-opacity-50 flex items-center justify-center hidden">
    <div class="bg-white w-11/12 max-w-lg py-3 px-5 rounded-lg shadow-lg relative">
        <div class="title">
            <h2 class="text-xl font-bold">Editar categoria</h2>
            <p class="text-sm">Utilize esta tela para editar uma categoria</p>
        </div>

        <div class="mt-2">
            <form method="POST" action="{{ route('categoires.saveEditCategorie', $categorie->id) }}">
                @csrf
                @method('put')
                <div class="mb-4">
                    <label for="name" class="block text-gray-700 text-sm font-bold mb-2">
                        Nome
                    </label>
                    <input value="{{ $categorie->name }}" type="text" id="name" name="name"
                        placeholder="Digite o nome da categoria"
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" />
                </div>
                <div class="mb-4">
                    <label for="description" class="block text-gray-700 text-sm font-bold mb-2">
                        Descrição
                    </label>
                    <textarea id="description" name="description" placeholder="Digite a descricao da categoria"
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" />
                    {{ $categorie->description }}
                    </textarea>
                </div>
                <div class="mb-4">
                    <label for="status" class="block text-gray-700 text-sm font-bold mb-2">
                        Status
                    </label>
                    <select name="status" id="status"
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" />>
                    <option value="1" {{ $categorie->status ? 'selected' : '' }}>Ativo</option>
                    <option value="0" {{ !$categorie->status ? 'selected' : '' }}>Inativo</option>
                    </select>
                </div>
                <button class="bg-success px-3 py-1 rounded text-white w-1/4" type="submit">Salvar</button>
            </form>
        </div>

        <button onclick="closeModalEdit({{ $categorie->id }})"
            class="bg-danger top-2 right-2 absolute text-white px-3 py-0.5 rounded">
            <i class="fa-solid fa-x"></i>
        </button>

    </div>
</div>

<script></script>
