document.addEventListener('DOMContentLoaded', function() {
    const dateInput = document.getElementById('date');
    const timeSelect = document.getElementById('time');

    dateInput.addEventListener('change', function() {
        const selectedDate = this.value;

        //for now, just generate dummy time slots
        timeSelect.innerHTML = '';

        const times = ['09:00 AM', '10:00 AM', '11:00 AM', '12:00 PM', '01:00 PM', '02:00 PM', '03:00 PM', '04:00 PM'];
        times.forEach(time => {
            const option = document.createElement('option');
            option.value = time;
            option.text = time;
            timeSelect.appendChild(option);
        });
    });
});