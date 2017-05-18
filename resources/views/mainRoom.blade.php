@extends('layouts.app')

@section('content')
<div class="col-md-8 text-center text-muted" style="padding-top: 20px;"><h2 class="col-md-12">ศูนย์ข้อมูลที่ดินและแผนที่ &nbspกรมที่ดิน</h2></div>
<div class="col-md-8">
    <!--
    <div class="col-md-12 text-center">
        <img src="{{url('/resources/images/main.png')}}" style="width: 849px;" usemap="#room">
        <map name="room">
            <area shape="rect" coords="349,115,380,358" title="Air Control" href="{{url('/airControlRoom#airControlRoom')}}">
            <area shape="rect" coords="390,130,577,261" title="Server Room" href="{{url('/serverRoom#serverRoom')}}">
            <area shape="rect" coords="390,262,461,331" title="Network Room" href="{{url('/networkRoom#networkRoom')}}"> 
            <area shape="rect" coords="495,262,589,331" title="Backup Room" href="{{url('/backupRoom#backupRoom')}}"> 
            <area shape="rect" coords="495,331,599,385" title="Control Room" href="{{url('/controlRoom#controlRoom')}}"> 
            <area shape="rect" coords="523,384,599,429" title="ถังดับเพลิง" href="{{url('/fm200#fm200')}}"> 
            <area shape="rect" coords="483,33,565,112" title="UPS Room" href="{{url('/upsRoom#upsRoom')}}"> 
            <area shape="rect" coords="565,33,675,58" title="UPS Room" href="{{url('/upsRoom#upsRoom')}}"> 
        </map>        
    </div>
    -->
    <div class="col-md-12 text-center">
        <iframe src="https://3dwarehouse.sketchup.com/embed.html?mid=01a3a418-5eda-4aa2-bdc6-64ce4b58be8c&width=849&height=466" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" width="849" height="466" allowfullscreen></iframe>
    </div>   
</div>
<div class="col-md-4" style="padding-left: 0px;">
    @include('menuright')
</div>
<div class="col-md-8 text-center" style="padding-top: 20px;"><a class="text-muted" href="{{url('/')}}"><i class="fa fa-home"></i> กลับหน้าหลัก</a></div>
@endsection
@section('script')
<script type="text/javascript">
</script>
@endsection