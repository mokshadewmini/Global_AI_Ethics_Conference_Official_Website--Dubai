function subscribe(){

    var subscribe = document.getElementById("email");

    var r = new XMLHttpRequest();

    r.onreadystatechange = function () {
        if (r.readyState == 4) {
            var t = r.responseText;
            if (t == "Success") {
                alert("Newsletter has sent to your email. Please check your inbox");
                window.location.reload();

            }else{
                alert(t);
            }
            
        }
    }

    r.open("GET", "newsProcess.php?e=" + email.value, true);
    r.send();
}

window.onload = function() {
    fetch('people.json')
        .then(response => response.json())
        .then(data => {
            const peopleList = document.getElementById('people-list');
            data.forEach(person => {
                const listItem = document.createElement('li');
                listItem.innerHTML = `<a href="profile2.php?name=${person.name}">${person.name}</a>`;
                peopleList.appendChild(listItem);
            });
        });
}

function submit() {

    var full_name = document.getElementById("full_name");
    var email = document.getElementById("email");
    var phone = document.getElementById("phone");

    var f = new FormData();
    f.append("email", email.value);
    f.append("phone", phone.value);
    f.append("full_name", full_name.value);

    var r = new XMLHttpRequest();

    r.onreadystatechange = function () {
        if (r.readyState == 4) {
            var t = r.responseText;
            if (t == "success") {
                alert("Registerd Successfully!");
                window.location.reload();
            } else {
                alert(t);
            }

        }
    };

    r.open("POST", "submitProcess.php", true);
    r.send(f);

}