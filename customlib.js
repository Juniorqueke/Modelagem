// Minha biblioteca JavaSript
	function $(elemento) {
				if (document.getElementById(elemento) != null)
				 {
				 	return document.getElementById(elemento);
				 }
				 var elementos = document.getElementsByTagName(elemento);
				 	if (elemento.length > 0) {
				 		return elementos;
				 	}
				 	if (document.getElementsByClassName(elemento) > 0) {
				 		return document.getElementsByClassName(elemento);
				 		return false;
				 }
			}