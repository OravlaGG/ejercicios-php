/*

Validaciones para el formulario del ejercicio 12
Álvaro Gómez González

*/

document.getElementById('formT').addEventListener("submit",function(event){
    
    if(!validarFormularioNotas())//comprueba que este los datos correcto
    {
        event.preventDefault();//impide que envie nada al php
    }
});

//Limpia los errores de los campos
document.getElementById('nota').addEventListener("change",function(){
    limpiaError('nota');
});

//valida los datos dados
function validarFormularioNotas()
{
    let nota = parseFloat(document.getElementById('nota').value);
    let correcto = true;//se mantendra true mientras los datos esten correctos 

    //Al hacer un parseFloat a un string lo vuelve un integer si no tiene decimales
    if (!Number.isInteger(nota) || nota <= 0)
    {
        marcarError('nota');
        correcto = false;
    }

    return correcto;
}

//cambia al estado de error 
function marcarError(id)
{
    document.getElementById(id).style.borderColor="red";
    document.getElementById(id+'Help').style.visibility="visible";
}

function limpiaError(id)
{
    document.getElementById(id).style.borderColor="#dee2e6";
    document.getElementById(id+'Help').style.visibility="hidden";
}