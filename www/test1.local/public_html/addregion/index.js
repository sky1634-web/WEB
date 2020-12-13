function showHide(element_id) 
{
    if (document.getElementById(element_id)) 
    { 
        var obj = document.getElementById(element_id); 
        if (obj.style.display != "block") 
        { 
            obj.style.display = "block"; 
        }
        else obj.style.display = "none";

    }
    else alert("Элемент с id: " + element_id + " не найден!"); 
}  
function validate(){

    var form = document.getElementById("block_id");
    var form1 = document.getElementById("block_id1");
    var form2 = document.getElementById("block_id2");
    var region = document.getElementById("reg");
    var kolvo = document.getElementById("kol");
    var otvetstveny = document.getElementById("otv");
    var cen = document.getElementById("center");
    var but = document.getElementById("butget");
    var id = document.getElementById("id");
    var id1 = document.getElementById("id1");
    var region1 = document.getElementById("reg1");
    var kolvo1 = document.getElementById("kol1");
    var otvetstveny1 = document.getElementById("otv1");
    var cen1 = document.getElementById("center1");
    var but1 = document.getElementById("butget1");
    if(!isNaN(id.value))
    {
        form1.classList.add("valid");
        form1.classList.remove("invalid");
        text5.innerHTML = "Поле заполнено верно";
        text5.style.color = "#00ff00";
        id.style.border= "2px solid green";
    }
    else{
        form1.classList.remove("valid");
        form1.classList.add("invalid");
        text5.innerHTML = "Количество заполнено неверно.Следует ввести цифры";
        text5.style.color = "#ff0000";
        id.style.border= "2px solid red";
    }
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
//FORM 3
if(!isNaN(id1.value))
{
    form2.classList.add("valid");
    form2.classList.remove("invalid");
    text6.innerHTML = "Поле заполнено верно";
    text6.style.color = "#00ff00";
    id1.style.border= "2px solid green";
}
else{
    form2.classList.remove("valid");
    form2.classList.add("invalid");
    text6.innerHTML = "Количество заполнено неверно.Следует ввести цифры";
    text6.style.color = "#ff0000";
    id1.style.border= "2px solid red";
}
if(!re.test(region1.value))
    {
        form2.classList.add("valid");
        form2.classList.remove("invalid");
        text7.innerHTML = "Поле заполнено верно";
        text7.style.color = "#00ff00";
        region1.style.border= "2px solid green";
    }
    else{
        form2.classList.remove("valid");
        form2.classList.add("invalid");
        text7.innerHTML = "Название региона должно содержать только русские буквы без постронних символов!";
        text7.style.color = "#ff0000";
        region1.style.border= "2px solid red";
    }
    if(!re.test(cen1.value))
    {
        form2.classList.add("valid");
        form2.classList.remove("invalid");
        text8.innerHTML = "Поле заполнено верно";
        text8.style.color = "#00ff00";
        cen1.style.border= "2px solid green";
    }
    else{
        form2.classList.remove("valid");
        form2.classList.add("invalid");
        text8.innerHTML = "Название административного центра должно содержать только русские буквы без постронних символов!";
        text8.style.color = "#ff0000";
        cen1.style.border= "2px solid red";
    }
    if(!isNaN(but1.value))
    {
        form2.classList.add("valid");
        form2.classList.remove("invalid");
        text11.innerHTML = "Поле заполнено верно";
        text11.style.color = "#00ff00";
        but1.style.border= "2px solid green";
    }
    else{
        form2.classList.remove("valid");
        form2.classList.add("invalid");
        text11.innerHTML = "Количество заполнено неверно.Следует ввести цифры";
        text11.style.color = "#ff0000";
        but1.style.border= "2px solid red";
    }
    if(!isNaN(kolvo1.value))
    {
        form2.classList.add("valid");
        form2.classList.remove("invalid");
        text9.innerHTML = "Поле заполнено верно";
        text9.style.color = "#00ff00";
        kolvo1.style.border= "2px solid green";
    }
    else{
        form2.classList.remove("valid");
        form2.classList.add("invalid");
        text9.innerHTML = "Количество заполнено неверно.Следует ввести цифры";
        text9.style.color = "#ff0000";
        kolvo1.style.border= "2px solid red";
    }
    if(!re.test(otvetstveny1.value))
    {
        form2.classList.add("valid");
        form2.classList.remove("invalid");
        text10.innerHTML = "Поле заполнено верно";
        text10.style.color = "#00ff00";
        otvetstveny1.style.border= "2px solid green";
    }
    else{
        form2.classList.remove("valid");
        form2.classList.add("invalid");
        text10.innerHTML = "Наименование ответственного состоит из русских букв, без посторонних символов";
        text10.style.color = "#ff0000";
        otvetstveny1.style.border= "2px solid red";
    }
    






        if (!re.test(otvetstveny.value) && !isNaN(kolvo.value)&&!re.test(region.value)&&!re.test(center.value)&&!isNaN(butget.value)&& !isNaN(id.value)&&!isNaN(id1.value)
        && !re.test(otvetstveny1.value) && !isNaN(kolvo1.value)&&!re.test(region1.value)&&!re.test(center1.value)&&!isNaN(butget1.value)) 
        {;return true;}
        else return false;
}
