$(document).ready(function(){
 
   $('.case').click(function(){
    let temp = $(this).attr("id");
    if(temp !=""){
        url = "js/cmd/"+$(this).attr("id")+"/"+$(this).attr("id")+".html";
        $("#btn").attr("href",url);
    }
   })
  
  }); 
