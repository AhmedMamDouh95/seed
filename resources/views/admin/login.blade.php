<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>eSeeD | Login</title>

    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('font-awesome/css/font-awesome.css')}}" rel="stylesheet">

    <link href="{{asset('css/animate.css')}}" rel="stylesheet">
    <link href="{{asset('css/style.css')}}" rel="stylesheet">

</head>

<body class="gray-bg">

    <div class="middle-box text-center loginscreen animated fadeInDown">
        <div >
            <div>

                <h1 class="logo-name m-t-xl">eSeeD</h1>

            </div>
            <h3>Welcome to eSeeD</h3>
            
            <p>Login in. To see it in action.</p>


            @include('admin.layouts.messages')
            <form class="m-t" role="form" method="post" action="{{route('admin.login')}}">

              {{csrf_field()}}
                <div class="form-group">
                    <input type="email" name="email" class="form-control" placeholder="اسم المستخدم" required="">
                </div>
                <div class="form-group">
                    <input type="password" name="password" class="form-control" placeholder="الرقم السرى" required="">
                </div>
                <button type="submit" class="btn btn-primary block full-width m-b">Login</button>

<!--                 <a  data-toggle="modal" data-target="#myModal"><small>تغيير كلمة المرور</small></a>
 --><!--                 <p class="text-muted text-center"><small></small></p>
 -->                <!-- <a class="btn btn-sm btn-white btn-block" href="register.html">Create an account</a> -->
            </form>
              <!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close pull-left" data-dismiss="modal" >&times;</button>
        <h4 class="modal-title" style="text-align: right;">تغير الرقم السرى</h4>
      </div>
      <div class="modal-body">
       <form style="direction: rtl; text-align: right;">
  <div class="form-group">
    <label for="exampleInputEmail1">البريد الاكترونى</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="البريد الاكترونى">
    
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">الحالى </label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="الرقم السرى">
  </div>
   <div class="form-group">
    <label for="exampleInputPassword1">الجديد</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="الرقم السرى">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">اعادة كتابة الرقم السرى </label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="الرقم السرى">
  </div>
  
  <button type="submit" class="btn btn-primary">حفظ التغيرات</button>
</form>
      </div>
      
    </div>

  </div>
</div>
 
            <p class="m-t"> <strong>Copyright</strong> PAN Company &copy; 2017 </p>
        </div>




    </div>
 

    <!-- Mainly scripts -->
    <script src="{{asset('js/jquery-2.1.1.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}} "></script>

</body>

</html>
