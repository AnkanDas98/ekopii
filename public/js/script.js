function appendFeatures(e) {
    e.preventDefault();
    i++;
    const newNode = document.createElement("textarea");
    newNode.setAttribute("name", `addMoreInputFields[${i}][feature]`);
    newNode.classList.add("w-50");
    newNode.classList.add("form-control");
    newNode.style.marginBottom = "12px";
    newNode.setAttribute("placeholder", `Add Feature ${i + 1}`);
    document.getElementById("featureBox").appendChild(newNode, null);
}

const image_input = document.querySelector("#image");
if (image_input) {
    image_input.addEventListener("change", function () {
        const reader = new FileReader();
        reader.addEventListener("load", () => {
            const uploadImage = reader.result;
            document
                .querySelector("#showImage")
                .setAttribute("src", uploadImage);
        });
        reader.readAsDataURL(this.files[0]);
    });
}

const forms = document.querySelectorAll("#deleteForm");
const deletBtn = document.querySelectorAll(".deleteBtn");

forms.forEach((form) => {
    form.lastElementChild.addEventListener("click", (e) => {
        e.preventDefault();
        swal.fire({
            title: "Are you sure?",
            text: "Delete This Data?",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Yes, delete it!",
        }).then((result) => {
            if (result.isConfirmed) {
                swal.fire("Deleted Succesfully!");
                form.submit();
            } else {
                swal.fire("Your File is safe!");
            }
        });
    });
});

const featureBtn = document.getElementById("featureBtn");
let i = featureBtn.dataset.featureLength ? featureBtn.dataset.featureLength : 0;
featureBtn && featureBtn.addEventListener("click", (e) => appendFeatures(e));
