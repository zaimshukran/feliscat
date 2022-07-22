window.onload = choosePic;

var myPix = new Array("Content/Images/napcat.gif","Content/Images/walkcat.gif", "Content/Images/nyan.gif", "Content/Images/roll.gif", "Content/Images/titan.gif", "Content/Images/circle.gif");

function choosePic() {
     var randomNum = Math.floor(Math.random() * myPix.length);
     document.getElementById("loadingPicture").src = myPix[randomNum];
}