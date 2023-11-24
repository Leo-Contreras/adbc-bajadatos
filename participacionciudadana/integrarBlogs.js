const spaceId = '6j42ecmb5g42';
const accessToken = '8fIKYTkTHgqr3NG1nOklqYhXYZp5KuTgt3KTmlpuIus';

function fetchAndDisplayArticles() {
    fetch(`https://cdn.contentful.com/spaces/${spaceId}/entries?access_token=${accessToken}&content_type=blog`)
    .then(response => response.json())
    .then(data => {
        const articles = data.items;
        const newsSlider = document.getElementById('news-slider'); // Obtén el elemento del carrusel

        articles.forEach(article => {
            // Asegúrate de que tienes la estructura de la API correspondiente a los siguientes campos
            const title = article.fields.titulo;
            const desc = article.fields.resumenArticulo;
            const content = article.fields.contenidoPrincipal; // Asumiendo que es un texto simple o que manejarás el RichText adecuadamente
            let imageUrl = "";
            // Asumiendo que "imagenDestacada" es un ID que corresponde a un activo en la respuesta de la API, y que los activos vienen en un arreglo separado
            const imageId = article.fields.imagenDestacada?.sys.id; // Obtiene el ID de la imagen
            const asset = data.includes.Asset.find(asset => asset.sys.id === imageId);
            if (asset) {
                imageUrl = asset.fields.file.url;
            }

            const slideElement = document.createElement('div');
            slideElement.classList.add('post-slide');
            slideElement.classList.add('col-lg-3');
            slideElement.classList.add('col-md-4');
            slideElement.classList.add('col-sm-6');
            slideElement.classList.add('col-xs-12');
            slideElement.innerHTML = `
          
                <div class="post-img">
                    <img src="${imageUrl}" alt="${title}">
                </div>
                <div class="post-content">
                    <h3 class="post-title">${title}</h3>
                    <p class="post-description">${desc}</p>
                    <a href="blog.php?id=${article.sys.id}" class="read-more">CONOCE MÁS</a>
                </div>
        
            `;

            newsSlider.appendChild(slideElement);
        });

        // Inicializa el carrusel de Owl Carousel después de agregar los elementos
        $(newsSlider).owlCarousel({
            // Configuración del carrusel, ajusta según tus necesidades
            items: 3,
            loop: true,
            margin: 10,
            autoplay: true,
            autoplayTimeout: 2000,
            autoplayHoverPause: true,
        });
    });
}



// Llama a la función cuando la página se cargue
window.onload = fetchAndDisplayArticles;
