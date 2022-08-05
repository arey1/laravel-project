





<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

        <!-- Fonts -->
       <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
--></head>
    <body style="background-color:rgb(105,105,105);">






        <div class="container-fluid">
            <div class="col-md-12" style="padding-top:10px;">





            @if(Session::has('success'))
            <div class="alert alert-success">
                {{Session::forget('success')}}
                @php
                     Session::forget('success')
                @endphp
            </div>
            @endif

                <div class="row">
                    <div class="col-md-3"></div>
                        <div class="col-md-6 jumbotron my-5" style="background-color:rgb(211,211,211);">
                            <form style="padding:20px;" method="post" action="/pensioner/create" accept-charset="UTF-8" >
                                       {{ csrf_field() }}
                                        
                            
                                       

                                    <div class="form-group">

                                       
                                        <label style="font-family: 'Poppins', sans-serif;font-size: 22px;" for="pension">Registration number</label><br>
                                          <input  type="number" name="registration_no" placeholder="Enter registration number" class="form-control" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength='10'  autocomplete="off"/>

                                          @if($errors->has('registration_no'))
                                               <span style="color:red;" class="number-danger">{{$errors->first('registration_no')}}</span>
                                          @endif
                                          

                                    </div><br>



                                    <div class="form-group">

                                          <label  style="font-family: 'Poppins', sans-serif;font-size: 22px;" for="pension">Pensioner name</label><br>
                                            <input id="" type="text" name="pensioner_name" placeholder="Enter Pensioner Name" class="form-control" maxlength="90" autocomplete="off">


                                            @if($errors->has('pensioner_name'))
                                               <span style="color:red;" class="number-danger">{{$errors->first('pensioner_name')}}</span>
                                          @endif
                            

                                    </div><br>

                                    <div class="form-group">

                                            <label  style="font-family: 'Poppins', sans-serif;font-size: 22px;" for="pension">Pensioner DOB</label><br>
                                            <input id="" type="date" name="pensioner_dob" placeholder="Enter Pensioner DOB" class="form-control" autocomplete="off">
                                            @if($errors->has('pensioner_dob'))
                                               <span style="color:red;" class="date-danger">{{$errors->first('pensioner_dob')}}</span>
                                          @endif


                                    </div><br>

                                    <div class="form-group">


                                            <label  style="font-family: 'Poppins', sans-serif;font-size: 22px;" for="pension">Pensioner Address</label><br>
                                            <input id="" type="text" name="pensioner_address" placeholder="Enter Pensioner Address" class="form-control" maxlength="90" autocomplete="off">
                                            @if($errors->has('pensioner_address'))
                                               <span style="color:red;" class="number-danger">{{$errors->first('pensioner_address')}}</span>
                                          @endif
                                       

                                    </div>

                                           <br><br> 

                                            <input  type="submit" name="submit" value="submit" class="btn btn-success"><br><br>
                                   
 



                                    
                                   </form>


                                  

                                </div>
                            
                 </div>

            

        </div>
       













    </body>
</html>

















