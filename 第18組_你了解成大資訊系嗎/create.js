var request ;
function creatRequestObj(){
var request = null;
try {
//IE7,or non-IE browser
request = new XMLHttpRequest();
} catch (trymicrosoft) {
try {
//IE browser
request = new ActiveXObject("Msxml2.XMLHTTP");
} catch (othermicrosoft) {
try {
//other IE browser
request = new ActiveXObject("Microsoft.XMLHTTP");
} catch (failed) {
//not support
request = null;
}
}
}
return request;
}
//Send data to Server
function sendData(n) {


request = creatRequestObj();

if (request == null){

alert("Error creating request object!");
}

var url = "ajax.php";
url = url +"?pwd="+n;

request.onreadystatechange = updatePage;//���A�����ɩҭn���檺�禡
request.open("GET", url, true);//�}�ҳs�u�A��ܳs�u�覡GET,POST
request.send(null);//�e�X

}

function updatePage() {
if (request.readyState == 4) {//�������A���n�X�ءA4�N���ƶǦ^����

alert(request.responseText);

}


}