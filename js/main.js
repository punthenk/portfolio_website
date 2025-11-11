const navLinks = document.querySelectorAll(".nav-link");

function navHover() {
    //If the window is bigger than 1000px than execute the code
    if (window.innerWidth > 1000) {

        navLinks.forEach((link) => {
            link.addEventListener("mouseenter", () => {
                navLinks.forEach((otherLink) => {
                    otherLink.style.opacity = 0.5;
                });
                link.style.opacity = 1;
            });

            link.addEventListener("mouseleave", () => {
                navLinks.forEach((otherLink) => {
                    otherLink.style.opacity = 1;
                });
            });
        });
    }
}
navHover();
window.addEventListener("resize", navHover);

const text = "run welcome";
const target = document.querySelector(".target_text");

const terminal_output = document.querySelector("#output-text");
let terminal_output_text = `
<p>Welcome everyone! This is my portfolio website, this is the place where I show what I do and what I like. Take a look around!</p>
<pre class="text-redcustom">
<div class="ascii-text">
###############              ###############   ############              ##### #####
##################        ##################   ##############            ##### #####
###################      ###################   #####  ########           ##### #####
##### ####  ########    ########  #### #####   ##### #  ########         ##### #####
##### ###### ########  ######## ###### #####   ##### ### #########       ##### #####
##### #######  ##############  ####### #####   ##### ##### ########      ##### #####
##### ########  ############  ######## #####   ##### ###### #########    ##### #####
##### ########## ########## ########## #####   ##### ######## ########   ##### #####
##### ########### ######## ########### #####   ##### ######### ######### ##### #####
##### ##### ######  ####  ###### ##### #####   ##### ########### ############# #####
##### #####  ####### ## #######  ##### #####   ##### ############  ########### #####
##### #####   #######  #######   ##### #####   ##### ############## ########## #####
##### #####     ############     ##### #####   ##### ###############  ######## #####
##### #####      ##########      ##### #####   ##### ######  ######### ####### #####
##### #####       ########       ##### #####   ##### ######   ########## ##### #####
##### #####         ####         ##### ############# ######     ######### #### #####
##### #####          ##          ##### ############# ######       ######### ## #####
##### #####                      ##### ############# ######        #########   #####
##### #####                      ##########################          ###############
##### #####                      ##########################           ##############
##### #####                      ##########################              ###########
</div>
</pre>
<span>I just thought this was cool :)</span>
        `;


function getDelay(char) {
    if (char === '#') {
        return 2;      // heel snel voor '#'
    } else if (char === ' ' || char === '\n' || char === '\t') {
        return 10;     // snel voor spaties en witruimte
    } else {
        return 20;     // standaard snelheid
    }
}

function typeHTML(text, target) {
    let i = 0;
    function typeChar() {
        if (i <= text.length) {
            target.innerHTML = text.slice(0, i);
            let delay = getDelay(text[i]);
            i++;
            setTimeout(typeChar, delay);
        } 
    }
    typeChar();
}

if (target != null) {
    typeHTML(text, target);
    setTimeout(() => {
        typeHTML(terminal_output_text, terminal_output);
    }, 1000);
}

const home = document.querySelector("#home");
const about_me = document.querySelector("#about_me");
const contact = document.querySelector("#contact");
const project = document.querySelector("#project");

const sections = [home, about_me, contact];

const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                navLinks.forEach(link => {
                    link.classList.remove('active');
                    if (link.getAttribute('href').substring(10) === entry.target.id) {
                        project?.classList.remove('active');
                        link.classList.add('active');
                    }
                });
            }
        });
    },
    {
        threshold: 0.7
    }
);

const allNull = sections.every(item => item === null);
if (!allNull) {
    sections.forEach(section => observer.observe(section));
} else {
    project?.classList.add('active');
}

const scroll_inidcator = document.getElementById('scroll-indicator'); 
scroll_inidcator?.addEventListener('click', function() {
    const scroll_target = document.getElementById('about_me');
    scroll_target?.scrollIntoView();
});

function toggleDescription(id) {
    const el = document.getElementById('project-desc-' + id);
    const btn = document.getElementById('more-less-btn-' + id);
    const current = el.innerHTML.trim();
    const shortText = el.getAttribute('data-short');
    const fullText  = el.getAttribute('data-full');

    if (current === shortText) {
        el.innerHTML = fullText;
        btn.innerText = "See less";
    } else {
        el.innerHTML = shortText;
        btn.innerText = "See more";
    }
}
