$(document).ready(function() {
    $description = $(".description");
    $case = $(".case");
    $("path").hover(function() {
        $(this).attr("class", "enabled heyo");
        $description.addClass("active");
        $title = $(this).attr("title");
        $case = $(this).attr("case");
        $dead = $(this).attr("dead");
        $description.html('<div class="title-font">' + $title + '</div><div class="case-font">' + $case + '</div><div class="confirm-font">CONFIRMED</div><div class="death-font">' + $dead + '</div><div class="confirm-font">DEATHS</div>');
    }, function() {
        $description.removeClass("active");
    });
    $(document).on("mousemove", function(e) {
        $description.css({
            left: e.pageX + 20,
            top: e.pageY - 70
        });
    });
    // Get the modal
    var modal = document.getElementById("id_disclaimer_modal");
    // Get the button that opens the modal
    var btn = document.getElementById("id_disclaimer");
    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close_disclaimer")[0];
    // When the user clicks the button, open the modal
    btn.onclick = function() {
        modal.style.display = "block";
    };
    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
        modal.style.display = "none";
    };
    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    };
    var modal_author = document.getElementById("id_author_modal");
    var btn_author = document.getElementById("id_author");
    var span_author = document.getElementsByClassName("close_author")[0];
    btn_author.onclick = function() {
        modal_author.style.display = "block";
    };
    span_author.onclick = function() {
        modal_author.style.display = "none";
    };
    window.onclick = function(event) {
        if (event.target == modal_author) {
            modal_author.style.display = "none";
        }
    };
    var modal_faq = document.getElementById("id_faq_modal");
    var btn_faq = document.getElementById("id_faq");
    var span_faq = document.getElementsByClassName("close_faq")[0];
    btn_faq.onclick = function() {
        modal_faq.style.display = "block";
    };
    span_faq.onclick = function() {
        modal_faq.style.display = "none";
    };
    window.onclick = function(event) {
        if (event.target == modal_faq) {
            modal_faq.style.display = "none";
        }
    };
    // Check for click events on the navbar burger icon
    $(".navbar-burger").click(function() {
        // Toggle the "is-active" class on both the "navbar-burger" and the "navbar-menu"
        $(".navbar-burger").toggleClass("is-active");
        $(".navbar-menu").toggleClass("is-active");
    });
    // change white icon if it's dark theme
    if (window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches) {
        var link = document.querySelector("link[rel*='icon']") || document.createElement('link');
        link.type = 'image/x-icon';
        link.rel = 'shortcut icon';
        link.href = './favicon.ico';
        document.getElementsByTagName('head')[0].appendChild(link);
    }
});