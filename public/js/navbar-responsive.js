const navToggleBtn=document.querySelector(".navbar-nav-toggle");
 const navbarNav=document.querySelector(".navbar-navigation");
 const subMenuToggleBtn=document.querySelectorAll(".navbar-navigation .sub-menu-toggle");

 navToggleBtn.addEventListener("click",function () {
 	if(navbarNav.classList.contains("open")){
 		navbarNav.classList.remove("open");
 		navbarNav.removeAttribute("style");
 		hideSubMenu();
 	}
 	else{
 	 navbarNav.classList.add("open");
 	 navbarNav.style.maxHeight=	navbarNav.scrollHeight + "px";
 	}

 	navToggleBtn.classList.toggle("close");
 })

 for(let i=0; i<subMenuToggleBtn.length; i++){
    subMenuToggleBtn[i].addEventListener("click",function(){
     if(window.innerWidth < 1000){
    	const dropdown=this.parentElement;
    	const height=dropdown.querySelector(".sub-menu").scrollHeight;
    	const subMenu=dropdown.querySelector(".sub-menu");
    	// console.log(height)
    	if(subMenu.classList.contains("open")){
    		// if subMenu classList has class open then
    		subMenu.classList.remove("open");
    		subMenu.removeAttribute("style");
    		navbarNav.style.maxHeight=(navbarNav.scrollHeight - height) + "px";
    	}
       else{
         // if subMenu classList has no class open then
         subMenu.classList.add("open")
         subMenu.style.maxHeight=height + "px";
         navbarNav.style.maxHeight=(navbarNav.scrollHeight + height) + "px";
       }
     }

    })
 }

 function hideSubMenu(){
 	for(let i=0; i<subMenuToggleBtn.length; i++){
 		const dropdown=subMenuToggleBtn[i].parentElement;
 		dropdown.querySelector(".sub-menu").removeAttribute("style");
 		dropdown.querySelector(".sub-menu").classList.remove("open");
 }
}

 window.addEventListener("resize" , function(){
        navbarNav.classList.remove("open");
 		navbarNav.removeAttribute("style");
 		hideSubMenu();
 		navToggleBtn.classList.remove("close");
 })
