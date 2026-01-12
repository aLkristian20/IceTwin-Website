function openModal() {
    document.getElementById("overlay").style.display = "flex";
}

function closeModal() {
    document.getElementById("overlay").style.display = "none";
    document.getElementById("success").style.display = "none"; // Hide success message
}

// Close modal when clicking outside modal
document.getElementById("overlay").addEventListener("click", function(event) {
    if (event.target === this) {
        closeModal();
    }
});

function sendMessage(event) {
    event.preventDefault(); // Prevent default form submission for validation
    const full_name = document.getElementById("full_name").value.trim();
    const city = document.getElementById("city").value.trim();
    const contact_number = document.getElementById("contact-number").value.trim();
    const email_address = document.getElementById("email-address").value.trim();
    const message = document.getElementById("message").value.trim();

    if (!full_name || !city || !contact_number || !email_address || !message) {
        alert("Please fill in all fields before sending.");
        return;
    }

    // Simulate sending message
    setTimeout(() => {
        document.getElementById("success").style.display = "block";
    }, 500);
}

// ✅ Show success message if redirected from PHP
window.addEventListener('DOMContentLoaded', () => {
    const params = new URLSearchParams(window.location.search);
    if (params.get('success') === '1') {
        openModal();
        document.getElementById("success").style.display = "block";
    }
});
