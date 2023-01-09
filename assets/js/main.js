$(document).ready(function(){
   console.log('test')
});

let closeblog = document.querySelector('.title-my-blog')
let blog = document.querySelector('.my-blog')

closeblog.addEventListener('click',function(e){
    e.defaultPrevented
    if (!blog.style.display ||blog.style.display == "none")  {
        blog.style.display = "block"
        closeblog.classList.remove("onclose");
        closeblog.classList.add("onopen");
 
    
    } else {
        blog.style.display = "none"
        closeblog.classList.remove("onopen");
        closeblog.classList.add("onclose");    
    }  
})