// document.querySelector('.logo').textContent = 'Quiz Adda'; // Sets the logo text dynamically
// let menu = document.querySelector('#menu-icon');
// let navlist = document.querySelector('.navlist');

// // Toggle menu icon and navigation list
// menu.onclick = () => {
//     menu.classList.toggle('bx-x'); // Changes the menu icon to a close (X) icon
//     navlist.classList.toggle('open'); // Toggles the visibility of the navigation list
// };

// // Optional: Close the menu when a link is clicked (if navigation items collapse)
// navlist.onclick = () => {
//     menu.classList.remove('bx-x'); // Reset the icon back to menu
//     navlist.classList.remove('open'); // Close the nav list
// };



document.querySelector('.logo').textContent = 'Quiz Adda'; // Sets the logo text dynamically
let menu = document.querySelector('#menu-icon');
let navlist = document.querySelector('.navlist');

// Toggle menu icon and navigation list
menu.onclick = () => {
    menu.classList.toggle('bx-x'); // Changes the menu icon to a close (X) icon
    navlist.classList.toggle('open'); // Toggles the visibility of the navigation list
};

// Close the menu when a navigation link is clicked (if you want to collapse the menu after clicking a link)
navlist.onclick = (e) => {
    if (e.target.tagName === 'A') { // Ensure it's a link that's clicked
        menu.classList.remove('bx-x'); // Reset the icon back to menu
        navlist.classList.remove('open'); // Close the nav list
    }
};

