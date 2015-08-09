@extends('partials.adminLayout')
@section('content')

                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12 col-md-offset-3">
                            <div class="panel panel-default">
                                <div class="panel-heading"> List Of Recent Projects </div>
                                <div class="panel-body">

                                    <table class="table table-bordered table-striped">
                                        <thead>
                                            <th><a href="#">Title:</a></th>
                                            <th><a href="#">Published_at:</a></th>
                                            <th><a href="#">Delete</a></th>
                                        </thead>

                                        @foreach($projects as $project)
                                        <tbody>
                                            <tr>
                                                <td>{{$project->title}}</td>
                                                <td>{{$project->created_at}}</td>
                                                <td>
                                                    {!! Form::open(['method'=>'DELETE', 'route'=>['UploadRecentProject.destroy' , $project->id]]) !!}
                                                    	{!! Form::submit('Delete', ['class'=>'btn btn-danger btn-xs confirm-delete']) !!}
                                                    {!! Form::close() !!}
                                                </td>
                                            </tr>
                                        </tbody>
                                        @endforeach
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

@endsection