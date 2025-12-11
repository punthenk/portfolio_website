// Function to update cursor position for each input
function updateCursor(input, cursorElement) {
    const value = input.value;
    const isTextarea = input.tagName === 'TEXTAREA';

    if (isTextarea) {
        // Create a temporary div to measure wrapped text
        const tempDiv = document.createElement('div');
        tempDiv.style.font = window.getComputedStyle(input).font;
        tempDiv.style.width = input.offsetWidth + 'px';
        tempDiv.style.visibility = 'hidden';
        tempDiv.style.position = 'absolute';
        tempDiv.style.whiteSpace = 'pre-wrap';
        tempDiv.style.wordWrap = 'break-word';
        tempDiv.style.lineHeight = window.getComputedStyle(input).lineHeight;
        tempDiv.textContent = value + '|'; // Add marker at cursor position
        document.body.appendChild(tempDiv);

        // Find the position of the marker
        const range = document.createRange();
        const textNode = tempDiv.firstChild;
        if (textNode) {
            range.setStart(textNode, value.length);
            range.setEnd(textNode, value.length + 1);
            const rect = range.getBoundingClientRect();
            const containerRect = tempDiv.getBoundingClientRect();

            const relativeLeft = rect.left - containerRect.left;
            const relativeTop = rect.top - containerRect.top;

            cursorElement.style.left = (input.offsetLeft + relativeLeft) + 'px';
            cursorElement.style.top = (input.offsetTop + relativeTop) + 'px';
            cursorElement.style.transform = 'none';
        }

        document.body.removeChild(tempDiv);
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
