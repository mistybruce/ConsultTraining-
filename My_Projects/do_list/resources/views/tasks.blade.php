//tasks.blade.php
<?php
@extends('layouts.app')

@section('content')

@if (count($tasks) > 0)
<div class="panel panel-default">
  <div class="panel-heading">
      Current Jobs
      </div>
  //the heading
<div class="panel-body">
 <table class="table table-striped task-table">

 <thead>
  <th>Job</th>
   <th>&nbsp;</th>
   </thead>
//the body
   <tbody>
    @foreach ($tasks as $task)
     <tr>

     <td class="table-text">
      <div>{{$tasks->Name}}</div>
      </td>
        //delete
       <td>
           <form action="/task/{{ $task->ID}}" method= "Post">
           {{ csrf_field()}}
           {{Method_field('delete') }}

           <button>DeletevJob</button>
           </form>
       </td>
       </tr>
       @endforeach
       </tbody>
       </table>
       </div>
       </div>
       @endif
       @endsection
//show errors
@include('common.errors')

//new jobs 
<form action="/task" method="Post" class="form-horizontal>"
   {{csrf_field()}}

   //the name of the job
   <div class="form-group">
    <label for="task" class="col-md-3 control-label">Job</label>

    <div class="col-md-6">
    <input type="text" Name= "Name" ID="Task-name" class="form-control">
    </div>
   </div>

   //Put button in place
   <div class="form-group">
    <div class="col-md-offset-3 col-md-6">
      <button type="submit" class="btn btn-default">
       i class="fa fa plus"></i Add Job

       </button>
      </div>
     </div>
    </form>

    </div>
    @endsection
