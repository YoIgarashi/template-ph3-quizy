<h1>編集</h1>



<form method="POST" action="{{route('choice.update',['choice_id'=>$choices->id])}}">
  @csrf

  <div>
    名前
    <input type="text" name=name value="{{$choices->name}}">
  </div>
  <div>
    正誤(1or2)
    <input type="text" name=valid value="{{$choices->valid}}">
  </div>


  <input type="submit" value="更新する">

</form>