<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <title>Website</title>
        <meta charset="utf-8">
        
        <meta name="viewport" content="width=device-width" initial-scale="1">
        
        <style>
            *{
                box-sizing: border-box;
            }
            .tab{
                float: left;
                border: 1px solid #ccc;
                background-color: #f1f1f1;
                width: 30%;
                hieght: 300px;
            }
            .tab button{
                display: block;
                background-color: inherit;
                color: black;
                padding: 22px 16px;
                width: 100%;
                border: none;
                outline: none;
                text-align: left;
                cursor: pointer;
                transition: 0.3s;
            }
            .tab button:hover{
                background-color: #ddd;
            }
            .tab button.active{
                background-color: #CCC;
            }
            .tabcontent{
                float: left;
                padding: 0 12px;
                border: 1px solid #DDD;
                width: 70%;
                border-left: none;
                height: 300px;
            }
        </style>
    </head>
    <body>
        
        <tr>
            <td width="20%"><img src="sangamlogo.jpg" width="100" height="100"></td>
                <td width="30%" colspan="3">
                    <font size="30" color="brown">Sangam University</font>
                </td>    
        </tr>

            <tr>
                <td border="5"  colspan="3">
                <td><i class="fa fa-facebook fa-3x"></i> </td>
                <td><i class="fa fa-twitter fa-3x"></i> </td>
                <td> <i class="fa fa-instagram fa-3x"></i> </td>
            </td> 
            </tr>
         
        </br> </br>    
        <div class="tab">
            <button class="tablinks" onclick="opencity(event, 'Lukhnow')">Lukhnow</button>
            <button class="tablinks" onclick="opencity(event, 'Mumbai')">Mumbai</button>
            <button class="tablinks" onclick="opencity(event, 'Hyderabad')">Hyderabad</button>
        </div>
        <div id="Lukhnow" class="tabcontent">
            <h3>Page Heading</h3>
            <p>Welcome to our page.</p>
        </div>
        <div id="Mumbai" class="tabcontent">
            <h3>About Us</h3>
            <p>This is the website for school students.</p>
        </div>
        <div id="Hyderabad" class="tabcontent">
            <h3>Contact Us</h3>
            <p>contact no. is 123456789</p>
        </div>
        
        <script type="text/javascript">
            function openCity(evt, cityName){
             var i, tabcontent, tablinks;
             
             tabcontent = document.getElementsByClassName("tabcontent");
             for(i=0; i<tabcontent.length; i++){
                 tabcontent[i].style.dislpay= "none";
             }
             tablinks = document.getElementsByClassName("tablinks");
             
             for(i=0; i<tablinks.length; i++){
                 tablinks[i].className = tablinks[i].className.replace(" active", "");
            }
            document.getElementById(cityName).style.display = "block";
            evt.currentTarget.className += " active";
        }
        </script>  
        
    </body>
    </body>
</html>

