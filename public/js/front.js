async function postMessage(e) {
    e.preventDefault();

    const name = document.getElementById("contactName").value;
    const email = document.getElementById("contactEmail").value;
    const subject = document.getElementById("contactSubject").value;
    const message = document.getElementById("contactMessage").value;

    if (
        name.length === 0 &&
        email.length === 0 &&
        subject.length === 0 &&
        message.length === 0
    ) {
        document.getElementById("contactNameError").style.display = "inline";
        document.getElementById("contactEmailError").style.display = "inline";
        document.getElementById("contactSubjectError").style.display = "inline";
        document.getElementById("contactMessageError").style.display = "inline";
        return;
    }

    if (name.length < 4) {
        name.style.borderColor = "red";
        document.getElementById("contactNameError").style.display = "inline";
        return;
    }

    if (email.length < 4) {
        document.getElementById("contactEmailError").style.display = "inline";
        return;
    }

    if (!email.includes("@")) {
        document.getElementById("contactEmailError").style.display = "inline";
        return;
    }

    if (subject.length < 4) {
        document.getElementById("contactSubjectError").style.display = "inline";
        return;
    }

    if (message.length < 7) {
        document.getElementById("contactMessageError").style.display = "inline";
        return;
    }

    try {
        const response = await fetch("/contact", {
            method: "POST",
            headers: {
                "Content-Type": "application/json",
                "X-CSRF-TOKEN": document
                    .querySelector('meta[name="csrf-token"]')
                    .getAttribute("content"),
            },
            body: JSON.stringify({
                name,
                email,
                subject,
                message,
            }),
        });

        const data = await response.json();

        if (response.ok) {
            document.getElementById("contactName").value = "";
            document.getElementById("contactEmail").value = "";
            document.getElementById("contactSubject").value = "";
            document.getElementById("contactMessage").value = "";
            document.getElementById("contactNameError").style.display = "none";
            document.getElementById("contactEmailError").style.display = "none";
            document.getElementById("contactSubjectError").style.display =
                "none";
            document.getElementById("contactMessageError").style.display =
                "none";

            const Toast = Swal.mixin({
                toast: true,
                position: "top-end",
                showConfirmButton: false,
                timer: 3000,
            });

            Toast.fire({
                icon: "success",
                title: data.success,
            });
        }
    } catch (error) {
        console.log(error);
    }
}

document.getElementById("contactNameError").style.display = "none";
document.getElementById("contactEmailError").style.display = "none";
document.getElementById("contactSubjectError").style.display = "none";
document.getElementById("contactMessageError").style.display = "none";
const messageBtn = document.getElementById("messageBtn");
messageBtn && messageBtn.addEventListener("click", postMessage);
