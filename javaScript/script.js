
function writeNumber( nameInput,  nameRange){

    var str =  nameInput;
    var str2 = nameRange;
    var rng = document.getElementById(str2);
    document.getElementById(str).value = rng.value;
}
