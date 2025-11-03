/*

Validaciones para el formulario del ejercicio 12
Álvaro Gómez González

*/
document.getElementById('form1').addEventListener("submit",function(event){
    
    if(!validarFormularioNotas())
    {
        event.preventDefault();//impide que envie nada al php
    }
});

document.getElementById('nota0').addEventListener("change",function(){
    limpiaError('nota0');
});

document.getElementById('nota1').addEventListener("change",function(){
    limpiaError('nota1');
});

document.getElementById('nota2').addEventListener("change",function(){
    limpiaError('nota2');
});

document.getElementById('nota3').addEventListener("change",function(){
    limpiaError('nota3');
});

document.getElementById('nombre').addEventListener("change",function(){
    limpiaError('nombre');
});

function validar(texto,patron)
{
    var check = true;
    var re = patron;

    if (!re.test(texto))
    {
        check = false;
    }

    return check;
}

function validaCorreo(mail)
{
    var patron = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;

    return validar(mail,patron);
}

function validarDni(documento)
{
    var patron = /^[1-9][0-9]{5,6}[a-zA-Z]$/;
    var check = validar(documento,patron);
    if (check)
    {

    }

    return check;
}

function validarFormularioNotas()
{
    let nota0 = parseInt(document.getElementById('nota0').value);
    let nota1 = parseInt(document.getElementById('nota1').value);
    let nota2 = parseInt(document.getElementById('nota2').value);
    let nota3 = parseInt(document.getElementById('nota3').value);
    let email = document.getElementById('mail').value;
    let nombre = document.getElementById('nombre').value;

    let correcto = true;

    //tengo que hacer el checkeo de todas las notas

    if (!Number.isInteger(nota0) || (nota0 < 0 || nota0 > 10))
    {
        marcarError('nota0');
        correcto = false;
    }

    if (!Number.isInteger(nota1) || (nota1 < 0 || nota1 > 10))
    {
        marcarError('nota1');
        correcto = false;
    }

    if (!Number.isInteger(nota2) || (nota2 < 0 || nota2 > 10))
    {
        marcarError('nota2');
        correcto = false;
    }

    if (!Number.isInteger(nota3) || (nota3 < 0 || nota3 > 10))
    {
        marcarError('nota3');
        correcto = false;
    }

    if (nombre.trim() == "")
    {
        marcarError('nombre');
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