@extends('layouts.app')

@section('content')

   <!-- Bootstrap Boilerplate... -->

   <div class="container">
        <!-- Display Validation Errors -->
        {{-- @include('common.errors') --}}

      <!-- New Task Form -->
      <form action="/task" method="POST" class="form-horizontal">
        {{ csrf_field() }}
        
        <!-- Task Name -->
        <div class="container form-group p-3 border border-1">
         <p class="alert alert-secondary ">New Task</p>  
           <label for="task" class="col-sm-3 control-label">Task</label>

                <div class="col mb-3">
                 <input type="text" name="name" id="task-name" class="form-control">
               </div>
               <div class="form-group">
                    <div class="col-sm-offset-3 col-sm-6">
                        <button type="submit" class="btn btn-default btn-secondary">
                              <i class="fa fa-plus"></i> Add Task
                          </button>
                     </div>
                 </div>
         </div>

         <!-- Add Task Button -->
       </form>
  </div>

    <!-- TODO: Current Tasks -->
@endsection