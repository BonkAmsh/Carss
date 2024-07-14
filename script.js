document.addEventListener('DOMContentLoaded', () => {
    const loginBtn = document.getElementById('loginBtn');
    const signupBtn = document.getElementById('signupBtn');
    const loginModal = document.getElementById('loginModal');
    const signupModal = document.getElementById('signupModal');
    const closeLogin = document.getElementById('closeLogin');
    const closeSignup = document.getElementById('closeSignup');

    loginBtn.addEventListener('click', () => {
        loginModal.style.display = 'block';
    });

    signupBtn.addEventListener('click', () => {
        signupModal.style.display = 'block';
    });

    closeLogin.addEventListener('click', () => {
        loginModal.style.display = 'none';
    });

    closeSignup.addEventListener('click', () => {
        signupModal.style.display = 'none';
    });

    window.addEventListener('click', (event) => {
        if (event.target == loginModal) {
            loginModal.style.display = 'none';
        } else if (event.target == signupModal) {
            signupModal.style.display = 'none';
        }
    });

    // Add event listener to search button
    const searchButton = document.querySelector('.search-bar button');
    searchButton.addEventListener('click', () => {
        const searchTerm = document.querySelector('.search-bar input').value;
        alert(`Searching for: ${searchTerm}`);
    });
});
