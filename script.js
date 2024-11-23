let heroBg = document.querySelector(".home .home-box");

const slideImgs = [
   "linear-gradient(90deg,rgba(0, 0, 0, 0.5) 40%,rgba(0, 0, 0, 0.01)),url(./assets/hero2.jpg)",
   "linear-gradient(90deg,rgba(0, 0, 0, 0.5) 40%,rgba(0, 0, 0, 0.01)),url(./assets/hero1.jpg)",
];

let currentSlide = 0;

function slideMove() {
   if (currentSlide === 1) {
      currentSlide = 0;
   } else {
      currentSlide++;
   }
   heroBg.style.backgroundImage = slideImgs[currentSlide];
   heroBg.style.transition = "all ease-in-out 0.3s";
}

let setInt = setInterval(slideMove, 4000);

const bars = document.querySelector(".bar"),
close = document.querySelector(".close"),
menu = document.querySelector(".menu");

bars.addEventListner("click", () => {
    menu.classList.add("active");
    gsap.from(".menu", {
      opacity: 0,
      duration: .3
    })

    gsap,from(".menu ul", {
      opacity: 0,
      x: -300
    })
});

close.addEventListner("click", () => {

   menu.classList.add("active")
});

// Chart.js Example for Revenue Over Time
var ctx = document.getElementById('revenueChart').getContext('2d');
var revenueChart = new Chart(ctx, {
    type: 'line',  // Line chart
    data: {
        labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul'], // X-axis labels (Months)
        datasets: [{
            label: 'Revenue',
            data: [5000, 6000, 5500, 7000, 8000, 7500, 9000],  // Y-axis data (Revenue)
            borderColor: '#4CAF50',
            backgroundColor: 'rgba(76, 175, 80, 0.2)',
            fill: true
        }]
    },
    options: {
        responsive: true,
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});
