


var currentdigit = document.getElementById('phoneNumberInput');

document.addEventListener('input', function(event) {
    const phoneNumberInput = event.target;
    const phoneNumber = phoneNumberInput.value;

    // Get the country code from the phone number input using libphonenumber-js
    const phoneNumberUtil = window.libphonenumber;
    const parsedPhoneNumber = phoneNumberUtil.parsePhoneNumberFromString(phoneNumber, 'ZZ');

    if (parsedPhoneNumber) {
        // Get the country code
        const countryCode = parsedPhoneNumber.country.toLowerCase();

        // Fetch the country flag dynamically
        fetch(`https://flagcdn.com/16x12/${countryCode}.png`)
            .then(response => {
                if (response.ok) {
                    // Display the country flag
                    const countryFlag = document.getElementById('countryFlag');
                    countryFlag.style.backgroundImage = `url('https://flagcdn.com/16x12/${countryCode}.png')`;
                }
            });

        // Display the complete number with country code
        const formattedPhoneNumber = '+' + parsedPhoneNumber.countryCallingCode + ' ' + parsedPhoneNumber.nationalNumber;
        phoneNumberInput.value = formattedPhoneNumber;

        // Validate the complete number
        const isValid = parsedPhoneNumber.isValid();
        const validationStatus = document.getElementById('validationStatus');
        validationStatus.textContent = isValid ? 'Valid phone number' : 'Invalid phone number';
        validationStatus.style.color = isValid ? 'green' : 'red';
    } else {
        // Clear the country flag and validation status if the phone number is invalid
        const countryFlag = document.getElementById('countryFlag');
        countryFlag.style.backgroundImage = '';
        const validationStatus = document.getElementById('validationStatus');
        validationStatus.textContent = '';
    }
});

document.getElementById('phoneNumberInput').addEventListener('keydown', function(event) {
    const phoneNumberInput = event.target;
    const phoneNumber = phoneNumberInput.value;
    const parsedPhoneNumber = window.libphonenumber.parsePhoneNumberFromString(phoneNumber, 'ZZ');
    if (parsedPhoneNumber && parsedPhoneNumber.nationalNumber.length >= 15 && event.key !== 'Backspace') {
        event.preventDefault();
    }
});
