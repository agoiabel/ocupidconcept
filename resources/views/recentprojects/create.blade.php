@extends('partials.adminLayout')
@section('content')

				<div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12 col-md-offset-3">
                            <div class="panel panel-default">
                                @include('errors.list')
                                <div class="panel-heading">Upload Recent Projects / Please Note the Image must be of size 452px/452px </div>
                                <div class="panel-body">

                                    {!! Form::open(['url'=>'UploadRecentProject', 'files'=>true]) !!}
	                                    @include('recentprojects._form', ['SubmitBtn'=>'Upload Projects'])
                                    {!! Form::close() !!}

                                </div>
                            </div>
                        </div>
                    </div>

                </div>


@endsection