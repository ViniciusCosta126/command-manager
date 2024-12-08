<x-layout title="Manager | Categories">
    @section('content')
        <h1 class="font-black text-6xl">Categorias</h1>

        <button onclick="openModal()" class="mt-4 bg-success px-2 py-1 rounded text-white font-bold d-flex">Adicionar
            Categoria +</button>
        <div class="grid grid-cols-4 gap-4">
            <div>
                <h1>1</h1>
            </div>
            <div>
                <h1>2</h1>
            </div>
            <div>
                <h1>3</h1>
            </div>
            <div>
                <h1>4</h1>
            </div>
        </div>
        @include('pages.categories.modais.modal-include')
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
