@extends('page.base')

@section('title')
   Rejoindre le reseaux
@endsection

@section('contenu')
                               
<style>
body {
    color: #000;
    overflow-x: hidden;
    height: 100%;
    background-: url("/images/Appel-a-projets-1.jpg");
    background-repeat-: no-repeat;
    background-size: 100% 100%
}

#formbackground {background: url("/images/Appel-a-projets-1.jpg");}

.card {
    padding: 30px 40px;
    margin-top: 60px;
    margin-bottom: 0px;
    border: none !important;
    box-shadow: 0 6px 12px 0 rgba(0, 0, 0, 0.2)
}

.blue-text {
    color: #00BCD4
}

.form-control-label {
    margin-bottom: 0
}

input,
textarea,select,
button {
    padding: 8px 15px;
    border-radius: 5px !important;
    margin: 5px 0px;
    box-sizing: border-box;
    border: 1px solid #ccc;
    font-size: 18px !important;
    font-weight: 300
}

input:focus,
textarea:focus {
    -moz-box-shadow: none !important;
    -webkit-box-shadow: none !important;
    box-shadow: none !important;
    border: 1px solid #00BCD4;
    outline-width: 0;
    font-weight: 400
}

#buttom_submit{
    background-color: #1d284b;
    color: #fff;
}
#buttom_submit:hover{
    background-color: #fff;
    color: #000;
    border-: 2px solid #1d284b;
}

.select{
    background-color: #fff;
    padding: 8px;
    border-radius: 1px;
    outline-color: #00BCD4;
}
.select:focus{
    background-color-: #00BCD4;
    border-: 1px solid red;
    border-color-: green;
}
/*.btn-block {
    text-transform: uppercase;
    font-size: 15px !important;
    font-weight: 400;
    height: 43px;
    cursor: pointer
}

.btn-block:hover {
    color: #fff !important
}

button:focus {
    -moz-box-shadow: none !important;
    -webkit-box-shadow: none !important;
    box-shadow: none !important;
    outline-width: 0
}*/

</style>
                                
                               
                                <div class="container-fluid px-1 py-5 mx-auto">
    <div class="row d-flex justify-content-center" id="formbackground">
        <div class="col-xl-7 col-lg-12 col-md-9 col-11 text-center">           
            <div class="card">
                <h5 class="text-center mb-4 fw-bold">JOINDRE LE RESEAUX</h5>
                <form class="form-card" onsubmit="event.preventDefault()">
                    <div class="row justify-content-between text-left">
                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Nom<span class="text-danger"> *</span></label> <input type="text" id="fname" name="fname" placeholder="Enter your first name" onblur="validate(1)"> </div>
                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Prenom<span class="text-danger"> *</span></label> <input type="text" id="lname" name="lname" placeholder="Enter your last name" onblur="validate(2)"> </div>
                    </div>
                    <div class="row justify-content-between text-left">
                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Email<span class="text-danger"> *</span></label> <input type="text" id="email" name="email" placeholder="" onblur="validate(3)"> </div>
                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Telephone<span class="text-danger"> *</span></label> <input type="text" id="mob" name="mob" placeholder="" onblur="validate(4)"> </div>
                    </div>
                    <div class="row justify-content-between text-left">
                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Pays<span class="text-danger"> *</span></label> 
                            <select class="select form-control-label">
                                <option value="">select</option>
                                <option value="">RDC</option>
                                <option value=""></option>
                            </select>
                        </div>
                         <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Province<span class="text-danger"> *</span></label> 
                            <select class="select form-control-label" class="">
                                <option value="">select</option>
                                <option value="">Kinshasa</option>
                                <option value="">Congo central</option>
                            </select>
                         </div>
                    </div>
                    <div class="row justify-content-between text-left">
                        <div class="form-group col-sm-12 col-6 flex-column d-flex"> <label class="form-control-label px-3">Mot de passe <span class="text-danger"> *</span></label> <input type="text" id="ans" name="ans" placeholder="" onblur="validate(6)"> </div>
                        <div class="form-group col-sm-12 col-6 flex-column d-flex"> <label class="form-control-label px-3">Confirm Mot de passe<span class="text-danger"> *</span></label> <input type="text" id="ans" name="ans" placeholder="" onblur="validate(6)"> </div>
                    </div>
                    <div class="row justify-content-end">
                        <div class="form-group col-sm-12"> 
                            <input id="buttom_submit" type="submit" class="form-control fw-bold" value="Rejoindre le Réseaux" />
                            <!--button type="submit" class="form-control space btn-block btn-primary fw-bold">Rejoindre le Réseaux</button--> </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
                               
                                <script type='text/javascript'>function validate(val) {
v1 = document.getElementById("fname");
v2 = document.getElementById("lname");
v3 = document.getElementById("email");
v4 = document.getElementById("mob");
v5 = document.getElementById("job");
v6 = document.getElementById("ans");

flag1 = true;
flag2 = true;
flag3 = true;
flag4 = true;
flag5 = true;
flag6 = true;

if(val>=1 || val==0) {
if(v1.value == "") {
v1.style.borderColor = "red";
flag1 = false;
}
else {
v1.style.borderColor = "green";
flag1 = true;
}
}

if(val>=2 || val==0) {
if(v2.value == "") {
v2.style.borderColor = "red";
flag2 = false;
}
else {
v2.style.borderColor = "green";
flag2 = true;
}
}
if(val>=3 || val==0) {
if(v3.value == "") {
v3.style.borderColor = "red";
flag3 = false;
}
else {
v3.style.borderColor = "green";
flag3 = true;
}
}
if(val>=4 || val==0) {
if(v4.value == "") {
v4.style.borderColor = "red";
flag4 = false;
}
else {
v4.style.borderColor = "green";
flag4 = true;
}
}
if(val>=5 || val==0) {
if(v5.value == "") {
v5.style.borderColor = "red";
flag5 = false;
}
else {
v5.style.borderColor = "green";
flag5 = true;
}
}
if(val>=6 || val==0) {
if(v6.value == "") {
v6.style.borderColor = "red";
flag6 = false;
}
else {
v6.style.borderColor = "green";
flag6 = true;
}
}

flag = flag1 && flag2 && flag3 && flag4 && flag5 && flag6;

return flag;
}</script>
                                
@endsection