function getregularTotal(){
    var regtotal;

    var regularchild=document.getElementById("regularchild").value;
    var child=regularchild*9;

    var regularadult=document.getElementById("regularadult").value;
    var adult=regularadult*13;

    var regularsenior=document.getElementById("regularsenior").value;
    var senior=regularsenior*10;

    regtotal=Math.round(child+adult+senior);
return regtotal;
}

function getcartTotal(){
var total=getregularTotal();
return total;
}

function calculateTotal(){
    var total=getcartTotal();
    var tax=Math.round((total*0.13)*100)/100;
    var totalTaxed=total+tax;
    var totalTaxed=Math.round((total+tax)*100)/100;
    var divobj=document.getElementById("subtotal");
    divobj.style.display="block";
    divobj.innerHTML="Subtotal: "+total;
    
    var divobj2=document.getElementById("tax");
    divobj2.style.display="block";
    divobj2.innerHTML="Tax: "+tax;
    
    var divobj3=document.getElementById("totalprice");
    divobj3.style.display="block";
    divobj3.innerHTML="Total: "+totalTaxed;

    return totalTaxed;
    }