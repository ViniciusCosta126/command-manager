<x-layout title="Manager | Categories">
    @section('content')
        <h1 class="font-black text-6xl">Categorias</h1>

        <button onclick="openModal()"
            class="ease-in-out duration-150 hover:bg-success-light mt-4 bg-success px-2 py-1 rounded text-white font-bold d-flex">Adicionar
            Categoria +</button>
        <div class="grid grid-cols-4 gap-4 mt-4">
            @foreach ($categories as $categorie)
                @include('pages.categories.components.card', ['categorie' => $categorie])
            @endforeach
        </div>
        @include('pages.categories.components.modal-include')
    @endsection
</x-layout>


<script>
    function openModal() {
        document.getElementById('myModal').classList.remove('hidden');
    }

    function closeModal() {
        document.getElementById('myModal').classList.add('hidden');
    }
</script>
