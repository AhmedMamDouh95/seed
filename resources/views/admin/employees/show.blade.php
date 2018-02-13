@extends('admin.layouts.app')
@section('headSection')


@endsection



@section('main-content')



  <div class="wrapper wrapper-content animated fadeInRight">
              <div class="row">


                <div class="col-lg-12">
                     <div class="ibox float-e-margins">
                      <div class="ibox-title">
                                 
                                 <div class="row m-t-sm m-b-xs">
                                    <div class="col-md-6">
                                       <h3 class="title m-t-sm pull-left bold">Add New Employees</h3>
                                    </div>
                                    <div class="col-lg-6">
                                      <button class="btn btn-primary btn-rounded pull-right" data-toggle="modal" data-target="#add">Add New Employee<i class="fa fa-plus-circle" aria-hidden="true" style="padding-right: 10px"></i></button>
                                    </div>
                                 </div>
                              </div>
                       
                       
                     </div>
                  </div>


                <div class="col-lg-12">
                  <div class="ibox float-e-margins">
                    <div class="ibox-title">
                      <h5>Movies</h5>
                      
                    </div>
                     <div class="ibox-content">
                      <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover dataTables-example" style="width: 100%; ">
                          <thead>
                            <tr>
                              <th>Index</th>
                              <th>Name</th>
                              <th>Email</th>
                              <th>Mobile</th>
                              <th>HireDate</th>
                              
                              
                              <td></td>
                            </tr>
                          </thead>
                          <tbody>
                            
@foreach($employees as $employee)

<tr class="gradeX">
	<td>{{$loop ->index +1}}</td>
	<td class="center"><a href="{{ route('employee.show',$employee->id) }}" title="">{{ $employee->name }}</td>
	<td class="center">{{ $employee->email }}</td>
    <td class="center">{{ $employee->mobile }}</td>

	

                                



<td class="text-center">

{{ $employee->hiredate }}
</td>

<td class="text-center">
	<a  href="{{ route('employee.edit',$employee->id )}}" class="btn btn-primary btn-xs" title="Edit"><span class="glyphicon glyphicon-edit"></span></a>
	&nbsp;&nbsp;
	
	      <form class="myform-{{$employee->id}}" action="{{route('employee.destroy',$employee->id)}}" style="display: none;" method="post">
                {{csrf_field()}}
                {{method_field('DELETE')}}
              </form>
              <Button id="{{$employee->id}}" class="btn btn-danger btn-xs delete" data-toggle="tooltip" title="Delete"><span class="glyphicon glyphicon-trash"></span>
              </Button>
                                        </div> 
</td>




 </tr>






       
                                         </div>
                                          </div>
                                       </div>
                                   </form>
                                    </div>
                                 </div>
                              </div>
                          </div>

@endforeach


    
                                      </tbody>
                                      
                                    

                                    </table>







                                    <!-- Modal -->








                                             <!-- Modal -->
<div id="add" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Add New Employee</h4>
      </div>
      <div class="modal-body">
         <div class="x_panel">
                                

                                <div class="x_content">
                                    <div class="row">

            @include('admin.layouts.messages')


                                      <form class="form-horizontal"  action="{{ route('employees.store') }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Name</label>
                                                <input class=" form-control" name="name" type="text" >
                                            </div>
                                                  <div class="form-group">
                                                <label>Email</label>
                                                <input class=" form-control" name="email" type="text" >
                                            </div>

                                                  <div class="form-group">
                                                <label>Mobile</label>
                                                <input class=" form-control" name="mobile" type="number" >
                                            </div>

                                                  <div class="form-group">
                                                <label>Hire Date</label>
                                                <input class=" form-control" name="hiredate" type="date" >
                                            </div>
                                           
                                           
                                        </div>
                                   
                                        <div class="col-md-12 m-b-lg">
                                            <div class="x_content text-right ">
                                                <button type="submit" class="btn btn-primary">Add</button>
                                               
                                            </div>
                                        </div>

                                      </form>
                                    </div>
                                </div>
                            </div>
      </div>
     
    </div>

  </div>
</div>










                                
                                    </div>
                                  </div>
                                </div>
                              </div>
                              
                              
                            </div>
                          </div>
                          
                        


@endsection


@section('footerSection')


<script type="text/javascript">
$('button.delete').on('click', function(e){
    e.preventDefault();
    var del = $(this);
    swal({   
      title: "هل انت متاكد ؟",
      text: "لن تكون قادرا على استرداد هذا الملف !",
      type: "warning",   
      showCancelButton: true,   
      confirmButtonColor: "#DD6B55",
      cancelButtonColor: "#f00",
      confirmButtonText: "نعم, احذف هذا !",
      cancelButtonText: "لا , الغى الامر",
      closeOnConfirm: true,
      closeOnCancel: false 
    },
    function(isConfirm){
      if (isConfirm) {
        $(".myform-"+del.attr('id')).submit();
      }else {
        swal("الغى", "ملف  آمن ", "error");
      }
    });
  });
</script>
@endsection