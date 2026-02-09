const banner = document.getElementById('cookie-banner');

// Only show if the visitor hasn't accepted yet
if (!document.cookie.includes('cookies_accepted=true')) {
    banner.style.display = 'block';
} else {
    banner.style.display = 'none';
}

// Set cookie when OK button is clicked
banner.querySelector('button').onclick = function() {
    // Set cookie for 1 year
    document.cookie = "cookies_accepted=true; path=/; max-age=" + 60*60*24*365;
    banner.style.display = 'none';
};
