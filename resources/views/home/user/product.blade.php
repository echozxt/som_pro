@extends('home.user.layout')   

@section('more_css')
    
@endsection

@section('body2')
<div class="personal-search">
	<!--搜索框-->
	<i class="fa fa-search"></i>
	<input type="text" placeholder="关键字搜索">
</div>

<div class="product">
	<div class="row">
		<div class="col-sm-12">
			<ul class="match-main text-left clearfix">
    			@if( count($product) )
                    @foreach($product as $v)
                        <li>
                            <a>
                                <div class="match-img">
                                    <img src="{{ url($v->pic) }}">
                                </div>
                            </a>
                            <div class="match-content">
                                <h4>{{ $v->title }}</h4>
                                <span class="status status-solicit">{{ $match_status[$v->match_status] }}</span>
                                <p>{{ (json_decode($v->match_title))[0] }}作品</p>
                                <p>2017-03-14</p>
                            </div>
                            <div class="footer">
                                <a href="#"><i class="fa fa-eye"></i> 0</a>
                                <a href="#"><i class="fa fa-thumbs-o-up"></i> 0</a>
                                <a href="#"><i class="fa fa-comment-o"></i> 0</a>
                            </div>
                        </li>
                    @endforeach
                			 
                @else
                    <li>
                        <div style="color:red;">暂无数据</div>
                    </li>
                @endif
            </ul>
           <!--  <div class="page text-center">
                <ul class="pagination" style="margin-bottom:100px;">
                    <li><a href="#">&laquo;</a></li>
                    <li class="active"><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li><a href="#">&raquo;</a></li>
                </ul>
             -->
            </div>
		</div>
	</div>
</div>
@endsection

@section('other_js')
    
@endsection