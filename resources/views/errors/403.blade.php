@extends('layout.common')
@section('title', '403画面')
@section('header_title', '403 Forbidden')

@section('content')
<div class="content_wrapper">
@if(Session::get('animal')==0)


<h2>☆★☆★／￣￣＼</h2>
<h2>★☆★／ ―― ヽ</h2>
<h2>\☆★ / _／ ー^ー ﾊ</h2>
<h2>☆★/ (/ ﾉ⌒＝⌒ﾍ)</h2>
<h2>／⌒ヽ｜ ((･)ハ(･)ヽ</h2>
<h2>★☆★＼ (⊂Ｙつ) |</h2>
<h2>☆★☆★ヽ(＿人＿)ノ</h2>
<h2>\★☆★☆| ヽノノヽ権限ないウホ</h2>
<h2>☆★☆★ノ ヽ＿ﾉ |</h2>
@else
    <p>ʕ•̫͡•ʕ•̫͡•ʔ•̫͡•ʔ権限ないでーすʕ•̫͡•ʕ•̫͡•ʔ•̫͡•ʔ</p>

@endif

</div>
@endsection