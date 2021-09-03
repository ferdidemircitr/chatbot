const chatbottoggle = document.querySelector('.chatbot-toggle');
const screen = document.querySelector('.screen');
const close = document.querySelector('.close');
const bottom = document.querySelector('.messageDisplaySection');


chatbottoggle.addEventListener("click", () => {
    chatbottoggle.classList.toggle("change");
    screen.classList.add('change');
});
close.addEventListener("click", () => {
    chatbottoggle.classList.remove("change");
    screen.classList.remove('change');  
});

setInterval(updateScroll,1000);

function updateScroll(){
    bottom.scrollTop = bottom.scrollHeight;
}