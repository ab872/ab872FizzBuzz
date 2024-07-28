<!--  fizzbuzz_js  -->


// start      fizzbuzz.js

//  var theBrowserIsUnknown = true;



 //    alert("fizzbuzz.js has loaded");



//  this JavaScript file attempts to override the slight differences
//  in page rendering by different browsers

//  the goal is to provide a more consistent cross-browser experience



if (isAndroidEdge) { 

//  	   alert("Edge under Android");

  // end Edge under Android
} 




if (isFirefox) { 
        //   begin      Firefox 

	if (isAndroid) {
           //   begin      Firefox under Android

		//  alert("using the Firefox browser
    //   under Android");

		//  theBrowserIsUnknown = false;

		if (isAndroid5) { 

			// begin     Firefox under Android5

			//  alert("using the Firefox browser
      //   under Android 5");

			//  theBrowserIsUnknown = false;


 			// end Firefox under Android5 

		} else {

			// all other Firefox under Android

				//  alert("using the Firefox browser
        //   under Android - all others");

				//  theBrowserIsUnknown = false;


				//  adjust the size of the
				//  Bootstrap icon
				//  id="BootstrapIcon"           
				document.getElementById("BootstrapIcon").style.width="64px"; 
				document.getElementById("BootstrapIcon").style.height="64px";



					
			// end     all other Firefox under Android
		}

           //   end        Firefox under Android
        } 




        if (isWin10) {
           //   begin      Firefox under Win10

			//  alert("using the Firefox browser
       //   under Win10");

			//  theBrowserIsUnknown = false;


			//  adjust the size of the
			//  Bootstrap icon
			//  id="BootstrapIcon"           
			document.getElementById("BootstrapIcon").style.width="64px"; 
			document.getElementById("BootstrapIcon").style.height="64px";


			//  id  =  "codeText"
			//  10px
			document.getElementById('codeText').style.fontSize="24px";

			//  id  =  "codeComments"
			//  10px
			document.getElementById('codeComments').style.fontSize="24px";





           //   end        Firefox under Win10
        }

	//   end        Firefox 
} 






if (isChrome) { 

	if (isAndroid) {
		//   begin    Chrome under Android

			//  alert("using the Chrome browser
       //   under Android");

			//  theBrowserIsUnknown = false;


			//  adjust the size of the
			//  Bootstrap icon
			//  id="BootstrapIcon"           
			document.getElementById("BootstrapIcon").style.width="64px"; 
           		document.getElementById("BootstrapIcon").style.height="64px";


           	//   end       Chrome under Android
         } else {
			//   begin    Chrome others

			//      alert("using the Chrome browser on others");

			//  theBrowserIsUnknown = false;


			//  alert("using the Chrome browser -  others   adjust Bootstrap icon");

			//  ***   doesnt seem to be working
			//  adjust the size of the
			//  Bootstrap icon
			//  id="BootstrapIcon"           
			document.getElementById("BootstrapIcon").style.width="64px"; 
			document.getElementById("BootstrapIcon").style.height="64px";

			//  alert("using the Chrome browser -  others   adjust Bootstrap icon   finished");



			//  id  =  "codeText"
			//  10px
			document.getElementById('codeText').style.fontSize="24px";

			//  id  =  "codeComments"
			//  10px
			document.getElementById('codeComments').style.fontSize="24px";


		//	alert("using the Chrome browser -  others   Intro adjust template rows");


	//  ***   doesnt seem to be working
	//  id     grid-containerIntro   grid-containerIntro
     	//  grid template rows     03vh 170vh 03vh
	//      document.getElementById('grid-containerIntro').style.gridTemplateRows = "03vh 25vh 03vh";

		//	alert("using the Chrome browser -  others   Intro adjust template rows   finished");






		//	alert("using the Chrome browser -  others   Reference adjust template rows");


	//  ***   doesnt seem to be working
	//  id     grid-containerReference
     	//  grid template rows     03vh 1630vh 03vh
	document.getElementById('grid-containerReference').style.gridTemplateRows = "03vh 1060vh 03vh";

		//	alert("using the Chrome browser -  others   Reference adjust template rows   finished");





	//    alert("using the Chrome browser -  others   compatibility adjustments finished");


    		//   end     Chrome others
		}

	//   end        Chrome
} 




if (isSafari) { 

	if (isiPad) { 

		//  alert("using the Safari browser on
    //   an iPad");

		//  theBrowserIsUnknown = false;


			//  adjust the size of the
			//  Bootstrap icon
			//  id="BootstrapIcon"           
			document.getElementById("BootstrapIcon").style.width="64px"; 
			document.getElementById("BootstrapIcon").style.height="64px";


	  //   end        isiPad
	} else if (isiPhone) { 

		//  alert("using the Safari browser on
    //   an iPhone");
		//  theBrowserIsUnknown = false;



	  //   end        isiPhone
	} else if (isMac) { 

		//  alert("using the Safari browser on a
    //   Mac");
		//  theBrowserIsUnknown = false;


	  //   end        isMac
	}

	//   end        Safari
} 





if (isEdge) { 

	 //      alert("using the old Edge browser");

	//  theBrowserIsUnknown = false;


			//  adjust the size of the
			//  Bootstrap icon
			//  id="BootstrapIcon"           
			document.getElementById("BootstrapIcon").style.width="64px"; 
			document.getElementById("BootstrapIcon").style.height="64px";



			//  id  =  "codeText"
			//  10px
			document.getElementById('codeText').style.fontSize="24px";

			//  id  =  "codeComments"
			//  10px
			document.getElementById('codeComments').style.fontSize="24px";


			//  alert("using the old Edge browser   Intro adjust template rows");


	//  ***   doesnt seem to be working
	//  id     grid-containerIntro   grid-containerIntro
     	//  grid template rows     03vh 170vh 03vh
	     //   document.getElementById('grid-containerIntro').style.gridTemplateRows = "03vh 25vh 03vh";

			//  alert("using the old Edge browser   Intro adjust template rows   finished");






		//	alert("using the old Edge browser    Reference adjust template rows");


	//  ***   doesnt seem to be working
	//  id     grid-containerReference
     	//  grid template rows     03vh 1630vh 03vh
	//      document.getElementById('grid-containerReference').style.gridTemplateRows = "03vh 500vh 03vh";

		//	alert("using the old Edge browser    Reference adjust template rows   finished");


	//      alert("using the old Edge browser    compatibility adjustments finished");


	//   end        old Edge
} 





if (isNewEdge) { 
	//   begin        new Edge

	//  alert("using the new Edge browser");

	//  theBrowserIsUnknown = false;



			//  adjust the size of the
			//  Bootstrap icon
			//  id="BootstrapIcon"           
			document.getElementById("BootstrapIcon").style.width="64px"; 
			document.getElementById("BootstrapIcon").style.height="64px";


			//  id  =  "codeText"
			//  10px
			document.getElementById('codeText').style.fontSize="24px";

			//  id  =  "codeComments"
			//  10px
			document.getElementById('codeComments').style.fontSize="24px";




	//   end        new Edge
}






//  if (theBrowserIsUnknown) { 
//	//  unknown browser
//
//	alert("You are using using an
//  unrecognized browser.");
//
//	//  end      unknown browser
//  } 




// end     fizzbuzz.js


