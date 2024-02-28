/* alert("Hello") */

let work = document.querySelector("#work")

let boxContainer =document.querySelector("#Vic")
function showPopup() {
    boxContainer.style.display ="block";
}

let childHood =document.querySelector("#Glo")

let currentPics =document.querySelector("#Ree")

let friendsPics =document.querySelector("#Oyin")

let familyPics =document.querySelector("#Den")

function showGallery(){
    childHood.style.display = "block";
    currentPics.style.display ="block";
}

function showAlbum(){
    work.style.display="block";
    friendsPics.style.display = "block";
    familyPics.style.display ="block";
    /* boxContainer.style.display ="none" */
}


