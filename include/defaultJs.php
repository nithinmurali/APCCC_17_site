
		<script type="text/javascript">



	/*		if ( $(window).width() < 1500 ) {
				
			   	$(".menu").slideUp();
				
				$('.draggable').hide();
				interact('.draggable')
				  .draggable({
				    // enable inertial throwing
				    inertia: true,
				    // keep the element within the area of it's parent
				    restrict: {
				      restriction: "parent",
				      endOnly: true,
				      elementRect: { top: 0, left: 0, bottom: 1, right: 1 }
				    },

				  });
				
			};

*/


			$(window).load(function() {
			 /* 
			  $("#drag-me").dblclick(function(){
			   		$(".menu").slideToggle();
			  });	
*/
			  $(".content").click(function(){
			  	$(".has-sub").click();
			  });
				
			  $(".has-sub").mouseenter(function(){
			  		 $('.has-sub').not(this).each(function(){
			  			$(this).click();
				     });
			  });
			   //-----------------------------init flex slider -------------------------//
			   
			  $('.flexslider').flexslider({
			    animation: "slide",
			    
			  });
			  //---------------------------------------------------------------------------//
			/*	
			  $.get( "content/home.html" , function( data ) {
					  $( ".content" ).html( data );
					  //alert( "Home loaded" );
					});
*/
			  //-----------------------Menu Movement ---------------------------------//
			    $('#menu1').css("left", ( $(".flexslider").offset().left )/3);
			    $('#menu2').css("right", ( ($(window).width()-($(".flexslider").offset().left + $(".flexslider").width()))/3 ) );
			   
				function moveFloatMenu() {
					var menuOffset = menuYloc.top + $(this).scrollTop() + "px";
					$('.menu').animate({top:menuOffset},{duration:1600,queue:false},"easeOutQuint");
				}

			 
				menuYloc = $('.menu').offset();
				$(window).scroll(moveFloatMenu);
				moveFloatMenu();
				
				//------------------------------------menu anim---------------------------------------//
				
				$(".has-sub").mouseenter(function(){
				    $(this).css("-webkit-box-shadow"," 0px 0px 15px 5px rgba(255, 255, 190, .75)");
				    $(this).css("width","120px");
				    $(this).css("background","#e1f0fa");
				    $(this).css("border-color","#ffffff");
				    $(this).css("height","120px");
				    $(this).children().children().children("h2").css("display","none");
				    $(this).children().children().children("h3").css("opacity","0.8");
				    $(this).children().children().children("h3").css("color","#2676ac");
				    
				    $(this).next().fadeIn("slow");
				});

				$(".has-sub").click(function(){
				    $(this).css("-webkit-box-shadow"," inset 0px 0px 28px 2px rgba(186, 186, 169, 0.75)");
				    $(this).css("width","80px");
				    $(this).css("height","80px");
				    $(this).css("background","#fff");
				    $(this).css("border-color","#000000");
				    $(this).children().children().children("h2").css("display","block");
				    $(this).children().children().children("h3").css("opacity","0");
				   
				    $(this).next().fadeOut("slow");
				});

				/* ------------------------------------menu linking-----------------------------------------------*/
				$('.sub-link').on('click',function(){
					$('html, body').animate({
				        scrollTop:'350' }, 500);

					var text = $(this).text();
					var link  = text.toLowerCase() + ".html";
					window.location.href = text.toLowerCase() + ".php" ;

					/*$.get( "content/" + link , function( data ) {
					  $( ".content" ).html( data );
					  //alert( "Load was performed." );
					});*/

					$('.content').css('min-height','600px');
					$(this).parent().parent().prev().click();
				});
				
				$('.sub-ajax').on('click',function(){
					$('html, body').animate({
				        scrollTop:'350' }, 500);

					var text = $(this).text();
					var link  = text.toLowerCase() + ".html";
					//window.location.href = text.toLowerCase() + ".php" ;

					$.get( "content/" + link , function( data ) {
					  $( ".content" ).html( data );
					  //alert( "Load was performed." );
					});

					$('.content').css('min-height','600px');
					$(this).parent().parent().prev().click();
				});

				$('.ispage').on('click','a',function(){

					if ( $(window).scrollTop() > 400) {
						console.log("moving");
						$('html, body').animate({
					        scrollTop:'350' }, 500);						
					};
					var text = $(this).find("h2").text();
					text = text.toLowerCase();
					console.log(text);

					if (text == 'home') {window.location.href = "index.php" ;}
					else
					{
						var link  = text.toLowerCase() + ".php";
						window.location.href = text.toLowerCase() + ".php" ;

					}
						});

				$('.islink').on('click','a',function(){
					$('html, body').animate({
				        scrollTop:'350' }, 500);

					var text = $(this).find("h2").text();
					var link  = text.toLowerCase() + ".html";
					// window.location.href = text.toLowerCase() + ".html" ;
					

					$.get( "content/" + link , function( data ) {
					  $( ".content" ).html( data );
					  //alert( "Load was performed." );

					$('.content').css('min-height','600px');
					
					});
					
				});

			});
		</script>
