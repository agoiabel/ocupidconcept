@extends('partials.adminLayout')
@section('content')

                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12 col-md-offset-3">
                            <div class="panel panel-default">
                                <div class="panel-heading">Upload Latest News </div>
                                <div class="panel-body">
                                    {!! Form::model($article, ['method'=>'PATCH', 'url'=>'/articles/' . $article->id,'files'=>true]) !!}
                                        @include('errors.list')
                                        @include('article._form', ['SubmitBtn'=>'Update News'])
                                    {!! Form::close() !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

@endsection