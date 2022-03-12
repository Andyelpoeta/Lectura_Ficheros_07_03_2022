addEventListener("DOMContentLoaded", async()=>{
  
    let peticion = await fetch("api.php");
    let texto = await peticion.json();
    console.log(texto);
})