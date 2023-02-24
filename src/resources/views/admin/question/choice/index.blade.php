<h1>詳細表示</h1>
<div>
  問題
  <ul>
    @foreach($choices as $choice)
    <li>
      {{$choice->name}}
      <a href="#">{{ __('編集') }}</a>
      <form method="POST" action="#">
        @csrf
        <button type="submit">削除</button>
      </form>
    </li>
    @endforeach
  </ul>
  <a href="{{ route('choice.create',['id' => $id])}}">{{ __('新規作成') }}</a>

  <a href="#">{{ __('一覧に戻る') }}</a>
</div>