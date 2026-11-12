/*
 * Public-site JavaScript (view-only preview).
 * Ported from JS/script.js. The pieces that talked to the server
 * (newsletter fetch, messenger read-marking) are replaced or removed.
 */

/* Bestsellers horizontal scroll */
(function () {
    var box = document.getElementById("productsContainer");
    if (!box) { return; }
    box.addEventListener("scroll", function () {
        if (box.scrollLeft > 50) { box.classList.add("scrolled-right"); }
        else { box.classList.remove("scrolled-right"); }
    });
})();

/* Reviews horizontal scroll + dots */
(function () {
    var container = document.querySelector(".reviews-container");
    var groups = document.querySelectorAll(".review-group");
    var dots = document.querySelectorAll(".review-dot");
    if (!container || groups.length !== 3 || dots.length !== 3) { return; }

    function updateDot() {
        var current = Math.round(container.scrollLeft / container.clientWidth);
        dots.forEach(function (dot, i) { dot.classList.toggle("active", i === current); });
    }
    container.addEventListener("scroll", updateDot);
    dots.forEach(function (dot, i) {
        dot.addEventListener("click", function () {
            container.scrollTo({ left: i * container.clientWidth, behavior: "smooth" });
        });
    });
    updateDot();
})();

/* Mobile menu toggle */
(function () {
    var toggle = document.getElementById("menuToggle");
    var nav = document.querySelector(".navbar");
    if (toggle && nav) {
        toggle.addEventListener("click", function () { nav.classList.toggle("show"); });
    }
})();

/* Newsletter: preview only, shows a fake confirmation, sends nothing */
(function () {
    var form = document.getElementById("subscribeForm");
    var msg = document.getElementById("subscribeMessage");
    if (!form || !msg) { return; }
    form.addEventListener("submit", function (event) {
        event.preventDefault();
        msg.textContent = "Preview only: subscriptions are not saved yet.";
        msg.className = "subscribe-message exists";
        msg.style.display = "block";
    });
})();

/*
 * VIEW-ONLY MODE: stop every form from submitting.
 * DELETE THIS BLOCK when you wire up real controllers.
 */
document.addEventListener("submit", function (event) {
    event.preventDefault();
    console.info("[site view-only] form submit blocked");
});
