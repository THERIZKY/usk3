let inputNomor = document.getElementById('nomorKeranjang');

let plus = () => {
    let value = parseInt(inputNomor.value);
    value += 1;
    inputNomor.value = value;
}

let minus = () => {
    let value = parseInt(inputNomor.value);
    value -= 1;
    inputNomor.value = value;
}