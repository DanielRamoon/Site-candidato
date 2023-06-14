if ($("#noticia-slide").is(":visible")) {

    function iniciarSlideImagens() {

        var exibirImagens = function(current) {
            var slides = document.getElementsByClassName("image-noticia-hidden");
            var titles = document.getElementsByClassName("title-noticia");
            var links = document.getElementsByClassName("link-noticia");
            console.log(links);
            document.getElementById("image-noticia").src = slides[current].currentSrc;
            document.getElementById("title-noticia").innerHTML = titles[current].textContent;
            document.getElementById("link-noticia").setAttribute('href', links[current].href);

            if (++current >= slides.length) {
                current = 0;
            }

            setTimeout(function() { exibirImagens(current); }, 5000);
        };

        exibirImagens(0);

    }

    iniciarSlideImagens();
}
