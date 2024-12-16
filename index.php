<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<style>
    * {
        font-family: 'ayman'!important;
    }
    body {
        background: #f4f6fa;
    }
    .boxasaraki {
        max-width: 30%;
        height:470px;
        background-color: #ffffff;
        border-radius: 15px;
        margin-top:20px;
        text-align: center;
        padding: 20px;
    }

    h1 {
        margin-top:50px;
        font-weight: bolder;
        font-size:35px;
    }

    p {
        background-color: #f4f6fa;
        height:63px;
        border-radius: 15px;
        display: flex;
        justify-content:space-between;
        align-items: center;
        direction: rtl;
        padding: 0px 20px;
    }

    @font-face {
        font-family: 'ayman';
        src: url('rabar.woff');
    }


input {
    border-radius: 15px;
    border: 1px solid grey;
    text-align: center;
    width: 100%;
    height:45px;
}
button {
    background-color:#000;
    color: #f4f6fa;
    border: none;
    border-radius: 15px;
    margin-top:10px;
    padding: 5px 10px;

}
</style>
</head>
<body>

    <center>
        <h1>دەمێن بانگی</h1>
    <div class="boxasaraki">

    <form method="GET">
        <input type="text" autocomplete="off" name="bajer" placeholder="ناڤێ باژێری بنڤیسە">
        <button type="submit">لێگەریان</button>
    </form>

    <p>سپێدە :<span id="speda"></span></p>
    <p>نیڤرۆ :<span id="nivro"></span></p>
    <p>ئێڤار :<span id="evar"></span></p>
    <p>مەغرەب :<span id="makhrab"></span></p>
    <p>عەیشا :<span id="aisha"></span></p>

    </div>
    </center>

    <script>
        var bajer = "<?php echo $_GET['bajer']; ?>";
$.getJSON('https://muslimsalat.com/'+bajer+'/daily.json?key=7e12babf09b5c0021f92f154623e2ebc&jsoncallback=?', function(damen_bangi){
$('#speda').append(damen_bangi.items['0'].fajr);
$('#nivro').append(damen_bangi.items['0'].dhuhr);
$('#evar').append(damen_bangi.items['0'].asr);
$('#makhrab').append(damen_bangi.items['0'].maghrib);
$('#aisha').append(damen_bangi.items['0'].isha);
});
</script>   

</body>
</html>