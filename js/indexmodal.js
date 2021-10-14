/*About Us*/
    document.getElementById("AboutUs").addEventListener("click",function(){
  document.getElementsByClassName("popup")[0].classList.add("active");
});
 
document.getElementById("dismiss-popup-btn").addEventListener("click",function(){
  document.getElementsByClassName("popup")[0].classList.remove("active");
});

/*Contact Us*/
document.getElementById("ContactUs").addEventListener("click",function(){
  document.getElementsByClassName("popup2")[0].classList.add("active");
});
 
document.getElementById("dismiss-popup2-btn").addEventListener("click",function(){
  document.getElementsByClassName("popup2")[0].classList.remove("active");
});

/*Login*/
document.getElementById("login").addEventListener("click",function(){
  document.getElementsByClassName("popup3")[0].classList.add("active");
});
 
document.getElementById("dismiss-popup3-btn").addEventListener("click",function(){
  document.getElementsByClassName("popup3")[0].classList.remove("active");
});