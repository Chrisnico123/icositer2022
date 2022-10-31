<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pameran Prodi</title>
    <link rel="stylesheet" href="/Lomba/style.css">
    <link rel="stylesheet" href="/Lomba/register.css">
    <link rel="stylesheet" href="/Lomba/prodipage.css">
    <link rel="stylesheet" type="text.css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.1/css/all.min.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        @yield('page1')
    </div>
    @yield('prodipage')
    <section>
        <img src="{{ asset('assets') }}/images/clouds.svg" id="clouds">
        <img src="{{ asset('assets') }}/images/clouds.svg" id="clouds2">
        <img src="{{ asset('assets') }}/images/bigcloud.svg" id="bigcloud">
        <img src="{{ asset('assets') }}/images/mountain.svg" id="mountain">
        <img src="{{ asset('assets') }}/images/airballoon.svg" id="airballoon">
        <img src="{{ asset('assets') }}/images/pole.svg" id="pole">
        <img src="{{ asset('assets') }}/images/prop.svg" id="prop">
        <img src="{{ asset('assets') }}/images/prop2.svg" id="prop2">
        <img src="{{ asset('assets') }}/images/ground.svg" id="ground">
    </section>
    <script>
        function refreshData(){
            let local = localStorage.getItem('like');
            let id = localStorage.getItem('id');
            let idlike = localStorage.getItem('idlike');
            const target = document.getElementById(id);
            const like = document.getElementById(idlike);
            
            if(local === "done") {
                target.innerHTML = 'Unlike <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16"><path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/></svg>';
                localStorage.setItem("like" , "done")
                let temp = parseInt(like.textContent) + 1
                like.innerHTML = temp
                let selector = document.querySelectorAll(`.button-like:not(#${id})`);
                for(let i = 0; i < selector.length; i++){
                    selector[i].setAttribute("disabled" , false);
                }
            }
            if(local === null) {
                target.innerHTML = 'Like <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16"><path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/></svg>';
                localStorage.setItem("like" , "")
                let temp = parseInt(like.textContent) - 1
                like.innerHTML = temp
                let selector = document.querySelectorAll(`.button-like:not(#${id})`);
                for(let i = 0; i < selector.length; i++){
                    selector[i].setAttribute("disabled" , true);
                }
            };
        }
        window.addEventListener("load", () => {
            refreshData();
        });
        if(typeof (Storage) !== 'undified') {
            if(localStorage.getItem("like") === null){
                localStorage.setItem("like" , "");
                localStorage.setItem("id" , "");
                localStorage.setItem("idlike" , "");
            }
        }
        function buttonClick (id , idlike) {
            const tmp = id;
            const tmp1 = idlike;
            localStorage.setItem("id" , tmp);
            localStorage.setItem("idlike" , tmp1);
            const target = document.getElementById(tmp);
            const like = document.getElementById(tmp1);
            if( localStorage.getItem("like") === "" ){
                target.innerHTML = 'Unlike <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16"><path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/></svg>';
                localStorage.setItem("like" , "done")
                let temp = parseInt(like.textContent) + 1
                like.innerHTML = temp
            }else{
                target.innerHTML = 'Like <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16"><path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/></svg>';
                localStorage.setItem("like" , "")
                let temp = parseInt(like.textContent) - 1
                like.innerHTML = temp
            }
            let selector = document.querySelectorAll(`.button-like:not(#${id})`);
            for(let i = 0; i < selector.length; i++){
                selector[i].toggleAttribute("disabled");
            }
        }
    </script>
</body>
</html>
