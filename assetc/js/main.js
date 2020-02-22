  document.addEventListener("keydown",function(e){
   const audio=document.querySelector(`audio[data-key="${e.keyCode}"]`);
   const key=document.querySelector(`.key[data-key="${e.keyCode}"]`);
   const sound=document.querySelector(`.key[data-key="${e.keyCode}"]>span.sound`);

   if(!audio) return //stop code if not found audio Elment;
   audio.currentTime=0//assgin audio elemnt currenttime to Zero
   audio.play();
   key.classList.add("playing");
  
  });
  const keys=document.querySelectorAll(".key");
  const keysound=document.querySelectorAll(".key>span.sound");

  keys.forEach(myfunction);

function myfunction(key){
key.addEventListener("transitionend",function(e){
  if(e.propertyName!=="transform") return//If not found transform propery then stop code 
    this.classList.remove("playing");
  this.classList.remove("spanClass");
})
}



/*
function playsound(e){
const audio=document.querySelector(`audio[data-key="${e.keyCode}"]`);
const key=document.querySelector(`.key[data-key="${e.keyCode}"]`);
if(!audio) return //stop function if not found audio Element
//if currenttime is zero than play audio over and over again with single key
audio.currentTime=0;

audio.play();
key.classList.add("playing");
}
window.addEventListener("keydown",playsound);

const keys=document.querySelectorAll(".key");

function removeTransition(e){

 if(e.propertyName!=="transform")return//skipe if not found transform

this.classList.remove("playing");
}

keys.forEach(key=>key.addEventListener("transitionend",removeTransition));
*/