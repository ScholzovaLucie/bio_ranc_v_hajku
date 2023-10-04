var web = "./styly.css";
var mobile = "./styly_mobil.css";
      
if(window.innerWidth<1000){
        document.getElementById("styly").href = mobile;
}
else{
        document.getElementById("styly").href = web; 
}


window.addEventListener("resize", myFunction=>{
      
if(window.innerWidth<1000){
        document.getElementById("styly").href = mobile;
}
else{
        document.getElementById("styly").href = web; 
}
});

var menu_open = false;
function menu(){
  if(menu_open==false){
      document.getElementById('left').style.display ="flex";
      document.getElementById('menu-toggle').classList.toggle('closeMenu');
      menu_open = true;
  }else{
      document.getElementById('left').style.display = "none";
      document.getElementById('menu-toggle').classList.remove('closeMenu');
      menu_open = false;
  }
  
}

var logo = document.getElementById("logo").style;
var typing = document.getElementById('typing').style;
var column_obrazek = document.getElementById('column_obrazek').style;
var column = document.getElementById('column').style;
window.addEventListener("load", (event) => {
        logo.display = "block";
        typing.display = "block";
        setTimeout(function(){     
                logo.opacity = "1" ;    
        },400);

        setTimeout(function(){     
                typing.opacity = "1";
        },700);
});
var el1 = document.getElementById("prvni").style;
var el2 = document.getElementById("druhy").style;
var el3 = document.getElementById("treti").style;
var el4 = document.getElementById("ctvrty").style;
var el5 = document.getElementById("paty").style;
var el6 = document.getElementById("sesty").style;
window.addEventListener("scroll", (event) => {
        column_obrazek.display = "block";
        column.display = "block";
 
        if(window.scrollY>120) setTimeout(function(){ 
                 column_obrazek.opacity = "1";
        },700);
        if(window.scrollY>120) setTimeout(function(){ 
                column.opacity = "1";
       },1000);
        
       if(window.scrollY>1000){
                setTimeout(function(){ 
                        el1.opacity = "1";
                },600);
                setTimeout(function(){ 
                        el2.opacity = "1";
                },900);
                setTimeout(function(){ 
                        el2.opacity = "1";
                },1200);
                setTimeout(function(){ 
                        el3.opacity = "1";
                },1500);
                setTimeout(function(){ 
                        el4.opacity = "1";
                },1800);
                setTimeout(function(){ 
                        el5.opacity = "1";
                },2100);
                setTimeout(function(){ 
                        el6.opacity = "1";
                },2400);
       } 
     
});