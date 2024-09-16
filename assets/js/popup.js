document.addEventListener("DOMContentLoaded", () => {
    // For handling opening and closing the popup
    const addUser = document.querySelector('.table-nav button');
    const popup = document.querySelector('#popup-overlay');
    const closeBtn = document.querySelector('.close-button span');

    addUser.addEventListener('click', (e) => {
        popup.style.display = 'block';
    });

    const closePopup = (el) => {
        el.addEventListener('click', (e) => {
            if (e.target === popup || el === closeBtn) {
                popup.style.display = 'none';
            }
        });
    };

    closePopup(closeBtn);
    closePopup(popup);
    // End handling opening and closing the popup

});