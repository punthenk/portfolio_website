const input = document.getElementById("message_input");
const form = document.getElementById("message_form");
const try_again = document.getElementById("try_again");
const approved = document.getElementById("approved");

form.addEventListener('submit', function(e) {
    e.preventDefault();
    console.log("Form is submitted");
});

input.addEventListener('keydown', function(e) {
    if(try_again.style.display = "block") {
        try_again.style.display = "none";
    }

    if (e.key === 'Enter') {
        const val = input.value.trim();

        if (val.toLowerCase() === 'send message') {
            approved.style.display = "block";
            form.requestSubmit();
        } else {
            input.value = '';
            try_again.style.display = "block";
        }
    }
});
