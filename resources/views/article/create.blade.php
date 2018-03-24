@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Form Create Article</div>

                <div class="card-body">
                    <div class="row mb-3">
                        <div class="col-md-12">
                            <form action="{{route('article.store')}}" method="POST">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="title">Title</label>
                                    <input type="text" name="title" class="form-control">
                                    <small style="color:red">{{ $errors->first('title')}}</small>
                                    
                                </div>
                                <div class="form-group">
                                    <label for="title">Description</label>
                                    <textarea name="description" id="" cols="30" rows="10" class="form-control"></textarea>
                                    <small style="color:red">{{ $errors->first('description')}}</small>
                                </div>
                                <div class="form-group">
                                    <input type="submit" value="Create" class="form-control btn btn-success">
                                </div>
                                
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
