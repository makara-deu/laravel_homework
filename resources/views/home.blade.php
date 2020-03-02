@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-6">
                        <a href="{{route('posts.create')}}">+New Post</a>
                        </div>
                        <div class="col-6 text-right">
                            <a href="{{route('posts.index')}}">All Posts</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{session('status') }}
                        </div>
                    @endif
                   <p>ID: {{Auth::id()}}</p>
                   <p>Name: {{Auth::user()->name}}</p>
                   <p>Email: {{Auth::user()->email}}</p>
                   <p>Phone: {{Auth::user()->profile->phone}}</p>
                   <p>Address: {{Auth::user()->profile->address}}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
