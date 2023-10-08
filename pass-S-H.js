const pswrdfield = document.querySelector(".from .field input[type='password'"),
toggleBtn =  document.querySelector(".from .field i");
toggleBtn.onclick = ()=>{
    if(pswrdfield.type == password)
    {
        passwordfield.type ="text"
        toggleBtn.classList.add("active");
    }else{
        pswrdfield.type = "password";
        toggleBtn.classList.remove("active");
    }
}
