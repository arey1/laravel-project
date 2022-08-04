# laravel-project
creating a MVC  crud restful api in laravel for pensioner registration database.





Controllers:

Inside PensionerRegistration\App\Http\Controllers\Api

1.Base Controller: Controller used for validation of name, email, password, c_password(confirm password)
                   for user registration and log in.It has two functions:
                   1.register() 2.login()

2.PensionController: Controller for routes\api.php that has all routes functions index(),
                    store(),show(),getByName(),getByAddress(),getByReg(),update(),destroy().

3.RegisterController: Controller used for Validation and operate user registration and log in
                     that has register() and login().

Inside PensionerRegistration\App\Http\Controllers

4.pensionController: Controller for routes\web.php that has all routes functions index(),store(),
                    show(),getByName(),getByAddress(),getByReg().


INSIDE PensionerRegistration\App\Http\Resource\PensionResource.php
PensionResource.php used as predefined json return response of called api. 


Model 
Inside PensionerRegistration\App\Models\PensionerModel.php

Routes:
1.PensionerRegistration\routes\api.php  :
                                         api routes for CRUD { index(),
                    store(),show(),getByName(),getByAddress(),getByReg(),update(),destroy(). }


2.PensionerRegistration\routes\web.php :
                                        web routes for index(),
                                       show(),getByName(),getByAddress(),getByReg().


For pensioner registration form website Front End:
Inside PensionerRegistration\resources\views\welcome.blade.php

.env :
      DB_CONNECTION=mysql
      DB_HOST=127.0.0.1
      DB_PORT=3307
      DB_DATABASE=registerpension
      DB_USERNAME=root
      DB_PASSWORD=



TABLE:PensionerRegistration\database\migrations\2022_07_24_011002_create_sessions_table.php



       Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->foreignId('user_id')->nullable()->index();
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->longText('payload');
            $table->integer('last_activity')->index();
        });
     






test api

baseurl:http://127.0.0.1:8000/api

user registration:  post   {{baseurl}}/register
user log in: post  {{baseurl}}/login
get user details: get {{baseurl}}/user
get all pensioner: get {{baseurl}}/getAllPensioner
add pensioner: post {{baseurl}}/pensionerAdd
                    body:
                         registration_no: 123
                         pensioner_name:sam
                         pensioner_dob: yyyy/mm/dd (age should be between 60 and 120)
                         pensioner_address:delhi



delete pensioner by id : delete {{baseurl}}/pensionerDelete/14
update pensioner by id : post {{baseurl}}/pensionUpdate/6
                         body:
                               registration_no: 123
                               pensioner_name:sam
                               pensioner_dob: yyyy/mm/dd (age should be between 60 and 120)
                               pensioner_address:delhi
                               _method:PUT

get pensioner by id:get {{baseurl}}/getByid/7

get all pensioner by same name: get {{baseurl}}/getByname/john

get  all pensioner by same address: get  {{baseurl}}/getByAddress/sri lanka

get pensioner by registration number:  get {{baseurl}}/getByRegistration/21




test by web:

get all pensioner : http://localhost:8000/pensioner
get pensioner by id :http://localhost:8000/pensioner/3
get all pensioner by same name:http://localhost:8000/pensioner/name/john
get all pensioner by same address:http://localhost:8000/pensioner/address/delhi
get pensioner by registration number:http://localhost:8000/pensioner/registration_no/215




















