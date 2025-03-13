//PASSWORD HIDE
document.getElementById('password-eye').addEventListener('click', function() {
    togglePasswordVisibility('inputPassword', 'password-eye');
});

document.getElementById('confirm-password-eye').addEventListener('click', function() {
    togglePasswordVisibility('confirmPassword', 'confirm-password-eye');
});

function togglePasswordVisibility(inputId, iconId) {
    var passwordInput = document.getElementById(inputId);
    var eyeIcon = document.getElementById(iconId);

    if (passwordInput.type === 'password') {
        passwordInput.type = 'text';
        eyeIcon.classList.remove('fa-eye');
        eyeIcon.classList.add('fa-eye-slash');
    } else {
        passwordInput.type = 'password';
        eyeIcon.classList.remove('fa-eye-slash');
        eyeIcon.classList.add('fa-eye');
    }
}

// Activate scrollspy
$('body').scrollspy({ target: '#navbar', offset: 70 });

// Smooth scrolling for links
$(document).ready(function(){
    $(".nav-link").on('click', function(event) {
        if (this.hash !== "") {
            event.preventDefault();
            var hash = this.hash;
            $('html, body').animate({
                scrollTop: $(hash).offset().top
            }, 800, function(){
                window.location.hash = hash;
            });
        }
    });
});

//ANIMATION PAGE

$("a.nav-link, a.btn").on('click', function(e) {
    if (!this.hash) {
        e.preventDefault();
        var linkLocation = this.href;
        $('body').addClass('fade-out');
        setTimeout(function() {
            window.location = linkLocation;
        }, 500); // Match the duration of the animation
    }
});
