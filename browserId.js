<!--  browserId_js  -->



// start      browserId.js

  //  alert("browserId.js has loaded");

   //  obtain the navigator info
   var whichAgent = navigator.userAgent;
 
   // these variables are instantiated to improve readability in if clauses
   //
   //        
   //        if (isChrome) { 
   //              
   //        }
   //
   //       is more readable than
   //
   //        if ( whichAgent.includes("Chrome") ) { 
   //              
   //        }
   //
   //
   //
   //
    var isFirefox = whichAgent.includes("Firefox"); 

    var isChrome = whichAgent.includes("Chrome"); 


    var isSafari = whichAgent.includes("Safari"); 

    //  Safari with LINE extensions???
    var isSafariLine = whichAgent.includes("Safari Line");


    var isiPad = whichAgent.includes("iPad"); 

    var isiPhone = whichAgent.includes("iPhone"); 

    var isMac = whichAgent.includes("Macintosh"); 



    //  old Edge on Win10
    var isEdge = whichAgent.includes("Edge"); 

    //  new Edge on Win10
    var isNewEdge = whichAgent.includes("Edg/"); 

    //  Edge on Android
    var isAndroidEdge = whichAgent.includes("EdgA/"); 


    var isWin10 = whichAgent.includes("Windows NT 10.0"); 


    var isAndroid =  whichAgent.includes("Android"); 

    var isAndroid4 =  whichAgent.includes("Android 4"); 

    var isAndroid5 =  whichAgent.includes("Android 5"); 

    var isAndroid6 = whichAgent.includes("Android 6"); 

    var isAndroid8 = whichAgent.includes("Android 8"); 

    var isAndroid9 = whichAgent.includes("Android 9");

    var isAndroid10 = whichAgent.includes("Android 10");

    var isAndroid11 = whichAgent.includes("Android 11");

    var isAndroid12 = whichAgent.includes("Android 12");



    //  var browsersFound = 0;



   //  there are some cases where there are duplicate matches
   //  these overrides correct the situation

    if (isChrome) { 
           isSafari = false;
    }


    if (isEdge) { 
           isChrome = false; 
    } 

    if (isNewEdge) { 
           isChrome = false; 
    } 

    if (isAndroidEdge) { 
           isChrome = false; 
    } 

    if (isSafariLine) { 
           isSafari = false; 
    } 
    



    //  get the device screen dimensions and orientation

    var deviceScreenHeight = screen.height;
    var deviceScreenWidth = screen.width;


    var deviceAvailScreenHeight = screen.availHeight;
    var deviceAvailScreenWidth = screen.availWidth;



    var deviceScreenOrientation = "";


    if (isEdge) { 

	deviceScreenOrientation = '*****';

    } else if (isSafari) { 

	deviceScreenOrientation = '*****';

   } else { 

	deviceScreenOrientation = screen.orientation.angle;
}



    var deviceWindowOrientation = "";


    if (isEdge) { 

		deviceWindowOrientation = '*****';

    } else if (isChrome) { 

		deviceWindowOrientation = '*****';

    } else { 

	    deviceWindowOrientation = window.orientation;

    }





    var deviceOrientationType = "";

    if (isEdge) { 

	deviceOrientationType = '*****';

    } else if (isSafari) { 

	deviceOrientationType = '*****';

    } else { 

	deviceOrientationType = screen.orientation.type;

    }



// end     browserId.js




