@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
     <table class="table">
         <tr>
             <th>#</th>
             <th>Title</th>
             <th>Body</th>
             <th>Action</th>
         </tr>
         @foreach ($posts as $item)
             <tr>
                 <td>{{$item ->id}}</td>
                 <td>{{$item ->title}}</td>
                 <td>{{$item ->body}}</td>
                 <td>
                     <div class="row">
                    <div class="col-2">
                    <a href="{{route('posts.edit',$item->id)}}" class="btn btn-warning">edit</a>
                    </div>
                    <div class="col-1">
                    <form method="POST" action="{{route('posts.destroy',$item->id)}}" onclick="return confirm ('Are sure to delete?')">
                        @csrf
                        @method('delete')
                       <button type="submit" class="btn btn-danger">delete</button>
                    </form>
                </div>
                </div>
                </td>
             </tr>
         @endforeach
     </table>
    </div>
</div>
@endsection