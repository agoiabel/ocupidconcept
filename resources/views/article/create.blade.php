@extends('partials.adminLayout')
@section('content')

				<div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12 col-md-offset-3">
                            <div class="panel panel-default">
                                @include('errors.list')
                                <div class="panel-heading">Upload Latest News </div>
                                <div class="panel-body">

                                    {!! Form::open(['url'=>'articles', 'files'=>true]) !!}
	                                    @include('article._form', ['SubmitBtn'=>'Upload News'])
                                    {!! Form::close() !!}

                                </div>
                            </div>
                        </div>
                    </div>

                </div>

@endsection