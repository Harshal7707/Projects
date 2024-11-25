const temperatureField = document.querySelector('.temp_value');
const locationField = document.querySelector('.location_name');
const dateandTimeField = document.querySelector('.date_time');
const conditionField = document.querySelector('.condition_text');
const searchField = document.querySelector('.search_area');
const form = document.querySelector('form');
const errorMessage = document.querySelector('.error_message');

form.addEventListener('submit', searchForLocation);
let target = 'Lucknow';

const fetchResults = async (targetLocation) => {
    try {
        let url = `http://api.weatherapi.com/v1/current.json?key=aee85c98887641feaab71037242511&q=${targetLocation}&aqi=no`;
        const res = await fetch(url);
        if (!res.ok) {
            errorMessage.style.display = 'block';
            throw new Error('Failed to fetch data');
        }
        const data = await res.json();

        errorMessage.style.display = 'none'; // Hide error message if data is fetched successfully

        let locationName = data.location.name;
        let time = data.location.localtime;
        let temp = data.current.temp_c;
        let condition = data.current.condition.text;

        updateDetails(temp, locationName, time, condition);
    } catch (error) {
        console.error('Error fetching weather data:', error);
        errorMessage.style.display = 'block';
    }
};

function updateDetails(temp, locationName, time, condition) {
    let splitDate = time.split(' ')[0];
    let splitTime = time.split(' ')[1];
    let currentDay = getDayName(new Date(splitDate).getDay());

    temperatureField.innerText = `${temp}°C`;
    locationField.innerText = locationName;
    dateandTimeField.innerText = `${splitDate} ${currentDay} ${splitTime}`;
    conditionField.innerText = condition;
}

function searchForLocation(e) {
    e.preventDefault();
    const query = searchField.value.trim();
    if (!query) {
        alert('Please enter a location.');
        return;
    }
    target = query;
    fetchResults(target);
}

fetchResults(target);

function getDayName(number) {
    switch (number) {
        case 0:
            return 'Sunday';
        case 1:
            return 'Monday';
        case 2:
            return 'Tuesday';
        case 3:
            return 'Wednesday';
        case 4:
            return 'Thursday';
        case 5:
            return 'Friday';
        case 6:
            return 'Saturday';
        default:
            return '';
    }
}
