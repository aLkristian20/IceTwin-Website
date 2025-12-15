function openModal() {
    document.getElementById("overlay").style.display = "flex";
}

function closeModal() {
    document.getElementById("overlay").style.display = "none";
    document.getElementById("success").style.display = "none"; // Hide success message when closing
}

// Close modal when clicking on overlay
document.getElementById("overlay").addEventListener("click", function(event) {
    if (event.target === this) {
        closeModal();
    }
});

function sendMessage() {
    const name = document.getElementById("name").value.trim();
    const address = document.getElementById("address").value.trim();
    const contact = document.getElementById("contact").value.trim();
    const email = document.getElementById("email").value.trim();
    const date = document.getElementById("date").value.trim();
    const message = document.getElementById("message").value.trim();

    // CHECK IF ANY FIELD IS EMPTY
    if (!name || !address || !contact || !email || !date || !message) {
        alert("Please fill in all fields before sending.");
        return;
    }

    // SIMULATE EMAIL SEND
    setTimeout(() => {
        document.getElementById("success").style.display = "block";
    }, 500);
}
