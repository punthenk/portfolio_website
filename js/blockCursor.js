// Function to update cursor position for each input
function updateCursor(input, cursorElement) {
    const value = input.value;
    const isTextarea = input.tagName === 'TEXTAREA';

    if (isTextarea) {
        // For textarea, calculate cursor position based on lines
        const lines = value.split('\n');
        const lastLine = lines[lines.length - 1];

        const tempSpan = document.createElement('span');
        tempSpan.style.font = window.getComputedStyle(input).font;
        tempSpan.style.visibility = 'hidden';
        tempSpan.style.position = 'absolute';
        tempSpan.style.whiteSpace = 'pre';
        tempSpan.textContent = lastLine || '';
        document.body.appendChild(tempSpan);

        const textWidth = tempSpan.offsetWidth;
        document.body.removeChild(tempSpan);

        // Calculate vertical position based on line number
        const lineHeight = parseInt(window.getComputedStyle(input).lineHeight) || 20;
        const topOffset = (lines.length - 1) * lineHeight;

        cursorElement.style.left = (input.offsetLeft + textWidth) + 'px';
        cursorElement.style.top = (input.offsetTop + topOffset) + 'px';
        cursorElement.style.transform = 'none';
    } else {
        // For regular inputs
        const tempSpan = document.createElement('span');
        tempSpan.style.font = window.getComputedStyle(input).font;
        tempSpan.style.visibility = 'hidden';
        tempSpan.style.position = 'absolute';
        tempSpan.style.whiteSpace = 'pre';
        tempSpan.textContent = value || '';
        document.body.appendChild(tempSpan);

        const textWidth = tempSpan.offsetWidth;
        document.body.removeChild(tempSpan);

        cursorElement.style.left = (input.offsetLeft + textWidth) + 'px';
        cursorElement.style.top = '50%';
        cursorElement.style.transform = 'translateY(-50%)';
    }

    cursorElement.style.display = 'block';
}

// Setup cursor tracking for all inputs
const inputs = [
    { input: document.getElementById('name'), cursor: document.getElementById('name-cursor') },
    { input: document.getElementById('email'), cursor: document.getElementById('email-cursor') },
    { input: document.getElementById('message'), cursor: document.getElementById('message-cursor') },
    { input: document.getElementById('message_input'), cursor: document.getElementById('submit-cursor') }
];

inputs.forEach(({ input, cursor }) => {
    // Hide cursor when not focused
    input.addEventListener('focus', () => {
        cursor.style.display = 'block';
        updateCursor(input, cursor);
    });

    input.addEventListener('blur', () => {
        cursor.style.display = 'none';
    });

    // Update cursor position on input
    input.addEventListener('input', () => {
        updateCursor(input, cursor);
    });

    // Initialize cursor position
    cursor.style.display = 'none';
});

document.getElementById('message_input').addEventListener('keydown', function(e) {
    if (e.key === 'Enter') {
        const value = this.value.trim();

        if (value !== 'send-message') {
            // Clear the input
            this.value = '';

            // Immediately update cursor position to the beginning
            const cursor = document.getElementById('submit-cursor');
            updateCursor(this, cursor);

            // Show error message or whatever you do here
            // document.getElementById('try_again').classList.remove('hidden');
        } else {
            // Handle successful submission
        }
    }
});
