function openChat() {
    alert("Live chat will open here (you can integrate Tawk.to or similar).");
}
function showJob() {
    const country = document.getElementById('country').value;
    const jobBox = document.getElementById('jobBox');

    if (country === 'uk') {
        jobBox.classList.remove('hidden');
    } else {
        jobBox.classList.add('hidden');
        document.getElementById('uploadBox').classList.add('hidden');
    }
}

function showUpload() {
    document.getElementById('uploadBox').classList.remove('hidden');
}
function showUpload() {
    document.getElementById("jobDesc").innerText = "You selected: Customer Care Representative";
    // Show CV upload section
    document.getElementById("uploadBox").classList.remove("hidden");
}
