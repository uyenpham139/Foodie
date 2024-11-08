const countrySelect = document.getElementById('country');
const stateSelect = document.getElementById('state');
const cityInput = document.getElementById('city');

countrySelect.addEventListener('change', () => {
    const selectedCountry = countrySelect.value;

    // Clear state and city options
    stateSelect.innerHTML = '<option value="">Select State/Province</option>';
    cityInput.disabled = true;

    // Populate state options based on selected country (replace with your actual data)
    if (selectedCountry === 'USA') {
        stateSelect.innerHTML += '<option value="CA">California</option>';
        stateSelect.innerHTML += '<option value="NY">New York</option>';
        // ... Add more states
        stateSelect.disabled = false;
    } else if (selectedCountry === 'Canada') {
        stateSelect.innerHTML += '<option value="ON">Ontario</option>';
        stateSelect.innerHTML += '<option value="QC">Quebec</option>';
        // ... Add more provinces
        stateSelect.disabled = false;
    }

    // Enable city input once a state/province is selected
    stateSelect.addEventListener('change', () => {
        cityInput.disabled = false;
    });
});