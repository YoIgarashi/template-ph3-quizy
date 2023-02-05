<a href="{{ route('admin.index') }}">{{ __('一覧へ戻る') }}</a>

<h1>新規作成</h1>

<form method="post" action="{{route('admin.store')}}">
  @csrf

  <div>
    <label for="form-tel">県名</label>
    <input type="tel" name="prefecture_name" id="form-tel">
  </div>

  <button type="submit">登録</button>

</form>


