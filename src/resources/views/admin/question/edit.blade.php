<h1>編集</h1>

<form method="POST" action="{{route('question.update',['id' =>$id])}}">
  @csrf

<div>
  地名
  <input type="text" name=local_name value="{{$questions->local_name}}">
  </div>

  <input type="submit" value="更新する">

  </form>