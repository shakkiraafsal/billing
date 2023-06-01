<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Source:SGOU Recruitment Portal.</title>

<style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
  height: 30px;
  text-align: left;
}
</style>
</head>
<body onload="window.print()">


<div style="margin:10px">
<table style="width:80%">
	<tr>
		<td colspan="4">
			<center><img src="{{asset('backend/assets/img/logo-pdf-detail.png')}}" width="1000px" height="200px"></center>
			

		</td>
	</tr>
  <tr>
		<td colspan="4">
			<center><h2>REGISTRATION FORM FOR RECRUITMENT PORTAL</h2></center>
			

		</td>
	</tr>
  <tr>
    <td colspan="4">
      <h4>PERSONAL DETAILS</h4>
      

    </td>
  </tr>
	<tr>
		<td colspan="2">
			<center><img src="{{asset($userdetails->personaldetails->personal_photo)}}" width="100px" height="100px"></center>
			

		</td>
		<td colspan="2">
			<center><img src="{{asset($userdetails->personaldetails->personal_signature)}}" width="150px" height="100px"></center>
			

		</td>
	</tr>
  <tr>
    <th>Full Name</th>
    <td>{{$userdetails->personaldetails->personal_name}}</td>
    <th>Registration Id</th>
    <td>{{$userdetails->registation_id}}</td>
  </tr>
    <tr>
    <th>Email</th>
    <td>{{$userdetails->fetchUserTable->email}}</td>
    <td rowspan="3" colspan="3">
    	<div class="barcode" style="width: 200px;border: none;margin: 0 auto;">
    		
        
    		
  @php
    $generator = new Picqer\Barcode\BarcodeGeneratorPNG();
  @endphp 
    	<img src="data:image/jpg;base64,{{ base64_encode($generator->getBarcode($userdetails->registation_id, $generator::TYPE_CODE_128)) }}" >
    <center>{{$userdetails->registation_id}}</center>
   
</div>
</td>
  </tr>
    <tr>
    <th>Mobile</th>
    <td>{{$userdetails->fetchUserTable->user_mobile}}</td>
   </tr>
    <tr>
    <th>Alternate Mobile</th>
    <td>{{$userdetails->fetchCommunicationTable->alt_mobile}}</td>
  </tr>
    <tr>
    <th>Gender</th>
    <td>{{$userdetails->personaldetails->personal_gender}}</td>
    <th>Date of Birth</th>
    <td>{{$userdetails->personaldetails->personal_dob}}</td>
  </tr>
    <tr>
    <th>Nationality</th>
    <td>{{$userdetails->personaldetails->personal_nationality}}</td>
    <th>Religion</th>
    <td>{{$userdetails->personaldetails->personal_religion}}</td>
   </tr>
    <tr>
    <th>Caste</th>
    <td>{{$userdetails->personaldetails->personal_caste}}</td>
    <th>Caste Category</th>
    <td>{{$userdetails->personaldetails->personal_category}}</td>
   </tr>
    <tr>
    <th>ID Proof</th>
    <td>{{$userdetails->personaldetails->personal_id}}</td>
    <th>ID Proof Number</th>
    <td>{{$userdetails->personaldetails->personal_id_no}}</td>
   </tr>
   <tr>
    <th>Marital Status</th>
    <td>{{$userdetails->personaldetails->personal_marital_status}}</td>
    <th>Employment Status</th>
    <td>{{$userdetails->personaldetails->personal_employment_status}}</td>
   </tr>
   <tr>
    <th>Disability</th>
    <td>{{$userdetails->personaldetails->personal_disability}}</td>
    <th>Disability Type</th>
    <td>{{$userdetails->personaldetails->personal_disability_type}}</td>
   </tr>
 <tr>
    <td colspan="4">
      <h4>COMMUNICATION DETAILS</h4>
       <tr>
    <th>House Name/No.</th>
    <td>{{$userdetails->fetchCommunicationTable->commaddresslineone}}</td>
    <th>Locality</th>
    <td>{{$userdetails->fetchCommunicationTable->commaddresslinetwo}}</td>
  </tr>
   <tr>
    <th>Post Office</th>
    <td>{{$userdetails->fetchCommunicationTable->commaddresslinefour}}</td>
    <th>Pincode</th>
    <td>{{$userdetails->fetchCommunicationTable->commaddresslinethree}}</td>
  </tr>
   <tr>
    <th>District</th>
    <td>{{$userdetails->fetchCommunicationTable->commaddresslinefive}}</td>
    <th>State</th>
    <td>{{$userdetails->fetchCommunicationTable->commaddresslinesix}}</td>
  </tr>

    </td>
  </tr>
</table>
</div>

</body>
</html>
