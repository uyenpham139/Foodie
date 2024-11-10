var config = {
    cUrl: 'https://api.countrystatecity.in/v1/countries',
    ckey: 'NHhvOEcyWk50N2Vna3VFTE00bFp3MjFKR0ZEOUhkZlg4RTk1MlJlaA==' // API key
}

var countrySelect = document.querySelector('#countries'),
    stateSelect = document.querySelector('#states'),
    citySelect = document.querySelector('#cities');

// Load countries on page load
function loadCountries() {
    let apiEndPoint = config.cUrl;

    fetch(apiEndPoint, { headers: { "X-CSCAPI-KEY": config.ckey } })
        .then(response => response.json())
        .then(data => {
            data.forEach(country => {
                const option = document.createElement('option');
                option.value = country.name;
                option.textContent = country.name;
                option.setAttribute('data-iso2', country.iso2);
                countrySelect.appendChild(option);
            });
        })
        .catch(error => console.error('Error loading countries:', error));

    // Disable state and city select initially
    stateSelect.disabled = true;
    citySelect.disabled = true;
}

// Load states based on the selected country
function loadStates() {
    // const selectedCountryCode = countrySelect.value;
    const selectedCountryOption = countrySelect.selectedOptions[0]; // Get the selected option
    const selectedCountryCode = selectedCountryOption ? selectedCountryOption.getAttribute('data-iso2') : '';

    // Disable city select until state is selected
    citySelect.disabled = true;

    // Clear previous options
    stateSelect.innerHTML = '<option value="">Select State</option>';
    citySelect.innerHTML = '<option value="">Select City</option>';

    if (selectedCountryCode) {
        stateSelect.disabled = false; // Enable state select
        stateSelect.style.pointerEvents = 'auto';

        fetch(`${config.cUrl}/${selectedCountryCode}/states`, { headers: { "X-CSCAPI-KEY": config.ckey } })
            .then(response => response.json())
            .then(data => {
                data.forEach(state => {
                    const option = document.createElement('option');
                    option.value = state.name;
                    option.textContent = state.name;
                    option.setAttribute('data-iso2', state.iso2);
                    stateSelect.appendChild(option);
                });
            })
            .catch(error => console.error('Error loading states:', error));
    } else {
        // If no country is selected, keep the state and city select disabled
        stateSelect.disabled = true;
        citySelect.disabled = true;
    }
}

// Load cities based on the selected state
function loadCities() {
    // const selectedCountryCode = countrySelect.value;
    // const selectedStateCode = stateSelect.value;
    const selectedCountryOption = countrySelect.selectedOptions[0]; // Get the selected option
    const selectedCountryCode = selectedCountryOption ? selectedCountryOption.getAttribute('data-iso2') : '';
    const selectedStateOption = stateSelect.selectedOptions[0]; // Get the selected option
    const selectedStateCode = selectedStateOption ? selectedStateOption.getAttribute('data-iso2') : '';

    // Clear previous city options
    citySelect.innerHTML = '<option value="">Select City</option>';

    if (selectedStateCode) {
        citySelect.disabled = false; // Enable city select
        citySelect.style.pointerEvents = 'auto';

        fetch(`${config.cUrl}/${selectedCountryCode}/states/${selectedStateCode}/cities`, { headers: { "X-CSCAPI-KEY": config.ckey } })
            .then(response => response.json())
            .then(data => {
                data.forEach(city => {
                    const option = document.createElement('option');
                    option.value = city.name;
                    option.textContent = city.name;
                    option.setAttribute('data-iso2', city.iso2);
                    citySelect.appendChild(option);
                });
            })
            .catch(error => console.error('Error loading cities:', error));
    }
}

// Event listeners for country, state, and city select changes
countrySelect.addEventListener('change', loadStates);
stateSelect.addEventListener('change', loadCities);

// Initialize countries on page load
window.onload = loadCountries;

