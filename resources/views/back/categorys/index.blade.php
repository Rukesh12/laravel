@extends('back.layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="uper">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br />
  @endif
  <table class="table table-striped">
    <thead>
    <tr>
    <td colsapn=6>
    <a href="{{route('cats.create')}}">Add ctegory</a>
    </td>
    </tr>
        <tr>
          <td>ID</td>
          <td>categorys Name</td>
          <td>categorys Description</td>
          <td>Status</td>
          <td colspan="2">Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach($cats as $share)
        <tr>
            <td>{{$share->id}}</td>
            <td>{{$share->name}}</td>
            <td>{{$share->Description}}</td>
            <td>{{$share->status}}</td>
            <td><a href="{{ route('cats.edit',$share->id)}}" class="btn btn-primary">Edit</a></td>
            <td>
                <form action="{{ route('cats.destroy', $share->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
@endsection