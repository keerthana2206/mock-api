<!DOCTYPE html>
<html>
<style>
    body {
; background-image:
url("https://tse4.mm.bing.net/th?id=OIP.zPF2wWBXoOEW-W_vMFeTSQHaF7&pid=Api&P=0&w=206&h=166"); backgroundrepeat: no-repeat;
background-attachment: fixed; background-size: 100% 100%;
}
  
    /*assign full width inputs*/
    input[type=text],
    input[type=password] {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        box-sizing: border-box;
    }
    
    /*set a style for the buttons*/
    button {
        background-color: #4CAF50;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        cursor: pointer;
        width: 100%;
    }
    
    /* set a hover effect for the button*/
    button:hover {
        opacity: 0.8;
    }
    
    /*set extra style for the cancel button*/
    .cancelbtn {
        width: auto;
        padding: 10px 18px;
        background-color: #f44336;
    }
    
    /*set padding to the container*/
    .container {
        padding: 16px;
    }
      
    /*set the forgot password text*/
    span.psw {
        float: right;
        padding-top: 16px;
    }
    
    /*set the Modal background*/
    .modal {
        display: none;
        position: fixed;
        z-index: 1;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        overflow: auto;
        background-color: rgb(0, 0, 0);
        background-color: rgba(0, 0, 0, 0.4);
        padding-top: 60px;
    }
    
    /*style the model content box*/
    .modal-content {
        background-color: #fefefe;
        margin: 5% auto 15% auto;
        border: 1px solid #888;
        width: 80%;
    }
    
    /*style the close button*/
    .close {
        position: absolute;
        right: 25px;
        top: 0;
        color: #000;
        font-size: 35px;
        font-weight: bold;
    }
      
    .close:hover,
    .close:focus {
        color: red;
        cursor: pointer;
    }
    
    /* add zoom animation*/
    .animate {
        -webkit-animation: animatezoom 0.6s;
        animation: animatezoom 0.6s
    }
      
    @-webkit-keyframes animatezoom {
        from {
            -webkit-transform: scale(0)
        }
        to {
            -webkit-transform: scale(1)
        }
    }
      
    @keyframes animatezoom {
        from {
            transform: scale(0)
        }
        to {
            transform: scale(1)
        }
    }
      
    @media screen and (max-width: 300px) {
        span.psw {
            display: block;
            float: none;
        }
        .cancelbtn {
            width: 100%;
        }
    }

}
  </style>
<body>
    <h2>Login page</h2>
<a href="file:///C:/Users/91994/Desktop/1234.html" target="_blank"><h2>New User</h2></a> <br>
    <!--Step 1 : Adding HTML-->
    <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</button>

  
    <div id="id01" class="modal">
 
  
        <form class="modal-content animate" action="/action_page.php">
           
  
            <div class="container">
                <label><b>Username</b></label>
                <input type="text" placeholder="Enter Username" name="uname" required>
  
                <label><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="psw" required>
  
                <button type="submit">Login</button>
                <input type="checkbox" checked="checked"> Remember me
            </div>
  
            <div class="container" style="background-color:#f1f1f1">
                <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
                <span class="psw">Forgot <a href="file:///C:/Users/91994/Desktop/123456.html">password?</a></span>
            </div>
        </form>
    </div>
  
    <script>
        var modal = document.getElementById('id01');
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>
</body>
  
</html>