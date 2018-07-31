@component('pagina.panelAdmin.index')

    @slot('title', 'Create Article')

    @slot('css')
        {!! Html::style('css/new-article.css') !!}
        {{--{!! Html::style('lib/chosen-1.8.7/chosen.min.css') !!}--}}
        <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
        {!! Html::style('lib/summernote-0.8.9-dist/dist/summernote.css') !!}
    @endslot

    @slot('content')
        <div id="content">
            <header>
                <h2 class="page_title">Create new article</h2>
            </header>

            <div class="content-inner">
                <div class="card">
                    <div class="form-wrapper">

                        {!! Form::open(['route' => 'login', 'method'=> 'POST']) !!}
                            {!! Field::text('title', null, ['placeholder' => 'Title', 'id' => 'title']) !!}

                            {!! Field::select('tags', $tags, ['multiple' => true, 'class' => 'chosen-select']) !!}

                            {!! Field::textarea('article', ['ph' => 'Article', 'class' => 'summernote' ]) !!}

                            {!! Form::checkboxes('publish', ['publish' => 'publish article when I click on save']) !!}

                            {!! Form::submit('Save / Publish', ['class' => 'btn btn-primary float-right']) !!}

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    @endslot

    @slot('scripts')
        {{--{!! Html::script('lib/chosen-1.8.7/chosen.jquery.min.js') !!}--}}
        <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
        {!! Html::script('lib/summernote-0.8.9-dist/dist/summernote.js') !!}
        <script>
            $(document).ready(function() {
                $('.summernote').summernote({
                    height: 200
                });

                $('.chosen-select').select2();
            });
        </script>
    @endslot
@endcomponent