var myurl = $("#myurl").attr("url");
var modal = document.getElementById("myModal");
var selected_id;
$("#m_deleteData").on("click", function() {
    modal.style.display = "none";
    window.location.href = myurl + "/deleteData/" + selected_id;
})
$("#m_cancel").on("click", function() {
    modal.style.display = "none";
})

function changeData(id) {
    window.location.href = myurl + "/updateData/" + id;
}

function deleteData(id) {
    selected_id = id;
    modal.style.display = "block";
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];
// When the user clicks the button, open the modal 

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
        modal.style.display = "none";
    }
    // When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}