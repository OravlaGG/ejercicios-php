/*

Validaciones para el formulario del ejercicio 12
Álvaro Gómez González

*/

document.getElementById('formT').addEventListener("submit",function(event){
    
    if(!validarFormularioNotas())
    {
        event.preventDefault();//impide que envie nada al php
    }
});

document.getElementById('lado1').addEventListener("change",function(){
    limpiaError('lado1');
});

document.getElementById('lado2').addEventListener("change",function(){
    limpiaError('lado2');
});

document.getElementById('lado3').addEventListener("change",function(){
    limpiaError('lado3');
});

function validarFormularioNotas()
{
    let lado1 = parseFloat(document.getElementById('lado1').value);
    let lado2 = parseFloat(document.getElementById('lado2').value);
    let lado3 = parseFloat(document.getElementById('lado3').value);

    let correcto = true;

    if (Number.isNaN(lado1) || lado1 <= 0)
    {
        marcarError('lado1');
        correcto = false;
    }
    if (Number.isNaN(lado2) || lado2 <= 0)
    {
        marcarError('lado2');
        correcto = false;
    }
    if (Number.isNaN(lado3) || lado3 <= 0)
    {
        marcarError('lado3');
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