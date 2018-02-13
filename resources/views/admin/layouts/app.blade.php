<!DOCTYPE html>
<html>
<head>
 @include('admin.layouts.head')
 
</head>
<body>
      <div id="wrapper">

      	@include('admin.layouts.sidebar')


 <div id="page-wrapper" class="gray-bg">

@include('admin.layouts.header')


@section('main-content')
  
  @show




  
@include('admin.layouts.footer')


</div>
</div>
</body>
</html>