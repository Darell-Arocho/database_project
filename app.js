// Create a new IntersectionObserver object that takes in a callback function as a parameter.
const observer = new IntersectionObserver((entries) => {
    // Iterate through the entries and log each one to the console.
    entries.forEach((entry) => {
    console.log(entry);
    // If the entry is intersecting, add the 'show' class to the target element.
    if (entry.isIntersecting) {
    entry.target.classList.add('show');
    } else {
    // If the entry is not intersecting, remove the 'show' class from the target element.
    entry.target.classList.remove('show');
    }
    });
    });
    
    // Get all elements with the 'hidden' class and add the IntersectionObserver to each of them.
    const hiddenElements = document.querySelectorAll('.hidden');
    hiddenElements.forEach((el) => observer.observe(el));