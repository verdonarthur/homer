@extends('template')


@section('contenu')
 <form method="POST" action="{{route('page.create')}}" accept-charset="UTF-8" class="form-horizontalpanel">
                    @csrf
                    <div class="form-group {!! $errors->has('title') ? 'has-error' : '' !!}">
                        <input type="text" name="title" placeholder="Title" class="form-control">  
                        {!! $errors->first('title', '<small class="help-block">:message</small>') !!}
                    </div>
                    <div class="form-group {!! $errors->has('url') ? 'has-error' : '' !!}">
                        <input type="text" name="url" placeholder="Url" class="form-control">  
                        {!! $errors->first('url', '<small class="help-block">:message</small>') !!}
                    </div>
                    <input class="btn btn-primary pull-right" type="submit" value="Envoyer">
                </form>
@endsection