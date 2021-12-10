@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <!-- form start -->
                    <form method="POST" action="{{ route('posts.store') }}">
                        @csrf
                                                
                        <div class="form-group row">
                            <div class="col-sm-2">
                                <label>Title</label>
                            </div>                                        
                            <div class="col-sm-4">                                            
                                <input type="text" name="title" value="{{ old('leave_start_date') }}" class="form-control"
                                id="name">
                            </div>                                                                  
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Description</label>
                            <textarea class="form-control" rows="3" placeholder="Enter ..." name="description"></textarea>
                        </div>
                        
               
                
                        <a href="javascript: history.go(-1)" class="btn btn-default">Back</a>
                        <button type="submit" class="btn btn-primary">Apply</button>
                
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
