<h1>新規作成</h1>

<form method="POST" action="{{route('choice.index',['id' => $id]}}">
  @csrf

  <div>
    <label for="form-name">{{$questions}}</label>
    <input type="text" name="name" id="form-name" required>
  </div>

  <button type="submit">登録</button>

</form>