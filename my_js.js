var flagprofile = 0;
function showDropDown() {
    flagprofile = flagprofile + 1;
    console.log(flagprofile);
    if ((flagprofile % 2) == 0){
        document.getElementById('dropdown').style.display = 'none';
    } else {
        document.getElementById('dropdown').style.display = 'block';
    }
};

function addField(selectElement) {

// "
                  
                  {/*<p class='field-content'><textarea name='resources' placeholder='".$resources."'>".$resources."</textarea></p></div>";*/}

    var text = selectElement.selectedOptions[0].text;

    var value = selectElement.selectedOptions[0].value;

    var insertedHtml = "<div class='field'><div class='field-header'>" + text + " <p class='field-content'><textarea name='" + value.substring(4) + "'></textarea></p></div></div>";

    var inputData = "<input type='hidden' name='" + value + "' value='1'>"
    console.log(inputData);
    document.getElementsByClassName('fields_holder')[0].innerHTML += insertedHtml + inputData;
}

function removeDiagram(removeElement) {
    var insertedHtml =  "<input type='file' style='display:none' name='file1' filename='' id='file1' value='Качи диаграма'``>";
    document.getElementsByClassName('fields_holder')[0].innerHTML += insertedHtml;

    var elements = document.getElementsByClassName('diagram');
    while(elements.length > 0){
        elements[0].parentNode.removeChild(elements[0]);
    }
}