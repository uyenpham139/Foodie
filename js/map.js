document.addEventListener('DOMContentLoaded', () => {
    const mapIframe = document.getElementById('map');
    const addressItems = document.querySelectorAll('.address li');

    // Add click event listener to each address item
    addressItems.forEach(item => {
        item.addEventListener('click', () => {
            // Remove 'active' class from all items
            addressItems.forEach(el => el.classList.remove('active'));

            // Add 'active' class to the clicked item
            item.classList.add('active');

            // Get the address from the data attribute
            const address = item.getAttribute('data-address');

            // Update the map iframe's src attribute
            mapIframe.src = `https://maps.google.com/maps?q=${address}&output=embed`;
        });
    });
});