const pathName = window.location.pathname;
const apartmentsElement = document.querySelector('.apartments');
const meetingElement = document.querySelector('.meetings');

console.log(pathName.includes('apartments.php'))

if(pathName.includes('apartments.php')){
    apartmentsElement.classList.add('active-function');
}
else if(pathName.includes('meetings.php')){
    meetingElement.classList.add('active-function');
}
else if(pathName.includes('add-meeting.php')){
    meetingElement.classList.add('active-function');
}