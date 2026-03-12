document.addEventListener("DOMContentLoaded", function() {
    const cookiePopup = document.getElementById("cookie-popup");
    const acceptCookiesBtn = document.getElementById("accept-cookies");
    const rejectCookiesBtn = document.getElementById("reject-cookies");
    const setPreferencesBtn = document.getElementById("set-preferences");
    const preferencesModal = document.getElementById("preferences-modal");
    const closeModal = document.querySelector(".close");
    const savePreferencesBtn = document.getElementById("save-preferences");

    // Check if the cookiesAccepted cookie exists
    if (!getCookie("cookiesAccepted")) {
        // If the cookie doesn't exist, display the pop-up
        cookiePopup.style.display = "block";
    } else {
        // If cookies have been accepted, hide the preferences modal
        preferencesModal.style.display = "none";
    }

    // Check if the analyticsPreference and marketingPreference cookies exist
    const analyticsPreference = getCookie("analyticsPreference");
    const marketingPreference = getCookie("marketingPreference");

    if (analyticsPreference === "true") {
        document.getElementById("analytics-toggle").checked = true;
    }
    if (marketingPreference === "true") {
        document.getElementById("marketing-toggle").checked = true;
    }

    acceptCookiesBtn.addEventListener("click", function() {
        setCookie("cookiesAccepted", true, 365); // Set cookie to expire in 1 year
        cookiePopup.style.display = "none";
        preferencesModal.style.display = "none"; // Hide preferences modal if cookies accepted
    });

    rejectCookiesBtn.addEventListener("click", function() {
        setCookie("cookiesAccepted", false, 365); // Set cookie to expire in 1 year
        cookiePopup.style.display = "none";
        // Optionally, you may want to remove other cookies here
    });

    setPreferencesBtn.addEventListener("click", function() {
        preferencesModal.style.display = "block";
    });

    closeModal.addEventListener("click", function() {
        preferencesModal.style.display = "none";
    });

    window.addEventListener("click", function(event) {
        if (event.target === preferencesModal) {
            preferencesModal.style.display = "none";
        }
    });

    savePreferencesBtn.addEventListener("click", function() {
        // Save preferences to cookies
        setCookie("analyticsPreference", document.getElementById("analytics-toggle").checked, 365);
        setCookie("marketingPreference", document.getElementById("marketing-toggle").checked, 365);
        preferencesModal.style.display = "none"; // Hide modal after saving preferences
    });

    function setCookie(name, value, days) {
        const expires = new Date();
        expires.setTime(expires.getTime() + (days * 24 * 60 * 60 * 1000));
        document.cookie = name + "=" + value + ";expires=" + expires.toUTCString() + ";path=/";
    }

    function getCookie(name) {
        const cookieName = name + "=";
        const decodedCookie = decodeURIComponent(document.cookie);
        const cookieArray = decodedCookie.split(';');
        for(let i = 0; i < cookieArray.length; i++) {
            let cookie = cookieArray[i];
            while (cookie.charAt(0) === ' ') {
                cookie = cookie.substring(1);
            }
            if (cookie.indexOf(cookieName) === 0) {
                return cookie.substring(cookieName.length, cookie.length);
            }
        }
        return "";
    }
});