let pass1="";
let pass2="";
let status = false;
const submitForm = ()=>{   
    let inputField = document.querySelectorAll('.validation');
    let errorField = document.querySelectorAll('.errorCheck');
    for(let i=0; i<inputField.length; i++){
        let fieldName = inputField[i].name;
        if(inputField[i].value == ""){
            // alert('not ok');
            errorField[i].innerHTML=`Please Fill The ${fieldName} Field !`;
            errorField[i].style.color="red";
            return false;
        }
            errorField[i].innerHTML="";

            if (inputField[i].name == 'pass') {

                 if(inputField[i].value.length > 8 && inputField[i].value.length < 13){
                    pass1 = inputField[i].value;
                 }else{
                    errorField[i].innerHTML="password length between 8 to 13 charectors";
                    errorField[i].style.color="red";
                    return false;
                 }

            }
            if(inputField[i].name == 'pass1'){
                if(inputField[i].value.length > 8 && inputField[i].value.length < 13){
                    pass2 = inputField[i].value;
                    if(pass1 != pass2){
                        errorField[i].innerHTML="Confirm Password not matched !";
                        errorField[i].style.color="red";
                        return false;
                    }
                }else{
                    errorField[i].innerHTML="password length between 8 to 13 charectors";
                    errorField[i].style.color="red";
                    return false;
                }
            }

            if(inputField[i].type == "checkbox"){
                if(!inputField[i].checked){
                    errorField[i].innerHTML="Please Checked The Term and Conditions Filed !";
                    errorField[i].style.color="red";
                    return false;
                }
            }
        
    }
}
