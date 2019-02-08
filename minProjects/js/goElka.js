function start() {
    setInterval(time,1000);
    }
    
    function time() {
        if(window.numb === undefined || window.numb == 5) {
            window.numb = 1;
        }
        else {
            window.numb = window.numb + 1;
        }
        var img = document.getElementById('img');
        
        img.src = '/image/elka' + window.numb + '.jpg'
    }
    