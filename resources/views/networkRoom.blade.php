@extends('layouts.app')

@section('content')
<div class="col-md-8 text-center text-muted" style="padding-top: 20px;"><h2 class="col-md-12">Network Room</h2></div>
<div class="col-md-8">
    <div class="col-md-12 text-center">
     	<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carousel-example-generic" data-slide-to="0" class=""></li>
          <li data-target="#carousel-example-generic" data-slide-to="1" class="active"></li>
          <li data-target="#carousel-example-generic" data-slide-to="2" class=""></li>
          <li data-target="#carousel-example-generic" data-slide-to="3" class=""></li>
          <li data-target="#carousel-example-generic" data-slide-to="4" class=""></li>
          <li data-target="#carousel-example-generic" data-slide-to="5" class=""></li>
          <li data-target="#carousel-example-generic" data-slide-to="6" class=""></li>
        </ol>
        <div class="carousel-inner" role="listbox">
         <div class="item active">
            <img src="{{url('/resources/images/79119.jpg')}}" data-holder-rendered="true">
          </div>
          <div class="item">
            <img src="{{url('/resources/images/79133.jpg')}}" style="padding-left: 35%;" data-holder-rendered="true">
          </div>
          <div class="item">
            <img src="{{url('/resources/images/79134.jpg')}}" style="padding-left: 35%;" data-holder-rendered="true">
          </div>
        </div>
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
</div>
<div class="col-md-4" style="padding-left: 0px;">
    @include('menuright')
</div>
<div class="col-md-8 text-center" style="padding-top: 20px;"><a class="text-muted" href="{{url('/mainRoom')}}"><i class="fa fa-chevron-circle-left"></i> ย้อนกลับ</a></div>
@endsection
@section('script')
<script type="text/javascript">
	$(document).ready(function(){
		var maxH = $('div[data-ride=carousel]').height();
		$('img').css('max-height', maxH);
	});
</script>
@endsection