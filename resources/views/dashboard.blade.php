<x-app-layout>
    <div class="container large dashboard" id="root" v-cloak>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Dashboard') }}
            </h2>
        </x-slot>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        You're logged in!
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="fixed-action-btn">
        <a data-position="left" data-delay="50" data-tooltip="Formulario nuevo"
            class="btn-floating btn-large tooltipped red" href="{{url('admin/formularios/nuevo')}}">
            <i class="large material-icons">add</i>
        </a>
        <ul>
            @if(has_permisions('CREATE_USER'))
            <li><a data-position="left" data-delay="50" data-tooltip="Usuario nuevo" class="btn-floating tooltipped red"
                    href="{{url('admin/usuarios/agregar')}}"><i class="material-icons">perm_identity</i></a></li>
            @endif
            <li><a data-position="left" data-delay="50" data-tooltip="Pagina nueva"
                    class="btn-floating tooltipped yellow darken-1" href="{{url('admin/paginas/nueva/')}}"><i
                        class="material-icons">web</i></a></li>
            <li><a data-position="left" data-delay="50" data-tooltip="Album nuevo" class="btn-floating tooltipped green"
                    href="{{url('admin/galeria/nuevo/')}}"><i class="material-icons">publish</i></a></li>
            <li><a data-position="left" data-delay="50" data-tooltip="Evento nuevo" class="btn-floating tooltipped blue"
                    href="{{ url('admin/eventos/agregar/') }}"><i class="material-icons">assistant</i></a></li>
        </ul>
    </div>
</x-app-layout>
