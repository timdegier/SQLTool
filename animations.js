var body = document.getElementById('body');
var timeout = 2000;

function onactive(body){
  body.style.backgroundColor = "#5555ff";
};

function onkeydb(body){
  body.style.backgroundColor = "#55ffff";
};

function onkeypass(body){
  body.style.backgroundColor = "#ff4488";
};

function onkeyuser(body){
  body.style.backgroundColor = "#FF355E";
};

function onkeyhost(body){
  body.style.backgroundColor = "#FF9933";
};

function onopen(){
  document.getElementById('open').style.opacity = "0";
  document.getElementById('open').style.width = "0px";
  document.getElementById('open').style.left = "50%";
  document.getElementById('open').style.height = "0px";

  setTimeout(function wait(){
    document.getElementById('form').style.opacity = "1";
    document.getElementById('form').style.width = "300px";
    document.getElementById('form').style.left = "calc(50% - 150px)";
    document.getElementById('form').style.zIndex = "3";
    document.getElementById('form').style.height = "220px";
  },500);
};

function ifConnected(){
  var p = document.getElementById('connect');

  if(p.innerHTML == "Connected"){
    document.getElementById('body').style.backgroundColor = "#AAF0D1";


    document.getElementById('open').style.display = "none";

    document.getElementById('form2').style.opacity = "1";
    document.getElementById('form2').style.width = "300px";
    document.getElementById('form2').style.left = "calc(50% - 150px)";
    document.getElementById('form2').style.zIndex = "3";
    document.getElementById('form2').style.height = "140px";

    document.getElementById('disconnect').style.top = "300px";
  };
};

function connectedMessage(){
  var connect = document.getElementById('connect');

  connect.style.top = "10px";

  setTimeout(function wait(){connect.style.top = "-100px"}, 2000);
};
