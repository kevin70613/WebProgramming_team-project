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

request.onreadystatechange = updatePage;//狀態完成時所要執行的函式
request.open("GET", url, true);//開啟連線，選擇連線方式GET,POST
request.send(null);//送出

}

function updatePage() {
if (request.readyState == 4) {//完成狀態有好幾種，4代表資料傳回完成

alert(request.responseText);

}


}