const buscador = document.getElementById("busqueda");

const productos = document.querySelectorAll(".producto-card");

buscador.addEventListener("keyup", () => {
    const texto = buscador.value.toLowerCase();
    productos.forEach(producto => {

        const nombre = producto
        .querySelector(".nombre-equipo")
        .textContent
        .toLowerCase();

        if(nombre.includes(texto)){
            producto.classList.remove("oculto");

        }else{

            producto.classList.add("oculto");
        }
    });
});