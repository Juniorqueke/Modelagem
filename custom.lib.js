// Minha biblioteca JavaSript
function $(elemento) {
    if (elemento.indexOf("#") == 0) {
        return document.getElementById(elemento);
    }
    var elementos = document.getElementsByTagName(elemento);
    if (elemento.length > 0) {
        return elementos;
    }
    if (elemento.indexOf(".") == 0) {
        return document.getElementsByClassName(elemento);
    }
    return false;
}