// import './bootstrap';

// import Alpine from 'alpinejs';

// window.Alpine = Alpine;

// Alpine.start();


// let text = document.querySelectorAll(".hero-text");

// let droite = document.querySelectorAll(".droite");
// let gauche = document.querySelectorAll(".gauche");
// let haut = document.querySelectorAll(".haut");

// let clickable = document.querySelectorAll(".clickable");

// let mouse = document.querySelector(".mouse");
// let mouseOpacity = true;
// const mouseText = document.querySelector(".mouse-text");

// // mouse cursor
// document.addEventListener("mousemove", function (e) {
//     if (mouseOpacity) {
//         mouse.style.opacity = 1;
//         mouseOpacity = false;
//     }
//     var x = e.clientX;
//     var y = e.clientY;
//     mouse.style.transform = `translate3d(calc(${e.clientX}px - 50%),
//     calc(${e.clientY}px - 50%), 0)`;
// });

let body = document.querySelector("body");
let navbar = document.querySelector(".navbar");

navbar.style.transition = "transform 400ms ease";
navbar.style.transform = "-100%";

function addEventArray(el, type, name, funct) {
    el.addEventListener(type, funct);
    let event = [el, type, funct, name];
    arrayEvents.push(event);
}

function removeEventArray(name) {
    arrayEvents.forEach((ev, index) => {
        if (ev[3] == name) {
            console.log(ev[1], ev[2]);
            ev[0].removeEventListener(ev[1], ev[2]);
            arrayEvents.splice(index, 1);
        }
    });
}

function removeAllEventArray() {
    arrayEvents.forEach((ev) => {
        ev[0].removeEventListener(ev[1], ev[2]);
    });
    arrayEvents = [];
}

function writer(el, word, timeMS) {
    let array = word.split("");

    let compteur = 0;

    let interval = setInterval(() => {
        el.innerHTML += array[compteur];

        compteur++;
        if (compteur == array.length) {
            clearInterval(interval);
        }
    }, timeMS);
}

let arrayEvents = [];
let welcomeMsg = document.querySelector(".parts-spliter");
let stopp = false;

let observerScroll = new IntersectionObserver(
    (entries) => {
        entries.forEach((entrie) => {
            if (entrie.isIntersecting) {
                body.style.backgroundColor = "#000";
                navbar.style.transform = "translateY(-100%)";
            }
        });
    },
    { threshold: 0.81 }
);

let observerScrollBarre = new IntersectionObserver(
    (entries) => {
        entries.forEach((entrie) => {
            if (!entrie.isIntersecting) {
                body.style.backgroundColor = "#fffef8";
                navbar.style.transform = "translateY(0)";

                if (!stopp) {
                    writer(welcomeMsg, "es dernières créations", 100);
                    stopp = true;
                }
            }
        });
    },
    { threshold: 0.8 }
);

cardCouture = document.querySelector(".hero-couture");
cardDurable = document.querySelector(".hero-durable");
cardTricot = document.querySelector(".hero-tricot");

addEventArray(cardCouture, "mouseenter", "cCoutureImg", () => {
    document.querySelector(".hero-cards-image-cout").style.animation =
        "cards-image-show-cout 1s 1 forwards";
});

addEventArray(cardCouture, "mouseleave", "cCoutureImg", () => {
    document.querySelector(".hero-cards-image-cout").style.animation =
        "cards-image-back-cout 1s 1 forwards";
});

addEventArray(cardDurable, "mouseenter", "cDurabImg", () => {
    document.querySelector(".hero-cards-image-durab").style.animation =
        "cards-image-show-durab 1s 1 forwards";
});

addEventArray(cardDurable, "mouseleave", "cDurabImg", () => {
    document.querySelector(".hero-cards-image-durab").style.animation =
        "cards-image-back-durab 1s 1 forwards";
});

addEventArray(cardTricot, "mouseenter", "cTricoImg", () => {
    document.querySelector(".hero-cards-image-trico").style.animation =
        "cards-image-show-trico 1s 1 forwards";
});

addEventArray(cardTricot, "mouseleave", "cTricoImg", () => {
    document.querySelector(".hero-cards-image-trico").style.animation =
        "cards-image-back-trico 1s 1 forwards";
});

// function drawer(el, tiempo, delay) {
//     const length = Math.floor(el.getTotalLength());

//     el.style.strokeDashoffset = length;
//     el.style.strokeDasharray = length;

//     setTimeout(() => {
//         el.style.transition = `stroke-dashoffset ${tiempo}s ${delay}s`;
//         el.style.strokeDashoffset = "0";
//     }, 50);
// }

trait1 = document.querySelector(".hero-trait1");

// drawer(trait1, "8", "1");

let heroCards = document.querySelector(".hero-cards-container");

observerScroll.observe(heroCards);
observerScrollBarre.observe(heroCards);

// let inputValue = document.querySelector(".hero-input-value");

// function setValueDurable() {
//     inputValue.value = "Durable";
// }

// function setValueCouture() {
//     inputValue.value = "Couture";
// }

// function setValueTricot() {
//     inputValue.value = "Tricot";
// }
