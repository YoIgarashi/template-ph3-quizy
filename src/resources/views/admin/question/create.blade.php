<a href="{{ route('question.index') }}">{{ __('戻る') }}</a>
<h1>新規作成</h1>

<form method="post" action="{{route('question.store', ['id' => $id])}}"  enctype="multipart/form-data">
  @csrf

  <div>
    <label for="form-name">地名</label>
    <input type="text" name="local_name" id="form_name" required>
  </div>

  <input type="file" name="file" class="form-control">



  <button type="submit">登録</button>
</form>