@component('layouts.panelAdmin')

    @slot('content')
        <!-- side menu -->
        <div class="col-md-2">
            <h1>Navigation</h1>
        </div>
        <!-- main content area -->
        <div class="col-md-10">
            <p>This is content area for admin</p>
        </div>
    @endslot

    @slot('scripts')
        <script>
            $("body").removeClass("bg-dark");
        </script>
    @endslot
@endcomponent