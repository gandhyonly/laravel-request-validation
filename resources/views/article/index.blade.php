@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Article</div>

                <div class="card-body">
                    <div class="row mb-3">
                        <div class="col-md-12">
                            <a href="{{route('article.create')}}" class="btn btn-primary">Create Article</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Title</th>
                                        <th>Description</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($articles as $article)
                                    <tr>
                                        <td>{{$article->id}}</td>
                                        <td>{{$article->title}}</td>
                                        <td>{{str_limit($article->description,20,' ...')}}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
