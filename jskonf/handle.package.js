/*
* Javascript Handle Form - ver 1.0
* Project PKTI - MIKROSKIL
* Created by Hendro Pramana Sinaga
* hendro.sinaga@hotmail.com
*/
function funA() { if (document.forms.signUpPv.submit.disabled) { document.forms.signUpPv.submit.disabled = false; } else { document.forms.signUpPv.submit.disabled = true; } } function valMail(docId) { var a = document.forms.signUpPv.newPass.value; var b = document.getElementById(docId); var pesan; if(a == b.value){pesan = "";} else{pesan = "Password tidak cocok...";} var span = document.createElement("span"); span.setAttribute("id", "info"); span.innerHTML = pesan; /*if (span.isEqualNode(document.getElementById("info")) || span == document.getElementById("info")) {document.forms.signUpPv.removeChild(document.getElementById("info")); document.forms.signUpPv.insertBefore(span, b.nextSibling);} else{document.forms.signUpPv.insertBefore(span, b.nextSibling);}*/ b.nextSibling.innerHTML = pesan;} 
function bDat(fname, lname, nKtp, uMail, uPass){}
var xhr = new XMLHttpRequest();
function validateReg(fom){var cekNama = (/([A-za-z]{3,})\s?([A-za-z]{3,})?/); var cekKTP = (/^[0-9]{16}$/); var cekMail = (/\w{4,}@([a-z]{4,15})\.((com|net|org|ac\.)?([a-z]{2,3}))$/); if (cekNama.test(document.signUpPv.firstName.value) == false){document.signUpPv.firstName.focus(); return false;} if (cekNama.test(document.signUpPv.lastName.value) == false) {document.signUpPv.lastName.focus(); return false;} if (cekMail.test(document.signUpPv.mail.value) == false){document.signUpPv.mail.nextSibling.innerHTML = "format e-mail : hendro.naga@email.com";} /*bDat(, , , , fom.newPass.value);*/
    fname = fom.firstName.value;
    lname = fom.lastName.value;
    //nikKtp = fom.nikKtp.value;
    mails = fom.mail.value;
    passU = fom.newPass.value;
    //var xhr = new XMLHttpRequest();
    var img = document.createElement("img");
    img.setAttribute("src", "img/animate.gif");
    var target = document.getElementById("info");
    //target.appendChild(img);
    xhr.onreadystatechange = function () {
        if (xhr.readyState == 4 && xhr.status == 200) {
            target.removeChild(img);
            var respon = xhr.responseText;
            if(respon == "00")
				alert("Terjadi kesalahan pada server");
			else
				location.href = "http://localhost/project/korupsi/"+respon;
        } else {
            target.appendChild(img);
        }

    }
    xhr.open("POST", "regu.php?fName="+fname+"&lastName="+lname+"&mail="+mails+"&pass="+passU, true);
    xhr.send(null);
}
function logProses(fom){var url = "regu.php?uml="; var a = fom.usernamePv.value; url += a; url += "&pass="; var b = fom.passPv.value; url += b; var xhrLog = new XMLHttpRequest();  xhrLog.onreadystatechange = function(){ if(xhrLog.readyState == 4 && xhrLog.status == 200){var se = xhrLog.responseText; if(se == "00"){var target = document.getElementById("infoLog"); if(target.hasChildNodes()){ target.removeChild(target.childNodes[0]); } var smalls = document.createElement("small"); smalls.innerHTML = "Email atau Password yang Anda berikan salah. Silahkan coba lagi!!!"; target.appendChild(smalls);} else{location.href="http://localhost/project/korupsi/"+se;}} else{ document.getElementById("infoLog").innerHTML = "Loading...";} }; xhrLog.open("POST", url, true); xhrLog.send(null); }
//function validateReg(fom){  }
/*Proses*/ function proses(docId){ /*document.getElementById("intro").style.display = "none";*/ $("#intro").slideUp(500); if (docId == "loginSession") {/*document.getElementById("logUser").style.display = "inline-block";*/ $("#logUser").slideDown(300);} else{$("#regUser").slideDown(500);} }; /*End Proses*/ /*prov einfo*/ function editInfo(nId, parentsId){var target = document.getElementById(nId).parentNode.nextSibling; teks= target.innerHTML; var input = document.createElement("input"); input.type = "text"; input.setAttribute("name", parentsId); input.setAttribute("id", nId); input.setAttribute("onblur", "saveInfo(this.id, this.name, this.value)"); target.innerHTML = null; target.appendChild(input);} /*end einfo*/ function saveInfo(nodeId, nama, val){var tar = document.getElementById(nodeId); var url = "../provider/proscon.php?getInfo="+nodeId+"&getName="+nama+"&getVal="+val; var tmp = tar.parentNode; var xhre = new XMLHttpRequest(); xhre.onreadystatechange = function(){ if(xhre.readyState == 4 && xhre.status == 200){ var respon = xhre.responseText; if(respon != "sk227h"){alert("Gagal!<br>Terjadi kesalahan pada saat update data.");} else{ tmp.firstChild.remove(); tmp.childNodes.innerHTML = val; location.reload(true); } } else{} }; xhre.open("POST", url, true); xhre.send(null); }