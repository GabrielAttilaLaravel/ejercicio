@component('pagina.panelAdmin.index')

    @slot('title', 'Perfil')

    @slot('css')
        {!! Html::style('css/perfil.css') !!}
    @endslot

    @slot('content')
        <div id="content">
            @component('pagina.panelAdmin.partials.header')
                @slot('title', 'Perfil')
            @endcomponent
            <div class="content-inner">
                <div class="card">
                    <div class="form-wrapper">
                        {!! Form::open(['route' => 'login', 'method'=> 'POST']) !!}
                            {!! Field::text('usermane', null, ['placeholder' => 'Username']) !!}

                            {!! Field::text('email', null, ['placeholder' => 'Email']) !!}

                            {!! Field::text('first_name', null, ['placeholder' => 'First name']) !!}

                            {!! Field::text('last_name', null, ['placeholder' => 'Last name']) !!}

                            {!! Field::text('country', null, ['placeholder' => 'Country']) !!}

                            {!! Field::text('address', null, ['placeholder' => 'Address']) !!}

                            {!! Field::text('phone', null, ['placeholder' => 'Phone']) !!}

                            {!! Form::submit('Save', ['class' => 'btn btn-primary float-right submit']) !!}

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    @endslot

@endcomponent