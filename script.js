var array=[];




function setCookie(name, value, daysToLive) {
    
    var cookie = name + "=" + encodeURIComponent(value);
    
    if(typeof daysToLive === "number") {
       
        cookie += "; max-age=" + (daysToLive*24*60*60);
        
        document.cookie = cookie;
        
    }
}
function getCookie(name) {
    
    var cookieArr = document.cookie.split(";");
    
    
    for(var i = 0; i < cookieArr.length; i++) {
        var cookiePair = cookieArr[i].split("=");
        
       
        if(name == cookiePair[0].trim()) {
            
            return decodeURIComponent(cookiePair[1]);
        }
    }
    
    
    return null;
}
function save_user_details(){
    
    var name = document.getElementById("nom_prenom").value;
    var age = document.getElementById("age").value;
    var mail = document.getElementById("mail").value;
    var phone = document.getElementById("phone").value;
    var immatriculation = document.getElementById("immatriculation").value;
    var poste = document.getElementById("poste").value;
    var anciennete = document.getElementById("anciennete").value;
    array.push(name);
    console.log(array);
    setCookie('name', name,7);
    setCookie('age', age,7);
    setCookie('mail', mail,7);
    setCookie('phone', phone,7);
    setCookie('immatriculation', immatriculation,7);
    setCookie('poste', poste,7);
    setCookie('anciennete',anciennete ,7);
    
}

function display_output(){
    console.log(getCookie('name'));
    const rows = [
        [
            getCookie('name'),getCookie('name'),getCookie('age'),getCookie('mail'),getCookie('phone'),getCookie('immatriculation'),getCookie('poste'),getCookie('anciennete')]
    ];
    let csvContent = "data:text/csv;charset=UTF-8" 
        + rows.map(e => e.join(",")).join("\n");
    var encodedUri = encodeURI(csvContent);
    var link = document.createElement("a");
    link.setAttribute("href", encodedUri);
    link.setAttribute("download", "resultat.csv");
    document.body.appendChild(link);
    
    link.click();
} 

function myForm(id) {
    var inputs = document.getElementsByTagName("checkbox1"); 
    var input = document.getElementById(id);
    console.log(inputs)
    
    for(var i = 0; i < inputs.length; i++) {
        if(inputs[i].id == input.id) { 
                inputs[i].checked = true; 

       }else {inputs[i].checked = false;}
    } 
    
}

function save_user_moyenne(){
    var note1 = document.getElementById("checkybox").value;
    var note2 = document.getElementById("checkybox1").value;
    var note3 = document.getElementById("checkybox2").value;
    var note4 = document.getElementById("checkybox3").value;
    var note5 = document.getElementById("checkybox4").value;
   

}