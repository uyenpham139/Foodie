const plus = document.querySelector('.plus');
const minus = document.querySelector('.minus');
const num = document.querySelector('.num');

const stockNum = stockQuantity;

let number = 0;

plus.addEventListener('click', () => {
    (number >= stockNum) ? plus.disabled = true : number++;
    num.innerText = number;
});

minus.addEventListener('click', () => {
    (number <= 0) ? minus.disabled = true : number--;
    num.innerText = number;
});

const stars = document.querySelectorAll('.stars .fa-star');
    
// Loop through all the stars and add the 'filled' class based on the rating
stars.forEach((star, index) => {
    if (index < Math.floor(rating)) {
        star.classList.add('filled'); // Full star
    } else if (index === Math.floor(rating) && rating % 1 !== 0) {
        star.classList.add('half-star'); // Half star for decimal values
    }
});

document.addEventListener('DOMContentLoaded', () => {
    const links = document.querySelectorAll('.toggle-link');
    const descriptionSection = document.getElementById('description-section');
    const reviewsSection = document.getElementById('reviews-section');

    links.forEach(link => {
        link.addEventListener('click', event => {
            event.preventDefault();
    
            // Remove 'active' class from all links
            links.forEach(l => l.classList.remove('active'));
    
            // Add 'active' class to the clicked link
            event.target.classList.add('active');
    
            const target = event.target.getAttribute('data-target');
    
            if (target === 'description') {
                descriptionSection.style.display = 'block';
                reviewsSection.style.display = 'none';
            } else if (target === 'reviews') {
                reviewsSection.style.display = 'block';
                descriptionSection.style.display = 'none';
            }
        });
    });
});

let totalRating = 0;
let ratingBasedOnStar = 0;

ratingCount.forEach(rating => {
    totalRating += rating.count;
    ratingBasedOnStar += rating.rating * rating.count;
});

ratingCount.forEach(rating => {
    let rating_progress = `
        <div class="rating-progress-value">
            <div class="rating-label">
                <p>${rating.rating}</p>
                <i class="fa-solid fa-star"></i>
            </div>
            <div class="progress">
                <div class="progress-bar" style="width: ${(rating.count / totalRating) * 100}%">
                </div>
            </div>                                        
            <p class="rating-count">${rating.count.toLocaleString()}</p>
        </div>
    `;

    document.querySelector('.rating-progress').innerHTML += rating_progress;
});

let ratingAverage = (ratingBasedOnStar / totalRating).toFixed(1);
document.querySelectorAll('.product-description .star-inner, .rating-avg .star-inner').forEach(starInner => {
    starInner.style.width = (ratingAverage / 5) * 100 + "%";
});

// Handling Reviews
reviewsWithUserInfo.forEach(review => {
    let reviewDetails = `
        <div class="comment-box">
            <div class="name-section">
                <div class="name">
                    <img src="assets/profile-avt.png" alt="profile image" class="img">
                    <h3>${review.user_info.firstname} ${review.user_info.lastname}</h3>
                </div>
                <p class="time">${review.review_date}</p>
            </div>
            <div class="star-outer">
                <div class="star-inner"></div>
            </div>
            <div class="comment-details">
                <p>${review.comment}</p>
            </div>
        </div>
    `;
    document.querySelector('.comments-section').innerHTML += reviewDetails;
});

const starInners = document.querySelectorAll('.comments-section .star-inner');

starInners.forEach((starInner, index) => {
    const review = reviewsWithUserInfo[index];  // Get the corresponding review
    const ratingWidth = (review.rating / 5) * 100 + "%";  // Calculate the width based on the rating
    starInner.style.width = ratingWidth;  // Set the width of the star-inner
});



