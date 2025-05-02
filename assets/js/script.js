document.addEventListener('DOMContentLoaded', () => {
    // Code blocks handling (your first block)
    const codeBlocks = document.querySelectorAll('code');

    codeBlocks.forEach(code => {
        code.addEventListener('click', async () => {
            try {
                await navigator.clipboard.writeText(code.textContent);
                const originalText = code.textContent;

                // Set background color based on class
                code.style.backgroundColor = code.classList.contains('correct')
                    ? '#2ecc71'
                    : code.classList.contains('wrong')
                        ? '#e74c3c'
                        : '#6c757d'; // Neutral color

                code.textContent = 'Copied!';

                setTimeout(() => {
                    code.textContent = originalText;
                    code.style.backgroundColor = '';
                }, 1000);
            } catch (err) {
                console.error('Failed to copy:', err);
                alert('Failed to copy code. Please manually copy it.');
            }
        });
    });

    // Add hover effect programmatically
    codeBlocks.forEach(code => {
        code.addEventListener('mousemove', (e) => {
            const rect = code.getBoundingClientRect();
            const x = e.clientX - rect.left;
            const y = e.clientY - rect.top;
            code.style.setProperty('--x', `${x}px`);
            code.style.setProperty('--y', `${y}px`);
        });
    });

    // Scroll to top functionality (your second block)
    const scrollButton = document.getElementById('scrollToTop');
    
    // Check if the button exists
    if (!scrollButton) {
        console.error('Scroll to top button not found!');
    } else {
        // Show/hide button on scroll
        window.addEventListener('scroll', function() {
            if (window.scrollY > 200) {
                scrollButton.classList.add('show');
            } else {
                scrollButton.classList.remove('show');
            }
        });

        // Button click event
        scrollButton.addEventListener('click', function(e) {
            e.preventDefault();
            scrollToTop();
        });
    }

    // Scroll to top function (defined outside event handler)
    function scrollToTop() {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    }

    // Using capturing phase for keyboard events (true as third parameter)
    window.addEventListener('keydown', function(e) {
        if (e.altKey && (e.key.toLowerCase() === 't' || e.keyCode === 84)) {
            e.preventDefault();
            e.stopPropagation();
            scrollToTop();
        }
    }, true);
});

// Additional global keyboard listener as a fallback
window.onkeydown = function(e) {
    if (e.altKey && (e.key.toLowerCase() === 't' || e.keyCode === 84)) {
        e.preventDefault();
        scrollTo({top: 0, behavior: 'smooth'});
        return false;
    }
};