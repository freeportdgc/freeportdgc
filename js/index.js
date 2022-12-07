// Hamburger Menu for smaller screens

const primaryNav = document.querySelector('.primary-navigation')
const hamburgerToggle = document.querySelector('.mobile-nav-hamburger')

hamburgerToggle.addEventListener('click', () => {
    const visibility = primaryNav.getAttribute('data-visible')

    if(visibility === "false") {
        primaryNav.setAttribute('data-visible', true)
        hamburgerToggle.setAttribute('aria-expanded', true)
    } else {
        primaryNav.setAttribute('data-visible', false)
        hamburgerToggle.setAttribute('aria-expanded', false)
    }
})

// This adds an alert to the top of the home screen. To display, erase the two slashes in front of the line below. To hide, put two slashes back

//document.getElementById("alert").style.display = "block"
