console.from = document.querySelector("signup form ");
continueBtn = form.querySelector("button input");
errorText = form.querySelector("erroeText");
from.onsubmit = (e)=>{
    e.preventDevfault();
}
continueBtn.onclick = ()=>{
// lets start Ajax
let xhr = new XMLHttpRequest();
xhr.open("POST","login.php",true);
xhr.onload = ()=>{
    if(xhr.readyState === XMLHttpRequest.DONE)
    {
        if(xhr.status === 200){
            let data = xhr.response;
            console.log(data);
            if(data == success){
                location.href = "user.php";

            }else{
                errorText.style.display = "block";
                errorText.textContent = data;
            }

        }
    }
}
// We have to send the form Data throught Ajax to php
let formData = new formData(form);

xhr.send(formData);
}