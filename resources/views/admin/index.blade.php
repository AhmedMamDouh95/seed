@extends('admin.layouts.app')

@section('headSection')

<link href='css/calender/fullcalendar.css' rel='stylesheet' />
<link href='css/calender/fullcalendar.print.css' rel='stylesheet' media='print' />
  <style>
    
  #wrap {
/*    width: 1100px;
*/    margin: 0 auto;
    }
    
  #external-events {
    float: left;
    width: 150px;
    padding: 0 10px;
    text-align: left;
    }
    
  #external-events h4 {
    font-size: 16px;
    margin-top: 0;
    padding-top: 1em;
    }
    
  .external-event { /* try to mimick the look of a real event */
    margin: 10px 0;
    padding: 2px 4px;
    background: #3366CC;
    color: #fff;
    font-size: .85em;
    cursor: pointer;
    }
    
  #external-events p {
    margin: 1.5em 0;
    font-size: 11px;
    color: #666;
    }
    
  #external-events p input {
    margin: 0;
    vertical-align: middle;
    }

  #calendar {
/*    float: right; */
        margin: 0 auto;
/*    width: 900px;
*/    background-color: #FFFFFF;
      border-radius: 6px;
        box-shadow: 0 1px 2px #C3C3C3;
    }

</style>


@endsection



@section('main-content')
<div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
                   
                    <div class="col-lg-12">
                        <div class="ibox float-e-margins">
                            <div class="ibox-title">
                                <!-- <span class="label label-info pull-right">Annual</span> -->
                                <h5>Total Employees</h5>
                            </div>
                            <div class="ibox-content">
                                <h1 class="no-margins">{{ $employees }}</h1>
                                
                                <a href="{{ route('employee.index') }}" title="">All Employees</a>                            </div>
                        </div>
                    </div>
                <!-- 
                 <div class="col-lg-12">
                        <div class="ibox float-e-margins">
                            <div class="ibox-title"> -->
                                <!-- <span class="label label-info pull-right">Annual</span> -->
                               <!--  <h5>SETS</h5>
                            </div>
                            <div class="ibox-content">
                                <h1 class="no-margins"></h1>
                                
 <a href="" title="">All Sets</a>                            </div>
                        </div>
                    </div>
 -->

<!-- 
                     <div class="col-lg-12">
                        <div class="ibox float-e-margins">
                            <div class="ibox-title">
                                <span class="label label-info pull-right">Annual</span>
                                <h5>ACTIVE MOVIES</h5>
                            </div>
                            <div class="ibox-content">
                                <h1 class="no-margins"></h1>
                                
 <a href="" title="">Activated Movies</a>                            </div>
                        </div>
                    </div>
 -->


<!-- 
                     <div class="col-lg-12">
                        <div class="ibox float-e-margins">
                            <div class="ibox-title">
                                <span class="label label-info pull-right">Annual</span>
                                <h5>ACTIVE SETS</h5>
                            </div>
                            <div class="ibox-content">
                                <h1 class="no-margins"></h1>
                                
 <a href="" title="">Activated Sets</a>                            </div>
                        </div>
                    </div>
 -->
        
            <div class="row m-b-lg">
                  <div class="col-lg-12">
                     <div id='wrap'>

<div id='calendar'></div>

<div style='clear:both'></div>
</div>
                  </div>
               </div>
            
        </div>

</div>



@endsection