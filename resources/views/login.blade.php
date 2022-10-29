 @extends('master')
 @section('content')
     <div class="container-md m-auto  bg-secondary w-100 my-5 border  border-whit border-4 rounded-start "
         style="box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;">

         <div class="row " style="justify-content: center; align-content: center;">
             <div class="col-sm-4 my-5 " style="justify-content: center; align-items: center">

                 <h3 class="text-white text-center" style="margin-top: 9px;">Application Form</h3>
                 <form method="POST" action="">
                     <div class="row mb-3 text-white my-5">
                         <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                         <div class="col-sm-10">
                             <input type="email" class="form-control" id="inputEmail3">
                         </div>
                     </div>
                     <div class="row mb-3 text-white my-5">
                         <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                         <div class="col-sm-10">
                             <input type="password" class="form-control" id="inputPassword3">
                         </div>
                     </div>


                     <button type="submit" class="btn btn-success my-5" style="margin-left: 57px;">Submit</button>
                 </form>


             </div>

         </div>
     </div>
 @endsection
