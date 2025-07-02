const input = document.getElementById("message_input");
const form = document.getElementById("message_form");
const try_again = document.getElementById("try_again");
const approved = document.getElementById("approved");

const nameInput = document.getElementById("name");
const emailInput = document.getElementById("email");
const messageInput = document.getElementById("message");

if (form !== null) {
    form.addEventListener('submit', function(e) {
        approved.style.display = "block";
    });
}

if (input !== null) {
    input.addEventListener('keydown', function(e) {
        if(try_again.style.display = "block") {
            try_again.style.display = "none";
        }

        if (e.key === 'Enter') {
            const val = input.value.trim();

            if (val.toLowerCase() === 'send message') {
                form.requestSubmit();
            } else {
                try_again.style.display = "block";
            }

            input.value = '';
        }
    });
}
