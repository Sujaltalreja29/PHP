function validate(){
    let a=document.forms["myform"]["name"].value;
    let b=document.forms["myform"]["pass"].value;
    let c=document.forms["myform"]["confirm"].value;
    if(a>='A' && a<='Z'){
    }
    else if(a>='a' && a<='z'){
    }
    else if(a>='0' && a<='9'){
    }
    else{
        alert("Username should be alphanumeric");
        return false;
    }
    if(b!=c){
        alert("Password not matching");
        return false;
    }
}