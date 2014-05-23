<html>
<head>
    <title>G0</title>
</head>
<body>

<!DOCTYPE html>
<html>
<!--
  Created using jsbin.com
  Source can be edited via http://jsbin.com/pojera/8/edit
-->
<head>
    <meta charset="utf-8">
    <title>JS Bin</title>

    <style id="jsbin-css">

    </style>
</head>
<body>
<form onsubmit="return false;">
    Wetebereich (0 - 100)<br>
    Geschätzte Note:<input id="note" /><br>
    Anteil Student 1:<input id="m1" /><br>
    Anteil Student 2:<input id="m2"/><br>
    Anteil Student 3:<input id="m3"/><br>
    <input type="submit" onclick="calc();"/>
</form>
<script>
    var calc = function(){
//var codePunkte = 50;
//var docuPunkte = 50;

//var notePunkte = (codePunkte + docuPunkte)/2;
        var notePunkte = parseFloat(document.getElementById('note').value)

        var faktor = [];
        faktor.push(parseFloat(document.getElementById('m1').value));
        faktor.push(parseFloat(document.getElementById('m2').value));
        faktor.push(parseFloat(document.getElementById('m3').value));

        valid = false;

// noprotect
        for(var i = 0, j = 0 ; i<faktor.length ; i++)
        {
            if(faktor[i])
            {
                if(faktor[i] < 0)
                {
                    valid = false;
                    break;
                }
                j += faktor[i];
                valid = (j == (i+1)*100);
            }
        }

        if(valid && notePunkte && notePunkte > 0 && notePunkte <= 100)
        {
            // noprotect
            for(var i = 0 ; i<faktor.length ; i++)
            {
                if(faktor[i])
                    alert('Student'+i+': '+((notePunkte*0.8)+(notePunkte*0.2*(faktor[i]/100)))+'Punkte');
            }
        }
        else{
            alert("Punkte sind fehlerhaft.")
        }
        return false;
    };
</script>
</body>
</html>
</body>
</html>