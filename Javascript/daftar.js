function daftar() {
    document.getElementById('idAwal').style.display='block';
}

function tutupForm() {
    document.getElementById('idAwal').style.display='none';
}

function validasi() {
    var nama = document.getElementById("namaanda").value;
    var nohp = document.getElementById("nomerhp").value;
        if (nama == "Aldi" && nohp == 1234567){
            alert("Pendaftaran berhasil")
        }else{
            alert("Pendaftaran gagal!")
        }
}