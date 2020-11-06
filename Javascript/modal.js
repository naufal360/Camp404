function tampilModal(){
    document.getElementById('idModal').style.display='block';
}

function tutupModal(){
    document.getElementById('idModal').style.display='none';
}

function validate(){
    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;
        if (username == "user" && password == "123"){
            alert("Login Berhasil");
        }else{
            alert("Username dan Password anda salah!");
        }
}