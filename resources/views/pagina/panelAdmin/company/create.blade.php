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

                            {!! Field::text('name', null, ['placeholder' => 'Name company']) !!}

                            {!! Field::text('email', null, ['placeholder' => 'Email']) !!}

                            {!! Field::select('category', array('html', 'css', 'coding', 'programing'), ['empty' => 'Selection the category ', 'class' => 'chosen-select']) !!}

                            {!! Field::text('country', null, ['placeholder' => 'Country']) !!}

                            {!! Field::text('address', null, ['placeholder' => 'Address']) !!}

                            {!! Field::text('postalcode', null, ['placeholder' => 'Code postal']) !!}

                            <div class="form-group">
                                <div class="form-row">
                                    <div class="col-md-1">
                                        <div class="flag mx-auto d-block">
                                            <img id="flag" src="{{ asset('img/ve.png') }}">
                                            <i class="fas fa-caret-down"></i>
                                        </div>
                                    </div>

                                    <div class="col-md-11">
                                        {!! Field::tel('phone', null, ['placeholder' => 'Phone']) !!}
                                    </div>

                                </div>
                            </div>

                            {!! Field::textarea('description', ['ph' => 'Description', 'class' => 'summernote', 'rows' => 3 ]) !!}

                            <div id="map"></div>

                            {!! Field::hidden('coords', null, ['id' => 'coords']) !!}

                            {!! Form::submit('Register', ['class' => 'btn btn-primary float-right submit']) !!}

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>

        <div id="content-flag" class="content-flag d-flex">
            <div class="list-flag mx-auto d-block justify-content-center align-self-center">
                <div class="col-md-12" style="padding: 8px 5px">
                    <img src="{{ asset('img/ve.png') }}" class="selected" style="margin-right: 10px; width: 24px; height: 16px">
                    <b style="padding-right: 20px">Venezuela</b>
                    <span>+58</span>
                </div>

                <hr class="col-md-12" style="margin-top: 8px;margin-bottom: 8px;">
                @for($a = 0 ; $a <= 50 ; $a++)
                    <div onclick="selectedPrefix(this)" data-pais="cl" data-prefix-flag="{{ $a }}" class="col-md-12" style="padding: 4px 5px">
                        <img src="{{ asset('img/cl.png') }}" style="margin-right: 10px; width: 24px; height: 16px">
                        <b style="padding-right: 20px">Chile</b>
                        <span>+56</span>
                    </div>
                @endfor
            </div>
        </div>
    @endslot

    @slot('scripts')
        <script src="http://code.jquery.com/jquery-latest.js"></script>
        <script src="http://maps.googleapis.com/maps/api/js?v3"></script>
        {!! Html::script('js/show-img-input-file.js') !!}
        {!! Html::script('js/googlemaps.js') !!}
        {!! Html::script('js/prefix-flag.js') !!}

        <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
        <script>
            $('.chosen-select').select2({
                placeholder: "Select category"
            });
        </script>

    @endslot
@endcomponent