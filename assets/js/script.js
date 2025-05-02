document.addEventListener('DOMContentLoaded', () => {
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
});

document.addEventListener('DOMContentLoaded', function() {
    const scrollButton = document.getElementById('scrollToTop');
    
    // Show/hide button on scroll
    window.addEventListener('scroll', function() {
        if (window.scrollY > 200) {
            scrollButton.classList.add('show');
        } else {
            scrollButton.classList.remove('show');
        }
    });

    // Smooth scroll to top
    scrollButton.addEventListener('click', function(e) {
        e.preventDefault();
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    });
});