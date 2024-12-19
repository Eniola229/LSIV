// Toggle dropdown visibility
function toggleDropdown(id) {
    const dropdown = document.getElementById(id);
    dropdown.classList.toggle("show"); // Toggle the show class
}

// Toggle mobile menu visibility
const mobileMenu = document.getElementById("mobile-menu");
const mobileMenuToggle = document.getElementById("mobile-menu-toggle");
const closeMenu = document.getElementById("close-menu");

mobileMenuToggle.addEventListener("click", () => {
    mobileMenu.classList.toggle("hidden"); // Toggle the mobile menu visibility
});

closeMenu.addEventListener("click", () => {
    mobileMenu.classList.add("hidden"); // Close the mobile menu
});
// Swipe functionality using JavaScript
const container = document.getElementById("card-container");

let isDown = false;
let startX;
let scrollLeft;
if (container) {
    container.addEventListener("mousedown", (e) => {
        isDown = true;
        container.classList.add("active");
        startX = e.pageX - container.offsetLeft;
        scrollLeft = container.scrollLeft;
    });

    container.addEventListener("mouseleave", () => {
        isDown = false;
        container.classList.remove("active");
    });

    container.addEventListener("mouseup", () => {
        isDown = false;
        container.classList.remove("active");
    });

    container.addEventListener("mousemove", (e) => {
        if (!isDown) return;
        e.preventDefault();
        const x = e.pageX - container.offsetLeft;
        const walk = (x - startX) * 3; // scroll-fast
        container.scrollLeft = scrollLeft - walk;
    });
}

const scrollLinkBtn = document.getElementById("scrollLink");
if (scrollLinkBtn)
    scrollLinkBtn.addEventListener("click", function (event) {
        event.preventDefault(); // Prevent default behavior

        // Get the target element by its ID
        const target = document.getElementById("impact");

        // Get the position of the target element
        const targetPosition =
            target.getBoundingClientRect().top + window.scrollY;

        // Set the scrolling duration (1000ms = 1 second)
        const duration = 1000;

        // Smooth scroll function
        const smoothScrollTo = (targetPosition, duration) => {
            const startPosition = window.scrollY;
            const distance = targetPosition - startPosition;
            let startTime = null;

            const animationScroll = (currentTime) => {
                if (startTime === null) startTime = currentTime;
                const timeElapsed = currentTime - startTime;
                const run = ease(
                    timeElapsed,
                    startPosition,
                    distance,
                    duration
                );
                window.scrollTo(0, run);

                if (timeElapsed < duration)
                    requestAnimationFrame(animationScroll);
            };

            // Easing function to smoothen the scroll effect
            const ease = (t, b, c, d) => {
                t /= d / 2;
                if (t < 1) return (c / 2) * t * t + b;
                t--;
                return (-c / 2) * (t * (t - 2) - 1) + b;
            };

            requestAnimationFrame(animationScroll);
        };

        // Call the smooth scroll function
        smoothScrollTo(targetPosition, duration);
    });

const scrollButton = document.getElementById("scrollBtn");
const carouselTrack = document.getElementById("carouselTrack");

// Function to determine the number of visible cards based on screen width
function getVisibleCards() {
    if (window.innerWidth >= 1024) {
        // Large screens (lg)
        return 3;
    } else if (window.innerWidth >= 768) {
        // Medium screens (md)
        return 2;
    } else {
        // Small screens (sm)
        return 1;
    }
}

const totalCards = document.querySelectorAll(".card-image-container").length;
let visibleCards = getVisibleCards(); // Get initial visible cards
const cardWidth = document.querySelector(".card-image-container")?.offsetWidth;
let maxScroll = (totalCards - visibleCards) * cardWidth; // Max scroll value
let scrollPosition = 0;

function updateMaxScroll() {
    visibleCards = getVisibleCards(); // Update visible cards
    maxScroll = (totalCards - visibleCards) * cardWidth; // Recalculate max scroll
}

function scrollOn() {
    // Scroll forward by the width of one card
    scrollPosition += cardWidth;

    // If we've reached the end, reset to the beginning
    if (scrollPosition > maxScroll) {
        scrollPosition = 0; // Go back to the first card
    }

    // Apply smooth scroll transition
    carouselTrack.style.transition = "transform 0.5s ease-in-out";
    carouselTrack.style.transform = `translateX(-${scrollPosition}px)`;
}
if (scrollButton) {
    scrollButton.addEventListener("click", scrollOn);
    document.addEventListener("keyup", (e) => {
        // Scroll if the arrow key is pressed
        if (e.key === "ArrowRight") {
            scrollOn();
        }
    });
}
// Update max scroll on window resize
window.addEventListener("resize", updateMaxScroll);
