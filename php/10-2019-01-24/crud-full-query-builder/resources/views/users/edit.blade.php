{{-- {{dd($user[0]->name)}} --}}
<form action="{{route('users.update',['id'=>$user[0]->id])}}" method="POST">
  {{csrf_field()}} {{-- _token --}}
  <input type="hidden" name="_method" value="PUT">
  <h1>Day la nguoi co id = {{$user[0]->id}}</h1>
  <input type="text" name="ten" value="{{$user[0]->name}}">
  <input type="text" name="thuDienTu" value="{{$user[0]->email}}">
  <button type="submit">Update</button>
</form>
