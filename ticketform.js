
function getregularTotal(){
    var regtotal;

    var regularchild=document.getElementById("regularchild").value;
    var child=regularchild*8.99;

    var regularadult=document.getElementById("regularadult").value;
    var adult=regularadult*12.99;

    var regularsenior=document.getElementById("regularsenior").value;
    var senior=regularsenior*9.50;

    regtotal=child+adult+senior;
return regtotal;
}

function getthreedTotal(){
    var threetotal;

    var threechild=document.getElementById("3dchild").value;
    var child=threechild*11.99;

    var threeadult=document.getElementById("3dadult").value;
    var adult=threeadult*15.99;

    var threesenior=document.getElementById("3dsenior").value;
    var senior=threesenior*12.50;

    threetotal=child+adult+senior;
return threetotal;
}

function getavxTotal(){
    var avxtotal;

    var avxchild=document.getElementById("avxchild").value;
    var child=avxchild*13.99;

    var avxadult=document.getElementById("avxadult").value;
    var adult=avxadult*15.99;

    var avxsenior=document.getElementById("avxsenior").value;
    var senior=avxsenior*14.50;

    avxtotal=child+adult+senior;
    return avxtotal;
}

function getcartTotal(){
var total=getavxTotal()+getthreedTotal()+getregularTotal();
return total;
}

function calculateTotal(){
    var total=getcartTotal();
    var tax=Math.round((total*0.13)*100)/100;
    
    var totalTaxed=Math.round((total+tax)*100)/100;
    var divobj=document.getElementById("subtotal");
    divobj.style.display="block";
    divobj.innerHTML="Subtotal: "+total;
    
    var divobj2=document.getElementById("tax");
    divobj2.style.display="block";
    divobj2.innerHTML="Tax: "+tax;
    
    var divobj3=document.getElementById("total");
    divobj3.style.display="block";
    divobj3.innerHTML="Total: "+totalTaxed;
    
    return totalTaxed;
    }

    function hideTotal(){    
        var divobj = document.getElementById("checkoutsumm");    
        divobj.style.display='none'; 
        }
    