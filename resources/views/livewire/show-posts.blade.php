<div>
    <div class="container">
        <h1 class="text-center">Lista de Usuarios</h1>
        <div class="text-center">
            <input type="text" wire:model="search">
        </div>
        <br>
        <table class="table-fixed w-full">
            <thead>
                <tr class="bg-info text-white">
                    <th class="cursor-pointer px-4 py-2">ID
                    </th>
                    <th class="cursor-pointer px-4 py-2">Nombre
                    </th>
                    <th class="cursor-pointer px-4 py-2">Apellido
                    </th>
                </tr>
            </thead>
            <tbody>
             @foreach ($posts as $item)
                <tr>
                    <td class="border px-4 py-2">{{$item->id}}</td>
                    <td class="border px-4 py-2">{{$item->nombre}}</td>
                    <td class="border px-4 py-2">{{$item->apellido}}</td>
                </tr>
             @endforeach
            </tbody>
        </table>
    </div>
</div>
