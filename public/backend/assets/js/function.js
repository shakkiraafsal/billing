  function checkDisability()
            {
                var x =document.getElementById('etype').value;
                var y =document.getElementById('enroll_emptype');
                var z =document.getElementById('check');

               if(x === 'Other')
               {

                z.style.display = "block"; 
               document.getElementById('enroll_emptype').value= "";
                
               }


            else
            {
               
           z.style.display = "none"; 
           document.getElementById('enroll_emptype').value= x;
                
            }
        }

function adreesSimilarity() 
{
   
    var chekBox=document.getElementById("myCheck");
    var pm1 =document.getElementById("enroll_officeaddress").value;
    var cm1=document.getElementById("enroll_address");
    var clr=document.getElementById("color");
    if(chekBox.checked==true)
    {
    if(pm1=="")
    {
        alert("Please fill all the required address field.");
        chekBox.checked=false;
    }
    else
    {
     cm1.value=pm1;
     
     clr.style.color="blue";
    }
    }
    else
    {
     cm1.value="";
     
     clr.style.color="black";
    } 
}

