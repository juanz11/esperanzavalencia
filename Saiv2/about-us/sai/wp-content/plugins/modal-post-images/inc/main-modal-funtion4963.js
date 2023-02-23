jQuery('body,html').append( "<div id=\"myModal\" class=\"modal\"><span class=\"close\">&times;</span><img class=\"modal-content\" id=\"img01\"><div id=\"caption\"></div></div>");

var allImg = document.querySelectorAll(".entry-content img");
var modal = document.getElementById('myModal');
var captionText = document.getElementById("caption");

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById('myImg');
var modalImg = document.getElementById("img01");
for (var i = 0; i < allImg.length; i++) {
    allImg[i].onclick = function(){
    modal.style.display = "block";
	modalImg.src = "";
    modalImg.src = this.src;
	captionText.innerHTML = this.alt;
}
}
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
    modal.style.display = "none";
	modalImg.src = "";
	captionText.innerHTML = "";
} 