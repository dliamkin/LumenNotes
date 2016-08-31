<!DOCTYPE html>
<html>
    <head>
        <title>Notes In Lumen</title>
        <style>
            a {
                text-decoration: none;
            }
            body {
                background-color: white; 
                background-image: 
                linear-gradient(90deg, transparent 79px, #abced4 79px, #abced4 81px, transparent 81px),
                linear-gradient(#eee .2em, transparent .2em);
                background-size: 100% 1.9em;
                font-family: Arial, Helvetica, sans-serif;
            }
            .input-text {
                width: 100%;
                padding: 12px 20px;
                margin: 8px 0;
                box-sizing: border-box;
                border:2px solid #d1d1d1;
            }
            .input-text:focus {
                border: 2px solid #37c2ff;
            }
            input[type=submit] {
                padding: 10px 10px;
                background-color:#67ba1d;
                color:white;
                border:none;
                border-radius:5px;
                font-size: 18px;
            }
            input[type=submit]:hover {
                background-color:#437d0f;
                color: #eee;
            }
            .delete {
                padding: 10px 10px;
                background-color:#de340d;
                color:white;
                border:none;
                border-radius:5px;
                font-size: 11px;
            }
            .delete:hover {
                background-color:#b0051a;
                color: #eee;
            }
            .edit {
                padding: 10px 10px;
                background-color:#d1d1d1;
                color:black;
                border:none;
                border-radius:5px;
                font-size: 11px;
            }
            .edit:hover {
                background-color:#a3a3a3;
                color: black;
            }
            .logout {
                padding: 10px 10px;
                background-color:#d1d1d1;
                color:black;
                border:none;
                border-radius:5px;
                font-size: 15px;
            }
            .logout:hover {
                background-color:#a3a3a3;
                color: black;
            }
            .add {
                padding: 10px 10px;
                background-color:#1999d1;
                color:white;
                border:none;
                border-radius:5px;
                font-size: 15px;
            }
            .add:hover {
                background-color:#0f79a8;
                color: white;
            }
        </style>
        <script src="https://code.jquery.com/jquery-3.1.0.min.js"   integrity="sha256-cCueBR6CsyA4/9szpPfrX3s49M9vUU5BgtiJj06wt/s="   crossorigin="anonymous"></script>
    </head>
    <body>
        @yield('content')
        
        
        <script src="/js/notes.js"></script>
    </body>
</html>