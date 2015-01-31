<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<link href="css/uploadfile.min.css" rel="stylesheet">

		<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.5.0/pure-min.css">
		<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.5.0/grids-responsive-min.css">
		
		<script type="text/javascript" src="js/jquery.js" ></script>
		<!-- <script type="text/javascript" src="js/menu.js" ></script> -->
		<script type="text/javascript" src="js/jquery.flexslider-min.js" ></script>
		<!--<script type="text/javascript" src="js/gallery_js.js" ></script>-->
		
		<script type="text/javascript" src="js/jquery.easing.js" ></script>
		<!-- <script type="text/javascript" src="js/cbpTooltipMenu.js" ></script> -->
		
		<link rel="stylesheet" type="text/css" href="css/style.css" />
		<link rel="stylesheet" type="text/css" href="css/flexslider.css" />
		
		<!-- <link rel="stylesheet" type="text/css" href="css/styles.css" /> -->
        <!--<script src="js/modernizr-2.6.2.min.js"></script>-->
		<link rel="stylesheet" type="text/css" href="css/demo.css" />   
        <link rel="stylesheet" type="text/css" href="css/style9.css" />
        
        <link rel="stylesheet" href="css/gallery_css.css"> 
        <!-- <link rel="stylesheet" type="text/css" href="css/style1.css" /> -->
        <link href='http://fonts.googleapis.com/css?family=Terminal+Dosis' rel='stylesheet' type='text/css' />
		<script src="js/jquery.uploadfile.js"></script>

		<!-- <link type="text/css" href="css/menu.css" rel="stylesheet" /> -->
	</head>

	<body class="back">
		
		
		<div class="container">
			
			
		<? @include("include/slider.php");  ?>
						
			<div  >
				
				<div class="col-md-12 middle content" style="padding:28px;height:900px;" >
					    <fieldset>
							
							<br><br>

						<form name="detilsForm" action="#" method="POST" id="detilsForm" class="pure-form pure-form-stacked">
					        <div class="pure-g">

					            <div class="pure-u-1 pure-u-md-1-3">
					                <label for="first-name">First Name*</label>
					                <input name="first-name" id="first-name" required type="text">
					            </div>

					            <div class="pure-u-1 pure-u-md-1-3">
					                <label for="last-name">Last Name*</label>
					                <input id="last-name" name="last-name" type="text">
					            </div>
					        </div>
					        <br>
					        <div class="pure-g">
					            <div class="pure-u-1 pure-u-md-1-3">
					                <label for="type">Type</label>
					                <select id="type" name = "type" class="pure-input-1-2">
					                    <option>Industry Delegate</option>
					                    <option>Student Delegate</option>
					                    <option>Others</option>
					                </select>
					            </div>

					        </div>
					        <br>
					        <div class="pure-g">

					            <div class="pure-u-1 pure-u-md-1-3">
					                <label id="insti_name" for="colleageName">Instution Name</label>
					                <input id="colleageNmae" name="colgName" type="text">
					            </div>
					            <div class="pure-u-1 pure-u-md-1-3">
					                <label for="email">E-Mail</label>
					                <input id="email" name="email" required type="email" required>
					            </div>

					        </div>
					        <br>
					        
					        
					        <div class="pure-g">

					            <div class="pure-u-1 pure-u-md-1-3">
					                <label for="title">Title of the paper*</label>
					                <input id="title" required name="title" type="text">
					            </div>
					            
					        </div>
					        <br>
					    	
					    	<div class="pure-g">
					            <div class="pure-u-1 pure-u-md-1-3">
					                <label for="paperType">Type</label>
					                <select id="paperType" name = "paperType" class="pure-input-1-2">
					                    <option>oral</option>
					                    <option>poster</option>
					                </select>
					            </div>

					        </div>
					        <br>

							<div class="pure-g">
									<div class="pure-u-1 pure-u-md-1-3">
						                <label for="first-name">Paper</label>
						                <div id="fileuploader">Select paper</div>
						            </div>									
								</div>
						
								<br><br><br>
					        <div class="pure-g">

					            <div class="pure-u-1 pure-u-md-1-3">
					                <label id="insti_name" for="colleageName">Presenting Author*</label>
					                <input id="colleageNmae" required name="presenting_author" type="text">
					            </div>
					        </div>
					        <br>	

					        <div id = "author-details-head" class="pure-g">

					            <div class="pure-u-1 pure-u-md-1-3">
					            	<label class ="field-head" >Author details</label>
					        		<div id="add-author" class="pure-button pure-button-primary"> + </div>
					            </div>

					        </div>
					        <br>

					        <div class="pure-g author1">

					            <div class="pure-u-1 pure-u-md-1-3">
					                <label for="a-name1">Name</label>
					                <input class="a-name" required name="a-name1" id="a-name1" type="text">
					            </div>

					            <div class="pure-u-1 pure-u-md-1-3">
					                <label for="a-affliation1">Affliation</label>
					                <input class="a-affliation" required name="a-affliation1" id='a-affliation1' type="text">
					            </div>

					            <div class="pure-u-1 pure-u-md-1-3">
					                <label for="a-email">email</label>
					                <input id="a-email1" required name="a-email1" id="a-email" type="email">
					            </div>

					        </div>

					        <br>
					        <button id="submit" class="pure-button pure-button-primary">Submit</button>
					    </fieldset>
					</form>			
				</div>
				
			
			</div>
			
		<? @include("include/footer.php"); ?>	
		
		<? @include("include/nav-bar.php"); ?>
		<? @include("include/defaultJs.php"); ?>
		
		<script type="text/javascript">

		$(document).ready(function()
		{
					
			var i =1;
			var uploadObj = $("#fileuploader").uploadFile({
				//url:"./uploadfile.php",
				multiple:false,
				autoSubmit:false,
				fileName:"paper",
				formData:  $("#detailsForm").serializeArray(),
				maxFileSize:1024*700,
				maxFileCount:1,
				allowedTypes:"pdf,docx,doc,odt,rtf,txt",
				showProgress:true,
				dynamicFormData: function()
				{
					//var data =  $("#detailsForm").serializeArray();
					var data ={"XYZ":1,"ABCD":2};
					return data;
				},
				showStatusAfterSuccess:true,
				dragDropStr: "<span><b>Drag and drop your file</b></span>",
				abortStr:"about",
				cancelStr:"cancel",
				doneStr:"done",
				multiDragErrorStr: "Error1",
				extErrorStr:"File type not allowed",
				sizeErrorStr:" max size exceded ",
				uploadErrorStr:"upload err",
				onError: function(files,status,errMsg)
					{
						alert(errMsg);
					},
				onSuccess:function(files,data,xhr)
				{
					//alert(data);
					//navigate to home
			        var obj = jQuery.parseJSON(data);
	                if (obj.err == 0) {
	                	alert(obj.err);
	                }
	                else if (obj.err == 1) 
	                {
						alert("your paper sucessfully submitted");
						window.location.href = "index.php";
	                }
				}

				});
			function validateEmail(email) { 
			    var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
			    return re.test(email);
			} 

			$('#add-author').click(function(event){
					event.preventDefault();
					i++;
					
					if (i < 5) {
						var newAuthor = '<div class="pure-g author' + i + '"><div class="pure-u-1 pure-u-md-1-3"><label for="a-name' + i + '">Name</label><input class="a-name" id="a-name' + i + '" name="a-name' + i + '" type="text"></div><div class="pure-u-1 pure-u-md-1-3"><label for="a-affliation' + i + '">Affliation</label><input class="a-affliation" id="a-affliation' + i + '" name="a-affliation' + i + '" type="text"></div><div class="pure-u-1 pure-u-md-1-3"><label for="a-email">email</label><input id="a-email' + i + '" name="a-email' + i + '" id="a-email" type="email"></div></div>';
						$('#author-details-head').after(newAuthor);
					};
			});

			$('#detilsForm').submit(function(event){
		
				event.preventDefault();
				var datastring = $("#detilsForm").serializeArray();
				var url1 = "./upload_file.php?first_name="+ $('#first-name').val() +"&last_name="+ $('#last-name').val() +"&paper=" + $("#title").val();
				//$('.ajax-file-upload > form').attr("action",url1);
				//uploadObj.update({url:url1});
				//$("#paperup").submit();
				//uploadObj.startUpload(url1);
				
				//console.log(datastring);
		    	if(uploadObj.selectedFiles != 1)
		    	{
		    		alert("please choose a file");
		    		console.log(uploadObj.selectedFiles);
		    		return false;
		    	}
				
				$.ajax({
				            type: "POST",
				            url: "submitPaper.php",
				            data: datastring,
				            success: function(data) {
				                //var obj = jQuery.parseJSON(data); if the dataType is not specified as json uncomment this
				                // do what ever you want with the server response
				                var obj = jQuery.parseJSON(data);
				                if (obj.err == 1) {

				                	alert(obj.errdata);

				                }else if (obj.err == 2) 
				                {
				                	alert ("it seems you have alreay uploaded paper, saving a new copy ...");
				                	url1 = url1 + "&new=1"
				                	uploadObj.startUpload(url1);
				                } else
				                {
					                
					                //console.log("uploading");
					                uploadObj.startUpload(url1);
					                //alert("registred sucesfully");
				                }
				                console.log(data);
				            },
				            error: function(){
				                  alert('sorry couldnt, submit data');
				            }
				        });
			});
		
		});


		</script>

	</body>
</html>