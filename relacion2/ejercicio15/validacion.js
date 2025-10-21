/*

Validaciones para el formulario del ejercicio 12
Álvaro Gómez González

*/

document.getElementById('formT').addEventListener("submit",function(event){
    
    event.preventDefault();

    if(validarFormulario())
    {
        document.getElementById('formT').submit();//impide que envie nada al php
    }
});

document.getElementById('numero1').addEventListener("change",function(){
    limpiaError('numero1');
});

function validarFormulario()
{
    let numero1 = parseFloat(document.getElementById('numero1').value);
    let correcto = true;

    if (Number.isNaN(numero1) || numero1 < 0)
    {
        marcarError('numero1');
        correcto = false;
    }

    return correcto;
}

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