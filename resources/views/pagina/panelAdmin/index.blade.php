@component('layouts.panelAdmin')

    @slot('content')

    @endslot

    @slot('scripts')
        {!! Html::script('js/panelAdmin/default.js') !!}
    @endslot
@endcomponent