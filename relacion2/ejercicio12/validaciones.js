/*

Validaciones para el formulario del ejercicio 12
Álvaro Gómez González

*/

function validarFormularioNotas()
{
    let nota0 = parseInt(document.getElementById('inicial').value);
    let nota1 = parseInt(document.getElementById('primera').value);
    let nota2 = parseInt(document.getElementById('segunda').value);
    let nota3 = parseInt(document.getElementById('tercera').value);
    let email = document.getElementById('mail').value;
    let nombre = document.getElementById('nombre').value;

    let correcto = true;

    //tengo que hacer el checkeo de todas las notas

    if (!Number.isInteger(nota0) || (nota0 < 0 || nota0 > 10))
    {
        alert("La nota inicial tiene que ser entero entre 1 y 10.");
        correcto = false;
    }

    if (!Number.isInteger(nota1) || (nota1 < 0 || nota1 > 10))
    {
        alert("La primera nota tiene que ser entero entre 1 y 10.");
        correcto = false;
    }

    if (!Number.isInteger(nota2) || (nota2 < 0 || nota2 > 10))
    {
        alert("La segunda nota tiene que ser entero entre 1 y 10.");
        correcto = false;
    }

    if (!Number.isInteger(nota3) || (nota3 < 0 || nota3 > 10))
    {
        alert("La tercera nota tiene que ser entero entre 1 y 10.");
        correcto = false;
    }

    if (nombre.trim() == "")
    {
        alert("El Nombre es obligatorio.");
        correcto = false;
    }


    return correcto;
}