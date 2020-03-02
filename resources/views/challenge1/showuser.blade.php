@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
     <table class="table">
         <tr>
             <th>#</th>
             <th>Name</th>
             <th>Email</th>
             <th>Phone</th>
             <th>Address</th>
             <th>Action</th>
         </tr>
         @foreach ($user as $item)
             <tr>
                 <td>{{$item ->id}}</td>
                 <td>{{$item ->name}}</td>
                 <td>{{$item ->email}}</td>
                 <td>{{$item ->profile->phone}}</td> 
                 <td>{{$item ->profile->address}}</td>
                 <td>
                     <a href="{{Route('edituser',$item->id)}}">edit</a> |
                     <a href="{{Route('deleteuser',$item->id)}}">delete</a> 
                 </td>
             </tr>
         @endforeach
     </table>
    </div>
</div>
@endsection
