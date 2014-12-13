(function(){

	/*var button = document.getElementById('button'),
    wrapper = document.getElementById('nav-wrapper');
*/
    //open and close menu when the button is clicked
	var open = false;
	//button.addEventListener('click', handler, false);

	/*function handler(){
	  if(!open){
	    this.innerHTML = "Close";
	    classie.add(wrapper, 'opened-nav');
	  }
	  else{
	    this.innerHTML = "Menu";
		classie.remove(wrapper, 'opened-nav');
	  }
	  open = !open;
	}*/
	
	/*function closeWrapper(){
		classie.remove(wrapper, 'opened-nav');
	}
	*/

	$(".button").click(function(){
		 if(!open){
	    this.innerHTML = "Close";
	    $(this).next().addClass('opened-nav');
	  }
	  else{
	    this.innerHTML = "Menu";
		$(this).next().removeClass('opened-nav');
	  }
	  open = !open;
	});

})();
