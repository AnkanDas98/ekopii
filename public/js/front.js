async function postMessage(e) {
    e.preventDefault();
    const name = document.getElementById("contactName").value;
    const email = document.getElementById("contactEmail").value;
    const subject = document.getElementById("contactSubject").value;
    const message = document.getElementById("contactMessage").value;
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

const messageBtn = document.getElementById("messageBtn");
messageBtn && messageBtn.addEventListener("click", postMessage);
