@extends('admin.layout')

@section('other_css')
    <link rel="stylesheet" href="{{ url('css/admin/match/matchcreate.css') }}">
@endsection


@section('body')
<!-- 新建比赛导航 -->
<div class="match-nav">
    <div class="collapse navbar-collapse" id="matchcreate">
        <ul class="nav navbar-nav">
            @if(isset($id))
            <li class="active"><a href="{{ url ('admin/match/edit/'.$id) }}">赛事主题</a></li>
            <li><a href="{{ url('admin/match/partner/'.$id) }}">组委会信息</a></li>
            <li><a href="{{ url('admin/match/rater/'.$id) }}">评委/嘉宾</a></li>
            <li><a href="{{ url('admin/match/award/'.$id) }}">奖项设置</a></li>
            <li><a href="{{ url('admin/match/require_personal/'.$id) }}">投稿要求</a></li>
            <li><a href="{{ url('admin/match/review/'.$id) }}">评选设定</a></li>
            @else
            <li class="active"><a href="{{ url('admin/match/create/').$type }}">赛事主题</a></li>
             @endif
        </ul>
    </div>
</div>
<!-- 新建比赛内容 -->
@section('body2')

@show

@endsection

@section('other_js')
    <script src="{{ url('js/admin/match/matchcreate.js')}}"></script>
@endsection
