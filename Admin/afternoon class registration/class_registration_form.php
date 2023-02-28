<?php
$output='';

$output.='
<form action="" method="POST" class="form-horizontal form-center">

<div class="form-group">
<label class="control-label">Name: </label>
<input type="text" class="form-control" id="applic-f_name" name="fname" placeholder="e.g: Musa">

</div>
<div class="form-group">
<label class="control-label">Surname: </label>
<input type="text" class="form-control" id="applic-l_name" name="lname" placeholder="e.g: Mashele">

</div>
<div class="form-group">
<label class="control-label">Country: </label>
<input type="text" class="form-control" id="applic-country" name="country" placeholder="e.g: South Africa">

</div>
<div class="form-group">
<label class="control-label">Province: </label>
<input type="text" class="form-control" id="applic-prov" name="province" placeholder="e.g: Gauteng">

</div>
<div class="form-group">
<label class="control-label">City: </label>
<input type="text" class="form-control" id="applic-cit" name="city" placeholder="e.g: Pretoria">

</div>
<div class="form-group">
<label class="control-label">Physical Address: </label>
<input type="text" class="form-control" id="applic-pAdd" name="Physical" placeholder="e.g: 878 block L Soshanguve">

</div>
<div class="form-group">
<label class="control-label">Code: </label>
<input type="text" class="form-control" id="applic-cod" name="code" placeholder="e.g: 0152">

</div>
<div class="form-group">
<label class="control-label">Email: </label>
<input type="text" class="form-control" id="applic-mail" name="email" placeholder="e.g: Musa.Mash01@gmail.com \'Optional...\'">

</div>
<div class="form-group">
<label class="control-label">Home Tel Number: </label>
<input type="text" class="form-control" id="applic-Tel" name="homeTel" placeholder="e.g: 012-999-3634 \'Optional...\'">

</div>
<div class="group">
<label class="control-label">Phone Number: </label>
<input type="text" class="form-control" id="applic-phone_num" name="phoneN" placeholder="e.g: 079-586-4726">

</div>
<div class="form-group">
<label class="control-label">Gender: </label>
 <br>
  <label class="form-check-label">
      <input class="form-check-inline" checked="checked" type="radio" id="inlineRadio1" name="inlineRadioOptions" value="Male">Male
  </label>
  <br>
  <label class="form-check-label">
      <input  class="form-check-inline" type="radio" id="inlineRadio1" name="inlineRadioOptions" value="Female">Female
  </label>
</div>
<div class="form-group">
<label class="control-label">Date of Birth: </label>
<input type="date" class="form-control" id="applic-DOB" name="date">

</div>
<div class="form-group">
<label class="control-label">Identity Number: </label>
<input type="text" class="form-control" id="ID" name="ID">

</div>
<div class="form-group">
<label for="formControlSelect1" class="control-label">Age: </label>
<select class="form-control" name="formControlSelect1" id="some_select">
    <option val="0"> Please select your age </option>
    <option val="8">8</option>
    <option val="9">9</option>
    <option val="10">10</option>
    <option val="11">11</option>
    <option val="12">12</option>
    <option val="13">13</option>
    <option val="14">14</option>
    <option val="15">15</option>
    <option val="16">16</option>
    <option val="17">17</option>
    <option val="18">18</option>
    <option val="19">19</option>
    <option val="20">20</option>
    <option val="21">21</option>
    <option val="22">22</option>
    <option val="23">23</option>
    <option val="24">24</option>
    <option val="25">25</option>
    <option val="26">26</option>
    <option val="27">27</option>
    <option val="28">28</option>
    <option val="29">29</option>
    <option val="30">30</option>
    <option val="31">31</option>
    <option val="32">32</option>
    <option val="33">33</option>
    <option val="34">34</option>
    <option val="35">35</option>
</select>
</div>
<div class="form-group">
<label class="control-label">Do you suffer from medical condition: 
    <br>
    <label class="form-check-label">
        <input class="form-check-inline" checked="checked" type="radio" id="inlineRadioB1" name="inlineRadioBOptions" value="yes">Yes
    </label>
    <br>
    <label class="form-check-label">
        <input class="form-check-inline" type="radio" id="inlineRadioB1" name="inlineRadioBOptions" value="no">No
    </label>
</label>
</div>
<div class="form-group">  
  <label class="control-label">If yes, please state your condition: </label>
  <input type="text" class="form-control" id="applic-medCon" name="condition" placeholder="e.g: Short Eyesight">
  
</div>
<div class="form-group">
<label class="control-label">Parent/Guardian Surname: </label>
<input type="text" class="form-control" id="pname" name="pname" placeholder="e.g: Chauke">
</div>
<div class="form-group">
  <label class="control-label">Parent/Guardian Name: </label>
  <input type="text" class="form-control" id="psurname" name="psurname" placeholder="e.g: Dudu Tshepiso">
</div>
<div class="form-group">
<label class="control-label">Title: </label>
<select id="ptitle" name="ptitle" class="form-control">
  <option disabled>Choose the Guardian/Parent Title</option>
  <option value="Dr" selected="selected">Dr</option>
  <option value="Mr">Mr</option>
  <option value="Miss">Miss</option>
  <option value="Mrs">Mrs</option>
</select>
</div>
<div class="form-group">  
  <div class="form-check form-check-inline">
      <label class="form-check-label"><p>
      <input class="form-check-inline" type="checkbox" id="inlineCheckBox" name="inlineCheckBox" value="agree">
      I Parent/Guardian of the student stated in this application agree that he/she can attend the afternoon extra classes program and i take a full responsibility of everything that will be needed on behalf of my child, 
      making sure that he/she attends the classes. 
      I agree that it is in my best interest to work and support you to help my child in improving academically.</p> 
      </label>
 </div>
 
</div>
<div class="form-group">
  <label class="control-label">Parent Initials: </label>
  <input type="text" disabled class="form-control" id="applic-init" name="initials" placeholder="e.g: P.M">
  
</div>

</form>
';


print($output);
?>