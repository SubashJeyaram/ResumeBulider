<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Resume Bulider</title>
    <link href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </head>
<style>
.main{
  font-family: serif;
  margin-bottom: 5%;
}
h3{
  margin-bottom: 4%;
  margin-top: 4%; 
  margin-left: 37%;
}
.card_btn{
    display: block;
    width: 100%;
    color: white;
    border: none;
    border-radius: 4px;
}
.card{
  width: 30%;
  margin-top: 5%;
  margin-left: 10%;
}
</style>
<body>
 <div class="card">  
  <input type="text" name="user_id" id="user_id" value="{{$details->randomId}}" hidden>
  <img src="{{asset('photo/subash_resume_template2.PNG')}}" class="card-img-top" alt="...">
  <div class="card-body">  
    <a href="{{route('resume_download_pdf',$details->randomId)}}"><button type="submit" class="btn card_btn btn-primary card_btn" id="btnDownload">Download As PDF</button> </a>
  </div>
  </body>

</html>

</html>