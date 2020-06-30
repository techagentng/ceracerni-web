

// Get the modal
var modal = document.getElementById("myModal");

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = $('.myImg');
var modalImg = $("#img01");
var captionText = document.getElementById("caption");
$('.myImg').click(function(){
modal.style.display = "block";
var newSrc = this.src;
modalImg.attr('src', newSrc);
captionText.innerHTML = this.alt;
});

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
 modal.style.display = "none";
}

   // When the user clicks on img caption, close the modal
   captionText.onclick = function() {
 modal.style.display = "none";
}

// Listen for outside click event
window.addEventListener('click', clickOutside);

// When the user clicks on <span> (x), close the modal
function clickOutside(e) {
    if(e.target == modal){
        modal.style.display = "none";
    }         
}

