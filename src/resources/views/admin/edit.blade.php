<h1>編集</h1>

<form method="POST" action="{{route('admin.update',['id' =>$big_question->id])}}">
  @csrf

<div>
  県名
  <input type="text" name=prefecture_name value="{{$big_question->prefecture_name}}">
  </div>


  <input type="submit" value="更新する">


  </form>

  <a href="{{route('admin.index')}}">{{ __('戻る') }}</a>