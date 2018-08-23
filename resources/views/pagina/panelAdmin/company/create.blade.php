@component('pagina.panelAdmin.index')

    @slot('title', 'Company')

    @slot('css')
        {!! Html::style('css/company.css') !!}
        <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
    @endslot

    @slot('content')
        <div id="content">
            @component('pagina.panelAdmin.partials.header')
                @slot('title', 'Company')
            @endcomponent
            <div class="content-inner">
                <div class="card">
                    <div class="form-wrapper">
                        <div class="perfil-image ">
                            <img class="rounded-circle d-none d-sm-block mx-auto d-block" id="img1" src="{{ asset('img/user.jpg') }}" alt="">
                        </div>
                        {!! Form::open(['route' => 'login', 'method'=> 'POST']) !!}
                        <div class="custom-file">
                            {!! Field::file('file',['class'=>'custom-file-input','id'=>'validatedCustomFile', 'required' => true]) !!}
                            <label class="custom-file-label" for="validatedCustomFile">
                                Select an image
                            </label>
                        </div>
                        {!! Field::text('name', null, ['placeholder' => 'Name']) !!}

                        {!! Field::text('email', null, ['placeholder' => 'Email']) !!}

                        {!! Field::select('category', array('html', 'css', 'coding', 'programing'), ['empty' => 'Selection the category ', 'class' => 'chosen-select']) !!}

                        {!! Field::text('country', null, ['placeholder' => 'Country']) !!}

                        {!! Field::text('address', null, ['placeholder' => 'Address']) !!}

                        {!! Field::text('phone', null, ['placeholder' => 'Phone']) !!}

                        {!! Field::textarea('description', ['ph' => 'Description', 'class' => 'summernote', 'rows' => 3 ]) !!}

                        {!! Form::submit('Register', ['class' => 'btn btn-primary float-right submit']) !!}

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    @endslot

    @slot('scripts')
        {!! Html::script('js/show-img-input-file.js') !!}
        <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
        <script>
            $('.chosen-select').select2({
                placeholder: "Select category"
            });
        </script>

    @endslot
@endcomponent