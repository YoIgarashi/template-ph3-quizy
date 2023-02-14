<h1>新規作成</h1>

<form method="POST" action="">
  @csrf

  <div>
    <label for="form-name">地名</label>
    <input type="text" name="name" id="form-name" required>
  </div>


  <button type="submit">登録</button>

<a href="{{ route('question.index') }}">{{ __('戻る') }}</a>