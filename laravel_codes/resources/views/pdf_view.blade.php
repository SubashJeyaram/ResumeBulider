<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Resume</title>
    <link href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  </head> 
<style type="text/css">
.top-section{
  background-color:#53f5bc;
  margin-left: 3%;
  width: 100%;

}
.flex-image{
  display: flex;
  justify-content: flex-start;
  padding-bottom: 1%;
}

img{
  width: 23%;
  border-radius: 50%;
  height: 140px;
  margin-left: 2%;
  border: 4px solid #53f5bc;
}

.flex-name{
  display: flex;
}
.p1{
  margin-left: 30%;
  color: black;
  font-size: 30px;
  font-weight: bold;
}

#lastname{
  font-size: 30px;
  font-weight: 50;
  color: black;
  margin-left: 3%;
}

.p2{
  margin-left: 35%;
  color: black;
  font-size: 23px;
}

.col-div-4{
  max-width: 30%;
  float: left;
  padding-right: 2px;
}

.col-div-8{
  max-width: 69%;
  float: left;
  padding-left: 2px;
}

.line{
  border-left: 1px solid #c7c7c7;
  height: 800px;
  width: 0%;
  float: left;
}

.content-box{
  padding-left: 15px;
}

.head{
  font-size: 25px;
  text-transform: uppercase;
  font-weight: 100;
  color: black;
}
.head_right{
  font-size: 25px;
  text-transform: uppercase;
  font-weight: 100;
  color: black;
  padding-top: 20px;
  padding-bottom: 10px;
}

.p3{
  font-size: 15px;
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
  margin-bottom: 7px; 
}

.skills li span{
  color: black;
  background-color: #53f5bc;
  padding: 5px;
  font-size:16px;
}

.p-4{
  font-size: 15px;
  color:black;
}

.a1{
  margin-left: 3px; 
  margin-bottom: 5px;
}

.a3{
  margin-left: 3px;
  margin-bottom: 5px;
}

.a2{
  margin-left: 3px;
  margin-bottom: 5px;
}

.a4{
  margin-left: 3px;
  margin-bottom: 5px;
}
.skills-2{
  margin-left: -20px;
  margin-top: -1px;

}

.skills-2 li{
  padding: 3px;
  font-size: 14px;
}
#company_name{
  font-size: 16px;
  font-weight: bold;
}


.flex-hobbies{
  display: flex;
  justify-content:flex-start;
}
.flex-hobbies-2{
  display: flex;
  justify-content:flex-start;
}
  </style>
  <body>
    <span id="user_id">{{ $user_id }}</span>
        
  	<div class="main">
      <div class="flex-image">
        <img src="" class="profile">
  		<div class="top-section">

        <div class="flex-name">
        <p class="p1" id="firstname"></p><p id="lastname"></p></div> 

        <div class="p2" id="domain_get"></div>
  		</div>
    </div>

  		<div class="clearfix"></div>

  		<div class="col-div-4">
  				<p class="head" style="margin-bottom: -5px;">Contact</p><br>
  				<div class="p3"><i class="fa fa-envelope"></i><br><span id="email"></span></div><br>
  				<div class="p3"><i class="fa fa-home"></i>&nbsp;&nbsp;<span id="address"></span></div><br>

  				

  				<p class="head" style="margin-bottom: -5px; margin-top: -5px;">My Skills</p>
  				<ul class="skills">
  					<li><span id="skill_1"></span></li>
  					<li><span id="skill_2"></span></li>
  					<li><span id="skill_3"></span></li>
  					<li><span id="skill_4"></span></li>
  					<li><span id="skill_5"></span></li>
  					<li><span id="skill_6"></span></li>
            <li><span id="skill_7"></span></li>            
  				</ul><br>

  				<p class="head" style="margin-bottom: -5px; margin-top: -5px;">Languages</p>
  				<p class="p3"><i class="fa fa-language"></i>&nbsp;&nbsp;&nbsp;&nbsp;<span id="language_1"></p> 
  				<p class="p3"><i class="fa fa-language"></i>&nbsp;&nbsp;&nbsp;&nbsp;<span id="language_2"></p>
            <p class="p3"><i class="fa fa-language"></i>&nbsp;&nbsp;&nbsp;&nbsp;<span id="language_3"></p> 	<br>


          <p class="head" style="margin-bottom: -5px; margin-top:-5px;">Education</p><br/>
          <div><span style="font-size: 20px; color:black;" id="ug"></span>&nbsp;&nbsp;<span id="ug_year_passing"></span></div>
          <p class="p-4" id="ug_college_name"></p> 
          <div id="ug_nodata"></div>


          <div><span style="font-size: 20px; color:black;" id="pg"></span>&nbsp;&nbsp;<span id="pg_year_passing"></span></div>
          <p class="p-4" id="pg_college_name"></p> 
          <div id="pg_nodata"></div>

  		</div>

  		<div class="line"></div>

  		<div class="col-div-8">
  			<div class="content-box">

  				<div class="head_right">Profile</div>
          <ul class="skills-2">
            <li><span id="summary_1"></span></li>
            <li><span id="summary_2"></span></li>
            <li><span id="summary_3"></span></li>
            <li><span id="summary_4"></span></li>
          </ul>

  				
  				<div class="head_right">Experience</div>
          <div id="get_experience_Details"></div>
  				

           
  			</div>  			
  		</div>

  		
  	</div>

</body>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script>
  $(document).ready(function(){

    var id=$("#user_id").val();

var data;
  $.ajax({
    url:"http://127.0.0.1:8000/api/resume_bulider_get_all_details/"+id,
    method:"get",
    success:function(response){

      // Imagge
      var img_val=response.data[0].photo;
      // console.log(img_val);
      $("img").attr('src','photo/'+img_val);
      // Imagge

      // user details
      $("#firstname").text(response.data[0].firstname);
      $("#lastname").text(response.data[0].lastname);
      $("#domain_get").text(response.data[0].domain);
      $("#email").text(response.data[0].email);
      $("#address").text(response.data[0].address);
      // user details
      
      // skills
      $("#skill_1").text(response.data[0].skill_1);
      $("#skill_2").text(response.data[0].skill_2);
      $("#skill_3").text(response.data[0].skill_3);
      $("#skill_4").text(response.data[0].skill_4);
      $("#skill_5").text(response.data[0].skill_5);
      $("#skill_6").text(response.data[0].skill_6);
      $("#skill_7").text(response.data[0].skill_7);
      // skills

      // Languages
      $("#language_1").text(response.data[0].language_1);
      $("#language_2").text(response.data[0].language_2);
      $("#language_3").text(response.data[0].language_3);      
      // Languages

      // College
      var ug_data=response.data[0].ug;
      // console.log(ug_data);
      if(ug_data!=''){
      $("#ug").text(response.data[0].ug);      
      $("#ug_year_passing").text('(' + response.data[0].ug_year_passing + ')');      
      $("#ug_college_name").text(response.data[0].ug_college_name);
    }
    else{
      $("#ug_nodata").text('No record available');
    }

     var pg_data=response.data[0].pg;
      // console.log(ug_data);
      if(pg_data!=''){
      $("#pg").text(response.data[0].pg);      
      $("#pg_year_passing").text('(' + response.data[0].pg_year_passing + ')');      
      $("#pg_college_name").text(response.data[0].pg_college_name);
    }
      // College

      // Profile summary
      $("#summary_1").text(response.data[0].summary_1);
      $("#summary_2").text(response.data[0].summary_2);
      $("#summary_3").text(response.data[0].summary_3);
      $("#summary_4").text(response.data[0].summary_4);
      // Profile summary

      // Experience
      var company_name=response.data[0].company_name;
      // console.log(company_name);
      if(company_name!=''){

        for(i=0; i<3; i++){
          var company_name1=response.data[i].company_name;
          console.log(company_name1);
          var get_experience_Details="<div><span id='company_name'>" + response.data[i].company_name + "</span><span id='fromyear'> ( " + response.data[i].fromyear+ " - </span><span id='toyear'>" + response.data[i].toyear + " ) </span></div><ul class='skills-2'><li><span id='expdet1'>" + response.data[i].expdet1 + "</span></li><li><span id='expdet2'>" + response.data[i].expdet2 + "</span></li><li><span id='expdet3'>" + response.data[i].expdet3 + "</span></li><li><span id='expdet4'>" + response.data[i].expdet4 + "</span></li></ul>";
        $("#get_experience_Details").append(get_experience_Details);

        }
      }
      // Experience
    

    } 
  });
 

});   
</script>

 

</script>
</html>