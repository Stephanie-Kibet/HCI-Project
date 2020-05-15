<!DOCTYPE html>
<html>
	<head> 
		
    </head>
    <style>
        body{
           background:url("https://www.ekopamag.com/wp-content/uploads/2018/06/kfc-kenya-menu-kimathi-street.jpg");
            background-attachment: fixed;
            background-size: cover; 

        }
        .card{
           margin:auto;
           width:50%;
           padding-top: 5px;
           padding:10px;
        height: 500px;
        width: 350px;
       
        background-color:  #FFF1E2
        !important;
        }
        .card:hover{
            box-shadow: rgba(0,0,0,0.2);
        }
    	form{
    	border: 3px solid #f1f1f1;     
    		}

    	.imgcont{
    		text-align: center; 
        margin: 24px 0 12px 0;
        


    	}
        img.kfc { 
        width: 10%; 
        border-radius: 10%;
        height: 20px;
        width: 35px; 
        
        }


    	.cont{
    		padding:16px;
            align-content:center;
    		}

    		.container{
    			background-color:#FFF1E2;
    		}

    		span.psw{
    			float:right;
				padding-top:16px;
				display: block;
				float:none;
				}

				
    			input[type=text], 
    			input[type=password] { 
    				width: 100%; 
			        padding: 12px 20px; 
			        margin: 8px 0; 
			        display: inline-block; 
			        border: 1px solid #ccc; 
			        box-sizing: border-box; 
			    } 




    </style>
    <body>
       
        <div class="card">
            <div class="imgcont">
                     <img src="C:\kfc_logo.jpg" alt="logo">           
            </div>
    	<h2>Log in</h2>
    	<p> Please fill in your credentials to login.</p>
    	<form action="index.php" method="POST">

            <div class="cont">
    			<label><b>Username:</b></label><br>
    		<input type="text" placeholder="Enter Username" name="uname"  ><br></br>

    		<label><b>Password:</b></label><br>
    		<input type="password" name="password" placeholder="Enter Password" ><br></br>

    		<button type="submit" action="index.php" method="POST"><b>Login</b></button>
    		</div>
    		
    		<div class="container">
    			
    			<span class="psw">Forgot<a href="#">Password?</a></span>

    			
    		</div>

    	</form>
    	</div>
 </body>
</html>


