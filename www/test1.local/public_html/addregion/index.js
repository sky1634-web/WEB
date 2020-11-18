function showHide(element_id) 
{
    if (document.getElementById(element_id)) 
    { 
        var obj = document.getElementById(element_id); 
        if (obj.style.display != "block") 
        { 
            obj.style.display = "block"; 
        }

    }
    else alert("Элемент с id: " + element_id + " не найден!"); 
}  
function validate(){

    var form = document.getElementById("block_id");
    var region = document.getElementById("reg");
    var kolvo = document.getElementById("kol");
    var otvetstveny = document.getElementById("otv");
    var cen = document.getElementById("center");
    var but = document.getElementById("butget");
    var re = /[^А-Я^а-я^ ]/gu;
    if(!re.test(region.value))
    {
        form.classList.add("valid");
        form.classList.remove("invalid");
        text.innerHTML = "Поле заполнено верно";
        text.style.color = "#00ff00";
        region.style.border= "2px solid green";
    }
    else{
        form.classList.remove("valid");
        form.classList.add("invalid");
        text.innerHTML = "Название региона должно содержать только русские буквы без постронних символов!";
        text.style.color = "#ff0000";
        region.style.border= "2px solid red";
    }
    if(!re.test(cen.value))
    {
        form.classList.add("valid");
        form.classList.remove("invalid");
        text3.innerHTML = "Поле заполнено верно";
        text3.style.color = "#00ff00";
        cen.style.border= "2px solid green";
    }
    else{
        form.classList.remove("valid");
        form.classList.add("invalid");
        text3.innerHTML = "Название административного центра должно содержать только русские буквы без постронних символов!";
        text3.style.color = "#ff0000";
        cen.style.border= "2px solid red";
    }
    if(!isNaN(but.value))
    {
        form.classList.add("valid");
        form.classList.remove("invalid");
        text4.innerHTML = "Поле заполнено верно";
        text4.style.color = "#00ff00";
        but.style.border= "2px solid green";
    }
    else{
        form.classList.remove("valid");
        form.classList.add("invalid");
        text4.innerHTML = "Количество заполнено неверно.Следует ввести цифры";
        text4.style.color = "#ff0000";
        but.style.border= "2px solid red";
    }
    if(!isNaN(kolvo.value))
    {
        form.classList.add("valid");
        form.classList.remove("invalid");
        text1.innerHTML = "Поле заполнено верно";
        text1.style.color = "#00ff00";
        kolvo.style.border= "2px solid green";
    }
    else{
        form.classList.remove("valid");
        form.classList.add("invalid");
        text1.innerHTML = "Количество заполнено неверно.Следует ввести цифры";
        text1.style.color = "#ff0000";
        kolvo.style.border= "2px solid red";
    }
    if(!re.test(otvetstveny.value))
    {
        form.classList.add("valid");
        form.classList.remove("invalid");
        text2.innerHTML = "Поле заполнено верно";
        text2.style.color = "#00ff00";
        otvetstveny.style.border= "2px solid green";
    }
    else{
        form.classList.remove("valid");
        form.classList.add("invalid");
        text2.innerHTML = "Наименование ответственного состоит из русских букв, без посторонних символов";
        text2.style.color = "#ff0000";
        otvetstveny.style.border= "2px solid red";
    }
        if (!re.test(otvetstveny.value) && !isNaN(kolvo.value)&&!re.test(region.value)&&!re.test(center.value)&&!isNaN(butget.value)) 
        {;return true;}
        else return false;
}
