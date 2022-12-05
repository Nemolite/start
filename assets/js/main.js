$(document).ready(function(){
   console.log('test')
});

let closeblog = document.querySelector('.title-my-blog')
let blog = document.querySelector('.my-blog')

closeblog.addEventListener('click',function(e){
    e.defaultPrevented
    if (!blog.style.display ||blog.style.display == "none")  {
        blog.style.display = "block"  
    
    } else {
        blog.style.display = "none"    
    }  
})