function checkname()
{
 var name = document.forms["signup"]["uname"].value;
 if(name)
 {
  $.ajax({
  type: 'post',
  url: 'checkdata.php',
  data: {
   u_name:name,
  },
  success: function (response) {
   $( '#un' ).html(response);
   if(response=="OK")	
   {
    return true;	
   }
   else
   {
    return false;	
   }
  }
  });
 }
 else
 {
  $( '#un' ).html("");
  return false;
 }
}

function checkemail()
{
  var email=document.forms["signup"]["eid"].value;	
 if(email)
 {
  $.ajax({
  type: 'post',
  url: 'checkdata.php',
  data: {
   user_email:email,
  },
  success: function (response) {
   $( '#em' ).html(response);
   if(response=="OK")	
   {
    return true;	
   }
   else
   {
    return false;	
   }
  }
  });
 }
 else
 {
  $( '#em' ).html("");
  return false;
 }
}
