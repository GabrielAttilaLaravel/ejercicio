@component('layouts.panelAdmin')

    @slot('content')
        <div class="container">
            Panel de Administración
        </div>
    @endslot

    @slot('scripts')
        <script>
            $("body").removeClass("bg-dark");
        </script>
    @endslot
@endcomponent