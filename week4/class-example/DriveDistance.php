<html>
    <head>
        <title>Distance form Chicago</title>

    </head>
    <body>
        <font size="4 color=blue">Welcome to Distance Calculator!</font>
        <br>The page that calculate distance
        <br>Select a destination
        <form action="CheckDistance.php" method="get">
            <select name="destination[]" size="5" multiple>
                <option>Boston</option>
                <option>Dallas</option>
                <option>Miami</option>
                <option>Nashville</option>
                <option>Las Vegas</option>
                <option>Pittsburgh</option>
                <option>San Francisco</option>
                <option>Toronto</option>
                <option>Washington, DC</option>
                <option>Lol</option>
            </select>
            <br>
            <input type="submit" value="submit">
            <input type="reset" value="reset">
        </form>
    </body>
</html>