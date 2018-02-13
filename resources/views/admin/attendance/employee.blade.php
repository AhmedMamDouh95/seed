@extends('admin.layouts.app')
@section('headSection')


@endsection



@section('main-content')



  <div class="wrapper wrapper-content animated fadeInRight">
              <div class="row">


                <div class="col-lg-12">
                     <div class="ibox float-e-margins">
                      <div class="ibox-title">
                                 
                                
                       
                       
                     </div>
                  </div>


                <div class="col-lg-12">
                  <div class="ibox float-e-margins">
                    <div class="ibox-title">
                      <h5>Employee</h5>
                      
                    </div>
                     <div class="ibox-content">
                      <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover dataTables-example" style="width: 100%; ">
                          <thead>
                            <tr>
                              <th>Index</th>
                              <th>Date</th>
                              <th>Status</th>
                                                   
                              
                              <td></td>
                            </tr>
                          </thead>
                          <tbody>
                              <td class="center">{{ $employee->name }}</td>

@foreach($attends as $attend)
<tr class="gradeX">
  <td>{{$loop ->index +1}}</td>
  <td class="center">{{ $attend->hour}}</td>
  <td class="center">{{ $attend->day}}</td>
  <td class="center">{{ $attend->status->status_name}}</td>
  



<td class="text-center">
  
  
        <form class="myform-" action="" style="display: none;" method="post">
                {{csrf_field()}}
                {{method_field('DELETE')}}
              </form>
              <Button id="" class="btn btn-danger btn-xs delete" data-toggle="tooltip" title="Delete"><span class="glyphicon glyphicon-trash"></span>
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



@endsection