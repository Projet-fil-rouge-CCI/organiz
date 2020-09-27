window.addEventListener("load",(event)=>{

    fonctionCache()
    
   })
  
  
  document.querySelector('.fas').addEventListener("click",(event)=>{
  
    fonctionCache()
    
   })
  
  
  function fonctionCache() {
    let menu = document.getElementById("menu");
  
    if (menu.style.display === "none") {
      menu.style.display = "flex";
    } else {
      menu.style.display = "none";
    }
  }
      