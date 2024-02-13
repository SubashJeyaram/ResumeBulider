<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

    <title>Resume</title>


  </head> 
  <style>

img{
	width: 20%;
	border-radius: 50%;
	margin-top: 1%;
	border: 4px solid #53f5bc;
}
.top-section{
	float: right;
	background-color:#53f5bc;
	width: 75%;
	margin-left: 1%;
	margin-top: 3%;

}
.p1{
	margin-left: 30%;
	color: black;
	font-size: 25px;
	font-weight: bold;
}

.p1 span{
	font-weight: 100;
	color: black;
	padding-left: 10px;
}

.p2{
	margin-left: 36%;
	font-size: 21px;
	color: black;
}
.p2 span{
	color:black;
	padding-left: 5px;
}

.col-div-4{
	width: 29%;
	float: left;
}

.col-div-8{
	width: 70%;
	float: left;
}

.line{
	border: 1px solid #c7c7c7;
	height: 850px;
	width: 0%;
	float: left;
}

.content-box{
	padding: 15px;
}

.head{
	font-size: 17px;
	text-transform: uppercase;
	font-weight: 100;
	color: black;
}

.p3{
	color: black;
	font-size: 14px;
}

.fa{
	color: #53f5bc;
}

.skills{
	margin-left: -20px;
	margin-bottom: 0px;
}

.skills li{
	padding: 5px;
	margin-bottom: 5px;	
}

.skills li span{
	color: black;
	background-color: #53f5bc;
	padding: 5px;
	font-size:14px;
}

.p-4{
	font-size: 14px;
	color:black;
}


.skills-2{
	margin-left: -20px;
	margin-bottom: 0px;
}

.skills-2 li{
	padding: 3px;
	font-size: 12px;
}

.skills-2 li span{
	color: black;
	font-size: 12px;
}
  </style>
  <body>

  	<div class="main">
      <div class="flex-image">
        <img src="data:image/svg+xml;base64,<?php echo base64_encode(file_get_contents(base_path('public/photo/'.$photo_details[0]->photo))); ?>" class="profile">
         
  		<div class="top-section">

        <p class="p1">{{$user_information[0]->firstname}}<span>{{$user_information[0]->lastname}}</span></p> 

        <p class="p2">{{$user_information[0]->domain}}</span></p>
  		</div>
  	</div>

  		<div class="clearfix"></div>

  		<div class="col-div-4">
  			<div class="content-box" style="padding-left:7px;">
  				<p class="head" style="margin-bottom: -5px;">Contact</p>
  				<p class="p3"><i class="fa fa-envelope"></i>{{$user_information[0]->email}}</p>
  				<p class="p3"><i class="fa fa-home"></i>{{$user_information[0]->address}}</p><br>

  				

  				<p class="head" style="margin-bottom: -5px; margin-top: -5px;">My Skills</p>
  				<ul class="skills">
  					<li><span>{{$user_information[0]->skill_1}}</span></li>
  					<li><span>{{$user_information[0]->skill_2}}</span></li>
  					<li><span>{{$user_information[0]->skill_3}}</span></li>
  					<li><span>{{$user_information[0]->skill_4}}</span></li>
  					<li><span>{{$user_information[0]->skill_5}}</span></li>
  					<li><span>{{$user_information[0]->skill_6}}</span></li>
                    <li><span>{{$user_information[0]->skill_7}}</span></li>
  				</ul><br>

  				<p class="head" style="margin-top: -5px;">Languages</p>
  				<p class="p3"><i class="fa fa-language"></i>&nbsp;&nbsp;&nbsp;&nbsp;{{$user_information[0]->language_1}}</p>
          <p class="p3"><i class="fa fa-language"></i>&nbsp;&nbsp;&nbsp;&nbsp;{{$user_information[0]->language_2}}</p> 
  				<p class="p3"><i class="fa fa-language"></i>&nbsp;&nbsp;&nbsp;&nbsp;{{$user_information[0]->language_3}}</p>	<br>

           <p class="head" style="margin-bottom: -5px; margin-top:-5px;">Education</p>
          <p style="font-size: 14px; color:black;"><span>{{$user_information[0]->ug}}</span><span> ( {{$user_information[0]->ug_year_passing}} )</span></p>
          <p class="p-4">{{$user_information[0]->ug_college_name}}</p> 

           <p class="head" style="margin-bottom: -5px; margin-to:-5px;">Education</p>
          <p style="font-size: 14px; color:black;"><span>{{$user_information[0]->pg}}</span><span> ( {{$user_information[0]->pg_year_passing}} )</span></p>
          <p class="p-4">{{$user_information[0]->pg_college_name}}</p> 

          
        </div> 

  		</div>

  		<div class="line"></div>

  		<div class="col-div-8">
  			<div class="content-box">

  		<p class="head">Profile</p>
  				
          <ul class="skills-2">
            <li><span>{{$profile_summary[0]->summary_1}}</span></li>
            <li><span>{{$profile_summary[0]->summary_2}}</span></li>
            <li><span>{{$profile_summary[0]->summary_3}}</span></li>
            <li><span>{{$profile_summary[0]->summary_4}}</span></li>
          </ul>


  				<p class="head" >Experience</p>
          @for($i=0; $i<3; $i++)  				
  				<p style="font-size: 14px; color:black margin-bottom: -10px;"><span>{{$experience_details[$i]->company_name}} </span><span>( {{$experience_details[$i]->fromyear}} -</span><span> {{$experience_details[$i]->toyear}} )</span></p>

            <ul class="skills-2">
            <li><span>{{$experience_details[$i]->expdet1}}</span></li>
            <li><span>{{$experience_details[$i]->expdet2}}</span></li>
            <li><span>{{$experience_details[$i]->expdet3}}</span></li>
            <li><span>{{$experience_details[$i]->expdet4}}</span></li>
          </ul>
          @endfor

          
  			</div>  			
  		</div>

  		
  	</div>

</body>
</html>