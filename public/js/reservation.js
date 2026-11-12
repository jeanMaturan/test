/*
 * Reservation page: live "amount due" calculator (pure front end, kept from the PHP version).
 * The server-side table-availability check is NOT included yet; it needs a database.
 */
(function () {
    var form = document.querySelector(".reservation-form");
    if (!form) { return; }

    var FEE_PER_GUEST = parseInt(form.dataset.feePerGuest, 10);
    var DOWNPAYMENT_PERCENT = parseInt(form.dataset.downpaymentPercent, 10);

    var guests = document.getElementById("guests");
    var paymentType = document.getElementById("payment_type");
    var msg = document.getElementById("payment-amount-msg");

    function peso(n) {
        return "₱" + n.toLocaleString("en-PH", { minimumFractionDigits: 2, maximumFractionDigits: 2 });
    }

    function update() {
        var g = parseInt(guests.value, 10);
        var type = paymentType.value;
        if (!g || !type) {
            msg.textContent = "Select number of guests and a payment option to see the amount due.";
            return;
        }
        var total = g * FEE_PER_GUEST;
        var due = type === "Downpayment" ? total * (DOWNPAYMENT_PERCENT / 100) : total;
        msg.textContent = "Amount due (" + type + "): " + peso(due);
    }

    guests.addEventListener("change", update);
    paymentType.addEventListener("change", update);
})();
