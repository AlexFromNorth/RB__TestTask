  const controls=document.querySelector(".controls");
  const container=document.querySelector(".thumbnail-container");
  const allBox=container.children;
  const slider__start=document.querySelector(".slider-decoration__start");
  const slider__end=document.querySelector(".slider-decoration__end");
  const containerWidth=container.offsetWidth;
  const margin=32;
   var items=0;
   var totalItems=0;
   var jumpSlideWidth=0;


  // item setup per slide

 responsive=[
  {breakPoint:{width:0,item:1}}, //if width greater than 0 (1 item will show) 
  {breakPoint:{width:600,item:2}}, //if width greater than 600 (2  item will show) 
  {breakPoint:{width:1000,item:3}} //if width greater than 1000 (4 item will show) 
 ]

 function load(){
     for(let i=0; i<responsive.length;i++){
     	if(window.innerWidth>responsive[i].breakPoint.width){
     		items=responsive[i].breakPoint.item
     	}
     }
     start();
 }
 
 function start(){
 	 var totalItemsWidth=0
 	for(let i=0;i<allBox.length;i++){
 		 // width and margin setup of items
 		allBox[i].style.width=(containerWidth/items)-margin + "px";
 		allBox[i].style.margin=(margin/2)+ "px";
        totalItemsWidth+=containerWidth/items;
        totalItems++;
      }
      
      // thumbnail-container width set up
      slider__start.style.width=(containerWidth/items)-margin + "px";
      slider__end.style.width=(containerWidth/items)-margin + "px";
 	container.style.width=totalItemsWidth + "px";

 	// slides controls number set up
 	 const allSlides=Math.ceil(totalItems/items);
     const ul=document.createElement("ul");
        for(let i=1;i<=allSlides;i++){
          const li=document.createElement("li");
               li.id=i;
               li.innerHTML='';
               li.setAttribute("onclick","controlSlides(this)");
               ul.appendChild(li);
               if(i==1){
               	li.className="active";
               }
        }
        controls.appendChild(ul);
 }

    // when click on numbers slide to next slide
 function controlSlides(ele){
       // select controls children  'ul' element 
       const ul=controls.children;

       // select ul children 'li' elements;
      const li=ul[0].children
        
       
       var active;

       for(let i=0;i<li.length;i++){
       	if(li[i].className=="active"){
       		// find who is now active
       		active=i;
       		// remove active class from all 'li' elements
       		li[i].className="";
       	}
       }
       // add active class to current slide
       ele.className="active";

       var numb=(ele.id-1)-active;
          jumpSlideWidth=jumpSlideWidth+(containerWidth*numb);
       container.style.marginLeft=-jumpSlideWidth + "px";
 }

 let toggleContacts1 = document.querySelector('.header__logo_contacts1');
 let toggleContacts2 = document.querySelector('.header__logo_contacts2');
 let toggleBrand = document.getElementById('navbar-brand');
 let menuBtn = document.querySelector('.menu__btn');


function toggleClass(){
toggleContacts1.classList.toggle('display__none')
toggleContacts2.classList.toggle('display__none')
toggleBrand.classList.toggle('display__none')
menuBtn.classList.toggle('menu__btn--active')
}

window.onload=load();

