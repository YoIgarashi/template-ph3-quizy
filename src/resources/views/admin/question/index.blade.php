<h1>詳細表示</h1>
<div>
  地名
  <ul>
    @foreach($questions as $question)
    <li>
      {{$question->local_name}}
      <a href="{{ route('question.create') }}">{{ __('新規作成') }}</a>
    </li>
    @endforeach
  </ul>
</div>

<a href="{{ route('admin.index') }}">{{ __('一覧に戻る') }}</a>