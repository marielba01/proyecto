
<style>
  .active{
    background:#1e88e5 ;
  }
</style>

@section('content1')
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" >
      {!! Menu::make($items, 'nav navbar-nav') !!}
    </div><!-- /.navbar-collapse -->
@endsection
