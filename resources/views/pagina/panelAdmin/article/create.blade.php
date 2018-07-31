@component('pagina.panelAdmin.index')

    @slot('title', 'Create Article')

    @slot('content')
        <div id="content">
            <header>
                <h2 class="page_title">Create new article</h2>
            </header>

            <div class="content-inner">
                <div class="form-wrapper">
                    {!! Form::open(['route' => 'login', 'method'=> 'POST']) !!}
                        {!! Field::text('title', null, ['placeholder' => 'Title', 'id' => 'title']) !!}

                        {!! Field::select('tags', $tags, ['empty' => 'Select tags', 'multiple' => true]) !!}

                        {!! Field::textarea('article', ['ph' => 'Article', ]) !!}

                        {!! Form::checkboxes('publish', ['aa' => 'publish article when I click on save']) !!}

                        {!! Form::submit('Save / Publish', ['class' => 'btn btn-primary float-right']) !!}

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    @endslot

@endcomponent