//Page loader

(function () {
    "use strict";

    const select = (el, all = false) => {
        el = el.trim();
        if (all) {
            return [...document.querySelectorAll(el)];
        } else {
            return document.querySelector(el);
        }
    };

    let preloader = select('#preloader');
    if (preloader) {
        window.addEventListener('load', () => {
            preloader.remove();
        });
    }
})();

//Fadein from sides animation

const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
        console.log(entry);
        if (entry.isIntersecting) {
            entry.target.classList.add('showed');
        }
    });
});

const hiddenElements = document.querySelectorAll('.hidden');
const hiddenElements2 = document.querySelectorAll('.hidden2');
hiddenElements.forEach((el) => observer.observe(el));
hiddenElements2.forEach((el) => observer.observe(el));

//Carrousel index Projects

document.addEventListener("DOMContentLoaded", function () {
    const track = document.querySelector("#carouselTrack");
    const items = document.querySelectorAll(".item");
    const indexItems = document.querySelectorAll("#itemselect li");

    items[0].querySelector(".item-info").classList.add("projactive");

    // Adiciona um evento de clique aos números
    indexItems.forEach((indexItem, index) => {
        indexItem.addEventListener("click", function () {
            // Move o item correspondente para o início do carrossel
            track.insertBefore(items[index], track.firstChild);

            // Remove a classe 'projactive' de todos os itens
            items.forEach((item) => {
                item.querySelector(".item-info").classList.remove("projactive");
            });

            // Adiciona a classe 'projactive' ao item clicado
            items[index].querySelector(".item-info").classList.add("projactive");
        });
    });

    items.forEach((item) => {
        item.addEventListener("click", function () {
            // Move the clicked item to the beginning
            track.insertBefore(item, track.firstChild);

            // Remove 'projactive' class from all items
            items.forEach((item) => {
                item.querySelector(".item-info").classList.remove("projactive");
            });

            // Add 'projactive' class to the clicked item
            item.querySelector(".item-info").classList.add("projactive");
        });
    });
});


