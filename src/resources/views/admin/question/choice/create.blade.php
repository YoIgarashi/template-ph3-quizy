
<a href="{{ route('choice.index',['id' =>$id]) }}">{{ __('戻る') }}</a>
<h1>新規作成</h1>
<form method="post" action="{{route
('choice.store', ['id' => $id])}}">
  @csrf

  <div>
    <label for="form-name">名前</label>
    <input type="text" name="name" id="form-name" required>
  </div>

  <div>
    <label for="form-name">正誤(1or2)</label>
    <input type="text" name="valid" id="form-name" required>
  </div>

  <button type="submit">登録</button>

</form>