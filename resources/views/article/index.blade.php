@extends('partials.adminLayout')
@section('content')

                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12 col-md-offset-3">
                            <div class="panel panel-default">
                                <div class="panel-heading"> List Of News Uploaded </div>
                                <div class="panel-body">

                                    <table class="table table-bordered table-striped">
                                        <thead>
                                        <th><a href="#">Title:</a></th>
                                        <th><a href="#">Brief Description:</a></th>
                                        <th><a href="#">Published_at:</a></th>
                                        <th><a href="#">Edit:</a></th>
                                        <th><a href="#">Delete</a></th>
                                        </thead>
                                        <tbody>
                                        @foreach($articles as $article)
                                            <td>{{$article->title}}</td>
                                            <td>{{$article->briefDescription}}</td>
                                            <td>{{$article->created_at}}</td>
                                            <td><a href="{!! route('articles.edit', $article->id) !!}"><button type="button" class="btn btn-primary btn-xs">Edit</button></a></td>
                                            <td>
                                                {!! Form::open(['method'=>'DELETE', 'route'=>['articles.destroy' , $article->id]]) !!}
                                                	{!! Form::submit('Delete', ['class'=>'btn btn-danger btn-xs confirm-delete']) !!}
                                                {!! Form::close() !!}
                                            </td>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

@endsection