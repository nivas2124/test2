<!DOCTYPE <!DOCTYPE html>
<html lang="en">

<head>
    <title>Purchase</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="script.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

</head>
<h1 style="text-align:center; color:#CC3300;" > Testing Phase </h1>

<body>
    <style>
        .grid-opt {
            display: grid;
            grid-template-columns: 300px 300px;
            padding: 10px;
            background-color: rgba(255, 255, 255, 0.8);
            border: 2px solid rgba(255, 255, 255, 100);; 
            font-size: 30px;
            text-align: center;
            width: 500px;
        }
        .foot {
            text-align: right;
                position: absolute;
                bottom: 50%;
                left: 20%;
                /* width: 800px; */

        }
        
        
    </style>
    <form method="post" action="db.php">
    
    
        <div id="btn">
            <input type="text" id="inpu" oninput="get()">
            <!--        <button onclick="get()">Start</button>-->

        </div><center>
        <div id="no" class="grid-opt">
            <div>
            <input type="hidden" id="code" name="code">
                
                <p id="p"></p>
                <p id="for" ></p>
            </div>
            <div>
                <p id="pp"></p>
            </div>
        </div>
        <input type="submit" class="foot"></center>
    </form>

    <button onclick="set()">Set</button>


    <!-- <div id="pri" style="display:none"> -->
    <div id="pri" style="display:none">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <style>
            br {
                display: block;
                margin: 10px 1;
            }
            
            .grid-item {
                display: grid;
                grid-template-columns: auto auto;
                padding: 10px;
                background-color: rgba(255, 255, 255, 0.8);
                /* border: 2px solid rgba(0, 0, 0, 0.8); */
                font-size: 25px;
                text-align: center;
            }
            
            .grid-item .grid1 {
                background-color: red;
            }
            
            .grid-item .grid2 {
                background-color: blue;
            }
            
            .grid-item .grid1 footer {
                text-align: right;
                position: absolute;
                bottom: 650px;
                left: 600px;
                width: 100px;
            }
            
            .grid-item .grid2 footer {
                text-align: right;
                position: absolute;
                bottom: 650px;
                right: 600px;
                width: 100px;
            }
            
            .footer2 {
                text-align: right;
                position: absolute;
                top: 0px;
                left: 0px;
                width: 150px;
            }
        </style>
        <div class="grid-item">
            <div class="grid1">

                
                <h6>
                    <u> <center>
                        Tirupur City Cable Neworks<br> Material Memo
                    </center>
                    <p>
                        <center>for Maheswari Electronics</center>
                        
                    </p>
                    <p>Kindly Provide the below following materials</p></u>

                    <h id="damal"></h>

                    <footer>Regards</footer>
                </h6>
            </div>
            <div class="grid2">
                <h6><u>
                    <center>
                        Tirupur City Cable Neworks<br> Material Memo
                    </center>
                    <p>

                        <center>for Maheswari Electronics</center>
                        
                    </p>
                    <p>Kindly Provide the below following materials</p>
                    </u>




                    <a2 id="dumeel"></a2>

                    <footer>Regards</footer>
                </h6>
            </div>




        </div>


    </div>
    <input type="button" value="Click Me" onclick="pri()"> //


</script>

</body>

</html>
