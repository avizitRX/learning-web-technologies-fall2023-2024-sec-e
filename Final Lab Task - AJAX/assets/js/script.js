function ajax() {
    let name = document.getElementById('name').value;
    let company = document.getElementById('company').value;

    let xhttp = new XMLHttpRequest();
    xhttp.open('GET', '../controllers/employer_search.php?name='+name+'&'+'company='+company, true);
    xhttp.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){
            document.getElementById('result').innerHTML = this.responseText;
        }
    }
    xhttp.send('name='+name+'&'+'company='+company);
}