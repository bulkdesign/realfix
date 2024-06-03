(() => {
    if (!document.querySelectorAll('.animated-counter-realfix').length) return false;

    const counters = document.querySelectorAll('.animated-counter-realfix-number');
    const speed = 500;

    const animateCounter = (counter) => {
        const animate = () => {
            const value = +counter.getAttribute('data-target');
            const data = +counter.innerText;
            
            const time = value / speed;
            
            if (data < value) {
                counter.innerText = Math.ceil(data + time);
                setTimeout(animate, 2);
            } else {
                counter.innerText = value;
            }
        };
        
        animate();
    };

    const checkCountersInView = () => {
        const windowHeight = window.innerHeight;

        counters.forEach(counter => {
            // Get the position of the counter relative to the top of the document
            const rect = counter.getBoundingClientRect();

            // Check if the counter is within the viewport
            if (rect.top < windowHeight && rect.bottom >= 0) {
                // Animate the counter if it has not been animated yet
                if (!counter.hasAttribute('data-animated')) {
                    animateCounter(counter);
                    // Mark the counter as animated to prevent re-triggering
                    counter.setAttribute('data-animated', 'true');
                }
            }
        });
    };

    // Add an event listener for the 'scroll' event
    window.addEventListener('scroll', checkCountersInView);

    // Call the function initially in case some counters are already in view
    checkCountersInView();
})();