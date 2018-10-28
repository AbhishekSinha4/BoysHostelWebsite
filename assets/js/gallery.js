//VARIABLES

// var buttons=document.querySelectorAll("#pic-nav button"),
var	pages=document.querySelectorAll(".page"),
	images=document.querySelectorAll(".page div img"),
	viewB=document.querySelectorAll(".gallery_viewer"),
	pC=document.querySelector(".pic-container"),	
	pHead=document.querySelector(".pic-container #pic-header h2"),	
	closeButton=document.querySelector("#close-gallery"),	
	rightArrows=document.querySelectorAll(".icon-right"),
	leftArrows=document.querySelectorAll(".icon-left"),
	pageno=["one","two","three","four"],
	slideShow;

//BUTTON TO PAGES

// for(var i=0;i<buttons.length;i++){
// 	buttons[i].addEventListener("click", function(){
// 		nextPage(this.name);
// 		clearInterval(slideShow);
// 	})
// }

//SETTING IMAGES

//VIEW WITH INFINITE SLIDESHOW AND CLOSE GALLERY
for(var i=0;i<viewB.length;i++){
	viewB[i].addEventListener("click", function(){
		var blockName=this.id.split("_")[1].toUpperCase();
		for(var i=0;i<pages.length;i++){
			images[i].src="../assets/images/Blocks/"+blockName+"/IMG_"+String(i+1)+".jpg";
		}
		pHead.textContent=blockName+" Block Gallery";
		pC.classList.add("onscreen");
		slideShow=setInterval(function(){
			var here;
			for(var i=0;i<pages.length;i++){
				if(pages[i].classList.contains("onscreen"))here=i;
			}
			nextPage(pageno[(here+1)%pageno.length]);
		},2000)
	})
}
closeButton.addEventListener("click",function(){
	clearInterval(slideShow);
	pC.classList.remove("onscreen");
})

//PREVIOUS AND NEXT ARROW KEYS
for(var i=0;i<rightArrows.length;i++){
	rightArrows[i].addEventListener("click",function(){
		clearInterval(slideShow);
		nextPage(gotoPage(this.id,1));
	})
	leftArrows[i].addEventListener("click",function(){
		clearInterval(slideShow);
		nextPage(gotoPage(this.id,0));
	})
}




//FUNCTIONS


function gotoPage(n,opt){
	var cur=n.split("-")[2];
	if(opt===1){
		return pageno[(pageno.indexOf(cur)+1)%pageno.length];
	}
	if(opt===0){
		return pageno[(pageno.length+pageno.indexOf(cur)-1)%pageno.length];
	}
}
function nextPage(pageNumber){
		for(var i=0;i<pages.length;i++){
			pages[i].classList.remove("onscreen");
		}
		// for(var i=0;i<buttons.length;i++){
		// 	buttons[i].classList.remove("active");
		// }
		document.querySelector("#page-"+pageNumber).classList.add("onscreen");
		// document.querySelector("#pic-nav button[name='"+pageNumber+"']").classList.add("active");
	}