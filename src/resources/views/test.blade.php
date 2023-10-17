<html>
    <head>
        @vite(['resources/js/app.js'])
    </head>
    <h1>TEST SITE</h1>
    <body>
        <div id="counter">
            count up: @{{ counter }}
        </div>
    </body>
</html>
