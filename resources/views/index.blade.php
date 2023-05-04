<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Machine Test</title>
</head>
<style>
    /*!
  Customs CSS stylesheet
 */



</style>
<body>
<!-- Search functionality -->
<nav class="navbar navbar-light justify-content-center mt-4">
    <form class="form-inline">
        
        <input class="form-control form-control-lg mr-sm-2" type="search" placeholder="Type a name/designation/department" aria-label="Search" id="search">
        <!-- <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button> -->
    </form>
</nav>
@foreach($users as $user)
    <div class="card m-3" style="width: 18rem;">
     
      <div class="card-body" id="1">
        <h5 class="card-title">{{$user->name}}</h5>
        <p class="card-text">{{$user->getDesignation->name}}</p>
        <a href="#" class="btn btn-primary">{{$user->getDepartment->name}}</a>
      </div>
    </div>
@endforeach    


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script>



$('#search').keyup(function (){
 
  let search=$("#search").val();
  let body=Array.from(document.getElementsByClassName('card-body'));

body.forEach((value)=>{
 let count=0; Array.from(document.getElementById(value.id).children).forEach((text)=>{
      if(text.innerHTML.indexOf(search) > -1)
        {
          count++;
        
          
        }
  
   if(count > 0)
     {
       text.parentNode.parentNode.style.display="block";
     }
   else
     {
       text.parentNode.parentNode.style.display="none";
     }
 })
})
  
 

})



</script>
</body>
</html>