@component('pagina.panelAdmin.index')

    @slot('title', 'Company')

    @slot('css')
        {!! Html::style('css/perfil.css') !!}
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
                            {!! Field::file('file',['lang' => 'es', 'class'=>'custom-file-input','id'=>'validatedCustomFile', 'required' => true]) !!}
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
        <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
        <script>
            $(document).ready(function() {
                $('.chosen-select').select2({
                    placeholder: "Select category"
                });
            });

            /* Cargar imagen en img al cargarla en input file*/
            function init() {
                var inputFile = document.getElementById('validatedCustomFile');
                inputFile.addEventListener('change', mostrarImagen, false);
            }

            function mostrarImagen(event) {
                var file = event.target.files[0];
                var reader = new FileReader();
                reader.onload = function(event) {
                    var img = document.getElementById('img1');
                    img.src= event.target.result;
                }
                reader.readAsDataURL(file);
            }

            window.addEventListener('load', init, false);
        </script>
    @endslot
@endcomponent