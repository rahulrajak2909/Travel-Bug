
    // Get the current date in the format yyyy-mm-dd
    function getCurrentDate() {
        const now = new Date();
        const year = now.getFullYear();
        const month = String(now.getMonth() + 1).padStart(2, '0');
        const day = String(now.getDate()).padStart(2, '0');
        return `${year}-${month}-${day}`;
    }

    // Set the minimum date for the date input field
    const dateInput = document.getElementById('booking-date');
    dateInput.min = getCurrentDate();

