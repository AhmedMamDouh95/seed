@extends('admin.layouts.app')
@section('headSection')


@endsection



@section('main-content')


   <div class="wrapper wrapper-content animated fadeInRight">
               

            @include('admin.layouts.messages')


               <div class="row">
                  <div class="col-lg-12">
                     <div class="ibox float-e-margins">
                        <div class="ibox-title  back-change">
                           <h5>  Edit Employee </h5>
                        </div>
                        
                            
                       
                        <div class="ibox-content">
                            <div class="x_panel">
                                
                                <div class="x_content">
                                    <div class="row">

                                                         
     <form class="form-horizontal" action="{{ route('employee.update',$employee->id) }}" method="post" enctype="multipart/form-data">

            {{ csrf_field() }}         

            {{method_field('PATCH')}}

                                    
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Name</label>
                                                <input class=" form-control" name="name" type="text" value="{{ $employee->name }}" >
                                            </div>
                                                  <div class="form-group">
                                                <label>Email</label>
                                                <input class=" form-control" value="{{ $employee->email }}" name="email" type="text" >
                                            </div>

                                                  <div class="form-group">
                                                <label>Mobile</label>
                                                <input class=" form-control" name="mobile" type="text" value="{{ $employee->mobile }}" >
                                            </div>

                                                  <div class="form-group">
                                                <label>Hire Date</label>
                                                <input class=" form-control" name="hiredate" type="date" value="{{ $employee->hiredate }}" >
                                            </div>
                                           
                                           
                                        </div>
                                   
                                        <div class="col-md-12 m-b-lg">
                                            <div class="x_content text-right ">
                                                <button type="submit" class="btn btn-primary">Save Changes</button>
                                               
                                            </div>
                                        </div>

                                        
                                </div>


                            </div>
                        </div>
                                              </form>

                        </div>
                     </div>
                  </div>
               </div>
             
                
               
            </div>



@endsection
