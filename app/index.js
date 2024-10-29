const OPENAI_API_KEY = "";


const btn = document.getElementById("btn");
const image = document.getElementById("image");
const imageName = document.getElementById("imageName");

btn.addEventListener("click", async function (e) {
  e.preventDefault();
  console.log(imageName.value);

  if(imageName.value === "") {
    alert("Por favor, introduzca un nombre de imagen");
    return;
  }

  try {
    const res = await fetch("https://api.openai.com/v1/images/generations", {
      method: "POST",
      headers: {
        "Content-Type": "application/json",
        Authorization: `Bearer ${OPENAI_API_KEY}`,
      },
      body: JSON.stringify({
        prompt: `Imagen de ${imageName.value} en estilo realista con fondo blanco y iluminación de estudio`,
        n: 1,
        size: "256x256"
      }),
    });

    const { data } = await res.json();
    if (data && data[0] && data[0].url) {
      image.src = data[0].url;
    } else {
      console.error("No se pudo obtener la URL de la imagen.");
    }
  } catch (error) {
    console.error("Error en la solicitud:", error);
  }
});
